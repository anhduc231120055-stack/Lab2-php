<?php
require 'db_connect.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mã hóa mật khẩu
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute([
            ':email' => $email,
            ':password' => $hash
        ]);
        $message = "Đăng ký thành công!";
    } catch (PDOException $e) {
        $message = "Email đã tồn tại!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<h2>Đăng ký</h2>

<form method="post">
    Email: <input type="email" name="email" required><br><br>
    Mật khẩu: <input type="password" name="password" required><br><br>
    <button type="submit">Đăng ký</button>
</form>

<p><?= $message ?></p>
<a href="login.php">Đăng nhập</a>
</body>
</html>
