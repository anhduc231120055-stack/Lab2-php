<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
</head>
<body>

<h2>Đăng ký (POST)</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Tên"><br><br>
    <input type="password" name="password" placeholder="Mật khẩu"><br><br>
    <button type="submit">Đăng ký</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Đã nhận thông tin của <b>" . htmlspecialchars($_POST['name']) . "</b>";
}
?>

</body>
</html>
