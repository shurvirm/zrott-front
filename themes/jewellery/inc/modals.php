<?php
/**
 * Zrott Jewellery — Reusable Modals
 * Included in inc/footer.php for site-wide availability
 * 1. Favourites / Wishlist Modal
 * 2. Instagram Reel Video Modal
 */
?>

<!-- ═══════════════════════════════════════════════════
     FAVOURITES MODAL
     ═══════════════════════════════════════════════════ -->
<div class="jw-modal" id="jw-fav-modal" aria-hidden="true" role="dialog" aria-labelledby="jw-fav-title">
  <div class="jw-modal-backdrop" data-close-modal="jw-fav-modal"></div>
  <div class="jw-modal-dialog jw-fav-dialog">
    <div class="jw-modal-header">
      <div class="jw-fav-header-left">
        <svg viewBox="0 0 24 24" class="jw-fav-title-icon" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
        </svg>
        <h3 id="jw-fav-title">My Favourites</h3>
        <span class="jw-fav-modal-count" id="jw-fav-count-badge">0 items</span>
      </div>
      <button type="button" class="jw-modal-close" data-close-modal="jw-fav-modal" aria-label="Close favourites">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>

    <div class="jw-modal-body">
      <!-- Items Container (populated by JS) -->
      <div class="jw-fav-list" id="jw-fav-list"></div>

      <!-- Empty State -->
      <div class="jw-fav-empty" id="jw-fav-empty">
        <div class="jw-fav-empty-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
        </div>
        <h4>No Favourites Yet</h4>
        <p>Explore our handcrafted collections and tap the heart icon on designs you adore to save them here.</p>
        <a href="index.php#categories" class="jw-btn jw-btn-gold" data-close-modal="jw-fav-modal">
          Explore Collections
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>
    </div>

    <div class="jw-modal-footer" id="jw-fav-footer" style="display:none;">
      <button type="button" class="jw-btn jw-btn-outline jw-btn-sm" id="jw-fav-clear-btn">Clear All</button>
      <a href="https://wa.me/919904578948?text=Hello%20Zrott%20Jewellery,%20I%20am%20interested%20in%20these%20designs%20from%20my%20favourites%20list" id="jw-fav-wa-btn" target="_blank" rel="noopener noreferrer" class="jw-btn jw-btn-emerald jw-btn-sm">
        Enquire via WhatsApp
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</div>


<!-- ═══════════════════════════════════════════════════
     INSTAGRAM REEL VIDEO MODAL
     ═══════════════════════════════════════════════════ -->
<div class="jw-modal jw-video-modal" id="jw-reel-modal" aria-hidden="true" role="dialog" aria-labelledby="jw-reel-title">
  <div class="jw-modal-backdrop" data-close-modal="jw-reel-modal"></div>
  <div class="jw-modal-dialog jw-video-dialog">
    <button type="button" class="jw-modal-close jw-video-close" data-close-modal="jw-reel-modal" aria-label="Close video">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <div class="jw-video-wrapper">
      <video id="jw-reel-video" playsinline controls loop preload="metadata">
        <source src="" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="jw-video-meta">
      <div class="jw-video-badge">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="none" stroke="currentColor" stroke-width="2"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="currentColor" stroke-width="2"/></svg>
        <span>Instagram Reel</span>
      </div>
      <h4 id="jw-reel-title" class="jw-video-caption">Jewellery in Motion</h4>
    </div>
  </div>
</div>
