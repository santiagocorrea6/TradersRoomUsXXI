<?php
	
	// Datos de ingreso a la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "sesion";

	// Cargar datos de inicio
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$contrasena2 = $_POST['contrasena2'];
	
	// Creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect($servidor, $usuario, "");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db($conexion, $basededatos);

	// Establecer la consulta
	$consulta = "INSERT INTO usuarios(name, surname, email, pass) VALUES ('$nombre','$apellido','$correo','$contrasena')";

	// Realizar la consulta
	if ($contrasena == $contrasena2) {
		mysqli_query($conexion, $consulta);
		echo "Bienvenido ";
		echo "$nombre";
		session_start();
		$_SESSION['user'] = $nombre;
		$_SESSION['auth'] = true;

		$consulta = "CREATE TABLE $nombre (id INT(4), fecha VARCHAR(20), paridad VARCHAR(10), inversion INT(20), rentabilidad INT(5), resultado VARCHAR(10), ganancia VARCHAR(10), capital VARCHAR(30), observaciones VARCHAR(30))";

		mysqli_query($conexion, $consulta);

	} else{
		header("Location: registro.php");
		$_SESSION['auth'] = false;
	}

	if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
		header("Location: home.php");	
	}

	
	mysqli_close($conexion);
?>