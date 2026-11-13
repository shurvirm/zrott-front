<?php
$pageId = 'kirana';
$which_page = "retail";
$pageTitle = 'Online Ordering System for Kirana Stores | Zrott Retail';
$pageDescr = 'Every seller gets their own WebApp on a subdomain. Share via QR or link. Customers order on WhatsApp or in-app. Deliver via Self, Rapido, or Porter with your own charges.';
$pageKeyword = 'online ordering system for kirana store, kirana store online ordering, WhatsApp ordering for kirana, digital catalogue for kirana, COD UPI kirana store, take kirana store online, online store for kirana shop';

include('../inc/db.php');
$canonical = '<link rel="canonical" href="' . $root . '/retail/kirana-store/" />';

$schema_tags = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Zrott Retail for Kirana Stores",
  "description": "Every seller gets their own WebApp on a subdomain. Share via QR or link. Customers order on WhatsApp or in-app. Deliver via Self, Rapido, or Porter with your own charges.",
  "brand": {
    "@type": "Brand",
    "name": "Zrott Retail"
  },
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": "0",
    "highPrice": "1499",
    "offerCount": "3",
    "availability": "https://schema.org/InStock"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "180"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
        "@type": "Question",
        "name": "What is the difference between Send Order on WhatsApp and Instant Order?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "Send Order on WhatsApp sends the order summary to the seller’s WhatsApp number so the conversation continues on chat. Instant Order places the order directly in the seller’s Zrott dashboard as a confirmed order without needing a chat reply."
        }
    },
    {
        "@type": "Question",
        "name": "How do I share my store with customers?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every seller gets a unique subdomain link and a matching QR code. Share the link on WhatsApp, Instagram, or Google Business Profile, and print the QR for the counter or shop shutter."
        }
    },
    {
        "@type": "Question",
        "name": "How do I fulfil orders on Zrott Retail?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "After an order lands, you prepare it and choose delivery - Self, Rapido, or Porter. The delivery method can be chosen per order."
        }
    },
    {
        "@type": "Question",
        "name": "Can I set my own delivery charges?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. During store setup you define delivery-charge rules such as a free-delivery threshold, flat fee, per-km rate, or zone-based charges. Customers see the exact delivery charge at checkout before confirming the order."
        }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "' . $root . '"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Retail",
      "item": "' . $root . '/retail-business-online/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Kirana Store Online Ordering",
      "item": "' . $root . '/retail/kirana-store/"
    }
  ]
}
</script>';

include('../inc/header.php');
?>

