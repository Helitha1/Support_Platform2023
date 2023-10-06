<?php
use Database as GlobalDatabase;

class Database
{
    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", 'M2y?00SQL2//', "migten2", "3306");
        }
    }

    public static function iud($q, $params = [])
    {
        Database::setUpConnection();
        $stmt = Database::$connection->prepare($q);
        if ($stmt) {
            if (!empty($params)) {
                $types = str_repeat('s', count($params)); // Assuming all params are strings
                $stmt->bind_param($types, ...$params);
            }
            $stmt->execute();
            if ($stmt->errno) {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . Database::$connection->error;
        }
    }

    public static function search($q)
    {
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }

    public static function lastInsertId()
    {
        Database::setUpConnection();
        return Database::$connection->insert_id;
    }
}

Database::setUpConnection();
