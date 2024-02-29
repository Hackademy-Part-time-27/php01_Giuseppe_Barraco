<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Alice', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Alessandro', 'surname' => 'Verdi', 'gender' => 'M'],
    ];

    foreach ($users as $persona) {
        if ($persona['gender'] == 'M') {
            print_r('Buongiorno Sig.' . " " . $persona['name'] . " " . $persona['surname'] . "\n");
        }else if($persona['gender'] == 'F'){
            print_r('Buongiorno Sig.ra' . " " . $persona['name'] . " " . $persona['surname'] . "\n");
        }else{
            print_r('Buongiorno' . " " . $persona['name'] . " " . $persona['surname'] . "\n");
        }
    }