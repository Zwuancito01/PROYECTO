<?php

$server = 'localhost';
$username = 'id18904181_work';
$password = '$q3_vK)32NV[KGO^';
$database = 'id18904181_uworknow';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>