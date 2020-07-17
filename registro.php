<?php session_start();
  if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
    $_flag = false;
    //header("Location: index.php");
  } else {
    $_flag = true;
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>


  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Estilos CSS -->
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="icon" type="imagenes/png" href="img/icono.png">

</head>
<body background="img/fondo6.jpg">
	<div class="conteiner">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <a class="navbar-brand" href="home.php"><img src="img/logotradersroom2.png" id="img1"></a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="personas.php">Personas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bitacora.php">Bitacora</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sesiones.php">Sesiones Op</a>
          </li>
        </ul>
         
        <!--button class="btn btn-outline-light mx-1 " type="button" data-toggle="modal" data-target="#modal_info1">Iniciar sesión</button-->
        <button class="btn btn-outline-light mx-1 " type="button" onclick="location.href='index_error.php'">Iniciar sesión</button>
      
      	<button class="btn btn-light mx-1 " onclick="location.href='registro.php'" type="button">
         Regístrate</button>
      </div>
    </nav>
  </div>


  <!-- INICIO DE SESION -->
  <div class="modal fade" id="modal_info1">
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card" style="width: 40%">
          <div class="card-header">
            <h3>Iniciar sesión</h3>
            <button type="button" class="close text-light" data-dismiss="modal" onclick="window.location.href='registro.php'" style="margin-top: -20px;">&times;</button>
            <div class="d-flex justify-content-end social_icon">
              <span><i class="fab fa-facebook-square"></i></span>
              <span><i class="fab fa-google-plus-square"></i></span>
              <span><i class="fab fa-twitter-square"></i></span>
            </div>
          </div>
          <div class="card-body">
              <form action="consulta.php" method="post">
        
    
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              
              <input type="email" class="form-control" placeholder="correo" name="nombre">
            </div>
                  
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              
              <input type="password" class="form-control" placeholder="contraseña" name="contrasena">
            </div>
            
            <div class="row align-items-center remember ml-1">
              <input type="checkbox">Recordarme
            </div>
            
            <div class="form-group">
               <input type="submit" value="Iniciar sesión" class="btn float-right login_btn" name="login">
            </div>
            </form>
          </div>
              
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              <p>¿No tienes una cuenta?</p><br>
            </div>
            <div class="d-flex justify-content-center links" id="amarillo">
              <a href="registro.php">Regístrate</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container">
      <div class="d-flex justify-content-center h-100" style="padding-top: 100px">
        <div class="card" style="width: 40%">
          <div class="card-header">
            <h3>Regístrate</h3>
            <p class="text-danger" style="margin-bottom: -30px; margin-top: -10px;">
              <?php
                if (!empty($_SESSION)) {
                  if ($_SESSION['userName'] == "correo") {
                    echo "La cuenta ya existe.";
                    session_destroy();
                  } else if ($_SESSION['userName'] == "contrasena") {
                    echo "Las contraseñas no coinciden.";
                    session_destroy();
                  } 
                }
              ?>
            </p>

    
            <div class="d-flex justify-content-end social_icon">
              <span><i class="fab fa-facebook-square"></i></span>
              <span><i class="fab fa-google-plus-square"></i></span>
              <span><i class="fab fa-twitter-square"></i></span>
            </div>
          </div>
    
          <div class="card-body">
            <form action="consulta_registro.php" method="post">
              <div class="input-group form-group">  
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>  
              </div>

              <div class="input-group form-group">  
                <input type="text" class="form-control" placeholder="Apellido" name="apellido" required> 
              </div>
    
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo electrónico" name="correo" required>
              </div>

              <div class="input-group form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required>
              </div>
    
              <div class="input-group form-group">
                <input type="password" class="form-control" placeholder="Confirmar contraseña" name="contrasena2" required>
              </div>
              
              <div class="form-group">
                <input type="submit" value="Regístrate" class="btn float-right login_btn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  <!---  Footer --->
  <footer class="page-footer font-small pt-4" style="background-color: yellow; margin-top: -1%;">

    <div class="container">
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="home.php"> tradersroom.com</a>
    </div>
  </footer>

</body>
</html>