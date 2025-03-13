
<?php


class Database2 {

    private static $dbHost = "db";
    private static $dbName = "test";
    private static $dbUsername = "root";
    private static $dbUserpassword = "root";
    private static $connection = null;

    public static function connect() {
        if(self::$connection == null) {
            try {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e) {
                die("Erreur de connexion : ".$e->getMessage());
            }
        }

        return self::$connection;
    }

    public static function disconnect() {
        self::$connection = null;
    }
}

Database2::connect();

