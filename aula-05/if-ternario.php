<?php

$a = 5;
$b = 21;
$c = 40;

$maior = null;

// forma classica
if ($a > $b){
    $maior = $a;
} else {
    $maior = $b;
}

echo $maior;

// Ternario
$maior = ($a > $b) ? $a : $b;

// Ternario, mas nunca faça um dentro do outro
$maior = (true ? 'true' : 'false') ? 't' : 'f';

echo ' ternario: ' . $maior;