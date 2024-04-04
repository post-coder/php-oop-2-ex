<?php


class Toy extends Product {
    public $material;    
    /**
     * __construct
     *
     * @param  int $id
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     * @param  string $material
     */
    function __construct($id, $name, $price, Category $category, $material) { 

        parent::__construct($id, $name, $price, $category);
        $this->material = $material;
        
        $this->type = "Gioco";
    }
}