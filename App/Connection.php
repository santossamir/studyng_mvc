<?php
    namespace App;

    class Connection {

        public static function getDb(){
            try{
                $conn = new \PDO(
                    "mysql:host=localhost;dbname=db_mvc;charset=utf8",
                    "root",
                    "S@mir123"
                );

                return $conn;

            }catch(\PDOException $e){

            }
        }
    }
?>