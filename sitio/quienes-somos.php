<?php 
session_start();
require 'requirelanguage.php';
require 'header.php';

?>

<?php  require 'menu.php';?>

<?php
    require_once 'portada.php';
    insertar_portada('portada-quienes-somos', $el_valor_conectar_sentidos, $inspirando_felicidad);
;?>

<?php
    require_once 'breadcrumbs.php';
    insertar_breadcrumbs($quienes_somos_valores_por_que);
?>


  <?php
  require_once "servicio.php";
  insertar_servicio($amyris_inspiracion, $generamos_tendencias);
  ?>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-8 col-md-offset-3 col-sm-12 col-sm-offset-0" id="quienes-somos">
              <div class="primero_cuadrado_quienes">
                  <h4><img src="<?php echo titulo_imagen("img/t-quienes-somos.png") ?>"></h4>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-5 col-md-offset-1 col-sm-12 col-sm-offset-0 quienes-somos-izquierda futura">
              <p class="cuadrodestacado"><?php echo $empresa_familiar ?></p><br>
              <p class="px19"><?php echo $distribuidores_latinoamerica ?></p><br>
              <p class="px19"><?php echo $nuestro_expertise ?></p>
          </div>
          <div class="col-md-5 col-sm-12 quienes-somos-derecha futura">
              <p class="px19"><?php echo $tomamos_proyecto_desafio ?> </p><br>
              <p class="px19"><?php echo $equipo_trabajo_amyris ?></p><br>
              <p class="destacado"><?php echo $fragancia_creada_medida ?></p>
              <div class="linea-roja-50"></div>
          </div>
      </div>
  </div>
  

<div id="valores" class="row valores-background">
    <div class="segundo_cuadrado_quienes " >
        <img src="<?php echo titulo_imagen("img/t-valores.png") ?>">
    </div>
</div>

<div class="row tramado-background">
    <div class="col-md-6 col-md-offset-3 wow animated fadeInDown" id="columna5">
        <h1 ><?php echo $honestidad ?></h1>
        <p><?php echo $respesto_sinceridad ?></p>
        <h1 class="titulocolumna5destacado"><?php echo $etica ?></h1>
        <p class="titulocolumna5destacadop" ><?php echo $proyecto_compromiso_cliente ?></p>
        <h1  class="titulocolumna5destacado"><?php echo $sinergia ?></h1>
        <p class="titulocolumna5destacadop"><?php echo $trabajamos_conjunto ?> </p>
    </div>
</div>

<section id="porqueamir" >
<h1 class="por1" ><?php echo $por_que_amyris_pregunta ?></h1>
  <p class="porp"><?php echo $nuestra_vision ?></p>

<div class="row">

    <div class="col-md-12" id="tituloarriba" >
        <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/quienessomos-innovacion.png">
        <h1><?php echo $innovacion ?></h1>
        <p><?php echo $inquietud_explorar ?></p>
    </div>
</div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 por-que-box por-que-izquierda-box">
            <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/quienessomos-compromiso.png">
            <h1><?php echo $compromiso ?></h1>
            <p><?php echo $buscamos_alternativas ?></p>

        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 pilares-box">
            <img class="pilares" src="images/pilares.png">
        </div>
        <div class="col-md-3 col-xs-12 por-que-box por-que-derecha-box">
            <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/quienessomos-equipo.png">
            <h1><?php echo $equipo ?></h1>
            <p><?php echo $personas_trabajan_amyris ?></p>

        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12" id="tituloabajo" >
            <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/quienessomos-calidad.png">
            <h1><?php echo $calidad ?></h1>
            <p><?php echo $garantizamos_calidad ?></p>

        </div>
    </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 por-que-box por-que-izquierda-box">
            <p><?php echo $laboratorio_muestras ?></p>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <img class="pilares" src="images/pilares2.png">
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12 por-que-box">
            <p><?php echo $laboratorio_control_calidad ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12 por-que-box por-que-abajo-box">
            <p class="text-center"><?php echo $ultima_generacion ?></p>
        </div>
    </div>

  

</section>
<?php  require 'footer.php';
footer("susten", "sustenido", $innovaciones, $proceso_desarrollo, "./innovaciones");

?>
    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
</body>
