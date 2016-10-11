<?php
session_start();

require 'requirelanguage.php';
?>

<!doctype html>
<html lang="en">
<head>
<title>AMYRIS-Fragancias</title>
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0" />

 <!-- core CSS -->
<link href="template5/css/animate.min.css" rel="stylesheet">
<link href="template5/css/main.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/estilo_index.css" rel="stylesheet">
<script src="js/waypoints.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
<!-- Custom CSS -->
<link href="css/full-slider.css" rel="stylesheet">
<link rel="stylesheet" href="css/style_video.css"> 
<link href="css/style.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- 1. Link to jQuery (1.8 or later), -->
<script src="js/jquery.min.js"></script> <!-- 33 KB -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="template5/css/bootstrap.min.css" rel="stylesheet">
<link href="template5/css/animate.min.css" rel="stylesheet">
<link href="template5/css/prettyPhoto.css" rel="stylesheet">
<link href="template5/css/main.css" rel="stylesheet">
<link href="template5/css/responsive.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

             <!--      <script src="js/jquery.min.js"></script>     problematicoo 33 KB -->   
<link rel="stylesheet" type="text/css" href="fonts.css">






<style >
  @font-face {
font-family: 'Museo 500 Regular';
font-style: normal;
font-weight: normal;
src: local('Museo 500 Regular'), url('Museo500-Regular.woff') format('woff');
}

</style>


</head>


<body>



<span class="ir-arriba icon-arrow-up2"></span>

<img src="images/40.png" id="right">
<img src="images/41.png" id="left">


<div id="menu1">

    <div id="show-me" >
        <img src="images/nube.png">
        <h1><?php echo $amyris ?></h1>
        <p>_____</p>
        <ul>
            <a href="quienes-somos"> <li><?php echo $quienes ?></li></a>
            <a href="quienes-somos"><li ><?php echo $valores ?></li></a>
            <a href="quienes-somos"> <li ><?php echo $porque?></li></a>


        </ul>

    </div>

</div>

<div id="menu2" >
    <div id="show-me2" >
        <img src="images/nube.png">
        <h1 ><?php echo $fragancias ?></h1>
        <p>_____</p>
        <ul>
            <a href="fragancias">  <li><?php echo $fraganciasfinas ?></li></a>
            <a href="fragancias"> <li><?php echo $cuidadopersonal ?></li></a>
            <a href="fragancias">  <li><?php echo $hogarylimpieza ?></li></a>


        </ul>

    </div>
</div>

<div id="menu3">
    <div id="show-me3" >
        <img src="images/nube.png">
        <h1><?php echo $expertise ?></h1>
        <p>_____</p>
        <ul>
            <a href="expertise"> <li><?php echo $desarrollo ?></li> </a>
            <a href="expertise">  <li><?php echo $infraestructura ?></li> </a>
            <a href="expertise">  <li><?php echo $control ?></li> </a>
            <a href="expertise">    <li><?php echo $comercio ?></li> </a>


        </ul>

    </div>
</div>



<div id="menu4">
    <div id="show-me4">
        <img src="images/nube.png">
        <h1><?php echo $sustentabilidad ?></h1>
        <p>_____</p>
        <ul>
            <a href="sustentabilidad">       <li><?php echo $proteccion ?></li> </a>
            <a href="sustentabilidad">     <li><?php echo $eficiencia ?></li> </a>
            <a href="sustentabilidad">     <li ><?php echo $valoresm ?></li></a>



        </ul>

    </div>
</div>
<div id="menu5">
    <div id="show-me5">
        <img src="images/nube.png">
        <h1><?php echo $innovaciones ?></h1>
        <p>_____</p>
        <ul>
            <a href="innovaciones">      <li><?php echo $departamento ?></li> </a>
            <a href="innovaciones">     <li><?php echo $desarrollom ?></li> </a>
            <a href="innovaciones">      <li><?php echo $investigacion ?></li> </a>
        </ul>

    </div>
</div>




