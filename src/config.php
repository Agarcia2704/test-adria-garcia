<?php
/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

$config = [
    "db" => [
        "user" => "root",
        "pass" => "1234",
        "db" => "test1",
        "host" => "localhost"
    ],
];

include "../src/models/Db.php";
include "../src/models/Users.php";