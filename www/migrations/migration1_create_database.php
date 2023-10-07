<?php
require_once '../bundles/DataBaseBundle/DatabaseConnection.php';

$pdo = DatabaseConnection::getMysqlConnection();

$pdo->exec("CREATE DATABASE IF NOT EXISTS handle");

$pdo = DatabaseConnection::getConnection();

$pdo->exec("CREATE TABLE migrations (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255),                 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);"
);
