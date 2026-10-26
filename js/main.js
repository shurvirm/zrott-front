/**
 * Zrott Front-End Script
 * Handles Theme Toggling, Mobile Navigation, Accordions, Pricing Switches,
 * About Tabs, Contact Interactive Console, and Lucide Icon Rendering.
 */

(function () {
    'use strict';

    // ── 1. Theme Management ───────────────────────────────────────────────────
    var THEME_KEY = 'zrott_theme';

    function getSavedTheme() {
        try {
            return localStorage.getItem(THEME_KEY) || 'light';
        } catch (e) {
            return 'light';
        }
    }

    function applyTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        try {
            localStorage.setItem(THEME_KEY, theme);
        } catch (e) {}

        // Update all theme toggle buttons
        document.querySelectorAll('.theme-toggle-btn').forEach(function (btn) {
            var isDark = theme === 'dark';
            if (isDark) {
                btn.classList.add('dark-active');
                btn.classList.remove('light-active');
            } else {
                btn.classList.add('light-active');
                btn.classList.remove('dark-active');
            }
            var label = btn.querySelector('.theme-label');
            if (label) {
                label.textContent = isDark ? 'Dark' : 'Light';
            }
        });
    }

    function toggleTheme() {
        var current = document.documentElement.getAttribute('data-theme') || 'light';
        var next = current === 'dark' ? 'light' : 'dark';
        applyTheme(next);
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    // ── 2. DOM Ready Initializations ──────────────────────────────────────────
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Theme
        applyTheme(getSavedTheme());

        // Bind Theme Toggle Buttons
        document.querySelectorAll('.theme-toggle-btn').forEach(function (btn) {
            btn.addEventListener('click', toggleTheme);
        });

        // Initialize Lucide Icons
        if (window.lucide) {
            lucide.createIcons();
        }

        // ── Mobile Menu Drawer ─────────────────────────────────────────────────
        var mobileBtn = document.getElementById('mobileMenuBtn');
        var mobileDrawer = document.getElementById('mobileNavDrawer');
        var openIcon = document.getElementById('menuOpenIcon');
        var closeIcon = document.getElementById('menuCloseIcon');

        if (mobileBtn && mobileDrawer) {
            mobileBtn.addEventListener('click', function () {
                var isOpen = mobileDrawer.style.display !== 'none';
                if (isOpen) {
                    mobileDrawer.style.display = 'none';
                    if (openIcon) openIcon.style.display = '';
                    if (closeIcon) closeIcon.style.display = 'none';
                } else {
                    mobileDrawer.style.display = 'block';
                    if (openIcon) openIcon.style.display = 'none';
                    if (closeIcon) closeIcon.style.display = '';
                }
                if (window.lucide) lucide.createIcons();
            });
        }

        // ── Newsletter Form ───────────────────────────────────────────────────
        var newsletterForm = document.getElementById('newsletterForm');
        var newsletterSuccess = document.getElementById('newsletterSuccess');
        if (newsletterForm && newsletterSuccess) {
            newsletterForm.addEventListener('submit', function (e) {
                e.preventDefault();
                var emailInput = document.getElementById('newsletterEmail');
                if (emailInput && emailInput.value.trim()) {
                    newsletterForm.style.display = 'none';
                    newsletterSuccess.style.display = 'flex';
                    if (window.lucide) lucide.createIcons();
                }
            });
        }

        // ── Bio Page & General FAQ Accordion ──────────────────────────────────
        document.querySelectorAll('.bio-faq-card').forEach(function (card) {
            card.addEventListener('click', function () {
                var wasOpen = card.classList.contains('open');
                // Close other faq cards in same list
                var parent = card.closest('.bio-faq-list');
                if (parent) {
                    parent.querySelectorAll('.bio-faq-card').forEach(function (c) {
                        c.classList.remove('open');
                        var arrow = c.querySelector('.bio-faq-arrow-btn');
                        if (arrow) arrow.classList.remove('rotated');
                    });
                }
                if (!wasOpen) {
                    card.classList.add('open');
                    var arrow = card.querySelector('.bio-faq-arrow-btn');
                    if (arrow) arrow.classList.add('rotated');
                }
            });
        });

        // ── Restaurant FAQ Accordion ──────────────────────────────────────────
        document.querySelectorAll('.faq-question-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var item = btn.closest('.faq-accordion-item');
                if (!item) return;
                var isOpen = item.classList.contains('open');
                var list = item.closest('.faq-accordion-list');
                if (list) {
                    list.querySelectorAll('.faq-accordion-item').forEach(function (i) {
                        i.classList.remove('open');
                    });
                }
                if (!isOpen) {
                    item.classList.add('open');
                }
                if (window.lucide) lucide.createIcons();
            });
        });

        // ── Contact Page FAQ Accordion ────────────────────────────────────────
        document.querySelectorAll('.contact-faq-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var item = btn.closest('.contact-faq-item');
                if (!item) return;
                var chevron = btn.querySelector('.contact-faq-chevron');
                var answer = item.querySelector('.contact-faq-answer');
                var isOpen = answer && answer.style.display !== 'none' && item.classList.contains('active');

                // Close all in list
                document.querySelectorAll('.contact-faq-item').forEach(function (other) {
                    other.classList.remove('active');
                    var ans = other.querySelector('.contact-faq-answer');
                    if (ans) ans.style.display = 'none';
                    var ch = other.querySelector('.contact-faq-chevron');
                    if (ch) ch.classList.remove('open');
                });

                if (!isOpen && answer) {
                    item.classList.add('active');
                    answer.style.display = 'block';
                    if (chevron) chevron.classList.add('open');
                }
            });
        });

        // ── Pricing Section Tabs & Billing Toggle ─────────────────────────────
        var tabRestaurants = document.getElementById('pricing-tab-restaurants');
        var tabOther = document.getElementById('pricing-tab-other');
        var gridRestaurants = document.getElementById('pricingGridRestaurants');
        var gridOther = document.getElementById('pricingGridOther');
        var bestForRestaurants = document.getElementById('bestForRestaurants');
        var bestForOther = document.getElementById('bestForOther');

        var btnMonthly = document.getElementById('billingMonthlyBtn');
        var btnYearly = document.getElementById('billingYearlyBtn');

        if (tabRestaurants && tabOther) {
            tabRestaurants.addEventListener('click', function () {
                tabRestaurants.classList.add('active');
                tabOther.classList.remove('active');
                if (gridRestaurants) gridRestaurants.style.display = '';
                if (gridOther) gridOther.style.display = 'none';
                if (bestForRestaurants) bestForRestaurants.style.display = '';
                if (bestForOther) bestForOther.style.display = 'none';
            });

            tabOther.addEventListener('click', function () {
                tabOther.classList.add('active');
                tabRestaurants.classList.remove('active');
                if (gridRestaurants) gridRestaurants.style.display = 'none';
                if (gridOther) gridOther.style.display = '';
                if (bestForRestaurants) bestForRestaurants.style.display = 'none';
                if (bestForOther) bestForOther.style.display = '';
            });
        }

        if (btnMonthly && btnYearly) {
            btnMonthly.addEventListener('click', function () {
                btnMonthly.classList.add('active');
                btnYearly.classList.remove('active');
                document.querySelectorAll('.pricing-val-monthly').forEach(function (el) {
                    el.style.display = '';
                });
                document.querySelectorAll('.pricing-val-yearly').forEach(function (el) {
                    el.style.display = 'none';
                });
            });

            btnYearly.addEventListener('click', function () {
                btnYearly.classList.add('active');
                btnMonthly.classList.remove('active');
                document.querySelectorAll('.pricing-val-monthly').forEach(function (el) {
                    el.style.display = 'none';
                });
                document.querySelectorAll('.pricing-val-yearly').forEach(function (el) {
                    el.style.display = '';
                });
            });
        }

        // ── About Page Tabs ───────────────────────────────────────────────────
        document.querySelectorAll('.about-tab-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var targetId = btn.getAttribute('data-tab');
                document.querySelectorAll('.about-tab-btn').forEach(function (b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');

                document.querySelectorAll('.about-tab-panel').forEach(function (panel) {
                    if (panel.id === 'tab-panel-' + targetId) {
                        panel.style.display = 'grid';
                    } else {
                        panel.style.display = 'none';
                    }
                });
                if (window.lucide) lucide.createIcons();
            });
        });

        // ── Contact Console Interactive Topics & Pre-filled Messages ─────────
        var topicButtons = document.querySelectorAll('.contact-topic-pill');
        var previewMsgEl = document.getElementById('contactPreviewMsg');
        var previewWaBtn = document.getElementById('contactPreviewWaBtn');
        var cardWaBtn = document.getElementById('contactCardWaBtn');
        var cardEmailBtn = document.getElementById('contactCardEmailBtn');
        var sourceUrlEl = document.getElementById('contactSourceUrl');

        var topicsData = {
            crm: {
                message: 'I am interested in Zrott CRM (QR menu, KDS ordering & table management). Could you share details and a demo?',
                emailSubject: 'Inquiry: Zrott CRM (Restaurant & Ordering)'
            },
            bio: {
                message: 'I am interested in Zrott Bio (link in bio, custom branding & lead capture). Could you share details?',
                emailSubject: 'Inquiry: Zrott Bio (Link in Bio)'
            },
            website: {
                message: 'I am interested in Zrott Website builder (subdomains, Google My Business & custom domain). Could you help me get started?',
                emailSubject: 'Inquiry: Zrott Website Builder'
            },
            general: {
                message: 'I have a question regarding Zrott products, pricing, or partnership opportunities. Could someone help me?',
                emailSubject: 'General Inquiry & Partnership - Zrott'
            }
        };

        var rawPhone = '919904578948';
        var rawEmail = 'hi@zrott.com';

        function updateContactMessage(topicKey) {
            var data = topicsData[topicKey] || topicsData.crm;
            var srcUrl = sourceUrlEl ? sourceUrlEl.textContent.trim() : '';
            var fullMsg = srcUrl ? ('Hi, I am come from ' + srcUrl + ' page. ' + data.message) : ('Hi Zrott Team! ' + data.message);
            var fullSubject = srcUrl ? (data.emailSubject + ' (via ' + srcUrl + ')') : data.emailSubject;

            if (previewMsgEl) {
                previewMsgEl.textContent = '"' + fullMsg + '"';
            }

            var waLink = 'https://wa.me/' + rawPhone + '?text=' + encodeURIComponent(fullMsg);
            var mailLink = 'mailto:' + rawEmail + '?subject=' + encodeURIComponent(fullSubject) + '&body=' + encodeURIComponent(fullMsg);

            if (previewWaBtn) previewWaBtn.href = waLink;
            if (cardWaBtn) cardWaBtn.href = waLink;
            if (cardEmailBtn) cardEmailBtn.href = mailLink;
        }

        topicButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                topicButtons.forEach(function (b) { b.classList.remove('active'); });
                btn.classList.add('active');
                var topic = btn.getAttribute('data-topic') || 'crm';
                updateContactMessage(topic);
            });
        });

        // Copy button handling on Contact page
        document.querySelectorAll('.contact-icon-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var textToCopy = btn.getAttribute('data-copy') || '';
                if (!textToCopy) return;

                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(textToCopy).then(function () {
                        btn.classList.add('copied');
                        setTimeout(function () { btn.classList.remove('copied'); }, 2200);
                    });
                } else {
                    // Fallback
                    var ta = document.createElement('textarea');
                    ta.value = textToCopy;
                    document.body.appendChild(ta);
                    ta.select();
                    document.execCommand('copy');
                    document.body.removeChild(ta);
                    btn.classList.add('copied');
                    setTimeout(function () { btn.classList.remove('copied'); }, 2200);
                }
            });
        });

        // Contact QR Code Toggle
        var qrToggleBtn = document.getElementById('contactQrToggleBtn');
        var qrBox = document.getElementById('contactQrBox');
        if (qrToggleBtn && qrBox) {
            qrToggleBtn.addEventListener('click', function () {
                var isVisible = qrBox.style.display !== 'none';
                qrBox.style.display = isVisible ? 'none' : 'block';
                var span = qrToggleBtn.querySelector('span');
                if (span) {
                    span.textContent = isVisible ? 'Scan QR code with phone camera' : 'Hide QR Code';
                }
            });
        }

        // Live Clock on Contact page
        var liveClock = document.getElementById('liveClock');
        var officeStatus = document.getElementById('officeStatus');
        if (liveClock) {
            var updateLiveClock = function () {
                try {
                    var now = new Date();
                    var timeStr = new Intl.DateTimeFormat('en-IN', {
                        timeZone: 'Asia/Kolkata',
                        hour: 'numeric',
                        minute: '2-digit',
                        second: '2-digit',
                        hour12: true
                    }).format(now);
                    liveClock.textContent = timeStr + ' IST';

                    var hourFormatter = new Intl.DateTimeFormat('en-IN', {
                        timeZone: 'Asia/Kolkata',
                        hour: 'numeric',
                        hour12: false
                    });
                    var hour = parseInt(hourFormatter.format(now), 10);
                    if (officeStatus) {
                        if (hour >= 8 && hour < 23) {
                            officeStatus.textContent = 'Team is Live & Accepting Inquiries';
                        } else {
                            officeStatus.textContent = 'Offline for the night (Leave WhatsApp message for priority reply)';
                        }
                    }
                } catch (e) {
                    liveClock.textContent = 'Active IST';
                }
            };
            updateLiveClock();
            setInterval(updateLiveClock, 1000);
        }

    });
})();
