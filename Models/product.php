<?php

class Product {

    public $name;
    public $img;
    public $price;
    public $category;
    public $stock;
    public $description;
    public $rating;
    public static $discount = 0.8;

    public function getDiscount() {
        return $this->price * self::$discount;
    }

    public function printClass() {
        $className = get_class($this);

        if ($className === $className) {
            echo "<b>".$className."</b>";
        } else {
            echo "ERRORE";
        }
    }
    
    public function __construct(string $name, string $img, $price, string $category, $stock, string $description = null, int $rating = null ) {

        $this->name = $name;
        $this->img = $img;
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            throw new Exception("Valore prezzo non valido");
        }
        $this->category = $category;
        if (is_numeric($stock)) {
            $this->stock = $stock;
        } else {
            throw new Exception("Valore Stock non valido");
        }
        $this->description = $description;
        if (is_numeric($rating)) {
            $this->rating = $rating;
        } else {
            throw new Exception("Valore Voto non valido");
        }
    }
}