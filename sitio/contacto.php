<?php
session_start();

require 'requirelanguage.php';
?>

<!doctype html>
<html lang="en">
<head>
<title>AMYRIS-Fragancias</title>

<link href="template5/css/animate.min.css" rel="stylesheet">
<link href="template5/css/main.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
<link href="css/full-slider.css" rel="stylesheet">
<link rel="stylesheet" href="css/style_video.css"> 
<link href="css/style.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/estilo_contacto.css" rel="stylesheet">


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

             <!--      <script src="js/jquery.min.js"></script>     problematicoo 33 KB -->   



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


<div id="lista">
  <a href="index"><img src="images/logo.png" ></a>
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
  <a href="changelanguage.php?language=es"><img class="es" src="img/es.png" ></a>
 <a href="changelanguage.php?language=en"><img class="en" src="img/en.png" ></a>
</div>

-->


<section id="main-slider" class="no-margin">
        <div class="carousel slide">
          
            <div class="carousel-inner">






                <div class="item active" style="background-image: url(template5/images/slider/71.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                <h4 class="animation animated-item-1 titulo1" style="font-weight:normal;font-size:22px;color:#FFF;text-align: center;margin-left: 270px;width: 540px;"><?php echo $textoc1 ?></h4>


                                      <h1 class="animation animated-item-2 titulo2" style="font-family:'Museo 500 Regular';font-weight:normal;font-size:50px; margin-top: 50px; "> <?php echo $textoc2 ?></h1>
                                    
                                  
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





<div id="crumble_fragancias">
  <h3> <?php echo $textoc3 ?></h3>

</div>







<div id="botonrojo_fragancias" >
<img src="images/nube.png">
</div>

<div id="botonrojo2_fragancias">
<h4><?php echo $textoc4 ?> </h4>

</div>



<div id="contacto">
 <a href="contacto"> <span><?php echo $contacto ?></span></a>
</div>


<br><br>
<br><br>
<div id="info">
<h1> <?php echo $textoc5 ?></h1><br><br>
</div>



<iframe style="margin-left: -91px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.7829180079!2d-58.54074308525398!3d-34.533727480477665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0b0c0e97daf%3A0xe8b41b2ee25398e2!2sCap.+Cajaraville+2902%2C+Carapachay%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1474596618448" width="1350" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>





  <div class="primero_cuadrado_contacto " >
  
  
      <div class="segundo_cuadrado_contacto"  >


          <h2 ><?php echo $textoc6 ?> </h2>
          <p >Cajaraville 2902 y/o Curapaligue 6510,<br> Munro (1605) Pcia. de Bs. As<br> 54 11 5197-1918<br> ventas@amyris.com.ar</p>
      </div>
  </div>

<img class="tachos" src="images/tachos.jpg" >



<div class="col-md-4" id="fotoformulario">
<img src="images/74.jpg" >
</div>

<div class="col-md-6" id="formulariocontacto">
<h1 ><?php echo $textoc7 ?>  </h1><br>
<input type="text" placeholder='<?php echo $textoc8 ?> ' ></input><br><br>
<input type="text" placeholder='<?php echo $textoc9 ?> '  s></input><br><br>
<input type="text" placeholder='<?php echo $textoc10 ?>' ></input><br><br>
<input type="text" placeholder='<?php echo $textoc11 ?> '></input><br><br>
<input type="text" placeholder='<?php echo $textoc12 ?> 'class="mensaje" ></input><br><br>
<input type="submit" class ="submit" value='<?php echo $textoc13 ?> '  > </input>

</div>




<section id="porque" style="margin-bottom: 1350px;">

</section>









<section id="susten">
 <div id="su1" >
    <img src="images/78.jpg" >
</div>

 <div  id="su2" class="col-md-6" >
         <h1 > <?php echo $textoc14 ?> </h1>
            <p > <?php echo $textoc15 ?> </p>
             
                
</div>  




 <img src="images/trama3.jpg" id="trama3"  >



<div id="footer" class="col-md-5 "  style="background-color: #fff;margin-top: -265px;margin-left: 99px;height: 265px;width: 670px;z-index: 5;">
  <img src="images/logofooter.png" >
  <h3>2016 - Todos los derechos reservados // Web Design ODM Brandig</h3>
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



 <div class="col-md-4 " style="margin-top: -245px;margin-left: 335px;z-index: 5;">
          <h2  style="font-family:'Museo 500 Regular';font-size:25px;color: #A59965;">AMYRIS S.A</h1>
            <ul style="list-style:none;font-family:'Museo 500 Regular';color: #000;font-size: 20px;line-height: 40px;">
            <li> <i class="fa fa-map-marker">  Curapaligue 6510, Munro(1605)<br>pcia de BSAS</i></li>
              <li><i class="fa fa-envelope"> ventas@amiry.com.ar</i></li>
              <li><i class="fa fa-phone"> 5197-1918</i></li>
       
            </ul> 
                
</div>  





</section>






</body>


  
    <script src="template5/js/bootstrap.min.js"></script>
    <script src="template5/js/jquery.prettyPhoto.js"></script>
    <script src="template5/js/jquery.isotope.min.js"></script>
    <script src="template5/js/main.js"></script>
    <script src="template5/js/wow.min.js"></script>
    <script src="js/contacto.js"></script>


</body>
</html>