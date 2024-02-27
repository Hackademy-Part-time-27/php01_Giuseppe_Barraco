<?php


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    'oscura,',
    'era',
    89,
    'mezzo',
    'cammin',
    'Nel',
    'selva',
    'la',
    'via',
    'una',
    true,
    'ritrovai',
    'per',
    'diritta'
    ];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
    ]
];

$results = $words1[11] . " " . $words1[9]  . " " . $words1[20] . " " . $words1[10] . " " . $words1[20] . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[17] . " " . $words1[18] . " " . $words1[0] . " " . $words1[12] . $words1[21] . " " . $words2['elemento3'][2] . " " . $words1[13] . " " . $words1[19] . " " . $words1[14] . " " . $words1[7] . " " . $words2['elemento3'][1] . $words2['elemento3'][3];;

echo $results;