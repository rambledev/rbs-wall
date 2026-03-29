<?php
/**
 * Home Page – RBS Wall
 */

// Gallery items with real photos from Picsum (seed = consistent image per item)
$galleryItems = [
    ['label' => 'รั้วลวดหนาม ที่ดินเปล่า',     'type' => 'รั้วลวดหนาม',   'img' => 'https://picsum.photos/seed/barbed-wire-land/800/600'],
    ['label' => 'รั้วเมทัลชีท โรงงาน',          'type' => 'รั้วเมทัลชีท',  'img' => 'https://picsum.photos/seed/metal-sheet-factory/800/600'],
    ['label' => 'รั้วคาวบอย ฟาร์มปศุสัตว์',     'type' => 'รั้วคาวบอย',    'img' => 'https://picsum.photos/seed/cowboy-ranch-fence/800/600'],
    ['label' => 'กำแพงกั้นดิน บ้านพักอาศัย',   'type' => 'กำแพงกั้นดิน',  'img' => 'https://picsum.photos/seed/retaining-wall-home/800/600'],
    ['label' => 'ประตูบานเลื่อน บ้านสองชั้น',   'type' => 'ติดตั้งประตู',  'img' => 'https://picsum.photos/seed/sliding-gate-house/800/600'],
    ['label' => 'ประตูบานสวิง คฤหาสน์',         'type' => 'บานสวิง',        'img' => 'https://picsum.photos/seed/swing-gate-mansion/800/600'],
];
?>

<!-- ===================================================
     HERO SECTION
=================================================== -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden"
         style="background-color: var(--bg-primary);">

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
    <h1 class="text-white font-black mb-6"
        style="font-size: clamp(2.2rem, 6vw, 4.5rem); line-height: 1.5; opacity:0; animation: heroFadeUp 0.7s ease 0.25s forwards; letter-spacing: -0.01em;">
      พี่หญิง<br>
      <span class="text-orange-500">ล้อมรั้วทั่วไทย</span>
    </h1>

    <!-- Subtitle -->
    <p class="text-gray-300 text-lg sm:text-xl mb-10 max-w-xl mx-auto leading-relaxed"
       style="opacity:0; animation: heroFadeUp 0.7s ease 0.4s forwards;">
      งานคุณภาพ ราคายุติธรรม ประเมินหน้างานฟรี<br>
      <span class="text-orange-400 font-semibold">รั้วลวดหนาม · รั้วเมทัลชีท · รั้วคาวบอย · กำแพงกั้นดิน</span>
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
      <a href="tel:0890577047"
         class="inline-flex items-center justify-center gap-2 bg-transparent border-2 border-white/40 hover:border-orange-500 text-white font-bold px-8 py-4 text-base transition-all duration-200 hover:text-orange-400">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
        </svg>
        089-057-7047
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
<section id="about" class="py-20 md:py-28" style="background-color: var(--bg-secondary);">
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
<section id="services" class="py-20 md:py-28" style="background-color: var(--bg-primary);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Title -->
    <div class="text-center mb-14 fade-in">
      <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-3">สิ่งที่เราทำ</p>
      <h2 class="section-title center text-white font-black text-3xl sm:text-4xl">ประเภทรั้วที่เราบริการ</h2>
    </div>

    <!-- Cards grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $services = [
          [
              'title' => 'รั้วลวดหนาม',
              'desc'  => 'รั้วลวดหนามคุณภาพสูง ทนทาน เหมาะสำหรับที่ดิน ฟาร์ม สวนไร่ และพื้นที่กว้าง ราคาประหยัด',
              'img'   => 'https://picsum.photos/seed/barbed-wire-fence/400/240',
              'delay' => '0',
          ],
          [
              'title' => 'รั้วเมทัลชีท',
              'desc'  => 'รั้วแผ่นเมทัลชีทสวยงาม ทนทาน กันแดดกันฝน เหมาะสำหรับบ้าน โรงงาน และโกดังสินค้า',
              'img'   => 'https://picsum.photos/seed/metal-sheet-fence/400/240',
              'delay' => '0.1s',
          ],
          [
              'title' => 'รั้วคาวบอย',
              'desc'  => 'รั้วคาวบอยแบบท่อ/เหล็กกลม แข็งแรง ดูดี เหมาะสำหรับฟาร์ม สวนผลไม้ และคอกสัตว์',
              'img'   => 'https://picsum.photos/seed/ranch-cowboy-fence/400/240',
              'delay' => '0.2s',
          ],
          [
              'title' => 'กำแพงกั้นดิน',
              'desc'  => 'กำแพงคอนกรีตกั้นดินสำเร็จรูป มั่นคงแข็งแรง ป้องกันดินพัง เหมาะทุกพื้นที่',
              'img'   => 'https://picsum.photos/seed/retaining-wall-concrete/400/240',
              'delay' => '0.3s',
          ],
          [
              'title' => 'ติดตั้งประตู',
              'desc'  => 'รับติดตั้งประตูทุกประเภท บานเลื่อน บานสวิง ประตูรีโมท ออกแบบตามต้องการ',
              'img'   => 'https://picsum.photos/seed/gate-installation/400/240',
              'delay' => '0.4s',
          ],
          [
              'title' => 'บานเลื่อน-บานสวิง',
              'desc'  => 'ประตูบานเลื่อนและบานสวิงเหล็ก แข็งแรง ทนทาน ออกแบบให้เข้ากับสไตล์บ้านและรั้วของคุณ',
              'img'   => 'https://picsum.photos/seed/sliding-swing-gate/400/240',
              'delay' => '0.5s',
          ],
      ];
      foreach ($services as $s): ?>
        <div class="fade-in service-card bg-[#1e1e1e] border border-white/5 flex flex-col overflow-hidden"
             style="transition-delay: <?= $s['delay'] ?>;">
          <!-- Photo thumbnail -->
          <div class="relative h-44 overflow-hidden">
            <img src="<?= htmlspecialchars($s['img']) ?>"
                 alt="<?= htmlspecialchars($s['title']) ?>"
                 loading="lazy"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <!-- Orange top border overlay -->
            <div class="absolute top-0 left-0 right-0 h-1 bg-orange-500"></div>
            <!-- Type badge -->
            <div class="absolute top-3 left-3">
              <span class="bg-orange-500 text-white text-xs font-bold px-2 py-1"><?= htmlspecialchars($s['title']) ?></span>
            </div>
          </div>
          <!-- Card body -->
          <div class="p-6 flex flex-col flex-1">
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
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ===================================================
     GALLERY PREVIEW
