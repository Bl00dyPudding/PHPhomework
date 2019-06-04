<?php

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '8889');
define('DB_NAME', 'php_project_db');
define('DB_USER', 'root');
define('DB_PASS', 'root');

function getConnectToDB(){
    return new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER , DB_PASS);
}

function getSQL($sql){
    $dbConnect = getConnectToDB();
    $result = [];
    foreach ($dbConnect->query($sql) as $row){
        $result[] = $row;
    }

    return $result;
}

function sendSQL($sql){
    $dbConnect = getConnectToDB();
    $dbConnect->query($sql);
}