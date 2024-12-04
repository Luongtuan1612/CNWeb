<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Quản lý sản phẩm</title>
</head>
<style>
    /* Cấu trúc tổng quát của trang */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

/* Phần Header */
.header-content {
    background-color: #3498db;
    color: white;
    text-align: center;
    padding: 20px 0;
}

.header-content h1 {
    margin: 0;
    font-size: 24px;
}

nav {
    margin-top: 10px;
    text-align: center;
}

nav .menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav .menu li {
    display: inline;
    margin-right: 20px;
}

nav .menu a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 16px;
}

nav .menu a.active {
    border-bottom: 2px solid white;
}

/* Phần Form */
form input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form button {
    padding: 12px 20px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

form button:hover {
    background-color: #2980b9;
}

/* Bảng sản phẩm */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #3498db;
    color: white;
}

table td a {
    text-decoration: none;
    color: #3498db;
    font-size: 18px;
}

table td a:hover {
    color: #2980b9;
}

.edit-icon, .delete-icon {
    font-size: 20px;
}

/* Footer */
footer {
    background-color: #2c3e50;
    color: white;
    text-align: center;
    padding: 15px 0;
    margin-top: 20px;
}

footer p {
    margin: 0;
    font-size: 14px;
}

hr {
    border: 1px solid #ddd;
    margin: 20px 0;
}

</style>

<body>
    <header class="header-content">
        <h1>Administration</h1>
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
