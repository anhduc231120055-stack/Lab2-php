<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tổng hợp LAB 2</title>
    <style>
        body {
            font-family: Arial;
        }
        a {
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .content {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<h2>LAB 2 – PHP & MySQL</h2>

<!-- MENU -->
<a href="tonghop.php?page=get">Form GET</a>
<a href="tonghop.php?page=post">Form POST</a>
<a href="tonghop.php?page=add">Thêm sinh viên</a>
<a href="tonghop.php?page=list">Danh sách sinh viên</a>

<hr>

<div class="content">
<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'get':
            include "form_get.php";
            break;
        case 'post':
            include "form_post.php";
            break;
        case 'add':
            include "add_student.php";
            break;
        case 'list':
            include "list_students.php";
            break;
        default:
            echo "Trang không tồn tại";
    }
} else {
    echo "<p>Chọn chức năng ở menu phía trên</p>";
}
?>
</div>

</body>
</html>
