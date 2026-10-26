<?php
/**
 * Common Hero Section for supporting pages (Portfolio, About, etc.)
 */
$hero_title = $hero_title ?? "Our Portfolio";
$hero_subtitle = $hero_subtitle ?? "Engineering excellence across industries.";
$hero_accent = $hero_accent ?? "purple"; // purple, teal, orange, etc.
$hero_breadcrumbs = $hero_breadcrumbs ?? []; // Array of ['label' => 'Home', 'url' => 'index.php']
?>

<section class="common-hero">
    <div class="hero-grid-overlay"></div>
    <div class="common-hero-blob blob-1 <?php echo $hero_accent; ?>"></div>
    <div class="common-hero-blob blob-2 <?php echo $hero_accent; ?>"></div>

    <div class="container container-hero-common">
        <div class="hero-common-content text-center">
            <?php if (!empty($hero_breadcrumbs)): ?>
                <nav class="breadcrumb-nav mb-3">
                    <ol class="breadcrumb justify-content-center">
                        <?php foreach ($hero_breadcrumbs as $crumb): ?>
                            <?php if ($crumb['url'] != '') { ?>
                                <li class="breadcrumb-item">
                                    <a href="<?php echo $crumb['url']; ?>"><?php echo $crumb['label']; ?></a>
                                </li>
                            <?php } else { ?>
                                <li class="breadcrumb-item active"><?php echo $crumb['label']; ?></li>
                            <?php } ?>
                        <?php endforeach; ?>

                    </ol>
                </nav>

                <!-- Google Breadcrumb Schema -->
                <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "BreadcrumbList",
                    "itemListElement": [
                    <?php
                    $schema_items = [];
                    $pos = 1;
                    foreach ($hero_breadcrumbs as $c) {
                        if ($c['url'] != '') {
                            $schema_items[] = '{"@type": "ListItem", "position": ' . $pos . ', "name": "' . addslashes($c['label']) . '", "item": "' . addslashes($c['url']) . '"}';
                        } else {
                            $schema_items[] = '{"@type": "ListItem", "position": ' . $pos . ', "name": "' . addslashes($c['label']) . '"}';
                        }
                        $pos++;
                    }
                    echo implode(",\n                    ", $schema_items);
                    ?>
                    ]
                }
                </script>
            <?php endif; ?>

            <h1 class="hero-common-title">
                <?php echo $hero_title; ?>
            </h1>
            <p class="hero-common-subtitle">
                <?php echo $hero_subtitle; ?>
            </p>
        </div>
    </div>
</section>