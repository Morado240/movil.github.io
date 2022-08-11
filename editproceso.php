<?php
print_r($_POST);
if(!isset($_POST['codigo'])){
header('Location: index.php?mensaje_incompleto');
}

    include_once "model/conexion.php";

    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $turno = $_POST['txtTurno'];
    $sector = $_POST['txtSector'];
    $estatus = $_POST['txtEstatus'];
    $area = $_POST['txtArea'];
    

    $sentencia = $bd->prepare("UPDATE personal SET nombre = ?, turno = ?, sector = ?, estatus = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $turno, $sector, $estatus, $codigo,]);

    $sentencia2 = $bd->prepare("call sp_HORA(?);");    
    $resultado2 = $sentencia2->execute([$area]);                               
    
        
    if ($resultado === TRUE){
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje_incompleto');
        exit();
    }

