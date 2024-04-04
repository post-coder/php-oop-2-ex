<?php

require_once __DIR__ . '/Category.php';

class Product {

    public $id;
    public $name;
    public $price;
    public $category;

    public $image;
    
    /**
     * __construct
     *
     * @param  int $id
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     */
    function __construct($id, $name, $price, Category $category) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }


}