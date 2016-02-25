<?php

$funcionarios = 
[
    [
        'nome' => 'João',
        'sobrenome' => 'da Silva',
        'cidade' => 'Caçapava',
    ],
    [
        'nome' => 'Juca',
        'sobrenome' => 'Santos',
        'cidade' => 'São Paulo',
    ],
    [
        'nome' => 'Rafael',
        'sobrenome' => 'Carvalho',
        'cidade' => 'Jacarei',
        'distancia' => 5,
    ],
    array(
        'nome' => 'Wagner',
        'sobrenome' => 'da Silva',
        'cidade' => 'São José dos Campos'
    )
];

$campo = 'nome';

echo $funcionarios[3][$campo];