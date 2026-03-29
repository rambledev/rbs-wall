<?php
/**
 * Home Page – RBS Wall
 */

// Gallery placeholder items (used in both gallery section and gallery page)
$galleryItems = [
    ['label' => 'รั้วเหล็กดัด บ้านพักอาศัย',  'color' => 'from-[#1a1a1a] to-[#2a2a2a]', 'accent' => '#f97316', 'type' => 'รั้วเหล็ก'],
    ['label' => 'รั้วปูน โรงงานอุตสาหกรรม',    'color' => 'from-[#161616] to-[#222222]', 'accent' => '#f97316', 'type' => 'รั้วปูน'],
    ['label' => 'รั้วตาข่าย ที่ดินเปล่า',       'color' => 'from-[#1e1e1e] to-[#282828]', 'accent' => '#f97316', 'type' => 'รั้วตาข่าย'],
    ['label' => 'รั้วสำเร็จรูป หมู่บ้าน',       'color' => 'from-[#181818] to-[#242424]', 'accent' => '#f97316', 'type' => 'รั้วสำเร็จรูป'],
    ['label' => 'รั้วเหล็กดัด ลายพิเศษ',        'color' => 'from-[#1a1a1a] to-[#2c2c2c]', 'accent' => '#f97316', 'type' => 'รั้วเหล็ก'],
    ['label' => 'รั้วคอนกรีต บ้านสองชั้น',      'color' => 'from-[#161616] to-[#262626]', 'accent' => '#f97316', 'type' => 'รั้วปูน'],
];
?>

<!-- ===================================================
     HERO SECTION
