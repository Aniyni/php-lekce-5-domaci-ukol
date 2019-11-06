<?php
interface TrojrozmernyObrazec
{
    public function ziskejObjem();

    public function ziskejPovrch();
}
class kvadr implements TrojrozmernyObrazec {
    public $delkaA;

    public $delkaB;

    public $delkaC;

    public function __construct ($delkaA, $delkaB, $delkaC)
{

    $this->delkaA = $delkaA;
    $this->delkaB = $delkaB;
    $this->delkaC = $delkaC;
}

    public function ziskejObjem(){
        return $this->delkaA*$this->delkaB*$this->delkaC;

}
    public function ziskejPovrch(){
        return 2*($this->delkaA*$this->delkaB + $this->delkaA*$this->delkaC + $this->delkaB*$this->delkaC);
}

}
class krychle implements TrojrozmernyObrazec {
    public $delkaStrany;

    public function __construct ($delkaStrany)
    {

        $this->delkaStrany = $delkaStrany;
    }

    public function ziskejObjem(){
        return $this->delkaStrany*$this->delkaStrany*$this->delkaStrany;

    }
    public function ziskejPovrch(){
        return 6*$this->delkaStrany*$this->delkaStrany;
    }


}
class koule implements TrojrozmernyObrazec{

    public $polomer;
    public $pi;

    public function __construct($polomer,$pi)
    {
        $this->polomer=$polomer;
        $this->pi=$pi;
    }
    public function ziskejObjem()
    {
        return 4/3*($this->pi*pow($this->polomer,3));
        // TODO: Implement ziskejObjem() method.
    }
    public function ziskejPovrch()
    {
        return 4*$this->pi*pow($this->polomer,2);
        // TODO: Implement ziskejPovrch() method.
    }
}

class jehlan implements TrojrozmernyObrazec{

    public $strana;

    public $vyska;

    public function __construct($strana,$vyska)
    {
        $this->strana=$strana;
        $this->vyska=$vyska;
    }
    public function ziskejObjem()
    {
        return (1/3*$this->strana)*$this->strana*$this->vyska;
        // TODO: Implement ziskejObjem() method.
    }
    public function ziskejPovrch()
    {
        return pow($this->strana,2)+2*$this->strana*$this->vyska;
        // TODO: Implement ziskejPovrch() method.
    }
}

$kvadr = new kvadr(2,3,7);
$krychle = new krychle(5);
$koule = new koule(6,pi());
$jehlan = new jehlan(3,4);

echo "<h4>Krychle má objem: </h4>".$krychle->ziskejObjem()."<br>";
echo "<h4>Krychle má povrch: </h4>".$krychle->ziskejPovrch()."<br>";
echo "<hr>";
echo "<h4>Kvádr má objem: </h4>".$kvadr->ziskejObjem()."<br>";
echo "<h4>Kvádr má povrch: </h4>".$kvadr->ziskejPovrch()."<br>";
echo "<hr>";
echo "<h4>Koule má objem: </h4>".$koule->ziskejObjem()."<br>";
echo "<h4>Koule má povrch: </h4>".$koule->ziskejPovrch()."<br>";
echo "<hr>";
echo "<h4>Jehlan má objem: </h4>".$jehlan->ziskejObjem()."<br>";
echo "<h4>Jehlan má povrch: </h4>".$jehlan->ziskejPovrch()."<br>";

