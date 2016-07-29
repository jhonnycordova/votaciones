<!DOCTYPE HTML>

<html>
	<head>
		<title>Votaciones 2014</title>
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
				$id = $_GET["id"];

				
					include("../conex.php");

					$sql = ("SELECT * FROM candidatos where id = '$id'");
		            $result = mysql_query($sql);
            		$row = mysql_fetch_array($result);
           	
           			
		
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
		
		<!-- Banner Wrapper -->
			<div id="banner-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Banner -->
								<div id="banner" class="box">

									<div>
										<div class="row">
											<div class="7u">
												<h2>Modificar Candidato:</h2>
												<p>Elecciones AIS UNERG 2014</p>
											</div>
											<div class="5u">
												<form action="modificarCandidato2.php" method="POST" enctype="multipart/form-data">
													<ul>
														<li><input type="hidden" name="id" value="<?php echo $row[id] ?>"></li>
														<li><input class="button alt fa" type="text"  name="nombre" value="<?php echo $row[nombre] ?>" required/></li>
														<li><input class="button alt fa" type="text" placeholder="Apellido" name="apellido" value="<?php echo $row[apellido] ?>" required></li>
														<li><input class="button alt fa" type="text" placeholder="Partido" name="partido" value="<?php echo $row[partido] ?>" required></li>
														<li><input class="button alt fa" type="file" placeholder="Imagen" name="imagen" value="<?php echo $row[imagen] ?>" required></li>
														<br>
														<li><button type="submit" class="button fa fa-arrow-circle-right">Modificar</button></li>
													</ul>
												</form>
											</div>
										</div>
									</div>
								
								</div>

						</div>
					</div>
				</div>
			</div>

	</body>
</html>