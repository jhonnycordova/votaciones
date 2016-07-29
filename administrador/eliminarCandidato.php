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



			$sql = ("SELECT * FROM candidatos where id = '$id'");
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
												<li><a href="indexAdmin.php">Inicio</a></li>
												<li><a href="../informacion.html">Informacion</a></li>
												<li class="current_page_item"><a href="sesionadministrador.php">Administrador</a></li>
												
												<li><a href="../index.php">Cerrar Sesion</a></li>

											</ul>
										</nav>
								
								</header>

						</div>
					</div>
				</div>
			</div>
		
		
		<h1 align="center"><font size="8">¿Está Seguro que Quiere Eliminar?</font></h1>
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
						
							<!-- Box -->
								<section class="box box-feature">
									<a href="#" class="image image-full"><img src="../images/<?php echo $row[imagen]  ?>" alt="" /></a>
									<div class="inner">
										<header>
											<h1><font size="6"> Nombre de  Candidato:</font></h1>
											<span class="byline"><font size="5"><?php echo $row[nombre]." ".$row[apellido] ?></font></span>
											<h1><font size="6"> Partido Polítco:</font></h1>
											<span class="byline"><font size="5"><?php echo $row[partido] ?></font></span>
											<form action="eliminarCandidato2.php" method="get">
												<input type="hidden" name="id" value="<?php echo $row[id] ?>">
												<button type="submit" class="button fa fa-arrow-circle-right">Eliminar</button>
												<a href="candidatos.php" class="button alt fa fa-arrow-circle-right">No, atrás</a>
											</form>
											
										</header>
									</div>
									
								</section>

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