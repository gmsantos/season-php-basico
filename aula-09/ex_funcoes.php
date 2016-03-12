<?php

echo '<strong>Função:</strong> array_values() - http://php.net/manual/pt_BR/function.array-values.php<br />';
echo 'Essa função espera apenas 1 argumento (do tipo array) e serve para retornar todos os valores dessa array.<br /><br />';
$minha_array = ['chave1' => 'oi', 'legal', 'chave_especial' => 2, 'chave_3' => ':D', ':('];
echo '<strong>Aqui segue como a array $minha_array é:</strong>';
var_dump($minha_array);
echo '<br /><strong>Aqui segue o que a função array_values retorna:</strong>';
var_dump(array_values($minha_array));

echo '<br /><strong>O inverso do array_values é o array_keys():</strong>';
var_dump(array_keys($minha_array));
echo '<br /><hr /><br />';


echo '<br /><hr /><br />';


echo '<strong>Função:</strong> str_pad() - http://php.net/manual/pt_BR/function.str-pad.php<br />';
echo 'Essa função espera até 4 argumentos (alguns opcionais) e serve para preencher uma string com mais informações.<br /><br />';
$minha_string = '43104';
echo '<strong>Aqui segue como a string $minha_string é:</strong>';
var_dump($minha_string);
echo '<br /><strong>Aqui segue o que a função str_pad($minha_string, 10) retorna:</strong>';
var_dump(str_pad($minha_string, 10));
echo '<br /><strong>Aqui segue o que a função str_pad($minha_string, 10, 0) retorna:</strong>';
var_dump(str_pad($minha_string, 10, 0));
echo '<br /><strong>Aqui segue o que a função str_pad($minha_string, 10, 0, STR_PAD_LEFT) retorna:</strong>';
var_dump(str_pad($minha_string, 10, 0, STR_PAD_LEFT));