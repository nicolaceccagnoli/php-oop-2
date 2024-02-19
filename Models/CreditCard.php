<?php

class CreditCard {

    public $circuit;
    public $expireDate;

    public function __construct(string $circuit, DateTime $expireDate) {
        $this->circuit = $circuit;
        $this->expireDate = $expireDate;
    }
}

