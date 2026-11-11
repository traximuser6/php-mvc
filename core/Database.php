<?php

namespace core;

use PDO;

class Database {

    private static ?PDO $connection = null;

    public static function connection(): PDO {
        if (self::$connection === null) {
            self::$connection = new PDO(
                dsn: 'mysql:host=localhost;dbname=php_mvc;charset=utf8mb4',
                username: 'root',
                password: '',
                options: [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
            );
        }

        return self::$connection;
    }

}