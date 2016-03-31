<?php

$raiz = '../';
require_once $raiz . 'funcoes_basicas.php';

$conteudo = <<<CONTEUDO
    <h1>Sistema Gerenciador de Ingressos</h1>
    
    <a href="ingressos/comprar.php">Comprar Ingressos</a>
    <a href="usuarios/novo.php">Cadastro de Usuários</a>
    <a href="eventos/novo.php">Incluir novo evento</a>
    
    <a href="usuarios/index.php">Lista de Usuários</a>
    <a href="eventos/index.php">Lista de eventos</a>
    
    <h2>Relatórios</h2>
    
    <a href="ingressos/vendas.php">Número de Ingressos vendidos por evento</a>
    <a href="eventos/arrecadacao.php">Total Arrecadado por evento</a>    
CONTEUDO;

gerar_pagina($conteudo);
