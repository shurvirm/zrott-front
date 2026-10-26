<?php
$pageId = 'contact';
$which_page = "contact";
$pageTitle = 'Contact Us — Direct WhatsApp, Phone Call & Email Support | Zrott';
$pageDescr = 'Skip the form queues. Contact Zrott directly via WhatsApp (+91 99045 78948), direct call, or email (hi@zrott.com). Fast response under 15 minutes.';
$pageKeyword = 'contact Zrott, Zrott WhatsApp support, restaurant POS support, Zrott phone number, customer care Zrott, digital menu support, Gujarat startup contact';

include('inc/db.php');
$canonical = '<link rel="canonical" href="' . $root . '/contact" />';

// Search params resolution
$rawFrom = $_GET['from'] ?? '';
$fromClean = trim(strtolower($rawFrom));

function resolveSourceUrlHelper($fromStr, $rootUrl) {
    if (!$fromStr) return '';
    if (str_starts_with($fromStr, 'http://') || str_starts_with($fromStr, 'https://')) {
        return $fromStr;
    }
    if (str_starts_with($fromStr, '/')) {
        return $rootUrl . $fromStr;
    }
    $mapping = [
        'bio' => $rootUrl . '/link-in-bio',
        'crm' => $rootUrl . '/crm-for-restaurants',
        'crm-for-restaurants' => $rootUrl . '/crm-for-restaurants',
        'crm-for-restaurant' => $rootUrl . '/crm-for-restaurants',
        'restaurant' => $rootUrl . '/crm-for-restaurants',
        'restaurants' => $rootUrl . '/crm-for-restaurants',
        'retail' => $rootUrl . '/retail-business-online',
        'retail-business-online' => $rootUrl . '/retail-business-online',
        'retailer' => $rootUrl . '/retail-business-online',
        'website' => $rootUrl . '/website',
        'home' => $rootUrl . '/',
        'about' => $rootUrl . '/about',
        'pricing' => $rootUrl . '/#pricing',
        'features' => $rootUrl . '/#features',
    ];
    return $mapping[$fromStr] ?? ($rootUrl . '/' . $fromStr);
}

$sourceUrl = resolveSourceUrlHelper($fromClean, $root);

// Default topic detection
$selectedTopic = 'crm';
if (str_contains($fromClean, 'retail') || str_contains($fromClean, 'store') || str_contains($fromClean, 'kirana')) {
    $selectedTopic = 'retail';
} elseif (str_contains($fromClean, 'bio')) {
    $selectedTopic = 'bio';
} elseif (str_contains($fromClean, 'website')) {
    $selectedTopic = 'website';
} elseif (str_contains($fromClean, 'general') || str_contains($fromClean, 'partnership')) {
    $selectedTopic = 'general';
}

$topics = [
    'crm' => [
        'label' => '🍽️ Zrott CRM (Restaurant & Ordering)',
        'message' => 'I am interested in Zrott CRM (QR menu, KDS ordering & table management). Could you share details and a demo?',
        'emailSubject' => 'Inquiry: Zrott CRM (Restaurant & Ordering)',
    ],
    'retail' => [
        'label' => '🛍️ Zrott Retail (Local Business & Online Store)',
        'message' => 'I am interested in Zrott Retail (online store, WhatsApp ordering & zero commission). Could you share details and help me get started?',
        'emailSubject' => 'Inquiry: Zrott Retail (Local Business & Online Store)',
    ],
    'bio' => [
        'label' => '🔗 Zrott Bio (Link in Bio & Creator)',
        'message' => 'I am interested in Zrott Bio (link in bio, custom branding & lead capture). Could you share details?',
        'emailSubject' => 'Inquiry: Zrott Bio (Link in Bio)',
    ],
    'website' => [
        'label' => '🌐 Zrott Website (Business Sites & Subdomain)',
        'message' => 'I am interested in Zrott Website builder (subdomains, Google My Business & custom domain). Could you help me get started?',
        'emailSubject' => 'Inquiry: Zrott Website Builder',
    ],
    'general' => [
        'label' => '💬 General Inquiry & Partnership',
        'message' => 'I have a question regarding Zrott products, pricing, or partnership opportunities. Could someone help me?',
        'emailSubject' => 'General Inquiry & Partnership - Zrott',
    ],
];

