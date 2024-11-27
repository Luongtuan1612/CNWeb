<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Quản lý sản phẩm</title>
</head>

<body>
    <header class="header-content">
        <h1>Administration</h1>
        <?php 
        $current_page = basename($_SERVER['PHP_SELF'])
        ?>
        <nav>
            <ul class="menu">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Trang ngoài</a></li>
                <li><a href="#" class="active">Thể loại</a></li>
                <li><a href="#">Tác giả</a></li>
                <li><a href="#">Bài viết</a></li>
            </ul>
        </nav>
    </header>
    