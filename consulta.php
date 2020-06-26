<?php
	
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "sesion";
	
	// Creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// Establecer la consulta
	$consulta = "SELECT name, pass FROM usuarios";

	// Realizar la consulta
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");


	// cargar datos de inicio
	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];

	while ($columna = mysqli_fetch_array($resultado)) {
		if (($columna['name'] == $nombre) && ($columna['pass'] == $contrasena)) {
			session_start();
			$_SESSION['user'] = $nombre;
			$_SESSION['auth'] = true;
			break;
		}
	}

	if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
		print("Existe");
		header("Location: home.php");	
	}else{
		print("No existe");
		header("Location: index.php?error=true");
	}
	
	mysqli_close($conexion);
?>