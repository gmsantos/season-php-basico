<?php

$ts = mktime(12, 0, 0, 1);

$dataStamp = strtotime("2016-02-21");

$data = date('d/m/Y', $dataStamp);

$dataSeparada = explode('/', $data);

if (checkdate($dataSeparada[1], $dataSeparada[0], $dataSeparada[2])){
    $dataFormatada = implode('/', $dataSeparada);
    echo "Data Valida $dataFormatada";    
} else {
    echo 'Data Inválida';
}
