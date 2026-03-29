<?php
/**
 * Contact Page – พี่หญิง ล้อมรั้วทั่วไทย
 */
?>

<!-- ===================================================
     PAGE HERO
=================================================== -->
<section class="relative py-20 md:py-28 overflow-hidden" style="background-color: var(--bg-secondary);">
  <div class="absolute inset-0 pointer-events-none"
       style="background: repeating-linear-gradient(-45deg, transparent, transparent 30px, rgba(249,115,22,0.025) 30px, rgba(249,115,22,0.025) 31px);">
  </div>
  <div class="absolute top-0 right-0 w-2 h-full bg-orange-500 opacity-40"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-3">พูดคุยกับเรา</p>
    <h1 class="section-title center text-white font-black text-4xl sm:text-5xl mb-5">ติดต่อเรา</h1>
    <p class="text-gray-400 text-lg max-w-xl mx-auto">
      กรอกฟอร์มด้านล่าง หรือติดต่อโดยตรงผ่านช่องทางที่สะดวก เราตอบกลับภายใน 24 ชั่วโมง
    </p>
  </div>
</section>


<!-- ===================================================
     CONTACT CARDS
=================================================== -->
<section class="py-12" style="background-color: var(--bg-primary);">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

      <!-- Phone -->
      <div class="fade-in service-card bg-[#1e1e1e] border border-white/5 p-6 text-center">
        <div class="w-14 h-14 bg-orange-500/10 border border-orange-500/20 flex items-center justify-center mx-auto mb-4">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
        </div>
        <h3 class="text-white font-bold text-lg mb-1">โทรศัพท์</h3>
        <p class="text-orange-400 font-bold text-xl mb-1">089-057-7047</p>
        <p class="text-orange-400 font-bold text-xl mb-4">080-619-9152</p>
        <a href="tel:0890577047"
           class="inline-block w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2.5 text-sm transition-colors duration-200">
          โทรเลย
        </a>
      </div>

      <!-- LINE -->
      <div class="fade-in service-card bg-[#1e1e1e] border border-white/5 p-6 text-center" style="transition-delay: 0.1s;">
        <div class="w-14 h-14 bg-[#06c755]/10 border border-[#06c755]/20 flex items-center justify-center mx-auto mb-4">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="#06c755">
            <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
          </svg>
        </div>
        <h3 class="text-white font-bold text-lg mb-1">LINE Official</h3>
        <p class="text-[#06c755] font-bold text-xl mb-4">0806199152</p>
        <a href="https://line.me/ti/p/~0806199152"
           class="inline-block w-full bg-[#06c755] hover:bg-[#05b34c] text-white font-bold py-2.5 text-sm transition-colors duration-200">
          เพิ่มเพื่อน
        </a>
      </div>

      <!-- Facebook -->
      <div class="fade-in service-card bg-[#1e1e1e] border border-white/5 p-6 text-center" style="transition-delay: 0.2s;">
        <div class="w-14 h-14 bg-[#1877f2]/10 border border-[#1877f2]/20 flex items-center justify-center mx-auto mb-4">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="#1877f2">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
          </svg>
        </div>
        <h3 class="text-white font-bold text-lg mb-1">Facebook Page</h3>
        <p class="text-[#1877f2] font-bold text-xl mb-4">พี่หญิงล้อมรั้วทั่วไทย</p>
        <a href="https://www.facebook.com/phiihyingthawaithy"
           class="inline-block w-full bg-[#1877f2] hover:bg-[#1464d8] text-white font-bold py-2.5 text-sm transition-colors duration-200">
          ดูเพจ
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ===================================================
     MAP + FORM
