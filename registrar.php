<?php

print_r($_POST);
if(empty($_POST["txtEmpleado"]) || empty($_POST["txtNombre"])
|| empty($_POST["txtTurno"]) || empty($_POST["txtSector"]) 
|| empty($_POST["txtEstatus"]) || empty($_POST["txtArea"])){

 header('Location: index.php?mensaje=ERROR');
 exit();
}

include_once "model/conexion.php";

$no_empleado = $_POST["txtEmpleado"];
$nombre = $_POST["txtNombre"];
$turno = $_POST["txtTurno"];
$sector = $_POST["txtSector"];
$estatus = $_POST["txtEstatus"];
$area = $_POST["txtArea"];

 
$sentencia = $bd->prepare("INSERT INTO personal(no_empleado, nombre, turno, sector, estatus, area) VALUES (?,?,?,?,?,?);");
$resultado = $sentencia->execute([$no_empleado, $nombre, $turno, $sector, $estatus, $area]);

$sentencia2 = $bd->prepare("call sp_HORA(?);");    
$resultado2 = $sentencia2->execute([$area]);                               

    if($resultado == TRUE){
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=Fatalerror (╯ ͡❛ - ͡❛)╯┻━┻');
    }
?>