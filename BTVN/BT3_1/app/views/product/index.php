<?php include __DIR__ . '/../header.php';
 ?>
<div class="container">
    <a href="index.php?action=create" class="btn">Thêm mới</a>
    <?php if (!empty($products)): ?>
        <table>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><a href="index.php?action=edit&id=<?= $product['id'] ?>">Sửa</a></td>
                        <td><a href="index.php?action=delete&id=<?= $product['id'] ?>">Xóa</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Không có sản phẩm nào để hiển thị.</p>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/../footer.php';
 ?>
