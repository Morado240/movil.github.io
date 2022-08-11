<?php
  session_start();
  if(isset($_SESSION['usuario'])){
    header('Location: index.php');
  }
?>

<?php
echo 
<<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" " >
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<section class="vh-100">
<div class="container-fluid h-custom">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="template/univdep.png"
        class="img-fluid" alt="Sample image">
    </div>

    
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="divider d-flex align-items-center my-4">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Registro de alumnos</button>
              <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Acesso Administrativo</button>
              </ul>
            </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <!-- METODOS -->
        <form " method="POST">
          <!-- Departamento -->
          <div class="form-outline mb-4">
              <input type="text" class="form-control form-control-lg" placeholder="Area" name="txtArea"/>
              <label class="form-label" for="depto"></label>
              </div>
          
          <!-- Usuario -->
          <div class="form-outline mb-4">
          <input type="text" class="form-control form-control-lg" placeholder="Usuario" name="txtUsuario"/>
          <label class="form-label" for="depto"></label>
          </div>
          <!-- Contraseña -->
          <div class="form-outline mb-4">
              <input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="txtContrasena"/>
              <label class="form-label" for="depto"></label>
              </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>
        </form>
      </div>

      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <!-- METODOS  -->
        <form  method="POST">
          <!-- Usuario -->
          <div class="form-outline mb-4">
          <input type="text" class="form-control form-control-lg" placeholder="Usuario" name="txtUser"/>
          <label class="form-label" for="depto"></label>
          </div>
          <!-- Contraseña -->
          <div class="form-outline mb-4">
              <input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="txtPassword"/>
              <label class="form-label" for="depto"></label>
              </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>
          
        </form>
      </div>
   </div>
  </div>
  </div>
</div>
</section>



_END

?>
