<?php
/**
 * Upload Handler – Helper functions for image upload system
 * พี่หญิง ล้อมรั้วทั่วไทย
 *
 * Captions are stored as a JSON sidecar file (no database required).
 * Each entry: { "1700000000_1234.jpg": { "caption": "...", "type": "..." } }
 */

// ── Constants ────────────────────────────────────────────────────────────────

define('UPLOAD_DIR',     ROOT_PATH . '/public/uploads/');
define('UPLOAD_URL',     '/uploads/');
define('CAPTIONS_FILE',  UPLOAD_DIR . 'captions.json');
define('MAX_FILE_SIZE',  2 * 1024 * 1024); // 2 MB

// MIME types validated server-side via finfo (not trusting $_FILES['type'])
define('ALLOWED_MIME', ['image/jpeg', 'image/png', 'image/webp']);
define('ALLOWED_EXT',  ['jpg', 'jpeg', 'png', 'webp']);

// Valid fence type categories (must match gallery filter buttons)
define('FENCE_TYPES', [
    'รั้วลวดหนาม',
    'รั้วเมทัลชีท',
    'รั้วคาวบอย',
    'กำแพงกั้นดิน',
    'ติดตั้งประตู',
    'บานสวิง',
]);

// ── Directory ────────────────────────────────────────────────────────────────

/**
 * Ensure the upload directory exists and is writable.
 */
function ensureUploadDir(): bool
{
    if (!is_dir(UPLOAD_DIR)) {
        return mkdir(UPLOAD_DIR, 0755, true);
    }
    return is_writable(UPLOAD_DIR);
}

// ── Upload ───────────────────────────────────────────────────────────────────

/**
 * Validate and save an uploaded image file.
 *
 * @param  array  $file     Entry from $_FILES (e.g. $_FILES['image'])
 * @param  string $caption  User-supplied caption (will be htmlspecialchars'd)
 * @param  string $type     Fence type category
 * @return array  ['ok' => bool, 'filename' => string] | ['ok' => false, 'error' => string]
 */
function processUpload(array $file, string $caption = '', string $type = ''): array
{
    // 1. Directory must be writable
    if (!ensureUploadDir()) {
        return ['ok' => false, 'error' => 'ไม่สามารถสร้างหรือเขียนโฟลเดอร์อัปโหลดได้'];
    }

    // 2. PHP upload error codes
    if (!isset($file['error'])) {
        return ['ok' => false, 'error' => 'ไม่มีไฟล์ที่อัปโหลด'];
    }
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $msg = match($file['error']) {
            UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE => 'ไฟล์ใหญ่เกินกำหนด (สูงสุด 2MB)',
            UPLOAD_ERR_NO_FILE                         => 'กรุณาเลือกไฟล์รูปภาพ',
            UPLOAD_ERR_PARTIAL                         => 'ไฟล์อัปโหลดไม่สมบูรณ์ ลองอีกครั้ง',
            default                                    => 'เกิดข้อผิดพลาด (code: ' . $file['error'] . ')',
        };
        return ['ok' => false, 'error' => $msg];
    }

    // 3. File size check (double-check beyond php.ini)
    if ($file['size'] > MAX_FILE_SIZE) {
        return ['ok' => false, 'error' => 'ไฟล์ใหญ่เกิน 2MB'];
    }
    if ($file['size'] === 0) {
        return ['ok' => false, 'error' => 'ไฟล์ว่างเปล่า'];
    }

    // 4. Real MIME type check via finfo (ignore $_FILES['type'] – can be spoofed)
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime  = $finfo->file($file['tmp_name']);
    if (!in_array($mime, ALLOWED_MIME, true)) {
        return ['ok' => false, 'error' => 'ประเภทไฟล์ไม่ถูกต้อง อนุญาตเฉพาะ JPG, PNG, WebP'];
    }

    // 5. Map MIME → safe extension (never trust the original filename extension)
    $ext = match($mime) {
        'image/jpeg' => 'jpg',
        'image/png'  => 'png',
        'image/webp' => 'webp',
        default      => 'jpg',
    };

    // 6. Generate unique, safe filename: {timestamp}_{random}.{ext}
    $filename = time() . '_' . random_int(1000, 9999) . '.' . $ext;
    $dest     = UPLOAD_DIR . $filename;

    // 7. Move from temp location (is_uploaded_file is checked inside move_uploaded_file)
    if (!move_uploaded_file($file['tmp_name'], $dest)) {
        return ['ok' => false, 'error' => 'ไม่สามารถบันทึกไฟล์ได้ ตรวจสอบสิทธิ์โฟลเดอร์'];
    }

    // 8. Persist metadata to captions.json
    $cleanCaption = htmlspecialchars(trim($caption), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $cleanType    = in_array($type, FENCE_TYPES, true) ? $type : '';
    saveCaption($filename, $cleanCaption, $cleanType);

    return ['ok' => true, 'filename' => $filename];
}

// ── Caption / Metadata ───────────────────────────────────────────────────────

/**
 * Save (or update) caption and type for a filename.
 */
function saveCaption(string $filename, string $caption, string $type = ''): void
{
    $captions              = loadCaptions();
    $captions[$filename]   = ['caption' => $caption, 'type' => $type];
    file_put_contents(
        CAPTIONS_FILE,
        json_encode($captions, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    );
}

/**
 * Load all caption metadata from JSON sidecar.
 */
function loadCaptions(): array
{
    if (!file_exists(CAPTIONS_FILE)) return [];
    $data = json_decode(file_get_contents(CAPTIONS_FILE), true);
    return is_array($data) ? $data : [];
}

// ── Scan ─────────────────────────────────────────────────────────────────────

/**
 * Return all uploaded images sorted newest-first.
 * Each item: ['filename', 'url', 'caption', 'type', 'mtime', 'size']
 */
function getUploadedImages(): array
{
    if (!is_dir(UPLOAD_DIR)) return [];

    $captions = loadCaptions();
    $images   = [];

    foreach (scandir(UPLOAD_DIR) as $file) {
        // Skip dots, the captions JSON, and non-image files
        if ($file === '.' || $file === '..') continue;
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (!in_array($ext, ALLOWED_EXT, true)) continue;

        $meta = $captions[$file] ?? [];

        $images[] = [
            'filename' => $file,
            'url'      => UPLOAD_URL . rawurlencode($file),
            'caption'  => $meta['caption'] ?? '',
            'type'     => $meta['type']    ?? '',
            'mtime'    => filemtime(UPLOAD_DIR . $file),
            'size'     => filesize(UPLOAD_DIR . $file),
        ];
    }

    // Newest first
    usort($images, fn($a, $b) => $b['mtime'] - $a['mtime']);

    return $images;
}

// ── Delete ───────────────────────────────────────────────────────────────────

/**
 * Safely delete an uploaded image and its caption entry.
 * Returns true on success, false if file not found or path is unsafe.
 */
function deleteUpload(string $filename): bool
{
    // Prevent directory traversal: basename must equal the input
    if ($filename !== basename($filename) || strpos($filename, '/') !== false) {
        return false;
    }

    $path = UPLOAD_DIR . $filename;
    if (!file_exists($path)) return false;

    if (unlink($path)) {
        $captions = loadCaptions();
        unset($captions[$filename]);
        file_put_contents(
            CAPTIONS_FILE,
            json_encode($captions, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );
        return true;
    }
    return false;
}