=================================================== -->
<section class="py-16 md:py-24" style="background-color: var(--bg-primary);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

      <!-- Left: Contact Form -->
      <div class="fade-in">
        <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-3">ส่งข้อความ</p>
        <h2 class="section-title text-white font-black text-3xl mb-8">ขอใบเสนอราคาฟรี</h2>
        <p class="text-gray-400 text-sm mb-8 -mt-4">
          กรอกข้อมูลด้านล่าง เราจะติดต่อกลับภายใน 24 ชั่วโมง
        </p>

        <!-- Success message (hidden by default) -->
        <div id="success-msg"
             class="hidden bg-green-500/10 border border-green-500/30 p-6 mb-6 text-center"
             role="alert">
          <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
          </div>
          <h3 class="text-green-400 font-bold text-xl mb-2">ส่งข้อมูลสำเร็จ!</h3>
          <p class="text-gray-400 text-sm">
            ขอบคุณที่ติดต่อ พี่หญิง ล้อมรั้วทั่วไทย<br>
            เราจะโทรกลับหาคุณภายใน 24 ชั่วโมง
          </p>
        </div>

        <!-- Form -->
        <div id="contact-form">
          <div class="space-y-5">

            <!-- Name -->
            <div>
              <label for="f-name" class="block text-sm font-semibold text-gray-300 mb-2">
                ชื่อ-นามสกุล <span class="text-orange-500">*</span>
              </label>
              <input id="f-name" type="text" placeholder="เช่น สมชาย ใจดี"
                     class="w-full bg-[#1e1e1e] border border-white/10 focus:border-orange-500 text-white placeholder-gray-600 px-4 py-3 text-sm outline-none transition-colors duration-200" />
              <p id="err-name" class="hidden text-red-400 text-xs mt-1">กรุณากรอกชื่อ-นามสกุล</p>
            </div>

            <!-- Phone -->
            <div>
              <label for="f-phone" class="block text-sm font-semibold text-gray-300 mb-2">
                เบอร์โทรศัพท์ <span class="text-orange-500">*</span>
              </label>
              <input id="f-phone" type="tel" placeholder="เช่น 081-234-5678"
                     class="w-full bg-[#1e1e1e] border border-white/10 focus:border-orange-500 text-white placeholder-gray-600 px-4 py-3 text-sm outline-none transition-colors duration-200" />
              <p id="err-phone" class="hidden text-red-400 text-xs mt-1">กรุณากรอกเบอร์โทรศัพท์</p>
            </div>

            <!-- Fence type -->
            <div>
              <label for="f-type" class="block text-sm font-semibold text-gray-300 mb-2">
                ประเภทรั้วที่ต้องการ
              </label>
              <div class="relative">
                <select id="f-type"
                        class="w-full bg-[#1e1e1e] border border-white/10 focus:border-orange-500 text-gray-300 px-4 py-3 text-sm outline-none transition-colors duration-200 appearance-none cursor-pointer">
                  <option value="">-- เลือกประเภทรั้ว --</option>
                  <option value="รั้วลวดหนาม">รั้วลวดหนาม</option>
                  <option value="รั้วเมทัลชีท">รั้วเมทัลชีท</option>
                  <option value="รั้วคาวบอย">รั้วคาวบอย</option>
                  <option value="กำแพงกั้นดิน">กำแพงกั้นดิน</option>
                  <option value="ติดตั้งประตูบานเลื่อน">ติดตั้งประตูบานเลื่อน</option>
                  <option value="ติดตั้งประตูบานสวิง">ติดตั้งประตูบานสวิง</option>
                  <option value="ไม่แน่ใจ / ขอคำแนะนำ">ไม่แน่ใจ / ขอคำแนะนำ</option>
                </select>
                <div class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                    <polyline points="6 9 12 15 18 9"/>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Message -->
            <div>
              <label for="f-msg" class="block text-sm font-semibold text-gray-300 mb-2">
                รายละเอียดงาน <span class="text-orange-500">*</span>
              </label>
              <textarea id="f-msg" rows="5"
                        placeholder="เช่น ต้องการทำรั้วรอบบ้าน ความยาวประมาณ 40 เมตร บ้านอยู่จังหวัดขอนแก่น"
                        class="w-full bg-[#1e1e1e] border border-white/10 focus:border-orange-500 text-white placeholder-gray-600 px-4 py-3 text-sm outline-none transition-colors duration-200 resize-none"></textarea>
              <p id="err-msg" class="hidden text-red-400 text-xs mt-1">กรุณากรอกรายละเอียดงาน</p>
            </div>

            <!-- Submit -->
            <button id="submit-btn"
                    class="w-full bg-orange-500 hover:bg-orange-600 active:bg-orange-700 text-white font-bold py-4 text-base transition-all duration-200 flex items-center justify-center gap-2">
              <svg id="btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>
              </svg>
              <span id="btn-text">ส่งคำขอใบเสนอราคา</span>
            </button>

            <p class="text-gray-600 text-xs text-center">
              <!-- Future API integration: fetch('/api/quote', { method: 'POST', body: JSON.stringify({name, phone, type, message}) }) -->
              ข้อมูลของคุณปลอดภัย ไม่มีการส่งต่อให้บุคคลที่สาม
            </p>

          </div>
        </div>
      </div>

      <!-- Right: Info + Map placeholder -->
      <div class="fade-in" style="transition-delay: 0.15s;">

        <!-- Info block -->
        <div class="bg-[#1e1e1e] border border-white/5 p-8 mb-6">
          <h3 class="text-white font-bold text-xl mb-6">ข้อมูลติดต่อ</h3>
          <ul class="space-y-5">
            <li class="flex items-start gap-4">
              <div class="w-10 h-10 bg-orange-500/10 border border-orange-500/20 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-500 text-xs font-semibold uppercase tracking-wide mb-0.5">โทรศัพท์</p>
                <a href="tel:0890577047" class="text-white font-bold text-lg hover:text-orange-400 transition-colors">089-057-7047</a><br>
              <a href="tel:0806199152" class="text-white font-bold hover:text-orange-400 transition-colors">080-619-9152</a>
              </div>
            </li>
            <li class="flex items-start gap-4">
              <div class="w-10 h-10 bg-orange-500/10 border border-orange-500/20 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                  <polyline points="22,6 12,13 2,6"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-500 text-xs font-semibold uppercase tracking-wide mb-0.5">LINE / Facebook</p>
                <p class="text-white font-medium">0806199152</p>
              <p class="text-gray-400 text-sm">Facebook: พี่หญิงล้อมรั้วทั่วไทย</p>
              </div>
            </li>
            <li class="flex items-start gap-4">
              <div class="w-10 h-10 bg-orange-500/10 border border-orange-500/20 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-500 text-xs font-semibold uppercase tracking-wide mb-0.5">เวลาทำการ</p>
                <p class="text-white font-medium">จันทร์ – เสาร์</p>
                <p class="text-gray-400 text-sm">08:00 – 18:00 น.</p>
              </div>
            </li>
            <li class="flex items-start gap-4">
              <div class="w-10 h-10 bg-orange-500/10 border border-orange-500/20 flex items-center justify-center flex-shrink-0">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
                  <circle cx="12" cy="10" r="3"/>
                  <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-500 text-xs font-semibold uppercase tracking-wide mb-0.5">พื้นที่บริการ</p>
                <p class="text-white font-medium">ทั่วภาคอีสาน</p>
                <p class="text-gray-400 text-sm">ขอนแก่น อุดรธานี นครราชสีมา และจังหวัดใกล้เคียง</p>
              </div>
            </li>
          </ul>
        </div>

        <!-- Map placeholder -->
        <div class="relative bg-[#1a1a1a] border border-white/5 overflow-hidden" style="height: 220px;">
          <!-- Grid lines (map-like) -->
          <svg class="absolute inset-0 w-full h-full opacity-20" viewBox="0 0 400 220" preserveAspectRatio="none">
            <defs>
              <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#f97316" stroke-width="0.5"/>
              </pattern>
            </defs>
            <rect width="400" height="220" fill="url(#grid)"/>
            <!-- Road lines -->
            <line x1="0" y1="110" x2="400" y2="110" stroke="#f97316" stroke-width="2" opacity="0.4"/>
            <line x1="200" y1="0" x2="200" y2="220" stroke="#f97316" stroke-width="2" opacity="0.4"/>
            <line x1="0" y1="70" x2="400" y2="70" stroke="#555" stroke-width="1"/>
            <line x1="0" y1="150" x2="400" y2="150" stroke="#555" stroke-width="1"/>
            <line x1="120" y1="0" x2="120" y2="220" stroke="#555" stroke-width="1"/>
            <line x1="280" y1="0" x2="280" y2="220" stroke="#555" stroke-width="1"/>
          </svg>

          <!-- Pin -->
          <div class="absolute inset-0 flex flex-col items-center justify-center gap-2">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="#f97316">
              <circle cx="12" cy="10" r="3" fill="white"/>
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
            </svg>
            <span class="text-white font-bold text-sm bg-black/60 px-3 py-1">📍 ให้บริการทั่วภาคอีสาน</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<script>
