<?php

class Product {

    public $name;
    public $img;
    public $price;
    public $category;
    public $stock;
    public $description;
    public $rating;

    public function printClass() {
        $className = get_class($this);

        if ($className === $className) {
            echo "<b>".$className."</b>";
        } else {
            echo "ERRORE";
        }
    }
    
    public function __construct(string $name, string $img, int $price, string $category, int $stock, string $description = null, int $rating = null ) {

        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->category = $category;
        $this->stock = $stock;
        $this->description = $description;
        $this->rating = $rating;

    }

}