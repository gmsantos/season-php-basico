<pre><?php

$numeroTabuada = 7;

for ($i = 1; $i <= 10; $i++) {
    echo "$numeroTabuada x $i = " . $numeroTabuada * $i . PHP_EOL;
}

$numeroTabuada++;

echo PHP_EOL;

for ($i = 10; $i >= 1; $i--) {
    echo "$numeroTabuada x $i = " . $numeroTabuada * $i . PHP_EOL;
}