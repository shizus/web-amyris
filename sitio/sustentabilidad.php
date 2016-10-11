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
    <link href="css/estilo_sustentabilidad.css" rel="stylesheet">


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

             <!--      <script src="js/jquery.min.js"></script>     problematicoo 33 KB -->   


<script>


setTimeout(function () {
    $('.primero').show()}, 3500
);
</script>


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




  <a href="index"><img src="images/logo.png" style="position: absolute;z-index: 44;"></a>
   <ul style="list-style:none;color: #fff;font-size: 20px;line-height: 40px;letter-spacing: 20px;
      display: inline-flex;position: absolute;z-index: 2;margin-left: 1020px;margin-top: 53px;">
             <li><i class="fa fa-phone"></i></li>
              <li> <i class="fa fa-map-marker"></i></li>
              <li><i class="fa fa-envelope"> </i></li>
              
               <li>|</li>
               <li><i class="fa fa-bars"id="rayas" ></i></li>
      
            </ul> 


<!--
  <a href="changelanguage.php?language=es"><img src="img/es.png" style="position: absolute;z-index: 30;margin-top: 60px; margin-left: 1260px;"></a>
 <a href="changelanguage.php?language=en"><img src="img/en.png" style="position: absolute;z-index: 30;margin-top: 60px; margin-left: 1290px;"></a>
-->


<section id="main-slider" class="no-margin">
        <div class="carousel slide">
          
            <div class="carousel-inner">






                <div class="item active" style="background-image: url(template5/images/slider/66.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                <h4 class="animation animated-item-1 titulo1" style="font-weight:normal;font-size:22px;color:#FFF;text-align: center;margin-left: 270px;text-align: right;width: 540px;"><?php echo $textos1 ?></h4>


                                      <h1 class="animation animated-item-2 titulo2" style="font-family:'Museo 500 Regular';font-weight:normal;font-size:50px; text-align: center;margin-right: 160px;margin-top: 50px; "><?php echo $textos2 ?></h1>
                                    
                                  
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
  <h3><?php echo $textos3 ?><?php echo $textos33 ?><?php echo $textos333 ?></h3>

</div>







<div id="botonrojo_quienes" >
<img src="images/nube.png" style="width: 70px;margin-top: -26px;margin-left: -21px;">
  <h3><?php echo $textos4 ?></h3>
</div>




<div id="botonrojo2_sus" class="wow fadeInUpBig animated " style="visibility: visible; animation-name: fadeInUpBig;">
<h2><?php echo $textos5 ?></h2>

</div>



<div id="contacto" >
<a href="contacto">  <span><?php echo $contacto ?></span></a>
</div>




<div>
  <img src="images/67.jpg" style="width: 70%;margin-top: 180px;">
</div>


<section id="cuadrado">

  <div class="primero_cuadrado_sus " >
  
          <h4 style="font-family:'Museo 500 Regular';font-weight:normal;"><?php echo $textos6 ?></h4>
 
  </div>





</section>
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="col-md-4" style="position: relative;margin-left: 40px;">
<h2 style="font-family:'Museo 500 Regular';font-weight:normal;color:#A59965;font-size: 18px;line-height: 25px;"><?php echo $textos7 ?></h2>
  <p style="text-align: justify;font-family:'Futura';font-size: 15px;"><?php echo $textos8 ?></p><br>
<h2 style="font-family:'Museo 500 Regular';font-weight:normal;color:#A59965;font-size: 18px;line-height: 25px;"><?php echo $textos9 ?></h2>
<p style="text-align: justify;font-family:'Futura';font-size: 15px;"> <?php echo $textos10 ?></p><br>

</div>

<div class="col-md-4" style="position: relative;margin-top: -130px;width: 438px;margin-left: 50px;">
  <p style="background-color:#A59965;font-family:'Museo 500 Regular';font-weight:normal;font-size: 19px;line-height: 35px;color:#fff;padding: 35px;"><?php echo $textos11 ?></p><br>
