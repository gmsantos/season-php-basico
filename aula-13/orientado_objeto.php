<?php

$mysqli = new mysqli("localhost", "user", "password", "database");

$result = $mysqli->query("SELECT 'A world full of ' AS _msg FROM DUAL");

while($row = $result->fetch_assoc()){
    echo $row['field'];
}

$mysqli->close();
