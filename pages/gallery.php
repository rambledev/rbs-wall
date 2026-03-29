<?php
/**
 * Gallery Page – RBS Wall
 */

// Gallery items with real photos (picsum seed = consistent image per item)
$galleryItems = [
    ['label' => 'รั้วเหล็กดัด บ้านพักอาศัย',     'type' => 'รั้วเหล็ก',      'desc' => 'รั้วเหล็กดัดลายโมเดิร์น บ้านเดี่ยว 2 ชั้น',                'img' => 'https://picsum.photos/seed/iron-fence-house/800/600'],
    ['label' => 'รั้วปูน โรงงานอุตสาหกรรม',       'type' => 'รั้วปูน',        'desc' => 'รั้วคอนกรีตความสูง 2.5 เมตร รอบโรงงาน',                   'img' => 'https://picsum.photos/seed/concrete-factory-wall/800/600'],
    ['label' => 'รั้วตาข่าย ที่ดินเปล่า',         'type' => 'รั้วตาข่าย',    'desc' => 'รั้วตาข่ายถัก 5 ไร่ ความสูง 1.8 เมตร',                     'img' => 'https://picsum.photos/seed/chainlink-open-land/800/600'],
    ['label' => 'รั้วสำเร็จรูป หมู่บ้านจัดสรร',  'type' => 'รั้วสำเร็จรูป', 'desc' => 'รั้วแผ่นสำเร็จรูป 40 แปลง โครงการบ้านจัดสรร',              'img' => 'https://picsum.photos/seed/precast-housing-estate/800/600'],
    ['label' => 'รั้วเหล็กดัด ลายพิเศษ คฤหาสน์', 'type' => 'รั้วเหล็ก',      'desc' => 'รั้วเหล็กดัดลายกรีก ประตูบานใหญ่สั่งทำพิเศษ',              'img' => 'https://picsum.photos/seed/iron-gate-mansion/800/600'],
    ['label' => 'รั้วคอนกรีต บ้านสองชั้น',        'type' => 'รั้วปูน',        'desc' => 'รั้วคอนกรีตบล็อกผสมเหล็กดัด สูง 2 เมตร',                  'img' => 'https://picsum.photos/seed/concrete-twostory/800/600'],
    ['label' => 'รั้วตาข่ายถัก สวนผลไม้',         'type' => 'รั้วตาข่าย',    'desc' => 'รั้วตาข่ายรอบสวนผลไม้ 10 ไร่ พร้อมเสาคอนกรีต',             'img' => 'https://picsum.photos/seed/wire-mesh-orchard/800/600'],
    ['label' => 'รั้วสำเร็จรูป อาคารพาณิชย์',    'type' => 'รั้วสำเร็จรูป', 'desc' => 'รั้วแผ่นสำเร็จรูปตีนฐาน อาคาร 4 คูหา',                    'img' => 'https://picsum.photos/seed/precast-commercial/800/600'],
    ['label' => 'รั้วเหล็กทาสี บ้านทาวน์โฮม',   'type' => 'รั้วเหล็ก',      'desc' => 'รั้วเหล็กพ่นสีสนิทดำเนียน ทาวน์โฮม 10 ยูนิต',              'img' => 'https://picsum.photos/seed/steel-townhome-fence/800/600'],
    ['label' => 'รั้วปูนผสมเหล็ก วิลล่าหรู',     'type' => 'รั้วปูน',        'desc' => 'รั้วสูง 3 เมตร ดีไซน์พิเศษ วิลล่าส่วนตัว',                 'img' => 'https://picsum.photos/seed/concrete-villa-luxury/800/600'],
    ['label' => 'รั้วตาข่ายหกเหลี่ยม ฟาร์ม',    'type' => 'รั้วตาข่าย',    'desc' => 'รั้วตาข่ายหกเหลี่ยมรอบฟาร์ม 20 ไร่',                       'img' => 'https://picsum.photos/seed/hexagonal-farm-fence/800/600'],
    ['label' => 'รั้วสำเร็จรูปขนาดใหญ่ โกดัง',  'type' => 'รั้วสำเร็จรูป', 'desc' => 'รั้วสำเร็จรูปรอบโกดังสินค้า ความสูง 2.2 เมตร',              'img' => 'https://picsum.photos/seed/precast-warehouse/800/600'],
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
        <div class="gallery-item fade-in rounded-sm overflow-hidden aspect-[4/3] relative cursor-pointer bg-[#1e1e1e]"
             data-type="<?= htmlspecialchars($item['type']) ?>"
             data-index="<?= $i ?>"
             data-label="<?= htmlspecialchars($item['label']) ?>"
             data-img="<?= htmlspecialchars($item['img']) ?>"
             style="transition-delay: <?= ($i % 4) * 0.07 ?>s;"
             tabindex="0"
             role="button"
             aria-label="ดูภาพ: <?= htmlspecialchars($item['label']) ?>"
             onclick="openGalleryItem(this)"
             onkeypress="if(event.key==='Enter') openGalleryItem(this)">

          <!-- Real photo -->
          <img src="<?= htmlspecialchars($item['img']) ?>"
               alt="<?= htmlspecialchars($item['label']) ?>"
               loading="lazy"
               class="absolute inset-0 w-full h-full object-cover" />

          <!-- Bottom gradient + label -->
          <div class="absolute bottom-0 left-0 right-0 px-3 py-2"
               style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, transparent 100%);">
            <span class="bg-orange-500 text-white text-xs font-bold px-2 py-0.5 mr-1.5"><?= htmlspecialchars($item['type']) ?></span>
            <span class="text-white/85 text-xs"><?= htmlspecialchars($item['label']) ?></span>
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
// gallery item data is embedded in data-* attributes on each element

function openGalleryItem(el) {
  const img   = el.dataset.img;
  const label = el.dataset.label;
  const lightboxImg = document.getElementById('lightbox-img');
  const lightboxEl  = document.getElementById('lightbox');
  lightboxImg.src   = img;
  lightboxImg.alt   = label;
  lightboxEl.classList.add('open');
  document.body.style.overflow = 'hidden';
}

// Initial fade-in trigger
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});
</script>
