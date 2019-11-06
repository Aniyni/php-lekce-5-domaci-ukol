<?php

class Order {
    public $products;

    public $price;

    public $customer;

    public function __construct(array $products, $price, $customer)     //vždycky před fuction v class píšu public
    {
        $this->products = $products;
        $this->price = $price;
        $this->customer = $customer;
    }
    public function pocetProduktu(){
       return count($this->products);
            }
}

 $producty = ['pračka AEG', 'sušička AEG', 'žehlička Philips'];

$nova_order = new Order($producty, 12000, 'Pepa Novák');

echo $nova_order->customer;
echo '<br>';
foreach ($nova_order->products as $item) {
    echo $item;
    echo '<br>';
}
$nova_cena = $nova_order->price;
$snizena_cena = $nova_cena - 100;
$nova_order->price = $snizena_cena;
echo $nova_order->pocetProduktu();