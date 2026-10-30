<!doctype html>
<html lang="en" data-theme="light">

    <head>
        <meta charset="utf-8" />
        <title><?php echo $pageTitle ?? ($site_name . ' — Unified Growth Platform: Bio, CRM & Websites for Modern Businesses'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php echo $pageDescr ?? $ogDescr; ?>" />
        <meta name="keywords" content="<?php echo $pageKeyword ?? $keywords; ?>" />
        <?php
        if (isset($robots)) {
            echo $robots;
        } else {
            echo '<meta name="robots" content="index, follow" />';
        }
        ?>
        <meta content="<?php echo $site_name; ?>" name="author" />
        <meta content="<?php echo $site_email; ?>" name="Email" />
        <meta content="<?php echo $current_domain; ?>" name="Website" />

        <!-- OpenGraph -->
        <meta property="og:site_name" content="<?php echo $site_name; ?>">
        <meta property="og:title" content="<?php echo $pageTitle ?? $site_name; ?>" />
        <meta property="og:type" content="website" />
        <?php if($pageId == 'contact'){ ?>
            <meta property="og:url" content="<?php echo $root; ?>/contact" />
        <?php }else{ ?>
            <meta property="og:url" content="<?php echo $current_url; ?>" />
        <?php } ?>
        
        <meta property="og:image" itemprop="image" content="<?php echo $seo_logo; ?>" />
        <meta property="og:image:alt" content="<?php echo $pageTitle ?? $site_name; ?>" />
        <meta property="og:description" content="<?php echo $pageDescr ?? $ogDescr; ?>" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo $pageTitle ?? $site_name; ?>">
        <meta name="twitter:description" content="<?php echo $pageDescr ?? $ogDescr; ?>">
        <meta name="twitter:image" content="<?php echo $seo_logo; ?>">

        <!-- Geo Location -->
        <meta name="geo.region" content="IN-GJ" />
        <meta name="geo.placename" content="Gujarat, India" />
        <meta name="geo.position" content="23.0225;72.5714" />
        <meta name="ICBM" content="23.0225, 72.5714" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="<?php echo $root; ?>/img/logo.webp" />
        <link rel="shortcut icon" href="<?php echo $root; ?>/img/favicon.ico">
        <link rel="icon" href="<?php echo $root; ?>/img/favicon.ico" type="image/x-icon" />

        <?php
        if (isset($canonical)) {
            echo $canonical;
        } else {
            echo '<link rel="canonical" href="' . $current_url . '" />';
        }
        ?>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link href="<?php echo $root; ?>/css/bootstrap-5.3.8.min.css" rel="stylesheet" />
        <link href="<?php echo $root; ?>/css/theme-tokens.css" rel="stylesheet" />
        <link href="<?php echo $root; ?>/css/index.css" rel="stylesheet" />
        <link href="<?php echo $root; ?>/css/front.css?=1" rel="stylesheet" />
        <link href="<?php echo $root; ?>/css/bio.css?=1" rel="stylesheet" />

        <!-- Pre-paint Theme Init (Avoid Flicker) -->
        <script>
            (function () {
                try {
                    var saved = localStorage.getItem('zrott_theme') || 'light';
                    document.documentElement.setAttribute('data-theme', saved);
                } catch (e) {}
            })();
        </script>

        <?php if($isLiveLocal == 'live'): ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LR1FSTMJ6H"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-LR1FSTMJ6H');
        </script>
        <?php endif; ?>

        <!-- Iconify -->
        <script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>

        <?php
        echo $default_schema_tags ?? '';
        if (isset($schema_tags)) {
            echo $schema_tags;
        }
        ?>
    </head>

    <body class="body-<?php echo $pageId ?? 'page'; ?>">
        <header class="front-header">
            <div class="front-nav-container">
                <!-- Brand Logo -->
                <a href="<?php echo $root; ?>/" class="front-logo ms-2">
                    <img src="<?php echo $root; ?>/img/logo.webp" alt="Zrott Logo" title="Zrott" class="logo img-fluid" />
                </a>

                <!-- Desktop Navigation -->
                <nav class="front-desktop-nav">
                    <a href="<?php echo $root; ?>/" class="nav-link <?php echo (($pageId ?? '') === 'index') ? 'active' : ''; ?>">Home</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="display: flex;align-items: center;gap: 4px;">
                            Products <iconify-icon icon="solar:alt-arrow-down-linear" class="dropdown-icon"></iconify-icon>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-center animate slideIn">
                            <li>
                                <a class="dropdown-item" href="/crm-for-restaurants/">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="dd-icon teal"><iconify-icon icon="solar:settings-bold"></iconify-icon></div>
                                        <div>
                                            <div class="dd-title">Zrott | CRM</div>
                                            <div class="dd-desc">Complete restaurant operating system with live Kitchen Display</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/website">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="dd-icon orange"><iconify-icon icon="solar:laptop-minimalistic-bold"></iconify-icon></div>
                                        <div>
                                            <div class="dd-title">Zrott | Website</div>
                                            <div class="dd-desc">Build beautiful, websites in minutes</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/link-in-bio">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="dd-icon purple"><iconify-icon icon="solar:user-bold"></iconify-icon></div>
                                        <div>
                                            <div class="dd-title">Zrott | Link in Bio</div>
                                            <div class="dd-desc">Manage all your social links in one place</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $root; ?>/retail-business-online">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="dd-icon pink"><iconify-icon icon="solar:shop-minimalistic-bold"></iconify-icon></div>
                                        <div>
                                            <div class="dd-title">Zrott | Retail</div>
                                            <div class="dd-desc">Make your Local Kirana store to Digital</div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <a href="<?php echo $root; ?>/about" class="nav-link <?php echo (($pageId ?? '') === 'about') ? 'active' : ''; ?>">About</a>
                    <a href="<?php echo $contactHref; ?>" class="nav-link <?php echo (($pageId ?? '') === 'contact') ? 'active' : ''; ?>">Contact</a>
                </nav>

                <!-- Action Buttons -->
                <div class="front-nav-actions">
                    <!-- Light / Dark Mode Toggle -->
                    <button type="button" class="d-none theme-toggle-btn theme-toggle-icon" id="themeToggleBtn" aria-label="Toggle dark mode" title="Toggle dark mode">
                        <i data-lucide="moon" class="moon-icon icon-dark"></i>
                        <i data-lucide="sun" class="sun-icon icon-light"></i>
                    </button>

                    <a href="<?php echo $contactHref; ?>" class="front-btn-primary d-none d-md-flex">
                        <span>Get Started</span>
                        <i data-lucide="arrow-right"></i>
                    </a>

                    <!-- Mobile Menu Button -->
                    <button class="mobile-toggle-btn" id="mobileMenuBtn" type="button" aria-label="Toggle navigation menu">
                        <i data-lucide="menu" id="menuOpenIcon"></i>
                        <i data-lucide="x" id="menuCloseIcon" style="display: none;"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Drawer -->
            <div class="mobile-nav-drawer" id="mobileNavDrawer" style="display: none;">
                <div class="mobile-links">
                    <a href="<?php echo $root; ?>/" class="mobile-nav-link">Home</a>
                    <div class="mobile-solutions-header">Solutions</div>
                    <a href="<?php echo $root; ?>/crm-for-restaurants" class="mobile-solution-link">Restaurants &amp; Cafes</a>
                    <a href="<?php echo $root; ?>/retail-business-online" class="mobile-solution-link">Retail &amp; Local Business</a>
                    <a href="<?php echo $root; ?>/link-in-bio" class="mobile-solution-link">Creators &amp; Brands (Bio)</a>
                    <a href="<?php echo $root; ?>/website" class="mobile-solution-link">Instant Subdomain Websites</a>
                    <a href="<?php echo $root; ?>/about" class="mobile-nav-link">About</a>
                    <a href="<?php echo $contactHref; ?>" class="mobile-nav-link">Contact</a>
                </div>
                <div class="mobile-actions">
                    <div style="display: none; align-items: center; justify-content: space-between; width: 100%; padding: 0 4px; margin-bottom: 8px;">
                        <span style="font-size: 0.9rem; font-weight: 600;">Theme</span>
                        <button type="button" class="theme-toggle-btn shadow-none theme-toggle-pill" id="themeTogglePillMobile">
                            <i data-lucide="moon" class="moon-icon icon-dark"></i>
                            <i data-lucide="sun" class="sun-icon icon-light"></i>
                        </button>
                    </div>
                    <a href="<?php echo $contactHref; ?>" class="mobile-btn-primary">
                        Get Started
                    </a>
                </div>
            </div>
        </header>