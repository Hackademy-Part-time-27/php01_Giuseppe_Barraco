<?php

class Company {
    public static $spese = 0;
    public $name;
    public $location;
    public $tot_employees;
    public $spesa;

    public function __construct($name, $location, $tot_employees=0, $spesa){
        $this -> name = $name;
        $this -> location = $location;
        $this -> tot_employees = $tot_employees;
        $this -> spesa = $spesa;
        self::$spese += $spesa;
    }

    public function esposizione(){
        if($this->tot_employees != 0){
        echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti" . "\n";
        }else{
            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti" . "\n";
        }
    }

    public function speseAnnuali(){
        echo "Le spese annuali dell'azienda sono: " . $this->spesa . "€" . "\n";
    }

    public static function speseAziende(){
        echo "Le spese totali delle aziende durante l'anno ammontano a " . self::$spese . "€";
    }
}

$aulab = new Company('Aulab', 'Italia', 50, 10000);
$aulab2 = new Company('Aulab', 'Italia', 0, 1500);
$square = new Company('Square-Enix', 'Giappone', 1000, 15000);
$blizz = new Company('Blizzard', 'America', 500, 12000);
$boh = new Company('Boh', 'Non lo so', 0, 0);

$aulab->esposizione();
$aulab2->esposizione();

$square->speseAnnuali();

Company::speseAziende();