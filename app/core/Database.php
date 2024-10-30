<?php

class Database {

    private static $host;
    private static $port;
    private static $db;
    private static $user;
    private static $pw;

    private static function connect() {
        self::$host = getenv('DB_HOST');
        self::$port = getenv('DB_PORT');
        self::$db   = getenv('DB_DATABASE');
        self::$user = getenv('DB_USER');
        self::$pw   = getenv('DB_PASSWORD');
        
        $pdo = new \PDO('mysql:host=' . self::$host . ';dbname=' . self::$db .';charset=utf8', self::$user, self::$pw);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    public static function query($query, $params = array()) {
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
    }
}

?>