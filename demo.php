<?php
// soubor Automobil.php
class Automobil
{
    public $znacka;

    public $typ;

    public $barva;

    public $rokVyroby;

    public function __construct($znacka, $typ, $barva, $rokVyroby) // dvě podtržítka před construct
    {
        $this->znacka = $znacka;
        $this->typ = $typ;
        $this->barva = $barva;
        $this->rokVyroby = $rokVyroby;
    }

    public function spocitejVek()
    {
        $dnes = date('Y');
        $vek = $dnes - $this->rokVyroby;
        return $vek;
    }
}
$skodaFabia = new Automobil('Škoda', 'Fabia', 'bílá', 2012);
$skodaFabia->barva = 'modrá';
echo $skodaFabia->spocitejVek();