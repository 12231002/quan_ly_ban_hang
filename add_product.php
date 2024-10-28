<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tensanpham = $_POST['tensanpham'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];

    $stmt = $pdo->prepare("INSERT INTO SanPham (TenSanPham, Gia, SoLuong) VALUES (?, ?, ?)");
    $stmt->execute([$tensanpham, $gia, $soluong]);

    echo "Sản phẩm đã được thêm thành công!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Thêm Sản Phẩm</h2>
    <form action="" method="POST">
        Tên Sản Phẩm: <input type="text" name="tensanpham" required><br>
        Giá: <input type="number" step="0.01" name="gia" required><br>
        Số Lượng: <input type="number" name="soluong" required><br>
        <button type="submit">Thêm Sản Phẩm</button>
    </form>
</body>
</html>
