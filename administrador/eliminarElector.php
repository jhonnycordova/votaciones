<!DOCTYPE HTML>

<html>
	<head>
		<title>CANDIDATOS - ELECCIONES 2014</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="../js/jquery.min.js"></script>
		<script src="../js/config.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-panels.min.js"></script>
		<link rel="stylesheet" href="../css/skel-noscript.css" />
			<link rel="stylesheet" href="../css/style.css" />
			<link rel="stylesheet" href="../css/style-desktop.css" />
		

			<?php 
			include("seguridad.php");
			include("../conex.php");

			$id = $_GET["id"];



			$sql = ("SELECT * FROM usuarios where id = '$id'");
            $result = mysql_query($sql);
            
           
		 ?>
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<header id="header">
								
									<!-- Logo -->
										<div id="logo">
											<h1><a href="#" id="logo">VOTACIONES 2014</a></h1>
										</div>
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="index.html">Inicio</a></li>
												<li><a href="../informacion.html">Informacion</a></li>
												<li><a href="../index.php">Cerrar Sesión</a></li>
												
											</ul>
										</nav>
								
								</header>

						</div>
					</div>
				</div>
			</div>
		
		
		<h1 align="center"><font size="8">¿Está Seguro que Desea Eliminar?</font></h1>
		<!-- Features Wrapper -->
			<div id="features-wrapper" >
				<div class="container"  >
					<div class="row">

						<div class="4u">
							&nbsp;
						</div>
						<?php 
                            while ($row=mysql_fetch_array($result)) {
                                ?>
						<div class="5u">
							<h1><font size="6"> Nombre de Elector:</font></h1>
								<span class="byline"><font size="5"><?php echo $row[nombre]." ".$row[apellido] ?></font></span>
							<h1><font size="6"> Nombre de Usuario:</font></h1>
							<span class="byline"><font size="5"><?php echo $row[user] ?></font></span>
							<form action="eliminarElector2.php" method="get">
								<input type="hidden" name="id" value="<?php echo $row[id] ?>">
								<button type="submit" class="button fa fa-arrow-circle-right">Si, Eliminar</button>
								<a href="electores.php" class="button alt fa fa-arrow-circle-right">No, atrás</a>
							</form>

						</div>

						<?php 
							}
						 ?>
	
								</section>

						</div>
					</div>
				</div>
			</div>

		

		<!-- Footer Wrapper -->
			

	</body>
</html>