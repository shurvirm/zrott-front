<?php
/**
 * Zrott Jewellery — About Us Page
 * Dedicated story, artisan heritage, brand values, craft timeline, and Ahmedabad connection
 */

// ── Page Meta ──
$pageTitle = 'About Us — Zrott Jewellery | Ahmedabad Heritage & Artistry';
$pageDescr = 'Learn the story behind Zrott Jewellery, crafting timeless gold, diamond & bridal masterpieces in Ahmedabad with authentic Indian artisan craftsmanship.';
$pageKeywords = 'about Zrott jewellery, Ahmedabad jewellery heritage, goldsmith Ahmedabad, jewellery craftsmanship Gujarat, bridal jewellery makers';


// Load header
include(__DIR__ . '/inc/header.php');

// ── Image Paths ──
$img = $jw_base.'/img';
$img_banner  = $img . '/about-right.webp';
$img_pattern = $img . '/pattern-cicle.webp';
$img_prod1   = $img . '/product-1.webp';
$img_prod2   = $img . '/product-2.webp';
$img_prod3   = $img . '/product-3.webp';

// ── Configurable Contact Info ──
$brand_name   = 'Zrott Jewellery';
$brand_phone  = '+91 99045 78948';
$brand_email  = 'aabharjewellery@zrott.com';
$brand_addr   = 'Science City Road, Ahmedabad, Gujarat, India';
$brand_maps   = 'https://maps.google.com/?q=Ahmedabad+Science+City+Road';

?>

<!-- ═══════════════════════════════════════════════════
     1. PAGE HERO BANNER
     ═══════════════════════════════════════════════════ -->
<section class="jw-page-hero" aria-label="About Us Page Header">
  <div class="jw-page-hero-decor" aria-hidden="true"></div>
  <div class="jw-container">
    <div class="jw-page-hero-content jw-stagger">
      <nav class="jw-breadcrumb jw-reveal jw-reveal-bottom" aria-label="Breadcrumb">
        <a href="<?php echo $jw_base; ?>">Home</a>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        <span>About Us</span>
      </nav>
      <h1 class="jw-reveal jw-reveal-bottom">The Legacy of <span>Zrott Jewellery</span></h1>
      <div class="jw-ornament jw-reveal jw-reveal-bottom" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
      <p class="jw-page-hero-sub jw-reveal jw-reveal-bottom">Honoring generations of Ahmedabad's finest goldsmiths with timeless artistry, pristine hallmarked purity, and enduring devotion to your life's greatest moments.</p>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     2. BRAND STORY SECTION
     ═══════════════════════════════════════════════════ -->
<section class="jw-about-story" id="story" aria-label="Our brand story">
  <div class="jw-container">
    <div class="jw-about-grid">

      <div class="jw-about-text jw-reveal-left">
        <h2>Crafted with Passion,<br><span>Rooted in Ahmedabad</span></h2>
        <div class="jw-ornament" aria-hidden="true" style="margin: 0 0 20px 0;"><div class="jw-ornament-icon"></div></div>
        
        <p class="jw-about-lead">
          For over three decades, Zrott Jewellery has celebrated the rich tapestry of Gujarati tradition, marrying regal craftsmanship with contemporary silhouettes.
        </p>

        <p>
          Founded in the cultural heart of Ahmedabad, Zrott began with a singular promise: to bring purity, authenticity, and heart to every piece of jewellery we create. From the ornate stone carvings of Sidi Saiyyed to the historic bustling alleys of Manek Chowk, our artisans draw inspiration from the soul of Gujarat.
        </p>

        <p>
          Every necklace, bangle, and ring in our studio is conceived not merely as an ornament, but as an heirloom destined to be cherished across generations. Whether designing a royal bridal Jadau set or a delicate everyday diamond solitaire, we treat every creation with the sacred reverence it deserves.
        </p>

        <div style="margin-top: 28px; display: flex; gap: 14px; flex-wrap: wrap;">
          <a href="<?php echo $jw_base; ?>/#categories" class="jw-btn jw-btn-gold">
            Explore Collections
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="<?php echo $jw_base; ?>/contact" class="jw-btn jw-btn-outline">
            Visit Ahmedabad Store
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>

      <div class="jw-reveal-right">
        <div class="jw-about-img-frame">
          <img src="<?php echo $img_banner; ?>" alt="Zrott Jewellery craft story" width="600" height="450" loading="lazy">
          <div class="jw-about-img-badge">
            <strong>35+</strong>
            <span>Years of Trust</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     3. CORE VALUES
     ═══════════════════════════════════════════════════ -->
