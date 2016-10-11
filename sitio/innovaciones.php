<?php
session_start();

require 'requirelanguage.php';
?>

<!doctype html>
<html lang="en">
<head>
<title>AMYRIS-Fragancias</title>


 <!-- core CSS -->
    <link href="template5/css/bootstrap.min.css" rel="stylesheet">
    <link href="template5/css/font-awesome.min.css" rel="stylesheet">
    <link href="template5/css/animate.min.css" rel="stylesheet">
    <link href="template5/css/prettyPhoto.css" rel="stylesheet">
    <link href="template5/css/main.css" rel="stylesheet">
    <link href="template5/css/responsive.css" rel="stylesheet">
    <link href="css/estilo_innovaciones.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <!-- 1. Link to jQuery (1.8 or later), -->
    <script src="js/jquery.min.js"></script> <!-- 33 KB -->




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

<link href="template5/css/bootstrap.min.css" rel="stylesheet">
<link href="template5/css/animate.min.css" rel="stylesheet">
<link href="template5/css/prettyPhoto.css" rel="stylesheet">
<link href="template5/css/main.css" rel="stylesheet">
<link href="template5/css/responsive.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">



</head>
<body>

<img src="images/40.png" id="right" style="position: absolute;z-index: 99;margin-top: 0px;margin-left: 675px;width: 4%;">
<img src="images/41.png" id="left" style="position: absolute;z-index: 90;margin-top: 0px;margin-left: 675px;width: 4%;">




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


<div id="logo">

  <a href="index"><img src="images/logo.png"></a>
   <ul>
             <li><i class="fa fa-phone"></i></li>
              <li> <i class="fa fa-map-marker"></i></li>
              <li><i class="fa fa-envelope"> </i></li>
              
               <li>|</li>
               <li><i class="fa fa-bars"id="rayas" ></i></li>
      
            </ul> 

</div>

<!--

<div id="bandera">
  <a href="changelanguage.php?language=es">
  <img class="es" src="img/es.png"></a>
 <a href="changelanguage.php?language=en">
 <img class="en" src="img/en.png" ></a>
</div>

 -->

<section id="main-slider" class="no-margin">
        <div class="carousel slide">
          
            <div class="carousel-inner">






                <div class="item active" style="background-image: url(template5/images/slider/59.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                <h4 class="animation animated-item-1 titulo1" style="font-weight:normal;font-size:22px;color:#FFF;text-align: center;margin-left: 270px;text-align: right;width: 540px;"><?php echo $textoin1 ?></h4>


                                      <h1 class="animation animated-item-2 titulo2" style="font-family:'Museo 500 Regular';font-weight:normal;font-size:43px; margin-right: 160px;margin-top: 50px; "><?php echo $textoin2 ?></h1>
                                    
                                  
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                  <!--  <img src="images/slider/img1.png" class="img-responsive"> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

        </div><!--/.carousel-->
  
    </section><!--/#main-slider-->




<div id="intro">
    <div class="container">
        <div class="row">




<div id="crumble_quienes">
  <h3><?php echo $textoin3 ?></h3>

</div>



<div id="botonrojo_quienes" >
<img src="images/nube.png" >
  <h3> <?php echo $textoin4 ?></h3>
</div>


<div id="botonrojo2_inno" class="wow fadeInUpBig animated " >
<h2> <?php echo $textoin5 ?></h2>

</div>



<div id="contacto" >
 <a href="contacto"> <span><?php echo $contacto ?></span> </a>
</div>



<div id="frasco">
  <img src="images/60.jpg" >
</div>


<section id="cuadrado">

  <div class="primero_cuadrado_inno " >
  
          <h4 ><?php echo $textoin6 ?> </h4>
 
  </div>





</section>
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<div id="columna" class="col-md-4">

  <p><font class="font" ><?php echo $textoin7 ?></font><br><?php echo $textoin8 ?></p>

</div>



