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

    <div class="container conceptos wow animated zoomIn">
        <div class="row">
            <div class="content col-md-12">
                <div class="panel-group islas-container" id="accordion">
                    <div class="panel panel-default sentir isla-background">

                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <span><?php echo $isla_sentir_texto ?></span>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                  <?php echo $isla_sentir_titulo ?>
                                </a>
                            </h4>

                        </div>
                    </div>
                    <div class="panel panel-default descubrir isla-background">

                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                               <span><?php echo $isla_descubrir_texto ?></span>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <?php echo $isla_descubrir_titulo ?>
                                </a>
                            </h4>

                        </div>
                    </div>
                    <div class="panel panel-default crear isla-background">

                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                               <span><?php echo $isla_crear_texto ?></span>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                  <?php echo $isla_crear_titulo ?>
                                </a>
                            </h4>

                        </div>
                    </div>
                    <div class="panel panel-default disfrutar isla-background">
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <span><?php echo $isla_disfrutar_texto ?></span>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <?php echo $isla_disfrutar_titulo ?>
                                </a>
                            </h4>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
     Section acordeon
     ======================================= -->




    <!-- video -->
    <script type="text/javascript" src="js/video-background/videobackground.js"></script>
    <link rel="stylesheet" href="js/video-background/videobackground.css">
    <script type="text/javascript" src="js/video.js"></script>

    <div id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                    <div id="botonrojo" class="wow fadeInDownBig animated centered">
                        <img src="images/nube.png">
                        <h3><?php echo $amyrises ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12 text-center wow animated zoomIn"
                     id="textorojo3">
                    <div id="botonrojo2" class="wow fadeInUpBig animated segundo">
                        <h2 id="textorojo"><?php echo $ofrecemosexcelencia ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div id="islas">
        <div class="container">
            <div class="row">


                <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn">


                    <!-- portfolio section -->
                    <section id="portfolio">
                        <div class="container">
                            <div class="row">


                                <ul class="project-wrapper wow animated fadeInUp">


                                    <li class="portfolio-item wow slideInUp animated primero" id="lista1">
                                        <img src="images/fraga1.jpg" class="img-responsive"
                                             alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                                        <figcaption class="mask" id="mascara1">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <h4><?php echo $fraganciasfinas2 ?></h4>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>Buscamos ofrecerle al cliente la mas alta calidad de la fragancia
                                                        creada. </p>
                                                </div>
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <a href="fragancias"> <img src="images/40.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </figcaption>

                                    </li>

                                    <li class="portfolio-item wow slideInUp animated segundo" id="lista2">
                                        <img src="images/islap3chicaarriba.jpg" class="img-responsive"
                                             alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">

                                        <figcaption class="mask" id="mascara2">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <h4><?php echo $cuidadopersonal2 ?></h4>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>Asumimos el compromiso de ofrecerle al consumidor producto que al momento
                                                        de percibir los aromas pueda disfrutar. </p>
                                                </div>
                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                    <a href="fragancias">
                                                        <img src="images/40.png" class="nube"></a>
                                                </div>
                                            </div>
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
                                    <img src="img/expertise.jpg" width="640px" height="426px"/>
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
                                    <img src="img/isla5.jpg" width="640px" height="426px"/>

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
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyhHMjogLdqX4qOItPagUypToqDY_17pE&callback=initMap">
    </script>
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