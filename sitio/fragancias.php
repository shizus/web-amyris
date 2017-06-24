<?php 
	session_start();
	require 'requirelanguage.php';
	require 'header.php';
	require 'menu.php';
?>

<body>

<?php require_once 'portada.php';

 	insertar_portada('portada-fragancias', $valor_transmitir_emociones, $vinculando_nuestras_fragancias);
	require_once 'breadcrumbs.php';
	insertar_breadcrumbs($sistema_conceptual_amyris);
	require_once "servicio.php";
	insertar_servicio($amyris_creacion_innovacion, $transformamos_fragancia);

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
 	<h2 id="sistema-conceptual"><?php echo $fragancias_titulo ?></h2>
 	<p><?php echo $desde_nuestros_inicios ?></p>
 	<div class="row conceptos-row visible-md visible-lg hidden-xs hidden-sm">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-3 col-xs-3 boton active" id="sentir"><?php echo $sentir ?></div>
                <div class="col-md-3 col-xs-3 boton" id="descubrir"><?php echo $descubrir ?></div>
                <div class="col-md-3 col-xs-3 boton" id="oler"><?php echo $crear ?></div>
                <div class="col-md-3 col-xs-3 boton" id="disfrutar"><?php echo $disfrutar ?></div>
            </div>
            <div class="row descripciones">
                <div class="col-md-12 desc active" id="sentir-desc">
                    <?php echo $sentir_descripcion ?>
                </div>
                <div class="col-md-12 desc" id="descubrir-desc">
                    <?php echo $descubrir_descripcion ?>
                </div>
                <div class="col-md-12 desc" id="oler-desc">
                    <?php echo $oler_descripcion ?>
                </div>
                <div class="col-md-12 desc" id="disfrutar-desc">
                    <?php echo $disfrutar_descripcion ?>
                </div>
            </div>
		</div>
	</div>

    <div class="row hidden-md hidden-lg visible-xs visible-sm">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 texto-centrado"><?php echo $sentir ?></div>
                <div class="col-md-12 dorado">
                  <?php echo $sentir_descripcion ?>
                </div>
                <div class="col-md-12 texto-centrado"><?php echo $descubrir ?></div>
                <div class="col-md-12 dorado">
                  <?php echo $descubrir_descripcion ?>
                </div>
                <div class="col-md-12 texto-centrado"><?php echo $crear ?></div>
                <div class="col-md-12 dorado">
                   <?php echo $oler_descripcion ?>
                </div>
                <div class="col-md-12 texto-centrado"><?php echo $disfrutar ?></div>
                <div class="col-md-12 dorado">
                    <?php echo $disfrutar_descripcion ?>
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
		 <?php echo $contamos_personal ?></p>
		<p>
		<?php echo $consideramos_personal ?>
		</div>
	</div>
</div>
</div>
</div>
<style>

	
	</style>
<div class="container-fluid" id="productos">
	<div class="row">
		<div class="col-sm-12 col-md-4-5 col-lg-1-5 quinto active" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga1.jpg); background-size:cover" id="frag-finas">
			<h2><?php echo $caja_productos_titulo ?></h2>
			<span class="view-more"></span>
		</div>
		<div class="col-sm-12 col-md-4-5 col-lg-1-5 quinto" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga2.jpg); background-size:cover" id="cuidado-personal">
			<h2><?php echo $caja_cuidado_personal_titulo ?></h2>
			<span class="view-more"></span>
		</div>
		<div class="col-sm-12 col-md-4-5 col-lg-1-5 quinto" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga3.jpg); background-size:cover" id="hogar">
			<h2><?php echo $caja_cuidado_hogar_titulo ?></h2>
			<span class="view-more"></span>
		</div>
		<div class="col-sm-12 col-md-4-5 col-lg-1-5 quinto" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga4.jpg); background-size:cover" id="limpieza">
			<h2><?php echo $caja_limpieza_titulo ?></h2>
			<span class="view-more"></span>
		</div>
		<div class="col-sm-12 col-md-4-5 col-lg-1-5 quinto" style="background:linear-gradient(rgba(122, 108, 67, 0.4),rgba(122, 108, 67, 0.4)),url(images/fraga5.jpg); background-size:cover" id="automotor">
			<h2><?php echo $caja_cosmetica_titulo ?></h2>
			<span class="view-more"></span>
		</div>
		
	</div>
	<div class="row quintos-descripciones">
		<div class="col-md-8 col-md-offset-2 quintos-desc active" id="frag-finas-desc">
		<h3><?php echo $caja_productos_titulo ?></h3>
		<p><?php echo $caja_productos_texto_debajo1 ?></p>
		<p><?php echo $caja_productos_texto_debajo2 ?></p>
		</div>
		<div class="col-md-8 col-md-offset-2 quintos-desc" id="cuidado-personal-desc">
		<h3><?php echo $caja_cuidado_personal_titulo ?></h3>
		<p><?php echo $caja_cuidado_personal_texto_debajo1 ?></p>
		<p><?php echo $caja_cuidado_personal_texto_debajo2 ?></p>
		</div>
		<div class="col-md-8 col-md-offset-2 quintos-desc" id="hogar-desc">
		<h3><?php echo $caja_cuidado_hogar_titulo ?></h3>
		<p><?php echo $caja_cuidado_hogar_texto_debajo1 ?></p>
		<p><?php echo $caja_cuidado_hogar_texto_debajo2 ?></p>
		</div>
		<div class="col-md-8 col-md-offset-2 quintos-desc" id="limpieza-desc">
		<h3><?php echo $caja_limpieza_titulo ?></h3>
		<p><?php echo $caja_limpieza_texto_debajo1 ?></p>
		<p><?php echo $caja_limpieza_texto_debajo2 ?></p>
		</div>
		<div class="col-md-8 col-md-offset-2 quintos-desc" id="automotor-desc">
		<h3><?php echo $caja_cosmetica_titulo ?></h3>
		<p><?php echo $caja_cosmetica_texto_debajo1 ?></p>
		<p><?php echo $caja_cosmetica_texto_debajo2 ?></p>
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
    $titulo_footer_expertise, "./expertise");

  ?>
    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
</body>
</html>