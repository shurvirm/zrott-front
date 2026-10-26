<?php
$pricing_contact_href = $contactHref ?? ($root . '/contact?from=crm');
?>
<section id="pricing" class="section-pricing">
    <div class="front-container">
        <!-- ── Section Header ── -->
        <div class="section-header-center">
            <h2 class="section-title">Simple &amp; Transparent Pricing</h2>
            <p class="section-subtitle">
                Start free and grow at your own pace. No hidden fees.
            </p>
        </div>

        <!-- ── Category Tabs ── -->
        <div class="pricing-category-tabs">
            <button
                id="pricing-tab-restaurants"
                class="pricing-tab-btn active"
                type="button"
                role="tab"
                aria-selected="true"
            >
                Order Based Businesses
            </button>
            <button
                id="pricing-tab-other"
                class="pricing-tab-btn"
                type="button"
                role="tab"
                aria-selected="false"
            >
                Professional Businesses
            </button>
        </div>

        <!-- ── Billing Toggle ── -->
        <div class="pricing-billing-switch" style="margin-top: 20px;">
            <div class="switch-pill-container">
                <button
                    type="button"
                    class="switch-option-btn active"
                    id="billingMonthlyBtn"
                >
                    Monthly
                </button>
                <button
                    type="button"
                    class="switch-option-btn"
                    id="billingYearlyBtn"
                >
                    Yearly <small style="font-size: 70%;">(save 20%)</small>
                </button>
            </div>
        </div>

        <!-- ── Best For Badges ── -->
        <div id="bestForRestaurants" class="pricing-best-for-wrap">
            <span class="mt-3 flex gap-4 flex-wrap align-center justify-center" style="max-width: 600px; margin: 0 auto; display: flex; align-items: center; justify-content: center; gap: 8px;">
                <span style="font-size: 80%; font-weight: 600;">Best For : &nbsp;</span>
                <span class="flex gap-1 flex-wrap align-center justify-center" style="display: flex; flex-wrap: wrap; gap: 6px; justify-content: center;">
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Restaurant</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Cafe / Coffee Shop</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Fast Food</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Cloud Kitchen / Takeaway</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Food Truck & Street Food</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Juice / Tea Shop</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Ice Cream Shop</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Bar & Pub / Brewery</span>
                </span>
            </span>
        </div>

        <div id="bestForOther" class="pricing-best-for-wrap" style="display: none;">
            <span class="mt-3 flex gap-4 flex-wrap align-center justify-center" style="max-width: 700px; margin: 0 auto; display: flex; align-items: center; justify-content: center; gap: 8px;">
                <span style="font-size: 80%; font-weight: 600;">Best For : &nbsp;</span>
                <span class="flex gap-1 flex-wrap align-center justify-center" style="display: flex; flex-wrap: wrap; gap: 6px; justify-content: center;">
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Bakery</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Grocery / Kirana Store</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Hotel & Resort Dining</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Salon Shop</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Spa / Beauty Clinic</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Car / Bike Wash</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Pet Grooming / Pet Care</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Laundry / Dry Cleaning</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Gym / Fitness Center</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Sports Club / Gaming Cafe</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Coworking Space</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Hostel</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Movie / Entertainment Venue</span>
                    <span class="badge bg-primary-subtle text-primary rounded-3" style="padding: 6px 10px; font-weight: 500;">Other Business</span>
                </span>
            </span>
        </div>

        <!-- ── Plans Grid: Order-Based Businesses ── -->
        <div id="pricingGridRestaurants" class="pricing-plans-new-grid" style="margin-top: 32px;">
            <!-- Starter Plan -->
            <div class="plan-card-new">
                <div class="plan-new-header">
                    <div class="flex justify-between w-100" style="display: flex; justify-content: space-between; width: 100%;">
                        <h3 class="plan-new-name">Starter</h3>
                    </div>
                    <p class="plan-new-tagline">Free to start. Pay only per successful online order.</p>
                </div>

                <div class="plan-new-price-block">
                    <div class="plan-new-price-row">
                        <span class="plan-new-price-main">Free</span>
                    </div>
                    <div class="plan-new-price-sub">₹1/successful order</div>
                    <div class="plan-wallet-credit-pill">
                        <i data-lucide="zap" width="13" height="13"></i>
                        <span>₹50 wallet credit on signup</span>
                    </div>
                </div>

                <ul class="plan-new-features-list">
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Digital menu with QR code</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Customer online Order system</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Kitchen / KDS system</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Menu management & categories</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Order management dashboard</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Customer-facing order tracking</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>₹1 deducted per successful online order</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>₹50 promotional wallet credit on signup</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Customer CRM</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Loyalty & rewards program</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Google Business Profile assistance</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>SEO Friendly Professional one-page business website</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Basic customer support</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Influencer Marketing</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>1 business account</span></li>
                </ul>

                <a href="<?php echo $pricing_contact_href; ?>" id="pricing-cta-restaurant-free" class="plan-new-cta-btn plan-cta-subtle">
                    <span>Get Started Free</span>
                    <i data-lucide="arrow-right"></i>
                </a>
            </div>

            <!-- Pro Plan -->
            <div class="plan-card-new featured">
                <div class="plan-new-header">
                    <div class="flex justify-between w-100" style="display: flex; justify-content: space-between; width: 100%;">
                        <h3 class="plan-new-name">Pro</h3>
                        <div class="flex gap-4">
                            <div class="plan-badge-chip plan-badge-featured mb-0">
                                <i data-lucide="sparkles" width="13" height="13"></i>
                                <span>Most Popular</span>
                            </div>
                        </div>
                    </div>
                    <p class="plan-new-tagline">Unlimited orders. No per-order fee while plan is active.</p>
                </div>

                <div class="plan-new-price-block">
                    <!-- Monthly Pricing State -->
                    <div class="pricing-val-monthly">
                        <div class="plan-new-price-row">
                            <span class="plan-new-price-main">₹499</span>
                            <span class="plan-new-price-period">per month</span>
                        </div>
                        <div class="plan-new-price-sub">billed monthly</div>
                    </div>
                    <!-- Yearly Pricing State -->
                    <div class="pricing-val-yearly" style="display: none;">
                        <div class="plan-new-price-row">
                            <span class="plan-new-price-main">₹5,000</span>
                            <span class="plan-new-price-period">per year</span>
                        </div>
                        <div class="plan-new-price-sub">(₹417/month equivalent)</div>
                        <div class="plan-savings-pill">
                            <i data-lucide="trending-up"></i>
                            <span>Save ₹1,000 with annual billing</span>
                        </div>
                    </div>
                </div>

                <ul class="plan-new-features-list">
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Everything in Starter</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>No ₹1 per-order fee (fee waived)</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Custom website / domain (where available)</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Priority customer support</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Advanced analytics & reports</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Marketing campaigns & announcements</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Customer CRM & loyalty stamps</span></li>
                </ul>

                <a href="<?php echo $pricing_contact_href; ?>" id="pricing-cta-pro" class="plan-new-cta-btn plan-cta-solid">
                    <span>Start Free Trial</span>
                    <i data-lucide="arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- ── Plans Grid: Professional Businesses ── -->
        <div id="pricingGridOther" class="pricing-plans-new-grid single-plan" style="margin-top: 32px; display: none;">
            <div class="plan-card-new featured" style="max-width: 540px; margin: 0 auto;">
                <div class="plan-new-header">
                    <div class="flex justify-between w-100" style="display: flex; justify-content: space-between; width: 100%;">
                        <h3 class="plan-new-name">Professional</h3>
                        <div class="flex gap-4">
                            <div class="plan-badge-chip plan-badge-featured mb-0">
                                <i data-lucide="sparkles" width="13" height="13"></i>
                                <span>Most Popular</span>
                            </div>
                        </div>
                    </div>
                    <p class="plan-new-tagline">All-in-one platform for salons, retail, hotels & more.</p>
                </div>

                <div class="plan-new-price-block">
                    <!-- Monthly Pricing State -->
                    <div class="pricing-val-monthly">
                        <div class="plan-new-price-row">
                            <span class="plan-new-price-main">₹499</span>
                            <span class="plan-new-price-period">per month</span>
                        </div>
                        <div class="plan-new-price-sub">billed monthly</div>
                    </div>
                    <!-- Yearly Pricing State -->
                    <div class="pricing-val-yearly" style="display: none;">
                        <div class="plan-new-price-row">
                            <span class="plan-new-price-main">₹5,000</span>
                            <span class="plan-new-price-period">per year</span>
                        </div>
                        <div class="plan-new-price-sub">(₹417/month equivalent)</div>
                        <div class="plan-savings-pill">
                            <i data-lucide="trending-up"></i>
                            <span>Save ₹1,000 with annual billing</span>
                        </div>
                    </div>
                </div>

                <ul class="plan-new-features-list">
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Professional one-page business website</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>SEO-friendly public business page</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Digital product catalogue with QR codes</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Online appointment booking</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Customer CRM & management</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Loyalty & rewards program</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Google Business Profile assistance</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Marketing campaigns & announcements</span></li>
                    <li class="plan-new-feat-item"><i data-lucide="check" class="plan-new-check-icon"></i><span>Analytics & business insights</span></li>
                </ul>

                <a href="<?php echo $pricing_contact_href; ?>" id="pricing-cta-other-business" class="plan-new-cta-btn plan-cta-solid">
                    <span>Start Free Trial</span>
                    <i data-lucide="arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- ── Bottom note ── -->
        <p class="pricing-branch-note">
            Need multiple branches? 
            <a href="<?php echo $pricing_contact_href; ?>" class="pricing-inline-link">
                Get in touch
            </a> 
            for custom pricing.
        </p>
    </div>
</section>
