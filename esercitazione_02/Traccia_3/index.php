<?php

for ($i = 0 ; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo 'HACKADEMY' . "\n";
    }else if ($i % 3 == 0) {
        echo 'PHP'. "\n";
    }else if ($i % 5 == 0){
        echo 'JAVASCRIPT'. "\n";
    }else {
        echo $i. "\n";
    }
}