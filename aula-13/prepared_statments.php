<?php

$mysqli = new mysqli('localhost', 'php', 'senha', 'teste');

if ($mysqli->connect_errno) {
    die('Não foi possível conectar-se ao banco de dados: ' . $mysqli->connect_errno);
    exit();
}

// Prepara uma consulta SQL
$insertStmt = $mysqli->prepare('INSERT INTO mensagem (mensagem) VALUES (?)');
$insertStmt->bind_param('s', $data);

$data = 'Timestamp: ' . date('U');

$insertStmt->execute();
$insertStmt->close();

$selectStmt = $mysqli->prepare('SELECT * FROM mensagem');
$selectStmt->execute();

$selectStmt->bind_result($mensagem);

while ($selectStmt->fetch()) {
    echo $mensagem . '<br>';
}

$selectStmt->close();
$mysqli->close();
