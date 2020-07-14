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
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/sesiones.css">
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
          
          <li class="nav-item">
            <a class="nav-link" href="personas.php">Personas</a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="bitacora.php">Bitacora</a>
          </li>
          
          <li class="nav-item active">
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
        

  <!----------------------------------------HORIARIOS------------------------------------------->

  <div class="container-fluid contenedor-hor">
    <div class="row pt-5 ">
      <div class="col-xs-12 col-lg-2">
        <div class="row">
          <div class="col-lg-12 pt-4" >
            <h3 class="titulos-hor">LUNES</h3>
          </div>
          <div class="col-lg-12">            
            <img src="img/jhancalunes.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/alejolunes.jpeg" class=" img-prin" >
          </div>
          <div class="col-lg-12">
            <img src="img/imgnegralogo.png" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/imgnegralogo.png" class=" img-prin" alt="Responsive image">
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-lg-2">
        <div class="row">
          <div class="col-lg-12 pt-4">
            <h3 class="titulos-hor">MARTES</h3>
          </div>
          <div class="col-lg-12">
            <img src="img/jairomartes.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/alejoocapmomartesnoche.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/imgnegralogo.png" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/imgnegralogo.png" class=" img-prin" alt="Responsive image">
          </div>          
        </div>
      </div>
      <div class="col-xs-12 col-lg-2">
        <div class="row">
          <div class="col-lg-12 pt-4">
            <h3 class="titulos-hor">MIERCOLES</h3>
          </div>
          <div class="col-lg-12">
            <img src="img/maicolmiercoles.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/tellomiercoles.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/alexandermiercoles.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/alejoocampomiercolesnoche.jpeg" class=" img-prin" alt="Responsive image">
          </div>          
        </div>
      </div>
      <div class="col-xs-12 col-lg-2">
        <div class="row">
          <div class="col-lg-12 pt-4">
            <h3 class="titulos-hor">JUEVES</h3>
          </div>
          <div class="col-lg-12">
            <img src="img/maicoljueves.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/galvezjueves.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/jairojueves.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/jhancajuevesnoche.jpeg" class=" img-prin" alt="Responsive image">
          </div>  
        </div>
      </div>
      <div class="col-xs-12 col-lg-2">
        <div class="row">
          <div class="col-lg-12 pt-4">
            <h3 class="titulos-hor">VIERNES</h3>
          </div>
          <div class="col-lg-12">
            <img src="img/jairoviernes.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/rivaldoviernes.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/imgnegralogo.png" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/imgnegralogo.png" class=" img-prin" alt="Responsive image">
          </div>          
        </div>
      </div>
      <div class="col-xs-12 col-lg-2">
        <div class="row">
          <div class="col-lg-12 pt-4">
            <h3 class="titulos-hor">SABADO</h3>
          </div>
          <div class="col-lg-12">
            <img src="img/jairosabado.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/danissabado.jpeg" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/imgnegralogo.png" class=" img-prin" alt="Responsive image">
          </div>
          <div class="col-lg-12">
            <img src="img/imgnegralogo.png" class=" img-prin" alt="Responsive image">
          </div>          
        </div>
      </div>
    </div>    
  </div>

 

 <!-------------------------------------------FIN HORARIOS-------------------------------------------->
<div class="container-fluid tradingV">
      <center><img src="img/par.png" class="img-par" alt="Responsive image"></center>
      <h3 class="divisas">Revisa en tiempo real el par de divisas de tu interés</h3><br>
</div>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container tradingV">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": true,
  "displayMode": "adaptive",
  "locale": "es"
}
  </script>
</div>
<!-- TradingView Widget END -->

