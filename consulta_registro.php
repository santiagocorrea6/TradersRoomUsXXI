<?php

	// Cargar datos de inicio
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$contrasena2 = $_POST['contrasena2'];

	$user = strstr($correo, '@', true); 
	
	$conexion = mysqli_connect('localhost','root','','sesion');
	$sql = "SELECT user FROM usuarios";
	$result = mysqli_query($conexion,$sql);

	while ($columna = mysqli_fetch_array($result)) {
		if ($columna['user'] == $user) {
			session_start();
			$_SESSION['userName'] = "correo";
			header("Location: registro.php");
			exit;
		} 
	}

	if ($contrasena !== $contrasena2) {
		session_start();
		$_SESSION['userName'] = "contrasena";
		header("Location: registro.php");
		exit;

	} else {
	
		$consulta = "INSERT INTO usuarios(name, surname, user, email, pass, foto) VALUES ('$nombre','$apellido', '$user', '$correo','$contrasena', 'img/perfil/perfil.png')";
		mysqli_query($conexion, $consulta);

		session_start();
		$_SESSION['userName'] = $user;
		$_SESSION['email'] = $_POST['correo'];
		$_SESSION['user'] = $nombre;
		$_SESSION['auth'] = true;

		$consulta = "CREATE TABLE $user (id INT(4), fecha VARCHAR(20), paridad VARCHAR(10), inversion INT(20), rentabilidad INT(5), resultado VARCHAR(10), ganancia VARCHAR(10), capital VARCHAR(30), observaciones VARCHAR(30))";

		mysqli_query($conexion, $consulta);
		header("Location: home.php");
		exit;
	}
	
	mysqli_close($conexion);
?>