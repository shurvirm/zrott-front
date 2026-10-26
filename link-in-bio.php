<?php
$pageId = 'bio';
$which_page = "bio";
$pageTitle = 'Zrott | Bio — One Link. All Your Possibilities.';
$pageDescr = 'Create a beautiful, customizable link in bio page to share your content, products, services and capture leads — all in one link.';
$pageKeyword = 'Zrott Bio, link in bio, bio link builder, Instagram link in bio, TikTok bio link, creator tools, linktree alternative India';

include('inc/db.php');
$canonical = '<link rel="canonical" href="' . $root . '/bio" />';

include('inc/header.php');
?>

<div class="front-page-wrapper bio-page-root">
    <main>
        <!-- ═════════════════════════════════════════════════════════════════════
            1. HERO SECTION
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-hero">
            <div class="bio-hero-glow-1"></div>
            <div class="bio-hero-glow-2"></div>
            <div class="front-container bio-hero-inner">
                <!-- Left Column: Hero Text -->
                <div class="bio-hero-text">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>LINK IN BIO, BUT MORE</span>
                    </div>

                    <h1 class="bio-hero-h1">
                        One Link.<br />
                        All Your <span class="text-gradient">Possibilities.</span>
                    </h1>

                    <p class="bio-hero-sub">
                        Create a beautiful, customizable link in bio page to share your content, products,
                        services and more — all in one place.
                    </p>

                    <ul class="bio-hero-checks">
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Beautiful &amp; customizable pages</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Grow your audience and leads</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Powerful analytics and QR codes</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Use your own domain (Pro)</span>
                        </li>
                    </ul>

                    <div class="bio-hero-ctas">
                        <a href="<?php echo $contactHref; ?>" class="front-btn-primary bio-btn-glow">
                            <span>Get Started Free</span>
                            <i data-lucide="arrow-right"></i>
                        </a>
                        <a href="#templates" class="front-btn-ghost bio-btn-secondary">
                            <span>See Live Examples</span>
                        </a>
                    </div>

                    <p class="bio-hero-note">No credit card required | Free plan available</p>

                    <!-- Stats Bar -->
                    <div class="bio-stats-row">
                        <div class="bio-stat">
                            <div class="bio-stat-icon-wrap">
                                <i data-lucide="users"></i>
                            </div>
                            <div class="bio-stat-info">
                                <span class="bio-stat-num">1K+</span>
                                <span class="bio-stat-lbl">Creators &amp; Businesses</span>
                            </div>
                        </div>

                        <div class="bio-stat">
                            <div class="bio-stat-icon-wrap">
                                <i data-lucide="share-2"></i>
                            </div>
                            <div class="bio-stat-info">
                                <span class="bio-stat-num">7K+</span>
                                <span class="bio-stat-lbl">Links Shared</span>
                            </div>
                        </div>

                        <div class="bio-stat">
                            <div class="bio-stat-icon-wrap star-wrap">
                                <i data-lucide="star" style="fill: #f59e0b; color: #f59e0b;"></i>
                            </div>
                            <div class="bio-stat-info">
                                <span class="bio-stat-num">4.9/5</span>
                                <span class="bio-stat-lbl">Customer Rating</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Realistic Phone Mockup with Floating Badges -->
                <div class="bio-hero-visual">
                    <div class="bio-mockup-wrapper">
                        <!-- Floating Badge 1: Custom Domain -->
                        <div class="bio-float-badge badge-top-right">
                            <div class="bio-float-icon globe-icon">
                                <i data-lucide="globe"></i>
                            </div>
                            <div class="bio-float-text">
                                <span class="bio-float-title">Custom Domain</span>
                            </div>
                        </div>

                        <!-- Floating Badge 2: QR Code -->
                        <div class="bio-float-badge badge-mid-right">
                            <div class="bio-float-icon qr-icon">
                                <i data-lucide="qr-code"></i>
                            </div>
                            <div class="bio-float-text">
                                <span class="bio-float-title">QR Code</span>
                            </div>
                        </div>

                        <!-- Floating Badge 3: Analytics -->
                        <div class="bio-float-badge badge-bot-right">
                            <div class="bio-float-icon analytics-icon">
                                <i data-lucide="bar-chart-2"></i>
                            </div>
                            <div class="bio-float-text">
                                <span class="bio-float-title">Analytics</span>
                            </div>
                        </div>

                        <!-- Realistic Phone Body -->
                        <div class="bio-iphone-frame">
                            <div class="bio-iphone-speaker"></div>
                            <div class="bio-iphone-camera"></div>

                            <div class="bio-iphone-screen">
                                <!-- Profile Header -->
                                <div class="bio-screen-avatar-wrap">
                                    <img
                                        src="<?php echo $root; ?>/img/testi-1.webp"
                                        alt="Alex Rivera avatar"
                                        class="bio-screen-avatar"
                                    />
                                </div>
                                <p class="bio-screen-name">Alex Rivera</p>
                                <div class="bio-creator-pill">Content Creator</div>
                                <p class="bio-screen-tagline">Helping you build a better life ✨</p>

                                <!-- Bio Links -->
                                <div class="bio-screen-links">
                                    <div class="bio-screen-link-btn youtube-link">
                                        <div class="link-icon-circle yt-circle">
                                            <i data-lucide="play" style="fill: currentColor; width: 13px; height: 13px;"></i>
                                        </div>
                                        <span class="link-text">My YouTube</span>
                                        <i data-lucide="chevron-right" class="link-arrow"></i>
                                    </div>

                                    <div class="bio-screen-link-btn shop-link">
                                        <div class="link-icon-circle shop-circle">
                                            <i data-lucide="shopping-bag" style="width: 13px; height: 13px;"></i>
                                        </div>
                                        <span class="link-text">Shop My Products</span>
                                        <i data-lucide="chevron-right" class="link-arrow"></i>
                                    </div>

                                    <div class="bio-screen-link-btn call-link">
                                        <div class="link-icon-circle call-circle">
                                            <i data-lucide="phone" style="width: 13px; height: 13px;"></i>
                                        </div>
                                        <span class="link-text">Book a Call</span>
                                        <i data-lucide="chevron-right" class="link-arrow"></i>
                                    </div>

                                    <div class="bio-screen-link-btn mail-link">
                                        <div class="link-icon-circle mail-circle">
                                            <i data-lucide="mail" style="width: 13px; height: 13px;"></i>
                                        </div>
                                        <span class="link-text">My Newsletter</span>
                                        <i data-lucide="chevron-right" class="link-arrow"></i>
                                    </div>

                                    <div class="bio-screen-link-btn ig-link">
                                        <div class="link-icon-circle ig-circle"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram" aria-hidden="true"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></div>
                                        <span class="link-text">Follow on Instagram</span>
                                        <i data-lucide="chevron-right" class="link-arrow"></i>
                                    </div>
                                </div>

                                <!-- Social Row at Bottom -->
                                <div class="bio-screen-socials">
                                    <div class="bio-social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram" aria-hidden="true"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></div>
                                    <div class="bio-social-icon"><i data-lucide="play" style="fill: currentColor; width: 14px; height: 14px;"></i></div>
                                    <div class="bio-social-icon"><span style="font-size: 11px; font-weight: 800;">d</span></div>
                                    <div class="bio-social-icon"><span style="font-size: 12px; font-weight: 800;">𝕏</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═════════════════════════════════════════════════════════════════════
            2. EVERYTHING YOU NEED IN ONE LINK (FEATURES SECTION)
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-features-section" id="features">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>POWERFUL FEATURES</span>
                    </div>
                    <h2 class="section-title">
                        Everything you need in <span className="text-gradient">one link</span>
                    </h2>
                    <p class="section-subtitle">
                        Zrott | Bio gives you powerful tools to create, customize and grow your online presence.
                    </p>
                </div>

                <div class="bio-features-grid">
                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box purple">
                            <i data-lucide="palette"></i>
                        </div>
                        <h3 class="bio-feature-title">Beautiful Templates</h3>
                        <p class="bio-feature-desc">Ready-to-use, mobile optimized designs tailored for your brand.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box blue">
                            <i data-lucide="globe"></i>
                        </div>
                        <h3 class="bio-feature-title">Custom Domain</h3>
                        <p class="bio-feature-desc">Use your own domain and brand it your way with custom SSL.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box indigo">
                            <i data-lucide="layers"></i>
                        </div>
                        <h3 class="bio-feature-title">Drag &amp; Drop Editor</h3>
                        <p class="bio-feature-desc">Easily add and arrange content blocks with live preview.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box teal">
                            <i data-lucide="share-2"></i>
                        </div>
                        <h3 class="bio-feature-title">Multiple Links</h3>
                        <p class="bio-feature-desc">Share all your important links, products, and socials in one place.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box green">
                            <i data-lucide="bar-chart-2"></i>
                        </div>
                        <h3 class="bio-feature-title">Analytics</h3>
                        <p class="bio-feature-desc">Track clicks, visitors, referrers, and top performing links.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box pink">
                            <i data-lucide="qr-code"></i>
                        </div>
                        <h3 class="bio-feature-title">QR Codes</h3>
                        <p class="bio-feature-desc">Create and share beautiful customizable QR codes for offline growth.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box rose">
                            <i data-lucide="mail"></i>
                        </div>
                        <h3 class="bio-feature-title">Forms &amp; Leads</h3>
                        <p class="bio-feature-desc">Collect emails, phone numbers and grow your audience seamlessly.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box sky">
                            <i data-lucide="zap"></i>
                        </div>
                        <h3 class="bio-feature-title">Integrations</h3>
                        <p class="bio-feature-desc">Connect your favorite tools and apps to automate your workflow.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═════════════════════════════════════════════════════════════════════
            3. STUNNING TEMPLATES FOR EVERY STYLE
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-templates-section" id="templates">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>BEAUTIFUL TEMPLATES</span>
                    </div>
                    <h2 class="section-title">
                        Stunning templates for <span class="text-gradient">every style</span>
                    </h2>
                    <p class="section-subtitle">
                        Choose from professionally designed templates and make it your own. Perfect for
                        creators, businesses, freelancers and more.
                    </p>
                </div>

                <div class="bio-templates-grid">
                    <!-- Minimal Template -->
                    <div class="bio-template-card">
                        <div class="bio-template-frame">
                            <div class="bio-mini-phone bio-mini-minimal">
                                <div class="bio-mini-notch"></div>
                                <div class="bio-mini-avatar"></div>
                                <div class="bio-mini-name-bar"></div>
                                <div class="bio-mini-desc-bar"></div>
                                <div class="bio-mini-buttons">
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                </div>
                                <div class="bio-mini-socials"><span></span><span></span><span></span></div>
                            </div>
                            <div class="bio-template-overlay">
                                <a href="<?php echo $contactHref; ?>" class="bio-use-btn">
                                    <span>Use This</span>
                                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                                </a>
                            </div>
                        </div>
                        <span class="bio-template-label">Minimal</span>
                    </div>

                    <!-- Creator Template -->
                    <div class="bio-template-card">
                        <div class="bio-template-frame">
                            <div class="bio-mini-phone bio-mini-creator">
                                <div class="bio-mini-notch"></div>
                                <div class="bio-mini-avatar"></div>
                                <div class="bio-mini-name-bar"></div>
                                <div class="bio-mini-desc-bar"></div>
                                <div class="bio-mini-buttons">
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                </div>
                                <div class="bio-mini-socials"><span></span><span></span><span></span></div>
                            </div>
                            <div class="bio-template-overlay">
                                <a href="<?php echo $contactHref; ?>" class="bio-use-btn">
                                    <span>Use This</span>
                                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                                </a>
                            </div>
                        </div>
                        <span class="bio-template-label">Creator</span>
                    </div>

                    <!-- Business Template -->
                    <div class="bio-template-card">
                        <div class="bio-template-frame">
                            <div class="bio-mini-phone bio-mini-business">
                                <div class="bio-mini-notch"></div>
                                <div class="bio-mini-avatar"></div>
                                <div class="bio-mini-name-bar"></div>
                                <div class="bio-mini-desc-bar"></div>
                                <div class="bio-mini-buttons">
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                </div>
                                <div class="bio-mini-socials"><span></span><span></span><span></span></div>
                            </div>
                            <div class="bio-template-overlay">
                                <a href="<?php echo $contactHref; ?>" class="bio-use-btn">
                                    <span>Use This</span>
                                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                                </a>
                            </div>
                        </div>
                        <span class="bio-template-label">Business</span>
                    </div>

                    <!-- Dark Template -->
                    <div class="bio-template-card">
                        <div class="bio-template-frame">
                            <div class="bio-mini-phone bio-mini-dark">
                                <div class="bio-mini-notch"></div>
                                <div class="bio-mini-avatar"></div>
                                <div class="bio-mini-name-bar"></div>
                                <div class="bio-mini-desc-bar"></div>
                                <div class="bio-mini-buttons">
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                </div>
                                <div class="bio-mini-socials"><span></span><span></span><span></span></div>
                            </div>
                            <div class="bio-template-overlay">
                                <a href="<?php echo $contactHref; ?>" class="bio-use-btn">
                                    <span>Use This</span>
                                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                                </a>
                            </div>
                        </div>
                        <span class="bio-template-label">Dark</span>
                    </div>

                    <!-- Colorful Template -->
                    <div class="bio-template-card">
                        <div class="bio-template-frame">
                            <div class="bio-mini-phone bio-mini-colorful">
                                <div class="bio-mini-notch"></div>
                                <div class="bio-mini-avatar"></div>
                                <div class="bio-mini-name-bar"></div>
                                <div class="bio-mini-desc-bar"></div>
                                <div class="bio-mini-buttons">
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                    <div class="bio-mini-btn"></div>
                                </div>
                                <div class="bio-mini-socials"><span></span><span></span><span></span></div>
                            </div>
                            <div class="bio-template-overlay">
                                <a href="<?php echo $contactHref; ?>" class="bio-use-btn">
                                    <span>Use This</span>
                                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                                </a>
                            </div>
                        </div>
                        <span class="bio-template-label">Colorful</span>
                    </div>
                </div>

                <div class="bio-templates-cta">
                    <a href="<?php echo $contactHref; ?>" class="front-btn-ghost bio-btn-secondary">
                        <span>View All Templates</span>
                        <i data-lucide="arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- ═════════════════════════════════════════════════════════════════════
            4. CREATE YOUR LINK IN BIO IN 3 SIMPLE STEPS
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-steps-section">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>GET STARTED IN MINUTES</span>
                    </div>
                    <h2 class="section-title">
                        Create your link in bio in <span class="text-gradient">3 simple steps</span>
                    </h2>
                </div>

                <div class="bio-steps-grid">
                    <div class="bio-step-card">
                        <div class="bio-step-num-pill">1</div>
                        <div class="bio-step-icon-circle blue">
                            <i data-lucide="users"></i>
                        </div>
                        <h3 class="bio-step-title">Create Your Account</h3>
                        <p class="bio-step-desc">Sign up for free and set up your profile in under 2 minutes.</p>
                        <div class="bio-step-arrow-divider">
                            <i data-lucide="arrow-right"></i>
                        </div>
                    </div>

                    <div class="bio-step-card">
                        <div class="bio-step-num-pill">2</div>
                        <div class="bio-step-icon-circle purple">
                            <i data-lucide="palette"></i>
                        </div>
                        <h3 class="bio-step-title">Customize Your Page</h3>
                        <p class="bio-step-desc">Choose a template and add your links, content and brand styling.</p>
                        <div class="bio-step-arrow-divider">
                            <i data-lucide="arrow-right"></i>
                        </div>
                    </div>

                    <div class="bio-step-card">
                        <div class="bio-step-num-pill">3</div>
                        <div class="bio-step-icon-circle cyan">
                            <i data-lucide="share-2"></i>
                        </div>
                        <h3 class="bio-step-title">Share Your Link</h3>
                        <p class="bio-step-desc">Get your unique link and start sharing everywhere with one tap.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═════════════════════════════════════════════════════════════════════
            5. TURN FOLLOWERS INTO REAL OPPORTUNITIES (ANALYTICS)
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-analytics-section">
            <div class="front-container bio-analytics-inner">
                <!-- Left side: copy and checklist -->
                <div class="bio-analytics-text">
                    <div class="hero-pill-badge">
                        <i data-lucide="trending-up"></i>
                        <span>TRACK &amp; GROW</span>
                    </div>
                    <h2 class="section-title">
                        Turn followers into <span class="text-gradient">real opportunities</span>
                    </h2>
                    <p class="section-subtitle">
                        More than just links — capture leads, grow your audience and track what works with
                        powerful analytics.
                    </p>

                    <ul class="bio-analytics-checks">
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>See real-time visitor and click analytics</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Collect emails with forms</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Connect your favorite tools (Google Analytics, Meta Pixel, etc.)</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Create QR codes for offline sharing</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Use your own custom domain (Pro)</span>
                        </li>
                    </ul>

                    <div class="bio-hero-ctas">
                        <a href="<?php echo $contactHref; ?>" class="front-btn-primary bio-btn-glow">
                            <span>Get Started Free</span>
                            <i data-lucide="arrow-right"></i>
                        </a>
                        <a href="#templates" class="front-btn-ghost bio-btn-secondary">
                            <span>View Demo</span>
                        </a>
                    </div>
                </div>

                <!-- Right side: Modern Analytics Dashboard Card -->
                <div class="bio-analytics-card">
                    <!-- Card Filter Tabs -->
                    <div class="bio-chart-tabs">
                        <button class="bio-tab-btn active">7D</button>
                        <button class="bio-tab-btn">30D</button>
                        <button class="bio-tab-btn">90D</button>
                        <button class="bio-tab-btn">1Y</button>
                    </div>

                    <!-- Two key metrics -->
                    <div class="bio-metrics-split">
                        <div class="bio-metric-box">
                            <div class="bio-metric-val">1.2K</div>
                            <div class="bio-metric-lbl">Total Clicks</div>
                            <div class="bio-metric-trend">&uarr; 12%</div>
                        </div>

                        <div class="bio-metric-box">
                            <div class="bio-metric-val">843</div>
                            <div class="bio-metric-lbl">Unique Visitors</div>
                            <div class="bio-metric-trend">&uarr; 8%</div>
                        </div>
                    </div>

                    <!-- Smooth Area Chart SVG -->
                    <div class="bio-chart-graphic">
                        <svg viewBox="0 0 320 80" class="bio-chart-svg" preserveAspectRatio="none">
                            <defs>
                                <linearGradient id="chartGradient" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#7c3aed" stop-opacity="0.35" />
                                    <stop offset="100%" stop-color="#7c3aed" stop-opacity="0.0" />
                                </linearGradient>
                            </defs>
                            <path d="M0,60 C40,55 70,30 110,45 C150,60 190,15 230,30 C270,45 290,10 320,15 L320,80 L0,80 Z" fill="url(#chartGradient)"></path>
                            <path d="M0,60 C40,55 70,30 110,45 C150,60 190,15 230,30 C270,45 290,10 320,15" fill="none" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round"></path>
                        </svg>
                        <div class="bio-chart-dates">
                            <span>Apr 1</span>
                            <span>Apr 8</span>
                            <span>Apr 15</span>
                            <span>Apr 22</span>
                        </div>
                    </div>

                    <!-- Top Links Section -->
                    <div class="bio-top-links-header">
                        <span>Top Links</span>
                        <i data-lucide="chevron-right"></i>
                    </div>

                    <div class="bio-top-links-list">
                        <div class="bio-top-link-row">
                            <div class="bio-row-icon" style="background: #fee2e2;">
                                <i data-lucide="play" style="fill: #ef4444; color: #ef4444; width: 12px; height: 12px;"></i>
                            </div>
                            <span class="bio-row-title">My YouTube</span>
                            <span class="bio-row-clicks">432 clicks</span>
                            <span class="bio-row-pct">36%</span>
                        </div>
                        <div class="bio-top-link-row">
                            <div class="bio-row-icon" style="background: #fce7f3;">
                                <i data-lucide="shopping-bag" style="color: #ec4899; width: 12px; height: 12px;"></i>
                            </div>
                            <span class="bio-row-title">Shop My Products</span>
                            <span class="bio-row-clicks">298 clicks</span>
                            <span class="bio-row-pct">25%</span>
                        </div>
                        <div class="bio-top-link-row">
                            <div class="bio-row-icon" style="background: #dbeafe;">
                                <i data-lucide="phone" style="color: #3b82f6; width: 12px; height: 12px;"></i>
                            </div>
                            <span class="bio-row-title">Book a Call</span>
                            <span class="bio-row-clicks">210 clicks</span>
                            <span class="bio-row-pct">18%</span>
                        </div>
                        <div class="bio-top-link-row">
                            <div class="bio-row-icon" style="background: #ede9fe;">
                                <i data-lucide="instagram" style="color: #8b5cf6; width: 12px; height: 12px;"></i>
                            </div>
                            <span class="bio-row-title">Instagram</span>
                            <span class="bio-row-clicks">156 clicks</span>
                            <span class="bio-row-pct">13%</span>
                        </div>
                        <div class="bio-top-link-row">
                            <div class="bio-row-icon" style="background: #ffedd5;">
                                <i data-lucide="mail" style="color: #f97316; width: 12px; height: 12px;"></i>
                            </div>
                            <span class="bio-row-title">Newsletter</span>
                            <span class="bio-row-clicks">98 clicks</span>
                            <span class="bio-row-pct">8%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═════════════════════════════════════════════════════════════════════
            6. BUILT FOR CREATORS, BUSINESSES AND PROFESSIONALS
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-audience-section bg-gray">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>PERFECT FOR EVERYONE</span>
                    </div>
                    <h2 class="section-title">
                        Built for creators, businesses and professionals
                    </h2>
                    <p class="section-subtitle">
                        Whether you're a content creator, entrepreneur, freelancer or business, Zrott | Bio
                        helps you share what matters and grow your audience.
                    </p>
                </div>

                <div class="bio-audience-grid">
                    <div class="bio-persona-card">
                        <div class="bio-persona-img-box">
                            <img src="<?php echo $root; ?>/img/restaurant-400.webp" alt="Creators" />
                        </div>
                        <div class="bio-persona-content">
                            <h3 class="bio-persona-title">Creators</h3>
                            <p class="bio-persona-desc">Share your content and grow your following.</p>
                        </div>
                    </div>

                    <div class="bio-persona-card">
                        <div class="bio-persona-img-box">
                            <img src="<?php echo $root; ?>/img/retail-400.webp" alt="Small Businesses" />
                        </div>
                        <div class="bio-persona-content">
                            <h3 class="bio-persona-title">Small Businesses</h3>
                            <p class="bio-persona-desc">Showcase your services and get more customers.</p>
                        </div>
                    </div>

                    <div class="bio-persona-card">
                        <div class="bio-persona-img-box">
                            <img src="<?php echo $root; ?>/img/saloon-400.webp" alt="Freelancers" />
                        </div>
                        <div class="bio-persona-content">
                            <h3 class="bio-persona-title">Freelancers</h3>
                            <p class="bio-persona-desc">Highlight your work and get more clients.</p>
                        </div>
                    </div>

                    <div class="bio-persona-card">
                        <div class="bio-persona-img-box">
                            <img src="<?php echo $root; ?>/img/hotel-400.webp" alt="Influencers" />
                        </div>
                        <div class="bio-persona-content">
                            <h3 class="bio-persona-title">Influencers</h3>
                            <p class="bio-persona-desc">Promote your brand and collaborate seamlessly.</p>
                        </div>
                    </div>

                    <div class="bio-persona-card">
                        <div class="bio-persona-img-box">
                            <img src="<?php echo $root; ?>/img/restaurants.webp" alt="Agencies" />
                        </div>
                        <div class="bio-persona-content">
                            <h3 class="bio-persona-title">Agencies</h3>
                            <p class="bio-persona-desc">Manage multiple client bio pages in one place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═════════════════════════════════════════════════════════════════════
            8. CHOOSE THE PLAN THAT'S RIGHT FOR YOU (PRICING)
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-pricing-section" id="pricing">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>SIMPLE PRICING</span>
                    </div>
                    <h2 class="section-title">
                        Choose the plan that's <span class="text-gradient">right for you</span>
                    </h2>
                    <p class="section-subtitle">Start free and upgrade anytime. No hidden fees.</p>
                </div>

                <div class="bio-pricing-grid">
                    <!-- Free Plan -->
                    <div class="bio-pricing-card">
                        <h3 class="bio-plan-name">Free</h3>
                        <div class="bio-plan-price-row">
                            <span class="bio-price-val">$0</span>
                            <span class="bio-price-sub">/ month</span>
                        </div>
                        <ul class="bio-plan-features-list">
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>1 link page</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Basic customization</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Zrott branding</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Basic analytics</span></li>
                        </ul>
                        <a href="<?php echo $contactHref; ?>" class="bio-plan-cta-btn outline-cta">
                            <span>Get Started Free</span>
                        </a>
                    </div>

                    <!-- Pro Plan (Featured) -->
                    <div class="bio-pricing-card featured-plan">
                        <div class="bio-popular-badge">Most Popular</div>
                        <h3 class="bio-plan-name">Pro</h3>
                        <div class="bio-plan-price-row">
                            <span class="bio-price-val">$6</span>
                            <span class="bio-price-sub">/ month</span>
                        </div>
                        <ul class="bio-plan-features-list">
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Custom domain</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Advanced customization</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Analytics</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Lead forms</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Remove branding</span></li>
                        </ul>
                        <a href="<?php echo $contactHref; ?>" class="bio-plan-cta-btn primary-cta">
                            <span>Choose Pro</span>
                        </a>
                    </div>

                    <!-- Business Plan -->
                    <div class="bio-pricing-card">
                        <h3 class="bio-plan-name">Business</h3>
                        <div class="bio-plan-price-row">
                            <span class="bio-price-val">$19</span>
                            <span class="bio-price-sub">/ month</span>
                        </div>
                        <ul class="bio-plan-features-list">
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Multiple pages</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Team members</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Advanced analytics</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>API access</span></li>
                            <li><i data-lucide="check-circle-2" class="bio-check-icon"></i><span>Priority support</span></li>
                        </ul>
                        <a href="<?php echo $contactHref; ?>" class="bio-plan-cta-btn outline-cta">
                            <span>Choose Business</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═════════════════════════════════════════════════════════════════════
            9. GOT QUESTIONS? WE'VE GOT ANSWERS. (FAQS)
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-faq-section" id="faq">
            <div class="front-container">
                <div class="bio-faq-header-bar">
                    <div>
                        <div class="hero-pill-badge">
                            <i data-lucide="help-circle"></i>
                            <span>FREQUENTLY ASKED QUESTIONS</span>
                        </div>
                        <h2 class="section-title bio-faq-title">
                            Got questions?<br />We've got answers.
                        </h2>
                    </div>
                    <a href="<?php echo $contactHref; ?>" class="front-btn-ghost bio-btn-secondary faq-action-btn">
                        <span>View All FAQs</span>
                        <i data-lucide="arrow-right"></i>
                    </a>
                </div>

                <div class="bio-faq-list">
                    <div class="bio-faq-card open">
                        <div class="bio-faq-q">
                            <span>Is Zrott | Bio really free?</span>
                            <div class="bio-faq-arrow-btn rotated">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <p class="bio-faq-a">Yes! You can create your bio page, add unlimited links, and customize your theme completely free forever. Our Pro and Business plans unlock powerful extras like custom domains and deep lead collection.</p>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Can I use my own domain?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <p class="bio-faq-a">Absolutely. On the Pro and Business plans you can easily connect your own custom domain (e.g., links.yourbrand.com) with free automatic SSL certificates.</p>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Can I remove Zrott branding?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <p class="bio-faq-a">Yes! Upgrading to the Pro or Business plan gives you the option to hide the "Powered by Zrott" badge for a 100% white-label personal look.</p>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Can I track analytics?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <p class="bio-faq-a">Yes. Free accounts see real-time link clicks. Pro and Business accounts get comprehensive insights including unique visitors, countries, referrers, and device breakdowns.</p>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Can I collect emails from visitors?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <p class="bio-faq-a">Yes! Add a newsletter or contact lead form block to capture subscribers and sync them directly with Mailchimp, ConvertKit, or your favorite CRM.</p>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Can I change templates later?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <p class="bio-faq-a">Whenever you want! Switch themes, tweak palettes, or adjust typography at any time without losing any of your existing links or analytics data.</p>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Do you offer refunds?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <p class="bio-faq-a">We offer a 14-day money-back guarantee on all paid plans. If you are not completely satisfied, reach out to our team for a no-questions-asked refund.</p>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Is there a limit on links or pages?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <p class="bio-faq-a">There is no limit on the number of links you can add on any plan! Free and Pro plans include one bio page, while Business lets you build and manage multiple pages for different projects or clients.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═════════════════════════════════════════════════════════════════════
            10. CREATE YOUR LINK IN BIO TODAY (BOTTOM CTA BANNER)
        ══════════════════════════════════════════════════════════════════════ -->
        <section class="bio-cta-section">
            <div class="bio-cta-doodle doodle-left">
                <svg viewBox="0 0 140 100" fill="none" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round">
                    <path d="M10,80 C30,90 40,30 70,50 C100,70 110,20 130,40" opacity="0.4" />
                </svg>
            </div>
            <div class="bio-cta-doodle doodle-right">
                <svg viewBox="0 0 140 100" fill="none" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round">
                    <path d="M10,20 C30,40 50,10 80,60 C110,90 120,30 135,70" opacity="0.4" />
                </svg>
            </div>

            <div class="front-container bio-cta-inner">
                <div class="hero-pill-badge">
                    <i data-lucide="sparkles" width="13" height="13"></i>
                    <span>READY TO GET STARTED?</span>
                </div>

                <h2 class="bio-cta-h2">Create your link in bio today</h2>

                <p class="bio-cta-sub">
                    Join thousands of creators and businesses already using Zrott | Bio to share their
                    world in one link.
                </p>

                <a href="<?php echo $contactHref; ?>" class="front-btn-primary bio-btn-glow" style="font-size: 1rem; padding: 14px 32px;">
                    <span>Get Started Free</span>
                    <i data-lucide="arrow-right"></i>
                </a>

                <p class="bio-cta-note">No credit card required | Free plan available</p>

                <div class="bio-cta-proof">
                    <div class="bio-avatar-stack">
                        <img src="<?php echo $root; ?>/img/testi-1.webp" alt="Creator 1" />
                        <img src="<?php echo $root; ?>/img/testi-2.webp" alt="Creator 2" />
                        <img src="<?php echo $root; ?>/img/testi-3.webp" alt="Creator 3" />
                        <img src="<?php echo $root; ?>/img/restaurant-400.webp" alt="Creator 4" />
                    </div>
                    <div class="bio-proof-stars">
                        <div class="stars-row">
                            <i data-lucide="star" style="fill: #f59e0b; color: #f59e0b; width: 15px; height: 15px;"></i>
                            <i data-lucide="star" style="fill: #f59e0b; color: #f59e0b; width: 15px; height: 15px;"></i>
                            <i data-lucide="star" style="fill: #f59e0b; color: #f59e0b; width: 15px; height: 15px;"></i>
                            <i data-lucide="star" style="fill: #f59e0b; color: #f59e0b; width: 15px; height: 15px;"></i>
                            <i data-lucide="star" style="fill: #f59e0b; color: #f59e0b; width: 15px; height: 15px;"></i>
                        </div>
                        <span class="bio-proof-caption">
                            Trusted by 10,000+ creators and businesses
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('inc/footer.php'); ?>
</div>
