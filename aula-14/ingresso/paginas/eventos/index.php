<?php

$raiz = '../../';
require_once $raiz . 'funcoes_basicas.php';

$eventos = eventos_listar();

$conteudo = '<h1>Lista de Eventos</h1>';
$conteudo .= '<ul>';

foreach ($eventos as $evento) {
    $conteudo .= sprintf(
        '<li>Dia: %s - <a href="%s">%s</a></li>', 
        formatar_data($evento['data'], 'd/m/Y'),
        '/aula-14/ingresso/paginas/eventos/detalhe.php?id=' . $evento['id'],
        $evento['nome']
    );
}

$conteudo .= '</ul>';

gerar_pagina($conteudo);
