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

insertar_portada('portada-innovaciones', $valor_ideas, $otorgando_innovacion);
;?>

<?php require_once 'breadcrumbs.php';
insertar_breadcrumbs($aprendemos_innovar_departamento);

?>
<?php
require_once "servicio.php";
insertar_servicio($amyris_futuro, $brindamos_soluciones_originales);
?>

<div id="frasco" class="row">
    <div class="primero_cuadrado_inno col-md-8 col-md-offset-2" >
        <img class="titulo-imagen" src="img/t-innovaciones.png">
    </div>
</div>
<div class="row">
    <div id="aprendemos-innovar" class="col-md-6 col-md-offset-5 col-sm-10 col-sm-offset-1">
        <h2><?php echo $aprendemos_innovar ?></h2>
        <p><?php echo $ofrecer_soluciones_creativas ?></p>
    </div>
</div>


<div id="telescopio" class="row">
    <div class="col-md-10 col-md-offset-1 cuadrado_inno wow animated fadeInDown">
            <p> <?php echo $buscamos_innovar_y ?></p>
            <h4><?php echo $dar_originalidad ?></h4>
    </div>
    <div class="col-md-12" id="cuain1">
        <div id="ideas" class="cuadrado_inno_id">
            <img src="img/t-i+d+i.png" class="titulo-imagen">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10 col-md-offset-1 cuadrado_inno_id2" id="cuain2" >
            <h4><?php echo $departamento_ideas ?> </h4>
            <p> <?php echo $consumidor_fuente_inspiracion ?></p>
    </div>
</div>

 
<div class="row">
        <div class="col-md-10 col-md-offset-1 cuadrado_inno_id3">

            <h4 > <?php echo $idi_nos_permite ?></h4>
            <p><?php echo $generar_nuevos_productos ?> </p>
        </div>
</div>

 



<div id="contenedortrescolumnas" class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row" id="desarrollo">

            <div class="col-md-12 columna12">
                <h3>  <?php echo $inno_como_trabaja ?></h3>
            </div>

            <div class="col-md-12 columna12">
                <img class="pilares" src="images/inno.png">
            </div>
            <div class="col-md-4 columna1" >
                <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/innovaciones-congresosint.png">
                <h2> <?php echo $congresos_internacionales ?></h2>
                <p ><?php echo $asistimos_anualmente ?> </p>
            </div>

            <div class="col-md-4 columna2" >
                <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/innovaciones-investigaciones.png">

                <h2> <?php echo $investigaciones_capacitaciones ?></h2>
                <p> <?php echo $invertimos_continuamente ?></p>
            </div>
            <div class="col-md-4 columna3" >
                <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/innovaciones-ideaseinnov.png">
                <h2 > <?php echo $ideas_e_innovaciones ?></h2>
                <p > <?php echo $pensamos_trabjamos_equipo ?></p>
            </div>
        </div>
    </div>
</div>

<div id="portfolio_expertise" class="row">
  
  <div class="col-md-4" id="imagenportfolio1_inno" >
 
  </div>

  <div class="col-md-4" id="imagenportfolio2_inno" >
  </div>
  <div class="col-md-4" id="imagenportfolio3_inno" >
  </div>
    <div class="col-md-12 trama33">
    
    </div>
</div>
  <?php  require 'footer.php';
  footer("su2", "inn7", $contacto, $necesita_consulta_comentario, "./contacto");
  
  ?>

    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
</body>
</html>