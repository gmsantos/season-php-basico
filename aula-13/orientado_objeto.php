<?php

$mysqli = new mysqli("localhost", "php", "senha", "teste");

if ($mysqli->connect_errno) {
    die('Não foi possível conectar-se ao banco de dados: ' . $mysqli->connect_errno);
    exit();
}

$result = $mysqli->query("SELECT mensagem AS field FROM mensagem");

while($row = $result->fetch_assoc()){
    echo $row['field'] . '<br>';
}

$data = date('U');
$mysqli->query('INSERT INTO mensagem (mensagem) VALUES ("Nova Mensagem ' . $data . '")');

$mysqli->close();
