<?php

$fileResource = fopen(__FILE__, 'r');

echo fread($fileResource, filesize(__FILE__));

fclose($fileResource);