<?php
require_once '../bundles/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();

$pdo->exec("CREATE TABLE person (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    document VARCHAR(15),
    name VARCHAR(255),
    email VARCHAR(255),
    country VARCHAR(50),
    password VARCHAR(255),
    birth_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);"
);
