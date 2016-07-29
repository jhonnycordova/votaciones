<?php
include("seguridad.php");
	include("../conex.php");
				$nombre = $_POST["nombre"];
				$apellido = $_POST["apellido"];
				$cedula = $_POST["cedula"];
				$usuario = $_POST["usuario"];
				$clave = $_POST["clave"];


				$sql = ("insert into usuarios (nombre, apellido, user, clave, cedula, tipo, status) values ('$nombre', '$apellido', '$usuario', '$clave', '$cedula', 'E', 'A')");
			

	

	if(mysql_query($sql)){
		echo "<script>alert('Usuario Registrado! Ahora puede Loguearse para Votar.') </script>";
		echo "<meta http-equiv='refresh' content='0,url=electores.php'>";
	}else{
		echo "<script>alert('Datos NO Registrado!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=registro.php'>";
	}
?>