<div class="container">
    <form action="" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="text" name="name" placeholder="Tên sản phẩm" required>
        <input type="text" name="price" placeholder="Giá thành" required>
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

<?php if (isset($product_to_edit)): ?>
<div class="container">
    <h2>Sửa sản phẩm</h2>
    <form action="" method="POST">
        <input type="hidden" name="edit_id" value="<?= $product_to_edit['id'] ?>">
        <input type="text" name="edit_name" value="<?= $product_to_edit['name'] ?>" required>
        <input type="text" name="edit_price" value="<?= $product_to_edit['price'] ?>" required>
        <button type="submit" class="add-btn">Cập nhật</button>
    </form>
</div>
<?php endif; ?>

