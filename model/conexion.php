<?php

$host = "localhost"; 
$user = "root";
$password = ""; 
$database = "comisaria";

try {
    $bd = new PDO (
        'mysql:host=localhost;
        dbname='.$database,
        $user,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    echo"Problema de conexión: ".$e->getMessage();
}

?>