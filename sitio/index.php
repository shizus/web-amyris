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

    <?php require 'conceptos.php'; ?>
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
                    </div>
                    <h3><?php echo $amyrises ?></h3>
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
                    <div id="portfolio">
                        <div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 isla-producto producto-arriba producto-fragancias-finas">
                                            <div>
                                                <h4>
                                                    <?php echo $fraganciasfinas2 ?>
                                                </h4>
                                                <p>Buscamos ofrecerle al cliente la más alta calidad de la fragancia
                                                    creada.</p>
                                                <div>
                                                    <a href="fragancias"> <img src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 isla-producto producto-arriba producto-cuidado-personal">
                                            <div>
                                                <h4>
                                                    <?php echo $cuidadopersonal2 ?>
                                                </h4>
                                                <p>Asumimos el compromiso de ofrecerle al consumidor productos que al momento
                                                    de percibir los aromas, pueda disfrutar.</p>
                                                <div>
                                                    <a href="fragancias">
                                                        <img src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo producto-cuidado-hogar">
                                            <div>
                                                <h4>
                                                    <?php echo $cuidadohogar ?>
                                                </h4>
                                                <p>Ofrecemos productos que están relacionados con la sensación de seguridad,
                                                    confort, pertenencia y calma.</p>
                                                <div>
                                                    <a href="fragancias"> <img src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo producto-limpieza">
                                            <div>
                                                <h4><?php echo $limpieza ?>
                                                </h4>
                                                <p>Buscamos que el bienestar generado remita a la tranquilidad de percibir un
                                                    hogar limpio.</p>
                                                <div>
                                                    <a href="fragancias"> <img src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo producto-cosmetica">
                                            <div>
                                                <h4><?php echo $cosmetica ?>
                                                </h4>
                                                <p>Ofrecemos fragancias que recuerden ese momento de alegría que se obtiene
                                                con un auto nuevo.</p>
                                                <div>
                                                    <a href="fragancias"> <img src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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
                            <h4><?php echo $segundo_cuadrado1 ?><br><span
                                        style="color: #DA504B;"><?php echo $segundo_cuadrado2 ?></span></h4>
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
        <div class="row destacado-alto destacado-seccion">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0  destacado-alto">
                <div class="row  destacado-alto">
                    <div class="col-md-6 col-sm-12 destacado-item destacado-izquierda destacado-alto">
                        <div class="row destacado-contenido">
                            <div class="col-md-8 destacado-texto-container">
                                <div class="destacado-texto">
                                    <p><?php echo $expertise_texto ?></p>
                                </div>
                                <div class="nube-contenedor">
                                    <a href="#">
                                    <img class="nube" src="images/42.png">
                                    </a>
                                </div>
                            </div>
                            <div class="destacados-titulo col-md-4">
                                <div class="rotate">
                                    <a href="#"><?php echo $expertise ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 destacado-item destacado-derecha destacado-alto">
                        <div class="row destacado-contenido">
                            <div class="col-md-8 destacado-texto-container">
                                <div class="destacado-texto">
                                    <p><?php echo $idi_texto ?></p>
                                </div>
                                <div class="nube-contenedor">
                                    <a href="#">
                                        <img class="nube" src="images/42.png">
                                    </a>
                                </div>
                            </div>
                            <div class="destacados-titulo col-md-4">
                                <div class="rotate">
                                    <a href="#"><?php echo $idi ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="conteinersustenta">
        <div class="row">


            <div class="col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn" id="ultimafoto" data-wow-delay="0.9s">
                    <div id="sustentitulo" class="col-md-5 intro-pic wow slideInLeft">
                        <h1 class="animation animated-item-1"><?php echo $sustentabilidad ?></h1>
                        <p><?php echo $sustentabilidad2 ?></p>
                        <p>
                            <img src="images/42.png">
                        </p>
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
    <script src="js/conceptos.js"></script>


</body>
</html>