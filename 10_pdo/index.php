<?php

// var_dump(PDO::getAvailableDrivers());

$host = '127.0.0.1';
$port = 3306;
$dbName = 'crm_db';
$charset = 'utf8';
$user = 'root';
$pass = 'root';

$connString = "mysql:host=$host;port=$port;dbname=$dbName;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      => false,
];

$pdo = new PDO($connString, $user, $pass, $options);


$stmt = $pdo->query('SELECT * FROM users;');

while($row = $stmt->fetch()) {
    echo $row['email'] . '<br>';
}









