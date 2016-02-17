<?php

$a = 3;
$b = 1;

if ($a > $b){
    echo 'O valor de a :' . $a . " é maior que $b \n";
    $a = $b;  // Atribui o valor de $b em $a
    printf('Agora do valor de a é : %s', $b);
}

?>