=================================================== -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden"
         style="background-color: #111111;">

  <!-- Background pattern -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <!-- Diagonal stripe texture -->
    <div style="
      position:absolute; inset:0;
      background-image: repeating-linear-gradient(
        -45deg,
        transparent,
        transparent 30px,
        rgba(249,115,22,0.03) 30px,
        rgba(249,115,22,0.03) 31px
      );
    "></div>
    <!-- Radial glow -->
    <div style="
      position:absolute; inset:0;
      background: radial-gradient(ellipse 80% 60% at 50% 40%, rgba(249,115,22,0.06) 0%, transparent 70%);
    "></div>
    <!-- Fence grid illustration -->
    <svg class="absolute right-0 top-0 h-full opacity-5" viewBox="0 0 400 800" preserveAspectRatio="xMaxYMid slice" fill="none" stroke="#f97316" stroke-width="1.5">
      <line x1="40"  y1="0" x2="40"  y2="800"/>
      <line x1="100" y1="0" x2="100" y2="800"/>
      <line x1="160" y1="0" x2="160" y2="800"/>
      <line x1="220" y1="0" x2="220" y2="800"/>
      <line x1="280" y1="0" x2="280" y2="800"/>
      <line x1="340" y1="0" x2="340" y2="800"/>
      <line x1="400" y1="0" x2="400" y2="800"/>
      <line x1="0" y1="80"  x2="400" y2="80"/>
      <line x1="0" y1="160" x2="400" y2="160"/>
      <line x1="0" y1="240" x2="400" y2="240"/>
      <line x1="0" y1="320" x2="400" y2="320"/>
      <line x1="0" y1="400" x2="400" y2="400"/>
      <line x1="0" y1="480" x2="400" y2="480"/>
      <line x1="0" y1="560" x2="400" y2="560"/>
      <line x1="0" y1="640" x2="400" y2="640"/>
      <line x1="0" y1="720" x2="400" y2="720"/>
    </svg>
    <!-- Orange diagonal accent bar -->
    <div style="
      position:absolute; top:0; right:0;
      width: 6px; height: 100%;
      background: linear-gradient(to bottom, #f97316, transparent);
    "></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">

    <!-- Badge -->
    <div class="hero-anim inline-flex items-center gap-2 bg-white/5 border border-orange-500/30 text-orange-400 text-sm font-semibold px-4 py-2 mb-8"
         style="opacity:0; animation: heroFadeUp 0.6s ease 0.1s forwards;">
      <span>⭐</span> ประสบการณ์กว่า 10 ปี | ประเมินหน้างานฟรี
    </div>

    <!-- Main headline -->
    <h1 class="text-white font-black leading-tight mb-6"
        style="font-size: clamp(2.2rem, 6vw, 4.5rem); opacity:0; animation: heroFadeUp 0.7s ease 0.25s forwards; letter-spacing: -0.01em;">
      บริการรับเหมาทำรั้ว<br>
      <span class="text-orange-500">ครบวงจร</span>
    </h1>

    <!-- Subtitle -->
    <p class="text-gray-300 text-lg sm:text-xl mb-10 max-w-xl mx-auto leading-relaxed"
       style="opacity:0; animation: heroFadeUp 0.7s ease 0.4s forwards;">
      งานคุณภาพ ราคายุติธรรม ประเมินหน้างานฟรี<br>
      <span class="text-orange-400 font-semibold">รั้วเหล็ก · รั้วปูน · รั้วตาข่าย · รั้วสำเร็จรูป</span>
    </p>

    <!-- CTA Buttons -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-14"
         style="opacity:0; animation: heroFadeUp 0.7s ease 0.55s forwards;">
      <a href="/contact"
         class="inline-flex items-center justify-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-bold px-8 py-4 text-base transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-orange-500/30">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
          <line x1="16" y1="13" x2="8" y2="13"/>
          <line x1="16" y1="17" x2="8" y2="17"/>
          <polyline points="10 9 9 9 8 9"/>
        </svg>
        ขอใบเสนอราคา
      </a>
      <a href="tel:0812345678"
         class="inline-flex items-center justify-center gap-2 bg-transparent border-2 border-white/40 hover:border-orange-500 text-white font-bold px-8 py-4 text-base transition-all duration-200 hover:text-orange-400">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
        </svg>
        โทรเลย
      </a>
    </div>

    <!-- Stats row -->
    <div class="flex flex-col sm:flex-row justify-center gap-6 sm:gap-12"
         style="opacity:0; animation: heroFadeUp 0.7s ease 0.7s forwards;">
      <?php
      $stats = [
          ['num' => '500+', 'label' => 'โปรเจคสำเร็จ'],
          ['num' => '100%', 'label' => 'พึงพอใจ'],
          ['num' => 'ฟรี',  'label' => 'ประเมินหน้างาน'],
      ];
      foreach ($stats as $s): ?>
        <div class="text-center">
          <div class="text-orange-500 font-black text-3xl"><?= $s['num'] ?></div>
          <div class="text-gray-400 text-sm mt-1"><?= $s['label'] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2"
       style="opacity:0; animation: heroFadeUp 0.7s ease 0.9s forwards;">
    <span class="text-gray-500 text-xs tracking-widest uppercase">เลื่อนลง</span>
    <div style="width:2px; height:32px; background: linear-gradient(to bottom, #f97316, transparent);"></div>
  </div>
</section>

<style>
@keyframes heroFadeUp {
  from { opacity: 0; transform: translateY(24px); }
  to   { opacity: 1; transform: translateY(0); }
}
</style>


<!-- ===================================================
     ABOUT SECTION
=================================================== -->
<section id="about" class="py-20 md:py-28" style="background-color: #161616;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

      <!-- Left: Big number -->
      <div class="fade-in text-center lg:text-left">
        <div class="inline-block">
          <div class="text-orange-500 font-black leading-none" style="font-size: 8rem; line-height: 1;">10</div>
          <div class="flex items-center gap-3 mt-2">
            <div style="width: 48px; height: 4px; background: #f97316;"></div>
            <span class="text-white text-2xl font-bold">ปีประสบการณ์</span>
          </div>
        </div>
        <p class="text-gray-400 mt-6 text-lg leading-relaxed max-w-md mx-auto lg:mx-0">
          RBS Wall ให้บริการรับเหมาทำรั้วครบวงจรมากกว่า 10 ปี ด้วยทีมช่างมืออาชีพที่มีความเชี่ยวชาญ
          เราใส่ใจทุกรายละเอียด ตั้งแต่การออกแบบจนถึงการติดตั้งเสร็จสมบูรณ์
          ให้บริการลูกค้าทั่วภาคอีสานด้วยความซื่อสัตย์และโปร่งใส
        </p>
      </div>

      <!-- Right: Feature cards -->
      <div class="grid grid-cols-1 gap-4">
        <?php
        $features = [
            [
                'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                'title' => 'งานคุณภาพ',
                'desc'  => 'ใช้วัสดุเกรดพรีเมียม ทนทานทุกสภาพอากาศ ผ่านการรับประกันคุณภาพทุกงาน',
                'delay' => '0',
            ],
            [
                'icon' => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
                'title' => 'ตรงเวลา',
                'desc'  => 'เริ่มงานและส่งงานตรงตามกำหนด ไม่มีบิดพลิ้ว วางแผนงานชัดเจนทุกขั้นตอน',
                'delay' => '0.1s',
            ],
            [
                'icon' => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>',
                'title' => 'ราคายุติธรรม',
                'desc'  => 'เสนอราคาโปร่งใส ไม่มีค่าใช้จ่ายซ่อนเร้น ประเมินหน้างานฟรี ไม่มีค่าเดินทาง',
                'delay' => '0.2s',
            ],
        ];
        foreach ($features as $f): ?>
          <div class="fade-in service-card bg-[#1e1e1e] border border-white/5 p-6 flex gap-5 items-start"
               style="transition-delay: <?= $f['delay'] ?>;">
            <div class="w-12 h-12 bg-orange-500/10 border border-orange-500/20 flex items-center justify-center flex-shrink-0">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                <?= $f['icon'] ?>
              </svg>
            </div>
            <div>
              <h3 class="text-white font-bold text-lg mb-1"><?= $f['title'] ?></h3>
              <p class="text-gray-400 text-sm leading-relaxed"><?= $f['desc'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ===================================================
     SERVICES SECTION
=================================================== -->
<section id="services" class="py-20 md:py-28" style="background-color: #111111;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Title -->
    <div class="text-center mb-14 fade-in">
      <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-3">สิ่งที่เราทำ</p>
      <h2 class="section-title center text-white font-black text-3xl sm:text-4xl">ประเภทรั้วที่เราบริการ</h2>
    </div>

    <!-- Cards grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $services = [
          [
              'title' => 'รั้วเหล็ก',
              'desc'  => 'รั้วเหล็กดัดแบบโมเดิร์น แข็งแรง สวยงาม เหมาะสำหรับบ้านพักอาศัยและอาคารทุกประเภท',
              'svg'   => '<rect x="2" y="3" width="4" height="18" rx="1"/><rect x="10" y="3" width="4" height="18" rx="1"/><rect x="18" y="3" width="4" height="18" rx="1"/><line x1="2" y1="9" x2="22" y2="9"/><line x1="2" y1="15" x2="22" y2="15"/>',
              'delay' => '0',
          ],
          [
              'title' => 'รั้วปูน',
              'desc'  => 'รั้วคอนกรีตสำเร็จรูป ทนทาน มั่นคง ป้องกันการบุกรุก เหมาะสำหรับโรงงานและที่อยู่อาศัย',
              'svg'   => '<rect x="2" y="3" width="9" height="8" rx="1"/><rect x="13" y="3" width="9" height="8" rx="1"/><rect x="2" y="13" width="9" height="8" rx="1"/><rect x="13" y="13" width="9" height="8" rx="1"/>',
              'delay' => '0.1s',
          ],
          [
              'title' => 'รั้วตาข่าย',
              'desc'  => 'รั้วตาข่ายถัก เหมาะสำหรับที่ดินเปล่า โรงงาน และพื้นที่กว้าง ราคาประหยัด ติดตั้งรวดเร็ว',
              'svg'   => '<path d="M2 2l20 20M2 12l10-10m0 20L2 12m20-10L12 12m10 10L12 12"/><rect x="2" y="2" width="20" height="20" rx="1"/>',
              'delay' => '0.2s',
          ],
          [
              'title' => 'รั้วสำเร็จรูป',
              'desc'  => 'รั้วแผ่นสำเร็จรูป ติดตั้งเร็ว ประหยัดเวลา เหมาะสำหรับโครงการบ้านจัดสรรและอาคารพาณิชย์',
              'svg'   => '<rect x="2" y="3" width="20" height="18" rx="1"/><line x1="2" y1="8" x2="22" y2="8"/><line x1="2" y1="13" x2="22" y2="13"/><line x1="2" y1="18" x2="22" y2="18"/>',
              'delay' => '0.3s',
          ],
      ];
      foreach ($services as $s): ?>
        <div class="fade-in service-card bg-[#1e1e1e] border-t-4 border-orange-500 border border-white/5 p-6 flex flex-col"
             style="transition-delay: <?= $s['delay'] ?>;">
          <!-- Icon -->
          <div class="w-14 h-14 bg-orange-500/10 border border-orange-500/20 flex items-center justify-center mb-5">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.8">
              <?= $s['svg'] ?>
            </svg>
          </div>
          <h3 class="text-white font-bold text-xl mb-3"><?= $s['title'] ?></h3>
          <p class="text-gray-400 text-sm leading-relaxed flex-1"><?= $s['desc'] ?></p>
          <a href="/contact"
             class="mt-5 inline-flex items-center gap-1.5 text-orange-500 hover:text-orange-400 font-semibold text-sm transition-colors duration-200">
            ขอใบเสนอราคา
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ===================================================
     GALLERY PREVIEW
=================================================== -->
<section id="gallery" class="py-20 md:py-28" style="background-color: #161616;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Title -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-12 fade-in">
      <div>
        <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-3">ผลงานของเรา</p>
        <h2 class="section-title text-white font-black text-3xl sm:text-4xl">ตัวอย่างผลงาน</h2>
      </div>
      <a href="/gallery"
         class="inline-flex items-center gap-2 text-orange-500 hover:text-orange-400 font-bold text-sm transition-colors duration-200 flex-shrink-0">
        ดูทั้งหมด
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </a>
    </div>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4">
      <?php foreach (array_slice($galleryItems, 0, 6) as $i => $item): ?>
        <div class="fade-in gallery-item rounded-sm aspect-[4/3] bg-gradient-to-br <?= $item['color'] ?>"
             style="transition-delay: <?= $i * 0.08 ?>s;"
             onclick="openLightbox('#gallery-<?= $i ?>', '<?= htmlspecialchars($item['label']) ?>')"
             role="button"
             tabindex="0"
             aria-label="ดูภาพ: <?= htmlspecialchars($item['label']) ?>"
             onkeypress="if(event.key==='Enter'){openLightbox('#gallery-<?= $i ?>','<?= htmlspecialchars($item['label']) ?>')}">

          <!-- Placeholder illustration -->
          <div class="absolute inset-0 flex flex-col items-center justify-center gap-3 p-4">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="<?= $item['accent'] ?>" stroke-width="1.2" opacity="0.5">
              <rect x="2" y="3" width="4" height="18" rx="1"/>
              <rect x="10" y="3" width="4" height="18" rx="1"/>
              <rect x="18" y="3" width="4" height="18" rx="1"/>
              <line x1="2" y1="9" x2="22" y2="9"/>
              <line x1="2" y1="15" x2="22" y2="15"/>
            </svg>
            <span class="text-white/60 text-xs text-center leading-tight font-medium"><?= htmlspecialchars($item['label']) ?></span>
            <span class="text-orange-500/60 text-xs font-bold tracking-wide"><?= htmlspecialchars($item['type']) ?></span>
          </div>

          <!-- Hover overlay -->
          <div class="gallery-overlay">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
              <circle cx="11" cy="11" r="8"/>
              <line x1="21" y1="21" x2="16.65" y2="16.65"/>
              <line x1="11" y1="8" x2="11" y2="14"/>
              <line x1="8" y1="11" x2="14" y2="11"/>
            </svg>
          </div>

          <!-- Hidden large-view ID for lightbox -->
          <div id="gallery-<?= $i ?>" style="display:none;" data-src="placeholder" data-label="<?= htmlspecialchars($item['label']) ?>"></div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<script>
// Override openLightbox for gallery placeholders (no real image – show label)
function openLightbox(selector, label) {
  // Create a canvas-based placeholder image
  const canvas = document.createElement('canvas');
  canvas.width  = 800;
  canvas.height = 600;
  const ctx = canvas.getContext('2d');

  // Background
  ctx.fillStyle = '#1e1e1e';
  ctx.fillRect(0, 0, 800, 600);

  // Orange border
  ctx.strokeStyle = '#f97316';
  ctx.lineWidth = 4;
  ctx.strokeRect(4, 4, 792, 592);

  // Grid lines (fence pattern)
  ctx.strokeStyle = 'rgba(249,115,22,0.15)';
  ctx.lineWidth = 1;
  for (let x = 60; x < 800; x += 60) {
    ctx.beginPath(); ctx.moveTo(x, 0); ctx.lineTo(x, 600); ctx.stroke();
  }
  for (let y = 60; y < 600; y += 60) {
    ctx.beginPath(); ctx.moveTo(0, y); ctx.lineTo(800, y); ctx.stroke();
  }

  // Fence post verticals
  ctx.fillStyle = 'rgba(249,115,22,0.3)';
  [180, 340, 500, 660].forEach(x => ctx.fillRect(x-8, 80, 16, 440));
  // Horizontals
  [180, 300].forEach(y => ctx.fillRect(140, y, 520, 10));

  // Label
  ctx.fillStyle = '#ffffff';
  ctx.font = 'bold 28px Sarabun, sans-serif';
  ctx.textAlign = 'center';
  ctx.fillText(label, 400, 540);

  ctx.fillStyle = '#f97316';
  ctx.font = 'bold 20px Sarabun, sans-serif';
  ctx.fillText('RBS WALL', 400, 48);

  const src = canvas.toDataURL('image/png');
  const lightboxImg  = document.getElementById('lightbox-img');
  const lightboxEl   = document.getElementById('lightbox');
  lightboxImg.src    = src;
  lightboxImg.alt    = label;
  lightboxEl.classList.add('open');
  document.body.style.overflow = 'hidden';
}
</script>


<!-- ===================================================
     CONTACT CTA
=================================================== -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background-color: #111111;">
  <!-- Orange diagonal accent -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true"
       style="background: linear-gradient(135deg, rgba(249,115,22,0.08) 0%, transparent 50%);"></div>
  <div class="absolute top-0 left-0 w-2 h-full bg-orange-500 opacity-60"></div>

  <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center fade-in">
    <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-4">ฟรี! ไม่มีค่าใช้จ่าย</p>
    <h2 class="text-white font-black text-3xl sm:text-4xl md:text-5xl mb-5 leading-tight">
      ติดต่อเพื่อประเมิน<span class="text-orange-500">หน้างานฟรี</span>
    </h2>
    <p class="text-gray-400 text-lg mb-10 max-w-lg mx-auto">
      เราส่งทีมช่างออกสำรวจหน้างาน วัดพื้นที่จริง และเสนอราคาโดยไม่มีค่าใช้จ่ายใดทั้งสิ้น
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="tel:0812345678"
         class="inline-flex items-center justify-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-bold px-8 py-4 text-base transition-all duration-200 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-orange-500/25">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
        </svg>
        โทร 081-234-5678
      </a>
      <a href="https://line.me/ti/p/~@rbswall"
         class="inline-flex items-center justify-center gap-2 bg-[#06c755] hover:bg-[#05b34c] text-white font-bold px-8 py-4 text-base transition-all duration-200 hover:-translate-y-0.5">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
          <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
        </svg>
        LINE: @rbswall
      </a>
    </div>
  </div>
</section>
