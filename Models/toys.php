<?php

require_once __DIR__."/Product.php";

class Toys extends Product {

    public $material;
    public $isOutdoor;

    public function __construct($name, $img, $price, $category, $stock, $description, $rating, string $material, bool $isOutdoor) {
        parent::__construct($name, $img, $price, $category, $stock, $description, $rating);

        $this->material = $material;
        $this->isOutdoor = $isOutdoor;
    }

    public function printClass() {
        return "Giocattoli";
    }


}

// $toyOne = new Toys('Toys', 'ciao', 3, 'ciao category', 300, 'descrizione', 259 ,'ciao material', true);
// var_dump($toyOne);