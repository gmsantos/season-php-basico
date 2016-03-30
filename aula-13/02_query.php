<?php

// Orientado a Objetos
$result = $mysqli->query("SELECT 'A world full of ' AS _msg FROM DUAL");

// Procedural
$result = mysqli_query($mysqli, "SELECT 'A world full of ' AS _msg FROM DUAL");