<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten = $_POST['ten'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO KhachHang (TenKhachHang, DiaChi, SoDienThoai, Email) VALUES (?, ?, ?, ?)");
    $stmt->execute([$ten, $diachi, $sdt, $email]);

    echo "Khách hàng đã được thêm thành công!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Khách Hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Thêm Khách Hàng</h2>
    <form action="" method="POST">
        Tên: <input type="text" name="ten" required><br>
        Địa Chỉ: <input type="text" name="diachi" required><br>
        Số Điện Thoại: <input type="text" name="sdt" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit">Thêm Khách Hàng</button>
    </form>
</body>
</html>
