<?php
	session_start();
	include("conex.php");
	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];


	$sql = ("SELECT * from usuarios where user = '$usuario' and clave ='$clave'");
	$result = mysql_query($sql);

	$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);

	$estado =  $row[status];

	if($row[status] == 'I'){
		echo "<script>alert('Usted ya Voto!') </script>";
		echo "<meta http-equiv='refresh' content='0,url=index.php'>";
	}else{
		if($num > 0){
		$_SESSION["aut"]="si";
		$_SESSION["usuario"] = $row["usuario"];
		header("location:index2.php");
		
	}else{
		echo "<script>alert('Usuario No Autorizado!') </script>";
        echo "<meta http-equiv='refresh' content='0,url=index.php'>";
	}	
	}

	
	
	
 ?>