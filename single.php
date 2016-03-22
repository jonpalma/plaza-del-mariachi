<?php $page = 'noticia'; ?>
<?php include('header.php'); ?>
<div class="noticias">
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* BANNER  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="intro">
		<div class="banner">
			<div class="caption reveal">
				<div class="vertical-align">
					<!--<img class="caption-img" src="img/restaurantes/hot-food.png">-->
					<h1 class="header white">¿Qué está pasando?</h1>
				</div>
			</div>
			<img class="chevron-down scroll-nosotros" src="img/banner/chevron-down.png" alt="Down">
			<div class="overlay"/>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* NOTICIA  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="noticia spacing" id="news">
		<div class="container">
			<div class="row no-margin main">
				<div class="col-sm-6">
					<div class="img-container">
						<img class="img-responsive" src="img/noticias/single.png" alt="Noticia">
					</div>
				</div>
				<div class="col-sm-6">
					<h3 class="news-title header">Noche Mexicana en Plaza del Mariachi</h3>
					<p class="text">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
						<br><br>
						nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
						<br><br>
						occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					</p>
				</div>
			</div>
			<div class="row no-margin text-center related">
				<div class="col-sm-4">
					<img class="img-responsive center-block" src="img/noticias/related1.png" alt="Noticia">
					<h3 class="news-title header">Exposición Artesanal</h3>
					<a href="single.php">Leer más...</a>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive center-block" src="img/noticias/related2.png" alt="Noticia">
					<h3 class="news-title header">Mariachi Tecalitlán</h3>
					<a href="single.php">Leer más...</a>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive center-block" src="img/noticias/related3.png" alt="Noticia">
					<h3 class="news-title header">Chihuahua es Cultura</h3>
					<a href="single.php">Leer más...</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>