// ── Contact Form Validation & Submit ────────────────────
const form       = document.getElementById('contact-form');
const successMsg = document.getElementById('success-msg');
const submitBtn  = document.getElementById('submit-btn');
const btnText    = document.getElementById('btn-text');
const btnIcon    = document.getElementById('btn-icon');

function showError(id, show) {
  document.getElementById(id).classList.toggle('hidden', !show);
}

function setInputError(inputId, hasError) {
  const el = document.getElementById(inputId);
  if (hasError) {
    el.classList.add('border-red-500');
    el.classList.remove('border-white/10');
  } else {
    el.classList.remove('border-red-500');
    el.classList.add('border-white/10');
  }
}

function validateForm() {
  const name  = document.getElementById('f-name').value.trim();
  const phone = document.getElementById('f-phone').value.trim();
  const msg   = document.getElementById('f-msg').value.trim();

  let valid = true;

  if (!name)  { showError('err-name',  true); setInputError('f-name',  true); valid = false; }
  else        { showError('err-name',  false); setInputError('f-name',  false); }

  if (!phone) { showError('err-phone', true); setInputError('f-phone', true); valid = false; }
  else        { showError('err-phone', false); setInputError('f-phone', false); }

  if (!msg)   { showError('err-msg',   true); setInputError('f-msg',   true); valid = false; }
  else        { showError('err-msg',   false); setInputError('f-msg',   false); }

  return valid;
}

