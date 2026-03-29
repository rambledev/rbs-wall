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

  <!-- Google Fonts: Sarabun (Thai) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <style>
    /* ============================================================
       THEME VARIABLES
    ============================================================ */
    :root {
      /* Theme 1: Dark Industrial (default) */
      --bg-primary:   #111111;
      --bg-secondary: #161616;
      --bg-card:      #1e1e1e;
      --bg-footer:    #0a0a0a;
      --bg-navbar:    rgba(10,10,10,0.97);
      --bg-mobile:    rgba(10,10,10,0.98);
      --accent:       #f97316;
      --accent-dark:  #ea580c;
      --accent-rgb:   249,115,22;
      --text:         #ffffff;
      --text-muted:   #9ca3af;
      --text-subtle:  #6b7280;
      --border:       rgba(255,255,255,0.05);
      --border-light: rgba(255,255,255,0.1);
      --stripe:       rgba(249,115,22,0.03);
      --glow:         rgba(249,115,22,0.06);
      --overlay:      rgba(0,0,0,0.85);
      --card-shadow:  rgba(249,115,22,0.15);
    }

    /* Theme 2: Light Professional (white + blue) */
    body.theme-2 {
      --bg-primary:   #f1f5f9;
      --bg-secondary: #ffffff;
      --bg-card:      #ffffff;
      --bg-footer:    #1e293b;
      --bg-navbar:    rgba(255,255,255,0.97);
      --bg-mobile:    rgba(248,250,252,0.99);
      --accent:       #2563eb;
      --accent-dark:  #1d4ed8;
      --accent-rgb:   37,99,235;
      --text:         #0f172a;
      --text-muted:   #475569;
      --text-subtle:  #94a3b8;
      --border:       rgba(0,0,0,0.07);
      --border-light: rgba(0,0,0,0.12);
      --stripe:       rgba(37,99,235,0.02);
      --glow:         rgba(37,99,235,0.04);
      --overlay:      rgba(0,0,0,0.7);
      --card-shadow:  rgba(37,99,235,0.12);
    }

    /* Theme 3: Navy Premium (dark navy + gold) */
    body.theme-3 {
      --bg-primary:   #0b1220;
      --bg-secondary: #0f1a2e;
      --bg-card:      #152035;
      --bg-footer:    #060c18;
      --bg-navbar:    rgba(6,12,24,0.97);
      --bg-mobile:    rgba(11,18,32,0.99);
      --accent:       #d97706;
      --accent-dark:  #b45309;
      --accent-rgb:   217,119,6;
      --text:         #f8fafc;
      --text-muted:   #94a3b8;
      --text-subtle:  #64748b;
      --border:       rgba(255,255,255,0.06);
      --border-light: rgba(255,255,255,0.1);
      --stripe:       rgba(217,119,6,0.025);
      --glow:         rgba(217,119,6,0.06);
      --overlay:      rgba(0,0,0,0.88);
      --card-shadow:  rgba(217,119,6,0.14);
    }

    /* ============================================================
       BASE STYLES
    ============================================================ */
    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Sarabun', sans-serif;
      background-color: var(--bg-primary);
      color: var(--text);
      transition: background-color 0.35s ease, color 0.35s ease;
    }

    /* ============================================================
       ACCENT COLOR OVERRIDES (Tailwind orange → CSS var)
    ============================================================ */
    .accent-bg  { background-color: var(--accent) !important; }
    .accent-text { color: var(--accent) !important; }
    .accent-border { border-color: var(--accent) !important; }

    /* All orange-500 Tailwind classes → accent */
    body .bg-orange-500, body [class*="bg-orange-5"] { background-color: var(--accent) !important; }
    body .bg-orange-600, body [class*="bg-orange-6"],
    body .hover\:bg-orange-600:hover             { background-color: var(--accent-dark) !important; }
    body .text-orange-500, body [class*="text-orange-5"] { color: var(--accent) !important; }
    body .text-orange-400, body [class*="text-orange-4"] { color: var(--accent) !important; }
    body .border-orange-500, body [class*="border-orange-5"] { border-color: var(--accent) !important; }
    body .border-t-4.border-orange-500 { border-top-color: var(--accent) !important; }

    /* ============================================================
       CARD BACKGROUNDS
    ============================================================ */
    body .bg-\[#1e1e1e\],
    body .bg-\[#1a1a1a\],
    body .bg-\[#161616\],
    body .bg-\[#181818\],
    body .bg-\[#1c1c1c\],
    body .bg-\[#171717\],
    body .bg-\[#191919\] { background-color: var(--bg-card) !important; }

    /* ============================================================
       TEXT OVERRIDES (for Theme 2 light)
    ============================================================ */
    body.theme-2 .text-white  { color: var(--text) !important; }
    body.theme-2 .text-gray-300 { color: #374151 !important; }
    body.theme-2 .text-gray-400 { color: var(--text-muted) !important; }
    body.theme-2 .text-gray-500 { color: #6b7280 !important; }
    body.theme-2 .text-gray-600 { color: #9ca3af !important; }

    /* ============================================================
       BORDER OVERRIDES (for Theme 2 light)
    ============================================================ */
    body.theme-2 .border-white\/5  { border-color: rgba(0,0,0,0.07) !important; }
    body.theme-2 .border-white\/10 { border-color: rgba(0,0,0,0.12) !important; }
    body.theme-2 .border-white\/20 { border-color: rgba(0,0,0,0.16) !important; }
    body.theme-2 .border-white\/40 { border-color: rgba(0,0,0,0.25) !important; }

    /* Stats row bg for theme 2 */
    body.theme-2 #hero { background-color: #1e293b !important; }

    /* Input fields theme 2 */
    body.theme-2 input,
    body.theme-2 textarea,
    body.theme-2 select {
      color: var(--text) !important;
      background-color: #f8fafc !important;
      border-color: rgba(0,0,0,0.15) !important;
    }
    body.theme-2 input::placeholder,
    body.theme-2 textarea::placeholder { color: #9ca3af !important; }

    /* ============================================================
       COMPONENT STYLES
    ============================================================ */
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

    /* Navbar */
    .navbar-scrolled {
      background-color: var(--bg-navbar) !important;
      backdrop-filter: blur(12px);
      box-shadow: 0 2px 20px rgba(0,0,0,0.4);
    }
    body.theme-2 .navbar-scrolled {
      box-shadow: 0 2px 20px rgba(0,0,0,0.12);
    }

    /* Mobile menu */
    #mobile-menu { display: none; }
    #mobile-menu.open { display: block; }

    /* Section title underline */
    .section-title::after {
      content: '';
      display: block;
      width: 56px;
      height: 4px;
      background: var(--accent);
      margin-top: 12px;
    }
    .section-title.center::after {
      margin-left: auto;
      margin-right: auto;
    }

    /* Service card hover */
    .service-card {
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .service-card:hover {
      box-shadow: 0 0 0 1px var(--accent), 0 8px 32px rgba(var(--accent-rgb),0.15);
      transform: translateY(-4px);
    }
    body.theme-2 .service-card {
      box-shadow: 0 1px 4px rgba(0,0,0,0.08);
    }
    body.theme-2 .service-card:hover {
      box-shadow: 0 0 0 2px var(--accent), 0 8px 32px rgba(var(--accent-rgb),0.12);
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
    #lightbox.open { display: flex; }
    #lightbox img {
      max-width: 90vw;
      max-height: 85vh;
      object-fit: contain;
      border: 2px solid var(--accent);
    }

    /* Gallery hover */
    .gallery-item {
      cursor: pointer;
      overflow: hidden;
      position: relative;
    }
    .gallery-item:hover .gallery-overlay { opacity: 1; }
    .gallery-overlay {
      position: absolute;
      inset: 0;
      background: rgba(var(--accent-rgb),0.35);
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
    .gallery-item:hover img { transform: scale(1.06); }

    /* ============================================================
       THEME SWITCHER BAR
    ============================================================ */
    #theme-bar {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 100;
      height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 12px;
      font-family: 'Sarabun', sans-serif;
      background: rgba(0,0,0,0.88);
      backdrop-filter: blur(8px);
      border-bottom: 1px solid rgba(255,255,255,0.06);
      transition: background 0.3s ease;
    }
    body.theme-2 #theme-bar {
      background: rgba(30,41,59,0.95);
    }
    body.theme-3 #theme-bar {
      background: rgba(6,12,24,0.95);
    }
    #theme-bar .bar-label {
      color: rgba(255,255,255,0.5);
      font-size: 11px;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }
    .theme-dot-btn {
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 3px 10px 3px 6px;
      border-radius: 20px;
      border: 1.5px solid transparent;
      cursor: pointer;
      background: rgba(255,255,255,0.06);
      color: rgba(255,255,255,0.55);
      font-size: 11px;
      font-family: 'Sarabun', sans-serif;
      transition: all 0.2s ease;
      white-space: nowrap;
    }
    .theme-dot-btn:hover {
      background: rgba(255,255,255,0.12);
      color: rgba(255,255,255,0.9);
    }
    .theme-dot-btn.active {
      border-color: rgba(255,255,255,0.4);
      background: rgba(255,255,255,0.12);
      color: #ffffff;
    }
    .theme-dot {
      width: 14px;
      height: 14px;
      border-radius: 50%;
      flex-shrink: 0;
      display: block;
    }
    .theme-divider {
      width: 1px;
      height: 16px;
      background: rgba(255,255,255,0.12);
    }
  </style>
</head>

<!-- Apply saved theme immediately to avoid flash -->
<script>
  (function(){
    var t = localStorage.getItem('rbswall_theme') || '1';
    document.documentElement.setAttribute('data-theme-init', t);
    if (t !== '1') document.write('<style>body{opacity:0;transition:opacity 0.2s}</style>');
  })();
</script>

<body class="min-h-screen theme-1">

<!-- ========== THEME SWITCHER BAR ========== -->
<div id="theme-bar" role="navigation" aria-label="เลือกธีม">
  <span class="bar-label hidden sm:block">ธีม :</span>

  <button class="theme-dot-btn" data-theme="1" onclick="setTheme(1)" title="ธีม 1 – Dark Orange" aria-label="ธีม 1 Dark Industrial">
    <span class="theme-dot" style="background:#f97316;"></span>
    <span>Dark</span>
  </button>

  <span class="theme-divider"></span>

  <button class="theme-dot-btn" data-theme="2" onclick="setTheme(2)" title="ธีม 2 – Light Blue" aria-label="ธีม 2 Light Professional">
    <span class="theme-dot" style="background:#2563eb;"></span>
    <span>Light</span>
  </button>

  <span class="theme-divider"></span>

  <button class="theme-dot-btn" data-theme="3" onclick="setTheme(3)" title="ธีม 3 – Navy Gold" aria-label="ธีม 3 Navy Premium">
    <span class="theme-dot" style="background:#d97706;"></span>
    <span>Premium</span>
  </button>
</div>

<!-- ========== NAVBAR (offset by theme bar) ========== -->
<nav id="navbar" class="fixed left-0 right-0 z-50 transition-all duration-300"
     style="top: 36px; background-color: transparent;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-20">

      <!-- Logo -->
      <a href="/" class="flex items-center gap-2 group">
        <div class="w-9 h-9 flex items-center justify-center flex-shrink-0"
             style="background-color: var(--accent);">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
            <rect x="2" y="3" width="4" height="18" rx="1"/>
            <rect x="10" y="3" width="4" height="18" rx="1"/>
            <rect x="18" y="3" width="4" height="18" rx="1"/>
            <line x1="2" y1="9" x2="22" y2="9"/>
            <line x1="2" y1="15" x2="22" y2="15"/>
          </svg>
        </div>
        <div class="leading-tight">
          <div class="font-black text-base tracking-wide leading-none" style="color: var(--accent);">พี่หญิง</div>
          <div class="font-bold text-xs tracking-widest" style="color: var(--text);">ล้อมรั้วทั่วไทย</div>
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
             class="text-sm font-semibold tracking-wide transition-colors duration-200 pb-1 nav-link
                    <?= $isActive ? 'nav-active' : 'nav-idle' ?>">
            <?= $label ?>
          </a>
        <?php endforeach; ?>
        <a href="tel:0890577047"
           class="ml-2 text-white text-sm font-bold px-5 py-2.5 transition-colors duration-200 tracking-wide flex items-center gap-1.5"
           style="background-color: var(--accent);">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          089-057-7047
        </a>
      </div>

      <!-- Mobile hamburger -->
      <button id="hamburger" class="md:hidden p-2 focus:outline-none" style="color: var(--text);" aria-label="เปิดเมนู">
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
  <div id="mobile-menu" class="md:hidden" style="background-color: var(--bg-navbar);">
    <div class="px-4 pt-2 pb-6 flex flex-col gap-1" style="border-top: 1px solid var(--border-light);">
      <?php foreach ($navLinks as $href => $label):
          $isActive = ($href === '/' && $currentPage === 'home')
                   || ($href !== '/' && '/' . $currentPage === $href);
      ?>
        <a href="<?= $href ?>"
           class="block py-3 px-3 text-base font-semibold mobile-nav-link <?= $isActive ? 'mobile-nav-active' : '' ?>">
          <?= $label ?>
        </a>
      <?php endforeach; ?>
      <a href="/contact"
         class="mt-4 block text-center text-white font-bold px-5 py-3 transition-colors duration-200"
         style="background-color: var(--accent);">
        ขอใบเสนอราคาฟรี
      </a>
    </div>
  </div>
</nav>

<!-- Spacer: theme bar (36px) + navbar height -->
<?php if ($currentPage !== 'home'): ?>
<div style="height: calc(36px + 4rem);"></div>
<?php else: ?>
<div style="height: 36px;"></div>
<?php endif; ?>

<!-- Lightbox (global) -->
<div id="lightbox" role="dialog" aria-modal="true" aria-label="ดูภาพขนาดใหญ่">
  <button id="lightbox-close"
    class="absolute top-4 right-4 text-white w-10 h-10 flex items-center justify-center text-2xl font-bold z-10 transition-colors"
    style="background-color: var(--accent);"
    aria-label="ปิด">&times;</button>
  <img id="lightbox-img" src="" alt="ผลงาน พี่หญิง ล้อมรั้วทั่วไทย" />
</div>

<script>
/* ──────────────────────────────────────────
   THEME SWITCHER
────────────────────────────────────────── */
const THEMES = {
  1: { name: 'theme-1', navText: 'rgba(209,213,219,1)', navActive: null },
  2: { name: 'theme-2', navText: 'rgba(51,65,85,1)',   navActive: null },
  3: { name: 'theme-3', navText: 'rgba(203,213,225,1)', navActive: null },
};

function setTheme(n) {
  // Remove old theme classes
  document.body.classList.remove('theme-1','theme-2','theme-3');
  document.body.classList.add('theme-' + n);

  // Persist
  localStorage.setItem('rbswall_theme', n);

  // Update nav link colors
  updateNavColors(n);

  // Update active dot button
  document.querySelectorAll('.theme-dot-btn').forEach(btn => {
    btn.classList.toggle('active', btn.dataset.theme == n);
  });
}

function updateNavColors(n) {
  const isLight = (n == 2);
  document.querySelectorAll('.nav-idle').forEach(el => {
    el.style.color = isLight ? '#374151' : '#d1d5db';
  });
  document.querySelectorAll('.nav-active').forEach(el => {
    el.style.color = getComputedStyle(document.body).getPropertyValue('--accent').trim();
  });
  document.querySelectorAll('.mobile-nav-link').forEach(el => {
    el.style.color = isLight ? '#1e293b' : '#e5e7eb';
    el.style.borderBottom = '1px solid ' + (isLight ? 'rgba(0,0,0,0.07)' : 'rgba(255,255,255,0.05)');
  });
  document.querySelectorAll('.mobile-nav-active').forEach(el => {
    el.style.color = getComputedStyle(document.body).getPropertyValue('--accent').trim();
  });
  // Hamburger icon
  const hamburger = document.getElementById('hamburger');
  if (hamburger) hamburger.style.color = isLight ? '#0f172a' : '#ffffff';
}

// Apply theme on DOM ready
document.addEventListener('DOMContentLoaded', function() {
  const saved = parseInt(localStorage.getItem('rbswall_theme') || '1');
  setTheme(saved);
  document.body.style.opacity = '1';
});

/* ──────────────────────────────────────────
   NAVBAR SCROLL EFFECT
────────────────────────────────────────── */
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  if (window.scrollY > 40) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
}, { passive: true });

/* ──────────────────────────────────────────
   HAMBURGER MENU
────────────────────────────────────────── */
const hamburger   = document.getElementById('hamburger');
const mobileMenu  = document.getElementById('mobile-menu');
const iconOpen    = document.getElementById('icon-open');
const iconClose   = document.getElementById('icon-close');

hamburger.addEventListener('click', () => {
  const isOpen = mobileMenu.classList.toggle('open');
  iconOpen.style.display  = isOpen ? 'none'  : 'block';
  iconClose.style.display = isOpen ? 'block' : 'none';
});
mobileMenu.querySelectorAll('a').forEach(a => {
  a.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    iconOpen.style.display  = 'block';
    iconClose.style.display = 'none';
  });
});

/* ──────────────────────────────────────────
   FADE-IN ON SCROLL
────────────────────────────────────────── */
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});

/* ──────────────────────────────────────────
   LIGHTBOX
────────────────────────────────────────── */
const lightbox      = document.getElementById('lightbox');
const lightboxImg   = document.getElementById('lightbox-img');
const lightboxClose = document.getElementById('lightbox-close');

function openLightbox(src, alt) {
  lightboxImg.src = src;
  lightboxImg.alt = alt || 'ผลงาน พี่หญิง ล้อมรั้วทั่วไทย';
  lightbox.classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeLightbox() {
  lightbox.classList.remove('open');
  document.body.style.overflow = '';
  lightboxImg.src = '';
}
lightboxClose.addEventListener('click', closeLightbox);
lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
</script>
