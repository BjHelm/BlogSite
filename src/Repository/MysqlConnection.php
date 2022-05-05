<?php

namespace BlogApp\Repository;

use PDO;
use PDOException;

class MysqlConnection
{
    public static function connect(): PDO
    {
        static $db = null;
        if ($db === null) {
            $host = $_ENV["DB_HOST"];
            $dbname = $_ENV["DB_NAME"];
            $username = $_ENV["DB_USER"];
            $password = $_ENV["DB_PASS"];

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                    $username, $password, $options);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $db;
    }
}