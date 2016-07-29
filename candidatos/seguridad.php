<?php ini_set("display_errors", false) ?>
<?php 
	session_start();

	if($_SESSION["aut"] != "si") header("location:../index.php");
 ?>