<?php
$pageId = 'retail';
$which_page = "retail";
$pageTitle = 'Take Your Local Business Online & Reach More Customers — Zrott | Retail';
$pageDescr = 'The simple, zero-commission digital store platform for Kirana stores, beauty parlours, retail shops, and local businesses. Accept Cash on Delivery (COD), share on WhatsApp, and sell directly.';
$pageKeyword = 'retail business online, local business online store, kirana online store software, digital catalog COD, retail store website India, zero commission retail, whatsapp store India';

include('inc/db.php');
$canonical = '<link rel="canonical" href="' . $root . '/retail-business-online" />';

$schema_tags = '<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Zrott Retail",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "All (Web, iOS, Android)",
  "url": "' . $root . '/retail-business-online",
  "description": "Zero-commission digital commerce platform for local retail shops, Kirana stores, salons, and Indian merchants.",
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": "0",
    "highPrice": "1499",
    "offerCount": "3"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "180"
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
        <!-- ─── 1. Hero Section ─── -->
        <section class="retail-hero-section bio-hero">
            <div class="bio-hero-glow-1"></div>
            <div class="bio-hero-glow-2"></div>
            <div class="hero-grid-overlay"></div>

            <div class="front-container">
                <div class="retail-hero-grid">
                    <!-- Hero Content Left -->
                    <div class="retail-hero-text">
                        <div class="hero-pill-badge" style="margin-bottom: 16px;">
                            <i data-lucide="sparkles" width="13" height="13"></i>
                            <span>RETAIL &bull; LOCAL COMMERCE FOR BHARAT</span>
                        </div>

                        <h1 class="retail-hero-title">
                            <span class="retail-title-brand">Zrott</span> <span class="retail-title-blue">Retail</span>
                            <span class="retail-title-sub1">Take Your Local Business Online</span>
                            <span class="retail-title-sub2">Reach More Customers, Sell More</span>
                        </h1>

                        <p class="retail-hero-desc">
                            A simple and powerful platform for Kirana stores, beauty parlours, retail shops and local businesses to showcase products or services, receive orders and grow — with zero technical knowledge.
                        </p>

                        <div class="hero-cta-group">
                            <a href="<?php echo $contactHref; ?>" class="cta-primary retail-cta-blue">
                                <span>Get Started Free</span>
                                <i data-lucide="arrow-right"></i>
                            </a>
                            <a href="#how-it-works" class="retail-demo-btn">
                                <span class="retail-play-icon">
                                    <i data-lucide="play" width="13" height="13" style="fill: #2563eb; margin-left: 2px;"></i>
                                </span>
                                <span>Watch Demo</span>
                            </a>
                        </div>

                        <div class="retail-trust-badges">
                            <div class="retail-trust-badge">
                                <i data-lucide="check-circle-2" width="18" height="18"></i>
                                <span>Easy Setup</span>
                            </div>
                            <div class="retail-trust-badge">
                                <i data-lucide="check-circle-2" width="18" height="18"></i>
                                <span>No Commission (COD)</span>
                            </div>
                            <div class="retail-trust-badge">
                                <i data-lucide="check-circle-2" width="18" height="18"></i>
                                <span>Grow Your Local Sales</span>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Visual Right -->
                    <div class="retail-hero-visual-card">
                        <!-- Merchant Background Image -->
                        <div class="retail-hero-merchant-bg">
                            <img src="<?php echo $root; ?>/img/retail.webp" alt="Indian Merchant Store Owner" class="retail-hero-merchant-img" />
                            <div class="retail-merchant-overlay"></div>
                            <div class="retail-speech-bubble">
                                <i data-lucide="sparkles" width="14" height="14" style="color: #2563eb;"></i>
                                <span>Mere Store Online!</span>
                            </div>
                        </div>

                        <!-- Phone Mockup 1: Customer Store Catalog -->
                        <div class="retail-mockup-phone1">
                            <div class="mock-phone-notch"></div>
                            <div class="mock-phone-body">
                                <div class="mock-store-header">
                                    <div class="mock-store-name">Sharma Kirana Store</div>
                                    <div class="mock-store-loc">Navrangpura, Ahmedabad</div>
                                </div>
                                <div class="mock-search-box">
                                    <i data-lucide="search" width="12" height="12"></i>
                                    <span>Search products...</span>
                                </div>
                                <div class="mock-promo-banner">
                                    <div class="mock-promo-tag">Fresh Essentials</div>
                                    <div class="mock-promo-headline">Daily Needs At Your Doorstep</div>
                                </div>
                                <div class="mock-cat-strip">
                                    <div class="mock-cat-chip">Atta &amp; Flour</div>
                                    <div class="mock-cat-chip">Dals &amp; Pulses</div>
                                    <div class="mock-cat-chip">Oil &amp; Ghee</div>
                                </div>
                                <div class="mock-offer-card">
                                    <span>Offers for You: Get up to 20% OFF</span>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Mockup 2: Customer Cart Screen -->
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
                                        <span class="mock-cart-item-name">Amul Butter 500g</span>
                                        <span class="mock-cart-item-qty">₹285</span>
                                    </div>
                                    <div class="mock-cart-item">
                                        <span class="mock-cart-item-name">Tata Salt 1kg</span>
                                        <span class="mock-cart-item-qty">₹22</span>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; font-weight: 800; font-size: 0.75rem; margin-top: 6px; padding: 4px 0; border-top: 1px dashed #cbd5e1;">
                                    <span>Total Amount:</span>
                                    <span style="color: #16a34a;">₹592</span>
                                </div>
                                <div class="mock-cart-checkout-btn">
                                    Proceed to Checkout &rarr;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ─── 2. Feature Quick-Pills / Highlights Row ─── -->
                <div class="retail-quick-strip">
                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-green">
                            <i data-lucide="shopping-bag" width="24" height="24"></i>
                        </div>
                        <div class="retail-quick-text">Showcase Products / Services</div>
                    </div>

                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-orange">
                            <i data-lucide="shopping-cart" width="24" height="24"></i>
                        </div>
                        <div class="retail-quick-text">Receive Orders ( COD )</div>
                    </div>

                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-purple">
                            <i data-lucide="users" width="24" height="24"></i>
                        </div>
                        <div class="retail-quick-text">Reach Local Customers</div>
                    </div>

                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-blue">
                            <i data-lucide="settings" width="24" height="24"></i>
                        </div>
                        <div class="retail-quick-text">Manage Easily from Mobile</div>
                    </div>

                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-pink">
                            <i data-lucide="trending-up" width="24" height="24"></i>
                        </div>
                        <div class="retail-quick-text">Grow Your Business</div>
                    </div>

                    <div class="retail-quick-item">
                        <div class="retail-quick-icon-wrap bg-light-yellow">
                            <i data-lucide="indian-rupee" width="24" height="24"></i>
                        </div>
                        <div class="retail-quick-text">No Technical Knowledge Needed</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── 3. Dual Showcase: Business Owners vs Customers ─── -->
        <section id="how-it-works" class="retail-showcase-section">
            <div class="front-container">
                <div class="section-header-center" style="margin-bottom: 36px;">
                    <div class="hero-pill-badge" style="margin-bottom: 12px;">
                        <i data-lucide="layers" width="13" height="13"></i>
                        <span>TWO-WAY EXPERIENCE</span>
                    </div>
                    <h2 class="section-title">Built for Shop Owners, Loved by Customers</h2>
                    <p class="section-subtitle">
                        A seamless experience designed to make store management effortless on your phone while giving your buyers a fast, delightful shopping catalog.
                    </p>
                </div>

                <div class="retail-dual-grid">
                    <!-- Left Card: For Business Owners -->
                    <div class="retail-showcase-card">
                        <div>
                            <span class="pill-badge-blue">
                                <i data-lucide="store" width="13" height="13"></i>
                                For Business Owners
                            </span>
                            <h3 class="retail-card-title">Set up your online store in minutes</h3>
                            
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.55; margin-bottom: 18px;">
                                Manage your entire catalog, track daily sales, and accept customer orders right from your smartphone without expensive POS hardware.
                            </p>

                            <ul class="retail-check-list">
                                <li class="retail-check-item">
                                    <div class="check-circle-blue">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>Add your products or services</strong> with photos, pricing, and pack sizes in taps.</span>
                                </li>
                                <li class="retail-check-item">
                                    <div class="check-circle-blue">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>Manage categories &amp; prices</strong> easily whenever costs change.</span>
                                </li>
                                <li class="retail-check-item">
                                    <div class="check-circle-blue">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>Receive orders on WhatsApp or in app</strong> with complete customer name, address, and items.</span>
                                </li>
                                <li class="retail-check-item">
                                    <div class="check-circle-blue">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>No technical knowledge required</strong> — simple Hindi &amp; English intuitive design.</span>
                                </li>
                                <li class="retail-check-item">
                                    <div class="check-circle-blue">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>Perfect for Kirana stores, beauty parlours,</strong> retail shops, boutiques, and more.</span>
                                </li>
                            </ul>

                            <a href="<?php echo $contactHref; ?>" class="btn-owner-cta">
                                <span>Start Your Store Free</span>
                                <i data-lucide="arrow-right" width="16" height="16"></i>
                            </a>
                        </div>

                        <!-- Phone Mockup for Owner App -->
                        <div class="showcase-phone-frame">
                            <div class="showcase-phone-top">
                                <span>Zrott Retail</span>
                                <i data-lucide="bell" width="12" height="12"></i>
                            </div>
                            <div class="showcase-phone-body">
                                <div class="owner-app-header">
                                    <div>
                                        <div class="owner-app-store-name">Sharma Kirana Store</div>
                                        <div style="font-size: 0.58rem; opacity: 0.85;">Navrangpura, Ahmedabad</div>
                                    </div>
                                    <span class="owner-app-badge-active">Active</span>
                                </div>

                                <div class="owner-metrics-grid">
                                    <div class="owner-metric-box">
                                        <div class="owner-metric-val" style="color: #2563eb;">12</div>
                                        <div class="owner-metric-lbl">New Orders</div>
                                    </div>
                                    <div class="owner-metric-box">
                                        <div class="owner-metric-val" style="color: #7c3aed;">85</div>
                                        <div class="owner-metric-lbl">Products</div>
                                    </div>
                                    <div class="owner-metric-box">
                                        <div class="owner-metric-val" style="color: #16a34a;">₹2,450</div>
                                        <div class="owner-metric-lbl">Today's Sales</div>
                                    </div>
                                    <div class="owner-metric-box">
                                        <div class="owner-metric-val" style="color: #ea580c;">56</div>
                                        <div class="owner-metric-lbl">Customers</div>
                                    </div>
                                </div>

                                <div style="font-size: 0.62rem; font-weight: 700; color: #475569; margin: 8px 0 4px;">Quick Actions</div>
                                <div class="owner-actions-grid">
                                    <div class="owner-action-item">
                                        <div class="owner-action-icon"><i data-lucide="plus-circle" width="12" height="12"></i></div>
                                        <span>Add Product</span>
                                    </div>
                                    <div class="owner-action-item">
                                        <div class="owner-action-icon"><i data-lucide="box" width="12" height="12"></i></div>
                                        <span>Manage</span>
                                    </div>
                                    <div class="owner-action-item">
                                        <div class="owner-action-icon"><i data-lucide="grid" width="12" height="12"></i></div>
                                        <span>Categories</span>
                                    </div>
                                    <div class="owner-action-item">
                                        <div class="owner-action-icon"><i data-lucide="clipboard-list" width="12" height="12"></i></div>
                                        <span>Orders</span>
                                    </div>
                                    <div class="owner-action-item">
                                        <div class="owner-action-icon"><i data-lucide="settings" width="12" height="12"></i></div>
                                        <span>Settings</span>
                                    </div>
                                    <div class="owner-action-item">
                                        <div class="owner-action-icon"><i data-lucide="bar-chart-2" width="12" height="12"></i></div>
                                        <span>Analytics</span>
                                    </div>
                                </div>

                                <div style="display: flex; justify-content: space-around; font-size: 0.55rem; color: #94a3b8; margin-top: 10px; padding-top: 6px; border-top: 1px solid #e2e8f0; font-weight: 600;">
                                    <span style="color: #2563eb;">Home</span>
                                    <span>Products</span>
                                    <span>Orders</span>
                                    <span>More</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Card: For Your Customers -->
                    <div class="retail-showcase-card">
                        <div>
                            <span class="pill-badge-orange">
                                <i data-lucide="shopping-bag" width="13" height="13"></i>
                                For Your Customers
                            </span>
                            <h3 class="retail-card-title">Let your customers shop from your store</h3>
                            
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.55; margin-bottom: 18px;">
                                Give your neighborhood buyers a lightning-fast digital storefront. No heavy app downloads — they open your link, add items, and checkout in seconds.
                            </p>

                            <ul class="retail-check-list">
                                <li class="retail-check-item">
                                    <div class="check-circle-orange">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>Beautiful store page with your brand</strong>, your logo, contact numbers, and address.</span>
                                </li>
                                <li class="retail-check-item">
                                    <div class="check-circle-orange">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>Browse products by category</strong> with instant search and clear pricing.</span>
                                </li>
                                <li class="retail-check-item">
                                    <div class="check-circle-orange">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>Add to cart and place orders (COD)</strong> or pay directly using UPI QR code.</span>
                                </li>
                                <li class="retail-check-item">
                                    <div class="check-circle-orange">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>Shop from anywhere, anytime</strong> without waiting in store queues.</span>
                                </li>
                                <li class="retail-check-item">
                                    <div class="check-circle-orange">
                                        <i data-lucide="check" width="13" height="13"></i>
                                    </div>
                                    <span><strong>A personalized shopping experience</strong> just like your trusted physical store.</span>
                                </li>
                            </ul>

                            <a href="<?php echo $contactHref; ?>" class="btn-customer-cta">
                                <span>See Customer Experience</span>
                                <i data-lucide="arrow-right" width="16" height="16"></i>
                            </a>
                        </div>

                        <!-- Phone Mockup for Customer Store -->
                        <div class="showcase-phone-frame">
                            <div class="showcase-phone-top" style="background: #1e293b;">
                                <span>Sharma Kirana Store</span>
                                <i data-lucide="shopping-cart" width="12" height="12"></i>
                            </div>
                            <div class="showcase-phone-body">
                                <div class="cust-app-store-bar">
                                    <div class="cust-app-store-title">Sharma Kirana Store</div>
                                    <div style="font-size: 0.58rem; color: #64748b;">Open 8:00 AM - 10:00 PM &bull; Navrangpura</div>
                                </div>

                                <div class="cust-banner-box">
                                    <div style="font-size: 0.58rem; text-transform: uppercase; opacity: 0.9;">Fast Delivery</div>
                                    <div class="cust-banner-text">Fresh Essentials Daily Needs At Your Doorstep</div>
                                </div>

                                <div class="cust-cats-row">
                                    <div class="cust-cat-pill" style="background: #ea580c; color: #fff;">Grocery</div>
                                    <div class="cust-cat-pill">Snacks</div>
                                    <div class="cust-cat-pill">Beverages</div>
                                    <div class="cust-cat-pill">Personal</div>
                                </div>

                                <div style="font-size: 0.62rem; font-weight: 750; color: #0f172a; margin: 4px 0 6px;">Featured Products</div>
                                <div class="cust-products-col">
                                    <div class="cust-product-row">
                                        <div>
                                            <div class="cust-p-name">Aashirvaad Atta 5kg</div>
                                            <div class="cust-p-price">₹285</div>
                                        </div>
                                        <button type="button" class="cust-p-add-btn">+ Add</button>
                                    </div>
                                    <div class="cust-product-row">
                                        <div>
                                            <div class="cust-p-name">Amul Butter 500g</div>
                                            <div class="cust-p-price">₹285</div>
                                        </div>
                                        <button type="button" class="cust-p-add-btn">+ Add</button>
                                    </div>
                                    <div class="cust-product-row">
                                        <div>
                                            <div class="cust-p-name">Tata Salt 1kg</div>
                                            <div class="cust-p-price">₹22</div>
                                        </div>
                                        <button type="button" class="cust-p-add-btn">+ Add</button>
                                    </div>
                                </div>

                                <div style="margin-top: 8px; background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: 6px; padding: 4px 6px; text-align: center; color: #065f46; font-size: 0.58rem; font-weight: 700;">
                                    ✓ Free Local Delivery on orders above ₹300
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── 4. Perfect for All Types of Local Businesses ─── -->
        <section class="retail-types-section">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Perfect for All Types of Local Businesses</h2>
                    <p class="section-subtitle">
                        From daily essentials to personal care, Zrott Retail works for every local business.
                    </p>
                </div>

                <div class="retail-types-grid">
                    <!-- Kirana Stores -->
                    <div class="retail-type-card">
                        <div class="retail-type-img-wrapper">
                            <img src="<?php echo $root; ?>/img/retail-400.webp" alt="Kirana Stores" class="retail-type-img" />
                        </div>
                        <div class="retail-type-info">
                            <h3 class="retail-type-title">Kirana Stores</h3>
                            <p class="retail-type-desc">Grocery, Daily Needs, Household Items</p>
                        </div>
                    </div>

                    <!-- Beauty Parlours -->
                    <div class="retail-type-card">
                        <div class="retail-type-img-wrapper">
                            <img src="<?php echo $root; ?>/img/saloon-400.webp" alt="Beauty Parlours" class="retail-type-img" />
                        </div>
                        <div class="retail-type-info">
                            <h3 class="retail-type-title">Beauty Parlours</h3>
                            <p class="retail-type-desc">Salon Services, Beauty Products</p>
                        </div>
                    </div>

                    <!-- Retail Shops -->
                    <div class="retail-type-card">
                        <div class="retail-type-img-wrapper">
                            <img src="<?php echo $root; ?>/img/retail.webp" alt="Retail Shops" class="retail-type-img" />
                        </div>
                        <div class="retail-type-info">
                            <h3 class="retail-type-title">Retail Shops</h3>
                            <p class="retail-type-desc">Clothing, Footwear, Accessories</p>
                        </div>
                    </div>

                    <!-- Electronics Stores -->
                    <div class="retail-type-card">
                        <div class="retail-type-img-wrapper">
                            <img src="<?php echo $root; ?>/img/hotel-400.webp" alt="Electronics Stores" class="retail-type-img" />
                        </div>
                        <div class="retail-type-info">
                            <h3 class="retail-type-title">Electronics Stores</h3>
                            <p class="retail-type-desc">Mobiles, Gadgets, Home Appliances</p>
                        </div>
                    </div>

                    <!-- Pharmacies -->
                    <div class="retail-type-card">
                        <div class="retail-type-img-wrapper">
                            <img src="<?php echo $root; ?>/img/restaurant-400.webp" alt="Pharmacies" class="retail-type-img" />
                        </div>
                        <div class="retail-type-info">
                            <h3 class="retail-type-title">Pharmacies</h3>
                            <p class="retail-type-desc">Medicines, Healthcare Products</p>
                        </div>
                    </div>

                    <!-- And Many More -->
                    <div class="retail-type-card">
                        <div class="retail-type-img-wrapper">
                            <img src="<?php echo $root; ?>/img/restaurants.webp" alt="And Many More Local Businesses" class="retail-type-img" />
                        </div>
                        <div class="retail-type-info">
                            <h3 class="retail-type-title">And Many More</h3>
                            <p class="retail-type-desc">Stationery, Gifts, Home Decor, etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── 5. Why Choose Zrott Retail & Blue Promo Banner ─── -->
        <section class="retail-why-section">
            <div class="front-container">
                <div class="retail-why-split">
                    <!-- Left: 6 Core Advantages Grid -->
                    <div>
                        <h2 class="retail-hero-title" style="font-size: 2.1rem; margin-bottom: 24px;">
                            Why Choose <span class="retail-title-blue">Zrott Retail?</span>
                        </h2>

                        <div class="retail-why-features-grid">
                            <!-- Feat 1 -->
                            <div class="retail-why-feat-card">
                                <div class="why-icon-box" style="background: #dcfce7; color: #16a34a;">
                                    <i data-lucide="zap" width="22" height="22"></i>
                                </div>
                                <div class="why-feat-text">
                                    <div class="why-feat-title">Quick &amp; Easy Setup</div>
                                    <div class="why-feat-sub">Go online in minutes</div>
                                </div>
                            </div>

                            <!-- Feat 2 -->
                            <div class="retail-why-feat-card">
                                <div class="why-icon-box" style="background: #fce7f3; color: #db2777;">
                                    <i data-lucide="heart-handshake" width="22" height="22"></i>
                                </div>
                                <div class="why-feat-text">
                                    <div class="why-feat-title">Reach More Customers</div>
                                    <div class="why-feat-sub">In your local area</div>
                                </div>
                            </div>

                            <!-- Feat 3 -->
                            <div class="retail-why-feat-card">
                                <div class="why-icon-box" style="background: #ffedd5; color: #ea580c;">
                                    <i data-lucide="indian-rupee" width="22" height="22"></i>
                                </div>
                                <div class="why-feat-text">
                                    <div class="why-feat-title">No High Commissions</div>
                                    <div class="why-feat-sub">Keep more earnings</div>
                                </div>
                            </div>

                            <!-- Feat 4 -->
                            <div class="retail-why-feat-card">
                                <div class="why-icon-box" style="background: #dbeafe; color: #2563eb;">
                                    <i data-lucide="smartphone" width="22" height="22"></i>
                                </div>
                                <div class="why-feat-text">
                                    <div class="why-feat-title">Mobile Friendly</div>
                                    <div class="why-feat-sub">Manage on the go</div>
                                </div>
                            </div>

                            <!-- Feat 5 -->
                            <div class="retail-why-feat-card">
                                <div class="why-icon-box" style="background: #f3e8ff; color: #9333ea;">
                                    <i data-lucide="bar-chart" width="22" height="22"></i>
                                </div>
                                <div class="why-feat-text">
                                    <div class="why-feat-title">Built for Indian Businesses</div>
                                    <div class="why-feat-sub">Simple &amp; practical</div>
                                </div>
                            </div>

                            <!-- Feat 6 -->
                            <div class="retail-why-feat-card">
                                <div class="why-icon-box" style="background: #ecfeff; color: #0891b2;">
                                    <i data-lucide="shield-check" width="22" height="22"></i>
                                </div>
                                <div class="why-feat-text">
                                    <div class="why-feat-title">Reliable &amp; Secure</div>
                                    <div class="why-feat-sub">Your data is safe</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Large Blue Promo Card -->
                    <div class="retail-blue-promo-card">
                        <div class="retail-blue-content">
                            <div class="blue-card-eyebrow">Grow Your Local Business with</div>
                            <div class="blue-card-title">Zrott Retail</div>
                            <p class="blue-card-desc">
                                Join hundreds of local businesses who are already reaching more customers and increasing their sales.
                            </p>

                            <a href="<?php echo $contactHref; ?>" class="btn-blue-card-white">
                                <span>Get Started Free</span>
                                <i data-lucide="arrow-right" width="16" height="16"></i>
                            </a>

                            <div class="blue-card-trust-row">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i data-lucide="check-circle-2" width="16" height="16"></i>
                                    <span>No Setup Fee</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i data-lucide="check-circle-2" width="16" height="16"></i>
                                    <span>No Technical Skills</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i data-lucide="check-circle-2" width="16" height="16"></i>
                                    <span>COD Ready</span>
                                </div>
                            </div>
                        </div>

                        <!-- Visual Avatar & Order Tag -->
                        <div class="retail-blue-visual">
                            <div class="retail-incoming-order-badge">
                                <div class="order-badge-title">New Order!</div>
                                <div class="order-badge-sub">2 Items &bull; COD</div>
                                <div class="order-badge-amt">₹310</div>
                            </div>
                            <img src="<?php echo $root; ?>/img/testi-2.webp" alt="Happy Local Retail Owner" class="retail-blue-avatar-img" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── 6. In-Depth Retailer Advantage & Narrative ─── -->
        <section class="section-showcase-split" style="padding-top: 30px; padding-bottom: 50px;">
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
                                    https://zrott.com/store/sharma-kirana
                                </div>
                            </div>
                            <div class="website-preview-content">
                                <img src="<?php echo $root; ?>/img/retail.webp" alt="Digital Storefront Experience" class="preview-img" />
                            </div>
                        </div>
                    </div>

                    <div class="showcase-text-col">
                        <div class="hero-pill-badge" style="margin-bottom: 14px;">
                            <i data-lucide="percent" width="13" height="13"></i>
                            <span>ZERO COMMISSIONS FOREVER</span>
                        </div>
                        <h2 class="showcase-headline">
                            Stop Giving 20-30% of Your Hard-Earned Profit to Aggregators
                        </h2>

                        <p style="font-size: 1.02rem; color: #475569; line-height: 1.65; margin-bottom: 18px;">
                            Delivery apps charge huge commissions, hold your customer phone numbers, and push discount wars that hurt small shops. With Zrott Retail, you own your customer database and keep 100% of your earnings.
                        </p>

                        <div class="checklist-group">
                            <div class="check-item">
                                <i data-lucide="check-circle-2" class="check-icon-purple"></i>
                                <span><strong>Instant WhatsApp Order Routing:</strong> Orders directly ping your phone with itemized bill and Google Maps delivery address.</span>
                            </div>
                            <div class="check-item">
                                <i data-lucide="check-circle-2" class="check-icon-purple"></i>
                                <span><strong>Cash on Delivery (COD) &amp; Direct UPI:</strong> Money goes straight to your bank account or cash box, zero delay.</span>
                            </div>
                            <div class="check-item">
                                <i data-lucide="check-circle-2" class="check-icon-purple"></i>
                                <span><strong>Repeat Customer Loyalty:</strong> Run special discounts and festive offers for your most loyal neighbourhood families.</span>
                            </div>
                            <div class="check-item">
                                <i data-lucide="check-circle-2" class="check-icon-purple"></i>
                                <span><strong>Zero App Installation Barrier:</strong> Customers click your link on WhatsApp, Instagram, or Google Maps and shop instantly.</span>
                            </div>
                        </div>

                        <a href="<?php echo $contactHref; ?>" class="showcase-cta-btn">
                            <span>Get Started With Your Store</span>
                            <i data-lucide="arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── 7. Simple Transparent Pricing ─── -->
        <?php include('inc/pricing-section.php'); ?>

        <!-- ─── 8. The Smarter Way ─── -->
        <?php // include('inc/smart-way.php'); ?>

        <!-- ─── 9. Loved by Local Business Owners ─── -->
        <?php include('inc/testimonials.php'); ?>

        <!-- ─── 10. Frequently Asked Questions ─── -->
        <section id="faq" class="section-faq">
            <div class="front-container">
                <div class="section-header-center">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="section-subtitle">Quick answers about Zrott Retail &amp; taking your local shop online.</p>
                </div>

                <div class="faq-layout-grid">
                    <div class="faq-accordion-list bio-faq-list">
                        <!-- FAQ 1 -->
                        <div class="bio-faq-card open">
                            <div class="bio-faq-q" type="button" aria-expanded="true">
                                <span>What is Zrott Retail and how does it help my store?</span>
                                <div class="bio-faq-arrow-btn rotated">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                Zrott Retail is an all-in-one digital commerce platform built specifically for Indian local stores, Kiranas, boutiques, and service businesses. It allows you to create a digital catalog of your products or services, share it with local customers via WhatsApp and social media, and receive orders with Cash on Delivery (COD) or UPI payment.
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Do I have to pay any commission on my sales?</span>
                                <div class="bio-faq-arrow-btn">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                No! Unlike quick-commerce aggregators that take 20% to 30% from every order, Zrott charges zero commissions on your sales. You keep 100% of your profits, and payments come directly to you.
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Do my customers need to download a mobile app?</span>
                                <div class="bio-faq-arrow-btn">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                No app download is required for your customers. When you share your store link (e.g. zrott.com/store/yourbusiness) on WhatsApp or Instagram, it opens immediately in their mobile browser, letting them add items to cart and checkout in seconds.
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>How do I receive customer orders?</span>
                                <div class="bio-faq-arrow-btn">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                You receive order notifications instantly on WhatsApp and in your Zrott Merchant dashboard. Each order clearly shows the customer's name, phone number, complete delivery address, itemized product list, and payment method (Cash on Delivery or UPI).
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Do I need a computer or barcode scanner to get started?</span>
                                <div class="bio-faq-arrow-btn">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                Not at all! You can run your entire business from your smartphone. Adding products, updating prices, marking items out of stock, and fulfilling orders takes just a few taps on mobile.
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="bio-faq-card">
                            <div class="bio-faq-q">
                                <span>Can I use my own custom domain for my store?</span>
                                <div class="bio-faq-arrow-btn">
                                    <i data-lucide="chevron-right"></i>
                                </div>
                            </div>
                            <div class="bio-faq-a">
                                Yes! You can either use your free Zrott store link or easily connect your own custom domain (e.g., yourkirana.com) to establish a distinct, memorable brand presence.
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Specialist Card -->
                    <div class="faq-side-card">
                        <img src="<?php echo $root; ?>/img/questions.webp" alt="Retail Specialist" class="faq-avatar-img" />
                        <div class="faq-card-title">Need help setting up your store?</div>
                        <p class="faq-card-sub">
                            Our team helps local shop owners upload their catalogs and launch their online store in under 15 minutes.
                        </p>
                        <a href="<?php echo $contactHref; ?>" class="faq-contact-btn">
                            <span>Talk with Our Team</span>
                            <i data-lucide="arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── 11. Bottom Call to Action ─── -->
        <?php include('inc/footer-cta.php'); ?>
    </main>

    <?php include('inc/footer.php'); ?>
</div>
