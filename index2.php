<?php ini_set("display_errors", false) ?>
<?php session_start(); ?>
 <?php
    include("conex.php");
 	$usuario = $_SESSION["usuario"];
 
    
    $sql = ("SELECT * FROM usuarios where user = '$usuario'");
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
    
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Votaciones 2014</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />s
		</noscript>
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
												<li class="current_page_item"><a href="index.php">Inicio</a></li>
												<li><a href="informacion.html">Informacion</a></li>
												<li><a href="index.php">Cerrar Sesión</a></li>
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
												<h2>Bienvenido:</h2>
												<p> <font color="red"> <?php echo $row[nombre]." ".$row[apellido] ?></font> </p>
												<p>Elecciones AIS UNERG 2014</p>
											</div>
											<div class="5u">
												<ul>
													<li><a href="candidatos/candidatos.php" class="button big fa fa-arrow-circle-right">¡Vota!</a></li>
													
												</ul>
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