<div class="container-fluid tradingV">

  <div class="row">

        <!-- TradingView Widget BEGIN  izquierda-->
    <div class="tradingview-widget-container-fluid tradingV">
      <div class="tradingview-widget-container__widget"></div>
      <div class="tradingview-widget-copyright"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
      {
      "colorTheme": "dark",
      "dateRange": "1d",
      "showChart": true,
      "locale": "es",
      "largeChartUrl": "",
      "isTransparent": true,
      "width": "400",
      "height": "600",
      "plotLineColorGrowing": "rgba(255, 255, 0, 0.87)",
      "plotLineColorFalling": "rgba(25, 118, 210, 1)",
      "gridLineColor": "rgba(42, 46, 57, 1)",
      "scaleFontColor": "rgba(255, 255, 0, 1)",
      "belowLineFillColorGrowing": "rgba(0, 0, 0, 0.12)",
      "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
      "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
      "tabs": [
        {
          "title": "Índices",
          "symbols": [
            {
              "s": "FOREXCOM:SPXUSD",
              "d": "S&P 500"
            },
            {
              "s": "FOREXCOM:NSXUSD",
              "d": "Nasdaq 100"
            },
            {
              "s": "FOREXCOM:DJI",
              "d": "Dow 30"
            },
            {
              "s": "INDEX:NKY",
              "d": "Nikkei 225"
            },
            {
              "s": "INDEX:DEU30",
              "d": "DAX Index"
            },
            {
              "s": "FOREXCOM:UKXGBP",
              "d": "FTSE 100"
            }
          ],
          "originalTitle": "Indices"
        },
        {
          "title": "Materias primas",
          "symbols": [
            {
              "s": "CME_MINI:ES1!",
              "d": "E-Mini S&P"
            },
            {
              "s": "CME:6E1!",
              "d": "Euro"
            },
            {
              "s": "COMEX:GC1!",
              "d": "Gold"
            },
            {
              "s": "NYMEX:CL1!",
              "d": "Crude Oil"
            },
            {
              "s": "NYMEX:NG1!",
              "d": "Natural Gas"
            },
            {
              "s": "CBOT:ZC1!",
              "d": "Corn"
            }
          ],
          "originalTitle": "Commodities"
        },
        {
          "title": "Bonos",
          "symbols": [
            {
              "s": "CME:GE1!",
              "d": "Eurodollar"
            },
            {
              "s": "CBOT:ZB1!",
              "d": "T-Bond"
            },
            {
              "s": "CBOT:UB1!",
              "d": "Ultra T-Bond"
            },
            {
              "s": "EUREX:FGBL1!",
              "d": "Euro Bund"
            },
            {
              "s": "EUREX:FBTP1!",
              "d": "Euro BTP"
            },
            {
              "s": "EUREX:FGBM1!",
              "d": "Euro BOBL"
            }
          ],
          "originalTitle": "Bonds"
        },
        {
          "title": "Forex",
          "symbols": [
            {
              "s": "FX:EURUSD"
            },
            {
              "s": "FX:GBPUSD"
            },
            {
              "s": "FX:USDJPY"
            },
            {
              "s": "FX:USDCHF"
            },
            {
              "s": "FX:AUDUSD"
            },
            {
              "s": "FX:USDCAD"
            }
          ],
          "originalTitle": "Forex"
        }
      ]
    }
      </script>
    </div>
    <!-- TradingView Widget END -->

    <!-- TradingView Widget BEGIN  derecha-->
    <div class="tradingview-widget-container-fluid tradingV">
      <div class="tradingview-widget-container__widget"></div>
      <div class="tradingview-widget-copyright"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
      {
      "width": "935",
      "height": "600",
      "symbolsGroups": [
        {
          "name": "Índices",
          "originalName": "Indices",
          "symbols": [
            {
              "name": "FOREXCOM:SPXUSD",
              "displayName": "S&P 500"
            },
            {
              "name": "FOREXCOM:NSXUSD",
              "displayName": "Nasdaq 100"
            },
            {
              "name": "FOREXCOM:DJI",
              "displayName": "Dow 30"
            },
            {
              "name": "INDEX:NKY",
              "displayName": "Nikkei 225"
            },
            {
              "name": "INDEX:DEU30",
              "displayName": "DAX Index"
            },
            {
              "name": "FOREXCOM:UKXGBP",
              "displayName": "FTSE 100"
            }
          ]
        },
        {
          "name": "Materias primas",
          "originalName": "Commodities",
          "symbols": [
            {
              "name": "CME_MINI:ES1!",
              "displayName": "E-Mini S&P"
            },
            {
              "name": "CME:6E1!",
              "displayName": "Euro"
            },
            {
              "name": "COMEX:GC1!",
              "displayName": "Gold"
            },
            {
              "name": "NYMEX:CL1!",
              "displayName": "Crude Oil"
            },
            {
              "name": "NYMEX:NG1!",
              "displayName": "Natural Gas"
            },
            {
              "name": "CBOT:ZC1!",
              "displayName": "Corn"
            }
          ]
        },
        {
          "name": "Bonos",
          "originalName": "Bonds",
          "symbols": [
            {
              "name": "CME:GE1!",
              "displayName": "Eurodollar"
            },
            {
              "name": "CBOT:ZB1!",
              "displayName": "T-Bond"
            },
            {
              "name": "CBOT:UB1!",
              "displayName": "Ultra T-Bond"
            },
            {
              "name": "EUREX:FGBL1!",
              "displayName": "Euro Bund"
            },
            {
              "name": "EUREX:FBTP1!",
              "displayName": "Euro BTP"
            },
            {
              "name": "EUREX:FGBM1!",
              "displayName": "Euro BOBL"
            }
          ]
        },
        {
          "name": "Forex",
          "originalName": "Forex",
          "symbols": [
            {
              "name": "FX:EURUSD"
            },
            {
              "name": "FX:GBPUSD"
            },
            {
              "name": "FX:USDJPY"
            },
            {
              "name": "FX:USDCHF"
            },
            {
              "name": "FX:AUDUSD"
            },
            {
              "name": "FX:USDCAD"
            }
          ]
        }
      ],
      "colorTheme": "dark",
      "isTransparent": true,
      "locale": "es"
    }
      </script>
    </div>
    <!-- TradingView Widget END -->  
      
  </div>
