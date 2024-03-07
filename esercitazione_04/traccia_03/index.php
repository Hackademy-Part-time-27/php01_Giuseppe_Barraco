<?php

class Car {
    private $num_telaio;

    protected function __construct($telaio){
        $this->num_telaio = $telaio;
    }

    protected function tellMeNumTelaio(){
        return $this->num_telaio;
    }
}

class MyCar extends Car {
    protected $nome;
    protected $targa;

    public function __construct($telaio, $nome, $targa){
        parent::__construct($telaio);
        $this->nome = $nome;
        $this->targa = $targa;
    }

    public function frase(){
        echo "La mia macchina è $this->nome, con targa $this->targa e numero di telaio " . Car::tellMeNumTelaio() . "\n";
    }
}

$car = new MyCar('1234', 'Fiat Punto', 'ND 123 OJ');
$car->frase();
var_dump($car);