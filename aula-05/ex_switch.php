<?php

$dia_semana = 'segunda-feira';

if ($dia_semana == 'segunda' or $dia_semana == 'quarta' or $dia_semana == 'sexta') {
    echo 'Aula PHP';
} elseif ($dia_semana == 'sabado' or $dia_semana == 'domingo'){
    echo 'Jogar X-box';
} elseif ($dia_semana == 'terca'){
    echo 'Jogar Bola';
} elseif ($dia_semana == 'quinta') {
    echo 'descansar';
} else {
    echo 'Dia invalido';
}

switch ($dia_semana){
    case 'segunda':
    case 'quarta':
    case 'sexta':
        echo 'Aula PHP';
        break;
    case 'quinta':
        echo 'descansar';
        break;
    case 'sabado':
    case 'domingo':
        echo 'Jogar x-box';
        break;
    default:
        echo 'Dia invalido';        
}
    
