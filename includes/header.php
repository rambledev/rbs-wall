<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="พี่หญิง ล้อมรั้วทั่วไทย บริการรับเหมาทำรั้วครบวงจร รั้วลวดหนาม รั้วเมทัลชีท รั้วคาวบอย กำแพงกั้นดิน ติดตั้งประตูบานเลื่อน-บานสวิง ราคายุติธรรม" />
  <meta name="keywords" content="รั้วลวดหนาม,รั้วเมทัลชีท,รั้วคาวบอย,กำแพงกั้นดิน,ติดตั้งประตู,พี่หญิงล้อมรั้ว" />
  <meta property="og:title" content="<?= htmlspecialchars($currentTitle) ?>" />
  <meta property="og:description" content="บริการรับเหมาทำรั้วครบวงจร งานคุณภาพ ราคายุติธรรม ประเมินหน้างานฟรี" />
  <meta property="og:type" content="website" />
  <title><?= htmlspecialchars($currentTitle) ?></title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700;800&family=Prompt:wght@300;400;600;700;800&family=Kanit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <style>
/* ================================================================
   DESIGN TOKENS – CSS VARIABLES
================================================================ */

/* ── Style A: Industrial (default) ── */
:root {
  --font-body:      'Sarabun', sans-serif;
  --font-heading:   'Sarabun', sans-serif;

  --bg-primary:     #111111;
  --bg-secondary:   #161616;
  --bg-card:        #1e1e1e;
  --bg-footer:      #0a0a0a;
  --bg-navbar:      rgba(10,10,10,0.97);
  --accent:         #f97316;
  --accent-dark:    #ea580c;
  --accent-rgb:     249,115,22;
  --text:           #ffffff;
  --text-muted:     #9ca3af;
  --text-subtle:    #6b7280;
  --border:         rgba(255,255,255,0.05);
  --border-light:   rgba(255,255,255,0.1);
  --radius-card:    0px;
  --radius-btn:     0px;
  --radius-img:     0px;
  --shadow-card:    none;
  --shadow-hover:   0 0 0 1px var(--accent), 0 8px 32px rgba(var(--accent-rgb),0.18);
  --hero-overlay:   radial-gradient(ellipse 80% 60% at 50% 40%, rgba(249,115,22,0.06) 0%, transparent 70%);
  --stripe:         rgba(249,115,22,0.025);
  --card-glass:     none;
  --heading-style:  normal;
}

/* ── Style A variant: Light Blue ── */
body.a-light {
  --bg-primary:    #f1f5f9;
  --bg-secondary:  #ffffff;
  --bg-card:       #ffffff;
  --bg-footer:     #1e293b;
  --bg-navbar:     rgba(255,255,255,0.97);
  --accent:        #2563eb;
  --accent-dark:   #1d4ed8;
  --accent-rgb:    37,99,235;
  --text:          #0f172a;
  --text-muted:    #475569;
  --text-subtle:   #94a3b8;
  --border:        rgba(0,0,0,0.07);
  --border-light:  rgba(0,0,0,0.12);
  --hero-overlay:  radial-gradient(ellipse 80% 60% at 50% 40%, rgba(37,99,235,0.06) 0%, transparent 70%);
  --stripe:        rgba(37,99,235,0.02);
}

/* ── Style A variant: Navy Gold ── */
body.a-navy {
  --bg-primary:    #0b1220;
  --bg-secondary:  #0f1a2e;
  --bg-card:       #152035;
  --bg-footer:     #060c18;
  --bg-navbar:     rgba(6,12,24,0.97);
  --accent:        #d97706;
  --accent-dark:   #b45309;
  --accent-rgb:    217,119,6;
  --text:          #f8fafc;
  --text-muted:    #94a3b8;
  --text-subtle:   #64748b;
  --border:        rgba(255,255,255,0.06);
  --border-light:  rgba(255,255,255,0.1);
  --hero-overlay:  radial-gradient(ellipse 80% 60% at 50% 40%, rgba(217,119,6,0.07) 0%, transparent 70%);
  --stripe:        rgba(217,119,6,0.025);
}

