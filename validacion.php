<?php
 session_start();
 include_once "model/conexion.php";

 $usuario = $_POST['txtUsuario'];
 $contrasena = $_POST['txtContrasena'];
 $departamento = $_POST['txtDepartamento'];
 $sentencia = $bd->prepare('select * from usuarios where
                    usuario = ? and contrasena =?;');

 $sentencia->execute([$usuario, $contrasena]);
 $datos = $sentencia->fetch(PDO::FETCH_OBJ);

//  print_r($datos);

 if($datos === false){
     header('location: login.php');
 }elseif($sentencia->rowCount() == 1){
     $_SESSION['usuario'] = $datos->usuario;
     $_SESSION['departamento'] = $datos->departamento;
     header('Location: index.php');
 }

 
?>