$activeTopicData = $topics[$selectedTopic];
$initialWaMsg = $sourceUrl
    ? "Hi, I am come from {$sourceUrl} page. {$activeTopicData['message']}"
    : "Hi Zrott Team! {$activeTopicData['message']}";
$initialEmailSub = $sourceUrl
    ? "{$activeTopicData['emailSubject']} (via {$sourceUrl})"
    : $activeTopicData['emailSubject'];

$initialWaUrl = "https://wa.me/919904578948?text=" . urlencode($initialWaMsg);
$initialEmailUrl = "mailto:hi@zrott.com?subject=" . urlencode($initialEmailSub) . "&body=" . urlencode($initialWaMsg);
$phoneCallUrl = "tel:+919904578948";

$bottomWaMsg = $sourceUrl
    ? "Hi, I am come from {$sourceUrl} page. I would like to learn more about Zrott."
    : "Hi Zrott Team! I would like to learn more about Zrott.";
$bottomWaUrl = "https://wa.me/919904578948?text=" . urlencode($bottomWaMsg);

$schema_tags = '<script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Zrott",
  "description": "Direct inquiries through WhatsApp, phone call, or email. Zero waiting forms.",
  "url": "' . $root . '/contact",
  "mainEntity": {
    "@type": "Organization",
    "name": "Zrott",
    "url": "' . $root . '",
    "logo": "' . $root . '/img/logo.webp",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Gujarat",
      "addressCountry": "IN"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+91-99045-78948",
      "contactType": "sales and customer support",
      "availableLanguage": ["English", "Hindi", "Gujarati"],
      "email": "hi@zrott.com",
      "contactOption": "WhatsApp Direct, Telephone",
      "areaServed": ["IN", "Worldwide"]
    }
  }
}</script>';

include('inc/header.php');
?>

