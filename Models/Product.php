<?php

require_once __DIR__ . '/Category.php';

class Product {

    public $id;
    public $name;
    public $price;
    public $category;

    public $image;

    protected $type;
    
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

        // $this->price = $price;

        if(is_numeric($price)) {
            $this->price = $price;
        } else {
            throw new Exception("Inserisci un prezzo corretto");
        }
        $this->category = $category;
    }
    
    /**
     * setImage
     *
     * @param  string $image
     */
    public function setImage($image) {
        $this->image = $image;
    }


    public function getType() {
        return $this->type;
    }
}