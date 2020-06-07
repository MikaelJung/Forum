<?php 

    namespace App;


    abstract class DAO{

        const DB_HOST = "localhost";
        const DB_NAME = "forum";
        const DB_USER = "root";
        const DB_PASS = "root";
    

    public static function getConnection(){

        //connexion à la BDD
        try {
            $pdo = new \PDO(
                'mysql:host='. self::DB_HOST.';dbname='.self::DB_NAME,
                self::DB_USER,
                self::DB_PASS,
                [
                     \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                     \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC,
                     \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]
                );
                return $pdo;
        }
        catch(Exception $e){
            echo $e->getMessage();
            die();
        }
    }
}