<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

date_default_timezone_set('Asia/Kolkata');

$site_name = 'Zrott';
$site_name_space = 'Zrott';
$site_tagline = 'Unified Growth Platform: Bio, CRM & Websites for Modern Businesses';
$keywords = $pageKeyword ?? 'Zrott, restaurant CRM, QR menu ordering, Kitchen Display System, KDS, link in bio, salon booking software, table reservation system, digital catalog, business website builder, India local commerce';
$ogDescr = $pageDescr = $pageDescr ?? "Empower your brand and business with Zrott. Link in bio pages, restaurant CRM & KDS ordering systems, and instant subdomain business websites.";
$site_email = 'hi@zrott.com';
$site_phone = '9904578948';
$site_phone_display = '+91 99045 78948';
$site_whatsapp = 'https://wa.me/919904578948';
$site_address = 'Gujarat, India (Operating Worldwide)';
$site_lang = 'en';

$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'zrott.com';
$root = $protocol . $host;
$current_domain = $root . '/';
$current_url = $root . ($_SERVER['REQUEST_URI'] ?? '/');
$seo_logo = $root . '/img/zrott-crm-link-in-bio-websites.webp';
$ogImage = $seo_logo;
$favicon_hd = $root . '/img/logo.webp';

// Dynamic contact link depending on originating page
$current_from = $pageId ?? 'home';
if ($current_from === 'index') {
    $current_from = 'home';
}
if ($current_from === 'contact') {
    $contactHref = $root . '/contact';
} else {
    $contactHref = $root . '/contact?from=' . urlencode($current_from);
}

$default_schema_tags = '<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://zrott.com/#organization",
      "name": "' . $site_name . '",
      "url": "' . $current_domain . '",
      "logo": "' . $root . '/img/logo.webp",
      "description": "' . addslashes($site_tagline) . '",
      "foundingDate": "2024",
      "address": {
        "@type": "PostalAddress",
        "addressRegion": "Gujarat",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-99045-78948",
        "contactType": "sales and customer support",
        "availableLanguage": ["English", "Hindi", "Gujarati"],
        "areaServed": ["IN", "Worldwide"]
      },
      "sameAs": [
        "https://wa.me/919904578948"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://zrott.com/#website",
      "url": "' . $current_domain . '",
      "name": "' . $site_name . '",
      "publisher": {
        "@id": "https://zrott.com/#organization"
      }
    }
  ]
}</script>';
?>