<?php

require_once __DIR__ . '/Product.php';
class Kennel extends Product {

    public $size;
    
    /**
     * __construct
     *
     * @param  int $id
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     * @param  string $size
     */
    function __construct($id, $name, $price, Category $category, $size) {
        parent::__construct($id, $name, $price, $category);
        $this->size = $size;
    }

}