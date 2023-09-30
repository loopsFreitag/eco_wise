<?php
require_once '../bundles/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();

$pdo->exec("CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    id_person INT,
    type INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_person) REFERENCES person(id)
);"
);