<div class="front-page-wrapper font-secondary">
    <main>

        <!-- --- 1. HERO SECTION --- -->
        <section class="retail-hero-section bio-hero">
            <div class="bio-hero-glow-1"></div>
            <div class="bio-hero-glow-2"></div>
            <div class="hero-grid-overlay"></div>

            <div class="front-container">
                <div class="retail-hero-grid">
                    <div class="retail-hero-text">
                        <div class="hero-pill-badge" style="margin-bottom: 16px;">
                            <i data-lucide="store" width="13" height="13"></i>
                            <span>KIRANA &bull; YOUR OWN STORE APP &amp; SUBDOMAIN</span>
                        </div>

                        <h1 class="retail-hero-title">
                            <span class="retail-title-brand">Online Ordering System</span>
                            <span class="retail-title-blue">for Kirana Stores</span>
                            <span class="retail-title-sub1">in India</span>
                        </h1>

                        <p class="retail-hero-desc">
                            Every seller gets their own store app on a personal subdomain. Share it as a QR code or direct link. Customers add items to cart and choose <strong>WhatsApp order</strong> or <strong>Instant order</strong>. You prepare the order and deliver via Self, Rapido, or Porter - with your own delivery-charge rules.
                        </p>

                        <div class="hero-cta-group">
                            <a href="<?php echo $contactHref; ?>" class="cta-primary retail-cta-blue">
                                <span>Create Your Kirana Store Free</span>
                                <i data-lucide="arrow-right"></i>
                            </a>
                            <a href="<?php echo $site_whatsapp; ?>" target="_blank" rel="noopener" class="retail-demo-btn">
                                <span class="retail-play-icon" style="background: #25d366;">
                                    <i data-lucide="message-circle" width="13" height="13" style="fill: #fff; color: #fff;"></i>
                                </span>
                                <span>Chat on WhatsApp</span>
                            </a>
                        </div>

                        <div class="retail-trust-badges">
                            <div class="retail-trust-badge">
                                <i data-lucide="check-circle-2" width="18" height="18"></i>
                                <span>Your Own Subdomain &amp; MiniApp</span>
                            </div>
                            <div class="retail-trust-badge">
                                <i data-lucide="check-circle-2" width="18" height="18"></i>
                                <span>QR + Direct Link Sharing</span>
                            </div>
                            <div class="retail-trust-badge">
                                <i data-lucide="check-circle-2" width="18" height="18"></i>
                                <span>WhatsApp or Instant Order</span>
                            </div>
                            <div class="retail-trust-badge">
                                <i data-lucide="check-circle-2" width="18" height="18"></i>
                                <span>No Customer App Needed</span>
                            </div>
                        </div>
                    </div>

                    <div class="retail-hero-visual-card">
                        <div class="retail-hero-merchant-bg">
                            <img src="https://images.unsplash.com/photo-1604719312566-8912e9227c6a?auto=format&fit=crop&w=800&q=80"
                                alt="Indian kirana store owner using smartphone to manage online orders"
                                class="retail-hero-merchant-img" />
                            <div class="retail-merchant-overlay"></div>
                            <div class="retail-speech-bubble">
                                <i data-lucide="sparkles" width="14" height="14" style="color: #2563eb;"></i>
                                <span>Meri Kirana Online!</span>
                            </div>
                        </div>

                        <!-- Phone Mockup 1: Customer PWA / Subdomain Store -->
                        <div class="retail-mockup-phone1">
                            <div class="mock-phone-notch"></div>
                            <div class="mock-phone-body">
                                <div class="mock-store-header">
                                    <div class="mock-store-name">Sharma Kirana Store</div>
                                    <div class="mock-store-loc">sharmakirana.zrott.store</div>
                                </div>
                                <div class="mock-search-box">
                                    <i data-lucide="search" width="12" height="12"></i>
                                    <span>Search groceries...</span>
                                </div>
                                <div class="mock-promo-banner">
                                    <div class="mock-promo-tag">Daily Needs</div>
                                    <div class="mock-promo-headline">Order Groceries From Home</div>
                                </div>
                                <div class="mock-cat-strip">
                                    <div class="mock-cat-chip">Atta &amp; Rice</div>
                                    <div class="mock-cat-chip">Dals</div>
                                    <div class="mock-cat-chip">Oil &amp; Ghee</div>
                                </div>
                                <div class="mock-offer-card">
                                    <span>Free delivery above ₹300</span>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Mockup 2: Cart + Order Choice -->
                        <div class="retail-mockup-phone2">
                            <div class="mock-phone-notch"></div>
                            <div class="mock-phone-body">
                                <div class="mock-cart-title">
                                    <span>Your Cart (3 items)</span>
                                    <i data-lucide="shopping-bag" width="13" height="13" style="color: #2563eb;"></i>
                                </div>
                                <div class="mock-cart-items-list">
                                    <div class="mock-cart-item">
                                        <span class="mock-cart-item-name">Aashirvaad Atta 5kg</span>
                                        <span class="mock-cart-item-qty">₹285</span>
                                    </div>
                                    <div class="mock-cart-item">
                                        <span class="mock-cart-item-name">Tata Salt 1kg</span>
                                        <span class="mock-cart-item-qty">₹22</span>
                                    </div>
                                    <div class="mock-cart-item">
                                        <span class="mock-cart-item-name">Amul Butter 500g</span>
                                        <span class="mock-cart-item-qty">₹285</span>
                                    </div>
                                </div>
                                <div style="display:flex;justify-content:space-between;font-weight:800;font-size:.75rem;margin-top:6px;padding:4px 0;border-top:1px dashed #cbd5e1;">
                                    <span>Total:</span>
                                    <span style="color:#16a34a;">₹592</span>
                                </div>
                                <div class="mock-cart-checkout-btn" style="background:#25d366;margin-bottom:6px;">
                                    <i data-lucide="message-circle" width="12" height="12" style="margin-right:4px;"></i>
                                    Send Order on WhatsApp
                                </div>
                                <div class="mock-cart-checkout-btn">
                                    Instant Order Now &rarr;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Features Strip -->
                <div class="retail-quick-strip">
                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-green"><i data-lucide="globe" width="24" height="24"></i></div>
                        <div class="retail-quick-text">Own Subdomain + PWA</div>
                    </div>
                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-orange"><i data-lucide="qr-code" width="24" height="24"></i></div>
                        <div class="retail-quick-text">QR &amp; Direct Link Sharing</div>
                    </div>
                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-purple"><i data-lucide="shopping-cart" width="24" height="24"></i></div>
                        <div class="retail-quick-text">Add-to-Cart Ordering</div>
                    </div>
                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-blue"><i data-lucide="message-circle" width="24" height="24"></i></div>
                        <div class="retail-quick-text">WhatsApp or Instant Order</div>
                    </div>
                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-pink"><i data-lucide="truck" width="24" height="24"></i></div>
                        <div class="retail-quick-text">Self / Rapido / Porter Delivery</div>
                    </div>
                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-yellow"><i data-lucide="indian-rupee" width="24" height="24"></i></div>
                        <div class="retail-quick-text">Custom Delivery Charges</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- --- 2. DIRECT ANSWER / INTRODUCTION --- -->
        <section class="section-showcase-split">
            <div class="front-container">
                <div class="section-header-center" style="margin-bottom: 20px;">
                    <h2 class="section-title">What is an Online Ordering System for a Kirana Store?</h2>
                </div>
                <div style="max-width: 950px; margin: 0 auto; text-align: center;">
                    <p style="font-size: 1.08rem; color: #334155; line-height: 1.75;">
                        An <strong>online ordering system for a kirana store</strong> lets customers browse grocery products, add items to a cart, and place orders online. With <strong>Zrott Retail</strong>, every kirana owner gets their own <strong>progressive web app on a dedicated subdomain</strong> that they can share via QR code or direct link. Customers checkout either by sending the order on <strong>WhatsApp</strong> or by placing an <strong>Instant Order</strong>. The seller prepares the order and delivers it via <strong>Self, Rapido, or Porter</strong> - with delivery charges the seller defines at setup. No customer app download, no sales commission.
                    </p>
                </div>
            </div>
        </section>

        <!-- --- NEW: CUSTOMER ORDER FLOW --- -->
