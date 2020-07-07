<?php
	
	$conexion = mysqli_connect('localhost','root','','sesion');
	$consulta = "SELECT name, pass, email FROM usuarios";
	$resultado = mysqli_query($conexion, $consulta);


	// cargar datos de inicio
	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];

	if (empty($nombre)) {
		session_start();
		$_SESSION['userName'] = 0;
		header("Location: index_error.php");
		exit;
	} 

	if (empty($contrasena)) {
		session_start();
		$_SESSION['userName'] = 1;
		header("Location: index_error.php");
		exit;
	}

	while ($columna = mysqli_fetch_array($resultado)) {

		if (($columna['email'] == $nombre) && ($columna['pass'] == $contrasena)) {
			session_start();

			$correo = strstr($columna['email'], '@', true); 
			$_SESSION['userName'] = $correo;
			$_SESSION['email'] = $_POST['correo'];
			$_SESSION['user'] = $columna['name'];
			$_SESSION['auth'] = true;
			break;
		}
	}

	if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
		header("Location: home.php");
		exit;	
	} 

	else {
		session_start();
		$_SESSION['userName'] = 2;
		header("Location: index_error.php");
		exit;
	}
	
	mysqli_close($conexion);
?>