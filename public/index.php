<?php
/**
 * RBS Wall - Main Router
 * Routes clean URLs to their corresponding page files
 */

define('ROOT_PATH', dirname(__DIR__));
define('BASE_URL', '');

// Get route from query string (set by .htaccess)
$route = trim($_GET['route'] ?? '', '/');

// Normalize empty route to home
if ($route === '' || $route === 'index.php') {
    $route = '';
}

// Route map: route => page file
$routes = [
    ''        => 'home',
    'about'   => 'about',
    'gallery' => 'gallery',
    'contact' => 'contact',
];

// Determine page to load
if (array_key_exists($route, $routes)) {
    $page     = $routes[$route];
    $pageFile = ROOT_PATH . '/pages/' . $page . '.php';
} else {
    $page     = '404';
    $pageFile = null;
    http_response_code(404);
}

// Page titles
$titles = [
    'home'    => 'RBS Wall – บริการรับเหมาทำรั้ว ครบวงจร',
    'about'   => 'เกี่ยวกับเรา – RBS Wall',
    'gallery' => 'ผลงานของเรา – RBS Wall',
    'contact' => 'ติดต่อเรา – RBS Wall',
    '404'     => '404 – ไม่พบหน้า | RBS Wall',
];

$currentTitle = $titles[$page] ?? 'RBS Wall';
$currentPage  = $page;

// Load header
require ROOT_PATH . '/includes/header.php';

// Load page content
if ($pageFile && file_exists($pageFile)) {
    require $pageFile;
} else {
    // 404 inline
    echo '<section class="min-h-screen flex items-center justify-center bg-[#111111]">';
    echo '<div class="text-center px-6">';
    echo '<p class="text-8xl font-black text-orange-500 mb-4">404</p>';
    echo '<h1 class="text-3xl font-bold text-white mb-4">ไม่พบหน้าที่คุณต้องการ</h1>';
    echo '<p class="text-gray-400 mb-8">หน้านี้อาจถูกลบหรือ URL ไม่ถูกต้อง</p>';
    echo '<a href="/" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold px-8 py-3 transition-colors duration-200">กลับหน้าแรก</a>';
    echo '</div></section>';
}

// Load footer
require ROOT_PATH . '/includes/footer.php';
