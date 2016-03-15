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
    [
        'nome' => 'Wagner',
        'sobrenome' => 'da Silva',
        'cidade' => 'São José dos Campos'
    ]
];

// Acessando um único campo
echo $funcionarios[1]['sobrenome'];

var_dump($funcionarios);

// Iterando sob todos os campos, alterando
// a array original
foreach ($funcionarios as $key => $funcionario) {
    if($funcionario['cidade'] == 'São Paulo'){
         $funcionarios[$key]['perc_aumento'] = 0.1;
    } else {
        $funcionarios[$key]['perc_aumento'] = 0.2;
    }
}

var_dump($funcionarios);

// Somente exibindo valores
foreach ($funcionarios as $funcionario) {
    echo $funcionario['nome'] . '<br>';
}