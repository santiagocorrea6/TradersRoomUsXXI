<?php session_start();

	$nombre = $_SESSION['user'];
	$fecha = $_POST['fecha'];
	$paridad = $_POST['paridad'];
	$inversion = $_POST['inversion'];
	$rentabilidad = $_POST['rentabilidad'];
	$resultado = $_POST['resultado'];
	$observaciones = $_POST['observaciones'];

	$capital = 0.0;
	$id = 3;

	$conexion = mysqli_connect('localhost','root','','sesion');
    $sql = "SELECT capital,id from $nombre order by id desc limit 1";
    $result = mysqli_query($conexion,$sql);
    $result = mysqli_fetch_array($result);
    $capital = $result['capital'];
    $id = $result['id'] + 1;

    /*print_r($capital);

    echo "$capital <br>";
	echo "$nombre <br>";
	echo "$fecha <br>";
	echo "$paridad <br>";
	echo "$inversion <br>";
	echo "$rentabilidad <br>";
	echo "$resultado <br>";
	echo "$observaciones <br><br><br>";*/

	if ($resultado == 'Ganada') {
		$capital = $capital + ($inversion * ($rentabilidad/100));
		echo "su nuevo capital es: $capital y el ID: $id";
	} else {
		$capital = $capital - $inversion;
		echo "su nuevo capital es: $capital y el ID: $id";
	}

	$sql = "INSERT INTO $nombre (id, fecha, paridad, inversion, rentabilidad, resultado, capital, observaciones) VALUES ('$id', '$fecha', '$paridad', '$inversion', '$rentabilidad', '$resultado', '$capital', '$observaciones')";

	mysqli_query($conexion,$sql);

	header("Location: bitacora.php");	

?>