<?php

if (copy('data.txt', 'data2.txt')){
    echo 'Arquivo copiado <br>';
}

//exit;

if (unlink('data2.txt')){
    echo 'Arquivo deletado! <br>';
}
