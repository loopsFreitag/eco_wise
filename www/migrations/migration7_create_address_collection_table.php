<?php
require_once '../bundles/DataBaseBundle/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();

$pdo->exec("CREATE TABLE address_collection (
    id INT AUTO_INCREMENT PRIMARY KEY,
    collection_id INT,
    address_id int,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (collection_id) REFERENCES waste_collection(id),
    FOREIGN KEY (address_id) REFERENCES address(id)
);"
);
