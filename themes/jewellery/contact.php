<?php
/**
 * Aabhar Fine Jewellery — Contact Us Page
 * Showroom directions, interactive consultation booking form, contact cards, map, and FAQs
 */

// ── Page Meta ──
$pageTitle = 'Contact Us — Aabhar Fine Jewellery | Store Location & Consultation Ahmedabad';
$pageDescr = 'Get in touch with Aabhar Fine Jewellery in Ahmedabad. Visit our Science City Road showroom, book a bridal consultation, or enquire on WhatsApp.';
$pageKeywords = 'contact Aabhar jewellery, jewellery store Ahmedabad Science City, bridal consultation Ahmedabad, buy gold jewellery Ahmedabad';

// ── Image Paths ──
$img = 'img';
$img_banner  = $img . '/jewel-banner-1.webp';
$img_pattern = $img . '/pattern-cicle.webp';
$img_prod1   = $img . '/product-1.webp';
$img_prod2   = $img . '/product-2.webp';
$img_prod3   = $img . '/product-3.webp';

// ── Configurable Contact Info ──
$brand_name   = 'Aabhar Fine Jewellery';
$brand_phone  = '+91 123-456-7890';
$brand_email  = 'aabharjewellery@zrott.com';
$brand_addr   = 'Science City Road, Ahmedabad, Gujarat, India';
$brand_maps   = 'https://maps.google.com/?q=Ahmedabad+Science+City+Road';
$brand_wa     = 'https://wa.me/911234567890';

// Load header
include(__DIR__ . '/inc/header.php');
?>

<!-- ═══════════════════════════════════════════════════
     1. PAGE HERO BANNER
     ═══════════════════════════════════════════════════ -->
<section class="jw-page-hero" aria-label="Contact Page Header">
  <div class="jw-page-hero-decor" aria-hidden="true"></div>
  <div class="jw-container">
    <div class="jw-page-hero-content">
      <nav class="jw-breadcrumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        <span>Contact Us</span>
      </nav>
      <h1>Connect with <span>Aabhar</span></h1>
      <div class="jw-ornament" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
      <p class="jw-page-hero-sub">Visit our flagship showroom on Science City Road or book a private appointment with our master jewellery consultants.</p>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     2. CONTACT INFO & CONSULTATION FORM
     ═══════════════════════════════════════════════════ -->
