<?php

declare(strict_types=1);

function determinarMaior(int $a, int $b, int $c): int
{
    if ($a > $b) {
        if ($a > $c){ // $a = 50;
            return $a;
        } else {
            return $c;
        }
    } elseif ($b > $c){
        return $b;
    } else {
        return $c;
    }
}

echo determinarMaior(5, 15, 50);
