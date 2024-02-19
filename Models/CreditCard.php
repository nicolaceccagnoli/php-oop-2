<?php

class CreditCard {
    public $circuit;
    public $expireDate;

    public function __construct(string $circuit, string $expireDate) {
        $this->circuit = $circuit;
        $this->expireDate = $expireDate;
    }
}

$userOneCreditCard = new CreditCard();