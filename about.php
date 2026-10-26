<?php
$pageId = 'about';
$which_page = "about";
$pageTitle = 'About Us — Empowering Local Businesses to Thrive | Zrott';
$pageDescr = 'Discover the story behind Zrott. Built to democratize enterprise-grade digital ordering, QR menus, and customer loyalty for restaurants, salons, and retail shops.';
$pageKeyword = 'about Zrott, local commerce platform, restaurant tech, salon booking software, digital commerce India, Gujarat tech startup, QR menu software';

include('inc/db.php');
$canonical = '<link rel="canonical" href="' . $root . '/about" />';

$schema_tags = '<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Zrott",
  "description": "Zrott is an all-in-one digital platform empowering modern restaurants, cafes, salons, hotels, and retail stores with QR menus, appointments, and loyalty programs.",
  "url": "' . $root . '/about",
  "mainEntity": {
    "@type": "Organization",
    "name": "Zrott",
    "url": "' . $root . '",
    "logo": "' . $root . '/img/logo.webp",
    "foundingDate": "2024",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Gujarat",
      "addressCountry": "IN"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+91-99045-78948",
      "contactType": "sales and support",
      "email": "hi@zrott.com"
    }
  }
}</script>';

include('inc/header.php');
?>

<div class="front-page-wrapper">
    <main class="front-container" style="padding: 0 24px 80px;">
        <!-- ─── Hero Section ─── -->
        <section class="about-page-hero" style="margin-left: -20px; margin-right: -20px;">
            <div class="contact-hero-glow-1"></div>

            <div class="contact-hero-content">
                <div class="contact-live-pill">
                    <i data-lucide="sparkles" width="13" height="13" style="color: #7c3aed;"></i>
                    <span>About Zrott &bull; Built for Modern Commerce</span>
                    <span style="color: #94a3b8;">&bull;</span>
                    <span style="font-family: monospace; color: #6d28d9; font-weight: 700;">
                        Est. 2024
                    </span>
                </div>

                <h1 class="contact-title">
                    Empowering local businesses to thrive in a 
                    <span class="contact-title-highlight">digital-first world</span>.
                </h1>

                <p class="contact-subtitle">
                    We started Zrott with a simple conviction: small and medium businesses deserve the same enterprise-grade digital ordering, appointment booking, and customer loyalty tools that multi-billion dollar chains use — without the complexity, steep commissions, or proprietary hardware.
                </p>

                <div class="contact-channels-meta">
                    <div class="contact-meta-badge">
                        <i data-lucide="store" style="color: #7c3aed;"></i>
                        <span>500+ Outlets</span>
                    </div>
                    <div class="contact-meta-badge">
                        <i data-lucide="users" style="color: #2563eb;"></i>
                        <span>6,000+ Happy Customers</span>
                    </div>
                    <div class="contact-meta-badge">
                        <i data-lucide="star" style="color: #f59e0b;"></i>
                        <span>4.8/5 Star Rating</span>
                    </div>
                    <div class="contact-meta-badge">
                        <i data-lucide="shield-check" style="color: #10b981;"></i>
                        <span>Gujarat, India &bull; Worldwide Reach</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Our Story Section ─── -->
        <section class="about-story-section">
            <div class="about-story-content">
                <span class="about-story-badge">
                    <i data-lucide="compass"></i>
                    Our Story
                </span>
                <h2 class="about-story-title">
                    Built from a real problem observed on the ground.
                </h2>
                <p class="about-story-text">
                    Every day, brilliant local restaurants, salons, and retail shops lose customers and revenue because existing software systems are too bulky, too expensive, or designed solely for enterprise chains.
                </p>
                <p class="about-story-text">
                    Business owners were forced to choose between clunky legacy POS hardware costing thousands of dollars, or aggregators charging 25% to 35% commission on every single order.
                </p>
                <div class="about-story-highlight-box">
                    "We built Zrott to be the platform we wished existed: lightweight, mobile-first, zero-commission, and operational in minutes on any smartphone."
                </div>
            </div>

            <div class="about-story-card">
                <span class="about-card-badge">
                    <i data-lucide="check-circle-2"></i>
                    The Zrott Difference
                </span>
                <h3 class="about-card-title">Why merchants choose us over legacy POS:</h3>
                <ul class="about-card-list">
                    <li class="about-card-item">
                        <i data-lucide="zap" class="about-card-item-icon"></i>
                        <span><strong>No hardware lock-in:</strong> Runs seamlessly on any tablet, mobile phone, or laptop.</span>
                    </li>
                    <li class="about-card-item">
                        <i data-lucide="heart-handshake" class="about-card-item-icon"></i>
                        <span><strong>Zero sales cuts:</strong> Keep 100% of your revenue. No predatory transaction splits.</span>
                    </li>
                    <li class="about-card-item">
                        <i data-lucide="trending-up" class="about-card-item-icon"></i>
                        <span><strong>All-in-one suite:</strong> Digital QR, POS, appointment calendar, customer CRM &amp; loyalty.</span>
                    </li>
                    <li class="about-card-item">
                        <i data-lucide="message-circle" class="about-card-item-icon"></i>
                        <span><strong>WhatsApp integrated:</strong> Instant order alerts and direct customer communication.</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ─── Mission, Vision & Promise Tabs (Interactive) ─── -->
        <section class="about-tabs-box">
            <div class="about-tabs-nav">
                <button type="button" class="about-tab-btn active" data-tab="mission">
                    <span>Our Mission</span>
                </button>
                <button type="button" class="about-tab-btn" data-tab="vision">
                    <span>Our Vision</span>
                </button>
                <button type="button" class="about-tab-btn" data-tab="promise">
                    <span>Our Promise</span>
                </button>
            </div>

            <!-- Tab 1: Mission -->
            <div class="about-tab-content about-tab-panel" id="tab-panel-mission">
                <div>
                    <h3 class="about-tab-lead">Democratize enterprise-grade digital tools for local businesses.</h3>
                    <p class="about-tab-description">
                        We believe that neighborhood cafes, family restaurants, boutique salons, and independent retailers should never be held back by complicated software, exorbitant commissions, or proprietary hardware.
                    </p>
                    <ul class="about-tab-feature-list">
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Empower business owners to own 100% of their customer relationships</span>
                        </li>
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Eliminate 30%+ middleman delivery &amp; booking commissions</span>
                        </li>
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Zero learning curve — operational in under 15 minutes</span>
                        </li>
                    </ul>
                </div>

                <div class="about-tab-visual">
                    <div class="about-tab-stat-pill">
                        <span class="about-tab-stat-label">Outlets Powered</span>
                        <span class="about-tab-stat-val">500+</span>
                    </div>
                    <div class="about-tab-stat-pill">
                        <span class="about-tab-stat-label">Merchant Retention</span>
                        <span class="about-tab-stat-val">98.4%</span>
                    </div>
                    <div style="margin-top: 8px; font-size: 0.8rem; color: #64748b; text-align: center;">
                        ⚡ Continuously innovating for our merchant community
                    </div>
                </div>
            </div>

            <!-- Tab 2: Vision -->
            <div class="about-tab-content about-tab-panel" id="tab-panel-vision" style="display: none;">
                <div>
                    <h3 class="about-tab-lead">A hyper-connected local commerce ecosystem built on trust &amp; speed.</h3>
                    <p class="about-tab-description">
                        We envision a future where walking into your favorite restaurant, spa, or store is an effortlessly delightful digital experience — from smart QR ordering to personalized loyalty rewards that actually matter.
                    </p>
                    <ul class="about-tab-feature-list">
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Instant browser-based experiences with zero app downloads</span>
                        </li>
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Unified single dashboard for orders, tables, appointments, and staff</span>
                        </li>
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Real-time WhatsApp notification workflows for customers and staff</span>
                        </li>
                    </ul>
                </div>

                <div class="about-tab-visual">
                    <div class="about-tab-stat-pill">
                        <span class="about-tab-stat-label">Monthly Customer Scans</span>
                        <span class="about-tab-stat-val">50K+</span>
                    </div>
                    <div class="about-tab-stat-pill">
                        <span class="about-tab-stat-label">Speed Improvement</span>
                        <span class="about-tab-stat-val">3.5x</span>
                    </div>
                    <div style="margin-top: 8px; font-size: 0.8rem; color: #64748b; text-align: center;">
                        ⚡ Continuously innovating for our merchant community
                    </div>
                </div>
            </div>

            <!-- Tab 3: Promise -->
            <div class="about-tab-content about-tab-panel" id="tab-panel-promise" style="display: none;">
                <div>
                    <h3 class="about-tab-lead">Transparent pricing, human support, and zero lock-in.</h3>
                    <p class="about-tab-description">
                        We treat every partner business like our own. No hidden fees, no dark patterns, and no automated telephone bots. Whenever you need help, real human engineers pick up your call and reply on WhatsApp.
                    </p>
                    <ul class="about-tab-feature-list">
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Direct WhatsApp and phone access to our core product team</span>
                        </li>
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Free white-glove menu &amp; catalog onboarding assistance</span>
                        </li>
                        <li class="about-tab-feature-item">
                            <i data-lucide="check-circle-2" style="color: #10b981;"></i>
                            <span>Keep 100% of your earnings with flat, honest subscription pricing</span>
                        </li>
                    </ul>
                </div>

                <div class="about-tab-visual">
                    <div class="about-tab-stat-pill">
                        <span class="about-tab-stat-label">Avg WhatsApp Reply</span>
                        <span class="about-tab-stat-val">&lt; 15 mins</span>
                    </div>
                    <div class="about-tab-stat-pill">
                        <span class="about-tab-stat-label">System Uptime</span>
                        <span class="about-tab-stat-val">99.9%</span>
                    </div>
                    <div style="margin-top: 8px; font-size: 0.8rem; color: #64748b; text-align: center;">
                        ⚡ Continuously innovating for our merchant community
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── The 4 Pillars ─── -->
        <section class="about-pillars-section">
            <div class="about-pillars-header">
                <span class="contact-why-badge">Core Principles</span>
                <h2 class="contact-why-title">The Pillars That Guide Everything We Build</h2>
                <p class="contact-why-desc">
                    Every feature we ship is measured against four non-negotiable standards.
                </p>
            </div>

            <div class="about-pillars-grid">
                <div class="about-pillar-card">
                    <div class="about-pillar-icon-wrap purple">
                        <i data-lucide="zap"></i>
                    </div>
                    <h3 class="about-pillar-title">Zero Friction Setup</h3>
                    <p class="about-pillar-desc">
                        No dedicated POS terminals or complex server boxes. If you have a smartphone, tablet, or laptop, you are ready to launch in 15 minutes.
                    </p>
                </div>

                <div class="about-pillar-card">
                    <div class="about-pillar-icon-wrap green">
                        <i data-lucide="heart-handshake"></i>
                    </div>
                    <h3 class="about-pillar-title">Fair, Flat Pricing</h3>
                    <p class="about-pillar-desc">
                        We never take a cut of your sales. You work hard for your revenue; we provide the technology to grow it at an honest flat rate.
                    </p>
                </div>

                <div class="about-pillar-card">
                    <div class="about-pillar-icon-wrap blue">
                        <i data-lucide="layers"></i>
                    </div>
                    <h3 class="about-pillar-title">QR &amp; Web-Native</h3>
                    <p class="about-pillar-desc">
                        Customers simply point their phone camera at a QR standee. No 100MB apps to download, no forced logins, just instant ordering &amp; booking.
                    </p>
                </div>

                <div class="about-pillar-card">
                    <div class="about-pillar-icon-wrap amber">
                        <i data-lucide="headphones"></i>
                    </div>
                    <h3 class="about-pillar-title">Direct Human Support</h3>
                    <p class="about-pillar-desc">
                        Skip automated ticket blackholes. Our founding engineers and support team are directly reachable via WhatsApp and live call.
                    </p>
                </div>
            </div>
        </section>

        <!-- ─── Industries We Serve ─── -->
        <section class="about-industries-section">
            <div class="about-pillars-header">
                <span class="contact-why-badge">Tailored For Your Industry</span>
                <h2 class="contact-why-title">Built for Modern Businesses</h2>
                <p class="contact-why-desc">
                    Whether you serve gourmet dishes, style hair, or run a boutique resort, Zrott molds to your workflow.
                </p>
            </div>

            <div class="about-industries-grid">
                <div class="about-industry-card">
                    <div class="about-industry-icon">
                        <i data-lucide="utensils-crossed"></i>
                    </div>
                    <h3 class="about-industry-title">Restaurants &amp; Cafes</h3>
                    <p class="about-industry-desc">Digital QR menus, contactless ordering, KDS, bill split &amp; table management.</p>
                </div>

                <div class="about-industry-card">
                    <div class="about-industry-icon">
                        <i data-lucide="scissors"></i>
                    </div>
                    <h3 class="about-industry-title">Salons &amp; Wellness</h3>
                    <p class="about-industry-desc">Online appointment booking, stylist calendars, and automated appointment reminders.</p>
                </div>

                <div class="about-industry-card">
                    <div class="about-industry-icon">
                        <i data-lucide="shopping-bag"></i>
                    </div>
                    <h3 class="about-industry-title">Retail &amp; Boutiques</h3>
                    <p class="about-industry-desc">Interactive digital catalog, WhatsApp direct orders, and digital loyalty programs.</p>
                </div>

                <div class="about-industry-card">
                    <div class="about-industry-icon">
                        <i data-lucide="hotel"></i>
                    </div>
                    <h3 class="about-industry-title">Hotels &amp; Resorts</h3>
                    <p class="about-industry-desc">In-room QR dining, front desk services, and multi-amenity digital guest portals.</p>
                </div>
            </div>
        </section>

        <!-- ─── Journey & Milestones ─── -->
        <section class="about-timeline-section">
            <div class="contact-why-header" style="margin-bottom: 0;">
                <span class="contact-why-badge">Growth &amp; Momentum</span>
                <h2 class="contact-why-title">Our Journey So Far</h2>
                <p class="contact-why-desc">
                    From a single cafe experiment to an all-in-one business operating system.
                </p>
            </div>

            <div class="about-timeline-grid">
                <div class="about-timeline-item">
                    <span class="about-timeline-year">2024</span>
                    <h3 class="about-timeline-title">The Spark &amp; Inception</h3>
                    <p class="about-timeline-desc">Noticed local restaurants and cafes struggling with torn paper menus, expensive proprietary POS hardware, and heavy aggregator commissions.</p>
                </div>

                <div class="about-timeline-item">
                    <span class="about-timeline-year">2025</span>
                    <h3 class="about-timeline-title">QR Menus &amp; Table Ordering</h3>
                    <p class="about-timeline-desc">Launched frictionless digital QR standees, live kitchen displays (KDS), and contactless ordering, powering our first 100 outlets.</p>
                </div>

                <div class="about-timeline-item">
                    <span class="about-timeline-year">2025</span>
                    <h3 class="about-timeline-title">Salon &amp; Service Appointments</h3>
                    <p class="about-timeline-desc">Expanded into appointment scheduling, staff calendars, customer CRM, and digital loyalty cards for salons, spas, and wellness clinics.</p>
                </div>

                <div class="about-timeline-item">
                    <span class="about-timeline-year">2026</span>
                    <h3 class="about-timeline-title">The Modern Business Suite</h3>
                    <p class="about-timeline-desc">Serving 500+ businesses with multi-branch management, instant WhatsApp workflows, and end-to-end digital operations.</p>
                </div>
            </div>
        </section>

        <!-- ─── Bottom CTA ─── -->
        <?php include('inc/footer-cta.php'); ?>
    </main>

    <?php include('inc/footer.php'); ?>
</div>
