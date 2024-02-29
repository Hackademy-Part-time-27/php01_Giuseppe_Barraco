<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$evens= 0;

foreach($numbers as $value){
    if ($value % 2 == 0) {
        $evens += $value;
    }else{
        continue;
    }
}

$media = $evens / 2;

print_r($media);