<?php
// db_config.php

$host = 'localhost'; // Endereço do servidor MySQL
$dbname = 'todo_list'; // Nome do banco de dados
$username = 'root'; // Usuário do banco de dados
$password = 'root'; // Senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>