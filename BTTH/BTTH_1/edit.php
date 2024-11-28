<?php
include 'includes/data.php';
$id = $_GET['id'];
$currentFlower = $flowers[$id];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $flowers[$id] = [
        "name" => $_POST['name'],
        "description" => $_POST['description'],
        "image" => $_POST['image']
    ];

    file_put_contents('includes/data.php', '<?php $flowers = ' . var_export($flowers, true) . ';');
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa loại hoa</title>
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

input[type="text"], textarea {
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

input[type="text"]:focus, textarea:focus {
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
    <h1>Sửa thông tin loại hoa</h1>
    <form action="" method="POST">
        <label>Tên hoa:</label>
        <input type="text" name="name" value="<?php echo $currentFlower['name']; ?>" required><br>
        <label>Mô tả:</label>
        <textarea name="description" required><?php echo $currentFlower['description']; ?></textarea><br>
        <label>Hình ảnh (URL):</label>
        <input type="text" name="image" value="<?php echo $currentFlower['image']; ?>" required><br>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>
