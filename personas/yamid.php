<?php session_start();
  if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
    $_flag = false;
  } else {
    $_flag = true;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>TradersRoomUsXXI</title>

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
  <link rel="stylesheet" type="text/css" href="css/estilo_lideres.css">
  <link rel="icon" type="imagenes/png" href="../img/icono.png">

  <style>
      *{
        border: 0px solid;
      }
    </style>

</head>

<!--body background="../img/fondo6.jpg"-->
<body>
  <!-- MENU -->
  <div class="conteiner">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>
      
      <a class="navbar-brand" href="../home.php"><img src="../img/logotradersroom2.png" id="img1"></a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link" href="../personas.php">Personas</a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="../bitacora.php">Bitacora</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../sesiones.php">Sesiones Op</a>
          </li>
        </ul>
        
        <?php if ($_flag == true){ ?>
          <button class="btn btn-outline-light mx-1 " type="button" data-toggle="modal" data-target="#modal_info1"><img src="../img/user.png">&nbsp;<?php print(ucfirst ($_SESSION['user']));?>
          </button>

          <form method="get" action="../control_salir.php">
            <button type="submit" class="btn btn-light mx-1" data-toggle="modal" data-target="#modal_info2">Cerrar Sesión</button>
        <?php }; ?>

        <?php if ($_flag == false){ ?>
          <button class="btn btn-outline-light mx-1 " type="button" data-toggle="modal" data-target="#modal_info1">Iniciar sesión</button>
           
          <button class="btn btn-light mx-1 " onclick="location.href='../registro.php'" type="button">
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
            <div class="d-flex justify-content-end social_icon">
              <span><i class="fab fa-facebook-square"></i></span>
              <span><i class="fab fa-google-plus-square"></i></span>
              <span><i class="fab fa-twitter-square"></i></span>
            </div>
          </div>
          <div class="card-body">
            <form action="../consulta.php" method="POST">
              <?php
                if(isset($_GET['error']) && $_GET['error']==true){
                  print("<h4>Error: Nombre de usuario o contraseña invalidos</h4>");
                } 
              ?>
    
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
    
                <input type="text" class="form-control" placeholder="usuario" name="nombre">
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
              <input type="submit" value="Iniciar sesión" class="btn float-right login_btn" name="enviar">
            </div>
            </form>
          </div>
              
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              ¿No tienes una cuenta?<a href="../registro.php">Regístrate</a>
            </div>
          
            <div class="d-flex justify-content-center">
              <a href="#">Forgot your password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        <?php }; ?>
      </div>
    </nav>   
  </div>
  
  <!-- PRIMERA IMAGEN -->
  <img class="imagen" src="../img/info1.jpeg" width="100%">

  <div class="container" id="top">
    <div class="row">
      <div class="col-lg-1 col-md-0"></div>
      <div class="col-lg-10 col-md-12" id="verde"><h1>YAMID PRADO</h1></div>
      <div class="col-lg-1 col-md-0"></div>
    </div>

    <div class="row">
      <div class="col-lg-1 col-md-0"></div>
      
      <div class="col-lg-4 col-md-5" id="fondoBlanco">
        <div class="contenedor">
          <img src="../img/l2.png">
          <div class="centrado">
            <div class="row">
              <div class="col-sm-6" id="der">
                <br>
                <p>ROL: <br>EDAD: <br>RANGO: <br>CIUDAD: </p>
              </div>
              
              <div class="col-sm-6" id="izq">
                <br>
                <p> Lider<br> 31 años<br> PL 5000<br> Cali - Colombia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-7" id="fondoBlanco">
        <p class="parrafo">Hola, soy Yamid Prado de Colombia, y soy cofundador de USXXI, te invito a aprender cómo generar ingresos a través de nuestra metodología única y comprobada que te lleva paso a paso a crear y afianzar los hábitos que te permitirán vivir 100% de internet.</p>

        <video src="../img/testimonio3.mp4" controls>
      </div>

      <div class="col-lg-1 col-md-0"></div>
    </div>
  </div>


  
  <!-- Abrir ventana emergente -->
  <script> 
    function ventanaSecundaria (URL){ 
      window.open(URL,"ventana1","width=640,height=640,scrollbars=NO") 
    } 
  </script>

  <!--Redes Sociales-->
  <div class="social">
    <a href="javascript:ventanaSecundaria('https://es-la.facebook.com/FarinaMusic/')">
      <img src="../img/facebook.png">
    </a>

    <a href="javascript:ventanaSecundaria('https://es-la.facebook.com/FarinaMusic/')">
      <img src="../img/instagram.png">
    </a>

    <a href="javascript:ventanaSecundaria('https://es-la.facebook.com/FarinaMusic/')">
      <img src="../img/twitter.png">
    </a>

    <a href="javascript:ventanaSecundaria('https://es-la.facebook.com/FarinaMusic/')">
      <img src="../img/whatsapp.png">
    </a>
  </div>
</body>
</html>