<?php
/**
 * Upload Page – Image management for gallery
 * พี่หญิง ล้อมรั้วทั่วไทย
 *
 * $uploadResult is set by index.php before this file is included
 * when the request is a POST to this page.
 */

$success    = isset($_GET['success']) && $_GET['success'] === '1';
$deleted    = isset($_GET['deleted']) && $_GET['deleted'] === '1';
$error      = $uploadResult['error'] ?? null;

// Handle delete POST (separate from upload POST)
// $deleteResult is also set by index.php
$deleteError = $deleteResult['error'] ?? null;

// Current uploaded images for the management section
require_once ROOT_PATH . '/includes/upload_handler.php';
$uploadedImages = getUploadedImages();
?>

<!-- ===================================================
     PAGE HERO
=================================================== -->
<section class="relative py-16 md:py-20 overflow-hidden" style="background-color: var(--bg-secondary);">
  <div class="absolute inset-0 pointer-events-none"
       style="background: repeating-linear-gradient(-45deg, transparent, transparent 30px, rgba(249,115,22,0.025) 30px, rgba(249,115,22,0.025) 31px);">
  </div>
  <div class="absolute top-0 right-0 w-2 h-full bg-orange-500 opacity-40"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <div>
        <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-2">จัดการรูปภาพ</p>
        <h1 class="section-title text-white font-black text-3xl sm:text-4xl">อัปโหลดรูปผลงาน</h1>
        <p class="text-gray-400 mt-2 text-sm">
          <?= count($uploadedImages) ?> รูป · สูงสุด 2MB ต่อไฟล์ · รองรับ JPG, PNG, WebP
        </p>
      </div>
      <a href="/gallery"
         class="inline-flex items-center gap-2 border border-white/20 hover:border-orange-500 text-gray-300 hover:text-orange-400 font-semibold px-5 py-2.5 text-sm transition-all duration-200 self-start sm:self-auto">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
        ดูแกลเลอรี
      </a>
    </div>
  </div>
</section>


<!-- ===================================================
     UPLOAD FORM
