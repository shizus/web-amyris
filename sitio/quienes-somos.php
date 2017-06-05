<?php 
session_start();
require 'requirelanguage.php';
require 'header.php';

?>

<?php  require 'menu.php';?>

<?php
    require_once 'portada.php';
    insertar_portada('portada-quienes-somos', $texto1, $texto2);
;?>

<?php
    require_once 'breadcrumbs.php';
    insertar_breadcrumbs($texto3);
?>


  <?php
  require_once "servicio.php";
  insertar_servicio($texto35, $texto4);
  ?>
  
  <div class="row">
      <div class="col-md-8 col-md-offset-3 col-sm-12 col-sm-offset-0" id="quienes-somos">
              <div class="primero_cuadrado_quienes">
                  <h4><img src="img/t-quienes-somos.png"></h4>
              </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-5 col-md-offset-1 col-sm-12 col-sm-offset-0 quienes-somos-izquierda futura">
          <p class="cuadrodestacado"><?php echo $texto9 ?></p><br>
          <p class="px19"><?php echo $texto10 ?></p><br>
          <p class="px19"><?php echo $texto11 ?></p>
      </div>
      <div class="col-md-5 col-sm-12 quienes-somos-derecha futura">
              <p class="px19"><?php echo $texto6 ?> </p><br>
              <p class="px19"><?php echo $texto7 ?></p><br>
              <p class="destacado"><?php echo $texto8 ?></p>
                <div class="linea-roja-50"></div>
      </div>
  </div>

<div id="valores" class="row valores-background">
    <div class="segundo_cuadrado_quienes " >
        <img src="img/t-valores.png">
    </div>
</div>

<div class="row tramado-background">
    <div class="col-md-6 col-md-offset-3 wow animated fadeInDown" id="columna5">
        <h1 ><?php echo $texto13 ?></h1>
        <p><?php echo $texto14 ?></p>
        <h1 class="titulocolumna5destacado"><?php echo $texto15 ?></h1>
        <p class="titulocolumna5destacadop" ><?php echo $texto16 ?></p>
        <h1  class="titulocolumna5destacado"><?php echo $texto17 ?></h1>
        <p class="titulocolumna5destacadop"><?php echo $texto18 ?> </p>
    </div>
</div>

<section id="porqueamir" >
<h1 class="por1" ><?php echo $texto21 ?></h1>
  <p class="porp"><?php echo $texto22 ?></p>


<div class="col-md-12" id="tituloarriba" >
    <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/quienessomos-innovacion.png">
  <h1><?php echo $texto27 ?></h1>
   <p><?php echo $texto28 ?></p>
      <img class="pilares" src="images/pilares.png">
</div>

    <div class="col-md-4 col-sm-12 col-xs-12" id="titulocostadoizquierdo">
      <br>
        <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/quienessomos-compromiso.png">
      <h1><?php echo $texto25 ?></h1>
      <p><?php echo $texto26 ?></p>

    </div>
    <div class="col-md-4 col-sm-12 col-xs-12" id="titulocostadoderecho" >
    <br>
        <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/quienessomos-equipo.png">
     <h1><?php echo $texto23 ?></h1>
     <p><?php echo $texto24 ?></p>

    </div>

<div class="col-md-12" id="tituloabajo" >
    <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/quienessomos-calidad.png">
  <h1><?php echo $texto29 ?></h1>
   <p><?php echo $texto30 ?></p>

  <img class="pilares" src="images/pilares2.png">

</div>

    <div class="col-md-4 col-sm-12 col-xs-12" id="titulocostadoizquierdoabajo">
     <br>
      <p><?php echo $texto266 ?></p>

    </div>
    <div class="col-md-4 col-sm-12 col-xs-12" id="titulocostadoderechobajo">
    <br>
      <p><?php echo $texto244 ?></p>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12" id="tituloabajoabajo" >
                <p ><?php echo $texto300 ?></p>
    </div>

</section>
<?php  require 'footer.php';
footer("susten", "sustenido", $texto33, $texto34, "./innovaciones");

?>
    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
</body>
