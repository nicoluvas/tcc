<?php

namespace App;

abstract class Connection {   
    public static function connect(){
        $host = 'localhost';
        $dbname = 'db_bhaskara';
        $user = 'root';
        $pwd = '';

        try {
            $conn = new PDO("mysql:host={$host};dbname={$dbname};", $user, $pwd);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $conn;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
