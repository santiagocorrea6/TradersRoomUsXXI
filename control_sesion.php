<?php 
	print($_POST['usuario'].":<br>");
	
	$Usuarios = array(
		['user'=>"juan",'pass'=>"1234"],
		['user'=>"carlos",'pass'=>"4321"],
	);

	$i = 0;
	while ($i < sizeof($Usuarios)) {
		print(" *".$Usuarios[$i]['user']." - ".$Usuarios[$i]['pass']."<br>");
		if($Usuarios[$i]['user'] == $_POST['usuario'] && $Usuarios[$i]['pass'] == $_POST['contrasena']){
			session_start();
			$_SESSION['user'] = $_POST['usuario'];
			$_SESSION['auth'] = true;
			break;
		}
		$i = $i + 1;
	}

	if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
		print("Existe");
		header("Location: home.php");	
	}else{
		print("No existe");
		header("Location: index.php?error=true");
	}
?>