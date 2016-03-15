<?php

function titulo($value='')
{
    echo "<hr><b>$value</b><br><br>";
}

titulo('is_array');

$yes = ['this', 'is', 'an array'];
echo is_array($yes) ? 'Array' : 'not an Array';
echo "<br>";

$no = 'this is a string';
//echo $no[2];
//echo "<br>";
echo is_array($no) ? 'Array' : 'not an Array';

titulo('in_array');

$os = ["Mac", "Windows", "Linux", 10];
 
if (in_array("Irix", $os)) { 
    echo "Tem Irix";
    echo "<br>";
}

if (in_array("Mac", $os)) { 
    echo "Tem mac";
    echo "<br>";
}

// strict comparsion
if (in_array("10", $os, true)) { 
    echo "Tem Windows 10";
    echo "<br>";
}

titulo('count');

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$result = count($a);
// $result == 3

echo $result;
echo '<br>';

$b[0] = 7;
$b[5] = 9;
$b[10] = 11;
$b[1] = 11;
$b[2] = 11;
$result = count($b);
// $result == 5

echo $result;
echo '<br>';

$result = count(null);
// $result == 0

echo $result;
echo '<br>';

$result = count('teste');
// $result == 1

echo $result;
echo '<br>';

titulo('array_rand');

$input = array('escolhido' => "Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 3);
//var_dump($rand_keys);
print_r($rand_keys);

echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo $input[$rand_keys[2]] . "\n";

titulo('array_key_exists');

$b[0] = 7;
$b[5] = 9;
$b[10] = 11;
$b[1] = 11;
$b[2] = 11;
$b[6] = null;

if (isset($b[6])) {
    echo 'Posicao 6 existe';
}

if (array_key_exists(6, $b)){
    echo 'Posicao 6 existe';
}

titulo('sort');

var_dump($b);

sort($b);

var_dump($b);
