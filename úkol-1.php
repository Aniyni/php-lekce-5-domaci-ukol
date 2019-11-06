<?php
class Ctverec {
    public $delkastrany;

    public function __construct($delkastrany){

        $this->delkastrany=$delkastrany;
    }


    public function spocitejobsah()
    {
        return $this->delkastrany * $this->delkastrany;
    }
}

$objekt = new Ctverec(6);

echo 'Obsah ctverce o delce strany ' . $objekt->delkastrany . 'cm je ' . $objekt->spocitejobsah() . 'cm2';