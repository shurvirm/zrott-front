<?php
/**
 * Universal Pricing Section
 * Variables expected before include:
 *   $pricing_accent   – 'purple' | 'teal'   (default: 'purple')
 *   $pricing_demo_href – anchor link for CTA (default: '#demo')
 *   $pricing_section_id – section id (default: 'pricing')
 */
$pricing_accent     = $pricing_accent     ?? 'purple';
$pricing_section_id = $pricing_section_id ?? 'pricing';
$pricing_demo_href  = $pricing_demo_href  ?? '#demo';

// Accent palette
if ($pricing_accent === 'teal') {
    $ac       = '#22d3ee';
    $ac_light = '#67e8f9';
    $ac_rgb   = '34,211,238';
    $grad     = 'linear-gradient(135deg,#22d3ee,#a855f7)';
    $pill_bg  = 'rgba(34,211,238,.13)';
    $pill_br  = 'rgba(34,211,238,.32)';
    $text_grad_class = 'text-grad-teal';
} else {
    $ac       = '#a78bfa';
    $ac_light = '#c4b5fd';
    $ac_rgb   = '167,139,250';
    $grad     = 'linear-gradient(135deg,#7c3aed,#a855f7)';
    $pill_bg  = 'rgba(124,58,237,.13)';
    $pill_br  = 'rgba(167,139,250,.32)';
    $text_grad_class = 'text-grad-purple';
}
?>

<!-- ══ PRICING ══ -->
<section class="lm-section pricing-section" id="<?php echo $pricing_section_id; ?>">
    <div class="container">

        <div class="text-center mb-5">
            <p class="section-eyebrow">Simple, Transparent Pricing</p>
            <h2 class="section-heading">Choose the Plan<br><span class="<?php echo $text_grad_class; ?>">That Fits You</span></h2>
            <p class="section-sub mx-auto">All plans include full access — unlimited users, modules & support. No hidden fees.</p>
        </div>

        <!-- Toggle pill -->
        <div class="pricing-toggle-wrap mb-5">
            <div class="pricing-toggle" id="pricing-toggle-<?php echo $pricing_accent; ?>">
                <button class="ptgl-btn ptgl-btn--active" data-target="monthly">Monthly</button>
                <button class="ptgl-btn" data-target="yearly">Yearly</button>
                <button class="ptgl-btn" data-target="onetime">One-time</button>
                <span class="ptgl-slider"></span>
            </div>
        </div>

        <!-- Cards row -->
        <div class="row g-4 justify-content-center align-items-stretch">

            <!-- ── MONTHLY ── -->
            <div class="col-lg-4 col-md-6 pricing-tab-panel" data-panel="monthly">
                <div class="pricing-card">
                    <div class="pricing-card-head">
                        <div class="pricing-plan-badge pricing-plan-badge--base">
                            <iconify-icon icon="solar:calendar-mark-bold" width="14" height="14"></iconify-icon>
                            Monthly
                        </div>
                        <div class="pricing-amount-row">
                            <span class="pricing-rupee">₹</span>
                            <span class="pricing-amount">5,000</span>
                            <span class="pricing-period">/month</span>
                        </div>
                        <p class="pricing-tagline">Pay as you go</p>
                    </div>
                    <ul class="pricing-features">
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Full Platform Access</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Unlimited Users</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> All Modules Included</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> 24/7 Support</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Free Onboarding</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Cloud Hosted</li>
                    </ul>
                    <a href="<?php echo $pricing_demo_href; ?>" class="pricing-cta btn-saas-ghost" style="width:100%;justify-content:center">
                        Get Started
                        <iconify-icon icon="solar:arrow-right-linear" width="16" height="16"></iconify-icon>
                    </a>
                </div>
            </div>

            <!-- ── YEARLY (featured) ── -->
            <div class="col-lg-4 col-md-6 pricing-tab-panel" data-panel="yearly">
                <div class="pricing-card pricing-card--featured" style="--ac:<?php echo $ac; ?>;--ac-rgb:<?php echo $ac_rgb; ?>;--grad:<?php echo $grad; ?>">
                    <div class="pricing-popular-ribbon">
                        <iconify-icon icon="solar:star-bold" width="11" height="11"></iconify-icon>
                        Most Popular
                    </div>
                    <div class="pricing-card-head">
                        <div class="pricing-plan-badge pricing-plan-badge--featured">
                            <iconify-icon icon="solar:calendar-bold" width="14" height="14"></iconify-icon>
                            Yearly
                        </div>
                        <div class="pricing-amount-row">
                            <span class="pricing-rupee pricing-rupee--accent">₹</span>
                            <span class="pricing-amount pricing-amount--accent">50,000</span>
                            <span class="pricing-period">/year</span>
                        </div>
                        <div class="pricing-savings-row">
                            <span class="pricing-savings-badge">Save ₹10,000</span>
                            <span class="pricing-old-price">₹60,000</span>
                        </div>
                        <p class="pricing-tagline">Best value · ~₹4,167/mo</p>
                    </div>
                    <ul class="pricing-features">
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Everything in Monthly</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> <strong>2 Months Free</strong></li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Priority Support</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Dedicated Account Manager</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Custom Reports</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Advance Customizations</li>
                    </ul>
                    <a href="<?php echo $pricing_demo_href; ?>" class="pricing-cta btn-saas-primary" style="width:100%;justify-content:center">
                        Get Best Deal
                        <iconify-icon icon="solar:arrow-right-up-linear" width="16" height="16"></iconify-icon>
                    </a>
                </div>
            </div>

            <!-- ── ONE-TIME ── -->
            <div class="col-lg-4 col-md-6 pricing-tab-panel" data-panel="onetime">
                <div class="pricing-card pricing-card--onetime">
                    <div class="pricing-card-head">
                        <div class="pricing-plan-badge pricing-plan-badge--onetime">
                            <iconify-icon icon="solar:key-bold" width="14" height="14"></iconify-icon>
                            One-time
                        </div>
                        <div class="pricing-amount-row">
                            <span class="pricing-rupee">₹</span>
                            <span class="pricing-amount">1,50,000</span>
                            <span class="pricing-period" style="align-self:flex-end;padding-bottom:6px"> one-time</span>
                        </div>
                        <p class="pricing-tagline">Own it forever</p>
                    </div>
                    <ul class="pricing-features">
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Lifetime License</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> No Monthly Fee</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Full Platform Access</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> 1 Year Free Support</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> On-premise / Cloud</li>
                        <li><iconify-icon icon="solar:check-circle-bold" style="color:#4ade80" width="16" height="16"></iconify-icon> Source Code Handover</li>
                    </ul>
                    <a href="<?php echo $pricing_demo_href; ?>" class="pricing-cta btn-saas-ghost" style="width:100%;justify-content:center">
                        Talk to Us
                        <iconify-icon icon="solar:phone-bold" width="16" height="16"></iconify-icon>
                    </a>
                </div>
            </div>

        </div><!-- /.row -->

        <!-- Bottom money-back note -->
        <p class="pricing-guarantee text-center mt-4">
            <iconify-icon icon="solar:shield-check-bold" width="15" height="15" style="color:#4ade80;vertical-align:-3px"></iconify-icon>
            No credit card required · Free demo · Cancel anytime
        </p>

    </div>
