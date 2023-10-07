<?php
require_once '../bundles/DataBaseBundle/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();

$pdo->exec("CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    person_id INT,
    type INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (person_id) REFERENCES person(id)
);"
);
