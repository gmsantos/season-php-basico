<?php

$r = fopen('teste.txt', 'r+');

ftruncate($r, 5);

echo 'Arquivo foi "cortado"';
fclose($r);

exit;

// Isso
$r = fopen('teste.txt', 'r+');
ftruncate($r, 0);

// é o mesmo que 
$r = fopen('teste.txt', 'w');