<section id="customer-order-flow" class="retail-showcase-section">
    <div class="front-container">
        <div class="section-header-center" style="margin-bottom: 36px;">
            <div class="hero-pill-badge" style="margin-bottom: 12px;">
                <i data-lucide="smartphone" width="13" height="13"></i>
                <span>CUSTOMER EXPERIENCE</span>
            </div>
            <h2 class="section-title">How Customers Place an Order on Your Store</h2>
            <p class="section-subtitle">
                Four taps from store link to order confirmation. No customer app installation.
            </p>
        </div>

        <div class="retail-dual-grid">
            <!-- Step A -->
            <div class="retail-showcase-card" style="padding: 24px;">
                <div>
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                        <div style="background:#2563eb; color:#fff; width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:800;">1</div>
                        <h3 class="retail-card-title" style="margin:0; font-size:1rem;">Open Your Store Link or QR</h3>
                    </div>
                    <p style="font-size:0.88rem; color:#64748b; line-height:1.55;">
                        Customer scans your QR code or opens your link (e.g. <em>sharmakirana.zrott.store</em>). Your PWA opens instantly in the browser - no download needed.
                    </p>
                </div>
                <div style="display:flex; gap:10px; margin-top:14px;">
                    <div style="flex:1; background:#f1f5f9; border:1px dashed #cbd5e1; border-radius:8px; height:72px; display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:.7rem; font-weight:600;">
                        QR Code Placeholder
                    </div>
                    <div style="flex:1; background:#f1f5f9; border:1px dashed #cbd5e1; border-radius:8px; height:72px; display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:.7rem; font-weight:600; text-align:center; padding:6px;">
                        Direct Link Placeholder
                    </div>
                </div>
            </div>

            <!-- Step B -->
            <div class="retail-showcase-card" style="padding: 24px;">
                <div>
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                        <div style="background:#2563eb; color:#fff; width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:800;">2</div>
                        <h3 class="retail-card-title" style="margin:0; font-size:1rem;">Browse &amp; Add to Cart</h3>
                    </div>
                    <p style="font-size:0.88rem; color:#64748b; line-height:1.55;">
                        Customer browses categories, checks prices and pack sizes, and taps “Add” on each item. The cart updates instantly.
                    </p>
                </div>
                <div style="margin-top:14px; background:#f8fafc; border-radius:8px; padding:10px;">
                    <div style="display:flex; justify-content:space-between; font-size:.8rem; padding:4px 0;">
                        <span>Aashirvaad Atta 5kg</span><span style="color:#16a34a; font-weight:700;">₹285</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; font-size:.8rem; padding:4px 0; border-top:1px solid #e2e8f0;">
                        <span>Tata Salt 1kg</span><span style="color:#16a34a; font-weight:700;">₹22</span>
                    </div>
                </div>
            </div>

            <!-- Step C -->
            <div class="retail-showcase-card" style="padding: 24px;">
                <div>
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                        <div style="background:#2563eb; color:#fff; width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:800;">3</div>
                        <h3 class="retail-card-title" style="margin:0; font-size:1rem;">Choose Order Method</h3>
                    </div>
                    <p style="font-size:0.88rem; color:#64748b; line-height:1.55;">
                    Two simple options appear at checkout. Customer picks whichever is convenient.
                </p>

                </div>
                <div style="margin-top:12px; display:flex; flex-direction:column; gap:8px;">
                    <div style="background:#dcfce7; border:1px solid #86efac; border-radius:8px; padding:10px; display:flex; align-items:center; gap:8px;">
                        <i data-lucide="message-circle" width="16" height="16" style="color:#16a34a;"></i>
                        <div>
                            <div style="font-size:.82rem; font-weight:800; color:#065f46;">Send Order on WhatsApp</div>
                            <div style="font-size:.7rem; color:#047857;">Order summary + items sent to seller’s WhatsApp</div>
                        </div>
                    </div>
                    <div style="background:#dbeafe; border:1px solid #93c5fd; border-radius:8px; padding:10px; display:flex; align-items:center; gap:8px;">
                        <i data-lucide="zap" width="16" height="16" style="color:#2563eb;"></i>
                        <div>
                            <div style="font-size:.82rem; font-weight:800; color:#1e40af;">Instant Order Now</div>
                            <div style="font-size:.7rem; color:#1d4ed8;">Order placed directly in seller dashboard</div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Step D -->
            <div class="retail-showcase-card" style="padding: 24px;">
                <div>
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                        <div style="background:#2563eb; color:#fff; width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:800;">4</div>
                        <h3 class="retail-card-title" style="margin:0; font-size:1rem;">Order Confirmed</h3>
                    </div>
                    <p style="font-size:0.88rem; color:#64748b; line-height:1.55;">
                        Customer sees a clear confirmation screen with order ID and total. Seller is notified instantly on WhatsApp and in the dashboard.
                    </p>
                </div>
                <div style="margin-top:14px; background:#ecfdf5; border:1px solid #a7f3d0; border-radius:8px; padding:12px; text-align:center;">
                    <i data-lucide="check-circle-2" width="24" height="24" style="color:#16a34a;"></i>
                    <div style="font-size:.85rem; font-weight:800; color:#065f46; margin-top:4px;">Order #ZR-1042 Placed</div>
                    <div style="font-size:.72rem; color:#047857;">Total: ₹592 • Payment: COD / UPI</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- --- NEW: SELLER FULFILMENT & DELIVERY --- -->
