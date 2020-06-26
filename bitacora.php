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
      <div class="d-flex justify-content-center h-100" style="padding-top: 110px">
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

  <!-- BODY -->
  <br><br><br>
  <?php if ($_flag == false){ ?>
    <h1 style="color:#FFFFFF";>Solo para usuarios registrados</h1>
    <h3 style="color:#FFFFFF";>Por favor inicie sesion o <a href="registro.php">registrese</a></h3>
  <?php } else { 
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
        <h2 id="dos">100 $ </h2>
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
            <th scope="col">Capital Total</th>
            <th scope="col">Observaciones</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $a = $_SESSION['user'];
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
      <button class="float-right login_btn mx-1" type="button" data-toggle="modal" data-target="#modal_info2">Agregar</button>
    </div>
  </div>

  <div class="modal fade" id="modal_info2">
    <div class="container">
      <div class="d-flex justify-content-center h-100" style="padding-top: 100px">
        <div class="card" style="width: 40%; height: 100%;">
          <div class="card-header">
            <h3>Registrar Evento</h3>
          </div>
      
          <div class="card-body">
            </form>

            <form action="consulta_bitacora.php" method="post">
              <!-- FECHA -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Fecha:</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha" placeholder="">
                </div>
              </div>

              <!-- PARIDAD -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Paridad:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="paridad" placeholder="EUR/USD">
                </div>
              </div>

              <!-- INVERSION -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Inversion:</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="inversion" placeholder="USD" min="1" step="0.1">
                </div>
              </div>

              <!-- RENTABILIDAD -->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" style="color:#FFFFFF";>Rentabilidad:</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="rentabilidad" placeholder="Porcentaje" min="1" max="100">
                </div>
              </div>

              <!-- Resultado -->
              <!--div class="form-group row">
                <div class="col-sm-4" style="color:#FFFFFF";>Resultado:</div>
                <div class="col-sm-8">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="resultado">
                    <label class="form-check-label" style="color:#FFFFFF";> Ganada</label>
                  </div>
                </div>
              </div-->

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


  <?php }; ?>
  
  
</body>
</html>