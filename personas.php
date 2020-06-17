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
           
          <button class="btn btn-light mx-1 " type="button" data-toggle="modal" data-target="#modal_info2">Regístrate</button>
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
            <form action="control_sesion.php" method="POST">
              <?php
                if(isset($_GET['error']) && $_GET['error']==true){
                  print("<h4>Error: Nombre de usuario o contraseña invalidos</h4>");
                } 
              ?>
    
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
    
                <input type="text" class="form-control" placeholder="usuario" name="usuario">
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
              ¿No tienes una cuenta?<a href="#">Regístrate</a>
            </div>
          
            <div class="d-flex justify-content-center">
              <a href="#">Forgot your password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- REGÍSTRATE -->
  <div class="modal fade" id="modal_info2">
    <div class="container">
      <div class="d-flex justify-content-center h-100" style="padding-top: 100px">
        <div class="card" style="width: 40%">
          <div class="card-header">
            <h3>Regístrate</h3>
    
            <div class="d-flex justify-content-end social_icon">
              <span><i class="fab fa-facebook-square"></i></span>
              <span><i class="fab fa-google-plus-square"></i></span>
              <span><i class="fab fa-twitter-square"></i></span>
            </div>
          </div>
    
          <div class="card-body">
            <form>
              <div class="input-group form-group">  
                <input type="text" class="form-control" placeholder="Nombre"> 
              </div>

              <div class="input-group form-group">  
                <input type="text" class="form-control" placeholder="Apellido"> 
              </div>
    
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo electrónico">
              </div>

              <div class="input-group form-group">
                <input type="password" class="form-control" placeholder="Contraseña">
              </div>
    
              <div class="input-group form-group">
                <input type="password" class="form-control" placeholder="Confirmar contraseña">
              </div>

              <div class="form-group">
                <input type="submit" value="Regístrate" class="btn float-right login_btn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
        <?php }; ?>
      </div>
    </nav>   
  </div>
        

  <!-- Imagen de Fondo -->
  <div class="container-fluid">
    <img src="img/bg1.png" width="100%" height="100%">

    <div id="boton"> 
      <button class="btn btn-primary b1">LEARN MORE</button>
    </div>
  </div>
   
  <h1 id="colorNegro"><center><small>.</small><br>HOT NEW PRODUCTS</center><br></h1>
   
  <!-- Carrusel 1 -->  
  <div class="container-fluid" id="fondoNegro">
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
                  <a class="info" href="#">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 2 -->
            <div class="col-lg-4 col-md-6 d-none d-md-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l2.png">
                <div class="overlay">
                  <h2>Yamid Prado</h2>
                  <a class="info" href="#">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 3 -->
            <div class="col-lg-4  d-none d-lg-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l3.png">
                <div class="overlay">
                  <h2>Nicole Henao</h2>
                  <a class="info" href="#">Más Información</a>
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
                  <a class="info" href="#">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 2 -->
            <div class="col-lg-4 col-md-6 d-none d-md-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/b2.png">
                <div class="overlay">
                  <h2>CAMERA 2</h2>
                  <a class="info" href="#">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 3 -->
            <div class="col-lg-4  d-none d-lg-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/l6.png">
                <div class="overlay">
                  <h2>Juan Manuel Caicedo</h2>
                  <a class="info" href="#">Más Información</a>
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
                <img class="img-responsive" src="img/c1.png">
                <div class="overlay">
                  <h2>TV 1</h2>
                  <a class="info" href="#">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 2 -->
            <div class="col-lg-4 col-md-6 d-none d-md-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/c2.png">
                <div class="overlay">
                  <h2>TV 2</h2>
                  <a class="info" href="#">Más Información</a>
                </div>
              </div>
            </div>

            <!-- IMG OVERLAY 3 -->
            <div class="col-lg-4  d-none d-lg-block">
              <div class="hovereffect">
                <img class="img-responsive" src="img/c3.png">
                <div class="overlay">
                  <h2>TV 3</h2>
                  <a class="info" href="#">Más Información</a>
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
    </div>
  </div>

  <div class="container-fluid" id="fondoBlanco">
  <br><br>
  
  <h1 id="colorNegro"><center>Don't miss out on great offers and new devices</center></h1>
  <hr style="border-color:black;">

  <!-- Contenedor 2 -->
  <div class="row" id="hola">
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
        <center><img class="img-responsive" src="img/p.png"></center><br><br>
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
  <div class="container-fluid">
    <br><br><br>
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <center><img class="img-fluid" src="img/1.jpg"></center><br>
        <h1>Smart Living Space</h1>
        <p>Get more from your TV with LG ThinQ® AI, and create a smart home entertainment system commanded by voice.</p>

        <div id="boton"> 
          <button class="btn btn-primary b1">LEARN MORE</button>
        </div>

        <hr class="d-sm-block d-md-none" style="border-color: #212529">
      </div>

      <div class="col-md-4 col-sm-12">
        <center><img class="img-fluid" src="img/2.jpg"></center><br>
        <h1>AMB OLED TV</h1>
        <p>Intense color. Perfect black. Picture quality like you’ve never seen. Bring home the best: LG OLED TV.</p>

        <div id="boton"> 
          <button class="btn btn-primary b1">LEARN MORE</button>
        </div>

        <hr class="d-sm-block d-md-none" style="border-color: #212529">
      </div>

      <div class="col-md-4 col-sm-12">
        <center><img class="img-fluid" src="img/3.jpg"></center><br>
        <h1>AMB Refrigerators</h1>
        <p>From lemonade to cocktails and more, keep things cool with LG’s exclusive slow-melting round ice.</p>
        
        <div id="boton"> 
          <button class="btn btn-primary b1">LEARN MORE</button>
        </div>

        <hr class="d-sm-block d-md-none" style="border-color: #212529">
      </div>
    </div><br><br>
  </div>

  <!-- Container 4 -->
  <div class="container-fluid" id="fondoBlanco">
    <br><br>
    <hr  class="d-sm-block d-md-none">
    <h1 id="colorNegro"><center>TV Featured Offers</center></h1>
    <hr style="border-color:white;">

    <div class="row">
      <div class="col-lg-6 col-md-5" id="borde">
        <a href=""><img src="img/prom1.png" class="img-fluid"></a>
      </div>

      <div class="col-lg-6 col-md-7">
          
        <div class="row" id="borde">
          <div class="col-xl-6 col-lg-5" id="centro">
            <a href=""><img src="img/prom2.png" class="img-fluid"></a>
          </div>

          <div class="col-xl-6 col-lg-7" id="centro2">
            <a href="">LG C9 65 inch Class 4K Smart OLED TV (64.5" Diag)</a>
            <p>★★★★★ 4.8 (1397)</p>
            <h3>$2,199.99 <del>$3,499.99</del></h3>
          </div> 
        </div>

        <div class="row  text-center">
          <div class="col-lg-6 d-none d-lg-block" id="borde">
            <a href=""><center><img src="img/prom3.png" class="img-fluid"></center></a>
            <a href="">LG E9 65 inch Class 4K Smart OLED TV (64.5" Diag)</a>
            <p>★★★★★ 4.7 (54)</p>
            <h3>$2,799.99 <del>$4,299.99</del></h3>
          </div>

          <div class="col-lg-6 d-none d-lg-block" id="borde">
            <a href=""><center><img src="img/prom4.png" class="img-fluid"></center></a>
            <a href=""> LG C9 77 inch Class 4K Smart OLED TV (76.7" Diag)</a>
            <p>★★★★★ 4.8 (725)</p>
            <h3>$4,499.99 <del>$6,999.99</del></h3>
          </div>
        </div>
      </div> 
    </div>
  </div>



</body>
</html>