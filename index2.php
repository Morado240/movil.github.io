<?php include 'template/header1.php' ?>


<?php
session_start();
if (!isset($_SESSION['usuario2'])){
    header('Location: login.php');
}elseif (isset($_SESSION['usuario2'])) {
include_once "model/conexion.php";

$consulta = $bd->query("SELECT hora from personal where codigo = 9 ;"); 
$resultado = $consulta->fetchALL(PDO::FETCH_OBJ);

$consulta = $bd->query("SELECT hora from personal where codigo = 16 ;"); 
$resultado1 = $consulta->fetchALL(PDO::FETCH_OBJ);


$consulta = $bd->query("SELECT hora from personal where codigo = 17 ;"); 
$resultado2 = $consulta->fetchALL(PDO::FETCH_OBJ);

$sentencia = $bd ->query("SELECT  area,sector,estatus, COUNT(*) AS total FROM personal GROUP BY estatus;");
$persona = $sentencia->fetchALL(PDO::FETCH_OBJ);

$sentencia = $bd ->query("SELECT  area,sector,estatus, COUNT(*) AS total FROM personal WHERE area ='Ingeniería' GROUP BY estatus;");
$personal = $sentencia->fetchALL(PDO::FETCH_OBJ);

$sentencia = $bd ->query("SELECT  area,sector,estatus, COUNT(*) AS total FROM personal WHERE area ='Diseño' GROUP BY estatus;");
$personal1 = $sentencia->fetchALL(PDO::FETCH_OBJ);

$sentencia = $bd ->query("SELECT  area,sector,estatus, COUNT(*) AS total FROM personal WHERE area ='Negocios' GROUP BY estatus;");
$personal2 = $sentencia->fetchALL(PDO::FETCH_OBJ);

}else{
    echo "Error (╯°□°）╯︵ ┻━┻";
}




 
?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">


         <center>
            <h3> Bienvenido/a <?php echo $_SESSION['usuario2']?> </h3>
            <a href="cerrar.php"> Cerrar sesión </a>
        </center>
        


        <div class="card" style="width: auto;">
                <div class="card-header">
                   Total de registros de alumnos 
                </div>
                <div class="p-5">
                        <table class="table aling-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Totales</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($persona as $dato){
                                ?>

                                <tr>
                                    <td scope="row"><?php echo $dato->estatus; ?></td>
                                    <td><?php echo $dato->total; ?></td>
                                </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                            </table>
              </div>
           </div>
    <br>
        <div class="card" style="width: auto;">
                <div class="card-header">
 
                    Lista de personal ingenieria
                </div>
                
                <div class="p-5">
                <div> Ultima Modificación </div>
                <?php
                          foreach($resultado as $date){                            

                          ?>

                          <tr>
                              <td scope="row"><?php echo $date->hora; ?></td>
                          </tr>

                          <?php
                          }
                          ?>
                        <table class="table aling-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Area</th>
                                    <th scope="col">Carrera</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Totales</th>    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                          

                                foreach($personal as $dato){                            

                                ?>

                                <tr>
                                    <td scope="row"><?php echo $dato->area; ?></td>
                                    <td><?php echo $dato->sector; ?></td>
                                    <td><?php echo $dato->estatus; ?></td>
                                    <td><?php echo $dato->total; ?></td>

                                </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                            </table>
              </div>
                </div>
                <br>
                <div class="card" style="width: auto;">
                <div class="card-header">
 
                    Lista de personal diseño
                </div>
                
                <div class="p-5">
                <div> Ultima Modificación </div>
                <?php
                          foreach($resultado1 as $date){                            

                          ?>

                          <tr>
                              <td scope="row"><?php echo $date->hora; ?></td>
                          </tr>

                          <?php
                          }
                          ?>
                        <table class="table aling-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Area</th>
                                    <th scope="col">Carrera</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Totales</th>    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                          

                                foreach($personal1 as $dato){                            

                                ?>

                                <tr>
                                    <td scope="row"><?php echo $dato->area; ?></td>
                                    <td><?php echo $dato->sector; ?></td>
                                    <td><?php echo $dato->estatus; ?></td>
                                    <td><?php echo $dato->total; ?></td>

                                </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                            </table>
              </div>
                </div>
                <br>
                <div class="card" style="width: auto;">
                <div class="card-header">
 
                    Lista de personal negocios
                </div>
                
                <div class="p-5">
                <div> Ultima Modificación </div>
                <?php
                          foreach($resultado2 as $date){                            

                          ?>

                          <tr>
                              <td scope="row"><?php echo $date->hora; ?></td>
                          </tr>

                          <?php
                          }
                          ?>
                        <table class="table aling-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Area</th>
                                    <th scope="col">Carrera</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Totales</th>    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
                          

                                foreach($personal2 as $dato){                            

                                ?>

                                <tr>
                                    <td scope="row"><?php echo $dato->area; ?></td>
                                    <td><?php echo $dato->sector; ?></td>
                                    <td><?php echo $dato->estatus; ?></td>
                                    <td><?php echo $dato->total; ?></td>

                                </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                            </table>
              </div>
                </div>


                <br>
        </div>
        </div>
    </div>
<br><br><br><br><br><br>
                            


<?php include 'template/footer.php' ?>
 
      
