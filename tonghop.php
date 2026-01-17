<?php
session_start();

// Chặn truy cập trái phép
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang tổng hợp</title>
</head>
<body>

<h2>Xin chào, <?= $_SESSION['user'] ?></h2>

<h3>Menu chức năng</h3>
<ul>
    <li><a href="add_student.php">➕ Thêm sinh viên</a></li>
    <li><a href="list_students.php">📋 Danh sách sinh viên</a></li>
    <li><a href="cart.php">🛒 Giỏ hàng</a></li>
    <li><a href="logout.php">🚪 Đăng xuất</a></li>
</ul>

</body>
</html>
