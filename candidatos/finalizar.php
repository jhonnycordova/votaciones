
<!DOCTYPE HTML>
<?php 
	include("seguridad.php");

 ?>
<html>
	<head>
		<title>  ELECCIONES 2014</title>
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
												<li class="current_page_item"><a href="../index2.php">Inicio</a></li>
												<li><a href="../informacion.html">Informacion</a></li>
												<li><a href="../index.php">Cerrar Sesión</a></li>
												
											</ul>
										</nav>
								
								</header>

						</div>
					</div>
				</div>
			</div>
		
		
		
		<!-- Features Wrapper -->
			<div id="features-wrapper">
				<div class="container">
					<div class="row">
						
							<div class="12u">
						
							<!-- Banner -->
								<div id="banner" class="box">

									<div>
										<div class="row">
											<div class="7u">
												<h2>Su voto fue Procesado con Éxito</h2>
												
											</div>
											<div class="5u">
												<ul>
													
													<li><a href="../index.php" class="button big fa fa-arrow-circle-right">Salir</a></li>
													
												</ul>
											</div>
										</div>
									</div>
								
								</div>

						</div>

						
	
								</section>

						</div>
					</div>
				</div>
			</div>

		
<?php 
        session_start();
        session_destroy();
?>
	
			

	</body>

</html>