<section class="jw-values" id="values" aria-label="Our core values">
  <div class="jw-container">
    <h2 class="jw-section-title jw-reveal">The Pillars of Zrott Jewellery</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-section-subtitle jw-reveal">The timeless principles that guide every design, stone, and customer relationship</p>

    <div class="jw-values-grid jw-stagger">

      <div class="jw-value-card jw-reveal-scale">
        <div class="jw-value-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3>100% BIS Hallmarked</h3>
        <p>Every gram of gold and silver is certified with BIS Hallmarking and laser-inscribed HUID for unquestionable purity.</p>
      </div>

      <div class="jw-value-card jw-reveal-scale">
        <div class="jw-value-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3h12l4 6-10 13L2 9Z"/><path d="M11 3 8 9l4 13 4-13-3-6"/><path d="M2 9h20"/></svg>
        </div>
        <h3>Master Karigars</h3>
        <p>Crafted by hereditary Gujarati artisans who have guarded the secret techniques of Kundan, Polki, and Filigree for generations.</p>
      </div>

      <div class="jw-value-card jw-reveal-scale">
        <div class="jw-value-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><line x1="12" y1="6" x2="12" y2="8"/><line x1="12" y1="16" x2="12" y2="18"/></svg>
        </div>
        <h3>Honest Transparency</h3>
        <p>Clear, upfront pricing with no hidden charges. Complete breakdown of gold weight, stone weight, and making fees.</p>
      </div>

      <div class="jw-value-card jw-reveal-scale">
        <div class="jw-value-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </div>
        <h3>Lifelong Care</h3>
        <p>Complimentary cleaning, stone checks, and lifetime polish services ensure your heirlooms never lose their royal brilliance.</p>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     4. CRAFTSMANSHIP JOURNEY
     ═══════════════════════════════════════════════════ -->
<section class="jw-craft" id="craftsmanship" aria-label="Our craftsmanship process">
  <div class="jw-container">
    <h2 class="jw-section-title jw-reveal">The Crafting Journey</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-section-subtitle jw-reveal">From inspired vision to finished heirloom, witness the meticulous artistry</p>

    <div class="jw-craft-grid jw-stagger">

      <div class="jw-craft-step jw-reveal-scale">
        <div class="jw-craft-number">1</div>
        <div class="jw-craft-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
        </div>
        <h4>Vision &amp; Sketch</h4>
        <p>Every creation begins on paper, inspired by architectural heritage, floral motifs, and the bride's personal narrative.</p>
      </div>

      <div class="jw-craft-step jw-reveal-scale">
        <div class="jw-craft-number">2</div>
        <div class="jw-craft-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24"/><path d="m14.83 9.17 4.24-4.24"/><path d="m14.83 14.83 4.24 4.24"/><path d="m9.17 14.83-4.24 4.24"/></svg>
        </div>
        <h4>Alloy &amp; Purity</h4>
        <p>Pure 24K bullion is precisely alloyed to 22K or 18K standards, ensuring optimal durability, warm luster, and structural strength.</p>
      </div>

      <div class="jw-craft-step jw-reveal-scale">
        <div class="jw-craft-number">3</div>
        <div class="jw-craft-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 12-8.5 8.5c-.83.83-2.17.83-3 0 0 0 0 0 0 0a2.12 2.12 0 0 1 0-3L12 9"/><path d="M17.64 15 22 10.64"/><path d="m20.91 3.26-6.36 6.36a1 1 0 0 0 0 1.41l1.41 1.41a1 1 0 0 0 1.41 0l6.36-6.36a1 1 0 0 0 0-1.41l-1.41-1.41a1 1 0 0 0-1.41 0z"/></svg>
        </div>
        <h4>Artisan Hand Setting</h4>
        <p>Our master karigars painstakingly set each diamond, uncut Polki, and emerald using time-honored Kundan bezel techniques.</p>
      </div>

      <div class="jw-craft-step jw-reveal-scale">
        <div class="jw-craft-number">4</div>
        <div class="jw-craft-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z"/></svg>
        </div>
        <h4>Hallmark &amp; Finish</h4>
        <p>Detailed ultrasonic cleaning, high-luster polishing, and government BIS lab hallmark certification before delivery.</p>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     5. STATS STRIP
     ═══════════════════════════════════════════════════ -->
