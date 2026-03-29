<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="พี่หญิง ล้อมรั้วทั่วไทย บริการรับเหมาทำรั้วครบวงจร รั้วลวดหนาม รั้วเมทัลชีท รั้วคาวบอย กำแพงกั้นดิน ติดตั้งประตูบานเลื่อน-บานสวิง ราคายุติธรรม" />
  <meta name="keywords" content="รั้วลวดหนาม,รั้วเมทัลชีท,รั้วคาวบอย,กำแพงกั้นดิน,ติดตั้งประตู,บานเลื่อน,พี่หญิงล้อมรั้ว" />
  <meta property="og:title" content="<?= htmlspecialchars($currentTitle) ?>" />
  <meta property="og:description" content="บริการรับเหมาทำรั้วครบวงจร งานคุณภาพ ราคายุติธรรม ประเมินหน้างานฟรี" />
  <meta property="og:type" content="website" />
  <title><?= htmlspecialchars($currentTitle) ?></title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            orange: {
              500: '#f97316',
              600: '#ea6c0a',
            }
          },
          fontFamily: {
            sarabun: ['Sarabun', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Google Fonts: Sarabun (Thai) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <style>
    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Sarabun', sans-serif;
      background-color: #111111;
      color: #f5f5f5;
    }

    /* Fade-in on scroll */
    .fade-in {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity 0.65s ease, transform 0.65s ease;
    }
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Navbar blur on scroll */
    .navbar-scrolled {
      background-color: rgba(10, 10, 10, 0.95) !important;
      backdrop-filter: blur(12px);
      box-shadow: 0 2px 20px rgba(0,0,0,0.6);
    }

    /* Mobile menu */
    #mobile-menu {
      display: none;
    }
    #mobile-menu.open {
      display: block;
    }

    /* Orange underline accent */
    .section-title::after {
      content: '';
      display: block;
      width: 56px;
      height: 4px;
      background: #f97316;
      margin-top: 12px;
    }
    .section-title.center::after {
      margin-left: auto;
      margin-right: auto;
    }

    /* Card hover glow */
    .service-card:hover {
      box-shadow: 0 0 0 1px #f97316, 0 8px 32px rgba(249,115,22,0.15);
      transform: translateY(-4px);
    }
    .service-card {
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    /* Lightbox */
    #lightbox {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.92);
      z-index: 9999;
      align-items: center;
      justify-content: center;
    }
    #lightbox.open {
      display: flex;
    }
    #lightbox img {
      max-width: 90vw;
      max-height: 85vh;
      object-fit: contain;
      border: 2px solid #f97316;
    }

    /* Gallery image hover */
    .gallery-item {
      cursor: pointer;
      overflow: hidden;
      position: relative;
    }
    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }
    .gallery-overlay {
      position: absolute;
      inset: 0;
      background: rgba(249,115,22,0.35);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .gallery-item img {
      transition: transform 0.4s ease;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .gallery-item:hover img {
      transform: scale(1.06);
    }

    /* Stagger delays */
    .delay-100 { transition-delay: 0.1s; }
    .delay-200 { transition-delay: 0.2s; }
    .delay-300 { transition-delay: 0.3s; }
    .delay-400 { transition-delay: 0.4s; }
  </style>
</head>
<body class="min-h-screen">

<!-- ========== NAVBAR ========== -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" style="background-color: transparent;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-20">

      <!-- Logo -->
      <a href="/" class="flex items-center gap-2 group">
        <div class="w-9 h-9 bg-orange-500 flex items-center justify-center flex-shrink-0">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
            <rect x="2" y="3" width="4" height="18" rx="1"/>
            <rect x="10" y="3" width="4" height="18" rx="1"/>
            <rect x="18" y="3" width="4" height="18" rx="1"/>
            <line x1="2" y1="9" x2="22" y2="9"/>
            <line x1="2" y1="15" x2="22" y2="15"/>
          </svg>
        </div>
        <div class="leading-tight">
          <div class="text-orange-500 font-black text-base tracking-wide leading-none">พี่หญิง</div>
          <div class="text-white font-bold text-xs tracking-widest">ล้อมรั้วทั่วไทย</div>
        </div>
      </a>

      <!-- Desktop Nav -->
      <div class="hidden md:flex items-center gap-8">
        <?php
        $navLinks = [
            '/'        => 'หน้าแรก',
            '/about'   => 'เกี่ยวกับเรา',
            '/gallery' => 'ผลงาน',
            '/contact' => 'ติดต่อเรา',
        ];
        foreach ($navLinks as $href => $label):
            $isActive = ($href === '/' && $currentPage === 'home')
                     || ($href !== '/' && '/' . $currentPage === $href);
        ?>
          <a href="<?= $href ?>"
             class="text-sm font-semibold tracking-wide transition-colors duration-200 pb-1
                    <?= $isActive ? 'text-orange-500 border-b-2 border-orange-500' : 'text-gray-300 hover:text-orange-400' ?>">
            <?= $label ?>
          </a>
        <?php endforeach; ?>
        <a href="tel:0890577047"
           class="ml-2 bg-orange-500 hover:bg-orange-600 text-white text-sm font-bold px-5 py-2.5 transition-colors duration-200 tracking-wide flex items-center gap-1.5">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          089-057-7047
        </a>
      </div>

      <!-- Mobile hamburger -->
      <button id="hamburger" class="md:hidden text-white p-2 focus:outline-none" aria-label="เปิดเมนู">
        <svg id="icon-open" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
          <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
        </svg>
        <svg id="icon-close" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="display:none;">
          <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>

    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden" style="background-color: rgba(10,10,10,0.98);">
    <div class="px-4 pt-2 pb-6 flex flex-col gap-1 border-t border-white/10">
      <?php foreach ($navLinks as $href => $label):
          $isActive = ($href === '/' && $currentPage === 'home')
                   || ($href !== '/' && '/' . $currentPage === $href);
      ?>
        <a href="<?= $href ?>"
           class="block py-3 px-3 text-base font-semibold border-b border-white/5
                  <?= $isActive ? 'text-orange-500' : 'text-gray-200 hover:text-orange-400' ?>">
          <?= $label ?>
        </a>
      <?php endforeach; ?>
      <a href="/contact"
         class="mt-4 block text-center bg-orange-500 hover:bg-orange-600 text-white font-bold px-5 py-3 transition-colors duration-200">
        ขอใบเสนอราคาฟรี
      </a>
    </div>
  </div>
</nav>

<!-- Spacer (only on non-hero pages) -->
<?php if ($currentPage !== 'home'): ?>
<div class="h-16 lg:h-20"></div>
<?php endif; ?>

<!-- Lightbox (global) -->
<div id="lightbox" role="dialog" aria-modal="true" aria-label="ดูภาพขนาดใหญ่">
  <button id="lightbox-close"
    class="absolute top-4 right-4 text-white bg-orange-500 hover:bg-orange-600 w-10 h-10 flex items-center justify-center text-2xl font-bold z-10 transition-colors"
    aria-label="ปิด">&times;</button>
  <img id="lightbox-img" src="" alt="ผลงาน RBS Wall" />
</div>

<script>
  // ── Navbar scroll effect ──────────────────────────────
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
    }
  }, { passive: true });

  // ── Hamburger menu ────────────────────────────────────
  const hamburger   = document.getElementById('hamburger');
  const mobileMenu  = document.getElementById('mobile-menu');
  const iconOpen    = document.getElementById('icon-open');
  const iconClose   = document.getElementById('icon-close');

  hamburger.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.toggle('open');
    iconOpen.style.display  = isOpen ? 'none'  : 'block';
    iconClose.style.display = isOpen ? 'block' : 'none';
  });

  // Close menu on link click
  mobileMenu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      mobileMenu.classList.remove('open');
      iconOpen.style.display  = 'block';
      iconClose.style.display = 'none';
    });
  });

  // ── Fade-in on scroll ─────────────────────────────────
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  // Observe after DOM ready
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
  });

  // ── Lightbox ──────────────────────────────────────────
  const lightbox      = document.getElementById('lightbox');
  const lightboxImg   = document.getElementById('lightbox-img');
  const lightboxClose = document.getElementById('lightbox-close');

  function openLightbox(src, alt) {
    lightboxImg.src = src;
    lightboxImg.alt = alt || 'ผลงาน RBS Wall';
    lightbox.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
    lightboxImg.src = '';
  }

  lightboxClose.addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', e => {
    if (e.target === lightbox) closeLightbox();
  });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeLightbox();
  });
</script>
