<?php

require_once 'DBConnException.php';

class DatabaseConnection
{
    private static $pdo;

    public static function getConnection() {
        if (self::$pdo === null) {
            $host = 'db';
            $username = 'root';
            $password = 'root';
            $database = 'handle';

            try {
                self::$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new DBConnException();
            }
        }

        return self::$pdo;
    }

    public static function getMysqlConnection() {
        $host = 'db';
        $username = 'root';
        $password = 'root';

        try {
            $mysql = new PDO("mysql:host=$host", $username, $password);
            $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Mysql connection failed: " . $e->getMessage());
        }

        return $mysql;
    }
}
