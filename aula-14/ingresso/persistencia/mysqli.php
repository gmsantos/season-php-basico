<?php

function conectar_mysqli() {
    return new mysqli('localhost', 'php', 'senha', 'ingresso');
}

function listar($tabela){
    $mysqli = conectar_mysqli(); 
    $result = $mysqli->query("SELECT * FROM $tabela;");

    return $result->fetch_all(MYSQLI_ASSOC);        
}