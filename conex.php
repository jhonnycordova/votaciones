<?php 
//debes modicar las extensiones en php.ini la de pgsql y pdo_pgsql y copiar la librería lbpq.dll que esta en PHP al apache
$link = mysql_connect('localhost', 'root','1234');
if(!mysql_select_db('votaciones', $link))
	echo "<script>alert('No hay conexion a la BD') </script>";
?>
