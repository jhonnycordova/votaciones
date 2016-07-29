<?php
	session_start();
	include("seguridad.php");
	include("../conex.php");
	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];

	$userAdmin = 'keila';
	$claveAdmin = 'ramirez';

	$_SESSION["aut"]="si";
	$_SESSION["admin"]="si";

	if($usuario == $userAdmin && $clave == $claveAdmin ){
		header("location:indexAdmin.php");
	}else{
		echo "<script>alert('Usuario No Autorizado!') </script>";
        echo "<meta http-equiv='refresh' content='0,url=../index.php'>";
	}
 ?>