<div id="telescopio">
<img  src="images/61.jpg" >
</div>
  


  
  
      <div class="cuadrado_inno">
          <p> <?php echo $textoin9 ?></p>
          <h4><?php echo $textoin10 ?></h4>
      </div>


    <div class="cuadrado_inno_id">
         
          <h4 >I+D+I</h4>
      </div>

  <div class="cuadrado_inno_id2">
         
          <h4><?php echo $textoin11 ?> </h4>
           <p> <?php echo $textoin12 ?></p>
      </div>



  <div class="cuadrado_inno_id3">
         
          <h4 > <?php echo $textoin13 ?></h4>
           <p><?php echo $textoin14 ?> </p>
      </div>


  <div class="cuadrado_inno_id4">
        
      </div>





<div id="trescolumnas" >

<div class="col-md-12 imagen" >
    <img src="images/inno.png">
</div>


<div class="col-md-2 columna1" >
<h2> <?php echo $textoin15 ?></h2>
  <p ><?php echo $textoin16 ?> </p>
</div>

<div class="col-md-2 columna2" >
<h2> <?php echo $textoin17 ?></h2>
  <p> <?php echo $textoin18 ?></p>
</div>

<div class="col-md-2 columna3" >
<h2 > <?php echo $textoin19 ?></h2>
  <p > <?php echo $textoin20 ?></p>
</div>


</div>



<div id="tresfotos" >
<div class="col-md-4 foto1"  >
  <img src="images/62.jpg" >
</div>


<div class="col-md-4 foto2" >
  <img src="images/63.jpg"  >
</div>


<div class="col-md-4 foto3" >
  <img src="images/64.jpg"  >
</div>

</div>


<div id="trama33" >
<img src="images/trama33.jpg" >
</div>


<section id="susten" >
 
 <div class="su1">
 <img src="images/77.jpg" >
</div>


 <div class="col-md-5" id="su2" >
         <h1><?php echo $contacto2 ?></h1>
            <p> <?php echo $textoin21 ?> </p>
           <img src="images/40.png" style="width: 11%;">  
                
</div>  





<div id="trama3">
 <img src="images/trama3.jpg"  >
</div>


<div id="footer" class="col-md-5 " style="background-color: #fff;margin-top: -264px;margin-left: 99px;height: 265px;width: 670px;z-index: 5;">
  <img src="images/logofooter.png" >
  <h3 >2016 - Todos los derechos reservados // Web Design ODM Brandig</h3>
</div>


 <div class="col-md-4 "  id="listaafuera">
     
                 <ul >
             <a href="index"> <li ><?php echo $amyris ?></li></a>
                <a href="fragancias"> <li ><?php echo $fragancias ?></li></a>
               <a href="expertise"> <li><?php echo $expertise ?></li></a>
              <a href="sustentabilidad"> <li><?php echo $sustentabilidad ?></li></a>
               <a href="innovaciones"> <li><?php echo $innovaciones ?></li></a>
               <a href="contacto"> <li><?php echo $contacto2 ?></li></a>
            </ul> 
                
</div>  




 <div id="listaadentro" class="col-md-4 " >
          <h1>AMYRIS S.A</h1>
            <ul>
            <li> <i class="fa fa-map-marker">  Curapaligue 6510, Munro(1605)<br>pcia de BSAS</i></li>
              <li><i class="fa fa-envelope"> ventas@amiry.com.ar</i></li>
              <li><i class="fa fa-phone"> 5197-1918</i></li>
       
            </ul> 
                
</div>  





</section>




  
    <script src="template5/js/bootstrap.min.js"></script>
    <script src="template5/js/jquery.prettyPhoto.js"></script>
    <script src="template5/js/jquery.isotope.min.js"></script>
    <script src="template5/js/main.js"></script>
    <script src="template5/js/wow.min.js"></script>
     <script src="js/inno.js"></script>


</body>
</html>