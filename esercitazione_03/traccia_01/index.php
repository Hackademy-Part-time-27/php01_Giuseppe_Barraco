<?php

$password = readline('Inserisci la password ');
checkChars($password);

function checkChars($password) { 
    $upperCase = preg_match('/[A-Z]/', $password); 
    $specialChar = preg_match('/[^A-Za-z0-9]/', $password); 
    $numericVal = preg_match('/[0-9]/', $password); 
    $passlen = strlen($password);

    if(!$upperCase){
    echo "La password non contiene un carattere maiuscolo" . "\n";
    $password = readline('Inserisci la password');
    checkChars($password);
    }else if(!$specialChar){
    echo "La password non contiene un carattere speciale" . "\n";
    $password = readline('Inserisci la password');
    checkChars($password); 
    }else if(!$numericVal){
    echo "La password non contiene un carattere numerico" . "\n";
    $password = readline('Inserisci la password');
    checkChars($password); 
    }else if($passlen < 8){
    echo "La password è troppo corta. Deve essere di almeno 8 caratteri" . "\n";
    $password = readline('Inserisci la password');
    checkChars($password); 
    }else{
        echo "Password accettata";
    }
}

