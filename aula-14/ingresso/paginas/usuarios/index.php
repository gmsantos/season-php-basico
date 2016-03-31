<?php

$raiz = '../../';
require_once $raiz . 'funcoes_basicas.php';

$usuarios = usuarios_listar();

$conteudo = '<h1>Lista de Usuarios</h1>';
$conteudo .= '<ul>';

foreach ($usuarios as $usuario) {
    $conteudo .= sprintf(
        '<li>%s, da cidade de %s</li>', 
        $usuario['nome'],
        $usuario['cidade']
    );
}

$conteudo .= '</ul>';

gerar_pagina($conteudo);
