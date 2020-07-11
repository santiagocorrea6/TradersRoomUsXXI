<?php session_start();

	//print_r($_FILES);

	$userName = $_SESSION['userName'];

	$formato = $_FILES["foto"]["type"];
	print_r($formato);

	if ($formato == "image/png" or $formato == "image/jpeg" or $formato == "image/jpg") {
		$foto = $_FILES["foto"]["name"];
		$ruta = $_FILES["foto"]["tmp_name"];
		$destino = "img/perfil/".$foto;
		copy($ruta, $destino);

		$conexion = mysqli_connect('localhost','root','','sesion');
		$sql = "UPDATE usuarios SET foto = '$destino'  WHERE user = '$userName'";
		$result = mysqli_query($conexion,$sql);
	} 
	
	header("Location: perfil.php");
?>