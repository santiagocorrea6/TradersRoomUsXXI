<!doctype html>
<html lang="en">
  <head>
    <title>TradersRoomUsXXI</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon" type="imagenes/png" href="img/icono.png">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

      <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
      <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>
  <body>

    <div class="conteiner">
       <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/logotradersroom2.png" id="img1"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="personas.php">Personas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sale.php">Bitacora</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sale.php">Sesiones Op</a>
            </li>
          </ul>
         
           <button class="btn btn-outline-light mx-1 " type="button" data-toggle="modal" data-target="#modal_info1">Iniciar sesión</button>
           <button class="btn btn-light mx-1 " type="button" data-toggle="modal" data-target="#modal_info2">Regístrate</button>
        </div>
      </nav>
       
    </div>
   <!---------------------INICIAR SESIÓN---------------------------->
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
                <form>
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="usuario">
                    
                  </div>
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="contraseña">
                  </div>
                  <div class="row align-items-center remember ml-1">
                    <input type="checkbox">Recordarme
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Iniciar sesión" class="btn float-right login_btn">
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
 <!--------------------------------------------FIN INICIAR SESIÓN------------------------------------>


 <!--------------------------------------------REGÍSTRATE------------------------------------>

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
 <!----------------------------------------FIN REGISTRO----------------------------------------->

 <!--------------------------------------------HEADER-------------------------------------------->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/car3.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/car2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/car1.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>        
    </header>
 <!--------------------------------------------FIN HEADER-------------------------------------------->


<!----------------------------------------------CONTENIDO-------------------------------------------->

  
        <div class="conteiner pt-4" style="background-color: #E7ECEB">
          <h1 class="text-center">50% DE DESCUENTO EN ULTIMAS PRENDAS</h1>
          <p class="lead text-center">Podrás aprovechar nuestras ofertas y realizar tus compras, pero ten en cuenta que tu pedido llegará entre los próximos 15 y 30 días hábiles después que la medida de aislamiento preventivo obligatorio termine.</p>
          <a class="btn  btn-lg btn-outline-danger w-100" href="sale.html" role="button" >SALE</a>

         
          <h2 class="text-center pt-4 ml-4">Somos especialistas en el diseño de prendas para personas apasionadas por el trading, elige tu diseño y lo haremos realidad.</h2>
          <a class="btn btn-outline-danger btn-lg w-100" href="catalogo.html" role="button">VER CATÁLOGO</a>
          <div class="pt-4"></div>
          <div class="pt-4"></div>
        </div>

<!---------------------------------------------- FIN CONTENIDO-------------------------------------------->


<!------------------------------------------------ Footer --------------------------------------------------------->
<footer class="page-footer font-small pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
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
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index.html"> bravostore.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!------------------------------------------------------- FinFooter ---------------------------------------------->
  </body>
  </html>