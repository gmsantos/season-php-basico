<pre><?php

$numeroTabuada = 5;

$i = 1;

// 0 - n vezes
while ($i <= 10) {
    echo "$numeroTabuada x $i = " . $numeroTabuada * $i . PHP_EOL;
    $i++;
}

echo PHP_EOL;

$numeroTabuada++;
$i = 1;

// 1 - n vezes
do {
    echo "$numeroTabuada x $i = " . $numeroTabuada * $i . PHP_EOL;
    $i++; 
} while ($i <= 51);

echo PHP_EOL;

$numeroTabuada++;
$i = 1;