<section class="retail-why-section" style="background:#f8fafc;">
    <div class="front-container">
        <div class="section-header-center" style="margin-bottom: 28px;">
            <div class="hero-pill-badge" style="margin-bottom:12px;">
                <i data-lucide="truck" width="13" height="13"></i>
                <span>SELLER FULFILMENT</span>
            </div>
            <h2 class="section-title">Prepare Orders &amp; Deliver Your Way</h2>
            <p class="section-subtitle">
                Once an order lands, you decide how to fulfil it. Self-delivery, Rapido, or Porter - your call, your rules.
            </p>
        </div>

        <div class="retail-types-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap:16px;">
            <!-- Self Delivery -->
            <div class="retail-type-card" style="padding: 22px;">
                <div class="why-icon-box" style="background:#dcfce7; color:#16a34a; width:60px; height:60px; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:12px; border:1px dashed; margin-bottom:12px;">
                    <i data-lucide="bike" width="22" height="22"></i>
                </div>
                <h3 class="retail-type-title" style="font-size:1rem; margin-bottom:6px;">Self Delivery</h3>
                <p style="font-size:0.86rem; color:#64748b; line-height:1.55;">
                    Your staff delivers locally. Set your own charge rule (free above ₹300, flat ₹20, or per-km) during setup.
                </p>
            </div>

            <!-- Rapido -->
            <div class="retail-type-card" style="padding: 22px;">
                <div style="background:#fff7ed; color:#ea580c; width:60px; height:60px; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:12px; border:1px dashed #fdba74;">
                    <!-- DUMMY ICON SLOT - replace with Rapido logo asset -->
                    <span style="font-size:.65rem; font-weight:800; color:#ea580c; text-align:center; line-height:1;">RAPIDO</span>
                </div>
                <h3 class="retail-type-title" style="font-size:1rem; margin-bottom:6px;">Rapido Delivery</h3>
                <p style="font-size:0.86rem; color:#64748b; line-height:1.55;">
                    Hand off the parcel to a Rapido rider. Customer pays the rider directly or you prepay - your setting.
                </p>
            </div>

            <!-- Porter -->
            <div class="retail-type-card" style="padding: 22px;">
                <div style="background:#eff6ff; color:#2563eb; width:60px; height:60px; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:12px; border:1px dashed #93c5fd;">
                    <!-- DUMMY ICON SLOT - replace with Porter logo asset -->
                    <span style="font-size:.65rem; font-weight:800; color:#2563eb; text-align:center; line-height:1;">PORTER</span>
                </div>
                <h3 class="retail-type-title" style="font-size:1rem; margin-bottom:6px;">Porter Delivery</h3>
                <p style="font-size:0.86rem; color:#64748b; line-height:1.55;">
                    Book a Porter vehicle for larger or bulk orders. Tracking info is added to the order automatically.
                </p>
            </div>
        </div>

        <!-- Delivery Charge Rule Card -->
        <div style="margin-top:28px; background:#fff; border:1px solid #e2e8f0; border-radius:14px; padding:26px; display:flex; gap:20px; flex-wrap:wrap; align-items:center;">
            <div style="flex:1; min-width:260px;">
                <div style="font-size:.7rem; font-weight:800; letter-spacing:.05em; color:#2563eb; text-transform:uppercase; margin-bottom:6px;">Setup Once, Apply Automatically</div>
                <h3 style="font-size:1.15rem; font-weight:800; color:#0f172a; margin-bottom:8px;">Set Your Delivery Charge Rules</h3>
                <p style="font-size:.9rem; color:#64748b; line-height:1.6; margin:0;">
                    During store setup, define charges per delivery method - free delivery threshold, flat fee, per-km rate, or zone-based. Customers see the exact charge before confirming the order. No surprises.
                </p>
            </div>
            <div style="flex:0 0 260px;">
                <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:14px; font-size:.82rem;">
                    <div style="display:flex; justify-content:space-between; padding:5px 0; border-bottom:1px solid #e2e8f0;">
                        <span style="color:#64748b;">Free delivery above</span>
                        <strong style="color:#16a34a;">₹300</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding:5px 0; border-bottom:1px solid #e2e8f0;">
                        <span style="color:#64748b;">Below threshold</span>
                        <strong>₹20 flat</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding:5px 0;">
                        <span style="color:#64748b;">Rapido / Porter</span>
                        <strong>Actuals</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- --- NEW: STORE SHARING (QR + LINK) --- -->
