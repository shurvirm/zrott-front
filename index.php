<?php
$pageId = 'index';
$which_page = "home";
$pageTitle = 'Zrott — Unified Growth Platform: Bio, CRM & Websites for Modern Businesses';
$pageDescr = 'Empower your brand and business with Zrott. Link in bio pages, restaurant CRM & KDS ordering systems, and instant subdomain business websites.';
$pageKeyword = 'Zrott, Zrott Bio, Zrott CRM, Zrott Website, link in bio, restaurant CRM, business website builder, KDS, digital menu India, Gujarat startup';

include('inc/db.php');
$canonical = '<link rel="canonical" href="' . $root . '/" />';
$seo_logo = $root.'/img/zrott-crm-link-in-bio-websites.webp';

$schema_tags = '<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Zrott",
  "headline": "All-in-One Digital QR Menu, POS, Booking & Loyalty Platform",
  "description": "Digital menus, websites, bookings, customer CRM, loyalty programs and more — everything you need in one powerful platform for modern businesses.",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "All (Web, iOS, Android)",
  "url": "' . $root . '",
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
    "url": "' . $root . '",
    "logo": "' . $root . '/img/logo.webp"
  }
}</script>';

include('inc/header.php');
?>

<div class="front-page-wrapper bio-page-root">
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
                            <span>THE ALL-IN-ONE BUSINESS &amp; CREATOR PLATFORM</span>
                        </div>
                        <h1 class="bio-hero-h1" style="font-size: clamp(2.5rem, 5.5vw, 3rem); line-height: 1.15;">
                            Create. Manage. <br />
                            Grow your business <br />
                            <span class="text-gradient">with Zrott.</span>
                        </h1>

                        <p class="hero-subhead mb-3">
                            Build a beautiful bio link, launch your business website, and manage customers with a powerful CRM - all in one simple platform
                        </p>

                        <div class="hero-trust-row mt-0 mb-4">
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

                        <div class="hero-cta-group mb-0">
                            <a href="#products" class="cta-primary">
                                <span>Explore Products</span>
                                <i data-lucide="arrow-right"></i>
                            </a>

                            <a href="<?php echo $contactHref; ?>" class="cta-secondary">
                                <span>Contact Now</span>
                            </a>
                        </div>

                        <p class="bio-hero-note" style="margin-top: 12px;">
                            Trusted by Restaurants, shops, salons, hotels &amp; Influencers across global.
                        </p>
                    </div>

                    <div class="hero-visual-col col-md-12">
                        <div class="mockup-container">
                            <img src="<?php echo $root; ?>/img/hero-banner-1.webp" alt="Zrott - Best Local store to online platform | Best Link in bio platform" title="Zrott - Best Local store to online platform | Best Link in bio platform" class="img-fluid" />
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

        <!-- ─── The 3 Main Products Section ─── -->
        <section id="products" style="padding: 90px 0; background: #faf9ff;">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>OUR CORE PRODUCTS</span>
                    </div>
                    <h2 class="section-title">
                        Everything you need to <span class="text-gradient">build, run &amp; grow</span>
                    </h2>
                    <p class="section-subtitle">
                        Click on any product to dive into full features, live demos, and pricing.
                    </p>
                </div>

                <div style="display: flex; flex-direction: column; gap: 48px; max-width: 1080px; margin: 0 auto;">

                    <!-- Product 2: Zrott | CRM -->
                    <div class="bio-product-showcase-card" style="background: #ffffff; border-radius: 28px; padding: 42px 38px; border: 1px solid rgba(124, 58, 237, 0.12); box-shadow: 0 14px 45px rgba(0, 0, 0, 0.04); display: flex; flex-direction: row-reverse; align-items: center; gap: 48px; flex-wrap: wrap; transition: all 0.3s ease;">
                        <div style="flex: 1 1 420px;">
                            <div class="hero-pill-badge" style="margin-bottom: 14px;">
                                <span>RESTAURANTS &amp; FOOD SERVICE</span>
                            </div>
                            <h3 style="font-size: 2rem; font-weight: 800; color: #0f0f1a; margin: 0 0 8px; font-family: Inter, sans-serif;">
                                Zrott | CRM
                            </h3>
                            <p style="font-size: 1.05rem; font-weight: 600; color: #7c3aed; margin: 0 0 12px;">
                                Streamline Your Kitchen, Orders &amp; Tables.
                            </p>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.65; margin: 0 0 22px;">
                                Complete restaurant operating system with live Kitchen Display System (KDS), contactless digital QR menus, table booking, and customer loyalty.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0 0 28px; display: flex; flex-direction: column; gap: 10px;">
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Live Kitchen Display System (KDS) &amp; instant KOTs</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Contactless QR code menu ordering and table payments</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Table reservation and floor capacity manager</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Integrated customer CRM with digital loyalty points</span>
                                </li>
                            </ul>
                            <a href="<?php echo $root; ?>/crm-for-restaurants" class="front-btn-primary bio-btn-glow" style="padding: 12px 26px; font-size: 0.95rem; text-decoration: none;">
                                <span>Explore Zrott | CRM</span>
                                <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                        <div style="flex: 1 1 380px;">
                            <a href="<?php echo $root; ?>/crm-for-restaurants" style="display: block; border-radius: 20px; overflow: hidden; text-decoration: none; position: relative;">
                                <img src="<?php echo $root; ?>/img/banner-homepage.webp" alt="Zrott | CRM" style="width: 100%;  object-fit: cover; display: block;" />
                                <div style="position: absolute; bottom: 14px; right: 14px; background: rgba(15, 15, 26, 0.85); backdrop-filter: blur(6px); color: #ffffff; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; display: flex; align-items: center; gap: 6px;">
                                    <span>View Product</span>
                                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product 3: Zrott | Website -->
                    <div class="bio-product-showcase-card" style="background: #ffffff; border-radius: 28px; padding: 42px 38px; border: 1px solid rgba(124, 58, 237, 0.12); box-shadow: 0 14px 45px rgba(0, 0, 0, 0.04); display: flex; flex-direction: row; align-items: center; gap: 48px; flex-wrap: wrap; transition: all 0.3s ease;">
                        <div style="flex: 1 1 420px;">
                            <div class="hero-pill-badge" style="margin-bottom: 14px;">
                                <span>LOCAL COMMERCE &amp; SITES</span>
                            </div>
                            <h3 style="font-size: 2rem; font-weight: 800; color: #0f0f1a; margin: 0 0 8px; font-family: Inter, sans-serif;">
                                Zrott | Website
                            </h3>
                            <p style="font-size: 1.05rem; font-weight: 600; color: #7c3aed; margin: 0 0 12px;">
                                Instant Subdomain &amp; Custom Domain Websites.
                            </p>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.65; margin: 0 0 22px;">
                                Launch a professional website with your own individual subdomain (yourname.zrott.com) or custom domain, linked to Google My Business.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0 0 28px; display: flex; flex-direction: column; gap: 10px;">
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Free subdomain setup (e.g., yourbrand.zrott.com)</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Highlight on Google My Business to boost local footfall</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Connect your own custom domain with free SSL</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Built-in local SEO schema markup and mobile responsiveness</span>
                                </li>
                            </ul>
                            <a href="<?php echo $root; ?>/website" class="front-btn-primary bio-btn-glow" style="padding: 12px 26px; font-size: 0.95rem; text-decoration: none;">
                                <span>Explore Zrott | Website</span>
                                <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                        <div style="flex: 1 1 380px;">
                            <a href="<?php echo $root; ?>/website" style="display: block; border-radius: 20px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 12px 36px rgba(0, 0, 0, 0.08); text-decoration: none; position: relative;">
                                <img src="<?php echo $root; ?>/img/retail.webp" alt="Zrott | Website" style="width: 100%; object-fit: cover; display: block;" />
                                <div style="position: absolute; bottom: 14px; right: 14px; background: rgba(15, 15, 26, 0.85); backdrop-filter: blur(6px); color: #ffffff; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; display: flex; align-items: center; gap: 6px;">
                                    <span>View Product</span>
                                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                                        <!-- Product 1: Zrott | Bio -->
                    <div class="bio-product-showcase-card" style="background: #ffffff; border-radius: 28px; padding: 42px 38px; border: 1px solid rgba(124, 58, 237, 0.12); box-shadow: 0 14px 45px rgba(0, 0, 0, 0.04); display: flex; flex-direction: row; align-items: center; gap: 48px; flex-wrap: wrap; transition: all 0.3s ease;">
                        <div style="flex: 1 1 380px;">
                            <a href="<?php echo $root; ?>/link-in-bio" style="display: block; border-radius: 20px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 12px 36px rgba(0, 0, 0, 0.08); text-decoration: none; position: relative;">
                                <img src="<?php echo $root; ?>/img/link-in-bio.webp" alt="Zrott | Bio" style="width: 100%;  object-fit: cover; display: block;" />
                                <div style="position: absolute; bottom: 14px; right: 14px; background: rgba(15, 15, 26, 0.85); backdrop-filter: blur(6px); color: #ffffff; padding: 6px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; display: flex; align-items: center; gap: 6px;">
                                    <span>View Product</span>
                                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                                </div>
                            </a>
                        </div>
                        <div style="flex: 1 1 420px;">
                            <div class="hero-pill-badge" style="margin-bottom: 14px;">
                                <span>CREATOR &amp; BRAND ESSENTIAL</span>
                            </div>
                            <h3 style="font-size: 2rem; font-weight: 800; color: #0f0f1a; margin: 0 0 8px; font-family: Inter, sans-serif;">
                                Zrott | Bio
                            </h3>
                            <p style="font-size: 1.05rem; font-weight: 600; color: #7c3aed; margin: 0 0 12px;">
                                One Link. All Your Possibilities.
                            </p>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.65; margin: 0 0 22px;">
                                Create a beautiful, customizable link in bio page to share your content, products, services, and capture leads — all in one link.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0 0 28px; display: flex; flex-direction: column; gap: 10px;">
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Beautiful &amp; customizable mobile-friendly templates</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Lead capture forms to grow your email list</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Real-time visitor and click analytics</span>
                                </li>
                                <li style="display: flex; align-items: center; gap: 10px; font-size: 0.92rem; color: #1e293b;">
                                    <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                                    <span>Custom QR codes &amp; custom domain support (Pro)</span>
                                </li>
                            </ul>
                            <a href="<?php echo $root; ?>/link-in-bio" class="front-btn-primary bio-btn-glow" style="padding: 12px 26px; font-size: 0.95rem; text-decoration: none;">
                                <span>Explore Zrott | Bio</span>
                                <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ─── Platform Stats Strip ─── -->
        <section style="padding: 60px 0; background: #ffffff; border-top: 1px solid #f1f5f9; border-bottom: 1px solid #f1f5f9;">
            <div class="front-container">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
                    <div>
                        <div style="font-size: 2.4rem; font-weight: 800; color: #0f0f1a;">1K+</div>
                        <div style="font-size: 0.88rem; color: #64748b; font-weight: 600; margin-top: 4px;">Active Bio Links &amp; Creators</div>
                    </div>
                    <div>
                        <div style="font-size: 2.4rem; font-weight: 800; color: #0f0f1a;">500+</div>
                        <div style="font-size: 0.88rem; color: #64748b; font-weight: 600; margin-top: 4px;">Restaurants on Zrott CRM</div>
                    </div>
                    <div>
                        <div style="font-size: 2.4rem; font-weight: 800; color: #0f0f1a;">3K+</div>
                        <div style="font-size: 0.88rem; color: #64748b; font-weight: 600; margin-top: 4px;">Monthly Orders &amp; Visits</div>
                    </div>
                    <div>
                        <div style="font-size: 2.4rem; font-weight: 800; color: #0f0f1a;">99.9%</div>
                        <div style="font-size: 0.88rem; color: #64748b; font-weight: 600; margin-top: 4px;">High Availability &amp; Uptime</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Smart Way ─── -->
        <?php include('inc/smart-way.php'); ?>

        <!-- ─── Testimonials ─── -->
        <?php include('inc/testimonials.php'); ?>

        <!-- ─── Home FAQs ─── -->
        <section class="bio-faq-section" id="faq">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="help-circle" width="13" height="13"></i>
                        <span>FREQUENTLY ASKED QUESTIONS</span>
                    </div>
                    <h2 class="section-title">Everything you need to know</h2>
                    <p class="section-subtitle">Common questions about the Zrott platform and products.</p>
                </div>

                <div class="bio-faq-list" style="margin: 0 auto;">
                    <div class="bio-faq-card open">
                        <div class="bio-faq-q">
                            <span>What is the Zrott ecosystem?</span>
                            <div class="bio-faq-arrow-btn rotated">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <div class="bio-faq-a">
                            <p>Zrott is an all-in-one growth platform featuring three interconnected products: Zrott | Bio for link-in-bio pages and audience growth, Zrott | CRM for restaurants and hospitality management, and Zrott | Website for fast subdomain and custom domain business websites.</p>
                        </div>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Can I use Zrott products independently?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <div class="bio-faq-a">
                            <p>Yes! You can start with Zrott | Bio for your personal or brand links, Zrott | CRM for your restaurant floor, or Zrott | Website for your local storefront. Everything syncs under one centralized account if you use multiple products.</p>
                        </div>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Do you offer a free plan to get started?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <div class="bio-faq-a">
                            <p>Yes, Zrott | Bio has a free forever plan, and our CRM and Website products offer generous free trials with no credit card required.</p>
                        </div>
                    </div>

                    <div class="bio-faq-card">
                        <div class="bio-faq-q">
                            <span>Can I connect my own custom domain?</span>
                            <div class="bio-faq-arrow-btn">
                                <i data-lucide="chevron-right"></i>
                            </div>
                        </div>
                        <div class="bio-faq-a">
                            <p>Yes! All Zrott products support connecting custom domains (e.g. links.yourbrand.com or yourbrand.com) with complimentary automatic SSL.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Bottom CTA ─── -->
        <?php include('inc/footer-cta.php'); ?>
    </main>

    <?php include('inc/footer.php'); ?>
</div>