<?php
require_once '../bundles/DataBaseBundle/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();

$pdo->exec("CREATE TABLE waste_collection (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    waste_collector INT,
    status INT,
    description varchar(255),
    weight float,
    collection_time DATETIME,
    code smallint,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user(id),
    FOREIGN KEY (waste_collector) REFERENCES user(id)
);"
);
