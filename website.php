<?php
$pageId = 'website';
$which_page = "website";
$pageTitle = 'Make your offline business to online with our website plan with Custom Domain — Zrott | Website';
$pageDescr = 'Launch your business website in 60 seconds with an instant subdomain (yourbrand.zrott.com), Google My Business sync, and custom domain connection.';
$pageKeyword = 'business website builder, subdomain website, Google My Business website, local business website builder, custom domain India';

include('inc/db.php');
$canonical = '<link rel="canonical" href="' . $root . '/website" />';

$schema_tags = '<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Zrott Website Builder",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "url": "' . $root . '/website",
  "description": "Instant subdomain websites and custom domain websites optimized for Google My Business and local SEO.",
  "publisher": {
    "@type": "Organization",
    "name": "Zrott",
    "url": "' . $root . '"
  }
}</script>';

$seo_logo = $current_domain.'img/zrott-online-website-builder.webp';
include('inc/header.php');
?>

<div class="front-page-wrapper bio-page-root">
    <main>
        <!-- ─── Hero ─── -->
        <section class="bio-hero">
            <div class="bio-hero-glow-1"></div>
            <div class="bio-hero-glow-2"></div>
            <div class="hero-grid-overlay"></div>
            <div class="front-container bio-hero-inner">
                <div class="bio-hero-text">
                    <div class="hero-pill-badge" style="margin-bottom: 14px;">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>ZROTT | WEBSITE</span>
                    </div>

                    <h1 class="bio-hero-h1" style="font-size: clamp(2.5rem, 5.5vw, 3rem); line-height: 1.15;">
                        Your Business deserves<br />
                        <span class="text-gradient">a better website</span>
                    </h1>

                    <p class="bio-hero-sub">
                        Get a subdomain website (e.g. <code>yourname.zrott.com</code>) or connect your
                        custom domain. Highlight it on Google My Business and convert visitors into paying clients.
                    </p>

                    <ul class="bio-hero-checks">
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Subdomain setup (yourbrand.zrott.com)</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Connect with Google My Business &amp; Maps</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Support for your own custom domain &amp; free SSL</span>
                        </li>
                        <li>
                            <i data-lucide="check-circle-2" class="bio-check-icon"></i>
                            <span>Ready-made templates for restaurants, salons, clinics &amp; retail</span>
                        </li>
                    </ul>

                    <div class="bio-hero-ctas">
                        <a href="<?php echo $contactHref; ?>" class="front-btn-primary bio-btn-glow">
                            <span>Get Early Access</span>
                            <i data-lucide="arrow-right"></i>
                        </a>
                        <a href="<?php echo $root; ?>/" class="front-btn-ghost bio-btn-secondary">
                            <span>Explore Platform</span>
                        </a>
                    </div>

                    <p class="bio-hero-note">Page preview &amp; coming soon updates</p>
                </div>

                <!-- Visual preview -->
                <div class="bio-hero-visual">
                    <div style="background: #ffffff; border-radius: 24px; padding: 24px; border: 1px solid rgba(124, 58, 237, 0.15); box-shadow: 0 20px 60px rgba(124, 58, 237, 0.15); max-width: 380px; width: 100%;">
                        <div style="background: #f8fafc; border-radius: 12px; padding: 10px 14px; display: flex; align-items: center; gap: 8px; margin-bottom: 16px; border: 1px solid #e2e8f0; font-size: 0.8rem; color: #64748b;">
                            <i data-lucide="globe" style="color: #7c3aed; width: 14px; height: 14px;"></i>
                            <span style="font-weight: 600; color: #0f0f1a;">yourbrand.zrott.com</span>
                        </div>

                        <div style="border-radius: 16px; overflow: hidden; position: relative; border: 1px solid #e2e8f0; margin-bottom: 16px;">
                            <img
                                src="<?php echo $root; ?>/img/retail.webp"
                                alt="Website Mockup"
                                style="width: 100%; height: 200px; object-fit: cover;"
                            />
                            <div style="position: absolute; bottom: 12px; left: 12px; right: 12px; background: rgba(255, 255, 255, 0.92); backdrop-filter: blur(8px); padding: 8px 12px; border-radius: 10px; font-size: 0.75rem; font-weight: 700; color: #0f0f1a; display: flex; align-items: center; justify-content: space-between;">
                                <span>Google My Business Linked</span>
                                <span style="color: #16a34a;">&check; Active</span>
                            </div>
                        </div>

                        <div style="font-size: 0.82rem; color: #64748b; text-align: center;">
                            Full customizable content blocks, SEO schema &amp; lead forms coming soon.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Why -->
        <section class="bio-identity-section">
            <div class="front-container">

                <!-- Section Header -->
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>YOUR DIGITAL IDENTITY</span>
                    </div>

                    <h2 class="section-title">
                        Everything your business needs to
                        <span class="text-gradient">get online</span>
                    </h2>

                    <p class="section-subtitle">
                        Build a professional digital identity with your own website, branded email, and custom domain.
                    </p>
                </div>

                <!-- Identity Cards -->
                <div class="bio-identity-grid">

                    <!-- Card 1: Subdomain -->
                    <div class="bio-identity-card">
                        <div class="identity-top-row">
                            <div class="included-icon blue mb-3">
                                <i data-lucide="globe"></i>
                            </div>

                            <span class="identity-free-badge">
                                FREE
                            </span>
                        </div>


                        <h3>Your Own Business Subdomain</h3>

                        <p>
                            Get a personalized business URL to establish your online presence instantly.
                        </p>

                        <div class="bio-identity-preview">
                            <span class="identity-preview-label">YOUR WEBSITE URL</span>
                            <div class="identity-preview-value">
                                <span>yourstore</span><strong>.zrott.com</strong>
                            </div>
                        </div>

                        <div class="bio-identity-note">
                            <i data-lucide="check-circle" width="15"></i>
                            Or connect your existing custom domain.
                        </div>
                    </div>

                    <!-- Card 2: Branded Email -->
                    <div class="bio-identity-card">
                        <div class="identity-top-row">
                            <div class="included-icon orange mb-3">
                                <i data-lucide="mail"></i>
                            </div>

                            <span class="identity-free-badge">
                                FREE
                            </span>
                        </div>

                        <h3>Professional Branded Email</h3>

                        <p>
                            Give your business a professional identity with your own branded email address.
                        </p>

                        <div class="bio-identity-preview">
                            <span class="identity-preview-label">YOUR BUSINESS EMAIL</span>
                            <div class="identity-preview-value email">
                                <span>yourstore</span><strong>@zrott.com</strong>
                            </div>
                        </div>

                        <div class="bio-identity-note">
                            <i data-lucide="check-circle" width="15"></i>
                            1 branded email address included.
                        </div>
                    </div>

                    <!-- Card 3: Free Domain -->
                    <div class="bio-identity-card bio-identity-featured">

                        <div class="identity-top-row">
                            <div class="included-icon pink mb-3">
                                <i data-lucide="badge-check"></i>
                            </div>

                            <span class="identity-free-badge">
                                1 YEAR FREE
                            </span>
                        </div>

                        <h3>Your Own .in Brand Domain</h3>

                        <p>
                            Make your brand memorable with your very own domain name, included with eligible annual plans.
                        </p>

                        <div class="bio-identity-preview">
                            <span class="identity-preview-label">YOUR CUSTOM DOMAIN</span>
                            <div class="identity-preview-value domain">
                                <span>yourstore</span><strong>.in</strong>
                            </div>
                        </div>

                        <div class="bio-identity-note">
                            <i data-lucide="check-circle" width="15"></i>
                            Free first-year registration with 1-year or longer plans.
                        </div>

                    </div>

                </div>

                <p class="bio-identity-disclaimer">
                    * Domain availability and eligibility apply. Renewal charges apply after the first year.
                </p>

            </div>
        </section>

        <!-- ─── Features preview ─── -->
        <section class="bio-features-section bg-gray">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>CORE CAPABILITIES</span>
                    </div>
                    <h2 class="section-title">
                        Everything you need to <span class="text-gradient">stand out online</span>
                    </h2>
                    <p class="section-subtitle">
                        Built specifically for modern storefronts, creators, and service businesses.
                    </p>
                </div>

                <div class="bio-features-grid" style="grid-template-columns: repeat(2, 1fr);">
                    <div class="bio-feature-card bg-white">
                        <div class="included-icon orange mb-3">
                            <i data-lucide="globe"></i>
                        </div>
                        <h3 class="bio-feature-title">Subdomain &amp; Custom Domain</h3>
                        <p class="bio-feature-desc">Get your own yourbrand.zrott.com in seconds, or connect your existing custom domain with free automatic SSL.</p>
                    </div>

                    <div class="bio-feature-card bg-white">
                        <div class="included-icon blue mb-3">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <h3 class="bio-feature-title">Google My Business Highlight</h3>
                        <p class="bio-feature-desc">Link your website directly to your Google Business Profile to boost local footfall, organic visits, and map ranking.</p>
                    </div>

                    <div class="bio-feature-card bg-white">
                        <div class="included-icon purple mb-3">
                            <i data-lucide="smartphone"></i>
                        </div>
                        <h3 class="bio-feature-title">Mobile-Optimized &amp; Blazing Fast</h3>
                        <p class="bio-feature-desc">Every template is precision engineered to load in under 1 second on any mobile device or tablet.</p>
                    </div>

                    <div class="bio-feature-card bg-white">
                        <div class="included-icon pink mb-3">
                            <i data-lucide="search"></i>
                        </div>
                        <h3 class="bio-feature-title">Built-in Local SEO</h3>
                        <p class="bio-feature-desc">Automatic schema markup, OpenGraph tags, and meta configuration to help local customers find you easily.</p>
                    </div>
                </div>
            </div>
        </section>


        <!--  -->
        
        <section class="bio-features-section">
            <div class="front-container">

                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>WHY CHOOSE ZROTT</span>
                    </div>

                    <h2 class="section-title">
                        More than just a <span class="text-gradient">website</span>
                    </h2>

                    <p class="section-subtitle">
                        We help your business get discovered, build trust, connect with customers, and grow online.
                    </p>
                </div>

                <div class="bio-features-grid" style="grid-template-columns: repeat(3, 1fr);">

                    <!-- 1. More Leads -->
                    <div class="bio-feature-card">
                        <div class="included-icon blue mb-3">
                            <i data-lucide="users"></i>
                        </div>
                        <h3 class="bio-feature-title">More Customer Enquiries</h3>
                        <p class="bio-feature-desc">
                            Turn website visitors into potential customers with direct contact options, enquiry buttons, and WhatsApp integration.
                        </p>
                    </div>

                    <!-- 2. Google Visibility -->
                    <div class="bio-feature-card">
                        <div class="included-icon purple mb-3">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <h3 class="bio-feature-title">Better Google Visibility</h3>
                        <p class="bio-feature-desc">
                            Connect your website with your Google Business Profile and strengthen your local online presence.
                        </p>
                    </div>

                    <!-- 3. Public Listing -->
                    <div class="bio-feature-card">
                        <div class="included-icon orange mb-3">
                            <i data-lucide="store"></i>
                        </div>
                        <h3 class="bio-feature-title">Get Discovered Locally</h3>
                        <p class="bio-feature-desc">
                            Get listed on Zrott's public business directory and reach potential customers searching for businesses nearby.
                        </p>
                    </div>

                    <!-- 4. Customer Trust -->
                    <div class="bio-feature-card">
                        <div class="included-icon blue mb-3">
                            <i data-lucide="shield-check"></i>
                        </div>
                        <h3 class="bio-feature-title">Build Customer Trust</h3>
                        <p class="bio-feature-desc">
                            Create a professional first impression with your business details, photos, products, services, and reviews.
                        </p>
                    </div>

                    <!-- 5. 24/7 Presence -->
                    <div class="bio-feature-card">
                        <div class="included-icon green mb-3">
                            <i data-lucide="clock"></i>
                        </div>
                        <h3 class="bio-feature-title">24/7 Online Presence</h3>
                        <p class="bio-feature-desc">
                            Let customers explore your business, products, and services anytime, even when your physical store is closed.
                        </p>
                    </div>

                    <!-- 6. WhatsApp -->
                    <div class="bio-feature-card">
                        <div class="included-icon pink mb-3">
                            <i data-lucide="message-circle"></i>
                        </div>
                        <h3 class="bio-feature-title">Direct WhatsApp Connection</h3>
                        <p class="bio-feature-desc">
                            Make it effortless for customers to ask questions and connect with your business with just one click.
                        </p>
                    </div>

                    <!-- 7. Custom Domain -->
                    <div class="bio-feature-card">
                        <div class="included-icon blue mb-3">
                            <i data-lucide="globe"></i>
                        </div>
                        <h3 class="bio-feature-title">Your Own Business Website</h3>
                        <p class="bio-feature-desc">
                            Get your own yourbrand.zrott.com subdomain or connect your existing custom domain with free SSL.
                        </p>
                    </div>

                    <!-- 8. Product Showcase -->
                    <div class="bio-feature-card">
                        <div class="included-icon purple mb-3">
                            <i data-lucide="layout-grid"></i>
                        </div>
                        <h3 class="bio-feature-title">Showcase Your Products</h3>
                        <p class="bio-feature-desc">
                            Display your products, categories, services, offers, and business highlights in an attractive layout.
                        </p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="included-icon orange mb-3">
                            <i data-lucide="check-circle"></i>
                        </div>
                        <h3 class="bio-feature-title">Professional Brand Identity</h3>
                        <p class="bio-feature-desc">
                            Give your business a professional digital identity with a dedicated website and custom domain support.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Pricing -->
         
        <section class="bio-hero zrott-pricing-section" id="pricing">
            <div class="bio-hero-glow-1"></div>
            <div class="bio-hero-glow-2"></div>
            <div class="hero-grid-overlay"></div>
            <div class="front-container">

                <!-- Section Header -->
                <div class="section-header-center">
                    <div class="hero-pill-badge">
                        <i data-lucide="tag" width="13" height="13"></i>
                        <span>SIMPLE & TRANSPARENT PRICING</span>
                    </div>

                    <h2 class="section-title">
                        Big Online Value at an
                        <span class="text-gradient">Unbelievably Affordable Price</span>
                    </h2>

                    <p class="section-subtitle">
                        Start with just ₹500/month for the first year, and continue at only ₹100/month from the second year onwards.
                        Everything your business needs to grow online.
                    </p>
                </div>

                
                <!-- Pricing Comparison -->
                <div class="zrott-plan-comparison">

                    <!-- Yearly Plan -->
                    <div class="zrott-plan-card yearly-plan">

                        <div class="plan-period-badge yearly-badge">
                            <i data-lucide="crown" width="16"></i>
                            YEARLY PLAN
                        </div>

                        <h3 class="mt-2">Start Small, Grow Big</h3>

                        <p class="plan-description">
                            Perfect for businesses who want to get started at a low cost.
                        </p>

                        <div class="yearly-price-main font-primary">
                            <span class="currency font-secondary">₹</span>500
                            <span class="price-unit">/month</span>
                        </div>

                        <div class="plan-billing">Billed annually</div>

                        <div class="plan-total yearly-total">
                            Total: <strong>₹6,000</strong> for 1st year
                        </div>

                        <div class="plan-renewal-divider"></div>

                        <div class="renewal-label">From 2nd year onwards</div>

                        <div class="yearly-price-renewal font-primary">
                            <span class="currency font-secondary">₹</span>100
                            <span class="price-unit">/month</span>
                        </div>

                        <div class="plan-billing">
                            Billed annually (₹1,200/year)
                        </div>

                    </div>


                    <!-- Center Comparison Points -->
                    <div class="zrott-plan-middle">

                        <div class="plan-middle-highlight">
                            <i data-lucide="sparkles"></i>
                            <strong>Same Features</strong>
                            <span>Different Payment Options</span>
                        </div>

                        <div class="plan-comparison-points">

                            <div class="plan-comparison-point">
                                <i data-lucide="check-circle-2"></i>
                                <span>All features included</span>
                            </div>

                            <div class="plan-comparison-point">
                                <i data-lucide="check-circle-2"></i>
                                <span>No hidden charges</span>
                            </div>

                            <div class="plan-comparison-point">
                                <i data-lucide="check-circle-2"></i>
                                <span>Full support</span>
                            </div>

                        </div>

                    </div>


                    <!-- Lifetime Plan -->
                    <div class="zrott-plan-card lifetime-plan">

                        <div class="plan-period-badge lifetime-badge">
                            <i data-lucide="gem" width="16"></i>
                            LIFETIME PLAN
                        </div>

                        <div class="lifetime-best-value">
                            BEST VALUE
                        </div>

                        <h3>One Time Payment, Lifetime Peace</h3>

                        <p class="plan-description">
                            Pay once and enjoy your website for a lifetime without annual renewal fees.
                        </p>

                        <div class="lifetime-price font-primary">
                            <span class="currency font-secondary">₹</span>20,000
                        </div>

                        <div class="lifetime-payment-label">
                            One time payment
                        </div>

                        <div class="lifetime-benefits">

                            <div class="lifetime-benefit">
                                <i data-lucide="check"></i>
                                <span>No annual renewal</span>
                            </div>

                            <div class="lifetime-benefit">
                                <i data-lucide="check"></i>
                                <span>Lifetime website access</span>
                            </div>

                            <div class="lifetime-benefit">
                                <i data-lucide="check"></i>
                                <span>Same features as yearly plan</span>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- What's Included -->
                <div class="zrott-included-features">

                    <div class="included-feature">
                        <div class="included-icon blue">
                            <i data-lucide="globe"></i>
                        </div>
                        <strong>Your Own Website</strong>
                        <span>yourstore.zrott.com or custom domain</span>
                    </div>

                    <div class="included-feature">
                        <div class="included-icon purple">
                            <i data-lucide="mail"></i>
                        </div>
                        <strong>1 Branded Email</strong>
                        <span>yourstore@zrott.com</span>
                    </div>

                    <div class="included-feature">
                        <div class="included-icon orange">
                            <i data-lucide="badge-check"></i>
                        </div>
                        <strong>Free .in Domain</strong>
                        <span>1 year free with eligible plans</span>
                    </div>

                    <div class="included-feature">
                        <div class="included-icon blue">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <strong>Google Visibility</strong>
                        <span>Google Business Profile integration</span>
                    </div>

                    <div class="included-feature">
                        <div class="included-icon green">
                            <i data-lucide="message-circle"></i>
                        </div>
                        <strong>WhatsApp Integration</strong>
                        <span>One-click customer enquiries</span>
                    </div>

                    <div class="included-feature">
                        <div class="included-icon pink">
                            <i data-lucide="store"></i>
                        </div>
                        <strong>Zrott Directory</strong>
                        <span>Get listed and reach local customers</span>
                    </div>

                    <div class="included-feature">
                        <div class="included-icon blue">
                            <i data-lucide="smartphone"></i>
                        </div>
                        <strong>Mobile Friendly</strong>
                        <span>Responsive website design</span>
                    </div>

                    <div class="included-feature">
                        <div class="included-icon purple">
                            <i data-lucide="headset"></i>
                        </div>
                        <strong>Ongoing Support</strong>
                        <span>Help when you need it</span>
                    </div>

                </div>

                <!-- CTA -->
                <div class="zrott-pricing-cta">
                    <a href="<?php echo $contactHref; ?>" class="zrott-price-button">
                        Get Started Now
                        <i data-lucide="arrow-right"></i>
                    </a>

                    <div class="pricing-trust-note">
                        <i data-lucide="shield-check"></i>
                        <span>No Hidden Charges</span>
                        <span class="trust-separator">|</span>
                        <span>Simple & Secure</span>
                        <span class="trust-separator">|</span>
                        <span>Grow Your Business Online</span>
                    </div>
                </div>

                <p class="pricing-disclaimer">
                    * Prices are in INR. First year: ₹6,000. Renewal from year two: ₹1,200/year.
                    The 10-year total assumes unchanged renewal pricing. Domain eligibility,
                    email and service inclusions are subject to applicable plan terms.
                </p>

            </div>
        </section>



        <!-- ─── Bottom CTA ─── -->
        <?php include('inc/footer-cta.php'); ?>
    </main>

    <?php include('inc/footer.php'); ?>
</div>
