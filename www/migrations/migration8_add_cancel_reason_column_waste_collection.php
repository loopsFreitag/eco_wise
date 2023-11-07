<?php
require_once '../bundles/DataBaseBundle/DatabaseConnection.php';

$pdo = DatabaseConnection::getConnection();

$pdo->exec("ALTER TABLE waste_collection
ADD denny_reason varchar(255); ;"
);
