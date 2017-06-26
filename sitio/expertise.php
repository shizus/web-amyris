<?php 
session_start();
require 'requirelanguage.php';
require 'header.php';

?>
<?php  require 'menu.php';?>

<script>
  $(document).ready(function () {
    // READ recods on page load
   $("#contacto").css("display", "none");
});

</script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
    
    function calculateGalleryItemHeight(){
        var galleryItemWidth = $(".galeria-container .col-md-4").width();
        var galleryItemHeight = 280 * galleryItemWidth / 470;
        $(".galeria-container .col-md-4").height(galleryItemHeight);
    }
    
    calculateGalleryItemHeight();
    
    $(".galeria-container .col-md-4").resize(calculateGalleryItemHeight);
    
  });
</script><!-- start-smoth-scrolling -->

<!-- lightbox -->
<script>
    lightbox.option({
        fitImagesInViewport: true,
        disableScrolling: true,
        showImageNumberLabel: false,
        wrapAround: true
    })
</script>

<?php require_once 'portada.php';

insertar_portada('portada-expertise', $valor_brindar_calidad, $controlando_nuestros_productos);
;?>


<?php require_once 'breadcrumbs.php';
insertar_breadcrumbs($desarrollo_creacion_infraestructura);

?>
<?php
require_once "servicio.php";
insertar_servicio($amyris_armonia_aire, $buscamos_generar_conexion);
?>

<div class="row expertise-container">
    <div class="col-md-12">
        <img src="<?php echo titulo_imagen("img/t-expertise.png") ?>" class="titulo-imagen">
    </div>
</div>

<div id="columnas" class="row">

    <div class="col-md-5 col-md-offset-1 col-sm-12 col-sm-offset-0" id="desarrollo-creacion">
        <p class="hidden-lg hidden-md visible-sm visible-xs destacado-box-responsive"><?php echo $buscamos_identificacion ?></p><br>
    <h1 ><?php echo $desarrollo_creacion ?></h1><br>
      <p id="textoe1"><?php echo $nuestros_origines ?></p>
    <p id="textoe11" ><?php echo $textoe8 ?></p><br>
    <p id="textoe2"><?php echo $ofrecemos_creacion_desarrollo ?></p>
    <div class="linea-roja-50 float-right"></div>
    </div>

    <div class="col-md-5 col-sm-12" id="columnaseis2" >
      <p id="textoe3" class="visible-lg visible-md hidden-sm hidden-xs"><?php echo $buscamos_identificacion ?></p><br><br><br>
        <p id="textoe4"><?php echo $momento_pensar_creacion ?></p><br>
        <p id="textoe5" ><?php echo $conservar_cliente_crecer ?></p>

    </div>

</div>
<style>
  

</style>
<div id="tramaexpertise" class="row">
    <div id="infraestructura" class="col-md-12">
        <div class="titulo-imagen-container margen-top-4em">
            <img class="titulo-imagen text-center" src="img/t-infraestructura.png">
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0" id="textotrama1">
    <p ><?php echo $amyris_se_encuentra?></p>
    <p ><?php echo $asimismo_proceso?></p>
    </div>
    <div class="col-md-12 ancho-100">
        <div class="row">
            <div class="galeria-container col-md-12">
                <div class="row">
                    <div class="col-md-4 c1-jpg">
                        <a href="images/c1.jpg" data-lightbox="portfolio" >
                            <img src="images/plus.jpg" class="plus">
                        </a>
                    </div>

                    <div class="col-md-4 c2-jpg">
                        <a href="images/c2.jpg" data-lightbox="portfolio" >
                            <img src="images/plus.jpg" class="plus">
                        </a>
                    </div>

                    <div class="col-md-4 c3-jpg">
                        <a href="images/c3.jpg" data-lightbox="portfolio" >
                            <img src="images/plus.jpg" class="plus">
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4 c4-jpg">
                        <a href="images/c4.jpg" data-lightbox="portfolio" >
                            <img src="images/plus.jpg" class="plus">
                        </a>
                    </div>

                    <div class="col-md-4 c5-jpg">
                        <a href="images/c5.jpg" data-lightbox="portfolio" >
                            <img src="images/plus.jpg" class="plus">
                        </a>
                    </div>

                    <div class="col-md-4 c6-jpg">
                        <a href="images/c6.jpg" data-lightbox="portfolio" >
                            <img src="images/plus.jpg" class="plus">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>

   <h1  id="control-calidad" class="titulo-dorado text-center"><?php echo $control_calidad ?></h1>

   <img src="images/47.jpg" class="control-calidad-img">


<div class="row">
    <div class="col-md-4 col-md-offset-1" id="columnacontrol4" >
        <p><?php echo $debemos_destacar ?></p><br>

        <h1 ><?php echo $estandarte_de_calidad ?></h1>

       	<ul>
       		<li><img src="images/icono-estandarte1.png"><?php echo $articulo1 ?><b><?php echo $estandarte_de_calidad_creacion ?></b></li>
       		<li><img src="images/icono-estandarte2.png"><?php echo $articulo2 ?><b><?php echo $estandarte_de_calidad_procesos ?></b></li>
       		<li><img src="images/icono-estandarte3.png"><?php echo $articulo3 ?><b><?php echo $estandarte_de_calidad_cronograma ?></b></li>
       		<li><img src="images/icono-estandarte4.png"><?php echo $articulo3 ?> <b><?php echo $estandarte_de_calidad_control ?></b></li>
       		<li><img src="images/icono-estandarte5.png"><?php echo $articulo4 ?> <b><?php echo $estandarte_de_calidad_certificado ?></b></li>
       		<li><img src="images/icono-estandarte6.png"><?php echo $articulo3 ?> <b><?php echo $estandarte_de_calidad_servicio ?></b></li>
       	</ul>

    </div>

    <div class="col-md-5" id="columnacontrol5" >
        <p  class="p0" ><?php echo $somos_estrictos ?></p><br>
        <p  class="p1" ><?php echo $importamos_cada_componente ?></p><br>
        <p   class="p2" ><?php echo $emitimos_certificado ?></p><br>
        <p   class="p0 parrafo-destacado" ><?php echo $respeto_por_cliente ?></p>
    </div>

</div>

<div id="mapa" class="row">
    <div class="col-md-12"  id="comercio-exterior">
        <h1 ><?php echo $comercio_exterior ?></h1><br>
        <p class="textop1" ><?php echo $base_buenos_aires ?></p><br>
        <p class="textop2"><?php echo $proces_expansion ?></p>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <img class="imagen2" src="images/mapa.png" >
    </div>
</div>


<?php  require 'footer.php';
footer("fotofinal", "contenedorfloresamarillas", $fragancias, $fabricamos_fragancia_apropiada, "./fragancias");

?>

    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
</body>
</html>