<?php
/**
 * Aabhar Fine Jewellery — Single-Page Website
 * All 17 sections: Header → Hero → Trust → Categories → Bridal → Trending →
 * Occasions → Custom → Heritage → Premium → Festive → Reels → Reviews →
 * QR → Store → Newsletter → Footer
 *
 * DEMO SITE — noindex/nofollow applied. Ready for client delivery with
 * placeholder content, images, prices, and contact info easily replaceable.
 */

// ── Page Meta ──
$pageTitle = 'Aabhar Fine Jewellery — Jewellery that Celebrates Ahmedabad | Gold, Diamond, Silver & Bridal';
$pageDescr = 'Discover exquisite gold, diamond, silver and bridal jewellery at Aabhar Fine Jewellery, Ahmedabad. Timeless designs with authentic Indian craftsmanship for every special moment.';
$pageKeywords = 'jewellery Ahmedabad, gold jewellery Gujarat, diamond necklace, bridal jewellery Ahmedabad, temple jewellery India, silver jewellery, custom jewellery design, Aabhar Fine Jewellery';

// ── Image Paths (reuse 3 product images + 1 banner + 1 pattern) ──
// Paths relative to this file's directory (themes/jewellery/)
$img = 'img';
$img_banner  = $img . '/jewel-banner-1.webp';
$img_pattern = $img . '/pattern-cicle.webp';
$img_prod1   = $img . '/product-1.webp';
$img_prod2   = $img . '/product-2.webp';
$img_prod3   = $img . '/product-3.webp';
$img_prod4   = $img . '/product-4.webp';
$img_prod5   = $img . '/product-5.webp';
$img_prod6   = $img . '/product-6.webp';


// Load header
include('inc/header.php');
?>


<!-- ═══════════════════════════════════════════════════
     2. HERO BANNER
     ═══════════════════════════════════════════════════ -->
<section class="jw-hero" id="hero" aria-label="Hero banner">
  <div class="jw-hero-bg">
    <img src="<?php echo $img_banner; ?>" alt="Aabhar Fine Jewellery — Traditional Indian bridal jewellery from Ahmedabad" width="1400" height="900" loading="eager" fetchpriority="high">
  </div>
  <div class="jw-hero-overlay"></div>
  <div class="jw-hero-decor" aria-hidden="true"></div>
  <div class="jw-container">
    <div class="jw-hero-content">
      <div class="jw-ornament" aria-hidden="true">
        <div class="jw-ornament-icon"></div>
      </div>
      <h1>Jewellery that Celebrates <span>Ahmedabad</span></h1>
      <div class="jw-hero-tagline">
        <span>Timeless Designs</span>
        <span>Authentic Craftsmanship</span>
        <span>For Every Special Moment</span>
      </div>
      <a href="#categories" class="jw-btn jw-btn-gold">
        Explore Collections
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     3. TRUST STRIP
     ═══════════════════════════════════════════════════ -->
<section class="jw-trust jw-reveal" aria-label="Trust features">
  <div class="jw-container">
    <div class="jw-trust-grid jw-stagger">

      <div class="jw-trust-item jw-reveal">
        <div class="jw-trust-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div>
          <strong>100% Hallmarked Jewellery</strong>
          <span>BIS Certified Purity</span>
        </div>
      </div>

      <div class="jw-trust-item jw-reveal">
        <div class="jw-trust-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <div>
          <strong>Trusted by Families</strong>
          <span>Generations of Trust</span>
        </div>
      </div>

      <div class="jw-trust-item jw-reveal">
        <div class="jw-trust-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        </div>
        <div>
          <strong>Personalised Consultation</strong>
          <span>Expert Guidance</span>
        </div>
      </div>

      <div class="jw-trust-item jw-reveal">
        <div class="jw-trust-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12v10H4V12"/><path d="M2 7h20v5H2z"/><path d="M12 22V7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/></svg>
        </div>
        <div>
          <strong>Elegant Packaging</strong>
          <span>For Every Occasion</span>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     4. SHOP BY CATEGORY
     ═══════════════════════════════════════════════════ -->
