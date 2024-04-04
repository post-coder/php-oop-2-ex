<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {

    public $weight;
    public $mainIngredient;
    public $expireDate;
    
    /**
     * __construct
     *
     * @param  int $id
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     * @param  float $weight
     * @param  string $mainIngredient
     * @param  string $expireDate
     */
    function __construct($id, $name, $price, Category $category, $weight, $mainIngredient, $expireDate) {
        parent::__construct($id, $name, $price, $category);
        $this->weight = $weight;
        $this->mainIngredient = $mainIngredient;
        $this->expireDate = $expireDate;
    }

}