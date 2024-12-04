<?php

class Product {
    private $products;

    public function __construct($products) {
        $this->products = $products;
    }

    public function getAll() {
        return $this->products;
    }

    public function create($name, $price) {
        $id = count($this->products) + 1;
        $this->products[] = ['id' => $id, 'name' => $name, 'price' => $price];
    }

    public function update($id, $name, $price) {
        foreach ($this->products as $key => $product) {
            if ($product['id'] == $id) {
                $this->products[$key]['name'] = $name;
                $this->products[$key]['price'] = $price;
                return;
            }
        }
    }

    public function delete($id) {
        foreach ($this->products as $key => $product) {
            if ($product['id'] == $id) {
                unset($this->products[$key]);
                $this->products = array_values($this->products);
                return;
            }
        }
    }
}
