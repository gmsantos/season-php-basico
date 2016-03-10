<?php

function trocar(&$a, &$b)
{
    $swap = '';
    
    $swap = $a;
    $a = $b;
    $b = $swap;        
}

$a = 5;
$b = 3;
$c = 10;

trocar($a, $b);  // $b = 5, $a = 3;
echo "A: $a, B: $b <br>";

trocar($a, $c);  // $a = 10, $c = 3;
echo "A: $a, C: $c <br>";

trocar($a, $b); // $a = 5, $b = 10
echo "A: $a, B: $b <br>";