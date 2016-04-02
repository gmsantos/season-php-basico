<?php

require_once 'negocio/usuarios.php';
require_once 'negocio/eventos.php';
require_once 'persistencia/mysqli.php';
require_once 'persistencia/eventos.php';
require_once 'persistencia/usuarios.php';
require_once 'funcoes_data.php';

function dd($var){
    die(var_dump($var));
};

function gerar_pagina($conteudo, $caminhoLayout = 'paginas/_layout.php')
{
    include $caminhoLayout;
}