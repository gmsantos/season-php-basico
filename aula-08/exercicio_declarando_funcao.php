<?php

function determinarMaior($a, $b, $c)
{
    if ($a > $b) {
        if ($a > $c){
            return 'A maior ' . $a;
        } else {
            return 'C maior ' . $c;
        }
    } elseif ($b > $c){
        return $b;
    } else {
        return 'C maior ' . $c;
    }

}

echo determinarMaior(1, 6, 13) . '<br>';

// função
function numeroMaior($numeros)
{
    $maior = $numeros[0];
    
    foreach ($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero; 
        }
    }
    
    return $maior;
}

// procedimento
function numeroMaior2($numeros)
{
    $maior = $numeros[0];
    
    foreach ($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero; 
        }
    }
    
    echo '<br />' . $maior;
}

$descobrir = numeroMaior([1,2,88,3,4,5,6]);

echo $descobrir;

numeroMaior2([7,8,9,10,11,100]);
