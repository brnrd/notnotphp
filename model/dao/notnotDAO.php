<?php

class NotNotDAO {

    private static $connection;
    private static $username = 'brnrd_blah';
    private static $password = 'test';

    private static function getConnection() {
        try {
            self::$connection = new PDO('mysql:host=mysql2.alwaysdata.com;dbname=brnrd_notphp', self::$username, self::$password);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    
    public static function getAll() {
        self::getConnection();
        try {
            $data = self::$connection->query('SELECT * FROM prof JOIN enseigner ON prof_id = id_prof JOIN cours ON id_cours = cours_id');
            return $data->fetchAll();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}

?>
