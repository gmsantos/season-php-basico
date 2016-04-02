<?php

function conectar_mysqli() 
{
    return new mysqli('localhost', 'php', 'senha', 'ingresso');
}

function select($tabela, $campos = '*')
{
    if (is_array($campos)) {
        $campos = implode(',', $campos);
    }
    
    $mysqli = conectar_mysqli(); 
    $result = $mysqli->query("SELECT $campos FROM $tabela;");

    return $result->fetch_all(MYSQLI_ASSOC);        
}

function select_one($tabela, $id, $campos = '*')
{
    if (is_array($campos)) {
        $campos = implode(',', $campos);
    }
   
    $mysqli = conectar_mysqli(); 
    $statment = $mysqli->prepare("SELECT $campos FROM $tabela WHERE id = ?;");
    $statment->bind_param('s', $id);
    $statment->execute();
    
    $result = $statment->get_result();

    return $result->fetch_assoc();        
}

function insert($tabela, array $campos, callable $bind)
{
    $mysqli = conectar_mysqli();
    
    $params = rtrim(str_repeat('?,', count($campos)), ',');
    $campos = implode(', ', $campos);
    
    $statment = $mysqli->prepare("INSERT INTO $tabela ($campos) VALUES ($params)");
    
    
    return $statment;
}