<?php

function repo_eventos_all()
{
    return select('eventos');
}

function repo_eventos_get($id)
{
    return select_one('eventos', $id, ['nome', 'data']);
}

function repo_eventos_add($nome, $data)
{
    $mysqli = conectar_mysqli();

    $statment = $mysqli->prepare("INSERT INTO eventos (nome, data) VALUES (?,?)");
    $statment->bind_param('ss', $nome, $data);
    
    return $statment->execute();
}
