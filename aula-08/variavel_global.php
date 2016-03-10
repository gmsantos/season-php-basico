<?php

$a = 100;

function determinarMaior($a, $b, $c)
{
    global $a;
    
    //$a = $GLOBALS['a'];
    
    if ($a > $b) {
        if ($a > $c){ // $a = 50;
            return 'A maior ' . $a;
        } else {
            return 'C maior ' . $c;
        }
    } elseif ($b > $c){
        return 'B maior' . $b;
    } else {
        return 'C maior ' . $c;
    }
}

echo determinarMaior(20, 50);
