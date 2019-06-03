<?php

function getConnectToDB(){
    return new PDO('mysql:host=127.0.0.1;port=8889;dbname=php_project_db', 'root', 'root');
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