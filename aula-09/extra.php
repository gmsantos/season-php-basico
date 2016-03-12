<?php

file_put_contents('fast.php', '.........', FILE_APPEND);   /// modo w ... Escreve do começo, apaga tudo, e cria arquivo

echo file_get_contents('fast.php');