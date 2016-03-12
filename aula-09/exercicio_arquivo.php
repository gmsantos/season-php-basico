<?php

// definir o nome do arquivo
$nomeArquivo = 'ex/segredo.txt';

// qual a ação vai ser executada
$mode = 'w';

// abrir o arquivo
$fileResource = fopen($nomeArquivo, $mode);

// colocar conteudo no arquivo
for ($i = 1; $i < 10000; $i++) {
    fwrite($fileResource, '.');
}

// fechar o arquivo
fclose($fileResource);

echo 'Arquivo salvo com sucesso!!';

// pegar o nome do arquivo gerado
// abrir o arquivo gerado, mas mudando o modo
$mode = 'r';
$fileResource = fopen($nomeArquivo, $mode);

// ler o arquivo por partes
while (!feof($fileResource)){
    //exibir o trecho
    echo fread($fileResource, 1024);
    sleep(1); 
}

// fechar o arquivo
fclose($fileResource);