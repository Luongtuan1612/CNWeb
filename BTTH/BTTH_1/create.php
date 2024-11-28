<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newFlower = [
        "name" => $_POST['name'],
        "description" => $_POST['description'],
        "image" => $_FILES['image']['name'] // Lưu tên tệp ảnh
    ];

    // Tải ảnh lên thư mục "images" (hoặc thư mục nào bạn chọn)
    $uploadDirectory = 'images/';
    $uploadFile = $uploadDirectory . basename($_FILES['image']['name']);
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        // Cập nhật danh sách hoa
        include 'includes/data.php';
        $flowers[] = $newFlower;
        // Cập nhật lại tệp data.php
        file_put_contents('includes/data.php', '<?php $flowers = ' . var_export($flowers, true) . ';');
        header('Location: admin.php'); // Quay lại trang quản trị
        exit;
    } else {
        echo "Có lỗi trong quá trình tải ảnh lên.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm loại hoa</title>
</head>
<style>

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    box-sizing: border-box;
}

h1 {
    color: #2c3e50;
    font-size: 2rem;
    margin-bottom: 30px;
    text-align: center;
    font-weight: 500;
}

form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    box-sizing: border-box;
    transition: transform 0.3s ease-in-out;
}


form:hover {
    transform: translateY(-10px);
}

label {
    font-weight: 600;
    margin-bottom: 8px;
    display: block;
    color: #333;
    font-size: 1rem;
}

input[type="text"], textarea, input[type="file"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1rem;
    background-color: #f9f9f9;
    box-sizing: border-box;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="text"]:focus, textarea:focus, input[type="file"]:focus {
    border-color: #3498db;
    box-shadow: 0 0 8px rgba(52, 152, 219, 0.3);
}

textarea {
    resize: vertical;
    min-height: 100px;
}

button {
    background-color: #3498db;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #2980b9;
}

button:active {
    background-color: #1d7ba1;
}

form .form-footer {
    text-align: center;
    margin-top: 20px;
    font-size: 0.9rem;
}

form .form-footer a {
    color: #3498db;
    text-decoration: none;
}

form .form-footer a:hover {
    text-decoration: underline;
}

input[type="file"] {
    padding: 10px;
    background-color: #f9f9f9;
}

input[type="file"]:focus {
    border-color: #3498db;
}

</style>
<body>
    <h1>Thêm loại hoa mới</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Tên hoa:</label>
        <input type="text" name="name" required><br>
        
        <label>Mô tả:</label>
        <textarea name="description" required></textarea><br>
        
        <label>Hình ảnh:</label>
        <input type="file" name="image" accept="image/*" required><br>
        
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
