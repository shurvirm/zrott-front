<?php
$pageId = 'crm';
$which_page = "crm";
$pageTitle = 'Restaurant CRM, KDS & QR Menu Platform — Zrott | CRM';
$pageDescr = 'Kitchen Display System (KDS), digital QR menus, table booking, POS, billing, and customer loyalty programs for modern restaurants and cafes across India.';
$pageKeyword = 'restaurant CRM, restaurant POS, Kitchen Display System, KDS software, digital QR menu, table booking system, cafe software India';

include('inc/db.php');
$canonical = '<link rel="canonical" href="' . $root . '/crm-for-restaurants" />';
$seo_logo = $root . '/img/zrott-best-software-for-restaurants.webp';

$schema_tags = '<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Zrott Restaurant CRM",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "All (Web, iOS, Android)",
  "url": "' . $root . '/crm-for-restaurants",
  "description": "Complete operating system for restaurants, cafes, and cloud kitchens featuring KDS, digital QR ordering, table booking, and customer loyalty.",
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": "0",
    "highPrice": "1499",
    "offerCount": "3"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "128"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Zrott",
    "url": "' . $root . '"
  }
}</script>';

include('inc/header.php');
?>

<div class="front-page-wrapper font-secondary">
    <main>
        <!-- ─── Hero Section ─── -->
        <section class="bio-hero">
            <div class="bio-hero-glow-1"></div>
            <div class="bio-hero-glow-2"></div>
            <div class="hero-grid-overlay"></div>

            <div class="front-container">
                <div class="hero-layout">
                    <div class="hero-text-col col-md-12">
                        <div class="hero-pill-badge" style="margin-bottom: 14px;">
                            <i data-lucide="sparkles" width="13" height="13"></i>
                            <span>RESTAURANT &amp; FOOD COMMERCE</span>
                        </div>
                        <h1 class="bio-hero-h1" style="font-size: clamp(2.5rem, 5.5vw, 3rem); line-height: 1.15;">
                            Grow Your Restaurant <br />
                            Smarter with <br /><span class="text-gradient">Zrott CRM</span>
                        </h1>

                        <p class="hero-subhead">
                            Kitchen Display System (KDS), digital QR menus, table booking,
                            billing, and customer loyalty — all in one unified platform.
                        </p>

                        <div class="hero-cta-group">
                            <a href="<?php echo $contactHref; ?>" class="cta-primary">
                                <span>Start Free Trial</span>
                                <i data-lucide="arrow-right"></i>
                            </a>
                            <a href="#pricing" class="cta-secondary">
                                View Plans
                            </a>
                        </div>

                        <div class="hero-trust-row">
                            <div class="trust-item">
                                <i data-lucide="shield-check" class="trust-icon"></i>
                                <span>Free trial</span>
                            </div>
                            <div class="trust-item">
                                <i data-lucide="credit-card" class="trust-icon"></i>
                                <span>No credit card required</span>
                            </div>
                            <div class="trust-item">
                                <i data-lucide="zap" class="trust-icon"></i>
                                <span>Easy setup</span>
                            </div>
                        </div>
                    </div>

                    <div class="hero-visual-col col-md-12">
                        <div class="mockup-container">
                            <img src="<?php echo $root; ?>/img/banner-homepage.webp" alt="Zrott CRM Mockup" title="Zrott CRM Mockup" class="img-fluid" />
                        </div>
                    </div>
                </div>

                <!-- Social Proof Strip -->
                <div class="front-stats-strip">
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-icon-circle stat-icon-purple">
                                <i data-lucide="store"></i>
                            </div>
                            <div>
                                <div class="stat-number">500+</div>
                                <div class="stat-label">Restaurants &amp; Outlets</div>
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-icon-circle stat-icon-blue">
                                <i data-lucide="users"></i>
                            </div>
                            <div>
                                <div class="stat-number">6,000+</div>
                                <div class="stat-label">Happy Diners</div>
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-icon-circle stat-icon-amber">
                                <i data-lucide="star"></i>
                            </div>
                            <div>
                                <div class="stat-number">4.8/5</div>
                                <div class="stat-label">Average Rating</div>
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-icon-circle stat-icon-green">
                                <i data-lucide="headphones"></i>
                            </div>
                            <div>
                                <div class="stat-number">99%</div>
                                <div class="stat-label">Uptime Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Perfect for Every Type of Business ─── -->
        <section class="section-categories">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Built for Restaurants &amp; Food Creators</h2>
                    <p class="section-subtitle">
                        Tailored workflows for dine-in, takeaway, cloud kitchens, and cafes.
                    </p>
                </div>

                <div class="categories-grid">
                    <div class="category-card">
                        <div class="category-img-wrapper">
                            <img src="<?php echo $root; ?>/img/restaurant-400.webp" alt="Restaurants &amp; Cafes" class="category-img" />
                        </div>
                        <div class="category-content">
                            <span class="category-title">Restaurants &amp; Cafes</span>
                            <a href="<?php echo $contactHref; ?>" class="category-arrow-btn" aria-label="View Restaurants &amp; Cafes">
                                <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="category-card">
                        <div class="category-img-wrapper">
                            <img src="<?php echo $root; ?>/img/saloon-400.webp" alt="Salons &amp; Beauty" class="category-img" />
                        </div>
                        <div class="category-content">
                            <span class="category-title">Salons &amp; Beauty</span>
                            <a href="<?php echo $contactHref; ?>" class="category-arrow-btn" aria-label="View Salons &amp; Beauty">
                                <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="category-card">
                        <div class="category-img-wrapper">
                            <img src="<?php echo $root; ?>/img/hotel-400.webp" alt="Hotels &amp; Resorts" class="category-img" />
                        </div>
                        <div class="category-content">
                            <span class="category-title">Hotels &amp; Resorts</span>
                            <a href="<?php echo $contactHref; ?>" class="category-arrow-btn" aria-label="View Hotels &amp; Resorts">
                                <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="category-card">
                        <div class="category-img-wrapper">
                            <img src="<?php echo $root; ?>/img/retail-400.webp" alt="Retail &amp; Shops" class="category-img" />
                        </div>
                        <div class="category-content">
                            <span class="category-title">Retail &amp; Shops</span>
                            <a href="<?php echo $contactHref; ?>" class="category-arrow-btn" aria-label="View Retail &amp; Shops">
                                <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Everything You Need in One Place (8 Feature Cards) ─── -->
        <section id="features" class="section-features-grid">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Everything You Need to Run Your Floor</h2>
                    <p class="section-subtitle">
                        Powerful tools to manage kitchen orders, tables, payments, and guests.
                    </p>
                </div>

                <div class="features-grid-8">
                    <div class="feature-box-card">
                        <div class="feature-icon-wrapper icon-blue">
                            <i data-lucide="globe"></i>
                        </div>
                        <h3 class="feature-box-title">Business Website</h3>
                        <p class="feature-box-desc">Get a stunning website with your plan.</p>
                    </div>

                    <div class="feature-box-card">
                        <div class="feature-icon-wrapper icon-orange">
                            <i data-lucide="qr-code"></i>
                        </div>
                        <h3 class="feature-box-title">Digital Menu &amp; QR</h3>
                        <p class="feature-box-desc">Let customers view menu, order and pay.</p>
                    </div>

                    <div class="feature-box-card">
                        <div class="feature-icon-wrapper icon-purple">
                            <i data-lucide="calendar"></i>
                        </div>
                        <h3 class="feature-box-title">Appointment Booking</h3>
                        <p class="feature-box-desc">Take bookings online and manage your schedule.</p>
                    </div>

                    <div class="feature-box-card">
                        <div class="feature-icon-wrapper icon-coral">
                            <i data-lucide="users"></i>
                        </div>
                        <h3 class="feature-box-title">Customer CRM</h3>
                        <p class="feature-box-desc">Keep track of your customers and their history.</p>
                    </div>

                    <div class="feature-box-card">
                        <div class="feature-icon-wrapper icon-pink">
                            <i data-lucide="gift"></i>
                        </div>
                        <h3 class="feature-box-title">Loyalty Program</h3>
                        <p class="feature-box-desc">Reward customers with loyalty cards.</p>
                    </div>

                    <div class="feature-box-card">
                        <div class="feature-icon-wrapper icon-amber">
                            <i data-lucide="credit-card"></i>
                        </div>
                        <h3 class="feature-box-title">Orders &amp; Payments</h3>
                        <p class="feature-box-desc">Manage orders, payments and receipts.</p>
                    </div>

                    <div class="feature-box-card">
                        <div class="feature-icon-wrapper icon-cyan">
                            <i data-lucide="send"></i>
                        </div>
                        <h3 class="feature-box-title">Marketing Campaigns</h3>
                        <p class="feature-box-desc">Run offers, announcements and reach more customers.</p>
                    </div>

                    <div class="feature-box-card">
                        <div class="feature-icon-wrapper icon-indigo">
                            <i data-lucide="bar-chart-3"></i>
                        </div>
                        <h3 class="feature-box-title">Analytics &amp; Reports</h3>
                        <p class="feature-box-desc">Understand your business growth with easy insights.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Feature Showcase ─── -->
        <section class="section-showcase-split">
            <div class="front-container">
                <div class="showcase-grid">
                    <div class="showcase-mockup-wrapper">
                        <div class="browser-mockup">
                            <div class="browser-bar">
                                <div class="browser-dots">
                                    <span class="dot dot-red"></span>
                                    <span class="dot dot-yellow"></span>
                                    <span class="dot dot-green"></span>
                                </div>
                                <div class="browser-url-pill">
                                    https://zrott.com/menu/the-daily-brew
                                </div>
                            </div>
                            <div class="website-preview-content">
                                <img src="<?php echo $root; ?>/img/restaurants.webp" alt="Restaurant KDS &amp; QR Preview" class="preview-img" />
                            </div>
                        </div>
                    </div>

                    <div class="showcase-text-col">
                        <h2 class="showcase-headline">
                            Live Kitchen Display System (KDS) &amp; QR Ordering
                        </h2>

                        <div class="checklist-group">
                            <div class="check-item">
                                <i data-lucide="check-circle-2" class="check-icon-purple"></i>
                                <span>Instant contactless QR orders directly from tables</span>
                            </div>
                            <div class="check-item">
                                <i data-lucide="check-circle-2" class="check-icon-purple"></i>
                                <span>Real-time kitchen order tickets (KOT) on kitchen display</span>
                            </div>
                            <div class="check-item">
                                <i data-lucide="check-circle-2" class="check-icon-purple"></i>
                                <span>Automated table status, bill splitting, and fast checkout</span>
                            </div>
                            <div class="check-item">
                                <i data-lucide="check-circle-2" class="check-icon-purple"></i>
                                <span>Customer repeat visit loyalty and discount coupons</span>
                            </div>
                        </div>

                        <a href="<?php echo $contactHref; ?>" class="showcase-cta-btn">
                            <span>Explore Restaurant Demo</span>
                            <i data-lucide="arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Simple Pricing ─── -->
        <?php include('inc/pricing-section.php'); ?>

        <!-- ─── Smarter Way ─── -->
        <?php include('inc/smart-way.php'); ?>

        <!-- ─── Loved by Owners ─── -->
        <?php include('inc/testimonials.php'); ?>

        <!-- ─── FAQ ─── -->
        <section id="faq" class="section-faq">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-subtitle">Quick answers about Zrott Restaurant CRM.</p>
                </div>

                <div class="faq-layout-grid">
                    <div class="faq-accordion-list bio-faq-list">
                        <div class=" bio-faq-card open">
                            <div class=" bio-faq-q" type="button" aria-expanded="true">
                                <span>What is Zrott CRM for Restaurants?</span>
                                <div class="bio-faq-arrow-btn rotated">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class=" bio-faq-a">
                                Zrott CRM is an all-in-one platform for restaurants, cafes, and food businesses. It provides digital QR menus, Kitchen Display Systems (KDS), table booking, POS, billing, and customer loyalty.
                            </div>
                        </div>

                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Do I need technical knowledge?</span>
                                <div class="bio-faq-arrow-btn rotated">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                Not at all! Zrott is built to be simple and intuitive. You can import from Google Business Profile or choose a ready template and have your digital menu or system live in under 5 minutes.
                            </div>
                        </div>

                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Can I use my own domain?</span>
                                <div class="bio-faq-arrow-btn rotated">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                Yes, you can easily connect your custom domain or use your free business URL on zrott.com/yourbusiness.
                            </div>
                        </div>

                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Is there a free trial?</span>
                                <div class="bio-faq-arrow-btn rotated">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                Yes! Our FREE plan includes an unrestricted free trial. No credit card is required to get started.
                            </div>
                        </div>

                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Can I upgrade or downgrade later?</span>
                                <div class="bio-faq-arrow-btn rotated">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                Yes, you can upgrade, downgrade, or add modular services at any time directly from your business settings.
                            </div>
                        </div>

                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Do you offer support?</span>
                                <div class="bio-faq-arrow-btn rotated">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                Yes, our customer success team is available 7 days a week via live chat, WhatsApp, and email to ensure your business thrives.
                            </div>
                        </div>
                    </div>

                    <div class="faq-side-card">
                        <img src="<?php echo $root; ?>/img/questions.webp" alt="Support Specialist" class="faq-avatar-img" />
                        <div class="faq-card-title">Need a custom demo?</div>
                        <p class="faq-card-sub">
                            Our specialists will walk you through setting up your restaurant floor in minutes.
                        </p>
                        <a href="<?php echo $contactHref; ?>" class="faq-contact-btn">
                            <span>Talk with Sales</span>
                            <i data-lucide="arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Bottom CTA ─── -->
        <?php include('inc/footer-cta.php'); ?>
    </main>

    <?php include('inc/footer.php'); ?>
</div>
