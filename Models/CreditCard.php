<?php
require_once __DIR__."/../traits/ExpireDate.php";


class CreditCard {

    public $circuit;
    use ExpireDate;

    public function __construct(string $circuit, DateTime $expireDate) {
        $this->circuit = $circuit;
        $this->expireDate = $expireDate;
    }
}

