<?php
require_once 'requirelanguage.php';


function footer($containerId, $fotoContainerId, $titulo, $texto, $link="#", $interno=true) {
    
    global $amyris, $fragancias, $expertise, $sustentabilidad, $innovaciones, $contacto2;
    $interno = $interno ? "interno": "";
    ?>
    
<div class='container' id='<?php echo $containerId ?>'>
	<div class='row'>
		<div class='col-md-12 col-sm-12 col-xs-12 text-center foto-footer-container' id='<?php echo $fotoContainerId ?>' data-wow-delay='0.2s'>
			<a href='<?php echo $link ?>'>
				<div class='row'>
					<div id='footer-text-container' class='col-md-6 intro-pic wow animated fadeInDown <?php echo $interno ?>'>
						<h1 class='animation animated-item-1'><?php echo $titulo ?></h1>
						<p><?php echo $texto ?></p>
						<p class="hidden-sm hidden-xs visible-lg visible-md"><img alt='Nube Amyris' class='footer-nube' src='images/42.png'></p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
    
<footer>
    
<div class='container'>

<div class='row' id='lista-afuera-small'>
	<div class='col-md-6 col-sm-6 col-xs-5'>
		<ul>
			<li><a href='quienes-somos'><?php echo $amyris ?></a></li>
			<li><a href='fragancias'><?php echo $fragancias ?></a></li>
			<li><a href='expertise'><?php echo $expertise ?></a></li>
		</ul>
	</div>
	<div class='col-md-6 col-sm-6 col-xs-6'>
		<ul>
			<li><a href='sustentabilidad'><?php echo $sustentabilidad ?></a></li>
			<li><a href='innovaciones'><?php echo $innovaciones ?></a></li>
			<li><a href='contacto'><?php echo $contacto2 ?></a></li>
		</ul>
	</div>
</div>
	<div class='row'>
		<div class='col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0'>
			<div class='row fondo-blanco'>
				<div class='row'>
				<div class='col-md-4 col-md-offset-1 col-sm-4 col-xs-4'>
					<img alt='Amyris' class="img-responsive" src='images/logofooter.png'>
				</div>

				<div class='col-md-6 col-sm-12 col-xs-12 letra-negra'>
					<div class='row'>
						<div class='col-md-12'>
							<h2>AMYRIS S.A.</h2>
							<ul class='fa-ul'>
								<li><i class='fa-li fa fa-map-marker fa-lg'></i>
								Cajaraville 2902 y/o Curapaligue 6510, Munro (1605), Pcia de Bs. As.</li>
								<li><i class='fa-li fa fa-envelope fa-lg'></i>
								<a href='mailto:ventas@amyris.com.ar' class='letra-negra'>ventas@amyris.com.ar</a></li>
								<li><i class='fa-li fa fa-phone fa-lg'></i>
								54 11 5197-1918</li>
							</ul>
						</div>
					</div>
				</div>
				</div>
				
			</div>
			<div class='row copyright'>
					<div class='col-md-12'>
						<h6>2017 - Todos los derechos reservados //
						<a href='odmbranding.com' target='_blank' class='footer-link'>Web Design ODM Branding</a></h6>
					</div>
				</div>
		</div>

		<div class='col-md-3' id='lista-afuera'>
			<ul>
				<li><a href='quienes-somos'><?php echo $amyris ?></a></li>
				<li><a href='fragancias'><?php echo $fragancias ?></a></li>
				<li><a href='expertise'><?php echo $expertise ?></a></li>
				<li><a href='sustentabilidad'><?php echo $sustentabilidad ?></a></li>
				<li><a href='innovaciones'><?php echo $innovaciones ?></a></li>
				<li><a href='contacto'><?php echo $contacto2 ?></a></li>
			</ul>
		</div>

	</div>
</div>

</footer>
    <?php 
}
?>


<!-- Main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Twitter Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Google Map API -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyhHMjogLdqX4qOItPagUypToqDY_17pE&callback=initMap">
</script>