<section class="jw-categories" id="categories" aria-label="Shop by Category">
  <div class="jw-container">
    <h2 class="jw-section-title jw-reveal">Shop by Category</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-section-subtitle jw-reveal">Explore our exquisite collections crafted for every occasion</p>

    <div class="jw-cat-grid jw-stagger">
      <?php
      $categories = [
        ['name' => 'Gold Jewellery',    'img' => $img_prod1],
        ['name' => 'Diamond Jewellery', 'img' => $img_prod2],
        ['name' => 'Bridal Collection', 'img' => $img_prod3],
        ['name' => 'Silver Jewellery',  'img' => $img_prod4],
        ['name' => 'Temple Jewellery',  'img' => $img_prod5],
        ['name' => 'Gifts & Occasions', 'img' => $img_prod6],
      ];
      foreach ($categories as $cat): ?>
        <a href="#premium" class="jw-cat-item jw-reveal-scale" aria-label="<?php echo $cat['name']; ?>">
          <div class="jw-cat-circle">
            <img src="<?php echo $cat['img']; ?>" alt="<?php echo $cat['name']; ?>" width="120" height="120" loading="lazy">
          </div>
          <span class="jw-cat-name"><?php echo $cat['name']; ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     5. BRIDAL COLLECTION BANNER
     ═══════════════════════════════════════════════════ -->
<section class="jw-bridal" id="bridal" aria-label="Bridal Collection">
  <div class="jw-container">
    <div class="jw-bridal-grid">

      <div class="jw-bridal-text jw-reveal-left">
        <h2>Bridal Collection<br>For Your <span>Big Moments</span></h2>
        <p class="jw-bridal-sub">Traditional. Elegant. Unforgettable.</p>
        <p class="jw-bridal-desc">Because every story deserves a special sparkle. Our bridal collection combines generations of Ahmedabad craftsmanship with contemporary elegance to make your special day truly magnificent.</p>
        <a href="#categories" class="jw-btn jw-btn-gold">
          Explore Bridal Collection
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>

      <div class="jw-bridal-img jw-reveal-right">
        <img src="<?php echo $img_prod3; ?>" alt="Bridal jewellery collection — traditional Indian bridal sets" width="500" height="625" loading="lazy">
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     6. TRENDING THIS SEASON
     ═══════════════════════════════════════════════════ -->
<section class="jw-trending" id="trending" aria-label="Trending jewellery this season">
  <div class="jw-container">
    <h2 class="jw-section-title jw-reveal">Trending This Season</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-section-subtitle jw-reveal">Handpicked designs loved in Ahmedabad</p>

    <!-- Filter Tabs -->
    <div class="jw-trending-filters jw-reveal">
      <button class="jw-filter-btn active" type="button">All</button>
      <button class="jw-filter-btn" type="button">Gold</button>
      <button class="jw-filter-btn" type="button">Diamond</button>
      <button class="jw-filter-btn" type="button">Silver</button>
      <button class="jw-filter-btn" type="button">Bridal</button>
      <button class="jw-filter-btn" type="button">Temple</button>
    </div>

    <!-- Product Grid -->
    <div class="jw-product-grid jw-stagger">
      <?php
      $products = [
        ['name' => 'Heritage Gold Necklace',  'price' => '₹85,999',  'img' => $img_prod1],
        ['name' => 'Diamond Earrings',        'price' => '₹42,500',  'img' => $img_prod2],
        ['name' => 'Temple Necklace Set',     'price' => '₹1,25,000','img' => $img_prod3],
        ['name' => 'Gold Bangles Set',        'price' => '₹68,750',  'img' => $img_prod4],
      ];
      foreach ($products as $prod): ?>
        <article class="jw-product-card jw-reveal-scale" data-id="<?php echo htmlspecialchars($prod['name']); ?>" data-name="<?php echo htmlspecialchars($prod['name']); ?>" data-price="<?php echo htmlspecialchars($prod['price']); ?>" data-img="<?php echo htmlspecialchars($prod['img']); ?>">
          <div class="jw-product-img">
            <img src="<?php echo $prod['img']; ?>" alt="<?php echo $prod['name']; ?>" width="300" height="300" loading="lazy">
            <div class="jw-product-heart">
              <button type="button" class="jw-heart" aria-label="Add <?php echo $prod['name']; ?> to favourites">
                <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              </button>
            </div>
          </div>
          <div class="jw-product-info">
            <div>
              <div class="jw-product-name"><?php echo $prod['name']; ?></div>
              <div class="jw-product-price"><?php echo $prod['price']; ?></div>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     7. OCCASION COLLECTION STRIP
     ═══════════════════════════════════════════════════ -->
