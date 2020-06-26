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
  <link rel="stylesheet" type="text/css" href="css/estilo_personas.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="icon" type="imagenes/png" href="img/icono.png">
</head>

<body>
  <!-- MENU -->
  <div class="conteiner">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>
      
      <a class="navbar-brand" href="home.php"><img src="img/logotradersroom2.png" id="img1"></a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link" href="personas.php">Personas</a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="bitacora.php">Bitacora</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="sesiones.php">Sesiones Op</a>
          </li>
        </ul>
        
        <?php if ($_flag == true){ ?>
          <button class="btn btn-outline-light mx-1 " type="button" data-toggle="modal" data-target="#modal_info1"><img src="img/user.png">&nbsp;<?php print(ucfirst ($_SESSION['user']));?>
          </button>

          <form method="get" action="control_salir.php">
            <button type="submit" class="btn btn-light mx-1" data-toggle="modal" data-target="#modal_info2">Cerrar Sesión</button>
        <?php }; ?>

        <?php if ($_flag == false){ ?>
          <button class="btn btn-outline-light mx-1 " type="button" data-toggle="modal" data-target="#modal_info1">Iniciar sesión</button>
           
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
            <div class="d-flex justify-content-end social_icon">
              <span><i class="fab fa-facebook-square"></i></span>
              <span><i class="fab fa-google-plus-square"></i></span>
              <span><i class="fab fa-twitter-square"></i></span>
            </div>
          </div>
          <div class="card-body">
            <form action="consulta.php" method="POST">
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
              ¿No tienes una cuenta?<a href="registro.php">Regístrate</a>
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
  
  <!-- Carrusel 1 -->  
  <div class="container-fluid" id="fondoAmarillo">
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <!-- CAROUSEL ITEM 1 -->
        <div class="carousel-item active">
          <div class="row">
            <!-- IMG OVERLAY 1 -->
            <div class="col-lg-4 col-md-6">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l1.png">
                <div class="overlay">
                  <h2>Daniela Flores</h2>
                  <a class="info" href="personas/daniela.php">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 2 -->
            <div class="col-lg-4 col-md-6 d-none d-md-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l2.png">
                <div class="overlay">
                  <h2>Yamid Prado</h2>
                  <a class="info" href="personas/yamid.php">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 3 -->
            <div class="col-lg-4  d-none d-lg-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l3.png">
                <div class="overlay">
                  <h2>Nicole Henao</h2>
                  <a class="info" href="personas/nicole.php">Más Información</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- CAROUSEL ITEM 2 -->
        <div class="carousel-item">
          <div class="row">        
            <!-- IMG OVERLAY 1 -->
            <div class="col-lg-4 col-md-6">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l4.png">
                <div class="overlay">
                  <h2>Juan David Mosquera</h2>
                  <a class="info" href="personas/juandavid.php">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 2 -->
            <div class="col-lg-4 col-md-6 d-none d-md-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/b2.png">
                <div class="overlay">
                  <h2>CAMERA 2</h2>
                  <a class="info" href="personas/alejandro.php">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 3 -->
            <div class="col-lg-4  d-none d-lg-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l6.png">
                <div class="overlay">
                  <h2>Juan Manuel Caicedo</h2>
                  <a class="info" href="personas/juanmanuel">Más Información</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- CAROUSEL ITEM 3 -->
        <div class="carousel-item">
          <div class="row">
            <!-- IMG OVERLAY 1 -->
            <div class="col-lg-4 col-md-6">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l7.png">
                <div class="overlay">
                  <h2>Alejandro Bravo</h2>
                  <a class="info" href="personas/alejandro.php">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 2 -->
            <div class="col-lg-4 col-md-6 d-none d-md-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/c2.png">
                <div class="overlay">
                  <h2>TV 2</h2>
                  <a class="info" href="personas/alejandro.php">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 3 -->
            <div class="col-lg-4  d-none d-lg-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l9.png">
                <div class="overlay">
                  <h2>Johan Muñoz</h2>
                  <a class="info" href="personas/johan.php">Más Información</a>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div><br>
  </div>

  <!-- IMAGEN DE FONDO -->
  <div class="container-fluid" id="fondoImagen1">
    <div class="izq">
      <br><br><br>

      <p>Hoy puedes arrancar uno de los negocios digitales de mayor
      <br>proyección en esta décadada.</p>

      <img src="img/hr.png"><br>
      <img src="img/entrenador.png"><br><br>

      <h4>
        <i>"La industria del conocimiento facturará 
          <br>129 Billones de dólares en el año 2025"
        </i>
      </h4>

      <p>Tony Robbins</p>

      <br><br>
    </div>
  </div>
  

  <!-- Contenedor 2 -->
  <div class="container-fluid" id="fondoNegro">
  <br>
  
  <h1 id="colorNegro"><center>Don't miss out on great offers and new devices</center></h1>
  <hr style="border-color:black;">

  <div class="row">
  <!-- IZQ -->
    <div class="col-lg-3 col-md-4">
      <div class="row text-center">
        <div class="col-md-12 col-sm-6">
          <div class="hovereffect">
            <center><img class="img-responsive" src="img/p1.png"></center><br>
            <h6>Work or learn from home with a new laptop starting at $349.99</h6><hr>
            <div class="overlay">
              <h2>Laptop</h2>
              <a class="info" href="#">Shop Now</a>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-sm-6 d-none d-sm-block ">
          <div class="hovereffect">
            <center><img class="img-responsive" src="img/p2.png"></center><br>
            <h6>Game, watch, and stream with QLED Smart TVs starting at $499.99</h6><hr>
            <div class="overlay">
              <h2>TV QLED</h2>
              <a class="info" href="#">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- CNT-->
    <div class="col-lg-6 col-md-4">
      <div class="hovereffect">
        <center><img class="img-responsive" src="img/e.jpg"></center><br><br>
        <h5>INTRODUCING 2020 QLED.</h5>
        <div class="overlay">
          <h2>Galaxy Tab</h2>
          <a class="info" href="#">Shop Now</a>
        </div>
      </div>
    </div>

    <!-- DER -->
    <div class="col-lg-3 col-md-4">
      <div class="row text-center">
        <div class="col-md-12 col-sm-6">
          <div class="hovereffect">
            <center><img class="img-responsive" src="img/p3.png"></center><br>
            <h6>Unlocked Galaxy Tab S6 from $449.99 with elegible trade in</h6><hr>
            <div class="overlay">
              <h2>Laptop</h2>
              <a class="info" href="#">Shop Now</a>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-sm-6 d-none d-sm-block ">
          <div class="hovereffect">
            <center><img class="img-responsive" src="img/p4.png"></center><br>
            <h6>Take the hassle out of laundry and save up to 35% on washers</h6><hr>
            <div class="overlay">
              <h2>Washing Machine</h2>
              <a class="info" href="#">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br><br>    
  </div>

  <!-- Container 3 -->
  <div class="container-fluid" id="fondoImagen2">
    <br><br><br>
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <!--center><img class="img-fluid" src="img/1.jpg"></center><br-->
        <video src="img/testimonio1.mp4" width=768  height=512 controls class="img-fluid">
        Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
        La versión descargable está disponible en <a href="URL">Enlace</a>. 
        </video>
        <h1>¡Hola! Soy Daniel Coral, Entrenador de UsXXI</h1>
        <p align="justify">Hola, Mi nombre es Daniel Andrés Coral, soy de la ciudad de Cali y hace aproximadamente un año que pertenezco a este sistema educativo llamado UsXXI, a lo largo de mi vida siempre había buscado un modelo que me permitiera aprender acerca los mercados financieros…</p>

        <center>
          <button class="btn btn-dark b1" onclick="window.location.href='personas/daniel.php'">Seguir Leyendo</button>
        </center>

        <hr class="d-sm-block d-md-none" style="border-color: #212529">
      </div>

      <div class="col-md-4 col-sm-12">
        <!--center><img class="img-fluid" src="img/2.jpg"></center><br-->
        <video src="img/testimonio2.mp4" width=768  height=512 controls class="img-fluid">
        Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
        La versión descargable está disponible en <a href="URL">Enlace</a>. 
        </video>
        <h1>¡Hola! &nbsp;Soy &nbsp;Juan&nbsp; David, Entrenador de UsXXI</h1>
        <p align="justify">Hola, Soy Juan David Mosquera Lozano, Tengo 26 años de edad y hace aproximadamente 2 años decidí implementar la metodología UsXXI para tomar el control de mi vida financiera y así poderle dar tiempo de calidad a mis seres queridos especialmente a mi hija...</p>

        <center>
          <button class="btn btn-dark b1" onclick="window.location.href='personas/juandavid.php'">Seguir Leyendo</button>
        </center>

        <hr class="d-sm-block d-md-none" style="border-color: #212529">
      </div>

      <div class="col-md-4 col-sm-12">
        <!--center><img class="img-fluid" src="img/3.jpg"></center><br-->
        <video src="img/testimonio3.mp4" width=768  height=512 controls class="img-fluid">
        Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
        La versión descargable está disponible en <a href="URL">Enlace</a>. 
        </video>
        <h1>¡Hola! Soy Yamid Prado, Cofundador de UsXXI</h1>
        <p align="justify">Hola, soy Yamid Prado de Colombia, y soy cofundador de USXXI, te invito a aprender cómo generar ingresos en el s.XXI a través de nuestra metodología única y comprobada que te lleva paso a paso a crear y afianzar los hábitos que te permitirán vivir 100% de internet...</p>
        
        <center>
          <button class="btn btn-dark b1" onclick="window.location.href='personas/yamid.php'">Seguir Leyendo</button>
        </center>

      </div>
    </div><br>
  </div>


</body>
</html>