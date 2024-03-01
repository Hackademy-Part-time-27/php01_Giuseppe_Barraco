<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 0;
$evens= 0;

foreach($numbers as $value){
    if ($value % 2 == 0) {
        $evens += $value;
        $count++;
    }else{
        continue;
    }
}

$media = $evens / $count;

print_r($media);