<section class="jw-occasions" id="occasions" aria-label="Jewellery for every occasion">
  <div class="jw-container">
    <div class="jw-occasions-content">

      <div class="jw-occasions-text jw-reveal-left">
        <h2>A Perfect Choice for<br><span>Every Occasion</span></h2>
      </div>

      <div class="jw-occ-grid jw-stagger">
        <?php
        $occasions = [
          ['name' => 'Weddings',     'img' => $img_prod3],
          ['name' => 'Festivals',    'img' => $img_prod1],
          ['name' => 'Engagements',  'img' => $img_prod2],
          ['name' => 'Everyday Wear','img' => $img_prod4],
          ['name' => 'Gifting',      'img' => $img_prod5],
          ['name' => '& Much More',      'img' => $img_prod6],
        ];
        foreach ($occasions as $occ): ?>
          <a href="#categories" class="jw-occ-card jw-reveal-scale" aria-label="<?php echo $occ['name']; ?> jewellery">
            <img src="<?php echo $occ['img']; ?>" alt="Jewellery for <?php echo $occ['name']; ?>" width="200" height="267" loading="lazy">
            <span class="jw-occ-label"><?php echo $occ['name']; ?></span>
          </a>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     8. CUSTOM JEWELLERY
     ═══════════════════════════════════════════════════ -->
<section class="jw-custom" id="custom" aria-label="Custom jewellery design">
  <div class="jw-container">
    <div class="jw-custom-grid">

      <div class="jw-custom-text jw-reveal-left">
        <h2>Custom Jewellery<br>For Your <span>Unique Story</span></h2>
        <p class="jw-custom-desc">
          Turn your imagination into a timeless creation. Work with our experts to design personalised jewellery that reflects your style and story.
        </p>
        <a href="#store" class="jw-btn jw-btn-emerald">
          Start Your Custom Design
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>

        <div class="jw-custom-steps jw-reveal">
          <div class="jw-custom-step">
            <div class="jw-custom-step-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-1 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6"/><path d="M10 22h4"/></svg>
            </div>
            <span>Share Your Idea</span>
          </div>
          <div class="jw-custom-step">
            <div class="jw-custom-step-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
            </div>
            <span>Choose Design</span>
          </div>
          <div class="jw-custom-step">
            <div class="jw-custom-step-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l4 6-10 13L2 9Z"/><path d="M11 3 8 9l4 13 4-13-3-6"/><path d="M2 9h20"/></svg>
            </div>
            <span>Select Gemstones</span>
          </div>
          <div class="jw-custom-step">
            <div class="jw-custom-step-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 12-8.5 8.5c-.83.83-2.17.83-3 0 0 0 0 0 0 0a2.12 2.12 0 0 1 0-3L12 9"/><path d="M17.64 15 22 10.64"/><path d="m20.91 3.26-6.36 6.36a1 1 0 0 0 0 1.41l1.41 1.41a1 1 0 0 0 1.41 0l6.36-6.36a1 1 0 0 0 0-1.41l-1.41-1.41a1 1 0 0 0-1.41 0z"/></svg>
            </div>
            <span>Expert Craftsmanship</span>
          </div>
          <div class="jw-custom-step">
            <div class="jw-custom-step-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z"/></svg>
            </div>
            <span>A Timeless Creation</span>
          </div>
        </div>
      </div>

      <div class="jw-custom-img jw-reveal-right">
        <img src="<?php echo $img_prod2; ?>" alt="Custom jewellery design process" width="500" height="625" loading="lazy">
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     9. AHMEDABAD HERITAGE
     ═══════════════════════════════════════════════════ -->
