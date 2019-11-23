<?php
class uzivatel {
    public $jmeno;

    public $heslo;

    public function __construct ($jmeno, $heslo)
{

    $this->jmeno = $jmeno;
    $this->heslo = $heslo;
}

    public function overeni($jmeno, $heslo){
        return $jmeno === $this->jmeno && $heslo === $this->heslo;
        }

    public function  ziskejJmeno(){
        return $this->jmeno;
}

}
class prihlaseni {
    public $PrihlaseniUzivatele = [];

    public function prihlas(uzivatel $uzivatel, $jmeno, $heslo){
        if ($uzivatel->overeni($jmeno, $heslo)) {
            $this->PrihlaseniUzivatele[] = $jmeno;
        }
    }

    public function zobrazPrihlaseneUzivatele(){
        echo 'Prihlaseni uzivatele:'. implode(',',$this->PrihlaseniUzivatele) . '<br>';
    }
}
$josef = new uzivatel('Josef', 'josef1234');
$prihlasovani = new prihlaseni();

$prihlasovani->zobrazPrihlaseneUzivatele();
$prihlasovani->prihlas($josef,'Josef','josef1234');
$prihlasovani->zobrazPrihlaseneUzivatele();
$prihlasovani->prihlas($josef,'Josed','test');
$prihlasovani->zobrazPrihlaseneUzivatele();
$karel = new uzivatel('Karel','karel1234');
$prihlasovani->prihlas($karel,'Karel','karel1234');
$prihlasovani->zobrazPrihlaseneUzivatele();

