
<?php
/*
 * Zrott Static Site Exporter
 * Requirements: PHP 8+, cURL, DOM, ZipArchive.
 *
 * IMPORTANT:
 * Protect this script with authentication or IP restrictions.
 * Remove it from production after exporting.
 */

set_time_limit(300);
ini_set('memory_limit', '256M');

$error = '';
$done = false;

function fetchPage(string $url): ?string {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 5,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_USERAGENT => 'ZrottStaticExporter/1.0',
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2,
    ]);

    $body = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE) ?: '';
    curl_close($ch);

    if ($body === false || $status < 200 || $status >= 300) {
        return null;
    }

    if (stripos($type, 'text/html') === false &&
        stripos($type, 'application/xhtml+xml') === false) {
        return null;
    }

    return $body;
}

function normalizeUrl(string $url, string $base): ?string {
    $url = trim(html_entity_decode($url));
    if ($url === '' || preg_match('/^(#|mailto:|tel:|javascript:|data:)/i', $url)) {
        return null;
    }

    $b = parse_url($base);
    if (!$b || empty($b['host'])) return null;

    if (str_starts_with($url, '//')) {
        $url = ($b['scheme'] ?? 'https') . ':' . $url;
    } elseif (str_starts_with($url, '/')) {
        $url = ($b['scheme'] ?? 'https') . '://' . $b['host'] . $url;
    } elseif (!preg_match('~^https?://~i', $url)) {
        $dir = rtrim(dirname($b['path'] ?? '/'), '/');
        $url = ($b['scheme'] ?? 'https') . '://' . $b['host']
             . ($dir ? $dir . '/' : '/') . $url;
    }

    $p = parse_url($url);
    if (!$p || !in_array(strtolower($p['scheme'] ?? ''), ['http', 'https'], true)) {
        return null;
    }

    // Restrict crawling to the supplied host.
    if (strtolower($p['host'] ?? '') !== strtolower($b['host'])) {
        return null;
    }

    $path = $p['path'] ?? '/';
    $segments = [];
    foreach (explode('/', $path) as $segment) {
        if ($segment === '' || $segment === '.') continue;
        if ($segment === '..') {
            array_pop($segments);
        } else {
            $segments[] = $segment;
        }
    }

    $path = '/' . implode('/', $segments);
    if (str_ends_with($p['path'] ?? '/', '/') && $path !== '/') {
        $path .= '/';
    }

    // Query variants are treated as separate crawl candidates,
    // but exported to the same path. Prefer clean, canonical URLs.
    return ($p['scheme'] ?? 'https') . '://' . strtolower($p['host']) . $path;
}

function outputPath(string $url, string $root): string {
    $path = parse_url($url, PHP_URL_PATH) ?: '/';

    if ($path === '/') {
        return $root . '/index.html';
    }

    // Do not allow PHP scripts or other executable files in export.
    if (preg_match('/\.(php|phtml|phar)$/i', $path)) {
        $path = preg_replace('/\.(php|phtml|phar)$/i', '', $path);
    }

    if (str_ends_with($path, '/')) {
        $path .= 'index.html';
    } elseif (!preg_match('/\.[a-z0-9]{1,8}$/i', basename($path))) {
        $path .= '/index.html';
    }

    return $root . '/' . ltrim($path, '/');
}

function extractLinks(string $html, string $pageUrl): array {
    $links = [];
    libxml_use_internal_errors(true);
    $dom = new DOMDocument();

    if (!$dom->loadHTML($html)) return [];
    foreach ($dom->getElementsByTagName('a') as $a) {
        $href = $a->getAttribute('href');
        $url = normalizeUrl($href, $pageUrl);
        if ($url) $links[] = $url;
    }

    // Include canonical URLs when they point to this host.
    foreach ($dom->getElementsByTagName('link') as $link) {
        if (strtolower($link->getAttribute('rel')) === 'canonical') {
            $url = normalizeUrl($link->getAttribute('href'), $pageUrl);
            if ($url) $links[] = $url;
        }
    }

    libxml_clear_errors();
    return array_values(array_unique($links));
}

