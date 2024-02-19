<?php

require_once __DIR__."/Product.php";

class Food extends Product {

    public $expireDate;
    public $flavour;
    public $weight;

    public function __construct($name, $img, $price, $category, $stock, $description, $rating, string $expireDate, string $flavour, int $weight) {
        parent::__construct($name, $img, $price, $category, $stock, $description, $rating);

        $this->expireDate = $expireDate;
        $this->flavour = $flavour;
        $this->weight = $weight;
    }

}

// $chili = new Food('Chili', 'ciao', 3, 'ciao category', 300, 'descrizione', 259 ,'ciao expire', 'ciao flavour', 1000);
// var_dump($chili);