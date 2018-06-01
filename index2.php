<?php

interface zivotinja {
    public function total_numbers();
}

class Pas implements zivotinja{
    public $ime;
    public $rasa;
    public static  $broj_zivotinja = 0;

    public function __construct($ime, $rasa) {
        $this->setIme($ime);
        $this->setRasa($rasa);
    }

    public function total_numbers(){
        
    }

    public function getIme() {
        return $this->ime;
    }
    public function setIme($ime) {
        $this->ime = $ime;
    }

    public function setRasa($rasa) {
        $this->rasa = $rasa;
    }
}


class Stene extends Pas implements zivotinja{
    public $ime;
    public $vlasnik;

    public function __construct($ime, $rasa, $vlasnik){
        parent::__construct($ime, $rasa) ;
            $this->ime = $ime;
            $this->vlasnik = $vlasnik;
            $this->rasa = $rasa;
        
    }

    
}


$p = new Pas("", "");
$p->setIme("Adolf");
$p->setRasa("Vucjak");
$p->total_numbers(10);
print_r($p);

$s = new Stene("Pera", "Rajko", "Lab");
print_r($s);