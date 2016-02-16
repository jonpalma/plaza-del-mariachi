<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<section class="ha-waypoint" data-animate-down="ha-header-hide" data-animate-up="ha-header-small">
	<div class="section">
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

		<!--/* BANNER  */-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="intro" id="inicio">
			<div class="banner">
				<div class="reveal">
					<img src="img/banner/marichi2.png" alt="Mariachi">
				</div>
				<img class="chevron-down scroll-nosotros" src="img/banner/chevron-down.png" alt="Down">
				<div class="overlay"/>
			</div>
		</div>
	</div>
</section>
<div class="section" id="second-section">
	<div class="wrapper intro">
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

		<!--/* NOSOTROS  */-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<section class="ha-waypoint" data-animate-down="ha-header-small" data-animate-up="ha-header-hide">
			<div class="nosotros spacing" id="nosotros">
				<div class="container">
					<div class="col-sm-8 col-xs-8 text-center cbp-so-side">
						<h1 class="header">Ven</h1>
						<h3 class="header brown">y conócenos</h3>
						<p class="text text-justify">Atractivo complejo de entretenimiento con 20 diferentes propuestas de restaurantes, bares y tiendas donde la comunidad Chihuahuense y el turismo que visita nuestro Estado podrá disfrutar de mariachis, tríos y músicos.</p>
					</div>
					<div class="col-sm-4 col-xs-4">
						<div class="reveal-right">
							<img src="img/fade/mariachi.png" alt="Mariachi">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

		<!--/* PARALLAX  */-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="parallax-container" id="sonMariachi">
			<div class="parallax"><img src="img/parallax/1.jpg" alt=""></div>
			<div class="container text-center">
				<div class="vertical-align">
					<h1 class="header">El son</h1>
					<h3 class="header white">del mejor mariachi</h3>
				</div>
			</div>
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

		<!--/* GALERÍA  */-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="galeria ss-style-doublediagonal spacing" id="galeria">
			<div class="ext-center">
				<h1 class="header">Conoce</h1>
				<h3 class="header brown">la plaza</h3>
				<div class="row no-margin">
					<div class="col-sm-4">
						<img class="img-responsive center-block" src="img/galeria/1.png" alt="Galería">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive center-block" src="img/galeria/2.png" alt="Galería">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive center-block" src="img/galeria/3.png" alt="Galería">
					</div>
				</div>
				<div class="row no-margin">
					<div class="col-sm-4">
						<img class="img-responsive center-block" src="img/galeria/1.png" alt="Galería">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive center-block" src="img/galeria/2.png" alt="Galería">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive center-block" src="img/galeria/3.png" alt="Galería">
					</div>
				</div>
			</div>
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

		<!--/* CONTÁCTANOS  */-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="contacto spacing" id="contacto">
			<img src="" alt="">
			<img src="" alt="">
			<div class="container text-center">
				<h1 class="header">Contáctanos</h1>
				<h3 class="header brown">¿cómo podemos ayudarte?</h3>
				<p class="text">Centro Histórico, Chihuahua, Chih. México</p>
				<div class="row no-margin">
					<div class="col-sm-6 no-padding">
						<input type="text" name="name" id="name" placeholder="Nombre">
						<input type="text" name="email" id="email" placeholder="Correo electrónico">
					</div>
					<div class="col-sm-6 no-padding">
						<input type="text" name="last-name" id="last-name" placeholder="Apellido">
						<input type="text" name="phone" id="phone" placeholder="Teléfono">
					</div>
					<textarea name="info" id="info" cols="30" rows="10" placeholder="Mensaje"></textarea>
					<input class="white" type="submit" value="Enviar">
				</div>
			</div>
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

		<!--/* MAPA  */-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="googleMap ss-style-doublediagonal ss-style-doublediagonal-inverse" id="googleMap" position="plaza"></div>
	</div>
	<footer class="text-center">
		<div class="footer-top">
			<div class="vertical-align">
				<img src="img/logo-footer.png" alt="Plaza del Mariachi">
				<a href="" class="center-block"><img src="img/icons/facebook.png" alt="facebook"></a>
			</div>
		</div>
		<div class="footer-rights white">
			<p>Todos los derechos reservados Plaza del Mariachi <?php echo date('Y'); ?> | Design by: <a href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-mixen.png" alt="Agencia Mixen"> mixen.mx</a></p>
		</div>
	</footer>
</div>
<?php include('footer.php'); ?>