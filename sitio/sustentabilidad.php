<?php 
session_start();
require 'requirelanguage.php';
require 'header.php';

?>
<?php  require 'menu.php';?>


<style>

@font-face {
font-family: 'Museo 500 Regular';
font-style: normal;
font-weight: normal;
src: local('Museo 500 Regular'), url('Museo500-Regular.woff') format('woff');
}

@font-face {
font-family: 'Futura';
font-style: normal;
font-weight: normal;
src: local('Futura'), url('futurastd.woff') format('woff');
}
</style>

<body>
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
<?php require_once 'portada.php';

insertar_portada('portada-sustentabilidad', $textos1, $textos2);
;?>
<?php
require_once 'breadcrumbs.php';
insertar_breadcrumbs($textos3 . $textos33 . $textos333);
?>
<?php
require_once "servicio.php";
insertar_servicio($textos4, $textos5);
?>

<div id="imagenrosa" >
       <div class="container">

          <img alt="Imagen cargando" src="images/67b.jpg">

          </div>
</div>
<section id="cuadrado">

  <div class="primero_cuadrado_sus " >
       <h4 ><?php echo $textos6 ?></h4>
  </div>

</section>

<section id="columnas2">
<div class="col-md-4" id="esquinaizquierdas"  >
<h2 ><?php echo $textos7 ?></h2>
  <p class="ptexto1"><?php echo $textos8 ?></p><br>
  <p class="ptexto1"><?php echo $textos88 ?></p><br>
<h2 ><?php echo $textos9 ?></h2>
<p class="ptexto2"> <?php echo $textos10 ?></p><br>

</div>

<div  id="linearojasus"></div>
<div class="col-md-4" id="esquinaderechas">
  <p class="ezquinaderecha1" ><?php echo $textos11 ?></p><br>
  <p class="ezquinaderecha2" > <?php echo $textos12 ?></p><br>
  <p class="ezquinaderecha3" > <?php echo $textos13 ?></p><br>
  <p class="ezquinaderecha4" ><?php echo $textos14 ?> </p>
</div>
<div  id="linearojasusinferior"></div>
</section>


<section id="susten">
  
 <div class=" cuarto" >

    <img alt="Imagen cargando" src="images/44b.jpg" style="width: 100%;margin-top: 5%;">
</div>

 <div class="segundo_cuadrado_sus col-md-12 " >
         <h4><?php echo $textos15 ?>  </h4>
</div>

 <div class="col-md-12 " id="columnadocesusten" >
         <h1 ><?php echo $textos16 ?> </h1>
		 <br><br>
         <img alt="Imagen cargando" id="corchete" src="images/corchete.png" >
</div>  
<div class="container">

<div  class="col-md-12" id="porque" >

          <div class="col-md-4 porquecolumna4">
          <br>
		  <br>
                 <h1> <?php echo $textos17 ?></h1>
                  <p  id="textcols1"> <?php echo $textos18 ?> </p>
				  <br>
                     <h1> <?php echo $textos19 ?></h1>
                  <p id="textcols2" > <?php echo $textos20 ?> </p>

    
          </div>

        <div class="col-md-3"  id="sustencolumna3" style="">
          <img alt="Imagen cargando" src="images/susten.png" >
        </div>
      <div class="col-md-4" id="sustencolumna4" >
           <h1><?php echo $textos23 ?> </h1>
                  <p id="textcols3"> <?php echo $textos24 ?> </p>
      </div>

</div>
</div>
  
  
  <?php  require 'footer.php';
  footer("imagensfinalsusten", "sustenfinal", $textos27, $textos28);
  
  ?>


</body>
</html>