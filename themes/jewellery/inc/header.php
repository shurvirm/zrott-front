<?php
/**
 * Aabhar Fine Jewellery — Header
 * Includes: Announcement bar, Logo, Nav, Mobile menu
 */

// Determine theme base URL dynamically
// Works whether accessed as /themes/jewellery/index.php or via rewrite
$jw_script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$jw_base = rtrim($jw_script_dir, '/');  // e.g. /themes/jewellery
if (!isset($theme_base)) $theme_base = $jw_base ;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- SEO: noindex for demo -->
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">

  <title><?php echo htmlspecialchars($pageTitle ?? 'Aabhar Fine Jewellery — Jewellery that Celebrates Ahmedabad'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescr ?? 'Discover timeless gold, diamond & silver jewellery crafted with authentic Ahmedabad heritage. Aabhar Fine Jewellery — for every special moment.'); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords ?? 'jewellery Ahmedabad, gold jewellery, diamond jewellery, bridal jewellery, temple jewellery, silver jewellery, Indian jewellery, Aabhar'); ?>">
  <meta name="author" content="Aabhar Fine Jewellery">
  <meta name="theme-color" content="#103D2F">

  <!-- Canonical -->
  <?php if (!empty($canonical)) echo $canonical; ?>

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle ?? 'Aabhar Fine Jewellery — Jewellery that Celebrates Ahmedabad'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescr ?? 'Discover timeless gold, diamond & silver jewellery crafted with authentic Ahmedabad heritage.'); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage ?? ''); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($current_url ?? ''); ?>">
  <meta property="og:site_name" content="Aabhar Fine Jewellery">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle ?? 'Aabhar Fine Jewellery'); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescr ?? ''); ?>">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">{
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "JewelryStore",
        "@id": "<?php echo $current_domain ?? '#'; ?>#organization",
        "name": "Aabhar Fine Jewellery",
        "url": "<?php echo $current_domain ?? ''; ?>",
        "description": "Premium Indian jewellery store in Ahmedabad, Gujarat. Specializing in gold, diamond, silver, bridal and temple jewellery with authentic craftsmanship.",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Science City Road",
          "addressLocality": "Ahmedabad",
          "addressRegion": "Gujarat",
          "postalCode": "380009",
          "addressCountry": "IN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "23.0258",
          "longitude": "72.5574"
        },
        "telephone": "+91-123-456-7890",
        "priceRange": "₹₹₹",
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
          "opens": "10:00",
          "closes": "20:00"
        },
        "sameAs": [
          "https://www.instagram.com/getzrott",
          "https://www.facebook.com/getzrott"
        ]
      },
      {
        "@type": "WebSite",
        "@id": "<?php echo $current_domain ?? '#'; ?>#website",
        "url": "<?php echo $current_domain ?? ''; ?>",
        "name": "Aabhar Fine Jewellery",
        "publisher": { "@id": "<?php echo $current_domain ?? '#'; ?>#organization" }
      },
      {
        "@type": "WebPage",
        "@id": "<?php echo $current_url ?? '#'; ?>#webpage",
        "url": "<?php echo $current_url ?? ''; ?>",
        "name": "<?php echo htmlspecialchars($pageTitle ?? 'Aabhar Fine Jewellery'); ?>",
        "isPartOf": { "@id": "<?php echo $current_domain ?? '#'; ?>#website" },
        "about": { "@id": "<?php echo $current_domain ?? '#'; ?>#organization" },
        "description": "<?php echo htmlspecialchars($pageDescr ?? ''); ?>"
      }
    ]
  }</script>
  <?php if (!empty($schema_tags)) echo $schema_tags; ?>

  <!-- Preload critical font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php echo $jw_base; ?>/css/style.css">
</head>
<body>

  <!-- ═══ HEADER ═══ -->
  <header class="jw-header" role="banner">
    <!-- Announcement Bar -->
    <div class="jw-announce-bar">
      <span>
        <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor" style="vertical-align:-1px;display:inline-block;"><polygon points="12 2 15 9 22 12 15 15 12 22 9 15 2 12 9 9"/></svg>
        Free Personalised Consultation on All Orders — <strong>Visit Our Ahmedabad Store</strong>
        <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor" style="vertical-align:-1px;display:inline-block;"><polygon points="12 2 15 9 22 12 15 15 12 22 9 15 2 12 9 9"/></svg>
      </span>
    </div>

    <!-- Navigation Bar -->
    <nav class="jw-navbar" aria-label="Main navigation">
      <!-- Logo -->
      <a href="<?php echo $jw_base; ?>" class="jw-logo" aria-label="Aabhar Fine Jewellery — Home">
        <div class="jw-logo-icon" aria-hidden="true"></div>
        <div class="jw-logo-text">
          <span class="jw-logo-brand">Aabhar</span>
          <span class="jw-logo-sub">Fine Jewellery</span>
        </div>
      </a>

      <!-- Desktop Navigation -->
      <div class="jw-nav">
        <a href="<?php echo $jw_base; ?>">Home</a>
        <a href="<?php echo $jw_base; ?>#categories">Collections</a>
        <a href="<?php echo $jw_base; ?>#premium">Gold</a>
        <a href="<?php echo $jw_base; ?>#premium">Diamond</a>
        <a href="<?php echo $jw_base; ?>#premium">Silver</a>
        <a href="<?php echo $jw_base; ?>#bridal">Bridal</a>
        <a href="<?php echo $jw_base; ?>/about">About Us</a>
        <a href="<?php echo $jw_base; ?>/contact">Contact</a>
      </div>

      <!-- Action Icons -->
      <div class="jw-nav-actions">
        <button type="button" aria-label="Search jewellery" onclick="window.location.href='<?php echo $jw_base; ?>#categories'">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </button>
        <button type="button" aria-label="My Account" onclick="window.location.href='contact.php'">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </button>
        <button type="button" class="jw-heart jw-fav-header-btn" id="jw-fav-trigger" aria-label="Favourites" title="View Favourites">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          <span class="jw-fav-badge" id="jw-fav-header-badge" style="display:none;">0</span>
        </button>

        <!-- Mobile Menu Toggle -->
        <div class="jw-menu-toggle" aria-label="Toggle menu" role="button" tabindex="0">
          <span></span><span></span><span></span>
        </div>
      </div>
    </nav>
  </header>

  <!-- Mobile Navigation Panel -->
  <div class="jw-mobile-overlay" aria-hidden="true"></div>
  <nav class="jw-mobile-nav" aria-label="Mobile navigation">
    <a href="<?php echo $jw_base; ?>">Home</a>
    <a href="<?php echo $jw_base; ?>#categories">Collections</a>
    <a href="<?php echo $jw_base; ?>#premium">Gold &amp; Diamond</a>
    <a href="<?php echo $jw_base; ?>#bridal">Bridal</a>
    <a href="<?php echo $jw_base; ?>/about">About Us</a>
    <a href="<?php echo $jw_base; ?>/contact">Contact</a>
  </nav>

  <main role="main">
