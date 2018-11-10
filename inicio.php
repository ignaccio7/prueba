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
			<h1>Titulo de mi Blog</h1>
			<p>Blog para diseño</p>
		</div>
	</section>

	<!-- CUERPO DE LA PAGINA -->
	<section class="main container">
		<div class="row">
			<section class="posts col-md-9">
				<div class="migas-de-pan">
					<ol class="breadcrumb">
						<li><a href="inicio.php">Inicio</a></li>
						<li><a href="#">Categorias</a></li>
						<li class="active">Diseño Web</li>
					</ol>
				</div>

				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="img-thumbnail" src="images/sitio-web.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Inicia proyectos HTML5 mas rapido</a>
					</h2>
					<p><span class="post-fecha">10 de Enero del 2018</span>
					por	<span class="post-autor"><a href="#">Nestor Ignacio</a></span>
					</p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<div class="contenedor-botones">
						<a href="#" class="btn btn-primary">Leer mas</a>
						<a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
					</div>
				</article>

				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="img-thumbnail" src="images/sitio-web-2.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Inicia proyectos HTML5 mas rapido</a>
					</h2>
					<p><span class="post-fecha">10 de Enero del 2018</span>
					por	<span class="post-autor"><a href="#">Nestor Ignacio</a></span>
					</p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<div class="contenedor-botones">
						<a href="#" class="btn btn-primary">Leer mas</a>
						<a href="#" class="btn btn-success">Comentarios <span class="badge">10</span></a>
					</div>
				</article>

				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="img-thumbnail" src="images/sitio-web-3.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Inicia proyectos HTML5 mas rapido</a>
					</h2>
					<p><span class="post-fecha">10 de Enero del 2018</span>
					por	<span class="post-autor"><a href="#">Nestor Ignacio</a></span>
					</p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<div class="contenedor-botones">
						<a href="#" class="btn btn-primary">Leer mas</a>
						<a href="#" class="btn btn-success">Comentarios <span class="badge">7</span></a>
					</div>
				</article>

				<!-- NAVEGACION -->
				<nav>
					<div class="center-block">
						<ul class="pagination">
							<li class="disabled"> <a href="#">&laquo; <span class="sr-only">Anterior</span></a> </li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;<span class="sr-only">Siguiente</span></a></li>
						</ul>
					</div>
				</nav>

			</section>

			<!-- ASIDE -->
			<aside class="col-md-3 hidden-xs hidden-sm">
				<h4>Categorias</h4>
				<div class="list-group">
					<a href="#" class="list-group-item active">Diseño Web</a>
					<a href="#" class="list-group-item">CSS</a>
					<a href="#" class="list-group-item">Cursos</a>
					<a href="#" class="list-group-item">Desarrollo Web</a>
					<a href="#" class="list-group-item">Elementos Web</a>
					<a href="#" class="list-group-item">Jquery</a>
				</div>

				<h4>Articulos Recientes</h4>
				<a href="#" class="list-group-item active">
					<h4 class="list-group-item-heading">Inicia proyectos HTML5 mas rapido</h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolore nam maiores ad officia aliquid voluptate, omnis accusamus accusantium earum!</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Inicia proyectos HTML5 mas rapido</h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolore nam maiores ad officia aliquid voluptate, omnis accusamus accusantium earum!</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Inicia proyectos HTML5 mas rapido</h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolore nam maiores ad officia aliquid voluptate, omnis accusamus accusantium earum!</p>
				</a>
			</aside>
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
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>