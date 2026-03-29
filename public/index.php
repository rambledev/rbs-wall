<?php
/**
 * Main Router – พี่หญิง ล้อมรั้วทั่วไทย
 * Routes clean URLs to their corresponding page files
 */

define('ROOT_PATH', dirname(__DIR__));
define('BASE_URL', '');

/**
 * Generate a site URL with the correct base path.
 * Usage: url('/contact') → '/contact'
 */
function url(string $path = ''): string {
    return BASE_URL . '/' . ltrim($path, '/');
}

// Sanitize route: allow only alphanumeric + hyphens, strip path traversal
$rawRoute = $_GET['route'] ?? '';
$route    = preg_replace('/[^a-z0-9\-]/', '', strtolower(trim($rawRoute, '/')));

// Normalize empty route and direct index.php access
if ($route === '' || $route === 'indexphp') {
    $route = '';
}

// Route map: route slug => page file name
$routes = [
    ''        => 'home',
    'about'   => 'about',
    'gallery' => 'gallery',
    'contact' => 'contact',
];

// Resolve page
if (array_key_exists($route, $routes)) {
    $page     = $routes[$route];
    $pageFile = ROOT_PATH . '/pages/' . $page . '.php';
} else {
    $page     = '404';
    $pageFile = ROOT_PATH . '/pages/404.php';
    http_response_code(404);
}

// Page titles & meta descriptions
$titles = [
    'home'    => 'พี่หญิง ล้อมรั้วทั่วไทย – รั้วลวดหนาม รั้วเมทัลชีท รั้วคาวบอย ครบวงจร',
    'about'   => 'เกี่ยวกับเรา – พี่หญิง ล้อมรั้วทั่วไทย',
    'gallery' => 'ผลงานของเรา – พี่หญิง ล้อมรั้วทั่วไทย',
    'contact' => 'ติดต่อเรา – พี่หญิง ล้อมรั้วทั่วไทย',
    '404'     => '404 ไม่พบหน้า – พี่หญิง ล้อมรั้วทั่วไทย',
];

$metaDescriptions = [
    'home'    => 'รับเหมาทำรั้วครบวงจร รั้วลวดหนาม รั้วเมทัลชีท รั้วคาวบอย กำแพงกั้นดิน ติดตั้งประตู ทั่วภาคอีสาน ประเมินหน้างานฟรี โทร 089-057-7047',
    'about'   => 'พี่หญิง ล้อมรั้วทั่วไทย ประสบการณ์กว่า 10 ปี ทีมช่างมืออาชีพ งานคุณภาพ ราคายุติธรรม บริการทั่วภาคอีสาน',
    'gallery' => 'ตัวอย่างผลงานจริงกว่า 500 โปรเจค รั้วลวดหนาม รั้วเมทัลชีท รั้วคาวบอย กำแพงกั้นดิน ประตูบานเลื่อน-บานสวิง',
    'contact' => 'ติดต่อ พี่หญิง ล้อมรั้วทั่วไทย โทร 089-057-7047 / 080-619-9152 LINE: 0806199152 รับประเมินหน้างานฟรี',
    '404'     => 'ไม่พบหน้าที่คุณต้องการ กลับไปหน้าแรก พี่หญิง ล้อมรั้วทั่วไทย',
];

$currentTitle       = $titles[$page]           ?? 'พี่หญิง ล้อมรั้วทั่วไทย';
$currentDescription = $metaDescriptions[$page] ?? 'รับเหมาทำรั้วครบวงจร บริการทั่วภาคอีสาน';
$currentPage        = $page;

// Load header
require ROOT_PATH . '/includes/header.php';

// Load page content
if (file_exists($pageFile)) {
    require $pageFile;
} else {
    // Fallback inline 404 if pages/404.php is missing
    echo '<section class="min-h-screen flex items-center justify-center" style="background-color:var(--bg-primary)">';
    echo '<div class="text-center px-6">';
    echo '<p class="text-8xl font-black" style="color:var(--accent)">404</p>';
    echo '<h1 class="text-3xl font-bold text-white mb-4">ไม่พบหน้าที่คุณต้องการ</h1>';
    echo '<a href="' . url('/') . '" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold px-8 py-3 mt-6 transition-colors">กลับหน้าแรก</a>';
    echo '</div></section>';
}

// Load footer
require ROOT_PATH . '/includes/footer.php';
