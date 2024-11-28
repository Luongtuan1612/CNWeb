<?php
include 'includes/data.php'; // Kết nối đến danh sách các loại hoa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Quản trị - Loại hoa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1rem;
            text-align: left;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #3498db;
            color: #fff;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .action-buttons a {
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            border-radius: 5px;
            color: #fff;
        }
        .action-buttons .edit {
            background-color: #2ecc71;
        }
        .action-buttons .delete {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <header>
        <h1>Quản trị - Danh sách loại hoa</h1>
    </header>
    <div class="container">
    <a href="create.php" style="display: inline-block; padding: 10px 20px; background: #3498db; color: #fff; text-decoration: none; border-radius: 5px;">Thêm loại hoa</a>
        <table>
            <thead>
                <tr>
                    <th>Tên hoa</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flowers as $index => $flower): ?>
                <tr>
                    <td><?php echo $flower['name']; ?></td>
                    <td><?php echo $flower['description']; ?></td>
                    <td><img src="<?php echo $flower['image']; ?>" alt="<?php echo $flower['name']; ?>" style="width: 100px; height: auto;"></td>
                    <td class="action-buttons">
                        <a href="edit.php?id=<?php echo $index; ?>" class="edit">Sửa</a>
                        <a href="delete.php?id=<?php echo $index; ?>" class="delete" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
