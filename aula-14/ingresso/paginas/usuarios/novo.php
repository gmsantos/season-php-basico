<?php

$raiz = '../../';
require_once $raiz . 'funcoes_basicas.php';

$conteudo = <<<CONTEUDO
<h1>Novo Usuário</h1>
CONTEUDO;

gerar_pagina($conteudo);
