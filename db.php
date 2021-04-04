<?php
$dsn = 'mysql:host=localhost;dbname=company';
$username = 'elgohary';
$password = 'elgohary';
$options = [];
global $connection;

try {
    $connection = new PDO($dsn, $username, $password, $options);

} catch(PDOException $e) {


}