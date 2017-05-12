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

<div id="imagenrosa" class="row" >
    <div class="primero_cuadrado_sus col-md-9 col-md-offset-1 col-sm-12 col-sm-offset-0" >
        <img src="img/t-sustentabilidad.png" class="titulo-imagen">
    </div>
</div>

<section id="columnas2" class="row">
    <div class="col-md-5 col-md-offset-1" id="valores">
        <h2 ><?php echo $textos7 ?></h2>
        <p class="ptexto1"><?php echo $textos8 ?></p><br>
        <p class="ptexto1"><?php echo $textos88 ?></p><br>
        <h2 ><?php echo $textos9 ?></h2>
        <p class="ptexto1"> <?php echo $textos10 ?></p><br>

    </div>

    <div class="col-md-5" id="esquinaderechas">
        <p class="ezquinaderecha1" ><?php echo $textos11 ?></p><br>
        <p class="ezquinaderecha2" > <?php echo $textos12 ?></p><br>
        <p class="ezquinaderecha3" > <?php echo $textos13 ?></p><br>
        <p class="ezquinaderecha4" ><?php echo $textos14 ?>
            <div class="linea-roja-50 float-right"></div>
        </p>
    </div>
</section>


<section id="seccion-como-operamos">

    <div class="cuarto row" >
        <div id="como-operamos" class="segundo_cuadrado_sus col-md-12 text-center">
            <img class="titulo-imagen" src="img/t-como-operamos.png">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center wow animated fadeInDown" id="columnadocesusten" >
            <h1 ><?php echo $textos16 ?> </h1>
            <img id="corchete" src="images/corchete.png" >
        </div>
    </div>


    
    <div class="row seguridad-higiene">

        <div  class="col-md-10 col-md-offset-1" id="porque" >
            <div class="row">
                <div class="col-md-4 col-md-offset-1 porquecolumna4">
                    <br>
                    <br>
                    <h1> <?php echo $textos17 ?></h1>
                    <p  id="textcols1"> <?php echo $textos18 ?> </p>
                    <br>
                    <h1> <?php echo $textos19 ?></h1>
                    <p id="textcols2" > <?php echo $textos20 ?> </p>


                </div>
                <div class="col-md-3"  id="sustencolumna3" style="">
                    <img src="images/susten.png" >
                </div>
                <div class="col-md-4" id="sustencolumna4" >
                    <h1><?php echo $textos23 ?> </h1>
                    <p id="textcols3"> <?php echo $textos24 ?> </p>
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
  footer("imagensfinalsusten", "sustenfinal", $textos27, $textos28, "./quienes-somos");
  
  ?>

    <script src="js/jquery.slitslider.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>
    </body>
    </html>