<section class="jw-stats jw-reveal" aria-label="Key facts and figures">
  <div class="jw-container">
    <div class="jw-stats-grid jw-stagger">
      <div class="jw-stat-item">
        <strong>35+</strong>
        <span>Years of Heritage</span>
      </div>
      <div class="jw-stat-item">
        <strong>50,000+</strong>
        <span>Happy Families Adorned</span>
      </div>
      <div class="jw-stat-item">
        <strong>100%</strong>
        <span>BIS Certified Hallmarked</span>
      </div>
      <div class="jw-stat-item">
        <strong>5,000+</strong>
        <span>Exclusive Designs</span>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     6. AHMEDABAD HERITAGE CONNECTION
     ═══════════════════════════════════════════════════ -->
<section class="jw-heritage" id="heritage" aria-label="Ahmedabad roots">
  <div class="jw-container">
    <div class="jw-heritage-grid">

      <div class="jw-reveal-left">
        <div class="jw-heritage-img">
          <img src="<?php echo $img_pattern; ?>" alt="Ahmedabad heritage architectural pattern" width="600" height="400" loading="lazy">
        </div>
        <blockquote class="jw-heritage-quote">
          "Ahmedabad's soul is spun from gold thread and historic courage. That spirit lives in every piece we touch."
        </blockquote>
      </div>

      <div class="jw-heritage-text jw-reveal-right">
        <h2>The Soul of Ahmedabad<br><span>Woven into Every Jewel</span></h2>
        <div class="jw-ornament" aria-hidden="true" style="margin: 0 0 20px 0;"><div class="jw-ornament-icon"></div></div>
        
        <p class="jw-heritage-desc">
          India's first UNESCO World Heritage City is our eternal muse. The intricate jali work, temple carvings, Navratri festivities, and royal wedding celebrations of Gujarat inspire our artisans daily.
        </p>

        <div class="jw-heritage-features">
          <div class="jw-heritage-feat">
            <div class="jw-heritage-feat-icon">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="22" x2="21" y2="22"/><line x1="6" y1="18" x2="6" y2="11"/><line x1="10" y1="18" x2="10" y2="11"/><line x1="14" y1="18" x2="14" y2="11"/><line x1="18" y1="18" x2="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
            </div>
            <span>UNESCO Heritage Inspiration</span>
          </div>
          <div class="jw-heritage-feat">
            <div class="jw-heritage-feat-icon">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 10-8 10-8-10z"/></svg>
            </div>
            <span>Centuries-Old Karigar Lineage</span>
          </div>
          <div class="jw-heritage-feat">
            <div class="jw-heritage-feat-icon">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15 9 22 12 15 15 12 22 9 15 2 12 9 9"/></svg>
            </div>
            <span>Contemporary Luxury Blend</span>
          </div>
          <div class="jw-heritage-feat">
            <div class="jw-heritage-feat-icon">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <span>Generations of Gujarati Families</span>
          </div>
        </div>

        <a href="<?php echo $jw_base; ?>/contact" class="jw-btn jw-btn-emerald">
          Book a Private Consultation
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     7. CALL TO ACTION STRIP
     ═══════════════════════════════════════════════════ -->
<section class="jw-festive py-5 px-3" aria-label="Visit us call to action">
  <div class="jw-container">
    <h2 class="jw-reveal">Experience the Sparkle of Zrott Jewellery</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-reveal">Visit our flagship Ahmedabad showroom for a warm, personalized jewellery experience.</p>
    <div style="margin-top: 24px; display: inline-flex; gap: 14px; flex-wrap: wrap;" class="jw-reveal">
      <a href="<?php echo $jw_base; ?>/contact" class="jw-btn jw-btn-white">
        Find Our Showroom
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
      <a href="<?php echo $jw_base; ?>/#categories" class="jw-btn jw-btn-gold">
        View Collections
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<?php include(__DIR__ . '/inc/footer.php'); ?>
