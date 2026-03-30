<?php
/**
 * Home Page – พี่หญิง ล้อมรั้วทั่วไทย (Modern Clean Green Theme)
 */

// Gallery items - อ้างอิง Path จากตำแหน่งไฟล์ home.php เข้าไปยังโฟลเดอร์ images
$galleryItems = [
    [
        'label' => 'รั้วลวดหนาม มาตรฐาน', 
        'type' => 'รั้วลวดหนาม', 
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgKSxZGJnVD-UL2bcWdvZVA5L7dZWTQSd33Q&s' // แก้ไข: อ้างอิงเข้าโฟลเดอร์ images โดยตรง
    ],
    [
        'label' => 'รั้วเมทัลชีท สีโมเดิร์น', 
        'type' => 'รั้วเมทัลชีท', 
        'img' => 'https://justfence.in/cdn/shop/files/Galvalume_sheet_fence_4.png?v=1753019269&width=1200' // แก้ไข: นามสกุลไฟล์เป็น .webp ตามในโฟลเดอร์
    ],
    [
        'label' => 'รั้วคาวบอย สีขาวสะอาดตา', 
        'type' => 'รั้วคาวบอย', 
        'img' => 'https://pkfence.com/img-post/20211025133012.jpg'  // แก้ไข: ไฟล์ที่ 3 เป็น .jpg ตามโครงสร้างจริง
    ],
    [
        'label' => 'กำแพงกันดิน แข็งแรง',     
        'type' => 'กำแพงกั้นดิน',  
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjEDavQvPdvizhRaxsTCIbqHJLsytuSz04uA&s'
    ],
    [
        'label' => 'ประตูบานเลื่อน หน้าบ้าน',   
        'type' => 'ติดตั้งประตู',  
        'img' => 'https://static.wixstatic.com/media/c9c447_90f01d58b6c74bc1af676fd8c183a372~mv2.jpg/v1/fill/w_750,h_542,al_c,q_85,enc_avif,quality_auto/c9c447_90f01d58b6c74bc1af676fd8c183a372~mv2.jpg'
    ],
    [
        'label' => 'งานล้อมที่ดิน จัดสรร',      
        'type' => 'บริการล้อมรั้ว', 
        'img' => 'https://landyestate.com/wp-content/uploads/2022/09/landy-Estate-%E0%B9%80%E0%B8%A5%E0%B8%B7%E0%B8%AD%E0%B8%81%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%94%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%B3%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%88%E0%B8%B1%E0%B8%94%E0%B8%AA%E0%B8%A3%E0%B8%A3-1.jpg'
    ],
];
?>

<style>
  :root {
    --primary-green: #166534; /* Green-800 */
    --accent-green: #22c55e;  /* Green-500 */
    --soft-bg: #f8fafc;
    --text-dark: #1e293b;
  }

  body { font-family: 'Sarabun', sans-serif; color: var(--text-dark); background-color: white; }

  .btn-line { background-color: #06c755; color: white; transition: 0.3s; text-decoration: none; display: inline-flex; }
  .btn-line:hover { background-color: #05b34c; transform: translateY(-2px); }

  .btn-call { background-color: var(--primary-green); color: white; transition: 0.3s; text-decoration: none; display: inline-flex; }
  .btn-call:hover { background-color: #14532d; transform: translateY(-2px); }

  .service-card {
    background: white;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
  }
  .service-card:hover {
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    border-color: var(--accent-green);
  }

  .gallery-img-container {
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    aspect-ratio: 1/1; /* ปรับเป็น 1:1 ตามขนาดรูป 1080x1080 ที่คุณต้องการ */
    background: #f1f5f9;
  }
  .gallery-img-container img {
    width: 100%; height: 100%; object-fit: cover; transition: 0.5s;
  }
  .gallery-img-container:hover img { transform: scale(1.1); }

  .section-tag {
    color: var(--primary-green);
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    display: inline-block;
    border-bottom: 3px solid var(--accent-green);
    margin-bottom: 1rem;
  }
</style>

<section id="hero" class="relative bg-slate-50 py-20 lg:py-32 overflow-hidden">
  <div class="absolute top-0 right-0 w-1/3 h-full opacity-10 pointer-events-none">
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
      <path fill="#166534" d="M44.7,-76.4C58.3,-69.2,70.1,-58,78.5,-44.6C86.9,-31.2,92,-15.6,90.1,-0.6C88.2,14.4,79.3,28.8,69.5,41.2C59.7,53.5,49,63.7,36.5,71.2C24,78.7,9.7,83.4,-4.3,90.8C-18.3,98.2,-36.5,108.3,-50.2,103C-63.8,97.7,-72.9,77.1,-79.8,59.3C-86.7,41.4,-91.4,26.4,-92.4,11.2C-93.5,-4,-90.8,-19.4,-83.4,-32.8C-76.1,-46.1,-63.9,-57.4,-50.4,-64.7C-36.9,-72,-21.9,-75.2,-3.5,-69.2C14.9,-63.1,29.8,-47.8,44.7,-76.4Z" transform="translate(100 100)" />
    </svg>
  </div>

  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <div>
      <span class="bg-green-100 text-green-800 px-4 py-1 rounded-full text-sm font-bold mb-6 inline-block">
        🌿 บริการทั่วประเทศ ประเมินฟรี
      </span>
      <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight mb-6">
        พี่หญิง <span class="text-green-700">ล้อมรั้วทั่วไทย</span><br>
        คุณภาพดี ราคากันเอง
      </h1>
      <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-lg">
        รับเหมาทำรั้วทุกชนิด รั้วลวดหนาม รั้วเมทัลชีท รั้วคาวบอย 
        ดูแลงานโดยช่างมืออาชีพ แข็งแรง ทนทาน ไม่ทิ้งงานแน่นอนค่ะ
      </p>
      
      <div class="flex flex-wrap gap-4">
        <a href="https://line.me/ti/p/~0806199152" class="btn-line px-8 py-4 rounded-xl font-bold flex items-center gap-2 shadow-lg">
          ทักไลน์สอบถาม
        </a>
        <a href="tel:0890577047" class="btn-call px-8 py-4 rounded-xl font-bold flex items-center gap-2 shadow-lg">
          ☎️ 089-057-7047
        </a>
      </div>
    </div>

    <div class="relative">
      <div class="rounded-3xl overflow-hidden shadow-2xl border-8 border-white">
        <img src="https://images.unsplash.com/photo-1595113316349-9fa4ee24f884?q=80&w=1000&auto=format&fit=crop" alt="งานติดตั้งรั้ว" class="w-full h-auto">
      </div>
    </div>
  </div>
</section>

<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
      <div>
        <span class="section-tag">ผลงานที่ผ่านมา</span>
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900">รูปถ่ายจากหน้างานจริง</h2>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach($galleryItems as $item): ?>
      <div class="group cursor-pointer">
        <div class="gallery-img-container shadow-md border-4 border-white transition-all hover:border-green-600">
          <img src="<?= $item['img'] ?>" alt="<?= $item['label'] ?>" onerror="this.src='https://placehold.co/1080x1080?text=No+Image'" loading="lazy">
        </div>
        <div class="mt-4">
            <span class="text-[10px] font-bold tracking-wider uppercase text-green-700 bg-green-100 px-2 py-1 rounded"><?= $item['type'] ?></span>
            <h4 class="font-bold text-slate-800 mt-2"><?= $item['label'] ?></h4>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>