</section>

<script>
(function () {
    var toggle = document.getElementById('pricing-toggle-<?php echo $pricing_accent; ?>');
    if (!toggle) return;
    var btns   = toggle.querySelectorAll('.ptgl-btn');
    var slider = toggle.querySelector('.ptgl-slider');
    var panels = document.querySelectorAll('#<?php echo $pricing_section_id; ?> .pricing-tab-panel');

    function showPanel(target) {
        panels.forEach(function (p) {
            p.style.display = p.dataset.panel === target ? '' : 'none';
        });
        btns.forEach(function (b, i) {
            b.classList.toggle('ptgl-btn--active', b.dataset.target === target);
            if (b.dataset.target === target) {
                slider.style.left  = (b.offsetLeft) + 'px';
                slider.style.width = b.offsetWidth + 'px';
            }
        });
    }

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () { showPanel(btn.dataset.target); });
    });

    // Default: show all panels (desktop), hide non-active on mobile via CSS
    // Init slider
    btns[0].click();
    // Actually we want all 3 cards visible on desktop, toggle on mobile
    // So re-show all and only hide when tab is clicked on mobile
    panels.forEach(function (p) { p.style.display = ''; });

    // Resize-aware slider position
    window.addEventListener('resize', function () {
        btns.forEach(function (b) {
            if (b.classList.contains('ptgl-btn--active')) {
                slider.style.left  = b.offsetLeft + 'px';
                slider.style.width = b.offsetWidth + 'px';
            }
        });
    });
})();
</script>
