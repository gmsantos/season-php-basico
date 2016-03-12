<?php

$fileResource = fopen(__FILE__, 'r');

while (! feol($fileResource)){
    echo fread($fileResource, 1024);
}

fclose($fileResource);