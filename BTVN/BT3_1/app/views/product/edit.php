
<div class="container">
    <h1>Sửa sản phẩm</h1>
    <form action="/public/index.php?action=edit&id=<?= $product['id'] ?>" method="POST">
        <input type="text" name="name" value="<?= $product['name'] ?>" required>
        <input type="text" name="price" value="<?= $product['price'] ?>" required>
        <button type="submit">Cập nhật</button>
    </form>
</div>