=================================================== -->
<section class="py-12 md:py-16" style="background-color: var(--bg-primary);">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-start">

      <!-- ── Upload form (3 cols) ── -->
      <div class="lg:col-span-3 fade-in">
        <div class="bg-[#1e1e1e] border border-white/5 p-6 md:p-8">

          <!-- Flash messages -->
          <?php if ($success): ?>
            <div class="flex items-start gap-3 bg-green-500/10 border border-green-500/25 p-4 mb-6" role="alert">
              <svg class="flex-shrink-0 mt-0.5" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              <div>
                <p class="text-green-400 font-bold text-sm">อัปโหลดสำเร็จ!</p>
                <p class="text-gray-400 text-xs mt-0.5">รูปภาพถูกเพิ่มในแกลเลอรีแล้ว</p>
              </div>
            </div>
          <?php elseif ($deleted): ?>
            <div class="flex items-start gap-3 bg-orange-500/10 border border-orange-500/25 p-4 mb-6" role="alert">
              <svg class="flex-shrink-0 mt-0.5" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2.5">
                <polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4h6v2"/>
              </svg>
              <div>
                <p class="text-orange-400 font-bold text-sm">ลบรูปภาพแล้ว</p>
              </div>
            </div>
          <?php elseif ($error): ?>
            <div class="flex items-start gap-3 bg-red-500/10 border border-red-500/25 p-4 mb-6" role="alert">
              <svg class="flex-shrink-0 mt-0.5" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2.5">
                <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
              </svg>
              <div>
                <p class="text-red-400 font-bold text-sm">อัปโหลดไม่สำเร็จ</p>
                <p class="text-gray-400 text-xs mt-0.5"><?= htmlspecialchars($error) ?></p>
              </div>
            </div>
          <?php endif; ?>

          <!-- Form -->
          <form id="upload-form"
                method="POST"
                action="/upload"
                enctype="multipart/form-data"
                novalidate>

            <!-- Image preview zone -->
            <div id="drop-zone"
                 class="relative border-2 border-dashed border-white/15 hover:border-orange-500/50 cursor-pointer mb-6 transition-colors duration-200"
                 style="min-height: 200px;"
                 onclick="document.getElementById('f-image').click()">

              <!-- Default state -->
              <div id="drop-placeholder" class="absolute inset-0 flex flex-col items-center justify-center gap-3 p-6 text-center">
                <div class="w-14 h-14 bg-orange-500/10 border border-orange-500/20 flex items-center justify-center">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                    <rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/>
                    <polyline points="21 15 16 10 5 21"/>
                  </svg>
                </div>
                <div>
                  <p class="text-white font-semibold text-sm">คลิกเพื่อเลือกรูปภาพ</p>
                  <p class="text-gray-500 text-xs mt-1">JPG, PNG, WebP · สูงสุด 2MB</p>
                </div>
              </div>

              <!-- Preview state (hidden by default) -->
              <div id="preview-container" class="hidden relative">
                <img id="preview-img"
                     src=""
                     alt="Preview"
                     class="w-full object-contain"
                     style="max-height: 280px;" />
                <button type="button"
                        id="clear-preview"
                        class="absolute top-2 right-2 w-7 h-7 bg-black/70 hover:bg-red-600 flex items-center justify-center transition-colors"
                        title="เอาออก">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                  </svg>
                </button>
                <div id="preview-meta"
                     class="absolute bottom-0 left-0 right-0 bg-black/60 px-3 py-1.5 text-xs text-gray-300">
                </div>
              </div>

              <!-- Hidden file input (triggered by click on zone) -->
              <input id="f-image"
                     name="image"
                     type="file"
                     accept="image/jpeg,image/png,image/webp"
                     class="sr-only"
                     required />
            </div>
            <p id="err-image" class="hidden text-red-400 text-xs mb-4 -mt-4">กรุณาเลือกรูปภาพ</p>

            <!-- Caption -->
            <div class="mb-5">
              <label for="f-caption" class="block text-sm font-semibold text-gray-300 mb-2">
                คำอธิบายภาพ <span class="text-gray-600 font-normal">(ไม่บังคับ)</span>
              </label>
              <input id="f-caption"
                     name="caption"
                     type="text"
                     maxlength="120"
                     placeholder="เช่น รั้วลวดหนาม ที่ดิน 5 ไร่ จ.ขอนแก่น"
                     class="w-full bg-[#141414] border border-white/10 focus:border-orange-500 text-white placeholder-gray-600 px-4 py-3 text-sm outline-none transition-colors duration-200" />
            </div>

            <!-- Fence type -->
            <div class="mb-6">
              <label for="f-type" class="block text-sm font-semibold text-gray-300 mb-2">
                ประเภทรั้ว <span class="text-orange-500">*</span>
              </label>
              <div class="relative">
                <select id="f-type"
                        name="type"
                        required
                        class="w-full bg-[#141414] border border-white/10 focus:border-orange-500 text-gray-300 px-4 py-3 text-sm outline-none transition-colors duration-200 appearance-none cursor-pointer">
                  <option value="">-- เลือกประเภทรั้ว --</option>
                  <?php foreach (FENCE_TYPES as $ft): ?>
                    <option value="<?= htmlspecialchars($ft) ?>"><?= htmlspecialchars($ft) ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9"/>
                  </svg>
                </div>
              </div>
              <p id="err-type" class="hidden text-red-400 text-xs mt-1">กรุณาเลือกประเภทรั้ว</p>
            </div>

            <!-- Submit -->
            <button id="submit-btn"
                    type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 active:bg-orange-700 text-white font-bold py-3.5 text-base transition-all duration-200 flex items-center justify-center gap-2.5 disabled:opacity-60 disabled:cursor-not-allowed">
              <!-- Default icon -->
              <svg id="btn-icon-upload" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/>
                <polyline points="17 8 12 3 7 8"/>
                <line x1="12" y1="3" x2="12" y2="15"/>
              </svg>
              <!-- Spinner (hidden) -->
              <svg id="btn-icon-spin" class="hidden animate-spin" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M21 12a9 9 0 11-6.219-8.56"/>
              </svg>
              <span id="btn-text">อัปโหลดรูปภาพ</span>
            </button>

          </form>
        </div>
      </div>

      <!-- ── Tips panel (2 cols) ── -->
      <div class="lg:col-span-2 fade-in" style="transition-delay: 0.1s;">
        <div class="bg-[#1e1e1e] border border-white/5 p-6 mb-4">
          <h3 class="text-white font-bold text-base mb-4 flex items-center gap-2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
              <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
            </svg>
            คำแนะนำการอัปโหลด
          </h3>
          <ul class="space-y-3 text-sm text-gray-400">
            <li class="flex items-start gap-2">
              <span class="text-orange-500 mt-0.5 flex-shrink-0">✓</span>
              <span>ใช้รูปแนวนอน (landscape) เพื่อให้แสดงผลสวยงามที่สุด</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-orange-500 mt-0.5 flex-shrink-0">✓</span>
              <span>ความละเอียดแนะนำ 800×600 px ขึ้นไป</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-orange-500 mt-0.5 flex-shrink-0">✓</span>
              <span>WebP ให้คุณภาพดีและขนาดเล็กที่สุด</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-orange-500 mt-0.5 flex-shrink-0">✓</span>
              <span>ใส่ชื่อจังหวัดในคำอธิบาย เช่น "ขอนแก่น" เพื่อช่วย SEO</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-gray-600 mt-0.5 flex-shrink-0">✗</span>
              <span class="text-gray-600">ห้ามอัปโหลดไฟล์ที่ไม่ใช่รูปภาพ</span>
            </li>
          </ul>
        </div>

        <!-- Storage info -->
        <div class="bg-[#1e1e1e] border border-white/5 p-6">
          <h3 class="text-white font-bold text-base mb-4 flex items-center gap-2">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
              <rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/>
              <line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>
            </svg>
            จัดเก็บข้อมูล
          </h3>
          <?php
          $totalSize = 0;
          foreach ($uploadedImages as $img) $totalSize += $img['size'];
          $totalSizeMB = $totalSize > 0 ? round($totalSize / (1024 * 1024), 1) : 0;
          ?>
          <div class="space-y-2 text-sm">
            <div class="flex justify-between text-gray-400">
              <span>รูปทั้งหมด</span>
              <span class="text-white font-semibold"><?= count($uploadedImages) ?> ไฟล์</span>
            </div>
            <div class="flex justify-between text-gray-400">
              <span>ขนาดรวม</span>
              <span class="text-white font-semibold"><?= $totalSizeMB ?> MB</span>
            </div>
            <div class="flex justify-between text-gray-400">
              <span>โฟลเดอร์</span>
              <span class="text-gray-500 text-xs font-mono">/public/uploads/</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ===================================================
     MANAGE UPLOADED IMAGES
