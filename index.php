<?php include 'template/header.php' ?>

<?php
    session_start();

    $depto=$_SESSION['departamento'];
    // echo $depto;


    if(!isset($_SESSION['usuario'])){
        header('Location: login.php');
    }
    elseif(isset($_SESSION['usuario'])){
        include_once "model/conexion.php";
        $sentencia = $bd -> query("select * from personal WHERE area = '$depto'");  
        $personal = $sentencia->fetchALL(PDO::FETCH_OBJ);
        
        //print_r($personal);
    }
    else{
        echo "error";
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

        <!-- Alertas -->

        <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'ERROR'){
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> No se completaron los datos correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
            }
        ?>

       

        <!-- Alertas -->

        <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registrado!</strong> Se registro correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
            }
        ?>

        <!-- Alertas -->

        <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'incompleto'){
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> No se actualizo al personal.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
            }
        ?>

        
        <!-- Alertas -->

        <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Editado!</strong> Se edito correctamente el personal.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
            }
        ?>

<?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Eliminado!</strong> Se eliminó correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
            }
        ?>


        <!-- Fin de alerta -->

        <center>
            <h3> Bienvenido/a <?php echo $_SESSION['usuario']?> </h3>
            <a href="cerrar.php"> Cerrar sesión </a>
        </center>
        <div class="col-md-1">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Registro
            </button>
        </div>
        <br>
                <div class="p-7">
                        <table style="width:120%" class="table aling-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">No.de control</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Turno</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Carrera</th>
                                    <th style="width:auto" scope="col">Hora</th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php
                                 



                                foreach($personal as $dato){

                                ?>

                                <tr>
                                    <td scope="row"><?php echo $dato->codigo; ?></td>
                                    <td><?php echo $dato->no_empleado; ?></td>
                                    <td><?php echo $dato->nombre; ?></td>
                                    <td><?php echo $dato->turno; ?></td>
                                    <td><?php echo $dato->estatus; ?></td>
                                    <td><?php echo $dato->area; ?></td>
                                    <td><?php echo $dato->hora; ?></td>

                                    <td><a class="text-primary" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></td>
                                    <td><a class="text-danger" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></td>
                                </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
              </div>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>


        <div class="col-md-6">

            <!-- Modal -->
            <form class="p-4" method="POST" action="registrar.php">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Nombre -->
                <div class="modal-body">
                    <label class="form-label"> Nombre </label>
                    <input type="text" class="form-control" name="txtNombre" autofocus >
                </div>
                   <!-- No. Empleado -->
                   <div class="modal-body">
                    <label class="form-label"> No. de control </label>
                    <input type="number" class="form-control" name="txtEmpleado" autofocus > 
                </div>
                   <!-- Turno -->
                   <div class="modal-body">
                    <label class="form-label"> Turno </label>
                    <select type="text" class="form-control" name="txtTurno" autofocus >
                    <option value="">Selecciona el turno</option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                    <option value="Nocturno">Nocturno</option> 
                    </select>
                </div>
                   <!-- Sector -->
                   <div class="modal-body">
                    <label class="form-label"> Carrea </label>
                    <select type="text" class="form-control" name="txtSector" autofocus >
                    <option value="">Seleccione la carrera</option>
                    <option value="Ing. Sistemas Comp.">Ing. Sistemas Comp.</option> 
                    <option value="Lic. Diseño Gráfico">Lic. Diseño Gráfico</option> 
                    <option value="Lic. Negocios Internacionales">Lic. Negocios Internacionales</option> 

                    </select>

                </div>
                   <!-- Estatus -->
                   <div class="modal-body">
                    <label class="form-label"> Estatus </label>
                    <select type="text" class="form-control" name="txtEstatus" autofocus >
                    <option value="">Selecciona el estatus</option>
                    <option value="Presente">Presente</option>
                    <option value="Faltando">Faltando</option>
                    <option value="Incapacidad">Incapacidad</option>
                    <option value="Permiso">Permiso</option> 
                    <option value="Suspendido">Suspendido</option>
                    </select>
                </div>
                   <!-- Area -->
                   <div class="modal-body">
                    <label class="form-label"> Area </label>
                    <input type="text" class="form-control" name="txtArea" autofocus >

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" value="Registrar" ></input>
                </div>
                        </div>
                     </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php include 'template/footer.php' ?>
 
      
