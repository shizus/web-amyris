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
      'albumLabel': '%1 / %2'
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


<section id="fragan">
         <div id="fragantit" >
                   
                      <img src="images/34.jpg" style="width: 100%;">

                    
         </div>
</section>  

  

<section id="cuadrado">

  <div class="primero_cuadrado_expertise">
    <h4 ><?php echo $expertise ?> </h4>
   </div>
</section>

<div id="columnas" >
    <div  id="linearojaexpertise"></div>

    <div class="col-md-6" id="columnaseis1" >
    <h1 ><?php echo $textoe6 ?></h1><br>
      <p id="textoe1"><?php echo $textoe7 ?></p><br>
    <p id="textoe11" ><?php echo $textoe8 ?></p><br>
    <p id="textoe2"><?php echo $textoe9 ?></p>
    </div>

    <div class="col-md-6" id="columnaseis2" >
      <p id="textoe3" ><?php echo $textoe10 ?></p><br><br><br>
    <p id="textoe4"><?php echo $textoe11 ?></p><br>
    <p id="textoe5" ><?php echo $textoe12 ?></p>

    </div>

</div>
<style>
  

</style>
<div id="infraestructura" class="segundo_cuadrado_expertise">
    <h4 > <?php echo $textoe13 ;?></h4>
   </div>

<div id="tramaexpertise">
 <img src="images/trama5.jpg"  >
<div class="col-md-12" id="textotrama1">
<p ><?php echo $textoe14?></p>
<p ><?php echo $textoe15?></p>
</div>
</div>
</div>
<div class="row">
        <div class="row">
            <a href="images/c1.jpg" data-lightbox="portfolio" class="col-sm-4">
                <img src="images/c1.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
            </a>
            <a href="images/c2.jpg" data-lightbox="portfolio" class="col-sm-4">
                <img src="images/c2.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
            </a>
            <a href="images/c3.jpg" data-lightbox="portfolio" class="col-sm-4">
                <img src="images/c3.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
            </a>
        </div>
        <div class="row">
            <a href="images/c4.jpg" data-lightbox="portfolio" class="col-sm-4">
                <img src="images/c4.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
            </a>
            <a href="images/c5.jpg" data-lightbox="portfolio" class="col-sm-4">
                <img src="images/c5.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
            </a>
            <a href="images/c6.jpg" data-lightbox="portfolio" class="col-sm-4">
                <img src="images/c6.jpg" class="portfolio"><img src="images/plus.jpg" class="plus">
            </a>
        </div>
</div>
<div id="tramadebajoportfolio" >
     <img src="images/trama3.jpg" >

</div>

   <h1  id="control-calidad"><?php echo $textoe19 ?></h1>

   <img src="images/47.jpg" style="width: 70%;margin-top: 60px;margin-left: 280px;">


<div  id="linearojaexpertiseinf"></div>
<div class="col-md-4" id="columnacontrol4" >
  <p><?php echo $textoe20 ?></p><br>

 <h1 ><?php echo $textoe21 ?></h1>

 <img src="images/lista.png" style="margin-left: -12%;">

</div>

<div class="col-md-5" id="columnacontrol5" >
<p  class="p0" ><?php echo $textoe255 ?></p><br>
<p  class="p1" ><?php echo $textoe22 ?></p><br>
<p   class="p2" ><?php echo $textoe23 ?></p><br>
<p   class="p2" ><?php echo $textoe25 ?></p>
</div>

<div id="mapa">
    <img class="imagen1" src="images/exp-10.jpg" >
    <img class="imagen2" src="images/mapa.png" >
</div>

<div class="col-md-12"  id="comercio-exterior">
         <h1 ><?php echo $textoe26 ?></h1><br>
            <p class="textop1" ><?php echo $textoe27 ?></p><br>
              <p class="textop2"><?php echo $textoe28 ?></p>
                
</div> 

<?php  require 'footer.php';
footer("fotofinal", "contenedorfloresamarillas", $fragancias, $textoe29);

?>

</body>
</html>