<section class="jw-contact-section" id="booking" aria-label="Contact details and consultation booking">
  <div class="jw-container">
    <div class="jw-contact-layout">

      <!-- Left Column: Info Cards -->
      <div class="jw-contact-info-cards jw-reveal-left">

        <div class="jw-info-card">
          <div class="jw-info-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <h4>Visit Our Showroom</h4>
            <p><?php echo $brand_addr; ?></p>
            <a href="<?php echo $brand_maps; ?>" target="_blank" rel="noopener noreferrer" class="jw-info-link">
              <span>Get Directions</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>

        <div class="jw-info-card">
          <div class="jw-info-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <div>
            <h4>Phone &amp; WhatsApp</h4>
            <p>Direct assistance &amp; instant queries</p>
            <p><strong><?php echo $brand_phone; ?></strong></p>
            <div style="display: flex; gap: 12px; margin-top: 6px;">
              <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $brand_phone); ?>" class="jw-info-link">Call Store</a>
              <span style="color: rgba(200,154,69,0.4);">•</span>
              <a href="<?php echo $brand_wa; ?>" target="_blank" rel="noopener noreferrer" class="jw-info-link">Chat on WhatsApp</a>
            </div>
          </div>
        </div>

        <div class="jw-info-card">
          <div class="jw-info-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div>
            <h4>Email Inquiries</h4>
            <p>Bespoke commissions &amp; corporate gifting</p>
            <a href="mailto:<?php echo $brand_email; ?>" class="jw-info-link"><?php echo $brand_email; ?></a>
          </div>
        </div>

        <div class="jw-info-card">
          <div class="jw-info-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div>
            <h4>Showroom Timings</h4>
            <p>Monday – Sunday: <strong>10:00 AM – 8:00 PM</strong></p>
            <p style="font-size: 0.78rem; color: var(--gold-dark); margin-top: 4px;">Open all 7 days • Valet parking available</p>
          </div>
        </div>

      </div>

      <!-- Right Column: Interactive Consultation Booking Form -->
      <div class="jw-form-card jw-reveal-right">
        <h3>Book a Consultation</h3>
        <p>Schedule a private jewellery viewing or inquire about custom designs with our master craftspersons.</p>

        <form id="jw-contact-form" onsubmit="event.preventDefault(); document.getElementById('jw-contact-form-success').style.display='block'; this.reset();">
          <div class="jw-form-row">
            <div class="jw-form-group">
              <label class="jw-form-label" for="cf-name">Your Full Name *</label>
              <input type="text" id="cf-name" class="jw-form-input" placeholder="e.g. Ananya Patel" required>
            </div>
            <div class="jw-form-group">
              <label class="jw-form-label" for="cf-phone">Phone Number *</label>
              <input type="tel" id="cf-phone" class="jw-form-input" placeholder="e.g. +91 98765 43210" required>
            </div>
          </div>

          <div class="jw-form-row">
            <div class="jw-form-group">
              <label class="jw-form-label" for="cf-email">Email Address</label>
              <input type="email" id="cf-email" class="jw-form-input" placeholder="e.g. ananya@example.com">
            </div>
            <div class="jw-form-group">
              <label class="jw-form-label" for="cf-service">Interested In</label>
              <select id="cf-service" class="jw-form-select">
                <option value="Bridal Jewellery Consultation">Bridal Jewellery Consultation</option>
                <option value="Custom Bespoke Design">Custom Bespoke Design</option>
                <option value="Gold Jewellery (22K / 24K)">Gold Jewellery (22K / 24K)</option>
                <option value="Certified Diamond Jewellery">Certified Diamond Jewellery</option>
                <option value="Heritage Silver Collection">Heritage Silver Collection</option>
                <option value="Other Inquiries">General Inquiry / Store Visit</option>
              </select>
            </div>
          </div>

          <div class="jw-form-row">
            <div class="jw-form-group">
              <label class="jw-form-label" for="cf-date">Preferred Date</label>
              <input type="date" id="cf-date" class="jw-form-input">
            </div>
            <div class="jw-form-group">
              <label class="jw-form-label" for="cf-time">Preferred Time Slot</label>
              <select id="cf-time" class="jw-form-select">
                <option value="Morning (10:30 AM - 1:00 PM)">Morning (10:30 AM - 1:00 PM)</option>
                <option value="Afternoon (1:00 PM - 4:30 PM)">Afternoon (1:00 PM - 4:30 PM)</option>
                <option value="Evening (4:30 PM - 7:30 PM)">Evening (4:30 PM - 7:30 PM)</option>
              </select>
            </div>
          </div>

          <div class="jw-form-group">
            <label class="jw-form-label" for="cf-notes">Your Message / Specific Requirements</label>
            <textarea id="cf-notes" class="jw-form-textarea" placeholder="Tell us about your preferences, wedding date, or any specific jewellery design you have in mind..."></textarea>
          </div>

          <button type="submit" class="jw-btn jw-btn-gold" style="width: 100%; justify-content: center;">
            Submit Consultation Request
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </button>

          <div id="jw-contact-form-success" class="jw-newsletter-success" style="display:none; margin-top: 16px;" role="alert">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px;margin-right:6px;"><path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z"/></svg>
            Thank you! Your consultation request has been received. Our team will contact you shortly to confirm your appointment.
          </div>
        </form>

      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     3. MAP & LOCATION SECTION
     ═══════════════════════════════════════════════════ -->
