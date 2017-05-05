<?php
session_start();
require 'requirelanguage.php';
require 'header.php';

?>
<body id="body">
<?php require 'menu.php'; ?>

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

    <?php
        require_once "servicio.php";
        insertar_servicio($amyrises, $ofrecemosexcelencia, false);
    ?>

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
                                                    <?php //echo $fraganciasfinas2 ?>
                                                </h4>
                                                <p>Buscamos ofrecerle al cliente la más alta calidad de la fragancia
                                                    creada.</p>
                                                <div>
                                                    <a href="fragancias"> <img alt="Imagen cargando" src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 isla-producto producto-arriba producto-cuidado-personal">
                                            <div>
                                                <h4>
                                                    <?php //echo $cuidadopersonal2 ?>
                                                </h4>
                                                <p>Asumimos el compromiso de ofrecerle al consumidor productos que al momento
                                                    de percibir los aromas, pueda disfrutar.</p>
                                                <div>
                                                    <a href="fragancias">
                                                        <img alt="Imagen cargando" src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo producto-cuidado-hogar">
                                            <div>
                                                <h4>
                                                    <?php //echo $cuidadohogar ?>
                                                </h4>
                                                <p>Ofrecemos productos que están relacionados con la sensación de seguridad,
                                                    confort, pertenencia y calma.</p>
                                                <div>
                                                    <a href="fragancias"> <img alt="Imagen cargando" src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo producto-limpieza">
                                            <div>
                                                <h4><?php //echo $limpieza ?>
                                                </h4>
                                                <p>Buscamos que el bienestar generado remita a la tranquilidad de percibir un
                                                    hogar limpio.</p>
                                                <div>
                                                    <a href="fragancias"> <img alt="Imagen cargando" src="images/42.png" class="nube"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo producto-cosmetica">
                                            <div>
                                                <h4><?php //echo $cosmetica ?>
                                                </h4>
                                                <p>Ofrecemos fragancias que recuerden ese momento de alegría que se obtiene
                                                con un auto nuevo.</p>
                                                <div>
                                                    <a href="fragancias"> <img alt="Imagen cargando" src="images/42.png" class="nube"></a>
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
            <img alt="Imagen cargando" src="images/laboratorio.jpg">
        </div>
    </div>

    <div class="container">
        <div class="row destacado-alto destacado-seccion">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0  destacado-alto">
                <div class="row  destacado-alto">
                    <div class="col-md-6 col-sm-12 destacado-item destacado-izquierda destacado-alto">
                        <div class="row destacado-contenido">
                            <div class="col-md-9 destacado-texto-container">
                                <div class="destacado-texto">
                                    <p><?php echo $expertise_texto ?></p>
                                </div>
                                <div class="nube-contenedor">
                                    <a href="#">
                                    <img alt="Imagen cargando" class="nube" src="images/42.png">
                                    </a>
                                </div>
                            </div>
                            <div class="destacados-titulo col-md-3 destacado-expertise">
<!--                                <div class="rotate">-->
<!--                                    <a href="#">--><?php //echo $expertise ?><!--</a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 destacado-item destacado-derecha destacado-alto">
                        <div class="row destacado-contenido">
                            <div class="col-md-9 destacado-texto-container">
                                <div class="destacado-texto">
                                    <p><?php echo $idi_texto ?></p>
                                </div>
                                <div class="nube-contenedor">
                                    <a href="#">
                                        <img alt="Imagen cargando" class="nube" src="images/42.png">
                                    </a>
                                </div>
                            </div>
                            <div class="destacados-titulo col-md-3 destacado-idi">
<!--                                <div class="rotate">-->
<!--                                    <a href="#">--><?php //echo $idi ?><!--</a>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  <?php require 'footer.php';
  
    footer("conteinersustenta", "ultimafoto", $sustentabilidad, $sustentabilidad2);
  ?>
    <!-- Essential jQuery Plugins
    ================================================== -->
  
    <!-- Counter in About section  -->
    <script src="js/jquery.countTo.js"></script>

   
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    
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