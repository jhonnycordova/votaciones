<?php session_start(); ?>
<?php 
include("seguridad.php");
	include("../conex.php");
	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$partido = $_POST["partido"];
	
	$imagen = $_FILES['imagen']['name'];
	
	
	$tmpimagen = $_FILES['imagen']['tmp_name'];
	$urlguardar = "../images/".$imagen;

	if(is_uploaded_file($tmpimagen)){
		
		copy ($tmpimagen,$urlguardar);
	}

	$sql = ("UPDATE candidatos set nombre = '$nombre', apellido = '$apellido', partido = '$partido', imagen = '$imagen' where id = '$id'");

	if(mysql_query($sql)){
		echo "<script>alert('Candidato Modificado!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=candidatos.php'>";
	}else{
		echo "<script>alert('No se puede Modificar!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=candidatos.php'>";
	}
 ?>