<section class="jw-map-section" id="map" aria-label="Showroom map location">
  <div class="jw-container">
    <div class="jw-map-card jw-reveal">
      <div class="jw-map-header">
        <div>
          <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: var(--brown); margin-bottom: 2px;">Aabhar Fine Jewellery Showroom</h3>
          <p style="font-size: 0.82rem; color: var(--text-muted); margin: 0;"><?php echo $brand_addr; ?></p>
        </div>
        <a href="<?php echo $brand_maps; ?>" target="_blank" rel="noopener noreferrer" class="jw-btn jw-btn-emerald jw-btn-sm">
          Open in Google Maps
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
        </a>
      </div>
      <iframe class="jw-map-frame" src="https://maps.google.com/maps?q=Science%20City%20Road,%20Ahmedabad,%20Gujarat&t=&z=15&ie=UTF8&iwloc=&output=embed" title="Aabhar Fine Jewellery Showroom Location Ahmedabad" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════
     4. FAQ ACCORDION
     ═══════════════════════════════════════════════════ -->
<section class="jw-faq-section" id="faq" aria-label="Frequently Asked Questions">
  <div class="jw-container">
    <h2 class="jw-section-title jw-reveal">Frequently Asked Questions</h2>
    <div class="jw-ornament jw-reveal" aria-hidden="true"><div class="jw-ornament-icon"></div></div>
    <p class="jw-section-subtitle jw-reveal">Clear answers to your queries regarding purity, consultation, and custom orders</p>

    <div class="jw-faq-list jw-reveal">

      <div class="jw-faq-item active">
        <div class="jw-faq-header">
          <h4>Do you provide BIS Hallmarking on all gold jewellery?</h4>
          <div class="jw-faq-arrow" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
        </div>
        <div class="jw-faq-body" style="max-height: 200px;">
          <div class="jw-faq-body-inner">
            Yes, absolutely. 100% of our gold jewellery is certified with the Bureau of Indian Standards (BIS) hallmark and includes a verifiable 6-digit alphanumeric HUID (Hallmark Unique Identification) code stamped on each item.
          </div>
        </div>
      </div>

      <div class="jw-faq-item">
        <div class="jw-faq-header">
          <h4>How does the custom jewellery design process work?</h4>
          <div class="jw-faq-arrow" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
        </div>
        <div class="jw-faq-body">
          <div class="jw-faq-body-inner">
            You can bring your sketches, Pinterest mood boards, or heirloom gemstones to our showroom. Our jewellery designers create a realistic 3D CAD render for your approval. Once finalized, our master artisans craft your piece within 10 to 18 business days.
          </div>
        </div>
      </div>

      <div class="jw-faq-item">
        <div class="jw-faq-header">
          <h4>Can I book a private bridal suite consultation?</h4>
          <div class="jw-faq-arrow" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
        </div>
        <div class="jw-faq-body">
          <div class="jw-faq-body-inner">
            Yes, we offer complimentary private bridal lounges where the bride, groom, and family can comfortably view matching sets with wedding outfits in privacy. We recommend booking at least 24 hours in advance via the form above.
          </div>
        </div>
      </div>

      <div class="jw-faq-item">
        <div class="jw-faq-header">
          <h4>What are your exchange and buyback policies?</h4>
          <div class="jw-faq-arrow" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
        </div>
        <div class="jw-faq-body">
          <div class="jw-faq-body-inner">
            We provide transparent lifetime exchange and buyback on all Aabhar jewellery. Gold value is calculated at prevailing market rates with zero deduction on gold weight, accompanied by certificate verification.
          </div>
        </div>
      </div>

      <div class="jw-faq-item">
        <div class="jw-faq-header">
          <h4>Do you offer international shipping or insurance?</h4>
          <div class="jw-faq-arrow" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
        </div>
        <div class="jw-faq-body">
          <div class="jw-faq-body-inner">
            Yes, we coordinate fully insured transit across India and select international destinations with tamper-evident packaging and delivery tracking.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include(__DIR__ . '/inc/footer.php'); ?>
