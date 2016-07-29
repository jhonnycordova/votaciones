<?php session_start(); ?>
<?php 
include("seguridad.php");
	include("../conex.php");

	$id = $_GET["id"];

	$sql = ("DELETE FROM usuarios where id='$id'");

	if(mysql_query($sql)){
		echo "<script>alert('Elector Eliminado') </script>";
		echo "<meta http-equiv='refresh' content='0,url=electores.php'>";
	}else{
		echo "<script>alert('No se Puede Eliminar') </script>";
		echo "<meta http-equiv='refresh' content='0,url=electores.php'>";
	}
 ?>