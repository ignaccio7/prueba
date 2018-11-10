<?php 
	
	require 'conexion.php';
	$conexion = conectarDB();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Final</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

	<!-- CABECERA DE LA PAGINA -->
	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-1">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">LogoTipo</a>
				</div>
				<!-- aqui inicia el menu -->
				<div class="collapse navbar-collapse" id="navegacion-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="inicio.php">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Categorias <span class="caret"></span> </a>
							<ul class="dropdown-menu" role="menu">
								<li class="dropdown-header">Categorias</li>
								<li class="divider"></li>
								<li><a href="cargo.php">Cargo Inicio</a></li>
								<li><a href="#">Categoria #2</a></li>
								<li><a href="#">Categoria #3</a></li>
							</ul>
						</li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contactanos</a></li>
					</ul>
					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="buscar">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>
				</div>
			</div>
		</nav>		
	</header>

	<!-- JUMBOTRON -->
	<section class="jumbotron">
		<div class="container">
			<h1>Inicio Cargo</h1>
			<p>busqueda - modificaciones - registros - eliminaciones</p>
		</div>
	</section>

	<!-- CUERPO DE LA PAGINA -->
	<section class="main container">
		<div class="row">
			<section class="posts col-md-12">
				<div class="migas-de-pan">
					<ol class="breadcrumb">
						<li><a href="inicio.php">Inicio</a></li>
						<li><a href="#">Cargo</a></li>
						<li class="active">Listado</li>
						<li class="pull-right"><a class="btn btn-primary btn-xs" data-toggle="modal" href="#ventana"><span class="glyphicon glyphicon-plus"></span></a></li>
					</ol>
				</div>
			</section>
		</div>
		<div class="row">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<tr>
						<th>ID_CARGO</th>
						<th>CARGO</th>
						<th colspan="2">OPCIONES</th>						
					</tr>
					<?php 
						$query = "SELECT * from cargo";
						$resultado = pg_query($conexion,$query);
						$filas = pg_num_rows($resultado);

						if ($filas != 0) { 
							while ($dato = pg_fetch_array($resultado)) { ?>
						<tr>
							<td><?php echo $dato['id_cargo'] ?></td>
							<td><?php echo $dato['cargo'] ?></td>
							<td><a href="eliminar_cargo.php?idc=<?php echo $dato['id_cargo'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
							<td><a href="modificar_cargo.php?idc=<?php echo $dato['id_cargo'] ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></td>
						</tr>
						<?php }
						 }else{ ?>
							<td colspan="4">No Hay filas existentes ...</td>
						<?php } ?>			
				</table>
			</div>
		</div>
	</section>

	
	<!-- PIE DE PAGINA -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>Nestor Ignacio Rojas Guarachi</p>
				</div>
				<div class="col-xs-6">
					<ul class="list-inline text-right">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Cursos</a></li>
						<li><a href="#">Contactanos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<div class="modal fade" id="ventana">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Cabezara de la ventana -->
				<div class="modal-header">
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Registro Nuevo Cargo</h4>
				</div>
				<!-- Cuerpo de la ventana -->
				<div class="modal-body">
					<form action="registrar_cargo.php" name="form1" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="cargo" class="control-label col-md-2">
								Cargo :
							</label>
							<div class="col-md-10">
								<input type="text" name="cargo" class="form-control" placeholder="digite nuevo cargo">
							</div>
						</div>					
				</div>
				<!-- Pie de pagina de la ventana -->
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Enviar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</form>
				</div>
			</div>
		</div>		
	</div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>