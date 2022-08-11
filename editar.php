<?php include 'template/header.php' ?>

<?php

if(!isset($_GET['codigo'])){
    header('Location: index.php?mensaje=incompleto');
}

    include_once "model/conexion.php";
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from personal where codigo =?;");
    $sentencia->execute([$codigo]);
    $personal = $sentencia->fetch(PDO::FETCH_OBJ);




?>

<br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Edición de personal
                    </div>
                    <form class="p-4" method="POST" 
                    <div class="mb-3">
                    <label class="form-label"> Nombre del alumno </label>
                    <input type="text" class="form-control" name="txtNombre" autofocus
                            value="<?php echo $personal->nombre; ?>" >
                    </div>
                    <div class="mb-3">
                    <label class="form-label"> Turno </label>
                    <select type="text" class="form-control" name="txtTurno" autofocus 
                     value="<?php echo $personal->turno; ?>">
                    <option value="">Selecciona el turno</option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                    <option value="Nocturno">Nocturno</option> 
                    </select>
                    </div>
                    <div class="mb-3">
                    <label class="form-label"> Carrera </label>
                    <select type="text" class="form-control" name="txtSector" autofocus 
                    value="<?php echo $personal->sector; ?>">
                    <option value="Ing. Sistemas Comp.">Ing. Sistemas Comp.</option> 
                    </select>
                    </div>
                    <div class="mb-3">
                    <label class="form-label"> Estatus </label>
                    <select type="text" class="form-control" name="txtEstatus" autofocus
                            value="<?php echo $personal->estatus; ?>">
                        <option value="">Selecciona el estatus</option>
                        <option value="Presente">Presente</option>
                        <option value="Faltando">Faltando</option>
                        <option value="Incapacidad">Incapacidad</option>
                        <option value="Permiso">Permiso</option> 
                        <option value="Suspendido">Suspendido</option> 
                    </select>
                    </div>
                    <div class="mb-3">
                    <label class="form-label"> Area </label>
                    <select type="text" class="form-control" name="txtArea" autofocus
                     value="<?php echo $personal->area; ?>">
                     <option value="">Ingeniería</option>
                    </select>

                    </div>
                    <input type="hidden" name="codigo" value="<?php echo $personal->codigo; ?>">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>




<?php include 'template/footer.php' ?>