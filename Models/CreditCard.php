<?php

class CreditCard {
    public $circuit;
    public $expireDate;

    public function __construct(string $circuit, DateTime $expireDate) {
        $this->circuit = $circuit;
        $this->expireDate = $expireDate;
    }
}

$expireDateTwo = new DateTime("2024-12-25");
$userTwoCreditCard = new CreditCard("Visa", $expireDateTwo);