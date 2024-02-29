<?php

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = '$text2'; //! questa variabile non porta fuori nessun valore
//! potevi includerla nei doppi apici oppure riassegnarla in questo modo -> $text6 = $text2;
//! per il resto tutto perfetto, bravissimo
$text7 = 'bevuto';
$text8 = "tutto";

echo $text1 . ' ' . $text2 . ' ' . $text3 . $text4 . ' ' . $text5 . ' ' . $text2 . ' ' . $text7 . ' ' . $text8;