/* ================================================================
   STYLE B – MODERN ROUNDED
================================================================ */
body.b-dark {
  --font-body:     'Prompt', sans-serif;
  --font-heading:  'Prompt', sans-serif;
  --bg-primary:    #0f172a;
  --bg-secondary:  #1e293b;
  --bg-card:       #1e293b;
  --bg-footer:     #020617;
  --bg-navbar:     rgba(15,23,42,0.96);
  --accent:        #6366f1;
  --accent-dark:   #4f46e5;
  --accent-rgb:    99,102,241;
  --text:          #f1f5f9;
  --text-muted:    #94a3b8;
  --text-subtle:   #64748b;
  --border:        rgba(99,102,241,0.15);
  --border-light:  rgba(99,102,241,0.2);
  --radius-card:   20px;
  --radius-btn:    9999px;
  --radius-img:    14px;
  --shadow-card:   0 4px 24px rgba(0,0,0,0.25);
  --shadow-hover:  0 0 0 2px var(--accent), 0 16px 48px rgba(var(--accent-rgb),0.25);
  --hero-overlay:  radial-gradient(ellipse 90% 70% at 50% -10%, rgba(99,102,241,0.25) 0%, transparent 65%);
  --stripe:        rgba(99,102,241,0.03);
}
body.b-light {
  --font-body:     'Prompt', sans-serif;
  --font-heading:  'Prompt', sans-serif;
  --bg-primary:    #f8fafc;
  --bg-secondary:  #ffffff;
  --bg-card:       #ffffff;
  --bg-footer:     #0f172a;
  --bg-navbar:     rgba(248,250,252,0.97);
  --accent:        #6366f1;
  --accent-dark:   #4f46e5;
  --accent-rgb:    99,102,241;
  --text:          #0f172a;
  --text-muted:    #475569;
  --text-subtle:   #94a3b8;
  --border:        rgba(0,0,0,0.06);
  --border-light:  rgba(0,0,0,0.1);
  --radius-card:   20px;
  --radius-btn:    9999px;
  --radius-img:    14px;
  --shadow-card:   0 4px 24px rgba(99,102,241,0.08);
  --shadow-hover:  0 0 0 2px var(--accent), 0 16px 48px rgba(var(--accent-rgb),0.18);
  --hero-overlay:  radial-gradient(ellipse 90% 70% at 50% -10%, rgba(99,102,241,0.12) 0%, transparent 65%);
  --stripe:        rgba(99,102,241,0.02);
}

/* ================================================================
   STYLE C – BOLD PREMIUM
================================================================ */
body.c-dark {
  --font-body:     'Prompt', sans-serif;
  --font-heading:  'Prompt', sans-serif;
  --bg-primary:    #09090b;
  --bg-secondary:  #0d0d10;
  --bg-card:       rgba(255,255,255,0.04);
  --bg-footer:     #000000;
  --bg-navbar:     rgba(9,9,11,0.92);
  --accent:        #a855f7;
  --accent-dark:   #9333ea;
  --accent-rgb:    168,85,247;
  --text:          #fafafa;
  --text-muted:    #a1a1aa;
  --text-subtle:   #71717a;
  --border:        rgba(168,85,247,0.15);
  --border-light:  rgba(168,85,247,0.25);
  --radius-card:   16px;
  --radius-btn:    8px;
  --radius-img:    12px;
  --shadow-card:   0 0 0 1px rgba(168,85,247,0.12), 0 8px 32px rgba(0,0,0,0.4);
  --shadow-hover:  0 0 0 2px var(--accent), 0 20px 60px rgba(var(--accent-rgb),0.3);
  --hero-overlay:  radial-gradient(ellipse 100% 80% at 50% -5%, rgba(168,85,247,0.3) 0%, rgba(168,85,247,0.05) 50%, transparent 70%);
  --stripe:        rgba(168,85,247,0.04);
  --heading-style: gradient;
}
body.c-light {
  --font-body:     'Prompt', sans-serif;
  --font-heading:  'Prompt', sans-serif;
  --bg-primary:    #fafafa;
  --bg-secondary:  #f4f4f5;
  --bg-card:       rgba(255,255,255,0.85);
  --bg-footer:     #09090b;
  --bg-navbar:     rgba(250,250,250,0.92);
  --accent:        #7c3aed;
  --accent-dark:   #6d28d9;
  --accent-rgb:    124,58,237;
  --text:          #09090b;
  --text-muted:    #52525b;
  --text-subtle:   #a1a1aa;
  --border:        rgba(124,58,237,0.12);
  --border-light:  rgba(124,58,237,0.2);
  --radius-card:   16px;
  --radius-btn:    8px;
  --radius-img:    12px;
  --shadow-card:   0 4px 20px rgba(124,58,237,0.08), 0 1px 4px rgba(0,0,0,0.05);
  --shadow-hover:  0 0 0 2px var(--accent), 0 16px 48px rgba(var(--accent-rgb),0.2);
  --hero-overlay:  radial-gradient(ellipse 100% 70% at 50% -10%, rgba(124,58,237,0.15) 0%, transparent 60%);
  --stripe:        rgba(124,58,237,0.025);
  --heading-style: gradient;
}

