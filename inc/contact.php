<?php
// Default values if not set
if (!isset($contact_section_id))
    $contact_section_id = "contact";
if (!isset($contact_header))
    $contact_header = "Let's Build Something<br>Great Together.";
if (!isset($contact_eyebrow))
    $contact_eyebrow = "Get In Touch";
if (!isset($contact_subtitle))
    $contact_subtitle = "Tell us about your project and we'll get back within 24 hours with a detailed plan.";
if (!isset($form_title))
    $form_title = "Request a Free Demo";
if (!isset($form_id))
    $form_id = "universal-contact-form";

$contact_class = isset($contact_class) ? $contact_class : "lm-section";
// Varied light background colors for icons (fixed, not shuffled)
$bg_colors = [
    'rgba(249, 115, 22, 0.12)',  // Orange
    'rgba(34, 211, 238, 0.12)',  // Cyan
    'rgba(167, 139, 250, 0.12)', // Purple
    'rgba(59, 130, 246, 0.12)',  // Blue
    'rgba(236, 72, 153, 0.12)',  // Pink
];
$icon_colors = [
    '#f97316',  // Orange
    '#22d3ee',  // Cyan
    '#a78bfa', // Purple
    '#3b82f6',  // Blue
    '#ec4899',  // Pink
];
?>

<!-- ══ UNIVERSAL CONTACT SECTION ══ -->
<section class="<?php echo $contact_class; ?>" id="<?php echo $contact_section_id; ?>">
    <div class="container">
        <div class="row align-items-start g-5">

            <!-- LEFT: Contact Details -->
            <div class="col-lg-5 order-2 order-lg-1">
                <p class="section-eyebrow"><?php echo $contact_eyebrow; ?></p>
                <h2 class="section-heading contact-heading"><?php echo $contact_header; ?></h2>
                <p style="color:var(--body);line-height:1.8;margin-bottom:2rem">
                    <?php echo $contact_subtitle; ?>
                </p>

                <div class="contact-info-wrap">
                    <div class="contact-info-item">
                        <div class="ci-icon" style="background:<?php echo $bg_colors[0]; ?>">
                            <iconify-icon icon="solar:clock-circle-bold" width="20" height="20"
                                style="color:<?php echo $icon_colors[0]; ?>"></iconify-icon>
                        </div>
                        <div>
                            <div class="ci-label">Response Time</div>
                            <div class="ci-value">We reply within 2 hours</div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="ci-icon" style="background:<?php echo $bg_colors[1]; ?>">
                            <iconify-icon icon="solar:phone-bold" width="20" height="20"
                                style="color:<?php echo $icon_colors[1]; ?>"></iconify-icon>
                        </div>
                        <div>
                            <div class="ci-label">Call Us Directly</div>
                            <div class="ci-value">+91 <?php echo $site_phone_space; ?></div>
                            <div class="ci-value">+91 <?php echo $site_phone2_space; ?></div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="ci-icon" style="background:<?php echo $bg_colors[2]; ?>">
                            <iconify-icon icon="solar:letter-bold" width="20" height="20"
                                style="color:<?php echo $icon_colors[2]; ?>"></iconify-icon>
                        </div>
                        <div>
                            <div class="ci-label">Email Us</div>
                            <div class="ci-value"><?php echo $site_email; ?></div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="ci-icon" style="background:<?php echo $bg_colors[3]; ?>">
                            <iconify-icon icon="solar:map-point-bold" width="20" height="20"
                                style="color:<?php echo $icon_colors[3]; ?>"></iconify-icon>
                        </div>
                        <div>
                            <div class="ci-label">Office Address</div>
                            <div class="ci-value">
                                <?php echo $site_address; ?>
                            </div>
                        </div>
                    </div>

                    <?php if (isset($contact_price_label) && isset($contact_price_value)): ?>
                        <div class="contact-info-item">
                            <div class="ci-icon" style="background:<?php echo $bg_colors[4]; ?>">
                                <iconify-icon icon="solar:tag-price-bold" width="20" height="20"
                                    style="color:<?php echo $icon_colors[4]; ?>"></iconify-icon>
                            </div>
                            <div>
                                <div class="ci-label"><?php echo $contact_price_label; ?></div>
                                <div class="ci-value" style="color:#a78bfa;font-weight:700;font-size:1.1rem">
                                    <?php echo $contact_price_value; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Optional Banner / Additional Card -->
                <?php if (isset($contact_extra_html))
                    echo $contact_extra_html; ?>
            </div>

            <!-- RIGHT: Form -->
            <div class="col-lg-7 order-1 order-lg-2">
                <div class="contact-form-wrap">
                    <h3
                        style="color:var(--h);font-family:'Bricolage Grotesque',sans-serif;font-weight:700;margin-bottom:1.5rem;font-size:1.35rem">
                        <?php echo $form_title; ?>
                    </h3>
                    <form id="<?php echo $form_id; ?>">
                        <input type="hidden" name="which_page" value="<?php echo $current_url; ?>">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="lm-label">Your Name</label>
                                <input type="text" class="lm-input" name="name" placeholder="Rajesh Sharma" required>
                            </div>
                            <div class="col-md-6">
                                <label class="lm-label">Company Name</label>
                                <input type="text" class="lm-input" name="company" placeholder="Acme Industries Ltd."
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="lm-label">Email Address</label>
                                <input type="email" class="lm-input" name="email" placeholder="you@company.com"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="lm-label">Phone Number</label>
                                <input type="tel" class="lm-input" name="phone" placeholder="+91 12345 67890" required>
                            </div>

                            <div class="col-12">
                                <label class="lm-label">I'm interested in</label>
                                <select class="lm-input" name="interest" required>
                                    <option value="">Select a product or service</option>
                                    <option <?php if (isset($which_page) && $which_page == 'erp')
                                        echo 'selected'; ?>>AS
                                        ERP - Manufacturing &amp; Inventory</option>
                                    <option <?php if (isset($which_page) && $which_page == 'hospital')
                                        echo 'selected'; ?>>
                                        AS Caresoft - Hospital Management</option>
                                    <option>NextGen Society - Society Management</option>
                                    <option>Custom Software Development</option>
                                    <option>Mobile App Development</option>
                                    <option>General Enquiry</option>
                                </select>
                            </div>

                            <!-- Dynamic Fields -->
                            <?php if (isset($form_dynamic_fields_html))
                                echo $form_dynamic_fields_html; ?>

                            <div class="col-12">
                                <label class="lm-label">Tell us more details</label>
                                <textarea class="lm-input lm-textarea" name="message"
                                    placeholder="Briefly describe your requirements or challenges..."></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn-saas-primary w-100"
                                    style="justify-content:center;padding:14px;font-size:1rem">
                                    <iconify-icon icon="solar:calendar-date-bold" width="18" height="18"></iconify-icon>
                                    Send Message — We'll Reach Out in Few Minutes
                                </button>
                            </div>

                            <div class="col-12 text-center">
                                <p style="color:var(--muted);font-size:.8rem;margin:0">
                                    <iconify-icon icon="solar:lock-bold" width="12" height="12"></iconify-icon>
                                    No commitment. No credit card. 100% free consultation.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>