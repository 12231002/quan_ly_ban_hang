<?php
include 'db.php';

// Truy vấn để lấy danh sách khách hàng
$stmt = $pdo->prepare("SELECT * FROM KhachHang");
$stmt->execute();
$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem Khách Hàng</title>
    <link rel="stylesheet" href="style.css"> <!-- Liên kết tới file CSS -->
</head>
<body>
    <header>
        <h1>Danh Sách Khách Hàng</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Khách Hàng</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?php echo $customer['ID']; ?></td>
                    <td><?php echo $customer['TenKhachHang']; ?></td>
                    <td><?php echo $customer['DiaChi']; ?></td>
                    <td><?php echo $customer['SoDienThoai']; ?></td>
                    <td><?php echo $customer['Email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
        <p>&copy; 2024 Quản Lý Bán Hàng. Tất cả quyền được bảo lưu.</p>
    </footer>
</body>
</html>
