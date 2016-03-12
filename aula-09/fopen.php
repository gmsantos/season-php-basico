<?php

$fileResource = fopen(__FILE__, 'r');

while (! feof($fileResource)){
    echo fread($fileResource, 1024);
}

fclose($fileResource);