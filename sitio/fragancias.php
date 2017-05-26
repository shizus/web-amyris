<?php 
	session_start();
	require 'requirelanguage.php';
	require 'header.php';
	require 'menu.php';
?>

<body>

<?php require_once 'portada.php';

 	insertar_portada('portada-fragancias', $texto1f, $texto2f);
	require_once 'breadcrumbs.php';
	insertar_breadcrumbs($texto3f);
	require_once "servicio.php";
	insertar_servicio($texto35f, $texto4f);

?>

<div class="container">
	<div class="row fragan"> 
	<div class="col-md-6 col-md-offset-3">
      <img src="img/t-fragancias.png" width="100%">
      </div> 
	      
	</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1 bajada"> 
 	<h2 id="sistema-conceptual">SISTEMA CONCEPTUAL AMYRIS</h2>
 	<p><?php echo $texto44f ?></p>
 	<div class="row conceptos-row">
 	<div class="col-md-8 col-md-offset-2">
		<div class="row">       
			<div class="col-md-3 col-xs-3 boton active" id="sentir"><?php echo $texto50f ?></div>
			<div class="col-md-3 col-xs-3 boton" id="descubrir"><?php echo $texto51f ?></div>
			<div class="col-md-3 col-xs-3 boton" id="oler"><?php echo $texto52f ?></div>
			<div class="col-md-3 col-xs-3 boton" id="disfrutar"><?php echo $texto53f ?></div>
		</div>
		<div class="row descripciones">
			<div class="col-md-12 desc active" id="sentir-desc">
				LOS AROMAS NOS RECUERDAN UN MOMENTO ESPECIAL DE NUESTRA VIDA Y AL SENTIRLOS PUEDE GENERARNOS RISA, REGOCIJO, ALEGRÍA, NOSTALGIA O TRISTEZA. NUESTRO PRINCIPAL OBJETIVO ES INTERPRETAR ESAS SENSACIONES EN UNA FRAGANCIA.
			</div>
			<div class="col-md-12 desc" id="descubrir-desc">
				SOMOS UN EQUIPO DE TRABAJO PREPARADO PARA INTERPRETAR LA IMAGINACIÓN OLFATIVA DEL CLIENTE, CONECTAR CON LA SENSIBILIDAD Y COMPRENDER LOS SENTIDOS Y EMOCIONES.
			</div>
			<div class="col-md-12 desc" id="oler-desc">
				NUESTRAS FRAGANCIAS SON A MEDIDA DEL CLIENTE, DISEÑADAS Y DESARROLLADAS EN FORMA EXCLUSIVA BRINDANDO EXCELENCIA Y CALIDAD. PERMITIMOS QUE NUESTROS CLIENTES PARTICIPEN EN EL PROCESO DE CREACIÓN DEL DISEÑO Y ASESORAMOS SOBRE LA MEJOR OPCIÓN.
			</div>
			<div class="col-md-12 desc" id="disfrutar-desc">
				LOS AROMAS NOS RECUERDAN UN MOMENTO ESPECIAL DE NUESTRA VIDA Y AL SENTIRLOS PUEDE GENERARNOS RISA, REGOCIJO, ALEGRÍA, NOSTALGIA O TRISTEZA. NUESTRO PRINCIPAL OBJETIVO ES INTERPRETAR ESAS SENSACIONES EN UNA FRAGANCIA.
			</div>
		</div>
		</div>
	</div>
	
<script>
	$('.boton').hover(entraMouse);
	
	function entraMouse(event){
		$(".boton").removeClass("active");
		$(".desc").removeClass("active");
		$("#" + event.currentTarget.id).addClass("active");
		$("#" + event.currentTarget.id + "-desc").addClass("active");
	}
	
</script>

	<div class="row">
	<div class="col-md-12">
		<p>
		Contamos con personal de desarrollo y marketing en constante capacitación e investigación para estar siempre estar a la vanguardia de las tendenciales mundiales del mercado de cosmética, fragancias finas, higiene personal, productos para el hogar y productos de limpieza.</p>
		<p>
		En Amyris consideramos a cada desarrollo, a cada fragancia especialmente creada como un desafío único. Realizamos controles de calidad, trazabilidad y estabilidad. Trabajamos con un preciso cronograma de tiempos.
		</p>
		</div>
	</div>
</div>
</div>
</div>
<style>

	
	</style>