</div>

<div class="container-fluid tradingV">
  <div class="row cal-eco">
    <div class="col-lg-12">
      <h3>Calendario económico</h3>
      <hr id="hr-cal">
    </div>
    
  </div>
  <div class="row ">
    <div class="col-lg-3">
      <div class="row">
        <div class="col-lg-12 tradingV">
           <h3 id="traders-h3">Universidads<span id="room-h3">XXI</span></h3>
        </div>
        <div class="col-lg-12 tradingV">
                    <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
            {
            "symbol": "FX:EURUSD",
            "width": 300,
            "height": 220,
            "locale": "es",
            "dateRange": "1d",
            "colorTheme": "dark",
            "trendLineColor": "rgba(255, 255, 0, 1)",
            "underLineColor": "rgba(255, 255, 255, 0.21)",
            "isTransparent": true,
            "autosize": false,
            "largeChartUrl": ""
          }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        
      </div>
     
    </div>
    <div class="col-lg-6">
      <iframe src="https://sslecal2.forexprostools.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=17,29,25,32,6,27,37,122,26,5,72,22,39,14,48,10,35,7,43,38,4,36,110,12&calType=week&timeZone=42&lang=4" width="650" height="467" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"></span></div>
    </div>
    <div class="col-lg-3">
      <div class="row">
        <div class="col-lg-12 tradingV">
          <h3 id="traders-h3">TRADERS<span id="room-h3">ROOM</span></h3>
        </div>
        <div class="col-lg-12 tradingV">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
            {
            "symbol": "FOREXCOM:USDJPY",
            "width": "300",
            "height": 220,
            "locale": "es",
            "dateRange": "1d",
            "colorTheme": "dark",
            "trendLineColor": "rgba(255, 255, 0, 1)",
            "underLineColor": "rgba(255, 255, 255, 0.21)",
            "isTransparent": true,
            "autosize": false,
            "largeChartUrl": ""
          }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</div>


<div class=" conteniner-fluid tradingV">
  <h3 class="unisxxi">¿<span class="unisxxi2">Universidads<span class="unisxxi1">XXI</span></span> garantiza resultados?</h3>
  <p class="unisxxi3">Nunca. No creemos en vender resultados sino en promover proceso y garantizar soporte. Nuestra filosofía en el campo se traslada a través de priorizar el desarrollo, el acompañamiento, la supervisión y la evaluación constante a nuestros alumnos para garantizar la correcta implementación de la metodología y la validación del aprendizaje a través de la auditoría de cuentas.</p>
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