/* ================================================================
   STYLE D – CLEAN GALLERY
   สะอาดตา โล่ง เน้นภาพ – พื้นหลังขาว, shadow นุ่ม, gallery-first
================================================================ */
body.d-clean {
  --font-body:     'Kanit', 'Sarabun', sans-serif;
  --font-heading:  'Kanit', 'Sarabun', sans-serif;
  --bg-primary:    #ffffff;
  --bg-secondary:  #f5f5f4;
  --bg-card:       #ffffff;
  --bg-footer:     #1c1917;
  --bg-navbar:     rgba(255,255,255,0.98);
  --accent:        #f97316;
  --accent-dark:   #ea580c;
  --accent-rgb:    249,115,22;
  --text:          #171717;
  --text-muted:    #737373;
  --text-subtle:   #a3a3a3;
  --border:        rgba(0,0,0,0.07);
  --border-light:  rgba(0,0,0,0.11);
  --radius-card:   12px;
  --radius-btn:    6px;
  --radius-img:    10px;
  --shadow-card:   0 1px 4px rgba(0,0,0,0.06), 0 4px 16px rgba(0,0,0,0.04);
  --shadow-hover:  0 8px 32px rgba(0,0,0,0.12), 0 2px 8px rgba(249,115,22,0.18);
  --hero-overlay:  none;
  --stripe:        transparent;
  --heading-style: normal;
}

