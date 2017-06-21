<?php
$host = 'localhost';
$user = 'username';
$password = 'phpexec';
$db = 'userdata';

//create mysql connection
$mysqli = new mysqli($host,$user,$password,$db);
if ($mysqli->connect_error) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

?>

