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

			$sql = ("SELECT * FROM candidatos");
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
		
		
		<h1 align="center"><font size="8">Candidatos:</font></h1>
		<!-- Features Wrapper -->
			<div id="features-wrapper">
				<div class="container">
					<div class="row">
						<?php 
                            while ($row=mysql_fetch_array($result)) {
                                ?>
						<div class="3u">
						
							<!-- Box -->
								<section class="box box-feature">
									<a href="#" class="image image-full"><img src="../images/<?php echo $row[imagen]  ?>" alt="" /></a>
									<div class="inner">
										<header>
											<h4>Nombre de  Candidato:</h4>
											<span class="byline"><?php echo $row[nombre]." ".$row[apellido] ?></span>
											<h4>Partido Politico:</h4>
											<span class="byline"><?php echo $row[partido] ?></span>
											<form action="confirmar.php" method="get">
												<input type="hidden" name="id" value="<?php echo $row[id] ?>">
												<button type="submit" class="button fa fa-arrow-circle-right">Votar</button>
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