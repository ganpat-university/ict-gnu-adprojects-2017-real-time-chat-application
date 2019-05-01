<?php

$connect_error = 'sorry, we are experiencing connection problems!';
//connection variables

$host = 'localhost:3307';
$user = 'root';
$password = '';
$db ='accounts'; //database

//connection

$mysqli = new mysqli($host,$user,$password, $db);
if ($mysqli->connect_error) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();

}

?>
