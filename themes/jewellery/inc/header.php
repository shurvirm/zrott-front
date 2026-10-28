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

$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if(strpos($host, 'zrott.com') !== false){
  $isLiveLocal = 'live';
}else{
  $isLiveLocal = 'local';
}

// ── Configurable Contact Info (easy to replace for client) ──
$brand_name   = 'Aabhar Fine Jewellery';
$brand_phone  = '+91 123-456-7890';
$brand_email  = 'aabharjewellery@zrott.com';
$brand_addr   = 'Science City Road, Ahmedabad, Gujarat, India';
$brand_insta  = '@getzrott';
$brand_maps   = 'https://maps.google.com/maps?q=AS+Technolabs+-+A+Game+Development+Company';
$brand_wa     = 'https://wa.me/911234567890';
$brand_insta_url     = 'https://www.instagram.com/getzrott/';



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
        <!-- <button type="button" aria-label="Search jewellery" onclick="window.location.href='<?php echo $jw_base; ?>#categories'">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </button> -->
        <!-- <button type="button" aria-label="My Account" onclick="window.location.href='contact.php'">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </button> -->
        <button type="button" class="jw-heart jw-fav-header-btn" id="jw-fav-trigger" aria-label="Favourites" title="View Favourites">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          <span class="jw-fav-badge" id="jw-fav-header-badge" style="display:none;">0</span>
        </button>

        <!-- Mobile Menu Toggle -->
        <!-- <div class="jw-menu-toggle" aria-label="Toggle menu" role="button" tabindex="0">
          <span></span><span></span><span></span>
        </div> -->
      </div>
    </nav>
  </header>
  <div class="bottom-menu-main show-in-mobile jw-stagger">
    <div class="bottom-menu jw-reveal-bottom">
      <a href="<?php echo $jw_base; ?>/" >
        <span class="nav-icon">
          <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 9L19 17C19 18.8856 19 19.8284 18.4142 20.4142C17.8284 21 16.8856 21 15 21L14 21L10 21L9 21C7.11438 21 6.17157 21 5.58579 20.4142C5 19.8284 5 18.8856 5 17L5 9" stroke="#323232" stroke-width="2" stroke-linejoin="round"/>
            <path d="M3 11L7.5 7L10.6713 4.18109C11.429 3.50752 12.571 3.50752 13.3287 4.18109L16.5 7L21 11" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 21V17C10 15.8954 10.8954 15 12 15V15C13.1046 15 14 15.8954 14 17V21" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
        <span class="nav-txt">Home</span>
      </a>
      <a href="<?php echo $jw_base; ?>/">
        <span class="nav-icon">
          <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
        <span class="nav-txt">Location</span>
      </a>
      <a href="<?php echo $jw_base; ?>/" class="center-btn">
        <span class="nav-icon">
          <svg width="800px" height="800px" viewBox="-2.73 0 1225.016 1225.016" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"/><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084"><stop offset="0" stop-color="#20b038"/><stop offset="1" stop-color="#60d66a"/></linearGradient><path fill="url(#a)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"/><image overflow="visible" opacity=".08" width="682" height="639" xlink:href="FCC0802E2AF8A915.png" transform="translate(270.984 291.372)"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"/><path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"/></svg>
        </span>
      </a>
      <a href="<?php echo $jw_base; ?>/">
        <span class="nav-icon">
          <svg width="800px" height="800px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none"><path stroke="#000000" stroke-width="12" d="M96 162c-14.152 0-24.336-.007-32.276-.777-7.849-.761-12.87-2.223-16.877-4.741a36 36 0 0 1-11.33-11.329c-2.517-4.007-3.98-9.028-4.74-16.877C30.007 120.336 30 110.152 30 96c0-14.152.007-24.336.777-32.276.76-7.849 2.223-12.87 4.74-16.877a36 36 0 0 1 11.33-11.33c4.007-2.517 9.028-3.98 16.877-4.74C71.663 30.007 81.847 30 96 30c14.152 0 24.336.007 32.276.777 7.849.76 12.87 2.223 16.877 4.74a36 36 0 0 1 11.329 11.33c2.518 4.007 3.98 9.028 4.741 16.877.77 7.94.777 18.124.777 32.276 0 14.152-.007 24.336-.777 32.276-.761 7.849-2.223 12.87-4.741 16.877a36 36 0 0 1-11.329 11.329c-4.007 2.518-9.028 3.98-16.877 4.741-7.94.77-18.124.777-32.276.777Z"/><circle cx="96" cy="96" r="30" stroke="#000000" stroke-width="12"/><circle cx="135" cy="57" r="9" fill="#000000"/></svg>
        </span>
        <span class="nav-txt">Instagram</span>
      </a>
      <a href="javascript:void(0)">
        <span class="nav-icon">
          <!-- <svg width="800px" height="800px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
            <path fill="#000000" fill-rule="evenodd" d="M3 8a2 2 0 100 4 2 2 0 000-4zm5 2a2 2 0 114 0 2 2 0 01-4 0zm7 0a2 2 0 114 0 2 2 0 01-4 0z"/>
          </svg> -->
        <!-- Mobile Menu Toggle -->
          <div class="jw-menu-toggle" aria-label="Toggle menu" role="button" tabindex="0">
            <span></span><span></span><span></span>
          </div>

        </span>
        <span class="nav-txt">More</span>
      </a>
    </div>  
  </div>

  <!-- Mobile Navigation Panel -->
  <div class="jw-mobile-overlay " aria-hidden="true"></div>
  <nav class="jw-mobile-nav" aria-label="Mobile navigation">
    <button class="jw-menu-toggle close-menu">
      <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#0F0F0F"/>
        </svg>
    </button>
    <a href="<?php echo $jw_base; ?>">Home</a>
    <a href="<?php echo $jw_base; ?>#categories">Collections</a>
    <a href="<?php echo $jw_base; ?>#premium">Gold &amp; Diamond</a>
    <a href="<?php echo $jw_base; ?>#bridal">Bridal</a>
    <a href="<?php echo $jw_base; ?>/about">About Us</a>
    <a href="<?php echo $jw_base; ?>/contact">Contact</a>
  </nav>

  <main role="main">
