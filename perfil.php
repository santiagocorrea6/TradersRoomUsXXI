<?php session_start();
  if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
    header("Location: index.php");
    $_flag = false;
  } else {
    $conexion = mysqli_connect('localhost','root','','sesion');
    $_flag = true;
    $userName = $_SESSION['userName'];
  }

  //OPERACIONES GANADAS Y PERDIDAS
  $consulta = "SELECT resultado FROM $userName";
  $resultado = mysqli_query($conexion, $consulta);

  $win = 0; //Operaciones ganadas
  $loss = 0; //Operaciones perdidas
  $numOperaciones = 0;
  $capitalActual = 0;

  while ($columna = mysqli_fetch_array($resultado)) {
    if ($columna['resultado'] == "Ganada") {
      $win = $win + 1;
    } else {
      $loss = $loss + 1;
    }

    $numOperaciones = $numOperaciones + 1;
  }

  //CONSULTA CAPITAL INICIAL
  $consulta = "SELECT capital, name, surname, email FROM usuarios WHERE user = '$userName'";
  $resultado = mysqli_query($conexion, $consulta);

  while ($columna = mysqli_fetch_array($resultado)) {
    $capitalInicial = $columna['capital'];
    $name = $columna['name'];
    $surname = $columna['surname'];
    $email = $columna['email'];
  }

  //CONSULTA CAPITAL ACTUAL
  $consulta = "SELECT capital FROM $userName";
  $resultado = mysqli_query($conexion, $consulta);

  while ($columna = mysqli_fetch_array($resultado)) {
    $capitalActual = $columna['capital'];
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

  <!-- Estilos CSS -->
  <link rel="stylesheet" type="text/css" href="css/estilo_perfil.css">
  <link rel="icon" type="imagenes/png" href="img/icono.png">

   <style>
    *{
      border: 0px solid;
    }
  </style>
</head>

<body id="fondoImagen1">
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

  <div class="container">
    <div class="row">
      <!-- Informacion Personal -->
      <div class="col-md-4 col-sm-12 col-xs-12" id="container">
        <center class="azul">

          <?php 
            $conexion = mysqli_connect('localhost','root','','sesion');
            $sql = "SELECT foto FROM usuarios WHERE user = '$userName'";
            $result = mysqli_query($conexion,$sql);
            $result = mysqli_fetch_array($result);

            echo '<img src="'.$result["foto"].'" alt="Avatar" class="image">';
          ?>

          <!--img src="img/perfil.png" alt="Avatar" class="image" style="width:50%"-->

          <h3><?php echo $userName;?></h3>

          <p id="perfil"><b>Nombre:</b> <?php echo ucfirst($name);?></p>
          <p id="perfil"><b>Apellido:</b> <?php echo ucfirst($surname);?></p>
          <p id="perfil"><b>Correo:</b> <?php echo $email;?></p>
        </center>
          
        <div class="middle">
          <a data-toggle="modal" data-target="#modal_img"><div class="text">Editar</div></a>
        </div>
      </div>

      <!-- Datos sobre capital -->
      <div class="row col-md-8 col-sm-12 col-xs-12 media">
        <div class="media col-md-4 gris">
          <div class="media-body">
            <p class="mt-0 mb-1">Capital Inicial</p>
            <h4>$<?php echo $capitalInicial;?></h4>
          </div>
        
          <img src="img/graph.png" class="ml-1" id="icon">
        </div>

        <div class="media col-md-4 amarillo">
          <div class="media-body">
            <p class="mt-0 mb-1">Operaciones</p>
            <h4><?php echo $numOperaciones;?></h4>
          </div>
        
          <img src="img/graph2.png" class="ml-1" id="icon">
        </div>

        <?php if ($capitalActual >= $capitalInicial) { ?>
          <div class="media col-md-4 verde"> 
        <?php } else { ?>
          <div class="media col-md-4 rojo">
        <?php }  ?>
          <div class="media-body">
            <p class="mt-0 mb-1" id="verde">Capital Actual</p>
            <h4>$<?php echo $capitalActual;?></h4>
          </div>
      
          <img src="img/graph3.png" class="ml-1" id="icon">
        </div>

        <!-- Capital Total-->
        <div class="card2">
          <div class="card-header" style="height: 20%;">
            <h4>Resumen de operaciones</h4>
          </div>
          
          <div class="card-body">
            <blockquote class="blockquote mb-1">
              <canvas id="myChart"></canvas>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- OPERACIONES -->
  <div class="container container2">
    <div class="row">
      <div class="col-md-4">
        <div class="card3">
          <div class="card-header" style="height: 20%;">
            <h4>Operaciones</h4>
          </div>
            
          <div class="card-body">
            <blockquote class="blockquote mb-1">
              <canvas id="myChart2"></canvas>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- TradingView Widget -->
  <div class="container" id="trading">
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
      {
        "symbols": [
          {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR/USD"
          },
          {
            "description": "EUR/GBP",
            "proName": "FX_IDC:EURGBP"
          },
          {
            "description": "GBP/USD",
            "proName": "FX_IDC:GBPUSD"
          },
          {
            "description": "USD/JPY",
            "proName": "FX_IDC:USDJPY"
          }
        ],
        "colorTheme": "light",
        "isTransparent": true,
        "locale": "es"
      }
      </script>
    </div>
  </div>

</form>

  <div class="modal fade" id="modal_img">
    <div class="container">
      <div class="d-flex justify-content-center h-100" style="padding-top: 150px">
        <div class="card" style="width: 35%; height: 35%;">    
          <div class="card-header">
            <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='perfil.php'">&times;</button>
            <h3>Añadir Imagen</h3>
          </div>  
          <div class="card-body" style="margin-top: -5%">
            <form action="imagenes.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="file" class="form-control-file" name="foto">
              </div>
                
              <input type="submit" value="GUARDAR" class="btn float-right login_btn" name="guardar_capital" id="boton_capital">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<script>
  ctx= document.getElementById("myChart").getContext("2d");
  var myChart = new Chart(ctx,{
    type: 'line',
      data: {
        labels: [
          <?php
            $consulta = "SELECT id FROM $userName";
            $resultado = mysqli_query($conexion, $consulta);

            while ($columna = mysqli_fetch_array($resultado)) {
              echo $columna['id'];
              echo ",";
            }
          ?>
        ],
        
        datasets: [{
          borderWidth: 5,
          label: 'Inversion',
          fill: false,
          steppedLine: true,
          backgroundColor: ['rgba(255, 255, 255,1)'],
          borderColor: ['rgba(255, 255, 255,1)'],
          data:[
            <?php
              $consulta = "SELECT inversion FROM $userName";
              $resultado = mysqli_query($conexion, $consulta);

              while ($columna = mysqli_fetch_array($resultado)) {
                echo $columna['inversion'];
                echo ",";
              }
            ?>
          ],
        }, {
          label: 'Ganancia',
          fill: false,
          borderWidth: 5,
          backgroundColor: ['rgba(105, 105, 105,1)'],
          borderColor: ['rgba(0, 0, 0,1)'],
          borderDash: [5, 5],
          data:[
            <?php
              $consulta = "SELECT ganancia FROM $userName";
              $resultado = mysqli_query($conexion, $consulta);

              while ($columna = mysqli_fetch_array($resultado)) {
                echo $columna['ganancia'];
                echo ",";
              }
            ?>
          ],
        }, {
          label: 'Capital Total',
          backgroundColor: ['rgba(255, 248, 0,0.5)'],
          borderColor: ['rgba(255, 248, 0,1)'],
          borderWidth: 5,
          fill: true,
          data:[
            <?php
              $consulta = "SELECT capital FROM $userName";
              $resultado = mysqli_query($conexion, $consulta);

              while ($columna = mysqli_fetch_array($resultado)) {
                echo $columna['capital'];
                echo ",";

                $capital = $columna['capital'];
              }
            ?>
          ],
        }]
      },
      
      options: {
        responsive: true,
        legend: {
        display: true,
        labels: {
          fontColor: 'rgb(255, 255, 255)',
          fontSize: 14,
        }
      },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
          scales: {
            xAxes: [{
              display: true,
              gridLines: {
                display: true,
                color: 'rgba(255, 255, 255,0.5)'
              },
              ticks: {
                fontColor: 'rgba(255, 255, 255,1)'
              },
              scaleLabel: {
                display: true,
                fontSize: 18,
                labelString: 'OPERACION',
                fontColor: 'rgba(255, 255, 255,1)'
              }
            }],
            yAxes: [{
              display: true,
              gridLines: {
              display: true,
              color: 'rgba(255, 255, 255,0.5)'
            },
            ticks: {
              fontColor: 'rgba(255, 255, 255,1)'
            },
            scaleLabel: {
              display: true,
              fontSize: 18,
              labelString: 'USD',
              fontColor: 'rgba(255, 255, 255,1)'
            }
          }]
        }
      }
    });

  var ctx= document.getElementById("myChart2").getContext("2d");
  var myChart = new Chart(ctx,{
    type: 'doughnut',
    data: {
      datasets: [{
        data: [<?php echo "$win, $loss";?>],
        backgroundColor: [
          'rgba(255, 248, 0,1)',
          'rgba(0, 0, 0,1)',
        ],
        label: 'Dataset 1'
      }],
      labels: [
        'Ganadas',
        'Perdidas'
      ]
    },
    options: {
      responsive: true,
      legend: { 
        position: 'left',
        labels: {
          fontColor: "white",
          fontSize: 14,
          position: 'left'
        }
      },
      animation: {
        animateScale: true,
        animateRotate: true
      }
    }
  });
</script>

