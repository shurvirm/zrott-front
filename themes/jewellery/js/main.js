/* ═══════════════════════════════════════════════════
   AABHAR FINE JEWELLERY — JavaScript
   Scrollspy, Reveal Animations, Mobile Menu, Favourites Modal, Video Modal
   ═══════════════════════════════════════════════════ */

(function () {
  'use strict';

  /* ── DOM Ready ── */
  document.addEventListener('DOMContentLoaded', init);

  function init() {
    initHeaderScroll();
    initMobileMenu();
    initScrollReveal();
    initScrollSpy();
    initHeartToggles();
    initFavouritesActions();
    initReelModal();
    initModalHandlers();
    initFilterTabs();
    initNewsletter();
    initSmoothScroll();
    initParallax();
    initStaggerChildren();
    initFaqAccordion();
  }

  /* ────────────────────────────────────
     1. Header Scroll Effect
     ──────────────────────────────────── */
  function initHeaderScroll() {
    const header = document.querySelector('.jw-header');
    if (!header) return;

    let ticking = false;
    window.addEventListener('scroll', function () {
      if (!ticking) {
        requestAnimationFrame(function () {
          header.classList.toggle('scrolled', window.scrollY > 60);
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }

  /* ────────────────────────────────────
     2. Mobile Menu
     ──────────────────────────────────── */
  function initMobileMenu() {
    const toggle = document.querySelector('.jw-menu-toggle');
    const mobileNav = document.querySelector('.jw-mobile-nav');
    const overlay = document.querySelector('.jw-mobile-overlay');
    const closeMenuBtn = document.querySelector('.close-menu');
    if (!toggle || !mobileNav) return;

    function openMenu() {
      toggle.classList.add('active');
      mobileNav.classList.add('open');
      if (overlay) { overlay.style.display = 'block'; requestAnimationFrame(() => overlay.classList.add('show')); }
      // if (closeMenuBtn) { closeMenuBtn.style.display = 'block'; }
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      toggle.classList.remove('active');
      mobileNav.classList.remove('open');
      if (overlay) { overlay.classList.remove('show'); setTimeout(() => overlay.style.display = 'none', 300); }
      // if (closeMenuBtn) { closeMenuBtn.style.display = 'none'; }
      document.body.style.overflow = '';
    }

    toggle.addEventListener('click', function () {
      mobileNav.classList.contains('open') ? closeMenu() : openMenu();
    });

    if (overlay) overlay.addEventListener('click', closeMenu);
    if (closeMenuBtn) closeMenuBtn.addEventListener('click', closeMenu);

    // Close on nav link click
    mobileNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', closeMenu);
    });
  }

  /* ────────────────────────────────────
     3. Scroll Reveal (IntersectionObserver)
     ──────────────────────────────────── */
  function initScrollReveal() {
    const revealEls = document.querySelectorAll('.jw-reveal, .jw-reveal-left, .jw-reveal-right, .jw-reveal-bottom, .jw-reveal-scale');
    if (!revealEls.length) return;

    // Check for reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      revealEls.forEach(function (el) { el.classList.add('revealed'); });
      return;
    }

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(function (el) { observer.observe(el); });
  }

  /* ────────────────────────────────────
     4. Scrollspy for Navigation
     ──────────────────────────────────── */
  function initScrollSpy() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.jw-nav a[href^="#"]');
    if (!sections.length || !navLinks.length) return;

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute('id');
          navLinks.forEach(function (link) {
            link.classList.remove('spy-active');
            if (link.getAttribute('href') === '#' + id) {
              link.classList.add('spy-active');
            }
          });
        }
      });
    }, { threshold: 0.2, rootMargin: '-80px 0px -50% 0px' });

    sections.forEach(function (section) { observer.observe(section); });
  }

  /* ────────────────────────────────────
     5. Favourites & Heart Toggle
     ──────────────────────────────────── */
  const FAV_STORAGE_KEY = 'aabhar_favourites';

  function getFavourites() {
    try {
      const data = localStorage.getItem(FAV_STORAGE_KEY);
      return data ? JSON.parse(data) : [];
    } catch (e) {
      return [];
    }
  }

  function saveFavourites(items) {
    try {
      localStorage.setItem(FAV_STORAGE_KEY, JSON.stringify(items));
    } catch (e) { }
    updateHeaderBadge();
  }

  function updateHeaderBadge() {
    const items = getFavourites();
    const count = items.length;
    const badge = document.getElementById('jw-fav-header-badge');
    const headerBtn = document.getElementById('jw-fav-trigger');
    if (badge) {
      badge.textContent = count;
      badge.style.display = count > 0 ? 'inline-flex' : 'none';
    }
    if (headerBtn) {
      headerBtn.classList.toggle('active', count > 0);
    }
  }

  function syncCardHeartStates() {
    const items = getFavourites();
    const favIds = new Set(items.map(function (it) { return it.id || it.name; }));
    document.querySelectorAll('.jw-product-card').forEach(function (card) {
      const cardId = card.dataset.id || card.dataset.name;
      const heart = card.querySelector('.jw-heart');
      if (heart && cardId) {
        heart.classList.toggle('active', favIds.has(cardId));
      }
    });
  }

  function initHeartToggles() {
    // Initial sync
    updateHeaderBadge();
    syncCardHeartStates();

    // Delegate heart clicks
    document.addEventListener('click', function (e) {
      const heart = e.target.closest('.jw-heart');
      if (!heart) return;

      // Header favourites button -> Open Modal
      if (heart.id === 'jw-fav-trigger') {
        e.preventDefault();
        openModal('jw-fav-modal');
        renderFavouritesModal();
        return;
      }

      // Inside product card
      const card = heart.closest('.jw-product-card');
      if (!card) return;

      e.preventDefault();
      e.stopPropagation();

      const id = card.dataset.id || card.dataset.name;
      const name = card.dataset.name || (card.querySelector('.jw-product-name') ? card.querySelector('.jw-product-name').textContent.trim() : 'Jewellery Item');
      const price = card.dataset.price || (card.querySelector('.jw-product-price') ? card.querySelector('.jw-product-price').textContent.trim() : '');
      const img = card.dataset.img || (card.querySelector('img') ? card.querySelector('img').getAttribute('src') : '');

      let favs = getFavourites();
      const existsIndex = favs.findIndex(function (it) { return (it.id || it.name) === id; });

      if (existsIndex > -1) {
        favs.splice(existsIndex, 1);
        heart.classList.remove('active');
      } else {
        favs.push({ id: id, name: name, price: price, img: img });
        heart.classList.add('active');
        heart.style.transform = 'scale(1.3)';
        setTimeout(function () { heart.style.transform = ''; }, 200);
      }

      saveFavourites(favs);

      // Re-render if modal currently open
      const modal = document.getElementById('jw-fav-modal');
      if (modal && modal.classList.contains('jw-modal-open')) {
        renderFavouritesModal();
      }
    });
  }

  /* ────────────────────────────────────
     6. Favourites Modal Rendering
     ──────────────────────────────────── */
  function renderFavouritesModal() {
    const listEl = document.getElementById('jw-fav-list');
    const emptyEl = document.getElementById('jw-fav-empty');
    const footerEl = document.getElementById('jw-fav-footer');
    const badgeEl = document.getElementById('jw-fav-count-badge');
    const waBtn = document.getElementById('jw-fav-wa-btn');
    if (!listEl || !emptyEl) return;

    const items = getFavourites();
    if (badgeEl) {
      badgeEl.textContent = items.length === 1 ? '1 item' : items.length + ' items';
    }

    if (items.length === 0) {
      listEl.innerHTML = '';
      listEl.style.display = 'none';
      emptyEl.style.display = 'flex';
      if (footerEl) footerEl.style.display = 'none';
      return;
    }

    emptyEl.style.display = 'none';
    listEl.style.display = 'grid';
    if (footerEl) footerEl.style.display = 'flex';

    let html = '';
    items.forEach(function (it) {
      html += '<div class="jw-fav-item" data-id="' + escapeHtml(it.id || it.name) + '">';
      html += '  <div class="jw-fav-item-thumb"><img src="' + escapeHtml(it.img || '') + '" alt="' + escapeHtml(it.name || 'Jewellery') + '"></div>';
      html += '  <div class="jw-fav-item-info">';
      html += '    <h4>' + escapeHtml(it.name || '') + '</h4>';
      html += '    <span class="jw-fav-item-price">' + escapeHtml(it.price || '') + '</span>';
      html += '  </div>';
      html += '  <div class="jw-fav-item-actions">';
      html += '    <a href="https://wa.me/911234567890?text=' + encodeURIComponent('Hello Aabhar, I am interested in ' + (it.name || 'this design') + ' (' + (it.price || '') + ')') + '" target="_blank" rel="noopener noreferrer" class="jw-fav-item-enquire" title="Enquire on WhatsApp">';
      html += '      <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>';
      html += '      <span>Enquire</span>';
      html += '    </a>';
      html += '    <button type="button" class="jw-fav-remove-btn" data-remove-fav="' + escapeHtml(it.id || it.name) + '" aria-label="Remove ' + escapeHtml(it.name) + ' from favourites" title="Remove">';
      html += '      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>';
      html += '    </button>';
      html += '  </div>';
      html += '</div>';
    });
    listEl.innerHTML = html;

    // Update WhatsApp all link
    if (waBtn) {
      const names = items.map(function (it) { return it.name + ' (' + (it.price || '') + ')'; }).join(', ');
      waBtn.href = 'https://wa.me/911234567890?text=' + encodeURIComponent('Hello Aabhar Fine Jewellery, I am interested in these designs from my favourites list: ' + names);
    }

    // Attach remove handlers
    listEl.querySelectorAll('.jw-fav-remove-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        const idToRemove = this.getAttribute('data-remove-fav');
        let curFavs = getFavourites();
        curFavs = curFavs.filter(function (it) { return (it.id || it.name) !== idToRemove; });
        saveFavourites(curFavs);
        syncCardHeartStates();
        renderFavouritesModal();
      });
    });
  }

  function initFavouritesActions() {
    const clearBtn = document.getElementById('jw-fav-clear-btn');
    if (clearBtn) {
      clearBtn.addEventListener('click', function () {
        saveFavourites([]);
        syncCardHeartStates();
        renderFavouritesModal();
      });
    }
  }

  function escapeHtml(str) {
    if (!str) return '';
    return String(str).replace(/[&<>"']/g, function (m) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[m];
    });
  }

  /* ────────────────────────────────────
     7. Reels Video Modal
     ──────────────────────────────────── */
  function initReelModal() {
    const reelCards = document.querySelectorAll('.jw-reel-card');
    const modal = document.getElementById('jw-reel-modal');
    const video = document.getElementById('jw-reel-video');
    const captionEl = document.getElementById('jw-reel-title');
    if (!reelCards.length || !modal || !video) return;

    reelCards.forEach(function (card) {
      function handleOpenReel() {
        const videoSrc = card.dataset.video || 'img/reel.mp4';
        const caption = card.dataset.caption || (card.querySelector('.jw-reel-caption') ? card.querySelector('.jw-reel-caption').textContent.trim() : 'Jewellery in Motion');

        video.src = videoSrc;
        if (captionEl) captionEl.textContent = caption;

        openModal('jw-reel-modal');
        const playPromise = video.play();
        if (playPromise !== undefined) {
          playPromise.catch(function () {
            // Browser autoplay restrictions
          });
        }
      }

      card.addEventListener('click', handleOpenReel);
      card.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          handleOpenReel();
        }
      });
    });
  }

  /* ────────────────────────────────────
     8. Modal Helper (Open, Close, Escape)
     ──────────────────────────────────── */
  function openModal(id) {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.add('jw-modal-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeModal(id) {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.remove('jw-modal-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';

    // If closing video modal, stop video
    if (id === 'jw-reel-modal') {
      const video = document.getElementById('jw-reel-video');
      if (video) {
        video.pause();
        video.currentTime = 0;
      }
    }
  }

  function initModalHandlers() {
    document.addEventListener('click', function (e) {
      const closeTrigger = e.target.closest('[data-close-modal]');
      if (closeTrigger) {
        e.preventDefault();
        const targetId = closeTrigger.getAttribute('data-close-modal');
        closeModal(targetId);
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        const openModals = document.querySelectorAll('.jw-modal.jw-modal-open');
        openModals.forEach(function (m) {
          closeModal(m.id);
        });
      }
    });
  }

  /* ────────────────────────────────────
     9. Product Filter Tabs
     ──────────────────────────────────── */
  function initFilterTabs() {
    const filterBtns = document.querySelectorAll('.jw-filter-btn');
    if (!filterBtns.length) return;

    filterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        filterBtns.forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');

        const cards = document.querySelectorAll('.jw-product-card');
        cards.forEach(function (card, i) {
          card.style.opacity = '0';
          card.style.transform = 'translateY(16px)';
          setTimeout(function () {
            card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          }, i * 80);
        });
      });
    });
  }

  /* ────────────────────────────────────
     10. Newsletter Form
     ──────────────────────────────────── */
  function initNewsletter() {
    const form = document.getElementById('jw-newsletter-form');
    if (!form) return;

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const input = form.querySelector('input[type="email"]');
      if (!input || !input.value.trim()) return;

      const successEl = document.querySelector('.jw-newsletter-success');
      if (successEl) {
        form.style.display = 'none';
        successEl.classList.add('show');
      }
    });
  }

  /* ────────────────────────────────────
     11. Smooth Scroll for Anchor Links
     ──────────────────────────────────── */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#' || href === '') return;
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  }

  /* ────────────────────────────────────
     12. Subtle Parallax on Hero
     ──────────────────────────────────── */
  function initParallax() {
    const heroBg = document.querySelector('.jw-hero-bg img');
    if (!heroBg || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    let ticking = false;
    window.addEventListener('scroll', function () {
      if (!ticking) {
        requestAnimationFrame(function () {
          const scroll = window.scrollY;
          if (scroll < window.innerHeight) {
            heroBg.style.transform = 'translateY(' + (scroll * 0.18) + 'px) scale(1.05)';
          }
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }

  /* ────────────────────────────────────
     13. Stagger Children Animation
     ──────────────────────────────────── */
  function initStaggerChildren() {
    const staggerGroups = document.querySelectorAll('.jw-stagger');
    staggerGroups.forEach(function (group) {
      Array.from(group.children).forEach(function (child, i) {
        child.style.setProperty('--i', i);
      });
    });
  }

  /* ────────────────────────────────────
     14. FAQ Accordion (for Contact & About)
     ──────────────────────────────────── */
  function initFaqAccordion() {
    document.addEventListener('click', function (e) {
      const header = e.target.closest('.jw-faq-header');
      if (!header) return;
      const item = header.closest('.jw-faq-item');
      if (!item) return;

      const isOpen = item.classList.contains('active');
      // Close other items in the same FAQ group
      const parent = item.parentElement;
      if (parent) {
        parent.querySelectorAll('.jw-faq-item').forEach(function (other) {
          other.classList.remove('active');
          const panel = other.querySelector('.jw-faq-body');
          if (panel) panel.style.maxHeight = null;
        });
      }

      if (!isOpen) {
        item.classList.add('active');
        const body = item.querySelector('.jw-faq-body');
        if (body) {
          body.style.maxHeight = body.scrollHeight + 'px';
        }
      }
    });
  }

})();
