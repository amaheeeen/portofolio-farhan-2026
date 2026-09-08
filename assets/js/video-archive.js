/**
 * BRUTALIST MEDIA RACK / VIDEO ARCHIVE CONTROLLER
 * Handles real thumbnail carousel with 9 video reels across TikTok & Instagram.
 * Features:
 * - Dataset array with 9 items (CITEUP TikTok, CITEUP IG, Farhan Surya Indah IG)
 * - Dynamic active index counter: SLIDE [01 / 09]
 * - Mechanical Prev/Next controls with border & shadow states
 * - Touch swipe gestures & mouse drag-to-scroll
 * - 9-segment progress indicator sync
 */

// Dataset Array for Media Archive
const VIDEO_ARCHIVE_DATA = [
  {
    id: 'TRK_TK01',
    platform: 'TIKTOK',
    account: '@citeup26',
    title: 'CITEUP 2026 Campaign Highlight 01',
    url: 'https://www.tiktok.com/@citeup26/video/7536604809533656325',
    thumbnail: './assets/media/thumb-citeup-tk-01.jpg',
    tag: 'CREATIVE DIRECTION'
  },
  {
    id: 'TRK_TK02',
    platform: 'TIKTOK',
    account: '@citeup26',
    title: 'CITEUP 2026 Event Highlight 02',
    url: 'https://www.tiktok.com/@citeup26/video/7515827188013255942',
    thumbnail: './assets/media/thumb-citeup-tk-02.jpg',
    tag: 'EVENT HIGHLIGHT'
  },
  {
    id: 'TRK_TK03',
    platform: 'TIKTOK',
    account: '@citeup26',
    title: 'CITEUP 2026 Motion Content 03',
    url: 'https://www.tiktok.com/@citeup26/video/7504644403638635782',
    thumbnail: './assets/media/thumb-citeup-tk-03.jpg',
    tag: 'MOTION TEASER'
  },
  {
    id: 'TRK_IG01',
    platform: 'INSTAGRAM',
    account: '@citeup2026',
    title: 'CITEUP Visual Campaign Reel 01',
    url: 'https://www.instagram.com/reel/DRYcERekgb8/',
    thumbnail: './assets/media/thumb-citeup-ig-01.jpg',
    tag: 'SOCIAL REEL'
  },
  {
    id: 'TRK_IG02',
    platform: 'INSTAGRAM',
    account: '@citeup2026',
    title: 'CITEUP Visual Campaign Reel 02',
    url: 'https://www.instagram.com/reel/DNuQyVMXhKl/',
    thumbnail: './assets/media/thumb-citeup-ig-02.jpg',
    tag: 'VISUAL ASSET'
  },
  {
    id: 'TRK_IG03',
    platform: 'INSTAGRAM',
    account: '@citeup2026',
    title: 'CITEUP Visual Campaign Reel 03',
    url: 'https://www.instagram.com/reel/DNPXO6ESs6K/',
    thumbnail: './assets/media/thumb-citeup-ig-03.jpg',
    tag: 'BRAND AWARENESS'
  },
  {
    id: 'TRK_FSI01',
    platform: 'INSTAGRAM',
    account: '@farhansuryaindah',
    title: 'Farhan Surya Indah Promotional Showcase 01',
    url: 'https://www.instagram.com/reel/C-HgXBTNMjb/',
    thumbnail: './assets/media/thumb-fsi-01.jpg',
    tag: 'COMMERCIAL REEL'
  },
  {
    id: 'TRK_FSI02',
    platform: 'INSTAGRAM',
    account: '@farhansuryaindah',
    title: 'Farhan Surya Indah Highlight 02',
    url: 'https://www.instagram.com/reel/C-KKzeJtXSN/',
    thumbnail: './assets/media/thumb-fsi-02.jpg',
    tag: 'CONTENT PRODUCTION'
  },
  {
    id: 'TRK_FSI03',
    platform: 'INSTAGRAM',
    account: '@farhansuryaindah',
    title: 'Farhan Surya Indah Feature 03',
    url: 'https://www.instagram.com/reel/DEb1-4eN46Z/',
    thumbnail: './assets/media/thumb-fsi-03.jpg',
    tag: 'PROMO CAMPAIGN'
  }
];

