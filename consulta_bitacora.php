<?php session_start();

	$nombre = $_SESSION['user'];

	$conexion = mysqli_connect('localhost','root','','sesion');
	$sql = "SELECT capital from usuarios WHERE name = '$nombre'";
	$result = mysqli_query($conexion,$sql);
	$result = mysqli_fetch_array($result);
	$capital_inicial = $result['capital'];

	//ALMACENAR CAPITAL INICIAL
	if (isset($_POST["guardar_capital"])) {
		
		//Captura el capital inicial
		$capital_inicial = $_POST['capital'];

		//Guarda capital en base de datos
		$conexion = mysqli_connect('localhost','root','','sesion');
		$sql = "UPDATE `usuarios` SET capital = '$capital_inicial' WHERE name = '$nombre'";
		mysqli_query($conexion,$sql);

		//Redirecciona a la bitacora
		header("Location: bitacora.php");
	}

	//GUARDAR REGISTRO EN BITACORA
	if(isset($_POST["guardar"])){

		//Datos recibidos para una nueva entrada
		$fecha = $_POST['fecha'];
		$paridad = $_POST['paridad'];
		$inversion = $_POST['inversion'];
		$rentabilidad = $_POST['rentabilidad'];
		$resultado = $_POST['resultado'];
		$observaciones = $_POST['observaciones'];

		$id = 0;
		$capital = 0.0;
		$ganancia = 0.0;

		//Inicia la conexion con la base de datos
		$conexion = mysqli_connect('localhost','root','','sesion');
	    $sql = "SELECT capital,id from $nombre order by id desc limit 1";
	    $result = mysqli_query($conexion,$sql);
	    $result = mysqli_fetch_array($result);
	    $capital = $result['capital'];
	    $id = $result['id'] + 1;

	    if ($id == 1) {

	    	if ($resultado == 'Ganada') {
				$ganancia = ($inversion * ($rentabilidad/100));
				$capital = $capital_inicial + $ganancia;
			} else {
				$ganancia = $ganancia - $inversion;
				$capital = $capital_inicial - $inversion;
			}
	    	
	    } else {

			if ($resultado == 'Ganada') {
				$ganancia = ($inversion * ($rentabilidad/100));
				$capital = $capital + $ganancia;
			} else {
				$ganancia = $ganancia - $inversion;
				$capital = $capital - $inversion;
			}
		}

		//Verificar las observaciones
		if (empty($observaciones)) {
		  	$observaciones = '-';
		}

		//Agrega los datos a la tabla
		$sql = "INSERT INTO $nombre (id, fecha, paridad, inversion, rentabilidad, resultado, ganancia, capital, observaciones) VALUES ('$id', '$fecha', '$paridad', '$inversion', '$rentabilidad', '$resultado', '$ganancia', '$capital', '$observaciones')";

		mysqli_query($conexion,$sql);

		//Redirecciona a la bitacora
		header("Location: bitacora.php");	
	}

?>