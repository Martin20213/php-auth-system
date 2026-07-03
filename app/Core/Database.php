<?php

class Database
{
    private static $host = "localhost";
    private static $db_name = "auth_db";
    private static $username = "root";
    private static $password = "";


    public static function connect()
    {
        $conn = new mysqli(self::$host, self::$username, self::$password, self::$db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->set_charset("utf8mb4");
        return $conn;
    }
}