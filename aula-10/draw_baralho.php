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

$baralho = 
[
    'ouro' => $cartas,
    'copas' => $cartas,
    'espada' => $cartas,
    'paus' => $cartas,
];

function drawCard(&$baralho){
    if (!is_array($baralho)){
        echo 'A variável não é um baralho válido';
        return;
    }
    
    $naipe = array_rand($baralho);
    $carta = array_rand($baralho[$naipe]);
    
    //echo "{$baralho[$naipe][$carta]} de $naipe";
    
    $cartaSeleciona = sprintf('%s de %s', $baralho[$naipe][$carta],  $naipe);
    
    unset($baralho[$naipe][$carta]);
    
    if (empty($baralho[$naipe])){
       unset($baralho[$naipe]);
    }
    
    echo sprintf(
        'Você retirou a carta %s e ainda restam %s cartas para serem retiradas<br>',
        $cartaSeleciona, 
        count($baralho, COUNT_RECURSIVE)
    );
    
    //echo " e faltam " . count($baralho, COUNT_RECURSIVE) . " cartas para serem retiradas<br>";
}

do 
{
    drawCard($baralho);    
} while(in_array('A', $baralho['copas']));