<div class="container-fluid" id="productos">
	<div class="row">
		<div class="col-sm-6 col-md-4-5 col-lg-1-5 quinto active" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga1.jpg); background-size:cover" id="frag-finas">
			<h2>FRAGANCIAS FINAS</h2>
			<span class="view-more"></span>
		</div>
		<div class="col-sm-6 col-md-4-5 col-lg-1-5 quinto" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga2.jpg); background-size:cover" id="cuidado-personal">
			<h2>CUIDADO PERSONAL Y PRODUCTOS DE TOCADOR</h2>
			<span class="view-more"></span>
		</div>
		<div class="col-sm-6 col-md-4-5 col-lg-1-5 quinto" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga3.jpg); background-size:cover" id="hogar">
			<h2>CUIDADO DEL HOGAR Y AMBIENTALES</h2>
			<span class="view-more"></span>
		</div>
		<div class="col-sm-6 col-md-4-5 col-lg-1-5 quinto" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga4.jpg); background-size:cover" id="limpieza">
			<h2>LIMPIEZA</h2>
			<span class="view-more"></span>
		</div>
		<div class="col-sm-6 col-md-4-5 col-lg-1-5 quinto" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga5.jpg); background-size:cover" id="automotor">
			<h2>COSMÉTICA AUTOMOTOR</h2>
			<span class="view-more"></span>
		</div>
		
	</div>
	<div class="row quintos-descripciones">
		<div class="col-md-8 col-md-offset-2 quintos-desc active" id="frag-finas-desc">
		<h3>FRAGANCIAS FINAS</h3>
		<p>En AMYRIS buscamos ofrecerle al cliente la más alta calidad de la fragancia creada, incentivándolo a innovar, brindándole actualización sobre las tendencias a nivel mundial.</p>
		<p>Podemos ofrecer Eau de Perfum, Eau de Toillete, Colonias, fragancias femeninas, masculinas, para adolecentes, niños y bebés.</p>
		</div>
		<div class="col-md-8 col-md-offset-2 quintos-desc" id="cuidado-personal-desc">
		<h3>CUIDADO PERSONAL Y PRODUCTOS DE TOCADOR</h3>
		<p>Asumimos el compromiso de ofrecerle al consumidor productos que al momento de percibir los aromas pueda disfrutar.</p>
		<p>En esta categoría ofrecemos fragancias para jabones líquidos, productos de tocador, exfoliantes, shampoo, faciales, espumas, sales de baño, cremas, talcos y tinturas.</p>
		</div>
		<div class="col-md-8 col-md-offset-2 quintos-desc" id="hogar-desc">
		<h3>CUIDADO DEL HOGAR Y AMBIENTALES</h3>
		<p>El hogar está estrechamente relacionado con una sensación de seguridad, confort, pertenencia y calma.</p>
		<p>Ofrecemos productos para desodorantes ambientales, desodorantes textiles, velas aromáticas, ambientadores y difusores.</p>
		</div>
		<div class="col-md-8 col-md-offset-2 quintos-desc" id="limpieza-desc">
		<h3>LIMPIEZA</h3>
		<p>Buscamos que el bienestar generado por este tipo de fragancias remita a la pureza, a esa tranquilidad que se genera al percibir estar en un hogar limpio.
		</p>
		<p>Esta clase de fragancias aplican a productos tales como limpiadores para piso, limpiadores en crema, lavandinas, detergentes, suavizantes, productos quita mancha y apresto.</p>
		</div>
		<div class="col-md-8 col-md-offset-2 quintos-desc" id="automotor-desc">
		<h3>COSMÉTICA AUTOMOTOR</h3>
		<p>Momentos como la compra de tu primer auto o cambiarlo por otro más grande generan alegría
			y felicidad.</p>
			<p>Ofrecemos fragancias que le recuerden ese momento. Lo asesoramos sobre la fragancia adecuada dejando un aroma de alta persistencia.</p>
		</div>
		<img class='wow animated fadeInDown' src="images/58b.jpg">
	</div>
	
	<script>
	$('.quinto').hover(entraMouse);
	
	function entraMouse(event){
		$(".quinto").removeClass("active");
		$(".quintos-desc").removeClass("active");
		$("#" + event.currentTarget.id).addClass("active");
		$("#" + event.currentTarget.id + "-desc").addClass("active");
	}
	
</script>
</div>


  <?php  require 'footer.php';
  footer("hombregorra", "expertise",
    "EXPERTISE",
    "CONTAMOS CON TECNOLOGÍA DE ÚLTIMA GENERACIÓN Y TRABAJAMOS CON TÉCNICAS VERIFICADAS Y RIGUROSAS NORMAS INTERNAS
     QUE NOS PERMITEN GENERAR PROCEDIMIENTOS EFICACES. ", "./expertise");

  ?>
    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
</body>
</html>