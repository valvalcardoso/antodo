<?php

$host = 'localhost';
$dbname = 'Antodo';
$user = 'root';
$password = '';
$sgbd = "mysql:host=$host;dbname=$dbname";

$connect = new PDO($sgbd,$user,$password);

?>
