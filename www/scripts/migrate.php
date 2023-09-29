<?php
require_once '../bundles/DatabaseConnection.php';

try {
    $pdo = DatabaseConnection::getConnection();
    foreach(new DirectoryIterator('../migrations') as $item) {
        if (!$item->isDot() && $item->isFile()) {
            $filename = $item->getFilename();
            $stm = "select name from migrations where name = '". $filename . "';";

            if ($pdo->query($stm)->fetchColumn() == $filename) {
                continue;
            }

            echo "migrating: " . $filename . "\n";
            shell_exec('php ' . $item->getPathname());
            $pdo->exec("INSERT INTO migrations (name) VALUES ('". $item->getFilename() ."');");
        }
    } 
} catch (DBConnException $e) {
    if ($e->getCode() == 321) {
        foreach(new DirectoryIterator('../migrations') as $item) {
            if (!$item->isDot() && $item->isFile()) {
                echo "migrating: " . $item->getFilename(). "\n";
               shell_exec('php ' . $item->getPathname());

               $pdo = DatabaseConnection::getConnection();
               $pdo->exec("INSERT INTO migrations (name) VALUES ('". $item->getFilename() ."');");
            }
        }
    }
} catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage();
}