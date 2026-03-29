<?php
/**
 * Gallery Page – RBS Wall
 */

$galleryItems = [
    ['label' => 'รั้วเหล็กดัด บ้านพักอาศัย',         'type' => 'รั้วเหล็ก',      'color1' => '#1a1a1a', 'color2' => '#2a2a2a', 'desc' => 'รั้วเหล็กดัดลายโมเดิร์น บ้านเดี่ยว 2 ชั้น'],
    ['label' => 'รั้วปูน โรงงานอุตสาหกรรม',           'type' => 'รั้วปูน',        'color1' => '#161616', 'color2' => '#242424', 'desc' => 'รั้วคอนกรีตความสูง 2.5 เมตร รอบโรงงาน'],
    ['label' => 'รั้วตาข่าย ที่ดินเปล่า',             'type' => 'รั้วตาข่าย',    'color1' => '#1e1e1e', 'color2' => '#2c2c2c', 'desc' => 'รั้วตาข่ายถัก 5 ไร่ ความสูง 1.8 เมตร'],
    ['label' => 'รั้วสำเร็จรูป หมู่บ้านจัดสรร',      'type' => 'รั้วสำเร็จรูป', 'color1' => '#181818', 'color2' => '#282828', 'desc' => 'รั้วแผ่นสำเร็จรูป 40 แปลง โครงการบ้านจัดสรร'],
    ['label' => 'รั้วเหล็กดัด ลายพิเศษ คฤหาสน์',     'type' => 'รั้วเหล็ก',      'color1' => '#1a1a1a', 'color2' => '#303030', 'desc' => 'รั้วเหล็กดัดลายกรีก ประตูบานใหญ่สั่งทำพิเศษ'],
    ['label' => 'รั้วคอนกรีต บ้านสองชั้น',           'type' => 'รั้วปูน',        'color1' => '#161616', 'color2' => '#262626', 'desc' => 'รั้วคอนกรีตบล็อกผสมเหล็กดัด สูง 2 เมตร'],
    ['label' => 'รั้วตาข่ายถัก สวนผลไม้',            'type' => 'รั้วตาข่าย',    'color1' => '#1c1c1c', 'color2' => '#2a2a2a', 'desc' => 'รั้วตาข่ายรอบสวนผลไม้ 10 ไร่ พร้อมเสาคอนกรีต'],
    ['label' => 'รั้วสำเร็จรูป อาคารพาณิชย์',        'type' => 'รั้วสำเร็จรูป', 'color1' => '#171717', 'color2' => '#252525', 'desc' => 'รั้วแผ่นสำเร็จรูปตีนฐาน อาคาร 4 คูหา'],
    ['label' => 'รั้วเหล็กทาสี บ้านทาวน์โฮม',        'type' => 'รั้วเหล็ก',      'color1' => '#1a1a1a', 'color2' => '#282828', 'desc' => 'รั้วเหล็กพ่นสีสนิทดำเนียน ทาวน์โฮม 10 ยูนิต'],
    ['label' => 'รั้วปูนผสมเหล็ก วิลล่าหรู',         'type' => 'รั้วปูน',        'color1' => '#151515', 'color2' => '#232323', 'desc' => 'รั้วสูง 3 เมตร ดีไซน์พิเศษ วิลล่าส่วนตัว'],
    ['label' => 'รั้วตาข่ายหกเหลี่ยม ฟาร์ม',         'type' => 'รั้วตาข่าย',    'color1' => '#1e1e1e', 'color2' => '#2e2e2e', 'desc' => 'รั้วตาข่ายหกเหลี่ยมรอบฟาร์ม 20 ไร่'],
    ['label' => 'รั้วสำเร็จรูปขนาดใหญ่ โกดัง',       'type' => 'รั้วสำเร็จรูป', 'color1' => '#191919', 'color2' => '#272727', 'desc' => 'รั้วสำเร็จรูปรอบโกดังสินค้า ความสูง 2.2 เมตร'],
];

// Filter by type
$filterTypes = ['ทั้งหมด', 'รั้วเหล็ก', 'รั้วปูน', 'รั้วตาข่าย', 'รั้วสำเร็จรูป'];
?>

<!-- ===================================================
     PAGE HERO
=================================================== -->
<section class="relative py-20 md:py-28 overflow-hidden" style="background-color: #161616;">
  <div class="absolute inset-0 pointer-events-none"
       style="background: repeating-linear-gradient(-45deg, transparent, transparent 30px, rgba(249,115,22,0.025) 30px, rgba(249,115,22,0.025) 31px);">
  </div>
  <div class="absolute top-0 right-0 w-2 h-full bg-orange-500 opacity-40"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-3">ผลงานของเรา</p>
    <h1 class="section-title center text-white font-black text-4xl sm:text-5xl mb-5">ตัวอย่างผลงานทั้งหมด</h1>
    <p class="text-gray-400 text-lg max-w-xl mx-auto">
      ผลงานจริงจากลูกค้ากว่า 500 ราย ทั้งบ้านพักอาศัย โรงงาน และโครงการขนาดใหญ่
    </p>
  </div>
