<?php
session_start();

$products = [
    1 => "Áo thun",
    2 => "Quần jeans",
    3 => "Giày sneaker"
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Thêm vào giỏ
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['cart'][] = $id;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
</head>
<body>
<h2>Danh sách sản phẩm</h2>

<ul>
<?php foreach ($products as $id => $name): ?>
    <li>
        <?= $name ?>
        <a href="?add=<?= $id ?>">Thêm vào giỏ</a>
    </li>
<?php endforeach; ?>
</ul>

<h3>Giỏ hàng của bạn</h3>
<ul>
<?php
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $pid) {
        echo "<li>" . $products[$pid] . "</li>";
    }
}
?>
</ul>

<a href="dashboard.php">Quay lại</a>
</body>
</html>