<section class="jw-heritage" id="heritage" aria-label="Our Ahmedabad heritage">
  <div class="jw-container">
    <div class="jw-heritage-grid">

      <div class="jw-heritage-text jw-reveal-left">
        <h2>The Legacy of Ahmedabad<br><span class="text-highlight">in Every Design</span></h2>
        <p class="jw-heritage-desc">
          Inspired by the rich culture, architecture and vibrant traditions of Ahmedabad, our jewellery brings together heritage and modern elegance in every creation.
        </p>

        <div class="jw-heritage-features">
          <div class="jw-heritage-feat">
            <div class="jw-heritage-feat-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="22" x2="21" y2="22"/><line x1="6" y1="18" x2="6" y2="11"/><line x1="10" y1="18" x2="10" y2="11"/><line x1="14" y1="18" x2="14" y2="11"/><line x1="18" y1="18" x2="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
            </div>
            <span>Local Heritage Inspiration</span>
          </div>
          <div class="jw-heritage-feat">
            <div class="jw-heritage-feat-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l8 10-8 10-8-10z"/></svg>
            </div>
            <span>Traditional Craftsmanship</span>
          </div>
          <div class="jw-heritage-feat">
            <div class="jw-heritage-feat-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15 9 22 12 15 15 12 22 9 15 2 12 9 9"/></svg>
            </div>
            <span>Modern Elegance</span>
          </div>
          <div class="jw-heritage-feat">
            <div class="jw-heritage-feat-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <span>Trusted by Ahmedabadi Families</span>
          </div>
        </div>

        <a href="about.php" class="jw-btn jw-btn-outline">
          Our Story
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>

        <div class="jw-heritage-badge">
          <span><svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor" style="vertical-align:-1px;display:inline-block;"><polygon points="12 2 15 9 22 12 15 15 12 22 9 15 2 12 9 9"/></svg></span> Trusted by Ahmedabadi families since generations
        </div>
      </div>

      <div class="jw-reveal-right">
        <div class="jw-heritage-img">
          <img src="<?php echo $jw_base; ?>/img/heritage-ahmedabad.webp" alt="Ahmedabad heritage architecture — inspiration for our jewellery designs" width="600" height="400" loading="lazy">
        </div>
        <blockquote class="jw-heritage-quote">
          "Ahmedabad's culture, our inspiration. Your moments, our jewellery."
        </blockquote>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     10. GOLD, DIAMOND & BEYOND
     ═══════════════════════════════════════════════════ -->
<section class="jw-premium" id="premium" aria-label="Gold, Diamond and Silver collections">
  <div class="jw-container">
    <h2 class="jw-section-title jw-reveal">Gold, Diamond &amp; Beyond</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-section-subtitle jw-reveal">Discover the brilliance of fine craftsmanship</p>

    <div class="jw-premium-grid jw-stagger">

      <article class="jw-premium-card jw-reveal-scale">
        <div class="jw-premium-card-img">
          <img src="<?php echo $img_prod1; ?>" alt="Gold Jewellery Collection" width="400" height="250" loading="lazy">
        </div>
        <div class="jw-premium-card-body">
          <h3>Gold Jewellery</h3>
          <p>A timeless classic. 22K and 24K pure gold designs for every occasion.</p>
        </div>
      </article>

      <article class="jw-premium-card jw-reveal-scale">
        <div class="jw-premium-card-img">
          <img src="<?php echo $img_prod2; ?>" alt="Diamond Jewellery Collection" width="400" height="250" loading="lazy">
        </div>
        <div class="jw-premium-card-body">
          <h3>Diamond Jewellery</h3>
          <p>For modern elegance. Certified diamonds set in exquisite designs.</p>
        </div>
      </article>

      <article class="jw-premium-card jw-reveal-scale">
        <div class="jw-premium-card-img">
          <img src="<?php echo $img_prod3; ?>" alt="Silver Jewellery Collection" width="400" height="250" loading="lazy">
        </div>
        <div class="jw-premium-card-body">
          <h3>Silver Jewellery</h3>
          <p>Grace for everyday. Sterling silver pieces for any style.</p>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     11. FESTIVE COLLECTION BANNER
     ═══════════════════════════════════════════════════ -->
<section class="jw-festive" id="festive" aria-label="Festive Collection">
  <div class="jw-">

    <a href="#categories" class="jw-reveal">
      <div class="jw-festive-img jw-reveal-scale">
        <img src="<?php echo $jw_base; ?>/img/festive-collection.webp" alt="Festive jewellery collection — exclusive designs for celebrations" width="600" height="300" loading="lazy">
      </div>

    </a>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     12. INSTAGRAM REELS / JEWELLERY IN MOTION
     ═══════════════════════════════════════════════════ -->
