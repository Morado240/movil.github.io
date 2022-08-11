<?php
session_start();
include_once "model/conexion.php";

$usuario1 = $_POST['txtUser'];
$contrasena1 = $_POST['txtPassword'];

$sentencia1 = $bd->prepare('select * from importantes where usuario2 = ? and contrasena = ?;');

$sentencia1->execute([$usuario1, $contrasena1]);
$datos1 = $sentencia1->fetch(PDO::FETCH_OBJ);
// print_r($datos1);

if ($datos1 === false){
header('Location: login.php');
}elseif ($sentencia1->rowCount() == 1) {
     $_SESSION['usuario2'] = $datos1->usuario2;
     header('Location: index2.php');
}



?>