</section>


<!-- ===================================================
     GALLERY
=================================================== -->
<section class="py-16 md:py-24" style="background-color: #111111;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Filter buttons -->
    <div class="flex flex-wrap gap-3 justify-center mb-12 fade-in">
      <?php foreach ($filterTypes as $type): ?>
        <button
          class="gallery-filter-btn px-5 py-2 text-sm font-semibold border transition-all duration-200
                 <?= $type === 'ทั้งหมด' ? 'bg-orange-500 border-orange-500 text-white' : 'bg-transparent border-white/20 text-gray-400 hover:border-orange-500 hover:text-orange-400' ?>"
          data-filter="<?= $type ?>">
          <?= $type ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Grid -->
    <div id="gallery-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-4">
      <?php foreach ($galleryItems as $i => $item): ?>
        <div class="gallery-item fade-in rounded-sm overflow-hidden aspect-[4/3] relative cursor-pointer"
             data-type="<?= htmlspecialchars($item['type']) ?>"
             data-index="<?= $i ?>"
             data-label="<?= htmlspecialchars($item['label']) ?>"
             style="background: linear-gradient(135deg, <?= $item['color1'] ?>, <?= $item['color2'] ?>); transition-delay: <?= ($i % 4) * 0.07 ?>s;"
             loading="lazy"
             tabindex="0"
             role="button"
             aria-label="ดูภาพ: <?= htmlspecialchars($item['label']) ?>"
             onclick="openGalleryItem(this)"
             onkeypress="if(event.key==='Enter') openGalleryItem(this)">

          <!-- SVG Illustration -->
          <div class="absolute inset-0 flex flex-col items-center justify-center gap-2 p-3">
            <?php if ($item['type'] === 'รั้วเหล็ก'): ?>
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.5" opacity="0.55">
                <rect x="2" y="3" width="4" height="18" rx="1"/>
                <rect x="10" y="3" width="4" height="18" rx="1"/>
                <rect x="18" y="3" width="4" height="18" rx="1"/>
                <line x1="2" y1="9" x2="22" y2="9"/>
                <line x1="2" y1="15" x2="22" y2="15"/>
              </svg>
            <?php elseif ($item['type'] === 'รั้วปูน'): ?>
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.5" opacity="0.55">
                <rect x="2" y="3" width="9" height="8" rx="1"/>
                <rect x="13" y="3" width="9" height="8" rx="1"/>
                <rect x="2" y="13" width="9" height="8" rx="1"/>
                <rect x="13" y="13" width="9" height="8" rx="1"/>
              </svg>
            <?php elseif ($item['type'] === 'รั้วตาข่าย'): ?>
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.5" opacity="0.55">
                <rect x="2" y="2" width="20" height="20" rx="1"/>
                <line x1="2" y1="9" x2="22" y2="9"/>
                <line x1="2" y1="15" x2="22" y2="15"/>
                <line x1="9" y1="2" x2="9" y2="22"/>
                <line x1="15" y1="2" x2="15" y2="22"/>
              </svg>
            <?php else: ?>
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.5" opacity="0.55">
                <rect x="2" y="3" width="20" height="18" rx="1"/>
                <line x1="2" y1="8" x2="22" y2="8"/>
                <line x1="2" y1="13" x2="22" y2="13"/>
                <line x1="2" y1="18" x2="22" y2="18"/>
              </svg>
            <?php endif; ?>
            <p class="text-white/55 text-xs text-center leading-tight"><?= htmlspecialchars($item['label']) ?></p>
          </div>

          <!-- Type badge -->
          <div class="absolute top-2 left-2">
            <span class="bg-orange-500/80 text-white text-xs font-bold px-2 py-0.5">
              <?= htmlspecialchars($item['type']) ?>
            </span>
          </div>

          <!-- Hover overlay -->
          <div class="gallery-overlay">
            <div class="text-center">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" class="mx-auto mb-2">
                <circle cx="11" cy="11" r="8"/>
                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                <line x1="11" y1="8" x2="11" y2="14"/>
                <line x1="8" y1="11" x2="14" y2="11"/>
              </svg>
              <p class="text-white text-xs font-semibold">คลิกดูภาพ</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- No results message -->
    <div id="no-results" class="hidden text-center py-20">
      <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.5" class="mx-auto mb-4 opacity-40">
        <circle cx="11" cy="11" r="8"/>
        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
      <p class="text-gray-500 text-lg">ไม่พบผลงานประเภทนี้</p>
    </div>

  </div>
</section>

<!-- ===================================================
     CTA
=================================================== -->
<section class="py-16" style="background-color: #161616; border-top: 1px solid rgba(255,255,255,0.05);">
  <div class="max-w-3xl mx-auto px-4 text-center fade-in">
    <h2 class="text-white font-black text-3xl mb-4">สนใจผลงานแบบไหน?</h2>
    <p class="text-gray-400 mb-8">ติดต่อเราเพื่อดูตัวอย่างเพิ่มเติม หรือขอใบเสนอราคาฟรี</p>
    <a href="/contact"
       class="inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-bold px-10 py-4 text-base transition-all duration-200 hover:-translate-y-0.5">
      ขอใบเสนอราคา
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <path d="M5 12h14M12 5l7 7-7 7"/>
      </svg>
    </a>
  </div>
