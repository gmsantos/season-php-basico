<?php

function titulo($value='')
{
    echo "<hr><b>$value</b><br><br>";
}

titulo('implode() e explode()');

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

//echo $array;
echo $comma_separated;

$array2 = explode("," ,$comma_separated);

var_dump($array2);

titulo('strlen');

$string = 'sou uma string com algumas posições';
echo strlen($string);

titulo('strtolower, strtoupper, ucfirst, ucwords');

$string = 'sou uma String com Algumas letras em Caixa Diferente<br>';

echo strtolower($string);
echo strtoupper($string);
echo ucfirst($string);
echo ucwords($string);

titulo('trim');

$string = '  Gabriel   ';

echo "\n";

echo trim($string);
echo rtrim($string);
echo ltrim($string);  

titulo('substr');

$string = 'sou uma String com Algumas letras em Caixa Diferente<br> sou uma String com Algumas letras em Caixa Diferente<br> sou uma String com Algumas letras em Caixa Diferente<br> sou uma String com Algumas letras em Caixa Diferente<br>';

echo substr($string, 0, 40) . "...";