<p style="text-align: justify;font-family:'Futura';font-size: 15px;"> <?php echo $textos12 ?></p><br>
<p style="text-align: justify;font-family:'Futura';font-size: 15px;"> <?php echo $textos13 ?></p>
<p style="font-family:'Museo 500 Regular';font-weight:normal;color:#A59965;font-size: 16px;line-height: 25px;text-align: justify;"><?php echo $textos14 ?> </p>

</div>


<section id="susten">
 <div class=" cuarto" style="visibility: visible; animation-name: zoomIn;">

    <img src="images/68.jpg" style="width: 115%;margin-left: -89px;margin-top: 105px;">


</div>


 <div class="segundo_cuadrado_sus " >
  
          <h4 style="font-family:'Museo 500 Regular';font-weight:normal;"><?php echo $textos15 ?>  </h4>
 
  </div>



 <div class="col-md-5 " style="height: 170px;width: 650px; margin-top: -80px;margin-left: 270px;background-color:#D1BE89;">
         <h1 style="font-family:'Museo 500 Regular';font-weight:normal;font-size:21px;text-align: center;color: #FFF;line-height: 30px;"><?php echo $textos16 ?> </h1>
        
                   
</div>  


 


<div  class="col-md-12" id="porque" style="margin-top: 160px;">

<div id="fondoblanco" style="border: solid;border-width: 2px;  border-color: #D1BE89; height: 740px;background-color: rgba(255, 255, 255, 0.78);">

          <div class="col-md-4" style="">
          <br>
                 <h1  style="font-family:'Museo 500 Regular';font-weight:normal;font-size:28px;text-align: right;color:red;"> <?php echo $textos17 ?></h1>
                  <p style="font-family:'Futura';font-size: 15px;color: #000;line-height: 17px;text-align: right;width: 283px;margin-left: 75px;"> <?php echo $textos18 ?> </p>


                     <h1  style="font-family:'Museo 500 Regular';font-weight:normal;font-size:28px;text-align: right;color:red;"> <?php echo $textos19 ?></h1>
                  <p style="text-align: left;color: #000;font-family:'Futura';font-size: 15px;line-height: 17px;text-align: right;width: 283px;margin-left: 75px"> <?php echo $textos20 ?> </p>

         <h1  style="font-family:'Museo 500 Regular';font-weight:normal;font-size:28px;text-align: right;color:red;"> <?php echo $textos21 ?> </h1>
                  <p style="text-align: left;color: #000;ffont-family:'Futura';font-size: 15px;line-height: 17px;text-align: right;width: 283px;margin-left: 75px"> <?php echo $textos22 ?> </p>


          </div>

        <div class="col-md-3" style="">
          <img src="images/susten.png" style="margin-top: 20px;margin-left: 22px;">

        </div>


      <div class="col-md-4" style="margin-left: -40px;">
      <br><br><br><br><br><br>
           <h1  style="font-family:'Museo 500 Regular';font-weight:normal;font-size:28px;text-align: left;color:red;">  <?php echo $textos23 ?> </h1>
                  <p style="text-align: left;color: #000;font-family:'Futura';font-size: 15px;line-height: 17px;text-align: left;width: 283px;"> <?php echo $textos24 ?> </p>

      <br>
                     <h1  style="font-family:'Museo 500 Regular';font-weight:normal;font-size:28px;text-align: left;color:red;"> <?php echo $textos25 ?></h1>
                  <p style="text-align: left;color: #000;font-family:'Futura';font-size: 15px;line-height: 17px;text-align: left;width: 283px;"><?php echo $textos26 ?> </p>
      </div>

</div>


</div>



<img src="images/69.jpg" style="margin-left: -90px;width: 115%;margin-top: -55px;">


<div id="susten" style="position: absolute;margin-top: 580px;">
 <div style="visibility: visible; animation-name: zoomIn;">

    <img src="images/37.jpg" style="width: 100%;margin-left: -22px;margin-top: -480px;position: relative;">


