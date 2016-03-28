<?php

$mysqli = new mysqli('127.0.0.1', 'usuario', 'senha', 'meusite');

if ($mysqli->connect_errno) {
    die('Não foi possível conectar-se ao banco de dados: ' . $mysqli->connect_errno);
    exit();
}

// "Hoje" em formato SQL
$data = date('Y-m-d');

// Prepara uma consulta SQL
if ($sql = $mysqli->prepare("SELECT `id`, `titulo`, `link` FROM `noticias` WHERE `ativa` = 1 AND `data` <= ?")) {

  $sql->bind_param('s', $data);
  $sql->execute();
  $sql->bind_result($id, $titulo, $link);

  while ($row = $sql->fetch_assoc()) {
    echo '['. $row['titulo'] .']('. $row['link'] .')';
  } 
  
  echo 'Total de notícias: ' . $sql->num_rows;

  $sql->close();
}

$mysqli->close();
