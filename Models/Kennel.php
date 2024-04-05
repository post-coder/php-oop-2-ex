<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ .'./Traits/HasMaterial.php';
require_once __DIR__ .'./Traits/HasDimension.php';
class Kennel extends Product {

    // per usare il trait
    use HasMaterial;
    use HasDimension;

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

        $this->type = "Cuccia";
    }

}