submitBtn.addEventListener('click', () => {
  if (!validateForm()) return;

  // Loading state
  submitBtn.disabled = true;
  btnText.textContent = 'กำลังส่ง...';
  btnIcon.innerHTML = '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>';

  // Mock submission (replace with real API call)
  setTimeout(() => {
    /*
     * Future API integration:
     * fetch('/api/quote', {
     *   method: 'POST',
     *   headers: { 'Content-Type': 'application/json' },
     *   body: JSON.stringify({
     *     name:    document.getElementById('f-name').value.trim(),
     *     phone:   document.getElementById('f-phone').value.trim(),
     *     type:    document.getElementById('f-type').value,
     *     message: document.getElementById('f-msg').value.trim(),
     *   })
     * })
     */

    // Show success
    form.style.opacity = '0';
    form.style.transform = 'translateY(-10px)';
    form.style.transition = 'opacity 0.3s, transform 0.3s';

    setTimeout(() => {
      form.style.display = 'none';
      successMsg.classList.remove('hidden');
      successMsg.style.opacity = '0';
      successMsg.style.transform = 'scale(0.95)';
      successMsg.style.transition = 'opacity 0.4s, transform 0.4s';

      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          successMsg.style.opacity = '1';
          successMsg.style.transform = 'scale(1)';
        });
      });
    }, 300);
  }, 1200);
});

// Live validation on blur
['f-name', 'f-phone', 'f-msg'].forEach(id => {
  document.getElementById(id).addEventListener('blur', function() {
    const empty = !this.value.trim();
    const errId = 'err-' + id.replace('f-', '');
    showError(errId, empty);
    setInputError(id, empty);
  });
});
</script>
