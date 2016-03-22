<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Plaza del Mariachi</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="css/jquery.fullPage.css">-->
		<link rel="stylesheet" href="css/header/component.css">
		<link rel="stylesheet" href="css/lightgallery.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-1.12.0.min.js"></script>
		<!--<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
<!--<script type="text/javascript" src="js/jquery.fullPage.js"></script>-->
		<script src="js/scrollreveal.min.js"></script>
		<!--<script src="js/modernizr.custom.js"></script>-->
	</head>
	<body>
		<div class="big-wrapper">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="white-bg"></div>
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="img/logo.png" alt="Plaza del Mariachi"></a>
					</div>

					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a class="vertical-align smoothScroll" href="<?php if( $page != 'index') { echo 'index.php'; } else { echo '#inicio';} ?>">Inicio</a></li>
							<li><a class="vertical-align smoothScroll scroll-nosotros" <?php if( $page == 'restaurantes') { echo 'href="index.php"'; } ?>>Nosotros</a></li>
							<li><a class="vertical-align smoothScroll" href="<?php if( $page == 'restaurantes') { echo '#inicio-restaurantes'; } else { echo 'restaurantes.php'; }?>">Restaurantes<br>Bares</a></li>
							<li><a class="vertical-align smoothScroll" href="<?php if( $page == 'noticias') { echo '#inicio-noticias'; } else { echo 'noticias.php'; }?>">¿Qué está pasando?</a></li>
							<li><a class="vertical-align smoothScroll" href="<?php if( $page != 'index') { echo 'index.php'; } ?>#galeria">Galería</a></li>
							<li><a class="vertical-align smoothScroll" href="<?php if( $page != 'index') { echo 'index.php'; } ?>#ubicacion">Ubicación</a></li>
							<li><a class="vertical-align smoothScroll" href="<?php if( $page != 'index') { echo 'index.php'; } ?>#contacto">Contacto</a></li>
						</ul>
					</div>
					<div class="overlay"></div>
				</div>
			</nav>