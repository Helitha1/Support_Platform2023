<?php

use Database as GlobalDatabase;

class Database{

    public static $connection;

    public static function setUpConnection(){

        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("http://192.168.1.2", "root", "sasiMAX200@123", "migten2", "3306");
        }
    }

    public static function iud($q){

        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q){

        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}

// $d = new Database();

// $d->setUpConnection();