<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menuboot">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="flex-video">
                <div class="embed-responsive embed-responsive-16by9">
                    <video src="video/video.webm" width="100%" height="100%" autoplay loop controls ></video>

                </div>

                <div class="carousel-caption" >
                    <h2 class="wow slideInDown animated primero" style="visibility: visible;animation-name: slideInDown;font-family:'Museo 500 Regular';position: absolute;margin-top: -420px; font-weight:normal;font-size:70px;width: 734px;margin-left: 50px;"><?php echo $bienvenidos ?></h2>
                    <h2 class="wow slideInDown animated primero" style="visibility: visible;animation-name: slideInDown;font-family:'Museo 500 Regular';position: absolute;margin-top: -320px; font-weight:normal;font-size:70px;width: 734px;"><?php echo $amyris ?></h2>

                    <h2 class="wow slideInDown animated segundo" style="visibility: visible;animation-name: slideInDown;font-family:'Museo 500 Regular';position: absolute;text-align: right;margin-left: -35px;margin-top: -120px; font-weight:normal;font-size:50px;width: 430px;"><?php echo $creamos1 ?></h2>

                    <h2 class="wow slideInDown animated tercero" style="visibility: visible;animation-name: slideInDown;font-family:'Museo 500 Regular';position: absolute;margin-left: 440px;margin-top: -120px; font-weight:normal;font-size:50px;width: 430px;text-align: left;"><?php echo $creamos2 ?></h2>



                </div>



            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill zoomIn animated segundo" style="background-image:url('img/slider2.jpg');animation-name: zoomIn;"></div>
            <div class="carousel-caption">
                <h2 class="wow slideInDown animated primero" style="visibility: visible;animation-name: slideInDown;font-family:'Museo 500 Regular';position: absolute;margin-top: -270px; font-weight:normal;font-size:40px;width: 734px;"><?php echo $fabricamos ?></h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill zoomIn animated segundo" style="background-image:url('img/slider3.jpg');animation-name: zoomIn;"></div>
            <div class="carousel-caption">
                <h2 class="wow slideInDown animated primero" style="visibility: visible;animation-name: slideInDown;font-family:'Museo 500 Regular';position: absolute;margin-top: -270px; font-weight:normal;font-size:40px;width: 734px;"><?php echo $logramos ?></h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>



<a href="index"><img src="images/logo.png" id="logo"></a>

<div id="lista_arriba">
    <ul>
        <li><i class="fa fa-phone"></i></li>
        <li> <i class="fa fa-map-marker"></i></li>
        <li><i class="fa fa-envelope"> </i></li>

        <li>|</li>
        <li><i class="fa fa-bars"id="rayas" ></i></li>

    </ul>
</div>


<!--
<div id="banderas">
  <a href="changelanguage.php?language=es">
  <img class="es" src="img/es.png" ></a>
 <a href="changelanguage.php?language=en">
 <img class="en" src="img/en.png" ></a>
</div>


-->

<div id="intro">
<div class="container">
<div class="row">


<div id="acordeon" class="accordian" >
    <ul>
        <li>
            <div class="wow slideInUp animated primero" >

                <div class="image_title">
                    <a class="texto1_isla1" href="#"><?php echo $disfrutar1 ?></a>
                    <a class="texto2_isla1 wow slideInUp animated " href="#" ><?php echo $disfrutar2 ?></a>
                </div>
                <a href="#">
                    <img src="img/isla1.jpg"/>
                </a>
            </div>
        </li>

        <li>
            <div class="wow slideInUp animated segundo">
                <div class="image_title">
                    <a class="texto1_isla2" href="#"><?php echo $oler1 ?></a>
                    <a class="texto2_isla2 wow slideInUp animated " href="#"><?php echo $oler2 ?></a>
                </div>
                <a href="#">
                    <img src="img/isla2.jpg"/>
                </a>
            </div>
        </li>


        <li>
            <div class="wow slideInUp animated tercero" >
                <div class="image_title">
                    <a class="texto1_isla3" href="#"><?php echo $descubrir1 ?></a>
                    <a class="texto2_isla3 wow slideInUp animated " href="#"><?php echo $descubrir2 ?></a>
                </div>
                <a href="#">
                    <img src="img/isla3.jpg"/>
                </a>
            </div>
        </li>
    </ul>
</div>






<!--<div id="trama" class="wow zoomIn animated " style="visibility: visible; animation-name: zoomIn;">-->
<img src="images/trama2.jpg" id="trama"   class="wow zoomIn animated " >

<!-- </div>   -->



<div id="botonrojo" class="wow fadeInDownBig animated primero" >
    <img src="images/nube.png">
    <h3><?php echo $amyrises ?></h3>
</div>




<div id="botonrojo2" class="wow fadeInUpBig animated segundo" >
    <h2 id="textorojo"><?php echo $ofrecemosexcelencia ?></h2>

