<?php

$mysqli = mysqli_connect("localhost.com", "user", "password", "database");

$result = mysqli_query($mysqli, "SELECT 'A world full of ' AS _msg FROM DUAL");

while($row = mysqli_fetch_assoc($result)){
    echo $row['field'];
}

mysqli_close($mysqli);
