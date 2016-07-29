<?php
include("seguridad.php");
	include("../conex.php");
				$id = $_POST["id"];
				$nombre = $_POST["nombre"];
				$apellido = $_POST["apellido"];
				$cedula = $_POST["cedula"];
				$usuario = $_POST["usuario"];
				$clave = $_POST["clave"];


				$sql = ("UPDATE usuarios set nombre = '$nombre', apellido = '$apellido', cedula='$cedula', user = '$usuario', clave = '$clave' where id = '$id' ");
			

	

	if(mysql_query($sql)){
		echo "<script>alert('Elector Modificado!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=electores.php'>";
	}else{
		echo "<script>alert('No se puede Modificar!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=electores.php'>";
	}
?>