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

    		

	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/select2.css" rel="stylesheet">
    <link href="../css/DT_bootstrap.css" rel="stylesheet">
    
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/select2.min.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <script src="DT_bootstrap.js"></script>
    

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
		
		<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="4u">
						
							<!-- Sidebar -->
								<div id="sidebar">

									<section>
										<footer>
											
											<a href="agregarCandidato.php" class="button fa fa-info-circle">Agregar Candidato</a><br>

										</footer>
									</section>


								</div>
						
						</div>
					<div class="8u skel-cell-important">

							<!-- Content -->
								<div id="content">
									<article class="last">

										<h2>Tabla Candidatos Registrados</h2>
										<div class="well well-small">
	<table id="dataTable" class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Acciones</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Partido</th>
				<th>Nom. Img. Referencia</th>
				
				
			</tr>
		</thead>
		<tbody>
			<?php 
		
                 while ($row=mysql_fetch_array($result)) {
                   ?>
			<tr>
				<td>
					<form action="eliminarCandidato.php" method="get">
						<input type="hidden" name="id" value="<?php echo $row[id] ?>">
						<button class="btn btn-mini btn-danger" type="submit">Eliminar</button>
					</form>
					<form action="modificarCandidato.php" method="get">
						<input type="hidden" name="id" value="<?php echo $row[id] ?>">
						<button class="btn btn-mini btn-primary" type="submit">Modificar</button>
					</form>
					

					
				</td>
				<td><?php echo $row[nombre] ?></td>
				<td><?php echo $row[apellido] ?></td>
				<td><?php echo $row[partido] ?></td>
				<td><img src="../images/<?php echo $row[imagen]  ?>" width="60px"></td>
				
				
			</tr>
			<?php 
				}
			 ?>
		</tbody>
	</table>
</div>
								</div>

						</div>
					</div>
				</div>
			</div>
		
<script type="text/javascript">
$(document).ready(function(){

$('#dataTable').dataTable( {
	sDom: "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
	sPaginationType: "bootstrap",
	oLanguage: {
		"sLengtdMenu": "_MENU_ Registros por pagina"
	}
});


$('select').select2();
});
</script>

	</body>
</html>