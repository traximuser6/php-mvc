<?php

namespace core;

use PDO;

class Database {

    private static ?PDO $connection = null;

    public static function connection(): PDO {
        if (self::$connection === null) {
            self::$connection = new PDO(
                'mysql:host=localhost;dbname=my_mvc;charset=utf8mb4',
                'root',
                '',
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
            );
        }

        return self::$connection;
    }

}