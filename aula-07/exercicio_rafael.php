<?php

//$anos = [1988, 1992, 2015, 2016, 1996, 1700, 1800, 1600, 2000, 2012];

$anos = range(1700, 2016);

foreach ($anos as $ano) {
	$bissexto = false;
	
	if ($ano % 4 == 0) {
		if ($ano % 100 == 0) {
			if ($ano % 400 == 0) {
				$bissexto = true;
			}
		} else {
			$bissexto = true;
		}
	}
	
	if ($bissexto) {
		echo "O ano $ano é bissexto! <br />";
	} else {
		echo "O ano $ano não é bissexto. <br />";
	}
}