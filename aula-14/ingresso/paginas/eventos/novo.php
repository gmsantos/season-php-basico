<?php

$raiz = '../../';
require_once $raiz . 'funcoes_basicas.php';

if (! $_POST){
    $conteudo = <<<CONTEUDO
    <h1>Novo evento</h1>

    <form action="" method="POST">
        
        Nome: <input type="text" name="nome"> <br>
        Data: <input type="text" name="data" placeholder="Ex: DD/MM/AAAA"> <br>
        
        <input type="submit" name="enviado" value="enviado" />
        
    </form>
CONTEUDO;

} else {
    if (eventos_adicionar($_POST)){
        $conteudo = 'Inserido com Sucesso!';
    } else {
        $conteudo = 'Tem algum problema com as informações, verifique x|';
    }
}

gerar_pagina($conteudo);
