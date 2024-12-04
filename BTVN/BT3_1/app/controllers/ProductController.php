<?php
require_once __DIR__ . '/../config/data.php';
require_once __DIR__ . '/../models/Product.php';


class ProductController {
    private $product;

    public function __construct() {
        global $products;
        $this->product = new Product($products);
    }

    public function index() {
        $products = $this->product->getAll();
        require_once __DIR__ . '/../views/product/index.php';
;
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->product->create($name, $price);
            header('Location: /MVC/public/index.php');
        } else {
            require_once __DIR__ . '/../views/product/create.php';
;
;
        }
    }
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->product->update($id, $name, $price);
            header('Location: /MVC/public/index.php');
            exit;
        }
    
        // Nếu không phải là POST, tìm sản phẩm để hiển thị trong form
        $products = $this->product->getAll();
        $product = array_filter($products, fn($p) => $p['id'] == $id);
        $product = reset($product);
        
        if (!$product) {
            echo "Không tìm thấy sản phẩm!";
            return;
        }
    
        require __DIR__ . '/../views/product/edit.php';
    }
    

    public function delete($id) {
        $this->product->delete($id);
        header('Location: /MVC/public/index.php');
        exit;
    }
    
}
