<?php

require_once __DIR__ .'./Traits/HasMaterial.php';

class Toy extends Product {

    use HasMaterial;

    /**
     * __construct
     *
     * @param  int $id
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     * @param  string $material
     */
    function __construct($id, $name, $price, Category $category) { 

        parent::__construct($id, $name, $price, $category);

        
        $this->type = "Gioco";
    }
}