<?php
// db.php

// Cấu hình kết nối cơ sở dữ liệu
$host = 'localhost'; // máy chủ
$db = 'quan_ly_ban_hang'; // tên cơ sở dữ liệu đã tồn tại
$user = 'root'; // tên người dùng (mặc định là root)
$pass = ''; // mật khẩu (mặc định để trống)

try {
    // Tạo kết nối đến cơ sở dữ liệu
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
?>
