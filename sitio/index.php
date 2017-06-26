<?php
session_start();
require 'requirelanguage.php';
require 'header.php';

?>
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
        insertar_servicio($amyris_es_armonia, $ofrecemos_excelencia, false);
    ?>

    <br>

    <div id="islas">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <!-- portfolio section -->
                    <div id="portfolio">
                        <div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 isla-producto producto-arriba <?php echo $idioma_ext?>producto-fragancias-finas producto-fragancias-finas">
                                            <div>
                                                <h4> <span class="visible-sm visible-xs hidden-lg hidden-md">
                                                        <a class="dorado" href="fragancias#productos"><?php echo $fragancias_finas_titulo ?></a>
                                                    </span></h4>
                                                <p><?php echo $fragancias_finas_detalle ?></p>
                                                <div>
                                                    <a href="fragancias#productos"> <img src="images/42.png" class="nube-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 isla-producto producto-arriba <?php echo $idioma_ext?>producto-cuidado-personal producto-cuidado-personal">
                                            <div>
                                                <h4> <span class="visible-sm visible-xs hidden-lg hidden-md">
                                                        <a class="dorado" href="fragancias#productos"><?php echo $cuidado_personal_titulo ?></a>
                                                </span></h4>
                                                <p><?php echo $cuidado_personal_detalle ?></p>
                                                <div>
                                                    <a href="fragancias#productos">
                                                        <img src="images/42.png" class="nube-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo <?php echo $idioma_ext?>producto-cuidado-hogar producto-cuidado-hogar">
                                            <div>
                                                <h4>
                                                    <span class="visible-sm visible-xs hidden-lg hidden-md">
                                                        <a class="dorado" href="fragancias#productos"><?php echo $cuidadohogar ?></a>
                                                    </span>
                                                </h4>
                                                <p> <?php echo $cuidadohogardetalle ?></p>
                                                <div>
                                                    <a href="fragancias#productos"> <img src="images/42.png" class="nube-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo <?php echo $idioma_ext?>producto-limpieza producto-limpieza">
                                            <div>
                                                <h4> <span class="visible-sm visible-xs hidden-lg hidden-md">
                                                    <a class="dorado" href="fragancias#productos"><?php echo $limpieza ?>
                                                       </a>
                                                         </span>
                                                </h4>
                                                <p> <?php echo $limpiezadetalle ?></p>
                                                <div>
                                                    <a href="fragancias#productos"> <img src="images/42.png" class="nube-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 isla-producto producto-abajo <?php echo $idioma_ext?>producto-cosmetica producto-cosmetica">
                                            <div>
                                                <h4> <span class="visible-sm visible-xs hidden-lg hidden-md">
                                                        <a class="dorado" href="fragancias#productos"><?php echo $cosmetica ?></a>
                                                </span></h4>
                                                <p> <?php echo $cosmeticadetalle ?></p>
                                                <div>
                                                    <a href="fragancias#productos"> <img src="images/42.png" class="nube-link"></a>
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
        <div class="container wow animated fadeInDown">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center " id="cuadrado1">
                    <section id="cuadrado">
                        <div class="primero_cuadrado ">
                            <h4><?php echo $amyris_proceso_desarrollo ?><br><span
                                        style="color: #DA504B;"><?php echo $segundo_cuadrado2 ?></span></h4>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="" id="fotolaboratorio" style="background-image: url(images/laboratorio.jpg); background-size: cover;">
<!--            <img src="images/laboratorio.jpg">-->
        </div>
    </div>

    <div class="container visible-md visible-lg hidden-sm hidden-xs">
        <div class="row destacado-alto destacado-seccion">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0  destacado-alto">
                <div class="row  destacado-alto">
                    <div class="col-md-6 col-sm-12 destacado-item destacado-izquierda destacado-alto">
                        <div class="row destacado-contenido">
                            <div class="col-md-9 destacado-texto-container">
                                <div class="destacado-texto">
                                    <p><?php echo $nuestro_estandarte ?></p>
                                </div>
                                <div class="nube-contenedor">
                                    <a href="./expertise">
                                    <img class="nube-link" src="images/42.png">
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
                                    <p><?php echo $nuestro_departamento ?></p>
                                </div>
                                <div class="nube-contenedor">
                                    <a href="./innovaciones">
                                        <img class="nube-link" src="images/42.png">
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

    <div class="container-fluid visible-xs visible-sm hidden-md hidden-lg">
        <div class="row destacado-alto destacado-seccion">
            <div class="col-sm-12 destacado-izquierda">
                <div class="destacados-titulo destacado-expertise">
                                                        <a href="./expertise"><?php echo $expertise ?></a>
                </div>
                <div class="destacado-responsive-padding"></div>
                <div class="destacado-texto">
                    <p><?php echo $nuestro_estandarte ?></p>
                </div>
            </div>
            <div class="col-sm-12 destacado-derecha">
                <div class="destacados-titulo destacado-expertise">
                    <a href="./innovaciones"><?php echo $idi ?></a>
                </div>
                <div class="destacado-responsive-padding"></div>
                <div class="destacado-texto">
                    <p><?php echo $nuestro_departamento ?></p>
                </div>
            </div>
        </div>
    </div>
    
    
</main>
    
  <?php require 'footer.php';
  
    footer("conteinersustenta", "ultimafoto", $sustentabilidad, $sustentabilidad2,
      "./sustentabilidad", false);
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