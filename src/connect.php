<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'hbdb';

try {
    $conn = new PDO ("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectado com sucesso!';
} catch (PDOException $e) {
    echo 'Falha na conexão: ' . $e->getMessage();
}
require 'insert.php';
?>