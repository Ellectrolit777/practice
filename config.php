<?php

return [

    "host" => "localhost",
    "db" => "dbtwo",
    "login" => "root",
    "password" => "",
    "opt" => [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
        ]

];