<div class="front-page-wrapper">
    <main class="front-container" style="padding: 0 24px 80px;">
        <!-- ─── Hero Section ─── -->
        <section class="contact-page-hero" style="margin-left: -20px; margin-right: -20px;">
            <div class="contact-hero-glow-1"></div>

            <div class="contact-hero-content">
                <div class="contact-live-pill">
                    <div class="pulse-indicator">
                        <div class="pulse-indicator-ring"></div>
                        <div class="pulse-indicator-dot"></div>
                    </div>
                    <span id="officeStatus">Team is Live &amp; Accepting Inquiries</span>
                    <span style="color: #94a3b8;">&bull;</span>
                    <span id="liveClock" style="font-family: monospace; color: #6d28d9; font-weight: 700;">
                        Active IST
                    </span>
                </div>

                <h1 class="contact-title">
                    Skip the forms. Talk to us <span class="contact-title-highlight">directly</span>.
                </h1>

                <p class="contact-subtitle">
                    No automated bots, no 10-field contact forms, and no waiting 3 days for an email reply.
                    Connect with the Zrott team instantly through your favorite direct channel.
                </p>

                <div class="contact-channels-meta">
                    <div class="contact-meta-badge">
                        <i data-lucide="zap" width="13" height="13" style="color: #10b981;"></i>
                        <span>Zero Form Friction</span>
                    </div>
                    <div class="contact-meta-badge">
                        <i data-lucide="clock" width="13" height="13" style="color: #7c3aed;"></i>
                        <span>Average Response: &lt;15 mins</span>
                    </div>
                    <div class="contact-meta-badge">
                        <i data-lucide="shield-check" width="13" height="13" style="color: #2563eb;"></i>
                        <span>Direct Access to Product Specialists</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Interactive Topic Selector ─── -->
        <section class="contact-topics-box">
            <div class="contact-topics-header">
                <div class="contact-topics-label">
                    <i data-lucide="sparkles" width="13" height="13" style="color: #7c3aed;"></i>
                    <span>Select what you'd like to talk about:</span>
                </div>
                <span class="contact-topics-hint">
                    Pre-formats your WhatsApp &amp; Email message automatically
                </span>
            </div>

            <?php if ($sourceUrl): ?>
                <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(124, 58, 237, 0.08); border: 1px solid rgba(124, 58, 237, 0.2); padding: 6px 14px; border-radius: 100px; font-size: 0.82rem; color: #6d28d9; font-weight: 600; margin-bottom: 16px;">
                    <span>Inquiry origin:</span>
                    <span id="contactSourceUrl" style="font-family: monospace; color: #4c1d95; word-break: break-all;"><?php echo htmlspecialchars($sourceUrl); ?></span>
                </div>
            <?php else: ?>
                <span id="contactSourceUrl" style="display: none;"></span>
            <?php endif; ?>

            <div class="contact-topic-pills">
                <?php foreach ($topics as $tid => $tinfo): ?>
                    <button
                        type="button"
                        class="contact-topic-pill <?php echo ($selectedTopic === $tid) ? 'active' : ''; ?>"
                        data-topic="<?php echo $tid; ?>"
                    >
                        <?php echo $tinfo['label']; ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="contact-preview-banner">
                <div class="contact-preview-text">
                    <div class="contact-preview-badge">
                        <i data-lucide="message-circle" style="width: 13px; height: 13px;"></i>
                        <span>Live Pre-Filled Message Preview</span>
                    </div>
                    <p class="contact-preview-msg" id="contactPreviewMsg">"<?php echo htmlspecialchars($initialWaMsg); ?>"</p>
                </div>
                <a
                    href="<?php echo $initialWaUrl; ?>"
                    id="contactPreviewWaBtn"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="front-btn-primary"
                    style="font-size: 0.85rem; padding: 8px 16px; background: #25D366; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);"
                >
                    <i data-lucide="message-circle" style="width: 15px; height: 15px;"></i>
                    <span>Chat via WhatsApp</span>
                </a>
            </div>
        </section>

        <script>
            (function () {
                var retailData = {
                    message: 'I am interested in Zrott Retail (online store, WhatsApp ordering & zero commission). Could you share details and help me get started?',
                    emailSubject: 'Inquiry: Zrott Retail (Local Business & Online Store)'
                };
                document.addEventListener('DOMContentLoaded', function () {
                    var retailBtn = document.querySelector('.contact-topic-pill[data-topic="retail"]');
                    if (retailBtn) {
                        retailBtn.addEventListener('click', function () {
                            var srcUrlEl = document.getElementById('contactSourceUrl');
                            var srcUrl = srcUrlEl ? srcUrlEl.textContent.trim() : '';
                            var fullMsg = srcUrl ? ('Hi, I am come from ' + srcUrl + ' page. ' + retailData.message) : ('Hi Zrott Team! ' + retailData.message);
                            var fullSubject = srcUrl ? (retailData.emailSubject + ' (via ' + srcUrl + ')') : retailData.emailSubject;

                            var previewMsgEl = document.getElementById('contactPreviewMsg');
                            var previewWaBtn = document.getElementById('contactPreviewWaBtn');
                            var cardWaBtn = document.getElementById('contactCardWaBtn');
                            var cardEmailBtn = document.getElementById('contactCardEmailBtn');

                            if (previewMsgEl) previewMsgEl.textContent = '"' + fullMsg + '"';
                            var waLink = 'https://wa.me/919904578948?text=' + encodeURIComponent(fullMsg);
                            var mailLink = 'mailto:hi@zrott.com?subject=' + encodeURIComponent(fullSubject) + '&body=' + encodeURIComponent(fullMsg);

                            if (previewWaBtn) previewWaBtn.href = waLink;
                            if (cardWaBtn) cardWaBtn.href = waLink;
                            if (cardEmailBtn) cardEmailBtn.href = mailLink;
                        });
                    }
                });
            })();
        </script>

        <!-- ─── 3 VIP Direct Channels Grid ─── -->
        <section class="contact-channels-grid">
            <!-- Card 1: WhatsApp Direct -->
            <div class="contact-card whatsapp-card">
                <div class="contact-card-top">
                    <div class="contact-icon-bubble whatsapp">
                        <i data-lucide="message-circle" style="width: 28px; height: 28px;"></i>
                    </div>
                    <span class="contact-channel-badge recommended">
                        ⚡ Recommended &bull; Fastest
                    </span>
                </div>

                <h3 class="contact-card-title">WhatsApp Direct</h3>
                <p class="contact-card-desc">
                    Instant chat, voice notes &amp; media sharing directly with our team. Zero waiting queue.
                </p>

                <div class="contact-value-wrapper">
                    <span class="contact-value-text">+91 99045 78948</span>
                    <button
                        type="button"
                        class="contact-icon-btn"
                        data-copy="+91 99045 78948"
                        title="Copy WhatsApp number"
                        aria-label="Copy WhatsApp number"
                    >
                        <i data-lucide="copy" class="copy-icon"></i>
                        <i data-lucide="check" class="check-icon"></i>
                    </button>
                </div>

                <a
                    href="<?php echo $initialWaUrl; ?>"
                    id="contactCardWaBtn"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="contact-cta-btn btn-whatsapp"
                >
                    <i data-lucide="message-circle"></i>
                    <span>Open WhatsApp Chat</span>
                    <i data-lucide="arrow-right"></i>
                </a>

                <button
                    type="button"
                    class="contact-qr-toggle"
                    id="contactQrToggleBtn"
                >
                    <i data-lucide="qr-code"></i>
                    <span>Scan QR code with phone camera</span>
                </button>

                <div class="contact-qr-box" id="contactQrBox" style="display: none;">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=220x220&amp;margin=10&amp;data=https%3A%2F%2Fwa.me%2F919904578948" alt="Scan to chat on WhatsApp" />
                    <p class="contact-qr-caption">
                        Point your smartphone camera to start WhatsApp chat instantly
                    </p>
                </div>

                <ul class="contact-card-perks">
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span><strong>Average reply:</strong> Under 15 minutes</span>
                    </li>
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span>Voice notes &amp; screenshots supported</span>
                    </li>
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span>Instant 1-on-1 demo scheduling</span>
                    </li>
                </ul>
            </div>

            <!-- Card 2: Direct Phone Call -->
            <div class="contact-card phone-card">
                <div class="contact-card-top">
                    <div class="contact-icon-bubble phone">
                        <i data-lucide="phone" style="width: 26px; height: 26px;"></i>
                    </div>
                    <span class="contact-channel-badge standard">
                        Direct Line &bull; No IVR
                    </span>
                </div>

                <h3 class="contact-card-title">Direct Call</h3>
                <p class="contact-card-desc">
                    Speak immediately with a solutions architect. No automated robot menus, just real humans.
                </p>

                <div class="contact-value-wrapper">
                    <span class="contact-value-text">+91 99045 78948</span>
                    <button
                        type="button"
                        class="contact-icon-btn"
                        data-copy="+91 99045 78948"
                        title="Copy phone number"
                        aria-label="Copy phone number"
                    >
                        <i data-lucide="copy" class="copy-icon"></i>
                        <i data-lucide="check" class="check-icon"></i>
                    </button>
                </div>

                <a href="<?php echo $phoneCallUrl; ?>" class="contact-cta-btn btn-phone">
                    <i data-lucide="phone"></i>
                    <span>Call +91 99045 78948</span>
                    <i data-lucide="arrow-right"></i>
                </a>

                <div style="margin: 12px 0 16px; font-size: 0.82rem; color: #64748b; text-align: center;">
                    <span>Mon – Sat &bull; 8:00 AM – 11:00 PM IST</span>
                </div>

                <ul class="contact-card-perks">
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span><strong>Direct pickup:</strong> Skip the automated telephone tree</span>
                    </li>
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span>Languages: English, Hindi, Gujarati</span>
                    </li>
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span>Onboarding &amp; instant pricing consultation</span>
                    </li>
                </ul>
            </div>

            <!-- Card 3: Direct Email -->
            <div class="contact-card email-card">
                <div class="contact-card-top">
                    <div class="contact-icon-bubble email">
                        <i data-lucide="mail" style="width: 26px; height: 26px;"></i>
                    </div>
                    <span class="contact-channel-badge inquiries">
                        Official Inquiries &amp; RFP
                    </span>
                </div>

                <h3 class="contact-card-title">Direct Email</h3>
                <p class="contact-card-desc">
                    Send formal RFPs, custom enterprise specifications, attachments, or commercial inquiries.
                </p>

                <div class="contact-value-wrapper">
                    <span class="contact-value-text">hi@zrott.com</span>
                    <button
                        type="button"
                        class="contact-icon-btn"
                        data-copy="hi@zrott.com"
                        title="Copy email address"
                        aria-label="Copy email address"
                    >
                        <i data-lucide="copy" class="copy-icon"></i>
                        <i data-lucide="check" class="check-icon"></i>
                    </button>
                </div>

                <a href="<?php echo $initialEmailUrl; ?>" id="contactCardEmailBtn" class="contact-cta-btn btn-email">
                    <i data-lucide="mail"></i>
                    <span>Email hi@zrott.com</span>
                    <i data-lucide="arrow-right"></i>
                </a>

                <div style="margin: 12px 0 16px; font-size: 0.82rem; color: #64748b; text-align: center;">
                    <span>Guaranteed reply within 2–4 hours</span>
                </div>

                <ul class="contact-card-perks">
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span><strong>Fast inbox:</strong> Monitored directly by founders</span>
                    </li>
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span>Best for formal quotations, NDA &amp; invoices</span>
                    </li>
                    <li class="contact-card-perk-item">
                        <i data-lucide="check-circle-2" class="contact-card-perk-icon"></i>
                        <span>Send PDF menus or Excel price lists directly</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ─── Frequently Asked Questions ─── -->
        <section class="contact-faq-wrapper">
            <h2 class="contact-faq-title">Frequently Asked Questions</h2>
            <div class="contact-faq-list">
                <div class="contact-faq-item active">
                    <button type="button" class="contact-faq-btn">
                        <span>How quickly does the Zrott team respond on WhatsApp?</span>
                        <i data-lucide="chevron-down" class="contact-faq-chevron open"></i>
                    </button>
                    <div class="contact-faq-answer">
                        <p>During our active hours (8:00 AM – 11:00 PM IST), we typically respond in under 15 minutes. WhatsApp is our fastest channel and connects you directly with our core product specialists.</p>
                    </div>
                </div>

                <div class="contact-faq-item">
                    <button type="button" class="contact-faq-btn">
                        <span>Why is there no contact form on this page?</span>
                        <i data-lucide="chevron-down" class="contact-faq-chevron"></i>
                    </button>
                    <div class="contact-faq-answer" style="display: none;">
                        <p>We believe 10-field contact forms create needless friction and delay. Instead of leaving you waiting for an automated ticket email, we let you chat with us right away on WhatsApp, call us directly, or send an email.</p>
                    </div>
                </div>

                <div class="contact-faq-item">
                    <button type="button" class="contact-faq-btn">
                        <span>Can I schedule a live Google Meet or WhatsApp screen-share demo?</span>
                        <i data-lucide="chevron-down" class="contact-faq-chevron"></i>
                    </button>
                    <div class="contact-faq-answer" style="display: none;">
                        <p>Yes, absolutely! Simply message us on WhatsApp or call us, and we will set up a personalized 10-minute screen-share walkthrough at your convenience.</p>
                    </div>
                </div>

                <div class="contact-faq-item">
                    <button type="button" class="contact-faq-btn">
                        <span>Do you help with digital setup and catalog migration?</span>
                        <i data-lucide="chevron-down" class="contact-faq-chevron"></i>
                    </button>
                    <div class="contact-faq-answer" style="display: none;">
                        <p>Yes! Our onboarding team provides full white-glove setup. You can send us your menu, product list, or brand assets directly via WhatsApp or email, and we will format and configure your setup for you.</p>
                    </div>
                </div>

                <div class="contact-faq-item">
                    <button type="button" class="contact-faq-btn">
                        <span>Can I call if I am outside India?</span>
                        <i data-lucide="chevron-down" class="contact-faq-chevron"></i>
                    </button>
                    <div class="contact-faq-answer" style="display: none;">
                        <p>Yes, you can call our international line +91 99045 78948 directly, or connect with us on WhatsApp from anywhere in the world at zero international calling cost.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── "Why Zero Forms?" Manifesto Section ─── -->
        <section class="contact-why-section">
            <div class="contact-why-header">
                <span class="contact-why-badge">The Zrott Direct Philosophy</span>
                <h2 class="contact-why-title">Why We Don't Use Contact Forms</h2>
                <p class="contact-why-desc">
                    Traditional websites hide behind generic forms that lead to spam queues and delay. We do the opposite.
                </p>
            </div>

            <div class="contact-why-grid">
                <div class="contact-why-card">
                    <div class="contact-why-icon">
                        <i data-lucide="zap"></i>
                    </div>
                    <h3 class="contact-why-card-title">Real-Time Speed</h3>
                    <p class="contact-why-card-desc">
                        Your business moves fast. Waiting 48 hours for a sales rep to reply to a form is outdated. We talk live.
                    </p>
                </div>

                <div class="contact-why-card">
                    <div class="contact-why-icon">
                        <i data-lucide="headphones"></i>
                    </div>
                    <h3 class="contact-why-card-title">Human-to-Human</h3>
                    <p class="contact-why-card-desc">
                        No scripted chatbot loops that can't understand your business. You speak directly with knowledgeable engineers.
                    </p>
                </div>

                <div class="contact-why-card">
                    <div class="contact-why-icon">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <h3 class="contact-why-card-title">Zero Marketing Spam</h3>
                    <p class="contact-why-card-desc">
                        We never add your phone or email to marketing email drip loops or third-party lead brokers. 100% confidential.
                    </p>
                </div>

                <div class="contact-why-card">
                    <div class="contact-why-icon">
                        <i data-lucide="layers"></i>
                    </div>
                    <h3 class="contact-why-card-title">Live Screen Walkthrough</h3>
                    <p class="contact-why-card-desc">
                        Need to see the restaurant POS or salon schedule in action? We spin up a Google Meet or video link on the spot.
                    </p>
                </div>
            </div>
        </section>

        <!-- ─── Business Hours & Operating Information ─── -->
        <section class="contact-info-grid">
            <div class="contact-info-card">
                <h3 class="contact-info-title">
                    <i data-lucide="clock" style="color: #7c3aed;"></i>
                    <span>Inquiry Hours &amp; Availability</span>
                </h3>
                <div class="contact-hours-list">
                    <div class="contact-hour-row">
                        <span class="contact-hour-day">Monday – Friday</span>
                        <span class="contact-hour-time">8:00 AM – 11:00 PM IST</span>
                    </div>
                    <div class="contact-hour-row">
                        <span class="contact-hour-day">Saturday</span>
                        <span class="contact-hour-time">9:00 AM – 9:00 PM IST</span>
                    </div>
                    <div class="contact-hour-row">
                        <span class="contact-hour-day">Sunday</span>
                        <span class="contact-hour-time" style="color: #10b981;">
                            WhatsApp Active (Priority On-Call)
                        </span>
                    </div>
                    <div class="contact-hour-row">
                        <span class="contact-hour-day">Emergency System Support</span>
                        <span class="contact-hour-time" style="color: #7c3aed; font-weight: 700;">
                            24/7 for Live Outlets
                        </span>
                    </div>
                </div>
            </div>

            <div class="contact-info-card">
                <h3 class="contact-info-title">
                    <i data-lucide="map-pin" style="color: #2563eb;"></i>
                    <span>Headquarters &amp; Onboarding</span>
                </h3>
                <p style="font-size: 0.92rem; color: #475569; line-height: 1.6; margin-bottom: 16px;">
                    Zrott powers restaurants, cafes, salons, retail outlets, and service providers across India and global markets.
                </p>
                <div style="display: flex; flex-direction: column; gap: 10px; font-size: 0.86rem; color: #334155;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-weight: 700; min-width: 80px; color: #64748b;">Location:</span>
                        <span>Gujarat, India (Operating Worldwide)</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-weight: 700; min-width: 80px; color: #64748b;">Phone:</span>
                        <a href="<?php echo $phoneCallUrl; ?>" style="color: #7c3aed; text-decoration: none; font-weight: 600;">
                            +91 99045 78948
                        </a>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-weight: 700; min-width: 80px; color: #64748b;">WhatsApp:</span>
                        <a href="<?php echo $bottomWaUrl; ?>" target="_blank" rel="noopener noreferrer" style="color: #15803d; text-decoration: none; font-weight: 600;">
                            Chat directly on WhatsApp
                        </a>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-weight: 700; min-width: 80px; color: #64748b;">Email:</span>
                        <a href="mailto:hi@zrott.com" style="color: #2563eb; text-decoration: none; font-weight: 600;">
                            hi@zrott.com
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── Bottom WhatsApp Banner CTA ─── -->
        <section class="contact-banner-cta">
            <div>
                <h2 class="contact-banner-title">
                    Ready to modernize your business operations?
                </h2>
                <p class="contact-banner-subtitle">
                    Don't spend days waiting for an email quote. Get your custom setup plan, pricing, and live demo right now on WhatsApp.
                </p>
            </div>

            <div class="contact-banner-actions">
                <a
                    href="<?php echo $bottomWaUrl; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="contact-banner-btn-wa"
                >
                    <i data-lucide="message-circle"></i>
                    <span>Chat on WhatsApp (+91 99045 78948)</span>
                </a>
                <a href="<?php echo $phoneCallUrl; ?>" class="contact-banner-btn-call">
                    <i data-lucide="phone"></i>
                    <span>Direct Call</span>
                </a>
            </div>
        </section>
    </main>

    <?php include('inc/footer.php'); ?>
</div>