<section class="retail-types-section bg-white border-top border-bottom">
    <div class="front-container">
        <div class="section-header-center">
            <h2 class="section-title">Share Your Store - QR or Direct Link</h2>
            <p class="section-subtitle">
                Print the QR at your counter, share the link on WhatsApp, add it to Google Business Profile - every route lands the customer on your store.
            </p>
        </div>

        <div class="retail-dual-grid" style="grid-template-columns: 1fr 1fr;">
            <div style="background:#f0f9ff; border-radius:14px; padding:26px; display:flex; gap:18px; align-items:center;">
                <div style="flex:0 0 100px; background:#fff; border:1px dashed #93c5fd; border-radius:12px; height:100px; display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:.7rem; font-weight:700; text-align:center; padding:6px;">
                    <!-- DUMMY QR SLOT - replace with store QR in production -->
                    YOUR<br>STORE<br>QR
                </div>
                <div>
                    <h3 style="font-size:1.05rem; font-weight:800; color:#0f172a; margin-bottom:6px;">Counter QR Code</h3>
                    <p style="font-size:.88rem; color:#64748b; line-height:1.55; margin:0;">
                        Print and place it at your counter or on the shutter. Walk-in customers scan it and become online customers.
                    </p>
                </div>
            </div>

            <div style="background:#fdf2f8; border-radius:14px; padding:26px; display:flex; gap:18px; align-items:center;">
                <div style="flex:0 0 100px; background:#fff; border:1px dashed #f9a8d4; border-radius:12px; height:100px; display:flex; align-items:center; justify-content:center; color:#94a3b8; font-size:.68rem; font-weight:700; text-align:center; padding:6px;">
                    <!-- DUMMY LINK SLOT - replace with live subdomain in production -->
                    YOUR<br>SUBDOMAIN<br>LINK
                </div>
                <div>
                    <h3 style="font-size:1.05rem; font-weight:800; color:#0f172a; margin-bottom:6px;">Direct Link &amp; Mini App</h3>
                    <p style="font-size:.88rem; color:#64748b; line-height:1.55; margin:0;">
                        Share <em>yourstore.zrott.store</em> on WhatsApp, Instagram, or Google. Customers can “Add to Home Screen” for app-like access.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- --- 3. WHY KIRANA STORES NEED ONLINE ORDERING --- -->
        <section class="retail-types-section" style="background: #f8fafc;">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Why Kirana Stores Need Online Ordering</h2>
                    <p class="section-subtitle">
                        Customer habits are changing. Your regulars already order on WhatsApp. Give them a simpler way to buy from you.
                    </p>
                </div>

                <div class="retail-types-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                    <div class="retail-type-card" style="padding: 22px;">
                        <div class="why-icon-box" style="background: #dbeafe; color: #2563eb; margin-bottom: 12px;">
                            <i data-lucide="message-circle" width="24" height="24"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 1rem; margin-bottom: 6px;">Customers Already Use WhatsApp</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.55;">
                            Most of your regular customers send grocery lists on WhatsApp. A structured store link turns those messy chats into clear, itemized orders with prices and addresses.
                        </p>
                    </div>

                    <div class="retail-type-card" style="padding: 22px;">
                        <div class="why-icon-box" style="background: #fce7f3; color: #db2777; margin-bottom: 12px;">
                            <i data-lucide="repeat" width="24" height="24"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 1rem; margin-bottom: 6px;">Repeat Orders Matter</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.55;">
                            Daily-needs customers buy the same items regularly. An online catalogue makes reordering quick for them and reduces back-and-forth calls for you.
                        </p>
                    </div>

                    <div class="retail-type-card" style="padding: 22px;">
                        <div class="why-icon-box" style="background: #ffedd5; color: #ea580c; margin-bottom: 12px;">
                            <i data-lucide="shield-off" width="24" height="24"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 1rem; margin-bottom: 6px;">Reduce Aggregator Dependence</h3>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.55;">
                            Marketplace apps charge high commissions and keep customer data. Zrott Retail gives you your own ordering channel where you keep 100% of sales and customer contacts.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- --- 4. HOW ZROTT RETAIL WORKS --- -->
        <section id="how-it-works" class="retail-showcase-section">
            <div class="front-container">
                <div class="section-header-center" style="margin-bottom: 36px;">
                    <div class="hero-pill-badge" style="margin-bottom: 12px;">
                        <i data-lucide="layers" width="13" height="13"></i>
                        <span>SIMPLE 4-STEP PROCESS</span>
                    </div>
                    <h2 class="section-title">How Zrott Retail Works for Kirana Stores</h2>
                    <p class="section-subtitle">
                        From signup to first order - everything happens on your smartphone.
                    </p>
                </div>

                <div class="retail-dual-grid">
                    <!-- Step 1 -->
                    <div class="retail-showcase-card" style="padding: 28px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div style="background: #2563eb; color: #fff; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1rem;">1</div>
                            <h3 class="retail-card-title" style="margin: 0; font-size: 1.1rem;">Create Your Kirana Store</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6;">
                            Sign up with your mobile number. Add your store name, address, and contact details. Your online store is ready in minutes.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="retail-showcase-card" style="padding: 28px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div style="background: #2563eb; color: #fff; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1rem;">2</div>
                            <h3 class="retail-card-title" style="margin: 0; font-size: 1.1rem;">Add Products &amp; Share Link</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6;">
                            Add grocery items with photos, prices, pack sizes, and categories. Then share your store link on WhatsApp, Instagram, or Google Business Profile.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="retail-showcase-card" style="padding: 28px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div style="background: #2563eb; color: #fff; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1rem;">3</div>
                            <h3 class="retail-card-title" style="margin: 0; font-size: 1.1rem;">Customers Browse &amp; Order</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6;">
                            Customers open your link - no app needed. They browse your catalogue, add items to cart, and place the order with COD or UPI.
                        </p>
                    </div>

                    <!-- Step 4 -->
                    <div class="retail-showcase-card" style="padding: 28px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                            <div style="background: #2563eb; color: #fff; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1rem;">4</div>
                            <h3 class="retail-card-title" style="margin: 0; font-size: 1.1rem;">Receive &amp; Manage Orders</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6;">
                            Orders arrive on your WhatsApp and in the Zrott Merchant dashboard with customer name, phone, address, items, and payment method. Deliver and collect payment.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- --- 5. KEY FEATURES FOR KIRANA STORES --- -->
        <section class="retail-why-section">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Key Features for Kirana Stores</h2>
                    <p class="section-subtitle">
                        Everything you need to take grocery orders online — from your own store app and QR sharing to WhatsApp or Instant ordering, with Self, Rapido, or Porter delivery.
                    </p>
                </div>

                <div class="retail-why-features-grid" style="grid-template-columns: repeat(auto-fit, minmax(330px, 1fr)); gap: 16px;">

                    <!-- Feature 1: Own Subdomain + PWA -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #dcfce7; color: #16a34a;">
                            <i data-lucide="globe" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Own Subdomain + PWA Store</div>
                            <div class="why-feat-sub">Every seller gets a dedicated store on their own subdomain, installable as a PWA</div>
                        </div>
                    </div>

                    <!-- Feature 2: QR & Link Sharing -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #dbeafe; color: #2563eb;">
                            <i data-lucide="qr-code" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">QR Code &amp; Direct Link Sharing</div>
                            <div class="why-feat-sub">Share your store via QR at the counter or a direct link on WhatsApp and Instagram</div>
                        </div>
                    </div>

                    <!-- Feature 3: Digital Catalogue -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #fce7f3; color: #db2777;">
                            <i data-lucide="list" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Digital Product Catalogue</div>
                            <div class="why-feat-sub">Add grocery items with photos, prices, pack sizes, and categories</div>
                        </div>
                    </div>

                    <!-- Feature 4: Add-to-Cart Ordering -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #ffedd5; color: #ea580c;">
                            <i data-lucide="shopping-cart" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Add-to-Cart Ordering</div>
                            <div class="why-feat-sub">Customers browse, add multiple items to cart, and check out in one flow</div>
                        </div>
                    </div>

                    <!-- Feature 5: Dual Order Mode -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #f3e8ff; color: #9333ea;">
                            <i data-lucide="git-branch" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">WhatsApp or Instant Order</div>
                            <div class="why-feat-sub">Customers choose to send the order on WhatsApp or place it instantly in your dashboard</div>
                        </div>
                    </div>

                    <!-- Feature 6: No Customer App Required -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #ecfeff; color: #0891b2;">
                            <i data-lucide="smartphone" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">No Customer App Download</div>
                            <div class="why-feat-sub">Customers shop from the browser link — no app store download needed</div>
                        </div>
                    </div>

                    <!-- Feature 7: COD & UPI Payments -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #fef9c3; color: #ca8a04;">
                            <i data-lucide="indian-rupee" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">COD &amp; UPI Payments</div>
                            <div class="why-feat-sub">Accept cash on delivery or direct UPI transfers to your account</div>
                        </div>
                    </div>

                    <!-- Feature 8: Multi-Partner Delivery -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #e0e7ff; color: #4f46e5;">
                            <i data-lucide="truck" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Self, Rapido, or Porter Delivery</div>
                            <div class="why-feat-sub">Fulfil each order via your own staff or any delivery partner you prefer</div>
                        </div>
                    </div>

                    <!-- Feature 9: Configurable Delivery Charges -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #fae8ff; color: #c026d3;">
                            <i data-lucide="receipt" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Custom Delivery Charge Rules</div>
                            <div class="why-feat-sub">Set free-delivery thresholds, flat fees, or per-km rates once at setup</div>
                        </div>
                    </div>

                    <!-- Feature 10: Mobile Store Management -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #dcfce7; color: #16a34a;">
                            <i data-lucide="settings" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Mobile Store Management</div>
                            <div class="why-feat-sub">Manage products, prices, stock, and incoming orders from your phone</div>
                        </div>
                    </div>

                    <!-- Feature 11: Customer CRM -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #dbeafe; color: #2563eb;">
                            <i data-lucide="users" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Customer CRM &amp; Order History</div>
                            <div class="why-feat-sub">View past orders, contact details, and repeat-customer patterns</div>
                        </div>
                    </div>

                    <!-- Feature 12: Offers & Marketing -->
                    <div class="retail-why-feat-card">
                        <div class="why-icon-box" style="background: #fce7f3; color: #db2777;">
                            <i data-lucide="megaphone" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Offers &amp; Customer Marketing</div>
                            <div class="why-feat-sub">Send discounts and announcements to repeat buyers from your dashboard</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- --- 6. BENEFITS FOR KIRANA OWNERS --- -->
        <section class="retail-why-section" style="background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);">
            <div class="front-container">
                <div class="section-header-center" style="margin-bottom: 34px;">
                    <div class="hero-pill-badge" style="margin-bottom: 12px;">
                        <i data-lucide="trending-up" width="13" height="13"></i>
                        <span>WHY KIRANA OWNERS CHOOSE ZROTT</span>
                    </div>
                    <h2 class="section-title">Benefits for Kirana Store Owners</h2>
                    <p class="section-subtitle">
                        Practical advantages for your daily business — from more order channels to owning your customer list.
                    </p>
                </div>

                <div class="retail-why-features-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 16px;">

                    <!-- Benefit 1 -->
                    <div class="retail-why-feat-card" style="border-bottom: 3px solid #16a34a;">
                        <div class="why-icon-box" style="background: #dcfce7; color: #16a34a;">
                            <i data-lucide="store" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Orders Beyond Walk-Ins</div>
                            <div class="why-feat-sub">Take online orders from customers who can’t visit the shop in person</div>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="retail-why-feat-card" style="border-bottom: 3px solid #2563eb;">
                        <div class="why-icon-box" style="background: #dbeafe; color: #2563eb;">
                            <i data-lucide="clipboard-check" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Less Manual Order-Taking</div>
                            <div class="why-feat-sub">Structured cart orders replace messy WhatsApp chat lists and calls</div>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="why-feat-text" style="display:none;"></div>
                    <div class="retail-why-feat-card" style="border-bottom: 3px solid #9333ea;">
                        <div class="why-icon-box" style="background: #f3e8ff; color: #9333ea;">
                            <i data-lucide="users" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">You Own Your Customer List</div>
                            <div class="why-feat-sub">Keep contact details and order history — not locked inside a marketplace app</div>
                        </div>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="retail-why-feat-card" style="border-bottom: 3px solid #db2777;">
                        <div class="why-icon-box" style="background: #fce7f3; color: #db2777;">
                            <i data-lucide="megaphone" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Promote Offers Directly</div>
                            <div class="why-feat-sub">Send discounts and festive offers to repeat grocery customers</div>
                        </div>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="retail-why-feat-card" style="border-bottom: 3px solid #ea580c;">
                        <div class="why-icon-box" style="background: #ffedd5; color: #ea580c;">
                            <i data-lucide="percent" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Zero Marketplace Commission</div>
                            <div class="why-feat-sub">Keep 100% of your order value — no per-order cut taken by a platform</div>
                        </div>
                    </div>

                    <!-- Benefit 6 -->
                    <div class="retail-why-feat-card" style="border-bottom: 3px solid #0891b2;">
                        <div class="why-icon-box" style="background: #ecfeff; color: #0891b2;">
                            <i data-lucide="smartphone" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Run Store from Your Phone</div>
                            <div class="why-feat-sub">Manage products, stock, orders, and delivery from a single mobile dashboard</div>
                        </div>
                    </div>

                    <!-- Benefit 7 -->
                    <div class="retail-why-feat-card" style="border-bottom: 3px solid #ca8a04;">
                        <div class="why-icon-box" style="background: #fef9c3; color: #ca8a04;">
                            <i data-lucide="zap" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">No-App Shopping for Customers</div>
                            <div class="why-feat-sub">Customers open your link or scan your QR and order in seconds</div>
                        </div>
                    </div>

                    <!-- Benefit 8 -->
                    <div class="retail-why-feat-card" style="border-bottom: 3px solid #4f46e5;">
                        <div class="why-icon-box" style="background: #e0e7ff; color: #4f46e5;">
                            <i data-lucide="truck" width="22" height="22"></i>
                        </div>
                        <div class="why-feat-text">
                            <div class="why-feat-title">Fulfil via Self, Rapido, or Porter</div>
                            <div class="why-feat-sub">Choose the delivery method per order — you decide, not the platform</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- --- 7. COMPARISON TABLE --- -->
        <section class="retail-why-section" style="background: #f8fafc;">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Zrott Retail vs Marketplace Delivery Apps</h2>
                    <p class="section-subtitle">
                        A factual comparison for kirana owners evaluating their options.
                    </p>
                </div>

                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.08);">
                        <thead>
                            <tr style="background: #1e293b; color: #fff;">
                                <th style="padding: 14px 18px; text-align: left; font-size: 0.85rem; font-weight: 700;">Feature</th>
                                <th style="padding: 14px 18px; text-align: left; font-size: 0.85rem; font-weight: 700;">Zrott Retail</th>
                                <th style="padding: 14px 18px; text-align: left; font-size: 0.85rem; font-weight: 700;">Marketplace Delivery Apps</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 0.88rem; color: #334155;">
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="padding: 12px 18px; font-weight: 600;">Sales Commission</td>
                                <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">Zero</td>
                                <td style="padding: 12px 18px; color: #dc2626;">Typically 20–30% per order</td>
                            </tr>
