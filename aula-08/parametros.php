<?php

$a = 100;

function determinarMaior($a, $b, $c)
{
    if ($a > $b) {
        if ($a > $c){
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

echo determinarMaior(10, 20, 50);