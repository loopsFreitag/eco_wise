<?php
require_once '../bundles/DatabaseConnection.php';

$dir = new DirectoryIterator('../migrations');
$files = [];

foreach ($dir as $fileInfo) {
    if (!$fileInfo->isDir() && !$fileInfo->isDot()){
        $files[$fileInfo->getFilename()] = $fileInfo->getPathname();
    }
}

ksort($files);

try {
    $pdo = DatabaseConnection::getConnection();
    foreach($files as $fileName=>$filePath) {
        $stm = "select name from migrations where name = '". $fileName . "';";

        if ($pdo->query($stm)->fetchColumn() == $fileName) {
            continue;
        }

        echo "migrating: " . $fileName . "\n";
        shell_exec('php ' . $filePath);
        $pdo->exec("INSERT INTO migrations (name) VALUES ('". $fileName ."');");
    }

    echo "everything is migrated! \n";
} catch (DBConnException $e) {
    if ($e->getCode() == 321) {
        foreach($files as $fileName=>$filePath) {
            echo "migrating: " . $fileName . "\n";
            shell_exec('php ' . $filePath);
            $pdo = DatabaseConnection::getConnection();
            $pdo->exec("INSERT INTO migrations (name) VALUES ('". $fileName ."');");
        }

        echo "everything is migrated! \n";
    }
} catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage();
}