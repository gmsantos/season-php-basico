<?php

// Connecting is as simple as just instantiating a new instance of MySQLi, 
// we'll be using a username of user with a password of pass connecting to 
// the demo database on the localhost host:

$db = new mysqli('localhost', 'user', 'pass', 'demo');

if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql = <<<SQL
    SELECT *
    FROM `users`
    WHERE `live` = 1 
SQL;

if (!$result = $db->query($sql)) {
    die('There was an error running the query [' . $db->error . ']');
}

while ($row = $result->fetch_assoc()) {
    echo $row['username'] . '<br />';
}

// SELECT
echo 'Total results: ' . $result->num_rows;

// INSERT
echo 'Total rows updated: ' . $db->affected_rows;

$result->free();

// SELECT
echo 'Total results: ' . $result->num_rows;

// INSERT
echo 'Total rows updated: ' . $db->affected_rows;

$db->real_escape_string('This is an unescaped "string"');
$db->escape_string('This is an unescape "string"');

// Prepared statments
$statment = $db->prepare("SELECT `name` FROM `users` WHERE `username` = ?");

// We simply use the method bind_param to bind a parameter. 
// You must specify the type as the first parameter then the 
// variable as the second - so for instance we'd use s as the 
// first parameter (for string), and our $name variable as the second:
$name = 'Bob';
$statement->bind_param('s', $name);

// If we had 3 parameters to bind which are of varying types 
// we could use bind_param('sdi', $name, $height, $age); for example. 
// Note the types are not separated at all as the first parameter.
$statement->execute();

$statement->bind_result($returned_name);

while ($statement->fetch()) {
    echo $returned_name . '<br />';
}

$statement->free_result();

$db->autocommit(false);
$db->commit();
$db->rollback();

$db->close();
