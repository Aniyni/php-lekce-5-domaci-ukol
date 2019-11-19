<?php
class uzivatel {
    public $jmeno;

    public $heslo;

    public function __construct ($jmeno, $heslo)
{

    $this->jmeno = $jmeno;
    $this->heslo = $heslo;
}

    public function overeni(){
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

    public function zobrazPrihlaseneUzivatele{
        echo 'Prihlaseni uzivatele:'. implode(',',$this->PrihlaseniUzivatele) . '<br>';
    }
}