<?php
require_once '../bundles/DataBaseBundle/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();

$pdo->exec("CREATE TABLE friends (
    id INT AUTO_INCREMENT PRIMARY KEY,
    requester_id INT,
    friend_id INT,
    status INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (requester_id) REFERENCES user(id),
    FOREIGN KEY (friend_id) REFERENCES user(id)
);"
);