=================================================== -->
<?php if (!empty($uploadedImages)): ?>
<section class="py-10 md:py-14" style="background-color: var(--bg-secondary); border-top: 1px solid var(--border);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center justify-between mb-8 fade-in">
      <div>
        <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-1">จัดการ</p>
        <h2 class="text-white font-black text-2xl">รูปภาพที่อัปโหลดแล้ว</h2>
      </div>
      <span class="bg-orange-500/10 border border-orange-500/25 text-orange-400 text-sm font-bold px-3 py-1">
        <?= count($uploadedImages) ?> รูป
      </span>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
      <?php foreach ($uploadedImages as $i => $img): ?>
        <div class="fade-in group relative bg-[#1e1e1e] border border-white/5 overflow-hidden aspect-[4/3]"
             style="transition-delay: <?= min($i * 0.04, 0.4) ?>s;">

          <img src="<?= htmlspecialchars($img['url']) ?>"
               alt="<?= htmlspecialchars($img['caption'] ?: $img['filename']) ?>"
               loading="lazy"
               class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

          <!-- Hover overlay with delete -->
          <div class="absolute inset-0 bg-black/0 group-hover:bg-black/60 transition-all duration-200 flex items-center justify-center opacity-0 group-hover:opacity-100">
            <form method="POST" action="/upload"
                  onsubmit="return confirm('ลบรูปนี้?')"
                  class="flex flex-col items-center gap-2">
              <input type="hidden" name="action"   value="delete" />
              <input type="hidden" name="filename" value="<?= htmlspecialchars($img['filename']) ?>" />
              <button type="submit"
                      class="w-9 h-9 bg-red-600/90 hover:bg-red-600 flex items-center justify-center transition-colors"
                      title="ลบรูปภาพ">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                  <polyline points="3 6 5 6 21 6"/>
                  <path d="M19 6l-1 14H6L5 6"/>
                  <path d="M10 11v6M14 11v6"/>
                  <path d="M9 6V4h6v2"/>
                </svg>
              </button>
            </form>
          </div>

          <!-- Bottom info bar -->
          <div class="absolute bottom-0 left-0 right-0 px-2 py-1.5 translate-y-full group-hover:translate-y-0 transition-transform duration-200"
               style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
            <?php if ($img['type']): ?>
              <span class="bg-orange-500 text-white text-[10px] font-bold px-1.5 py-0.5 mr-1">
                <?= htmlspecialchars($img['type']) ?>
              </span>
            <?php endif; ?>
            <span class="text-white/80 text-[10px]">
              <?= htmlspecialchars($img['caption'] ?: date('d/m/Y', $img['mtime'])) ?>
            </span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<?php else: ?>
