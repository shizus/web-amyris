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

insertar_portada('portada-sustentabilidad', $valor_confianza, $garantizando_cuidado);
;?>
<?php
require_once 'breadcrumbs.php';
insertar_breadcrumbs($valores_barra . $enfoque_sustentable_breadcrumbs . $como_operamos);
?>
<?php
require_once "servicio.php";
insertar_servicio($amyris_etica, $trabajamos_mas_altos);
?>

<div id="sustentabilidad" class="row" >
    <div class="primero_cuadrado_sus col-md-9 col-md-offset-1 col-sm-12 col-sm-offset-0" >
        <img src="<?php echo titulo_imagen("img/t-sustentabilidad.png") ?>" class="titulo-imagen">
    </div>
</div>

<section id="columnas2" class="row">
    <div class="col-md-5 col-md-offset-1" id="valores">
        <p class="ezquinaderecha1 hidden-lg hidden-md visible-sm visible-xs destacado-box-responsive" ><?php echo $controlamos_responsablemente ?></p><br>
        <h2 ><?php echo $valores ?></h2>
        <p class="ptexto1"><?php echo $trabajamos_responsable ?></p><br>
        <p id="enfoque-sustentable" class="ptexto1"><?php echo $cumplir_todas_normas ?></p><br>
        <h2><?php echo $enfoque_sustentable ?></h2>
        <p class="ptexto1"> <?php echo $nuestro_compromiso ?></p><br>

    </div>

    <div class="col-md-5" id="esquinaderechas">
        <p class="ezquinaderecha1 visible-lg visible-md hidden-sm hidden-xs" ><?php echo $controlamos_responsablemente ?></p><br>
        <p class="ezquinaderecha2" > <?php echo $conocemos_detalle ?></p><br>
        <p class="ezquinaderecha3" > <?php echo $somos_conscientes ?></p><br>
        <p class="ezquinaderecha4" ><?php echo $cuidado_salud_bienestar ?>
            <div class="linea-roja-50 float-right"></div>
        </p>
    </div>
</section>


<section id="seccion-como-operamos" class="container-fluid">

    <div class="cuarto row" >
        <div id="como-operamos" class="segundo_cuadrado_sus col-md-12 text-center">
            <img class="titulo-imagen" src="<?php echo titulo_imagen("img/t-como-operamos.png") ?>">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center wow animated fadeInDown" id="columnadocesusten" >
            <h1 ><?php echo $capacitamos_personal ?> </h1>
            <img id="corchete" class="pilares" src="images/corchete.png" >
        </div>
    </div>
    <img class="hidden-lg hidden-md visible-sm visible-xs corchete-responsive" src="images/corchete.png" >

    
    <div class="row seguridad-higiene">

        <div  class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0" id="porque" >
            <div class="row">
                <div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12 porquecolumna4">
                    <br>
                    <br>
                    <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/sustentabilidad-seguridadehigiene.png">
                    <h1> <?php echo $seguridad_higiene ?></h1>
                    <p  id="textcols1"> <?php echo $cumplimos ?> </p>
                    <br>
                    <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/sustentabilidad-impactoambiental.png">
                    <h1> <?php echo $impacto_ambiental ?></h1>
                    <p id="textcols2" > <?php echo $hacemos_estudios ?> </p>


                </div>
                <div class="col-md-3 text-center col-sm-12 col-xs-12 "  id="sustencolumna3">
                    <img class="pilares" src="images/susten.png" >
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12" id="sustencolumna4" >
                    <img class="hidden-lg hidden-md visible-sm visible-xs icono-responsive" src="images/sustentabilidad-desechos.png">
                    <h1><?php echo $desechos ?> </h1>
                    <p id="textcols3"> <?php echo $controlamos_residuos ?> </p>
                </div>
            </div>

            

            

        </div>
    </div>
    <div class="row sustentabilidad-impacto-ambiental">
        <div class col-md-12>
            &nbsp;
        </div>
    </div>
</section>
  
  
  <?php  require 'footer.php';
  footer("imagensfinalsusten", "sustenfinal", $quienes_somos, $exclusividad_asesoramiento, "./quienes-somos");
  
  ?>

    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
    </body>
    </html>