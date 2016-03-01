<pre><?php

$a = 5;
$b = 21;
$c = 9;
$d = 40;

$maior = $b;

if ($a > $maior) {
    $maior = $a;
} 
if ($c > $maior) {
    $maior = $c;
}
if ($d > $maior) {
    $maior = $d;
}

echo $maior . '<br>';


if ($a > $b) {
    if ($a > $c){
        echo 'Maior a ' . $a;
    } else {
        echo 'Maior c ' . $c;
    }
} elseif ($b > $c){
    echo 'Maior b ' . $b;
} else {
    echo 'Maior c ' . $c;
}




?>
</pre>