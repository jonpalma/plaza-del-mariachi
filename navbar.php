<header id="ha-header" class="ha-header ha-header-hide">
	<div class="ha-header-perspective">
		<div class="ha-header-front">
			<nav class="navbar navbar-default">
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
							<li><a class="vertical-align smoothScroll" href="<?php if( $page == 'restaurantes') { echo 'index.php'; } ?>#inicio">Inicio</a></li>
							<li><a class="vertical-align smoothScroll scroll-nosotros">Nosotros</a></li>
							<li><a class="vertical-align smoothScroll" href="<?php if( $page == 'restaurantes') { echo '#inicio-restaurantes'; } else { echo 'restaurantes.php'; }?>">Restaurantes</a></li>
							<li><a class="vertical-align smoothScroll" href="#bares">Bares</a></li>
							<li><a class="vertical-align smoothScroll" href="#abarrotes">Eventos Especiales</a></li>
							<li><a class="vertical-align smoothScroll" href="<?php if( $page == 'restaurantes') { echo 'index.php'; } ?>#galeria">Galería</a></li>
							<li><a class="vertical-align smoothScroll" href="<?php if( $page == 'restaurantes') { echo 'index.php'; } ?>#contacto">Contacto</a></li>
						</ul>
					</div>
					<div class="overlay"></div>
				</div>
			</nav>
		</div>
	</div>
</header>