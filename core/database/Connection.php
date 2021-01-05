<?php

    namespace App\Core\Database;

    use PDO;
    use PDOException;

    class Connection {
    
        public static function make($config){

            try{
                // return new PDO('mysql:host=127.0.0.1;dbname=cmsgor', 'ruud', 'poep');

                return new PDO(
                    $config['connection'].';dbname='.$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                );


            } catch (PDOException $e) {
                die($e->getMessage());
            };
        }
    };








?>