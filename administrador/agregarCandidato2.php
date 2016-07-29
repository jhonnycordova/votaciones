<?php session_start(); ?>
<?php 
	include("seguridad.php");
	include("../conex.php");
	
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$partido = $_POST["partido"];
	
	$imagen = $_FILES['imagen']['name'];
	
	
	$tmpimagen = $_FILES['imagen']['tmp_name'];
	$urlguardar = "../images/".$imagen;

	if(is_uploaded_file($tmpimagen)){
		
		copy ($tmpimagen,$urlguardar);
	}

	$sql = ("insert into candidatos (nombre, apellido, partido, imagen, votos) values ('$nombre', '$apellido', '$partido', '$imagen', 0)");

	


	if(mysql_query($sql)){
		echo "<script>alert('Candidato Registrado!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=candidatos.php'>";
	}else{
		echo "<script>alert('No se Puede registrar!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=candidatos.php'>";
	}
	


 ?>