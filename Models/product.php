<?php

class Product {

    public $name;
    public $img;
    protected $price;
    protected $category;
    protected $stock;
    public $description;
    protected $rating;

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