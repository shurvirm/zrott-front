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

include('inc/header.php');
?>

<div class="front-page-wrapper bio-page-root">
    <main>
        <!-- ─── Hero ─── -->
        <section class="bio-hero">
            <div class="bio-hero-glow-1"></div>
            <div class="bio-hero-glow-2"></div>
            <div class="front-container bio-hero-inner">
                <div class="bio-hero-text">
                    <div class="hero-pill-badge">
                        <i data-lucide="sparkles" width="13" height="13"></i>
                        <span>ZROTT | WEBSITE</span>
                    </div>

                    <h1 class="bio-hero-h1">
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

        <!-- ─── Features preview ─── -->
        <section class="bio-features-section">
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
                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box blue">
                            <i data-lucide="globe"></i>
                        </div>
                        <h3 class="bio-feature-title">Subdomain &amp; Custom Domain</h3>
                        <p class="bio-feature-desc">Get your own yourbrand.zrott.com in seconds, or connect your existing custom domain with free automatic SSL.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box blue">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <h3 class="bio-feature-title">Google My Business Highlight</h3>
                        <p class="bio-feature-desc">Link your website directly to your Google Business Profile to boost local footfall, organic visits, and map ranking.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box blue">
                            <i data-lucide="smartphone"></i>
                        </div>
                        <h3 class="bio-feature-title">Mobile-Optimized &amp; Blazing Fast</h3>
                        <p class="bio-feature-desc">Every template is precision engineered to load in under 1 second on any mobile device or tablet.</p>
                    </div>

                    <div class="bio-feature-card">
                        <div class="bio-feature-icon-box blue">
                            <i data-lucide="search"></i>
                        </div>
                        <h3 class="bio-feature-title">Built-in Local SEO</h3>
                        <p class="bio-feature-desc">Automatic schema markup, OpenGraph tags, and meta configuration to help local customers find you easily.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Bottom CTA ─── -->
        <?php include('inc/footer-cta.php'); ?>
    </main>

    <?php include('inc/footer.php'); ?>
</div>
