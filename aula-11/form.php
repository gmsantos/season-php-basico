<?php

session_start();

if (isset($_POST['nome'])){
    
    $id = count($_SESSION);
    $id++;
    
    $_SESSION['teste' . $id] = [
        'nome' => $_POST['nome'],
        'sobrenome' => $_POST['sobrenome'],
        'data_nascimento' => $_POST['data_nascimento'],
    ];
    
    echo session_id();
    
    var_dump($_SESSION);
    
 

}