<tr style="border-bottom: 1px solid #e2e8f0;">
    <td style="padding: 12px 18px; font-weight: 600;">Delivery Options</td>
    <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">Self, Rapido, or Porter (your choice)</td>
    <td style="padding: 12px 18px; color: #dc2626;">Platform-assigned rider only</td>
</tr>
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="padding: 12px 18px; font-weight: 600;">Customer Data Ownership</td>
                                <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">You own it</td>
                                <td style="padding: 12px 18px; color: #dc2626;">Platform controls it</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="padding: 12px 18px; font-weight: 600;">Customer App Requirement</td>
                                <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">No app needed</td>
                                <td style="padding: 12px 18px; color: #dc2626;">Requires app download</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="padding: 12px 18px; font-weight: 600;">WhatsApp Order Routing</td>
                                <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">Yes, directly to you</td>
                                <td style="padding: 12px 18px; color: #dc2626;">No</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="padding: 12px 18px; font-weight: 600;">COD &amp; UPI</td>
                                <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">Supported</td>
                                <td style="padding: 12px 18px;">Varies by platform</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="padding: 12px 18px; font-weight: 600;">Branding &amp; Custom Domain</td>
                                <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">Your brand, your domain</td>
                                <td style="padding: 12px 18px; color: #dc2626;">Listed under platform brand</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #e2e8f0;">
                                <td style="padding: 12px 18px; font-weight: 600;">Direct Customer Communication</td>
                                <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">Yes</td>
                                <td style="padding: 12px 18px; color: #dc2626;">Limited or restricted</td>
                            </tr>
                            <tr>
                                <td style="padding: 12px 18px; font-weight: 600;">Control Over Offers &amp; Pricing</td>
                                <td style="padding: 12px 18px; color: #16a34a; font-weight: 600;">You decide</td>
                                <td style="padding: 12px 18px; color: #dc2626;">Platform influences</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- --- 7. WHO SHOULD USE ZROTT RETAIL --- -->
        <section class="retail-types-section">
            <div class="front-container">
                <div class="section-header-center">
                    <div class="hero-pill-badge" style="margin-bottom: 12px;">
                        <i data-lucide="users" width="13" height="13"></i>
                        <span>BUILT FOR LOCAL GROCERY BUSINESSES</span>
                    </div>
                    <h2 class="section-title">Who Should Use Zrott Retail?</h2>
                    <p class="section-subtitle">
                        Built for small, local grocery businesses that want a direct online ordering channel — with their own store link, WhatsApp or Instant orders, and Self / Rapido / Porter delivery.
                    </p>
                </div>

                <div class="retail-types-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 16px;">

                    <!-- 1. Neighborhood Kirana Stores -->
                    <div class="retail-type-card" style="padding: 24px 20px; text-align: center;">
                        <div class="why-icon-box" style="background: #dcfce7; color: #16a34a; margin: 0 auto 12px;">
                            <i data-lucide="store" width="22" height="22"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 0.98rem; margin-bottom: 6px;">Neighborhood Kirana Stores</h3>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">
                            Take daily-needs orders from regulars without leaving the counter.
                        </p>
                    </div>

                    <!-- 2. Small Grocery Shops -->
                    <div class="retail-type-card" style="padding: 24px 20px; text-align: center;">
                        <div class="why-icon-box" style="background: #dbeafe; color: #2563eb; margin: 0 auto 12px;">
                            <i data-lucide="shopping-basket" width="22" height="22"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 0.98rem; margin-bottom: 6px;">Small Grocery Shops</h3>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">
                            Turn your product list into a shareable online catalogue.
                        </p>
                    </div>

                    <!-- 3. Daily-Needs Stores -->
                    <div class="retail-type-card" style="padding: 24px 20px; text-align: center;">
                        <div class="why-icon-box" style="background: #ffedd5; color: #ea580c; margin: 0 auto 12px;">
                            <i data-lucide="package" width="22" height="22"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 0.98rem; margin-bottom: 6px;">Daily-Needs Stores</h3>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">
                            Let customers reorder staples, milk, and household items online.
                        </p>
                    </div>

                    <!-- 4. Family-Run Grocery Businesses -->
                    <div class="retail-type-card" style="padding: 24px 20px; text-align: center;">
                        <div class="why-icon-box" style="background: #f3e8ff; color: #9333ea; margin: 0 auto 12px;">
                            <i data-lucide="home" width="22" height="22"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 0.98rem; margin-bottom: 6px;">Family-Run Grocery Businesses</h3>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">
                            Simple enough for every family member to run from a phone.
                        </p>
                    </div>

                    <!-- 5. Stores Wanting WhatsApp Orders -->
                    <div class="retail-type-card" style="padding: 24px 20px; text-align: center;">
                        <div class="why-icon-box" style="background: #fce7f3; color: #db2777; margin: 0 auto 12px;">
                            <i data-lucide="message-circle" width="22" height="22"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 0.98rem; margin-bottom: 6px;">Stores Wanting WhatsApp Orders</h3>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">
                            Receive structured orders on WhatsApp instead of loose chat lists.
                        </p>
                    </div>

                    <!-- 6. Owners Reducing Aggregator Dependence -->
                    <div class="retail-type-card" style="padding: 24px 20px; text-align: center;">
                        <div class="why-icon-box" style="background: #ecfeff; color: #0891b2; margin: 0 auto 12px;">
                            <i data-lucide="shield" width="22" height="22"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 0.98rem; margin-bottom: 6px;">Owners Reducing Aggregator Dependence</h3>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">
                            Build a direct channel where you keep 100% of your order value.
                        </p>
                    </div>

                    <!-- 7. New Store Owners (NEW) -->
                    <div class="retail-type-card" style="padding: 24px 20px; text-align: center;">
                        <div class="why-icon-box" style="background: #fef9c3; color: #ca8a04; margin: 0 auto 12px;">
                            <i data-lucide="rocket" width="22" height="22"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 0.98rem; margin-bottom: 6px;">New &amp; Small Kirana Owners</h3>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">
                            Start an online store without a website or technical setup.
                        </p>
                    </div>

                    <!-- 8. PWA / Subdomain Seekers (NEW) -->
                    <div class="retail-type-card" style="padding: 24px 20px; text-align: center;">
                        <div class="why-icon-box" style="background: #e0e7ff; color: #4f46e5; margin: 0 auto 12px;">
                            <i data-lucide="globe" width="22" height="22"></i>
                        </div>
                        <h3 class="retail-type-title" style="font-size: 0.98rem; margin-bottom: 6px;">Stores Wanting Their Own Store App</h3>
                        <p style="font-size: 0.82rem; color: #64748b; line-height: 1.5; margin: 0;">
                            Get a dedicated PWA on your own subdomain with a matching QR code.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- --- 9. HOW TO START (SIMPLE STEPS) --- -->
        <section class="retail-why-section">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">How to Start Your Kirana Store Online</h2>
                    <p class="section-subtitle">Four simple steps. No technical knowledge needed.</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
                    <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; text-align: center;">
                        <div style="background: #2563eb; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 12px;">1</div>
                        <h3 style="font-size: 1rem; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Sign Up for Zrott Retail</h3>
                        <p style="font-size: 0.85rem; color: #64748b;">Register with your mobile number and store details.</p>
                    </div>
                    <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; text-align: center;">
                        <div style="background: #2563eb; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 12px;">2</div>
                        <h3 style="font-size: 1rem; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Add Grocery Products</h3>
                        <p style="font-size: 0.85rem; color: #64748b;">Upload photos, set prices, and create categories.</p>
                    </div>
                    <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; text-align: center;">
                        <div style="background: #2563eb; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 12px;">3</div>
                        <h3 style="font-size: 1rem; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Share Your Store Link</h3>
                        <p style="font-size: 0.85rem; color: #64748b;">Send it to local customers on WhatsApp and Instagram.</p>
                    </div>
                    <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; text-align: center;">
                        <div style="background: #2563eb; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 12px;">4</div>
                        <h3 style="font-size: 1rem; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Receive &amp; Manage Orders</h3>
                        <p style="font-size: 0.85rem; color: #64748b;">Get orders on WhatsApp and your dashboard. Deliver and collect payment.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- --- 10. FAQ SECTION --- -->
        <section id="faq" class="section-faq">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-subtitle">Direct answers about online ordering for kirana stores.</p>
                </div>

                <div class="faq-layout-grid">
                    <div class="faq-accordion-list bio-faq-list">
                        <!-- Q1 -->
                        <div class="bio-faq-card open">
                            <div class="bio-faq-q" type="button" aria-expanded="true">
                                <span>What is an online ordering system for a kirana store?</span>
                                <div class="bio-faq-arrow-btn rotated"><i data-lucide="chevron-right"></i></div>
                            </div>
                            <div class="bio-faq-a">
                                An online ordering system for a kirana store lets customers browse grocery products, add items to cart, and place orders online. With Zrott Retail, every kirana owner gets a dedicated PWA on their own subdomain, shared via QR or link. Customers checkout via WhatsApp or Instant Order, and sellers fulfil via Self, Rapido, or Porter with their own delivery-charge rules.
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>How can I take my kirana store online?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                Sign up for Zrott Retail, add your grocery products and categories, set your delivery-charge rules, then share your store’s subdomain link or QR code with local customers. Orders start arriving on WhatsApp and in your seller dashboard.
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>What is the difference between “Send Order on WhatsApp” and “Instant Order”?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                “Send Order on WhatsApp” sends the order summary to the seller’s WhatsApp number so the conversation continues on chat. “Instant Order” places the order directly in the seller’s Zrott dashboard, so it appears as a confirmed order without needing a chat reply.
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>Do customers need to download an app?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                No. Customers open your store’s PWA through the link or QR code. It works in the browser and can optionally be added to their home screen - but no app-store download is required.
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>How do I share my store with customers?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                Every seller gets a unique subdomain link and a matching QR code. Share the link on WhatsApp, Instagram, or Google Business Profile, and print the QR for your counter or shop shutter.
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>How do I fulfil orders?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                After an order lands, you prepare it and choose delivery - Self, Rapido, or Porter. The choice per order is yours.
                            </div>
                        </div>

                        <!-- Q7 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>Can I set my own delivery charges?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                Yes. During store setup you can define delivery-charge rules - free delivery above a threshold, flat fees, per-km rates, or zone-based charges. Customers see the exact delivery charge at checkout before confirming the order.
                            </div>
                        </div>

                        <!-- Q8 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>Can I accept COD and UPI payments?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                Yes. Zrott Retail supports Cash on Delivery and direct UPI payments. Payments go directly to you.
                            </div>
                        </div>

                        <!-- Q9 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>Does Zrott Retail charge commission on orders?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                Zrott Retail charges zero commission on sales. You keep 100% of your order value.
                            </div>
                        </div>

                        <!-- Q10 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>Can I manage my kirana store from my phone?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                Yes. Add products, update prices and stock, view incoming WhatsApp and Instant orders, and mark deliveries - all from your smartphone.
                            </div>
                        </div>

                        <!-- Q11 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>Can I send offers to regular customers?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                Yes. Zrott Retail includes customer CRM, loyalty/rewards, offers, and marketing announcement tools so you can promote discounts to repeat buyers.
                            </div>
                        </div>

                        <!-- Q12 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q"><span>Is Zrott Retail suitable for a small neighborhood kirana store?</span><div class="bio-faq-arrow-btn"><i data-lucide="chevron-right"></i></div></div>
                            <div class="bio-faq-a">
                                Yes. Zrott Retail is built for small kirana stores, daily-needs shops, and family-run grocery businesses. Setup is quick, no technical knowledge is needed, and everything works from a smartphone.
                            </div>
                        </div>
                    </div>

                    <div class="faq-side-card">
                        <img src="<?php echo $root; ?>/img/questions.webp" alt="Zrott Retail support for kirana store owners" class="faq-avatar-img" />
                        <div class="faq-card-title">Need help setting up your kirana store?</div>
                        <p class="faq-card-sub">
                            Our team helps local shop owners upload their grocery catalogue and launch their online store in under 15 minutes.
                        </p>
                        <a href="<?php echo $contactHref; ?>" class="faq-contact-btn">
                            <span>Talk with Our Team</span>
                            <i data-lucide="arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- --- EXPLORE ZROTT RETAIL --- -->
        <?php include('../inc/explore-links.php'); ?>

        <!-- --- 12. FINAL CTA --- -->
        <?php include('../inc/footer-cta.php'); ?>

    </main>

    <?php include('../inc/footer.php'); ?>
</div>