=================================================== -->
<section id="gallery" class="py-20 md:py-28" style="background-color: var(--bg-secondary);">
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
        <div class="fade-in gallery-item rounded-sm aspect-[4/3] bg-[#1e1e1e]"
             style="transition-delay: <?= $i * 0.08 ?>s;"
             onclick="openLightboxImg('<?= htmlspecialchars($item['img']) ?>', '<?= htmlspecialchars($item['label']) ?>')"
             role="button"
             tabindex="0"
             aria-label="ดูภาพ: <?= htmlspecialchars($item['label']) ?>"
             onkeypress="if(event.key==='Enter') openLightboxImg('<?= htmlspecialchars($item['img']) ?>','<?= htmlspecialchars($item['label']) ?>')">

          <!-- Real photo -->
          <img src="<?= htmlspecialchars($item['img']) ?>"
               alt="<?= htmlspecialchars($item['label']) ?>"
               loading="lazy"
               class="absolute inset-0 w-full h-full object-cover" />

          <!-- Bottom label bar -->
          <div class="absolute bottom-0 left-0 right-0 px-3 py-2"
               style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, transparent 100%);">
            <span class="bg-orange-500 text-white text-xs font-bold px-2 py-0.5 mr-2"><?= htmlspecialchars($item['type']) ?></span>
            <span class="text-white/90 text-xs"><?= htmlspecialchars($item['label']) ?></span>
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
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<script>
function openLightboxImg(src, label) {
  const lightboxImg = document.getElementById('lightbox-img');
  const lightboxEl  = document.getElementById('lightbox');
  lightboxImg.src   = src;
  lightboxImg.alt   = label;
  lightboxEl.classList.add('open');
  document.body.style.overflow = 'hidden';
}
</script>


<!-- ===================================================
     CONTACT CTA
=================================================== -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background-color: var(--bg-primary);">
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
      <a href="tel:0890577047"
         class="inline-flex items-center justify-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-bold px-8 py-4 text-base transition-all duration-200 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-orange-500/25">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
        </svg>
        โทร 089-057-7047
      </a>
      <a href="https://line.me/ti/p/~0806199152"
         class="inline-flex items-center justify-center gap-2 bg-[#06c755] hover:bg-[#05b34c] text-white font-bold px-8 py-4 text-base transition-all duration-200 hover:-translate-y-0.5">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="white">
          <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
        </svg>
        LINE: 0806199152
      </a>
    </div>
  </div>
</section>