<section class="jw-reels" id="reels" aria-label="Jewellery in Motion — Instagram Reels">
  <div class="jw-container">
    <h2 class="jw-section-title jw-reveal">Jewellery in <span class="text-highlight">Motion</span></h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-section-subtitle jw-reveal">Watch our latest designs, styling tips and behind-the-scenes moments on Instagram Reels</p>

    <div class="jw-reels-header jw-reveal">
      <span>Follow <?php echo $brand_insta; ?></span>
      <a href="<?php echo $brand_insta_url; ?>" target="_blank" class="ig-badge" aria-label="Follow on Instagram" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="none" stroke="currentColor" stroke-width="2"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="currentColor" stroke-width="2"/></svg>
        Instagram
      </a>
    </div>

    <div class="jw-reels-grid jw-stagger">
      <?php
      $reels = [
        ['caption' => 'Bridal Look in Ahmedabad',       'img' => $img_prod3],
        ['caption' => 'Temple Jewellery Heritage Vibes',  'img' => $img_prod1],
        ['caption' => 'Making of a Masterpiece',          'img' => $img_prod2],
        ['caption' => 'Festive Collection 2026',          'img' => $img_prod4],
        ['caption' => 'Customer Stories — Real Moments',  'img' => $img_prod5],
      ];
      foreach ($reels as $reel): ?>
        <div class="jw-reel-card jw-reveal-scale" role="button" tabindex="0" data-video="<?php echo $img; ?>/reel.mp4" data-caption="<?php echo htmlspecialchars($reel['caption']); ?>" aria-label="Watch video: <?php echo htmlspecialchars($reel['caption']); ?>">
          <img src="<?php echo $reel['img']; ?>" alt="<?php echo $reel['caption']; ?>" width="200" height="356" loading="lazy">
          <div class="jw-reel-play" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
          </div>
          <span class="jw-reel-caption"><?php echo $reel['caption']; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     13. GOOGLE REVIEWS
     ═══════════════════════════════════════════════════ -->
<section class="jw-reviews" id="reviews" aria-label="Customer reviews">
  <div class="jw-container">
    <h2 class="jw-section-title jw-reveal">What Our Customers Say</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-section-subtitle jw-reveal">Loved by thousands of happy customers in Ahmedabad</p>

    <div class="jw-reviews-grid jw-stagger">

      <!-- Review 1 -->
      <article class="jw-review-card jw-reveal-scale" aria-label="Review by Priya Shah">
        <div class="jw-review-stars" aria-label="5 out of 5 stars">
          <?php for($i=0; $i<5; $i++): ?>
            <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>
        <p class="jw-review-text">"Beautiful collection and excellent service. The staff is very supportive and helps you choose the right design. Truly a trusted jewellery store in Ahmedabad!"</p>
        <div class="jw-review-author">
          <div class="jw-review-avatar">PS</div>
          <div>
            <div class="jw-review-name">Priya Shah</div>
            <div class="jw-review-loc">Ahmedabad</div>
          </div>
        </div>
      </article>

      <!-- Review 2 -->
      <article class="jw-review-card jw-reveal-scale" aria-label="Review by Rakesh Patel">
        <div class="jw-review-stars" aria-label="5 out of 5 stars">
          <?php for($i=0; $i<5; $i++): ?>
            <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>
        <p class="jw-review-text">"Amazing designs with authentic quality. I got my bridal jewellery from here and it was a wonderful experience. Highly recommended!"</p>
        <div class="jw-review-author">
          <div class="jw-review-avatar">RP</div>
          <div>
            <div class="jw-review-name">Rakesh Patel</div>
            <div class="jw-review-loc">Bopal, Ahmedabad</div>
          </div>
        </div>
      </article>

      <!-- Review 3 -->
      <article class="jw-review-card jw-reveal-scale" aria-label="Review by Neha Mehta">
        <div class="jw-review-stars" aria-label="5 out of 5 stars">
          <?php for($i=0; $i<5; $i++): ?>
            <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>
        <p class="jw-review-text">"Unique and elegant collections. Loved the custom design service. They understand your needs and suggest perfect options."</p>
        <div class="jw-review-author">
          <div class="jw-review-avatar">NM</div>
          <div>
            <div class="jw-review-name">Neha Mehta</div>
            <div class="jw-review-loc">Satellite, Ahmedabad</div>
          </div>
        </div>
      </article>

    </div>

    <!-- Google CTA -->
    <div class="jw-google-icon jw-reveal">
      <svg viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18A10.97 10.97 0 0 0 1 12c0 1.78.42 3.46 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
      <a href="https://g.page/r/CV89t-lfsM8FEBM/review" target="_blank" class="jw-btn jw-btn-outline" style="padding:10px 24px; font-size:0.82rem;">Read Google Reviews</a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     14. QR CODE / QUICK LINKS
     ═══════════════════════════════════════════════════ -->
