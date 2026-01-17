<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            margin: 0 5px;
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

<h2>Danh sách sinh viên</h2>

<?php
include "db_connect.php";

$sql = "SELECT * FROM students";
$stmt = $conn->query($sql);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($students as $st): ?>
    <tr>
        <td><?= $st['id'] ?></td>
        <td><?= htmlspecialchars($st['fullname']) ?></td>
        <td><?= htmlspecialchars($st['student_code']) ?></td>
        <td><?= htmlspecialchars($st['email']) ?></td>
        <td>
            <a href="#">Sửa</a> |
            <a href="#">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
