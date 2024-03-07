<?php

class Vertebrates {
    protected static function verte(){
        echo "Sono un animale vertebrato" . "\n";
    }
}

class WarmBlooded extends Vertebrates {
    protected function warm(){
        echo "Sono un animale a sangue caldo" . "\n";
    }
}

class ColdBlooded extends Vertebrates {
    protected static function cold(){
        echo "Sono un animale a sangue freddo" . "\n";
    }
}

class Mammals extends WarmBlooded {
    protected function mamm(){
        echo "Sono un mammifero";
    }

    public function __construct(){
        echo "Sono un animale Vertebrato" . "\n";
        echo "Sono un animale a sangue caldo" . "\n";
        echo "Sono un mammifero" . "\n";
    }
}

class Birds extends WarmBlooded {
    protected function bird(){
        echo "Sono un uccello" . "\n";
    }

    public function __construct(){
        echo "Sono un animale Vertebrato" . "\n";
        echo "Sono un animale a sangue caldo" . "\n";
        echo "Sono un uccello" . "\n";
    }
}

class Fish extends ColdBlooded {
    protected static function fish(){
        echo "Sono un pesce" . "\n";
    }

    public function __construct(){
        Vertebrates::verte();
        ColdBlooded::cold();
        Fish::fish();
        //echo "Sono un animale Vertebrato" . "\n";
        //echo "Sono un animale a sangue freddo" . "\n";
        //echo "Sono un pesce" . "\n";
    }
}

class Reptiles extends ColdBlooded {
    protected function rept(){
        echo "Sono un rettile" . "\n";
    }

    public function __construct(){
        echo "Sono un animale Vertebrato" . "\n";
        echo "Sono un animale a sangue freddo" . "\n";
        echo "Sono un rettile" . "\n";
    }
}

class Amphibians extends ColdBlooded {
    protected function amphi(){
        echo "Sono un anfibio" . "\n";
    }

    public function __construct(){
        echo "Sono un animale Vertebrato" . "\n";
        echo "Sono un animale a sangue freddo" . "\n";
        echo "Sono un anfibio" . "\n";
    }
}

$magicarp = new Fish();