<!-- ===================================================
     404 NOT FOUND
=================================================== -->
<section class="min-h-[80vh] flex items-center justify-center relative overflow-hidden"
         style="background-color: var(--bg-primary);">

  <!-- Background texture -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true"
       style="background-image: repeating-linear-gradient(-45deg, transparent, transparent 30px, rgba(249,115,22,0.02) 30px, rgba(249,115,22,0.02) 31px);"></div>

  <div class="relative text-center px-6 fade-in">
    <!-- Large 404 -->
    <div class="font-black leading-none mb-6 select-none"
         style="font-size: clamp(6rem, 20vw, 14rem); color: var(--accent); opacity: 0.15; line-height: 1;">
      404
    </div>

    <!-- Icon + message overlaid on top -->
    <div style="margin-top: -4rem;">
      <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center"
           style="background-color: rgba(var(--accent-rgb),0.1); border: 1px solid rgba(var(--accent-rgb),0.25);">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2">
          <circle cx="11" cy="11" r="8"/>
          <line x1="21" y1="21" x2="16.65" y2="16.65"/>
          <line x1="11" y1="8" x2="11" y2="12"/>
          <circle cx="11" cy="15" r="0.5" fill="var(--accent)"/>
        </svg>
      </div>

      <h1 class="text-white font-black text-3xl sm:text-4xl mb-4">ไม่พบหน้าที่คุณต้องการ</h1>
      <p class="text-gray-400 text-lg mb-10 max-w-md mx-auto leading-relaxed">
        หน้านี้อาจถูกลบ หรือ URL ไม่ถูกต้อง<br>
        ลองตรวจสอบลิงก์อีกครั้ง หรือกลับไปหน้าแรก
      </p>

      <!-- Actions -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="<?= url('/') ?>"
           class="inline-flex items-center justify-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-bold px-8 py-4 transition-all duration-200 hover:-translate-y-0.5">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
            <polyline points="9 22 9 12 15 12 15 22"/>
          </svg>
          กลับหน้าแรก
        </a>
        <a href="<?= url('/contact') ?>"
           class="inline-flex items-center justify-center gap-2 bg-transparent border border-white/20 hover:border-orange-500 text-gray-300 hover:text-orange-400 font-bold px-8 py-4 transition-all duration-200">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          ติดต่อเรา
        </a>
      </div>

      <!-- Quick nav -->
      <div class="mt-10 flex flex-wrap justify-center gap-4">
        <a href="<?= url('/about') ?>"   class="text-gray-500 hover:text-orange-400 text-sm transition-colors">เกี่ยวกับเรา</a>
        <span class="text-gray-700">·</span>
        <a href="<?= url('/gallery') ?>" class="text-gray-500 hover:text-orange-400 text-sm transition-colors">ผลงาน</a>
        <span class="text-gray-700">·</span>
        <a href="tel:0890577047"         class="text-gray-500 hover:text-orange-400 text-sm transition-colors">โทร 089-057-7047</a>
      </div>
    </div>
  </div>
</section>
