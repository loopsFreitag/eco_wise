<?php
require_once '../bundles/DataBaseBundle/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();

$pdo->exec("CREATE TABLE person (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    document VARCHAR(15) NULL,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    country VARCHAR(50) NULL,
    password VARCHAR(255),
    birth_date DATE NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);"
);
