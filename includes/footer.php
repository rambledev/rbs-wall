<!-- ========== FOOTER ========== -->
<footer class="bg-[#0a0a0a] border-t-4 border-orange-500 pt-14 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">

      <!-- Brand -->
      <div>
        <div class="flex items-center gap-2 mb-4">
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
        </div>
        <p class="text-gray-400 text-sm leading-relaxed mb-4">
          บริการรับเหมาทำรั้วครบวงจร รั้วลวดหนาม รั้วเมทัลชีท<br>
          รั้วคาวบอย กำแพงกั้นดิน ติดตั้งประตูบานเลื่อน-บานสวิง
        </p>
        <div class="flex gap-3">
          <a href="tel:0890577047"
             class="w-9 h-9 bg-[#1e1e1e] hover:bg-orange-500 flex items-center justify-center transition-colors duration-200"
             aria-label="โทร">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
            </svg>
          </a>
          <a href="https://line.me/ti/p/~0806199152"
             class="w-9 h-9 bg-[#1e1e1e] hover:bg-[#06c755] flex items-center justify-center transition-colors duration-200"
             aria-label="LINE">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
              <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
            </svg>
          </a>
          <a href="https://www.facebook.com/phiihyingthawaithy"
             class="w-9 h-9 bg-[#1e1e1e] hover:bg-[#1877f2] flex items-center justify-center transition-colors duration-200"
             aria-label="Facebook">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Links -->
      <div>
        <h3 class="text-white font-bold text-base mb-4 tracking-wide">บริการของเรา</h3>
        <ul class="space-y-2">
          <?php
          $services = ['รั้วลวดหนาม','รั้วเมทัลชีท','รั้วคาวบอย','รั้วกำแพงกั้นดิน','ติดตั้งประตู','บานเลื่อน-บานสวิง'];
          foreach ($services as $s): ?>
            <li>
              <a href="/contact" class="text-gray-400 hover:text-orange-400 text-sm transition-colors duration-200 flex items-center gap-2">
                <span class="w-1.5 h-1.5 bg-orange-500 rounded-full flex-shrink-0"></span>
                <?= $s ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <h3 class="text-white font-bold text-base mt-6 mb-4 tracking-wide">ข้อมูล</h3>
        <ul class="space-y-2">
          <li><a href="/" class="text-gray-400 hover:text-orange-400 text-sm transition-colors duration-200">หน้าแรก</a></li>
          <li><a href="/about" class="text-gray-400 hover:text-orange-400 text-sm transition-colors duration-200">เกี่ยวกับเรา</a></li>
          <li><a href="/gallery" class="text-gray-400 hover:text-orange-400 text-sm transition-colors duration-200">ผลงาน</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h3 class="text-white font-bold text-base mb-4 tracking-wide">ติดต่อเรา</h3>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <svg class="flex-shrink-0 mt-0.5" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
            </svg>
            <div>
              <p class="text-gray-300 text-sm font-medium">โทรศัพท์</p>
              <a href="tel:0890577047" class="text-orange-400 hover:text-orange-300 text-sm transition-colors">089-057-7047</a><br>
              <a href="tel:0806199152" class="text-orange-400 hover:text-orange-300 text-sm transition-colors">080-619-9152</a>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <svg class="flex-shrink-0 mt-0.5" width="18" height="18" viewBox="0 0 24 24" fill="#f97316">
              <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
            </svg>
            <div>
              <p class="text-gray-300 text-sm font-medium">LINE</p>
              <span class="text-orange-400 text-sm">0806199152</span>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <svg class="flex-shrink-0 mt-0.5" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
              <circle cx="12" cy="10" r="3"/>
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
            </svg>
            <div>
              <p class="text-gray-300 text-sm font-medium">พื้นที่ให้บริการ</p>
              <span class="text-gray-400 text-sm">ทั่วภาคอีสาน</span>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <svg class="flex-shrink-0 mt-0.5" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2">
              <circle cx="12" cy="12" r="10"/>
              <polyline points="12 6 12 12 16 14"/>
            </svg>
            <div>
              <p class="text-gray-300 text-sm font-medium">เวลาทำการ</p>
              <span class="text-gray-400 text-sm">จันทร์–เสาร์ 8:00–18:00 น.</span>
            </div>
          </li>
        </ul>
      </div>

    </div>

    <!-- Bottom bar -->
    <div class="border-t border-white/10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-gray-500 text-sm text-center">
        &copy; <?= date('Y') ?> พี่หญิง ล้อมรั้วทั่วไทย. สงวนลิขสิทธิ์ทั้งหมด
      </p>
      <p class="text-gray-600 text-xs">
        รั้วลวดหนาม · รั้วเมทัลชีท · รั้วคาวบอย · ติดตั้งประตู
      </p>
    </div>
  </div>
</footer>

<!-- ── Scroll-reveal: run after all content loaded ── -->
<script>
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
</script>

</body>
</html>
