<?php 
	session_start();
	include("../seguridad.php");
	include("../conex.php");

	$idcandidato = $_GET["id"];
	$_SESSION["idcandidato"] = $idcandidato;
	$usuario = $_SESSION["usuario"];

	//consulta de candidato
	$sql = ("select * from candidatos where id= '$idcandidato'");
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);

	$voto = $row[votos] + 1;

	//UPdate de candidato	
	$sql2 = ("UPDATE candidatos SET votos = '$voto' where id= '$idcandidato'");
	$result2 = mysql_query($sql2);
	$num2 = mysql_num_rows($result2);
	$row2 = mysql_fetch_array($result2);

	//consulta de usuario

	$sql3 = ("UPDATE usuarios SET status = 'I' where user=  '$usuario'");
	$result3 = mysql_query($sql3);
	$num3 = mysql_num_rows($result3);
	$row3 = mysql_fetch_array($result3);

	
	header("location:finalizar.php");


 ?>