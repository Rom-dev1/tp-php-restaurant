<?php

define('DB_HOST', 'Localhost');
define('DB_NAME', 'tp-restaurant');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try{
    $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (Exception $exception){
    echo $exception->getMessage();
    die();
}

function db(){
    global $db;
    return $db;
}

?>