function sitemapUrls(string $url): array {
    $xml = fetchPage($url);
    if (!$xml) return [];

    libxml_use_internal_errors(true);
    $doc = simplexml_load_string($xml);
    if (!$doc) return [];

    $urls = [];
    $rootName = $doc->getName();

    // Support sitemap indexes as well as regular sitemaps.
    if ($rootName === 'sitemapindex') {
        foreach ($doc->sitemap as $map) {
            $child = (string)$map->loc;
            if ($child) {
                $urls = array_merge($urls, sitemapUrls($child));
            }
        }
    } elseif ($rootName === 'urlset') {
        foreach ($doc->url as $item) {
            $loc = (string)$item->loc;
            if ($loc) $urls[] = $loc;
        }
    }

    libxml_clear_errors();
    return $urls;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $start = trim($_POST['start_url'] ?? '');
        $map = trim($_POST['sitemap_url'] ?? '');
        $manual = trim($_POST['manual_urls'] ?? '');
        $max = max(1, min(2000, (int)($_POST['max_pages'] ?? 300)));

        if (!filter_var($start, FILTER_VALIDATE_URL) ||
            !in_array(parse_url($start, PHP_URL_SCHEME), ['http', 'https'], true)) {
            throw new RuntimeException('Enter a valid website URL.');
        }

        if (!extension_loaded('curl') ||
            !class_exists('DOMDocument') ||
            !class_exists('ZipArchive')) {
            throw new RuntimeException('This server needs cURL, DOM and ZipArchive enabled.');
        }

        $host = strtolower(parse_url($start, PHP_URL_HOST));
        $base = parse_url($start, PHP_URL_SCHEME) . '://' . $host;
        $start = normalizeUrl($start, $start);

        if (!$start) throw new RuntimeException('Invalid start URL.');

        $seeds = [$start];

        if ($map !== '') {
            if (!filter_var($map, FILTER_VALIDATE_URL) ||
                strtolower(parse_url($map, PHP_URL_HOST) ?? '') !== $host) {
                throw new RuntimeException('Sitemap must use the same hostname.');
            }
            $seeds = array_merge($seeds, sitemapUrls($map));
        } else {
            $seeds = array_merge($seeds, sitemapUrls($base . '/sitemap.xml'));
        }

        foreach (preg_split('/\R/', $manual) as $line) {
            $line = trim($line);
            if ($line !== '') $seeds[] = normalizeUrl($line, $start);
        }

        $queue = [];
        foreach ($seeds as $url) {
            $url = normalizeUrl((string)$url, $start);
            if ($url && !isset($queue[$url])) $queue[$url] = true;
        }

        $folder = sys_get_temp_dir() . '/zrott-export-' . bin2hex(random_bytes(5));
        mkdir($folder, 0755, true);

        $zipPath = sys_get_temp_dir() . '/zrott-static-' . bin2hex(random_bytes(5)) . '.zip';
        $zip = new ZipArchive();

        if ($zip->open($zipPath, ZipArchive::CREATE) !== true) {
            throw new RuntimeException('Unable to create ZIP file.');
        }

        $visited = [];
        $failures = [];
        $exported = [];

        while ($queue && count($visited) < $max) {
            $url = array_key_first($queue);
            unset($queue[$url]);

            if (isset($visited[$url])) continue;
            $visited[$url] = true;

            // Ignore obvious non-page URLs.
            $path = parse_url($url, PHP_URL_PATH) ?: '/';
            if (preg_match('/\.(pdf|jpg|jpeg|png|gif|webp|svg|css|js|zip|xml|json|php)$/i', $path)) {
                continue;
            }

            $html = fetchPage($url);
            if ($html === null) {
                $failures[] = $url;
                continue;
            }

            $file = outputPath($url, $folder);
            $relative = ltrim(substr($file, strlen($folder)), '/');
            $dir = dirname($file);

            if (!is_dir($dir)) mkdir($dir, 0755, true);

            if (file_put_contents($file, $html) === false) {
                $failures[] = $url;
                continue;
            }

            $exported[] = $url;

            foreach (extractLinks($html, $url) as $link) {
                if (!isset($visited[$link]) && !isset($queue[$link])) {
                    $queue[$link] = true;
                }
            }
        }

        foreach (new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($folder, FilesystemIterator::SKIP_DOTS)
        ) as $file) {
            if ($file->isFile()) {
                $relative = substr($file->getPathname(), strlen($folder) + 1);
                $zip->addFile($file->getPathname(), $relative);
            }
        }

        $zip->addFromString('export-report.txt',
            "Exported pages: " . count($exported) . "\n" .
            "Failed URLs: " . count($failures) . "\n\n" .
            "EXPORTED:\n" . implode("\n", $exported) .
            "\n\nFAILED:\n" . implode("\n", $failures) . "\n"
        );

        $zip->close();

        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="zrott-static-export.zip"');
        header('Content-Length: ' . filesize($zipPath));
        readfile($zipPath);
        @unlink($zipPath);

        // This script does not recursively delete files.
        exit;
    } catch (Throwable $e) {
        $error = $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zrott Static Exporter</title>
<style>
body{font:16px system-ui,sans-serif;max-width:760px;margin:40px auto;padding:0 18px;color:#172033}
label{display:block;margin-top:18px;font-weight:600}
input,textarea{box-sizing:border-box;width:100%;padding:12px;margin-top:6px;border:1px solid #ccd2dc;border-radius:8px}
button{margin-top:22px;padding:13px 20px;background:#2563eb;color:white;border:0;border-radius:8px;font-weight:700;cursor:pointer}
.note{background:#fff7dd;padding:14px;border-radius:8px}
.error{background:#fee2e2;padding:12px;border-radius:8px}
</style>
</head>
<body>
<h1>Zrott Static Website Exporter</h1>
<p>Export public, same-domain pages into a ZIP of HTML files.</p>
<p class="note"><strong>Security:</strong> Protect this tool from public access. Remove it after use. Only run it against a site you control.</p>
<?php if ($error): ?>
<p class="error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
<?php endif; ?>
<form method="post">
<label>Website URL</label>
<input name="start_url" type="url" required
 value="<?= htmlspecialchars($_POST['start_url'] ?? 'https://zrott.com', ENT_QUOTES, 'UTF-8') ?>">

<label>Sitemap URL (optional)</label>
<input name="sitemap_url" type="url"
 placeholder="https://zrott.com/sitemap.xml"
 value="<?= htmlspecialchars($_POST['sitemap_url'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

<label>Additional URLs (one per line)</label>
<textarea name="manual_urls" rows="6"
 placeholder="https://zrott.com/about/&#10;https://zrott.com/pricing/"><?= htmlspecialchars($_POST['manual_urls'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>

<label>Maximum pages to crawl (1–2000)</label>
<input name="max_pages" type="number" min="1" max="2000"
 value="<?= htmlspecialchars($_POST['max_pages'] ?? '300', ENT_QUOTES, 'UTF-8') ?>">

<button type="submit">Export Website ZIP</button>
</form>
</body>
</html>
