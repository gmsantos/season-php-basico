<?php

$mysqli = mysqli_connect("localhost", "php", "senha", "teste");

$result = mysqli_query($mysqli, "SELECT mensagem AS field FROM mensagem");

while($row = mysqli_fetch_assoc($result)){
    echo $row['field'] . '<br>';
}

$data = date('U');
mysqli_query($mysqli, 'INSERT INTO mensagem (mensagem) VALUES ("Nova Mensagem ' . $data . '")');

mysqli_close($mysqli);
