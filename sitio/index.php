<?php
session_start();
require 'requirelanguage.php';
require 'header.php';

?>


<body id="body">
<?php require 'menu.php'; ?>

<script>
    $(document).ready(function () {
        // READ recods on page load
        $("#contacto").css("display", "none");
    });

</script>

<!--
End Fixed Navigation
==================================== -->

<main class="site-content" role="main">

    <!--
    Home Slider
    ==================================== -->

  <?php require 'slider_index.php'; ?>

    <!--
    End Home SliderEnd
    ==================================== -->


    <!-- Service section -->


    <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" style="    position: relative;
    z-index: 1;">

        <div id="acordeon" class="accordian">
            <ul>
                <li class="wow slideInUp animated primero">
                    <div>

                        <div class="image_title">
                            <a class="texto1_isla1" href="#"><?php echo $sentir1 ?></a>
                            <a class="texto2_isla1 wow slideInUp animated " href="#"><?php echo $sentir2 ?></a>
                        </div>
                        <a href="#">
                            <img src="img/isla1.jpg"/>
                        </a>
                    </div>
                </li>

                <li class="wow slideInUp animated segundo">
                    <div>
                        <div class="image_title">
                            <a class="texto1_isla2" href="#"><?php echo $descubrir1 ?></a>
                            <a class="texto2_isla2 wow slideInUp animated " href="#"><?php echo $descubrir2 ?></a>
                        </div>
                        <a href="#">
                            <img src="img/isla2.jpg"/>
                        </a>
                    </div>
                </li>


                <li class="wow slideInUp animated tercero">
                    <div>
                        <div class="image_title">
                            <a class="texto1_isla3" href="#"><?php echo $crear1 ?></a>
                            <a class="texto2_isla3 wow slideInUp animated " href="#"><?php echo $crear2 ?></a>
                        </div>
                        <a href="#">
                            <img src="img/isla3.jpg"/>
                        </a>
                    </div>
                </li>

                <li class="wow slideInUp animated cuarto">
                    <div>
                        <div class="image_title">
                            <a class="texto1_isla2" href="#"><?php echo $disfrutar1 ?></a>
                            <a class="texto2_isla2 wow slideInUp animated " href="#"><?php echo $disfrutar2 ?></a>
                        </div>
                        <a href="#">
                            <img src="img/isla4.jpg"/>
                        </a>
                    </div>
                </li>
            </ul>
        </div>


    </div>


    <!--
     Section acordeon
     ======================================= -->


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript">
        /*    $(document).ready(function() {
         $('#btnslide').click(function() {
         $("#slideIzq").animate({
         width:"toggle"
         },2000);
         $("#slideDer").animate({
         right: parseInt($("#slideDer").css("right"))== 0 ?"-="+$("#slideDer").outerWidth() : 0
         },2000);
         });


         $('#btnfade').click(function() {
         $("#fadeIzq").animate({
         width:"toggle",
         opacity:"toggle"
         },2000);
         $("#fadeDer").animate({
         right: parseInt($("#fadeDer").css("right"))== 0 ?"-="+$("#fadeDer").outerWidth() : 0,
         opacity: parseInt($("#fadeDer").css("opacity")) == 1 ? 0 : 1
         },2000);
         });

         }); */
    </script>
    <!--
        <button id="btnslide">ver Slide</button>
      <div class="contenedor" >

        <div id="slideIzq">Efecto slide izquierdo modificando la propiedad width</div>
      </div>
      <div class="contenedor" >
        <div id="slideDer">Efecto slide derecho modificando la propiedad right</div>
      </div>
        <button id="btnfade">ver Fade</button>
      <div class="contenedor" >
        <div id="fadeIzq">Efecto fade izquierdo modificando la propiedad width</div>
      </div>
      <div class="contenedor" >
        <div id="fadeDer">Ejemplo fade derecho modificando la propiedad right</div>
      </div>

     -->

    <div id="service">
        <div class="container">
            <div class="row">


                <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" id="textorojo">
                    <img src="images/trama2.jpg" id="imagentrama" class="wow zoomIn animated ">
                </div>

                <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" id="textorojo2">

                    <div id="botonrojo" class="wow fadeInDownBig animated primero">
                        <img src="images/nube.png">
                        <h3><?php echo $amyrises ?></h3>
                    </div>
                </div>


                <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" id="textorojo3">

                    <div id="botonrojo2" class="wow fadeInUpBig animated segundo">
                        <h2 id="textorojo"><?php echo $ofrecemosexcelencia ?></h2>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div id="islas">
        <div class="container">
            <div class="row">


                <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" id="islas1">


                    <!-- portfolio section -->
                    <section id="portfolio">
                        <div class="container">
                            <div class="row">


                                <ul class="project-wrapper wow animated fadeInUp">


                                    <li class="portfolio-item wow slideInUp animated primero" id="lista1">
                                        <img src="images/fraga1.jpg" class="img-responsive"
                                             alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                                        <figcaption class="mask" id="mascara1">
                                            <h4><?php echo $fraganciasfinas2 ?></h4>     <br>
                                            <p>Buscamos ofrecerle al cliente la mas alta calidad de la fragancia
                                                creada. </p>
                                            <a href="fragancias"> <img src="images/40.png" class="nube"></a>
                                        </figcaption>

                                    </li>

                                    <li class="portfolio-item wow slideInUp animated segundo" id="lista2">
                                        <img src="images/islap3chicaarriba.jpg" class="img-responsive"
                                             alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                                        <figcaption class="mask" id="mascara2">
                                            <h4><?php echo $cuidadopersonal2 ?></h4>
                                            <br>
                                            <p>Asumimos el compromiso de ofrecerle al consumidor producto que al momento
                                                de percibir los aromas pueda disfrutar </p>
                                            <a href="fragancias">
                                                <img src="images/40.png" class="nube"></a>
                                        </figcaption>

                                    </li>


                                    <li class="portfolio-item wow slideInUp animated tercero" id="lista3">
                                        <img src="images/islap1chica.jpg" class="img-responsive"
                                             alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                                        <figcaption class="mask" id="mascara3">
                                            <h3><?php echo $cuidadohogar ?></h3>
                                            <p>Ofrecemos productos que estan relacionados con la sensacion de seguridad,
                                                confort, pertenencia y calma. </p>
                                            <a href="fragancias"> <img src="images/40.png" class="nube"></a>
                                        </figcaption>

                                    </li>

                                    <li class="portfolio-item wow slideInUp animated cuarto" id="lista4">
                                        <img src="images/islap3chica.jpg" class="img-responsive"
                                             alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                                        <figcaption class="mask" id="mascara4">
                                            <h3><?php echo $limpieza ?></h3>

                                            <p>Buscamos que el bienestar generado remita la tranquilidad de percibir un
                                                hogar limpio </p>
                                            <a href="fragancias">
                                                <img src="images/40.png" class="nube"></a>
                                        </figcaption>

                                    </li>

                                    <li class="portfolio-item wow slideInUp animated quinto" id="lista5">
                                        <img src="images/islap2.jpg" class="img-responsive"
                                             alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                                        <figcaption class="mask" id="mascara5">
                                            <h3><?php echo $cosmetica ?></h3>
                                            <p>Buscamos que el bienestar generado remita la tranquilidad de percibir un
                                                hogar limpio </p>
                                            <a href="fragancias">
                                                <img src="images/40.png" class="nube"></a>
                                        </figcaption>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </section>
                    <!-- end portfolio section -->


                </div>
            </div>
        </div>
    </div>


    <div id="priemr_cuadrado">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" id="cuadrado1">
                    <section id="cuadrado">
                        <div class="wow zoomIn animated primero_cuadrado ">
                            <div class="wow zoomIn animated segundo_cuadrado">
                                <h4><?php echo $segundo_cuadrado1 ?><br><font
                                            style="color: #DA504B;"><?php echo $segundo_cuadrado2 ?></font></h4>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="wow zoomIn animated" id="fotolaboratorio">
            <img src="images/laboratorio.jpg">
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s"
                 style="height: 300px;">
                <div class="accordian2">
                    <ul>
                        <li>
                            <div class="wow slideInUp animated primero">

                                <div class="image_title2">
                                    <a href="#"><?php echo $expertise ?></a>
                                </div>
                                <div class="caja1">
                                    <img src="images/40.png" class="boton_isla_abajo1"></div>
                                <a href="#">
                                    <img src="img/expertise.jpg"/>
                                </a>
                            </div>
                        </li>


                        <li>
                            <div class="wow slideInUp animated tercero">
                                <div class="image_title2">
                                    <a href="#">I+D+I</a>
                                </div>
                                <div class="caja2"><img src="images/40.png" class="boton_isla_abajo2"></div>
                                <a href="#">
                                    <img src="img/isla5.jpg"/>

                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div class="container" id="conteinersustenta">
        <div class="row">


            <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">


                <div class="wow zoomIn animated cuarto" id="ultimafoto">
                    <img src="images/sustentabilidad.jpg">
                </div>

                <div class="col-md-12 col-sm-6 col-xs-12 text-left" id="columnaultimafoto">
                    <div id="sustentitulo" class="col-md-5 intro-pic wow slideInLeft">
                        <h1 class="animation animated-item-1"><?php echo $sustentabilidad ?></h1>
                        <p><?php echo $sustentabilidad2 ?></p>
                        <img src="images/42.png">
                    </div>

                </div>

            </div>
        </div>
    </div>


  <?php require 'footer.php'; ?>


    <!-- Essential jQuery Plugins
    ================================================== -->
    <script src="js/jquery.js"></script>
    <!-- Counter in About section  -->
    <script src="js/jquery.countTo.js"></script>

    <!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- Google Map API -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jquery form-->
    <script src="js/jquery.form.js"></script>
    <!-- jquery validate-->
    <script src="js/jquery.validate.min.js"></script>
    <!-- Fullscreen slider -->
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <!-- onscroll animation -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/main.js"></script>


</body>
</html>