</div>

 <div class="col-md-5" style="margin-top: -765px;margin-left: 35px;">
         <h1 style="font-family:'Museo 500 Regular';font-weight:normal;font-size:60px;text-align: center;color: #fff;"><?php echo $textos27 ?> </h1>
            <p style="text-align: left;color: #fff;font-size: 21px;line-height: 28px;"> <?php echo $textos28 ?> </p>
             
                
</div>  




 <img src="images/trama3.jpg" id="trama3" style="width: 1350px;margin-left: -91px;margin-top: -189px;" >



<div  class="col-md-5 " style="background-color: #fff;margin-top: -264px;margin-left: 99px;height: 265px;width: 670px;z-index: 5;">
  <img src="images/logofooter.png" style="width: 200px;margin-top: 50px;">
  <h3 style="color: #A59965;font-size: 15px;margin-top: 40px;">2016 - Todos los derechos reservados // Web Design ODM Brandig</h3>
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





</div>






</body>




    <script>


// boton flor 

$( "#right" ).click(function() {

$('#show-me').css('visibility', 'visible')
.animate({opacity: 1.0, right: '100px'}, 2000);



$('#show-me2').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);


$('#show-me3').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);

$('#show-me4').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);

$('#show-me5').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);


$("#contacto").show();
$( "#contacto" ).animate({ "margin-top": "-670px" } ,1000);
   
$( "#menu1" ).animate({ "margin-top": "-10px" } ,500);
$( "#menu2" ).animate({ "margin-top": "-10px" } ,700);
$( "#menu3" ).animate({ "margin-top": "-10px" } ,900);
$( "#menu4" ).animate({ "margin-top": "-10px" } ,1100);
$( "#menu5" ).animate({ "margin-top": "-10px" } ,1300);

  $('#right').hide();
  $('#left').show();

$("body").css("overflow", "hidden");
  
});


 

$( "#rayas" ).click(function() {

$('#show-me').css('visibility', 'visible')
.animate({opacity: 1.0, right: '100px'}, 2000);



$('#show-me2').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);


$('#show-me3').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);

$('#show-me4').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);

$('#show-me5').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);


   
$( "#menu1" ).animate({ "margin-top": "-10px" } ,500);


$("#contacto").show();
$( "#contacto" ).animate({ "margin-top": "-670px" } ,1000);


$( "#menu2" ).animate({ "margin-top": "-10px" } ,700);
$( "#menu3" ).animate({ "margin-top": "-10px" } ,900);
$( "#menu4" ).animate({ "margin-top": "-10px" } ,1100);
$( "#menu5" ).animate({ "margin-top": "-10px" } ,1300);

  $('#right').hide();
  $('#rayas').hide();
  
  $('#left').show();
  $("body").css("overflow", "hidden");
  
});




/*      botn para cerrar el menu*/

$( "#left" ).click(function(){


$( "#menu1" ).animate({ "margin-top": "-770px" } ,1300);
$( "#menu2" ).animate({ "margin-top": "-770px" } ,1100);
$( "#menu3" ).animate({ "margin-top": "-770px" } ,900);
$( "#menu4" ).animate({ "margin-top": "-770px" } ,700);
$( "#menu5" ).animate({ "margin-top": "-770px" } ,500);


$( "#contacto" ).animate({ "margin-top": "2564px" } ,1000);
$("#contacto").hide();



$('#show-me').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");

$('#show-me2').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");

$('#show-me3').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");

$('#show-me4').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");

$('#show-me5').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");



   $('#right').show();
   $('#myCarousel').show();
   $('#rayas').show();
   
   $('#left').hide();
$("body").css("overflow", "auto");

});
</script>



















  
    <script src="template5/js/bootstrap.min.js"></script>
    <script src="template5/js/jquery.prettyPhoto.js"></script>
    <script src="template5/js/jquery.isotope.min.js"></script>
    <script src="template5/js/main.js"></script>
    <script src="template5/js/wow.min.js"></script>

</body>
</html>