</section>

<script>
// ── Gallery filter ───────────────────────────────────────
const filterBtns = document.querySelectorAll('.gallery-filter-btn');
const galleryItems = document.querySelectorAll('#gallery-grid .gallery-item');
const noResults = document.getElementById('no-results');

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    // Update active button
    filterBtns.forEach(b => {
      b.classList.remove('bg-orange-500', 'border-orange-500', 'text-white');
      b.classList.add('bg-transparent', 'border-white/20', 'text-gray-400');
    });
    btn.classList.add('bg-orange-500', 'border-orange-500', 'text-white');
    btn.classList.remove('bg-transparent', 'border-white/20', 'text-gray-400');

    const filter = btn.dataset.filter;
    let visibleCount = 0;

    galleryItems.forEach(item => {
      const show = filter === 'ทั้งหมด' || item.dataset.type === filter;
      item.style.display = show ? '' : 'none';
      if (show) {
        visibleCount++;
        // Re-trigger fade-in
        item.classList.remove('visible');
        setTimeout(() => item.classList.add('visible'), 20);
      }
    });

    noResults.classList.toggle('hidden', visibleCount > 0);
  });
});

// ── Gallery lightbox ─────────────────────────────────────
const galleryData = <?= json_encode(array_map(fn($item) => [
    'label' => $item['label'],
    'type'  => $item['type'],
    'desc'  => $item['desc'],
    'color1'=> $item['color1'],
    'color2'=> $item['color2'],
], $galleryItems)) ?>;

function openGalleryItem(el) {
  const idx   = parseInt(el.dataset.index);
  const data  = galleryData[idx];
  const label = data.label;

  // Generate canvas placeholder
  const canvas = document.createElement('canvas');
  canvas.width  = 900;
  canvas.height = 600;
  const ctx = canvas.getContext('2d');

  // BG gradient
  const grad = ctx.createLinearGradient(0, 0, 900, 600);
  grad.addColorStop(0, data.color1);
  grad.addColorStop(1, data.color2);
  ctx.fillStyle = grad;
  ctx.fillRect(0, 0, 900, 600);

  // Orange border
  ctx.strokeStyle = '#f97316';
  ctx.lineWidth = 5;
  ctx.strokeRect(4, 4, 892, 592);

  // Grid pattern
  ctx.strokeStyle = 'rgba(249,115,22,0.12)';
  ctx.lineWidth = 1;
  for (let x = 60; x < 900; x += 60) { ctx.beginPath(); ctx.moveTo(x,0); ctx.lineTo(x,600); ctx.stroke(); }
  for (let y = 60; y < 600; y += 60) { ctx.beginPath(); ctx.moveTo(0,y); ctx.lineTo(900,y); ctx.stroke(); }

  // Fence illustration
  ctx.strokeStyle = 'rgba(249,115,22,0.35)';
  ctx.lineWidth = 14;
  ctx.lineCap = 'round';
  [180, 320, 460, 600, 740].forEach(x => {
    ctx.beginPath(); ctx.moveTo(x, 100); ctx.lineTo(x, 480); ctx.stroke();
  });
  ctx.lineWidth = 10;
  ctx.beginPath(); ctx.moveTo(140, 200); ctx.lineTo(780, 200); ctx.stroke();
  ctx.beginPath(); ctx.moveTo(140, 360); ctx.lineTo(780, 360); ctx.stroke();

  // Type badge
  ctx.fillStyle = '#f97316';
  ctx.fillRect(30, 28, 140, 36);
  ctx.fillStyle = '#ffffff';
  ctx.font = 'bold 18px Sarabun, sans-serif';
  ctx.textAlign = 'left';
  ctx.fillText('  ' + data.type, 34, 53);

  // Label
  ctx.fillStyle = '#ffffff';
  ctx.font = 'bold 26px Sarabun, sans-serif';
  ctx.textAlign = 'center';
  ctx.fillText(label, 450, 540);

  // Description
  ctx.fillStyle = 'rgba(255,255,255,0.5)';
  ctx.font = '18px Sarabun, sans-serif';
  ctx.fillText(data.desc, 450, 572);

  // Brand
  ctx.fillStyle = '#f97316';
  ctx.font = 'bold 18px sans-serif';
  ctx.textAlign = 'right';
  ctx.fillText('RBS WALL', 870, 50);

  const src = canvas.toDataURL('image/png');
  const lightboxImg = document.getElementById('lightbox-img');
  const lightboxEl  = document.getElementById('lightbox');
  lightboxImg.src   = src;
  lightboxImg.alt   = label;
  lightboxEl.classList.add('open');
  document.body.style.overflow = 'hidden';
}

// Initial fade-in trigger
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});
</script>
