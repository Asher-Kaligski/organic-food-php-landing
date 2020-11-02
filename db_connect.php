<?php

DEFINE('DB_USER', 'root1');
DEFINE('DB_PASSWORD', 'root1');

$dsn = 'mysql:host=localhost:3306;dbname=organic_food';

try {

    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    $err_msg = $e->getMessage();
    echo $err_msg;
    exit();
}