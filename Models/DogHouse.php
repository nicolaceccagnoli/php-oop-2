<?php

require_once __DIR__."/Product.php";

class DogHouse extends Product {
    public $material;
    public $size;

    public function __construct($name, $img, $price, $category, $stock, $description, $rating, string $material, int $size) {
        parent::__construct($name, $img, $price, $category, $stock, $description, $rating);

        $this->material = $material;
        $this->size = $size;
    }

    public function printClass() {
        return "Cuccia";
    }

}

// $doghouse = new DogHouse('DogHouse', 'ciao', 3, 'ciao category', 300, 'descrizione', 259 ,'ciao material', 1000);
// var_dump($doghouse);