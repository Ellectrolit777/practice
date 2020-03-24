<?php

class Connection{
    public static function make($config){
        
        try{
            return new PDO(
                "mysql:host={$config['host']};dbname={$config['db']}",
                $config["login"],
                $config["password"],
                $config["opt"]
            );
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
}

// $host = "localhost";
// $db = "dbtwo";
// $login = "root";
// $password = "";
// $opt = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
// $dsn="mysql:host=$host;dbname=$db";

// $myDB = new PDO($dsn,$login,$password,$opt);