<section class="jw-qr" id="qr" aria-label="Quick Links and QR Code">
  <div class="jw-container">
    <div class="jw-qr-wrapper jw-reveal">

      <div class="jw-qr-left">
        <h2>Let's Stay Connected</h2>
        <p>Scan the QR Code to visit our quick links</p>

        <div class="jw-qr-links">
          <a href="#hero" class="jw-qr-link">
            <div class="jw-qr-link-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
            <span>Visit Website</span>
          </a>
          <a href="<?php echo $brand_insta_url; ?>" class="jw-qr-link" rel="noopener noreferrer">
            <div class="jw-qr-link-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
            </div>
            <span>Follow on Instagram</span>
          </a>
          <a href="<?php echo $brand_maps; ?>" class="jw-qr-link" target="_blank" rel="noopener noreferrer">
            <div class="jw-qr-link-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <span>Visit Our Store</span>
          </a>
          <a href="#categories" class="jw-qr-link">
            <div class="jw-qr-link-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
            </div>
            <span>Saved Designs</span>
          </a>
          <a href="#store" class="jw-qr-link">
            <div class="jw-qr-link-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <span>Contact Us</span>
          </a>
        </div>
      </div>

      <div class="jw-qr-right">
        <!-- QR Placeholder -->
        <div class="jw-qr-placeholder" aria-label="QR Code">
          <img src="<?php echo $jw_base; ?>/img/qr-code.png"/>
        </div>
        <div class="jw-qr-label">Scan Me</div>
        <div class="jw-qr-sublabel">All Our Links in One Place</div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     15. VISIT OUR STORE
     ═══════════════════════════════════════════════════ -->
<section class="jw-store" id="store" aria-label="Visit our store in Ahmedabad">
  <div class="jw-container">
    <div class="jw-store-content">
      <h2 class="jw-section-title jw-reveal">Visit Our Store in <span class="text-highlight">Ahmedabad</span></h2>
      <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
      <p class="jw-section-subtitle jw-reveal">Experience our exclusive collection in person. Get personalised assistance from our jewellery experts.</p>

      <div class="jw-store-img jw-reveal-scale">
        <a href="<?php echo $brand_maps; ?>" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo $jw_base; ?>/img/visit-our-store.webp" alt="Aabhar Fine Jewellery store in Ahmedabad" width="800" height="350" loading="lazy">
        </a>
      </div>

      <!-- <div class="jw-store-features jw-reveal jw-stagger">
        <div class="jw-store-feat">
          <div class="jw-store-feat-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <strong>Prime Location</strong>
          <span>in Ahmedabad</span>
        </div>
        <div class="jw-store-feat">
          <div class="jw-store-feat-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <strong>Personalised</strong>
          <span>Consultation</span>
        </div>
        <div class="jw-store-feat">
          <div class="jw-store-feat-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
          </div>
          <strong>Exclusive</strong>
          <span>In-Store Collections</span>
        </div>
      </div> -->

      <!-- <a href="<?php echo $brand_maps; ?>" target="_blank" rel="noopener noreferrer" class="jw-btn jw-btn-gold jw-reveal">
        Get Directions
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a> -->
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     16. NEWSLETTER
     ═══════════════════════════════════════════════════ -->
<section class="jw-newsletter" id="newsletter" aria-label="Newsletter signup">
  <div class="jw-container">
    <h2 class="jw-reveal">Be the First to Know</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-reveal">Get updates on new collections, festive offers and exclusive events.</p>

    <form id="jw-newsletter-form" class="jw-newsletter-form jw-reveal" aria-label="Newsletter subscription form">
      <input type="email" placeholder="Enter your email address" required aria-label="Email address">
      <button type="submit" class="jw-btn jw-btn-gold">
        Subscribe
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </button>
    </form>

    <div class="jw-newsletter-success" role="alert">
      <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px;margin-right:6px;"><path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z"/></svg>
      Thank you! You've been subscribed to Aabhar Fine Jewellery updates.
    </div>

    <div class="jw-newsletter-perks jw-reveal jw-stagger">
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
        Exclusive Previews
      </span>
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
        Special Offers
      </span>
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
        Event Invitations
      </span>
      <span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
        Styling Tips
      </span>
    </div>
  </div>
</section>


<?php include('inc/footer.php'); ?>
