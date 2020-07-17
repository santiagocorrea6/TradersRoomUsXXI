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
  <link rel="stylesheet" type="text/css" href="css/estilo_bitacora.css">
  <link rel="icon" type="imagenes/png" href="img/icono.png">

  <style>
    *{
      border: 0px solid;
    }
  </style>
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
          
          <li class="nav-item">
            <a class="nav-link" href="personas.php">Personas</a>
          </li>
            
          <li class="nav-item active">
            <a class="nav-link" href="bitacora.php">Bitacora</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="sesiones.php">Sesiones Op</a>
          </li>
        </ul>
        
        <?php if ($_flag == true){ ?>
          <button class="btn btn-outline-light mx-1 " type="button" onclick="location.href='perfil.php'"><img src="img/user.png">&nbsp;<?php print(ucfirst ($_SESSION['user']));?>
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
      <div class="d-flex justify-content-center h-100" style="padding-top: 110px">
        <div class="card" style="width: 40%">
          <div class="card-header">
            <h3>Iniciar sesión</h3>
            <button type="button" class="close text-light" data-dismiss="modal" onclick="window.location.href='bitacora.php'" style="margin-top: -20px;">&times;</button>
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
                <input type="submit" value="Iniciar sesión" class="btn float-right login_btn" name="enviar">
              </div>
            </form>
          </div>
              
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              <p>¿No tienes una cuenta?</p><br>
            </div>
            <div class="d-flex justify-content-center links">
              <a href="registro.php">Regístrate</a>
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

  <!-- BODY -->
  <br><br><br>
  <?php
    if ($_flag == false) { 
  ?>
    
    <div class="card" id="card_registro">
      <img class="card-img-top" src="img/icono.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-text">El recurso seleccionado, sólo se encuentra disponible para usuarios registrados.</h5>
      </div>

      <div class="card-body">
        <a href="index_error.php" class="text-light card-link float-left">Iniciar sesión</a> 
        <a href="registro.php" class="card-link float-right text-warning">Registrarse</a>
      </div>
    </div>

  <?php 
    } else { 
      $conexion = mysqli_connect('localhost','root','','sesion');
  ?>
    
  <div class="container">
    <div id="amarillo">
      <h1><center>PLAN DE TRADING</center></h1>
    </div>
    <div class="row" id="blanco">
      <div class="col-md-4">
        <h2 id="uno">Nombre</h2><br>
        <h2 id="dos"><?php print(ucfirst($_SESSION['user']));?></h2>
      </div>
      
      <div class="col-md-4">
        <center>
          <img src="img/icono.png">
        </center>
      </div>
      
      <div class="col-md-4">
        <h2 id="uno">Capital Inicial</h2><br>
        <h2 id="dos">
          <?php
            //$a = $_SESSION['user'];
            $a = $_SESSION['userName'];
            $conexion = mysqli_connect('localhost','root','','sesion');
            //$sql = "SELECT capital from usuarios WHERE name = '$a'";
            $sql = "SELECT capital from usuarios WHERE user = '$a'";
            $result = mysqli_query($conexion,$sql);
            $result = mysqli_fetch_array($result);
            $capital_inicial = $result['capital'];

            if ($capital_inicial == 0) { 
              ?> 
              <button class="login_btn" type="button" data-toggle="modal" data-target="#modal_info3" id="btnAgregarCapital">Añadir</button>

              <?php
            } else { 
              echo $capital_inicial;?>$<?php
            }
          ?>
        </h2>
      </div>      
    </div>

    <div class="table-responsive">
      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Paridad</th>
            <th scope="col">Inversion</th>
            <th scope="col">Rentabilidad</th>
            <th scope="col">Resultado</th>
            <th scope="col">Ganancia</th>
            <th scope="col">Capital Total</th>
            <th scope="col">Observaciones</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            //$a = $_SESSION['user'];
            $a = $_SESSION['userName'];
            $sql="SELECT * from $a";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)) {
          ?>
          <tr>
            <th scope="row"><?php echo $mostrar['id']?></th>
            <td><?php echo $mostrar['fecha']?></td>
            <td><?php echo $mostrar['paridad']?></td>
            <td><?php echo $mostrar['inversion']?>$</td>
            <td><?php echo $mostrar['rentabilidad']?>%</td>
            <td><?php echo $mostrar['resultado']?></td>
            <td><?php echo $mostrar['ganancia']?>$</td>
            <td><?php echo $mostrar['capital']?>$</td>
            <td><?php echo $mostrar['observaciones']?></td>
          </tr>            

          <?php
            }
          ?>
        </tbody>
      </table>
    </div>

    <div class="form-group">
      <?php  
        $correo = $_SESSION['userName'];
        $conexion = mysqli_connect('localhost','root','','sesion');
        $sql = "SELECT capital from usuarios WHERE user = '$correo'";
        $result = mysqli_query($conexion,$sql);
        $result = mysqli_fetch_array($result);
        $capital_inicial = $result['capital'];

        if ($capital_inicial == 0) { ?>
          <button class="login_btn mx-1" type="button" data-toggle="modal" data-target="#modal_info3" id="btn_agregar" style="left: 91.5%">Agregar</button> <?php
        } else { ?>
          <button class="login_btn mx-1" type="button" data-toggle="modal" data-target="#modal_info2" id="btn_agregar">Agregar</button>
          <button class="login_btn mx-1 btn-secondary" type="button" data-toggle="modal" data-target="#eliminar" id="btn_agregar">Eliminar</button> <?php
        }
      ?>
      
    </div>
  </div>

  <div class="modal fade" id="modal_info2">
    <div class="container">
      <div class="d-flex justify-content-center h-100" style="padding-top: 100px">
        <div class="card" style="width: 40%; height: 100%;">
          <div class="card-header">
            <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='bitacora.php'">&times;</button>
            <h3>Registrar Operación</h3>
          </div>
      
          <div class="card-body">
            </form>

            <form action="consulta_bitacora.php" method="post">
              <!-- FECHA -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Fecha:</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha" placeholder="" required>
                </div>
              </div>

              <!-- PARIDAD -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Paridad:</label>
                <div class="col-sm-8">
                  <select class="form-control" name="paridad">
                    <option>EUR/USD</option>
                    <option>GBP/USD</option>
                    <option>USD/JPY</option>
                    <option>USD/CAD</option>
                    <option>USD/CHF</option>
                    <option>AUD/USD</option>
                    <option>NZD/USD</option>
                    <option>EUR/GBP</option>
                    <option>GBP/JPY</option>
                    <option>EUR/JPY</option>
                  </select>
                </div>
              </div>

              <!-- INVERSION -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Inversion:</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="inversion" placeholder="USD" min="1" step="0.1" required>
                </div>
              </div>

              <!-- RENTABILIDAD -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Rentabilidad:</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="rentabilidad" placeholder="Porcentaje" min="1" max="100" required>
                </div>
              </div>

              <!-- Resultado -->
              <div class="form-group row">
                <div class="col-sm-4" style="color:#FFFFFF";>Resultado:</div>
                <div class="col-sm-8">
                  <select class="form-control" name="resultado">
                    <option>Ganada</option>
                    <option>Perdida</option>
                  </select>
                </div>
              </div>

              <!-- OBSERVACIONES -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Observaciones:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="observaciones" placeholder="Aqui la estrategia utilizada">
                </div>
              </div>

              <div class="form-group">
                <input type="submit" value="Guardar" class="btn float-right login_btn" name="guardar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>          
  </div>

  <div class="modal fade" id="modal_info3">
    <div class="container">
      <div class="d-flex justify-content-center h-100" style="padding-top: 150px">
        <div class="card" style="width: 22%; height: 80%;">    
          <div class="card-header">
            <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='bitacora.php'">&times;</button>
            <h3>Capital inicial</h3>
          </div>  
          <div class="card-body">
            <form action="consulta_bitacora.php" method="post">
              <center>
                <input type="number" class="form-control" name="capital" placeholder="USD" min="1" step="1" required style="width : 70%"; >
                
                <input type="submit" value="GUARDAR" class="btn float-right login_btn" name="guardar_capital" id="boton_capital">
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="eliminar">
    <div class="container">
      <div class="d-flex justify-content-center h-100" style="padding-top: 150px">
        <div class="card" style="width: 22%; height: 80%;">    
          <div class="card-header">
            <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='bitacora.php'">&times;</button>
            <h3>Eliminar fila</h3>
          </div>  
          <div class="card-body">
            <form action="consulta_bitacora.php" method="post">
              <center>
                <input type="number" class="form-control" name="fila" placeholder="ID" min="1" step="0.1" required style="width : 70%"; >
                
                <input type="submit" value="ELIMINAR" class="btn float-right login_btn" name="eliminar" id="boton_capital">
              </center>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>   


  <?php }; ?>

  <!---  Footer --->
  <footer class="page-footer font-small pt-4" style="background-color: yellow; margin-top: 11%;">

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