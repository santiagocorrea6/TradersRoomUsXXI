<?php session_start();
	if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
		header("Location: index.php");
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
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/estilo_index.css">
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

        <button class="btn btn-outline-light mx-1 " type="button" onclick="location.href='perfil.php'"><img src="img/user.png">&nbsp;<?php print(ucfirst ($_SESSION['user']));?>
        </button>

        <form method="get" action="control_salir.php">
    	  <button type="submit" class="btn btn-light mx-1" data-toggle="modal" data-target="#modal_info2">Cerrar Sesión</button>
		</form>
      </div>
    </nav>
  </div>

  <!--- CONTENIDO --->
  <div class="img-principal">
    <img src="img/fondo12.jpg" class=" img-principal" alt="Responsive image">
    <div class="capa " >
      <h3 class="">¿QUÍENES SOMOS?</h3>
      <p>Comunidad online enfocada en el desarrollo de traders consistentes y emprendedores digitales basado en la tecnología UsXXI.</p>  
        
       <a class="btn btn-lg  bt" href="https://api.whatsapp.com/send?phone=573162064562&text=Hola!%20Acabo%20de%20ver%20tu%20web%20y%20quiero%20acceder%20al%20curso%20y%20las%20sesiones%20de%20trading%20gratis.%20Mi%20nombre%20es:" role="button">APRENDE A GANAR</a>

    </div>
  </div>

  <!--- Aprender trading --->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-lg-6 izquierda pt-4">
        <h3>APRENDER TRADING PUEDE HACERTE LIBRE</h3>
        <p>Descubre nuestro metodología de aprendizaje efectivo con el sistema de 6 a 8 horas semanales y gánate un viaje a DUBAI.</p>
        <center><embed src="https://media.giphy.com/media/UTjjT6id1AqYugpGbh/giphy.gif"></center>
      </div>
        
      <div class="col-xs-12 col-lg-6 derecha">
        <video class="video-fluid z-depth-1" autoplay loop controls muted>
          <source src="videos/dubai.mp4" type="video/mp4" />
        </video>     
      </div>   
    </div>     
  </div>

   <!--- 3 Habilidades --->
   <div class="container-fluid">
      <h3 id="titulo-corto">Aprende a ganar con las 3 habilidades de mayor expansión de esta década.</h3> 
   </div>

   <!--- Trading - Liderazgo - Influencia --->
   <div class="container-fluid">
    <div class="row pt-4">
      <div class="col-xs-12 col-lg-4 izq">
        <img src="img/tradenegro.png" class="imgTLI" alt="Responsive image">
        <h3>TRADING & EDUCACIÓN FINANCIERA</h3>
        <p>Aprende educación financiera y trading con herramientas y método probados.</p>
        <p><b>Más de 75 educadores expertos, más de 1000 horas al mes en vivo.</b></p>
      </div>

      <div class="col-xs-12 col-lg-4 cent">
        <img src="img/leadamarillo.png" class="imgTLI" alt="Responsive image">
        <h3>LIDERAZGO & HABILIDADES EMPRESARIALES</h3>
        <p>Desarrolla tu potencial y habilidades empresariales. </p>
        <p><b>Aprende a construir tu propio negocio siendo mentoreado por empresarios exitosos.</b></p>
        <p>Construye una mentalidad ganadora.</p>
      </div>

      <div class="col-xs-12 col-lg-4 dere">
        <img src="img/impactnegro.png" class="imgTLI" alt="Responsive image">
        <h3>MARKETING DIGITAL & INFLUENCIA</h3>
        <P>Aprende a construir tu marca personal, atraer tráfico, aumentar seguidores y monetizar tu audiencia.</P>
        <p><b>Aprende a construir negocios automatizados y a influir positivamente en tu comunidad digital.</b></p>
      </div>  
    </div>    
  </div>

   <!--- Descubre los tres pasos --->
  <div class="img-trespasos">
    <img src="img/fondo10.jpg" class=" img-principal" alt="Responsive image">
  
    <div class="capa2" >
      <img src="img/ilovetrading.png" class=" img-ilovetrading" alt="Responsive image">
      <p>Trabajamos con la academia #1 a nivel mundial.</p>
      <h3>Descubre nuestro método de 3 pasos</h3>
      <p id="cap2_peq">En <span id="spa1"> Universidads<span id="spa2">XXI</span></span> tenemos más de 5 años de experiencia en la implementación de sistemas educativos online. Somos expertos en implementación y metodología de procesos educativos online que generan resultados.</p>
    </div>
  </div>

  <!--- Pasos --->
  <div class="container-fluid">
    <div class="row pasos">
      <div class="col-xs-12 col-lg-4">
        <div class="pasos_col">
          <h3>Paso 1: </h3>
          <h3>Certifícate</h3>
          <p>Inicia con nuestro programa de arranque rápido y certifícate en básicos en tus primeras 72 horas y obtén tu diploma oficial de UniversidadsXXI</p>
          <video class="video-fluid z-depth-1" autoplay loop controls muted>
            <source src="videos/tatiana.mp4" type="video/mp4" />
          </video> 
        </div>        
      </div>

      <div class="col-xs-12 col-lg-4  ">
        <div class="pasos_col">
          <h3>Paso 2: </h3>
          <h3>Aprende de expertos</h3>
          <p>Calendariza con un entrenador UsXXI 4 a 6 horas a la semana  y conéctate con expertos las horas que quiereas en vivo.</p><br>
          <video class="video-fluid z-depth-1" autoplay loop controls muted>
            <source src="videos/coral.mp4" type="video/mp4" />
          </video>
        </div>   
      </div>

      <div class="col-xs-12 col-lg-4">
        <div class="pasos_col">
          <h3>Paso 3: </h3>
          <h3>Opera mientras aprendes</h3>
          <p>Elige 1 a 2 de nuestras 12 herramientas profesionales y más de 30 estrategias de expertos y copia y pega en tu cuenta de práctica mientras aprendes.</p>
          <video class="video-fluid z-depth-1" autoplay loop controls muted>
            <source src="videos/karen.mp4" type="video/mp4" />
          </video>
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