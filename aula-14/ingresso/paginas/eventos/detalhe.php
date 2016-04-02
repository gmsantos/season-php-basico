<?php

$raiz = '../../';
require_once $raiz . 'funcoes_basicas.php';

$conteudo = '<h1>Detalhes do Evento</h1>';

if (! isset($_GET['id'])){
    $conteudo .= '<p>Nenhum evento selecionado!</p>';
} else {
    if ($detalhes = eventos_detalhe($_GET['id'])){
        $conteudo .= "<h2>{$detalhes['nome']}</h2>";
        $conteudo .= "<p>" . formatar_data($detalhes['data']) . "</p>";
    } else {
        $conteudo .= 'Tem boi na linha velho';
    }
}

gerar_pagina($conteudo);