<!-- Empty state -->
<section class="py-16" style="background-color: var(--bg-secondary); border-top: 1px solid var(--border);">
  <div class="text-center px-4 fade-in">
    <div class="w-16 h-16 bg-white/5 flex items-center justify-center mx-auto mb-4">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#4b5563" stroke-width="1.5">
        <rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/>
        <polyline points="21 15 16 10 5 21"/>
      </svg>
    </div>
    <p class="text-gray-600 text-base">ยังไม่มีรูปภาพ อัปโหลดรูปแรกของคุณด้านบน</p>
  </div>
</section>
<?php endif; ?>


<!-- ===================================================
     JAVASCRIPT
=================================================== -->
<script>
(function () {
  const dropZone       = document.getElementById('drop-zone');
  const fileInput      = document.getElementById('f-image');
  const placeholder    = document.getElementById('drop-placeholder');
  const previewCont    = document.getElementById('preview-container');
  const previewImg     = document.getElementById('preview-img');
  const previewMeta    = document.getElementById('preview-meta');
  const clearBtn       = document.getElementById('clear-preview');
  const submitBtn      = document.getElementById('submit-btn');
  const btnText        = document.getElementById('btn-text');
  const btnIconUpload  = document.getElementById('btn-icon-upload');
  const btnIconSpin    = document.getElementById('btn-icon-spin');
  const errImage       = document.getElementById('err-image');
  const errType        = document.getElementById('err-type');

  const MAX_BYTES = 2 * 1024 * 1024;

  // ── Image preview ──────────────────────────────────────────────────────────
  function showPreview(file) {
    if (!file || !file.type.startsWith('image/')) return;

    const reader = new FileReader();
    reader.onload = e => {
      previewImg.src = e.target.result;
      previewMeta.textContent =
        file.name + ' · ' + (file.size / 1024).toFixed(0) + ' KB';
      placeholder.classList.add('hidden');
      previewCont.classList.remove('hidden');
    };
    reader.readAsDataURL(file);
  }

  function clearPreview() {
    fileInput.value = '';
    previewImg.src  = '';
    previewCont.classList.add('hidden');
    placeholder.classList.remove('hidden');
    errImage.classList.add('hidden');
  }

  fileInput.addEventListener('change', () => {
    const file = fileInput.files[0];
    if (file) {
      if (file.size > MAX_BYTES) {
        errImage.textContent = 'ไฟล์ใหญ่เกิน 2MB (' + (file.size / 1024 / 1024).toFixed(1) + 'MB)';
        errImage.classList.remove('hidden');
        clearPreview();
        return;
      }
      errImage.classList.add('hidden');
      showPreview(file);
    }
  });

  clearBtn.addEventListener('click', e => {
    e.stopPropagation(); // prevent drop-zone click
    clearPreview();
  });

  // ── Drag-and-drop ──────────────────────────────────────────────────────────
  dropZone.addEventListener('dragover', e => {
    e.preventDefault();
    dropZone.style.borderColor = 'var(--accent)';
  });
  dropZone.addEventListener('dragleave', () => {
    dropZone.style.borderColor = '';
  });
  dropZone.addEventListener('drop', e => {
    e.preventDefault();
    dropZone.style.borderColor = '';
    const file = e.dataTransfer?.files[0];
    if (file) {
      // Assign to file input (creates a DataTransfer)
      const dt = new DataTransfer();
      dt.items.add(file);
      fileInput.files = dt.files;
      fileInput.dispatchEvent(new Event('change'));
    }
  });

  // ── Form submit ────────────────────────────────────────────────────────────
  document.getElementById('upload-form').addEventListener('submit', function (e) {
    let valid = true;

    if (!fileInput.files.length || !fileInput.files[0]) {
      errImage.textContent = 'กรุณาเลือกรูปภาพ';
      errImage.classList.remove('hidden');
      valid = false;
    }

    const typeVal = document.getElementById('f-type').value;
    if (!typeVal) {
      errType.classList.remove('hidden');
      valid = false;
    } else {
      errType.classList.add('hidden');
    }

    if (!valid) { e.preventDefault(); return; }

    // Loading state
    submitBtn.disabled = true;
    btnText.textContent = 'กำลังอัปโหลด...';
    btnIconUpload.classList.add('hidden');
    btnIconSpin.classList.remove('hidden');
  });

  // Live clear type error
  document.getElementById('f-type').addEventListener('change', function () {
    if (this.value) errType.classList.add('hidden');
  });
})();
</script>