(function () {
  'use strict';

  function initVideoArchive() {
    const track = document.getElementById('tape-carousel-track');
    const prevBtn = document.getElementById('tape-prev-btn');
    const nextBtn = document.getElementById('tape-next-btn');
    const counterDisplay = document.getElementById('tape-counter-display');
    const progressSegments = document.querySelectorAll('.tape-progress-segment');

    if (!track) return;

    const cards = track.querySelectorAll('.tape-card');
    const totalCards = cards.length;
    if (totalCards === 0) return;

    let isDown = false;
    let startX = 0;
    let scrollLeftStart = 0;
    let hasDragged = false;
    let isClickPrevented = false;

    // Get current item step width including gap
    function getStepWidth() {
      if (cards.length === 0) return 300;
      const cardWidth = cards[0].offsetWidth;
      const style = window.getComputedStyle(track);
      const gap = parseFloat(style.columnGap || style.gap || '24');
      return cardWidth + gap;
    }

    // Update active counter and progress indicator
    function updateState() {
      const step = getStepWidth();
      const currentScroll = track.scrollLeft;
      const rawIndex = Math.round(currentScroll / step);
      const activeIndex = Math.min(Math.max(rawIndex, 0), totalCards - 1);

      // Update formatted counter: SLIDE [01 / 09]
      if (counterDisplay) {
        const currentNum = String(activeIndex + 1).padStart(2, '0');
        const totalNum = String(totalCards).padStart(2, '0');
        counterDisplay.textContent = `SLIDE [${currentNum} / ${totalNum}]`;
      }

      // Update progress segments
      if (progressSegments && progressSegments.length > 0) {
        progressSegments.forEach((seg, idx) => {
          if (idx === activeIndex) {
            seg.classList.remove('bg-zinc-300', 'dark:bg-zinc-700');
            seg.classList.add('bg-accent-yellow', 'dark:bg-accent-green', 'scale-y-125');
          } else {
            seg.classList.remove('bg-accent-yellow', 'dark:bg-accent-green', 'scale-y-125');
            seg.classList.add('bg-zinc-300', 'dark:bg-zinc-700');
          }
        });
      }

      // Update button visual disabled states
      if (prevBtn) {
        if (currentScroll <= 5) {
          prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
        } else {
          prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }
      }

      if (nextBtn) {
        const maxScroll = track.scrollWidth - track.clientWidth - 5;
        if (currentScroll >= maxScroll) {
          nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
        } else {
          nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }
      }
    }

    // Scroll by card step
    function scrollDirection(direction) {
      const step = getStepWidth();
      track.scrollBy({
        left: direction * step,
        behavior: 'smooth'
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        scrollDirection(-1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        scrollDirection(1);
      });
    }

    // Scroll listener with throttle via requestAnimationFrame
    let ticking = false;
    track.addEventListener(
      'scroll',
      () => {
        if (!ticking) {
          window.requestAnimationFrame(() => {
            updateState();
            ticking = false;
          });
          ticking = true;
        }
      },
      { passive: true }
    );

    // Keyboard navigation when track is focused
    track.setAttribute('tabindex', '0');
    track.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        e.preventDefault();
        scrollDirection(-1);
      } else if (e.key === 'ArrowRight') {
        e.preventDefault();
        scrollDirection(1);
      }
    });

    // Mouse drag-to-scroll mechanics
    track.addEventListener('mousedown', (e) => {
      if (e.target.closest('button, a')) return;
      isDown = true;
      hasDragged = false;
      isClickPrevented = false;
      startX = e.pageX - track.offsetLeft;
      scrollLeftStart = track.scrollLeft;
      track.classList.add('cursor-grabbing');
      track.classList.remove('cursor-grab');
    });

    window.addEventListener('mouseup', () => {
      if (!isDown) return;
      isDown = false;
      track.classList.remove('cursor-grabbing');
      track.classList.add('cursor-grab');
      setTimeout(() => {
        isClickPrevented = false;
      }, 50);
    });

    track.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      const x = e.pageX - track.offsetLeft;
      const walk = (x - startX) * 1.5;
      if (Math.abs(walk) > 5) {
        hasDragged = true;
        isClickPrevented = true;
      }
      track.scrollLeft = scrollLeftStart - walk;
    });

    // Prevent link click when dragging
    track.addEventListener(
      'click',
      (e) => {
        if (isClickPrevented) {
          e.preventDefault();
          e.stopPropagation();
        }
      },
      true
    );

    // Initial update on page load and window resize
    window.addEventListener('resize', updateState);
    updateState();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initVideoArchive);
  } else {
    initVideoArchive();
  }
})();