</div>



<!--<div id="contacto">-->
<!-- <a href="contacto"> <span>--><?php //echo $contacto ?><!--</span></a>-->
<!--</div>-->







<!-- portfolio section -->
<section id="portfolio">
    <div class="container">
        <div class="row">



            <ul class="project-wrapper wow animated fadeInUp">



                <li class="portfolio-item wow slideInUp animated primero">
                    <img src="images/islap1chica.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry." >
                    <figcaption class="mask">
                        <h3><?php echo $fraganciasfinas2 ?></h3>     <br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        <a href="fragancias"> <img src="images/40.png" class="nube" ></a>
                    </figcaption>

                </li>

                <li class="portfolio-item wow slideInUp animated segundo">
                    <img src="images/islap3chica.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. " >
                    <figcaption class="mask">
                        <h3 ><?php echo $cuidadopersonal2 ?></h3>
                        <br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        <a href="fragancias">
                            <img src="images/40.png" class="nube" ></a>
                    </figcaption>

                </li>

                <li class="portfolio-item wow slideInUp animated tercero">
                    <img src="images/islap2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. " >
                    <figcaption class="mask">
                        <h3 ><?php echo $hogarylimpieza2 ?></h3>     <br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                        <a href="fragancias">
                            <img src="images/40.png" class="nube"></a>
                    </figcaption>

                </li>
            </ul>

        </div>
    </div>
</section>
<!-- end portfolio section -->


<section id="cuadrado">

    <div class="wow zoomIn animated primero_cuadrado " >


        <div class="wow zoomIn animated segundo_cuadrado"  >


            <h4 ><?php echo $segundo_cuadrado1 ?><font style="color: red;"><?php echo $segundo_cuadrado2 ?></font></h4>
        </div>
    </div>



    <div class="wow zoomIn animated"  id="fotolaboratorio">
        <img src="images/laboratorio.jpg" >
    </div>

</section>



<div class="accordian2">
    <ul>
        <li>
            <div class="wow slideInUp animated primero" >

                <div class="image_title2">
                    <a href="#" ><?php echo $expertise ?></a>
                </div>
                <div class="caja1">    <img src="images/40.png" class="boton_isla_abajo1" ></div>
                <a href="#">
                    <img src="img/isla4.jpg"/>
                </a>
            </div>
        </li>



        <li>
            <div class="wow slideInUp animated tercero">
                <div class="image_title2">
                    <a href="#" >I+D+I</a>
                </div>
                <div class="caja2"> <img src="images/40.png" class="boton_isla_abajo2" ></div>
                <a href="#">
                    <img src="img/isla5.jpg"/>

                </a>
            </div>
        </li>
    </ul>
</div>




<section id="susten">
    <div class="wow zoomIn animated cuarto" >

        <img class="susten" src="images/sustentabilidad.jpg">


    </div>

    <div id="sustentitulo" class="col-md-5 intro-pic wow slideInLeft" >
        <h1  class="animation animated-item-1" ><?php echo $sustentabilidad ?></h1>
        <p ><?php echo $sustentabilidad2 ?></p>


    </div>

</section>


</div>
</div>
</div>
<footer class="footer">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6 fondo-blanco">
            <div class="row">
                <div class="col-md-6"><img src="images/logofooter.png" ></div>
                <div class="col-md-6">
                    <div id="listadentro">
                        <h1>AMYRIS S.A</h1>
                        <ul>
                            <li> <i class="fa fa-map-marker ">  Curapaligue 6510, Munro(1605)<br>pcia de BSAS</i></li>
                            <li><i class="fa fa-envelope"> ventas@amiry.com.ar</i></li>
                            <li><i class="fa fa-phone"> 5197-1918</i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <h3 >2016 - Todos los derechos reservados // Web Design ODM Brandig</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div id="listaafuera">
                <ul>
                    <a href="index"> <li ><?php echo $amyris ?></li></a>
                    <a href="fragancias"> <li ><?php echo $fragancias ?></li></a>
                    <a href="expertise"> <li><?php echo $expertise ?></li></a>
                    <a href="sustentabilidad"> <li><?php echo $sustentabilidad ?></li></a>
                    <a href="innovaciones"> <li><?php echo $innovaciones ?></li></a>
                    <a href="contacto"> <li><?php echo $contacto2 ?></li></a>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>





    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <script src="js/index.js"></script>





</html>