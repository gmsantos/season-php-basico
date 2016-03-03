<?php

$cartas = [
    'A' => 'A', 
    2 => 2, 
    3 => 3, 
    4 => 4, 
    5 => 5,
    6 => 6, 
    7 => 7, 
    8 => 8, 
    9 => 9, 
    10 => 10, 
    'J' => 'J', 
    'Q' => 'Q', 
    'K' => 'K'
];


$cartas2 = [
    'A', 
    2, 
    3, 
    4, 
    5,
    6, 
    7, 
    8, 
    9, 
    10, 
    'J', 
    'Q', 
    'K'
];

$baralho = 
[
    'ouro' => $cartas,
    'copas' => $cartas,
    'espada' => $cartas,
    'paus' => $cartas,
];

foreach ($baralho as $naipe => $cartasNaipe){  // 4 vezes , uma p cada naipe
    
    foreach ($cartasNaipe as $carta){ // 13 vezes, uma vez por carta
        echo $carta . " de " . $naipe;
        echo '<br>';
    }
    
}