/* ── Text overrides ─────────────────────────────────────────── */
body.d-clean .text-white              { color: var(--text)        !important; }
body.d-clean .text-gray-300           { color: #404040            !important; }
body.d-clean .text-gray-400           { color: var(--text-muted)  !important; }
body.d-clean .text-gray-500           { color: #737373            !important; }
body.d-clean .text-gray-600           { color: #a3a3a3            !important; }

/* ── Border overrides ──────────────────────────────────────── */
body.d-clean .border-white\/5         { border-color: rgba(0,0,0,0.06)  !important; }
body.d-clean .border-white\/10        { border-color: rgba(0,0,0,0.09)  !important; }
body.d-clean .border-white\/20        { border-color: rgba(0,0,0,0.14)  !important; }
body.d-clean .border-white\/40        { border-color: rgba(0,0,0,0.22)  !important; }

/* ── Form inputs ────────────────────────────────────────────── */
body.d-clean input, body.d-clean textarea, body.d-clean select {
  color: var(--text) !important;
  background-color: #fafafa !important;
  border-color: rgba(0,0,0,0.12) !important;
}
body.d-clean input::placeholder,
body.d-clean textarea::placeholder { color: #b5b5b5 !important; }

/* ── Card dark-bg classes → white card ─────────────────────── */
body.d-clean .bg-\[#1e1e1e\], body.d-clean .bg-\[#1a1a1a\],
body.d-clean .bg-\[#161616\], body.d-clean .bg-\[#141414\],
body.d-clean .bg-\[#171717\], body.d-clean .bg-\[#191919\] {
  background-color: #ffffff !important;
  border-color: rgba(0,0,0,0.07) !important;
  border-radius: var(--radius-card) !important;
}

/* ── Service cards ──────────────────────────────────────────── */
body.d-clean .service-card {
  background: #ffffff !important;
  border: 1px solid rgba(0,0,0,0.07) !important;
  border-radius: var(--radius-card) !important;
  box-shadow: var(--shadow-card) !important;
}
body.d-clean .service-card:hover {
  box-shadow: var(--shadow-hover) !important;
  transform: translateY(-6px) !important;
  border-color: rgba(249,115,22,0.25) !important;
}

/* ── Gallery – generous gaps, image-first ───────────────────── */
body.d-clean #gallery-grid { gap: 16px !important; }
body.d-clean .gallery-item {
  border-radius: var(--radius-img) !important;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08) !important;
}
body.d-clean .gallery-item:hover {
  box-shadow: 0 20px 52px rgba(0,0,0,0.16) !important;
  transform: translateY(-5px) scale(1.01) !important;
}
/* Neutral dark overlay (no orange tint) for clean look */
body.d-clean .gallery-overlay {
  background: rgba(0,0,0,0.28) !important;
}

/* ── Navbar ─────────────────────────────────────────────────── */
body.d-clean nav {
  background: rgba(255,255,255,0.98) !important;
  border-bottom: 1px solid rgba(0,0,0,0.07) !important;
  backdrop-filter: none !important;
}
body.d-clean .navbar-scrolled {
  background: #ffffff !important;
  box-shadow: 0 2px 20px rgba(0,0,0,0.07) !important;
  border-bottom-color: transparent !important;
}

/* ── Strip decorative noise ─────────────────────────────────── */
/* Diagonal stripe texture divs */
body.d-clean [style*="repeating-linear-gradient"] {
  background-image: none !important;
}
/* Radial glow overlays inside sections */
body.d-clean section > .absolute[style*="radial-gradient"] {
  background: none !important;
}
/* Right-edge orange accent bars */
body.d-clean section > .absolute.right-0.w-2 {
  background: transparent !important;
}

/* ── Hero: light background, clean text ─────────────────────── */
body.d-clean #hero {
  background-color: #fafaf9 !important;
  background-image: none !important;
}
/* Hide decorative SVG fence lines + orange bar */
body.d-clean #hero svg.absolute,
body.d-clean #hero > div.absolute[style*="width: 6px"] { display: none !important; }
/* Hero text readable on light bg */
body.d-clean #hero .text-white,
body.d-clean #hero h1                  { color: var(--text) !important; }
body.d-clean #hero p                   { color: var(--text-muted) !important; }
body.d-clean #hero .text-gray-300      { color: #404040 !important; }
body.d-clean #hero .text-gray-400      { color: var(--text-muted) !important; }
body.d-clean #hero .text-orange-400,
body.d-clean #hero .text-orange-500    { color: var(--accent) !important; }
/* Outline CTA button on light hero */
body.d-clean #hero a.border-2 {
  border-color: rgba(0,0,0,0.2) !important;
  color: var(--text) !important;
}
body.d-clean #hero a.border-2:hover {
  border-color: var(--accent) !important;
  color: var(--accent) !important;
}

/* ── Footer: keep dark ──────────────────────────────────────── */
body.d-clean footer .text-white        { color: #f5f5f4 !important; }
body.d-clean footer .text-gray-400     { color: #a3a3a3 !important; }
body.d-clean footer .text-gray-500     { color: #737373 !important; }

/* ================================================================
   BASE STYLES
================================================================ */
*, *::before, *::after { box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
  font-family: var(--font-body);
  background-color: var(--bg-primary);
  color: var(--text);
  transition: background-color 0.4s ease, color 0.3s ease;
}

/* ================================================================
   ACCENT COLOR OVERRIDES (Tailwind → CSS var)
================================================================ */
body .bg-orange-500  { background-color: var(--accent)      !important; }
body .bg-orange-600  { background-color: var(--accent-dark)  !important; }
body .hover\:bg-orange-600:hover { background-color: var(--accent-dark) !important; }
body .text-orange-500, body .text-orange-400 { color: var(--accent) !important; }
body .border-orange-500 { border-color: var(--accent) !important; }
body .border-t-4.border-orange-500 { border-top-color: var(--accent) !important; }

/* Card dark bg classes → CSS var */
body .bg-\[#1e1e1e\],body .bg-\[#1a1a1a\],body .bg-\[#161616\],
body .bg-\[#181818\],body .bg-\[#1c1c1c\],body .bg-\[#171717\],
body .bg-\[#191919\] { background-color: var(--bg-card) !important; }

/* ================================================================
   LIGHT THEME – TEXT / BORDER OVERRIDES
================================================================ */
body.a-light, body.b-light, body.c-light {
  /* Text */
  --tw-text-opacity: 1;
}
body.a-light .text-white,
body.b-light .text-white,
body.c-light .text-white     { color: var(--text) !important; }

body.a-light .text-gray-300,
body.b-light .text-gray-300,
body.c-light .text-gray-300  { color: #374151 !important; }

body.a-light .text-gray-400,
body.b-light .text-gray-400,
body.c-light .text-gray-400  { color: var(--text-muted) !important; }

body.a-light .text-gray-500,
body.b-light .text-gray-500,
body.c-light .text-gray-500  { color: #6b7280 !important; }

body.a-light .text-gray-600,
body.b-light .text-gray-600,
body.c-light .text-gray-600  { color: #9ca3af !important; }

body.a-light .border-white\/5,
body.b-light .border-white\/5,
body.c-light .border-white\/5  { border-color: rgba(0,0,0,0.07) !important; }

body.a-light .border-white\/10,
body.b-light .border-white\/10,
body.c-light .border-white\/10 { border-color: rgba(0,0,0,0.12) !important; }

body.a-light .border-white\/20,
body.b-light .border-white\/20,
body.c-light .border-white\/20 { border-color: rgba(0,0,0,0.16) !important; }

body.a-light .border-white\/40,
body.b-light .border-white\/40,
body.c-light .border-white\/40 { border-color: rgba(0,0,0,0.25) !important; }

body.a-light input, body.b-light input, body.c-light input,
body.a-light textarea, body.b-light textarea, body.c-light textarea,
body.a-light select, body.b-light select, body.c-light select {
  color: var(--text) !important;
  background-color: #f8fafc !important;
  border-color: rgba(0,0,0,0.12) !important;
}
body.a-light input::placeholder,
body.b-light input::placeholder,
body.c-light input::placeholder,
body.a-light textarea::placeholder,
body.b-light textarea::placeholder,
body.c-light textarea::placeholder { color: #9ca3af !important; }

/* Hero bg for light a */
body.a-light #hero { background-color: #1e293b !important; }

/* ================================================================
   STYLE B – COMPONENT OVERRIDES
================================================================ */
body.b-dark .service-card,
body.b-light .service-card {
  border-radius: var(--radius-card) !important;
  box-shadow: var(--shadow-card) !important;
  overflow: hidden;
}
body.b-dark .service-card:hover,
body.b-light .service-card:hover {
  box-shadow: var(--shadow-hover) !important;
  transform: translateY(-6px) !important;
}
body.b-dark .gallery-item,
body.b-light .gallery-item {
  border-radius: var(--radius-card) !important;
}
/* Pill buttons in B */
body.b-dark a[style*="background-color: var(--accent)"],
body.b-light a[style*="background-color: var(--accent)"] {
  border-radius: var(--radius-btn) !important;
}
/* Hero gradient */
body.b-dark #hero,
body.b-light #hero {
  background-image: var(--hero-overlay) !important;
}
/* Nav button pill */
body.b-dark nav a[href*="tel"],
body.b-light nav a[href*="tel"] {
  border-radius: var(--radius-btn) !important;
}
/* B light border override */
body.b-light .border-white\/5  { border-color: rgba(99,102,241,0.12) !important; }
body.b-light .border-white\/10 { border-color: rgba(99,102,241,0.18) !important; }

/* ================================================================
   STYLE C – COMPONENT OVERRIDES (Glassmorphism + Gradient)
================================================================ */
body.c-dark .service-card,
body.c-light .service-card {
  background: var(--bg-card) !important;
  backdrop-filter: blur(16px) !important;
  -webkit-backdrop-filter: blur(16px) !important;
  border: 1px solid var(--border) !important;
  border-radius: var(--radius-card) !important;
  box-shadow: var(--shadow-card) !important;
}
body.c-dark .service-card:hover,
body.c-light .service-card:hover {
  box-shadow: var(--shadow-hover) !important;
  transform: translateY(-6px) !important;
  border-color: var(--accent) !important;
}
/* Gradient text headings */
body.c-dark h1,
body.c-dark h2,
body.c-light h1,
body.c-light h2 {
  background: linear-gradient(130deg, var(--text) 0%, var(--accent) 120%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
/* Keep section subtitle small text normal */
body.c-dark p, body.c-light p { -webkit-text-fill-color: unset; }

/* Gradient fill buttons */
body.c-dark a[style*="background-color: var(--accent)"],
body.c-dark button#submit-btn,
body.c-light a[style*="background-color: var(--accent)"],
body.c-light button#submit-btn {
  background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%) !important;
  border-radius: var(--radius-btn) !important;
  box-shadow: 0 4px 20px rgba(var(--accent-rgb), 0.4) !important;
}
/* Gallery items */
body.c-dark .gallery-item,
body.c-light .gallery-item {
  border-radius: var(--radius-card) !important;
}
/* Hero gradient overlay */
body.c-dark #hero,
body.c-light #hero {
  background-image: var(--hero-overlay) !important;
}
/* Section bg glass for C */
body.c-dark .bg-\[#1e1e1e\],
body.c-dark .bg-\[#1a1a1a\] {
  background: rgba(255,255,255,0.04) !important;
  backdrop-filter: blur(12px) !important;
  border: 1px solid rgba(168,85,247,0.12) !important;
  border-radius: var(--radius-card) !important;
}
body.c-light .bg-\[#1e1e1e\],
body.c-light .bg-\[#1a1a1a\] {
  background: rgba(255,255,255,0.75) !important;
  backdrop-filter: blur(12px) !important;
  border: 1px solid rgba(124,58,237,0.1) !important;
  border-radius: var(--radius-card) !important;
}
/* Nav blur for C */
body.c-dark nav, body.c-light nav {
  backdrop-filter: blur(20px) !important;
}
body.c-dark .navbar-scrolled,
body.c-light .navbar-scrolled {
  background: rgba(9,9,11,0.85) !important;
  border-bottom: 1px solid rgba(168,85,247,0.15) !important;
}
body.c-light .navbar-scrolled {
  background: rgba(250,250,250,0.88) !important;
  border-bottom: 1px solid rgba(124,58,237,0.12) !important;
}

/* ================================================================
   COMMON COMPONENTS
================================================================ */
.fade-in {
  opacity: 0;
  transform: translateY(28px);
  transition: opacity 0.65s ease, transform 0.65s ease;
}
.fade-in.visible { opacity: 1; transform: translateY(0); }

.navbar-scrolled {
  background-color: var(--bg-navbar) !important;
  backdrop-filter: blur(14px);
  box-shadow: 0 2px 24px rgba(0,0,0,0.3);
}
#mobile-menu         { display: none; }
#mobile-menu.open    { display: block; }

.section-title::after {
  content: '';
  display: block;
  width: 56px;
  height: 4px;
  background: var(--accent);
  margin-top: 12px;
  border-radius: 2px;
}
.section-title.center::after { margin-left: auto; margin-right: auto; }

.service-card { transition: transform 0.28s ease, box-shadow 0.28s ease; }
.service-card:hover {
  box-shadow: var(--shadow-hover, 0 0 0 1px var(--accent));
  transform: translateY(-4px);
}

#lightbox {
  display: none; position: fixed; inset: 0;
  background: rgba(0,0,0,0.92);
  z-index: 9999; align-items: center; justify-content: center;
}
#lightbox.open  { display: flex; }
#lightbox img   { max-width: 90vw; max-height: 85vh; object-fit: contain; border: 2px solid var(--accent); border-radius: 4px; }

.gallery-item   { cursor: pointer; overflow: hidden; position: relative; }
.gallery-item:hover .gallery-overlay { opacity: 1; }
.gallery-overlay {
  position: absolute; inset: 0;
  background: rgba(var(--accent-rgb), 0.32);
  display: flex; align-items: center; justify-content: center;
  opacity: 0; transition: opacity 0.3s ease;
}
.gallery-item img { transition: transform 0.4s ease; width: 100%; height: 100%; object-fit: cover; }
.gallery-item:hover img { transform: scale(1.07); }

/* ================================================================
   THEME SWITCHER BAR
================================================================ */
#theme-bar {
  position: fixed; top: 0; left: 0; right: 0;
  z-index: 200;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 4px;
  padding: 0 12px;
  background: rgba(0,0,0,0.9);
  backdrop-filter: blur(12px);
  border-bottom: 1px solid rgba(255,255,255,0.07);
  overflow-x: auto;
  scrollbar-width: none;
}
#theme-bar::-webkit-scrollbar { display: none; }

.tb-group-label {
  font-size: 10px;
  font-family: 'Sarabun', sans-serif;
  color: rgba(255,255,255,0.35);
  letter-spacing: 0.1em;
  text-transform: uppercase;
  white-space: nowrap;
  padding: 0 4px;
  flex-shrink: 0;
}
.tb-sep {
  width: 1px; height: 22px;
  background: rgba(255,255,255,0.1);
  margin: 0 6px;
  flex-shrink: 0;
}
.tb-btn {
  display: flex; align-items: center; gap: 5px;
  padding: 4px 10px;
  border-radius: 20px;
  border: 1.5px solid transparent;
  cursor: pointer;
  background: rgba(255,255,255,0.05);
  font-size: 11px;
  font-family: 'Sarabun', sans-serif;
  color: rgba(255,255,255,0.5);
  white-space: nowrap;
  flex-shrink: 0;
  transition: all 0.2s ease;
  position: relative;
}
.tb-btn:hover   { background: rgba(255,255,255,0.1); color: rgba(255,255,255,0.85); }
.tb-btn.active  { border-color: rgba(255,255,255,0.45); color: #fff; background: rgba(255,255,255,0.12); }
.tb-dot {
  width: 10px; height: 10px; border-radius: 50%;
  display: block; flex-shrink: 0;
}
/* Moon / Sun icon shortcuts */
.tb-icon { font-size: 12px; line-height: 1; }
</style>
</head>

<script>
(function(){
  var s = localStorage.getItem('rbs_style') || 'a-dark';
  document.documentElement.dataset.style = s;
})();
</script>

<body class="min-h-screen" style="opacity:0; transition: opacity 0.2s;">

<!-- ========== THEME SWITCHER BAR ========== -->
<div id="theme-bar" role="navigation" aria-label="เลือกธีม">

  <!-- Group A: Industrial -->
  <span class="tb-group-label hidden sm:block">Industrial</span>
  <button class="tb-btn" data-style="a-dark"  onclick="setStyle('a-dark')"  title="Industrial Dark">
    <span class="tb-dot" style="background:#f97316;"></span>Dark
  </button>
  <button class="tb-btn" data-style="a-light" onclick="setStyle('a-light')" title="Industrial Light">
    <span class="tb-dot" style="background:#2563eb;"></span>Light
  </button>
  <button class="tb-btn" data-style="a-navy"  onclick="setStyle('a-navy')"  title="Industrial Navy">
    <span class="tb-dot" style="background:#d97706;"></span>Navy
  </button>

  <span class="tb-sep"></span>

  <!-- Group B: Modern -->
  <span class="tb-group-label hidden sm:block">Modern</span>
  <button class="tb-btn" data-style="b-dark"  onclick="setStyle('b-dark')"  title="Modern Dark">
    <span class="tb-icon">🌙</span>Dark
  </button>
  <button class="tb-btn" data-style="b-light" onclick="setStyle('b-light')" title="Modern Light">
    <span class="tb-icon">☀️</span>Light
  </button>

  <span class="tb-sep"></span>

  <!-- Group C: Bold Premium -->
  <span class="tb-group-label hidden sm:block">Premium</span>
  <button class="tb-btn" data-style="c-dark"  onclick="setStyle('c-dark')"  title="Premium Dark">
    <span class="tb-icon">🌙</span>Dark
  </button>
  <button class="tb-btn" data-style="c-light" onclick="setStyle('c-light')" title="Premium Light">
    <span class="tb-icon">☀️</span>Light
  </button>

  <span class="tb-sep"></span>

  <!-- Group D: Clean Gallery -->
  <span class="tb-group-label hidden sm:block">Clean</span>
  <button class="tb-btn" data-style="d-clean" onclick="setStyle('d-clean')" title="Clean Gallery">
    <span class="tb-dot" style="background:#ffffff; border:1.5px solid rgba(255,255,255,0.4);"></span>Clean
  </button>

</div>

<!-- ========== NAVBAR ========== -->
<nav id="navbar" class="fixed left-0 right-0 z-50 transition-all duration-300"
     style="top:44px; background:transparent;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-20">

      <a href="/" class="flex items-center gap-2">
        <div class="w-9 h-9 flex items-center justify-center flex-shrink-0"
             style="background-color:#166534; border-radius:var(--radius-btn, 4px);"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
            <rect x="2" y="3" width="4" height="18" rx="1"/>
            <rect x="10" y="3" width="4" height="18" rx="1"/>
            <rect x="18" y="3" width="4" height="18" rx="1"/>
            <line x1="2" y1="9" x2="22" y2="9"/>
            <line x1="2" y1="15" x2="22" y2="15"/>
          </svg>
        </div>
        <div class="leading-tight">
          <div class="font-black text-base tracking-wide leading-none" style="color:#166534; font-family:var(--font-heading);">พี่หญิง</div> <div class="font-bold text-xs tracking-widest" style="color:#1e293b;">ล้อมรั้วทั่วไทย</div> </div>
      </a>

      <div class="hidden md:flex items-center gap-8">
        <?php
        $navLinks = ['/' => 'หน้าแรก', '/about' => 'เกี่ยวกับเรา', '/gallery' => 'ผลงาน', '/contact' => 'ติดต่อเรา'];
        foreach ($navLinks as $href => $label):
          $isActive = ($href==='/' && $currentPage==='home') || ($href!=='/' && '/'.  $currentPage===$href);
        ?>
          <a href="<?= $href ?>"
             class="nav-link text-sm font-semibold tracking-wide transition-colors duration-200 pb-1
                    <?= $isActive ? 'nav-active border-b-2 border-current' : 'nav-idle' ?>"
             style="color:<?= $isActive ? '#166534' : '#64748b' ?>; border-color:#22c55e; font-family:var(--font-body);"> <?= $label ?>
          </a>
        <?php endforeach; ?>
        <a href="tel:0890577047"
           class="text-white text-sm font-bold px-5 py-2.5 flex items-center gap-1.5 transition-all duration-200 nav-cta-btn"
           style="background-color:#166534; border-radius:var(--radius-btn, 2px); font-family:var(--font-body);"> <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          089-057-7047
        </a>
      </div>

      <button id="hamburger" class="md:hidden p-2 focus:outline-none" style="color:#166534;" aria-label="เปิดเมนู"> <svg id="icon-open" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
          <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
        </svg>
        <svg id="icon-close" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="display:none;">
          <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
    </div>
  </div>

  <div id="mobile-menu" class="md:hidden" style="background:#ffffff; border-top:1px solid #f1f5f9;"> <div class="px-4 pt-2 pb-6 flex flex-col gap-1">
      <?php foreach ($navLinks as $href => $label):
        $isActive = ($href==='/' && $currentPage==='home') || ($href!=='/' && '/'.$currentPage===$href); ?>
        <a href="<?= $href ?>"
           class="block py-3 px-3 text-base font-semibold"
           style="color:<?= $isActive ? '#166534' : '#1e293b' ?>; border-bottom:1px solid #f1f5f9; font-family:var(--font-body);">
          <?= $label ?>
        </a>
      <?php endforeach; ?>
      <a href="/contact"
         class="mt-4 block text-center text-white font-bold px-5 py-3 transition-colors duration-200"
         style="background-color:#166534; border-radius:var(--radius-btn, 2px); font-family:var(--font-body);"> ขอใบเสนอราคาฟรี
      </a>
    </div>
  </div>
</nav>

<!-- Spacer -->
<?php if ($currentPage !== 'home'): ?>
<div style="height:calc(44px + 5rem);"></div>
<?php else: ?>
<div style="height:44px;"></div>
<?php endif; ?>

<!-- Lightbox -->
<div id="lightbox" role="dialog" aria-modal="true">
  <button id="lightbox-close"
    class="absolute top-4 right-4 text-white w-10 h-10 flex items-center justify-center text-2xl font-bold z-10"
    style="background-color:var(--accent); border-radius:var(--radius-btn, 2px);">&times;</button>
  <img id="lightbox-img" src="" alt="ผลงาน" />
</div>

<script>
/* ══════════════════════════════════════════
   STYLE SWITCHER
══════════════════════════════════════════ */
const ALL_STYLES = ['a-dark','a-light','a-navy','b-dark','b-light','c-dark','c-light','d-clean'];

function setStyle(s) {
  // Remove all style classes
  document.body.classList.remove(...ALL_STYLES);
  document.body.classList.add(s);
  localStorage.setItem('rbs_style', s);

  // Active button highlight
  document.querySelectorAll('.tb-btn').forEach(b => {
    b.classList.toggle('active', b.dataset.style === s);
  });

  // Update nav link colors after CSS vars settle
  requestAnimationFrame(syncNavColors);
}

function syncNavColors() {
  const accent = getComputedStyle(document.body).getPropertyValue('--accent').trim();
  const muted  = getComputedStyle(document.body).getPropertyValue('--text-muted').trim();
  document.querySelectorAll('.nav-link').forEach(el => {
    el.style.color = el.classList.contains('nav-active') ? accent : muted;
  });
}

// Init on load
document.addEventListener('DOMContentLoaded', () => {
  const saved = localStorage.getItem('rbs_style') || 'a-dark';
  setStyle(saved);
  document.body.style.opacity = '1';
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});

/* ══════════════════════════════════════════
   NAVBAR SCROLL
══════════════════════════════════════════ */
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  navbar.classList.toggle('navbar-scrolled', window.scrollY > 40);
}, { passive: true });

/* ══════════════════════════════════════════
   HAMBURGER
══════════════════════════════════════════ */
const hamburger  = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const iconOpen   = document.getElementById('icon-open');
const iconClose  = document.getElementById('icon-close');
hamburger.addEventListener('click', () => {
  const open = mobileMenu.classList.toggle('open');
  iconOpen.style.display  = open ? 'none'  : 'block';
  iconClose.style.display = open ? 'block' : 'none';
});
mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
  mobileMenu.classList.remove('open');
  iconOpen.style.display = 'block';
  iconClose.style.display = 'none';
}));

/* ══════════════════════════════════════════
   FADE-IN OBSERVER
══════════════════════════════════════════ */
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); }
  });
}, { threshold: 0.12 });

/* ══════════════════════════════════════════
   LIGHTBOX
══════════════════════════════════════════ */
const lightbox      = document.getElementById('lightbox');
const lightboxImg   = document.getElementById('lightbox-img');
const lightboxClose = document.getElementById('lightbox-close');
function openLightbox(src, alt) {
  lightboxImg.src = src; lightboxImg.alt = alt || 'ผลงาน';
  lightbox.classList.add('open'); document.body.style.overflow = 'hidden';
}
function closeLightbox() {
  lightbox.classList.remove('open'); document.body.style.overflow = ''; lightboxImg.src = '';
}
lightboxClose.addEventListener('click', closeLightbox);
lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });

function openLightboxImg(src, label) { openLightbox(src, label); }
</script>
