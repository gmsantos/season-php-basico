<?php

$array = range('a', 'i');

for($i=0; $i <= 10; $i++){
    echo $array[$i];
}


foreach ($array as $value){
    echo $value;
}