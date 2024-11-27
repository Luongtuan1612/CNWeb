<div class="container">
    <form action="" method="POST">
        <input type="hidden" name="action" value="add">
        <button type="submit" class="add-btn">Thêm mới</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá thành</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><a href="?edit_id=<?= $product['id'] ?>"><i class="fas fa-edit edit-icon"></i></a></td>
                <td><a href="?delete_id=<?= $product['id'] ?>"><i class="fas fa-trash delete-icon"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

