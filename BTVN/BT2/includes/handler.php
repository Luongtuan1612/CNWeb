<?php 

// Xử lý form khi gửi và thêm sp mới
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['price'])) {
    $new_product = [
        'id' => count($products) + 1, 
        'name' => $_POST['name'],
        'price' => $_POST['price']
    ];
    $products[] = $new_product;
}

// Xử lý nút Xóa
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    foreach ($products as $key => $product) {
        if ($product['id'] == $delete_id) {
            unset($products[$key]); 
            break;
        }
    }
    // Reindex
    $products = array_values($products);
}

// Xử lý nút Sửa
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $product_to_edit = null;
    foreach ($products as $product) {
        if ($product['id'] == $edit_id) {
            $product_to_edit = $product;
            break;
        }
    }
}

// Cập nhật thông tin sp sau khi sửa
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_name']) && isset($_POST['edit_price']) && isset($_POST['edit_id'])) {
    $edit_id = $_POST['edit_id'];
    foreach ($products as $key => $product) {
        if ($product['id'] == $edit_id) {
            $products[$key]['name'] = $_POST['edit_name'];
            $products[$key]['price'] = $_POST['edit_price'];
            break;
        }
    }
}
?>
