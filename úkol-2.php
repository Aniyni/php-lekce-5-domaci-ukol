<?php
interface Geometrickeutvaryinterface
{
    public function ziskejpocetstran();

    public function spocitejobvod();
}

class GeometrickyUtvar {
    protected $pocetStran;

    public function __construct($pocetStran){

        $this->pocetStran = $pocetStran;
    }


    public function ziskejpocetstran()
    {
        return $this->pocetStran;
    }
}

class Ctverec extends GeometrickyUtvar implements Geometrickeutvaryinterface {
    public $delkastrany;


    public function __construct($delkastrany){

        $this->delkastrany=$delkastrany;

        parent::__construct (4);

    }

    public function spocitejobvod()
    {
        return $this->delkastrany * $this->ziskejpocetstran();
    }

}
class Trojuhelnik extends GeometrickyUtvar
{
    public $delkastranyA;

    public $delkastranyB;

    public $delkastranyC;

    public function __construct($delkastranyA, $delkastranyB, $delkastranyC)
    {

        $this->delkastranyA = $delkastranyA;
        $this->delkastranyB = $delkastranyB;
        $this->delkastranyC = $delkastranyC;
        parent::__construct(3);
    }

    public function spocitejobvod()
    {
        return $this->delkastranyA + $this->delkastranyB + $this->delkastranyC;
}
}

$ctvrec = new Ctverec(3);
$trojuhelnik = new Trojuhelnik(2,4,5);

echo "<h2> ČTVEREC </h2> <br>";
echo "Počet stran: " . $ctvrec->ziskejpocetstran() . "<br>";
echo "Obvod:" . $ctvrec->spocitejobvod() . "<br>";
echo "<h2> TROJÚHELNÍK: </h2> <br>";
echo "Počet stran: " . $trojuhelnik->ziskejpocetstran() . "<br>";
echo "Obvod:" . $trojuhelnik->spocitejobvod() . "<br>";

