<?php

// http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration
// Classes
// array
// callable (5.4+)
// resource 
function numeroMaior(array $numeros)
{
    $maior = $numeros[0];
    
    foreach ($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero; 
        }
    }
    
    return $maior;
}

echo $descobrir;


