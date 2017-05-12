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

insertar_portada('portada-expertise', $textoe1, $textoe2);
;?>


<?php require_once 'breadcrumbs.php';
insertar_breadcrumbs($textoe3);

?>
<?php
require_once "servicio.php";
insertar_servicio($textoe4, $textoe5);
?>

<div class="row expertise-container">
    <div class="col-md-12">
        <img src="img/t-expertise.png" class="titulo-imagen">
    </div>
</div>

<div id="columnas" class="row">

    <div class="col-md-5 col-md-offset-1 col-sm-12 col-sm-offset-0" id="desarrollo-creacion">
    <h1 ><?php echo $textoe6 ?></h1><br>
      <p id="textoe1"><?php echo $textoe7 ?></p><br>
    <p id="textoe11" ><?php echo $textoe8 ?></p><br>
    <p id="textoe2"><?php echo $textoe9 ?>
        <div class="linea-roja-50 float-right"></div>
    </p>
    </div>

    <div class="col-md-5 col-sm-12" id="columnaseis2" >
      <p id="textoe3" ><?php echo $textoe10 ?></p><br><br><br>
        <p id="textoe4"><?php echo $textoe11 ?></p><br>
        <p id="textoe5" ><?php echo $textoe12 ?></p>

    </div>

</div>
<style>
  

</style>
<div id="tramaexpertise" class="row">
    <div class="col-md-12">
        <div class="titulo-imagen-container margen-top-4em">
            <img class="titulo-imagen text-center" src="img/t-infraestructura.png">
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0" id="textotrama1">
    <p ><?php echo $textoe14?></p>
    <p ><?php echo $textoe15?></p>
    </div>
    <div class="row">
        <div class="galeria-container col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <a href="images/c1.jpg" data-lightbox="portfolio" >
                        <img src="images/c1.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a href="images/c2.jpg" data-lightbox="portfolio" >
                        <img src="images/c2.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a href="images/c3.jpg" data-lightbox="portfolio" >
                        <img src="images/c3.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
                    </a>
                </div>
                
            </div>
            <div class="row">


                <div class="col-md-4">
                    <a href="images/c4.jpg" data-lightbox="portfolio" >
                        <img src="images/c4.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="images/c5.jpg" data-lightbox="portfolio" >
                        <img src="images/c5.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="images/c6.jpg" data-lightbox="portfolio" >
                        <img src="images/c6.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
                    </a>
                </div>
                
                
            </div>
        </div>
    </div>
    
</div>

   <h1  id="control-calidad" class="titulo-dorado text-center"><?php echo $textoe19 ?></h1>

   <img src="images/47.jpg" style="width: 70%;margin-top: 60px;margin-left: 280px;">


<div class="row">
    <div class="col-md-4 col-md-offset-1" id="columnacontrol4" >
        <p><?php echo $textoe20 ?></p><br>

        <h1 ><?php echo $textoe21 ?></h1>

        <img src="images/lista.png" style="width: 500px; margin-left: -2em;">

    </div>

    <div class="col-md-5" id="columnacontrol5" >
        <p  class="p0" ><?php echo $textoe255 ?></p><br>
        <p  class="p1" ><?php echo $textoe22 ?></p><br>
        <p   class="p2" ><?php echo $textoe23 ?></p><br>
        <p   class="p0 parrafo-destacado" ><?php echo $textoe25 ?></p>
    </div>

</div>

<div id="mapa" class="row">
    <div class="col-md-12"  id="comercio-exterior">
        <h1 ><?php echo $textoe26 ?></h1><br>
        <p class="textop1" ><?php echo $textoe27 ?></p><br>
        <p class="textop2"><?php echo $textoe28 ?></p>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <img class="imagen2" src="images/mapa.png" >
    </div>
</div>


<?php  require 'footer.php';
footer("fotofinal", "contenedorfloresamarillas", $fragancias, $textoe29, "./fragancias");

?>

    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
</body>
</html>