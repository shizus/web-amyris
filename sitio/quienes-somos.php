<?php 
session_start();
require 'requirelanguage.php';
require 'header.php';

?>
<?php  require 'menu.php';?>

<body>



  <script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script><!-- start-smoth-scrolling -->





<div id="portada" >
     <img src="img/slider/16.jpg" >
</div>      

<div class="col-md-12 col-sm-6 col-xs-12 text-center ">
            <h4 class="animation animated-item-1 titulo1_quienes"><?php echo $texto1 ?></h4>

            <h1 class="animation animated-item-2 titulo2_quienes" ><?php echo $texto2 ?></h1>

            <div class="arrow text-center" style="    position: relative; margin-top: 10%;"><a class="scroll" href="#banner-bottom"><img alt="" src="images/scroll.png" /></a></div>


                               
 </div>



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


<div class="banner-bottom" id="banner-bottom"></div>



<div id="crumble_quienes">
  <h3><?php echo $texto3 ?></h3>
</div>





<div  class="col-md-12 col-sm-6 col-xs-12"> 
    <div id="botonrojo_quienes">
        <img src="images/nube.png" >
    </div>
</div>

<div  class="col-md-12 col-sm-6 col-xs-12" id="textoquienes"> 

    <h3><?php echo $texto35 ?></h3>
</div>


<div id="botonrojo2_quienes" class="col-md-12 col-sm-6 col-xs-12 wow fadeInUpBig animated " >
        <h2><?php echo $texto4 ?></h2>

</div>



<div id="imagensus">
  <img src="images/sust-5.jpg" >
</div>




<section id="cuadrado">
  <div class="primero_cuadrado_quienes " >
          <h4><?php echo $texto5 ?></h4>
  </div>





</section>
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="col-md-4 " id="columnaderecha" >
 <p><?php echo $texto6 ?> </p><br>
  <p ><?php echo $texto7 ?></p><br>
<p class="destacado"><?php echo $texto8 ?></p>
</div>


<div class="col-md-4" id="columnaizquierda">
    <div  id="linearoja"></div>

  <p class="cuadrodestacado"><?php echo $texto9 ?></p><br>
<p ><?php echo $texto10 ?></p><br>
<p><?php echo $texto11 ?></p>

</div>

<img src="images/14.jpg" style="width: 100%;height: 800px;margin-top: 10%;"> 

 <div class="segundo_cuadrado_quienes " >
          <h4><?php echo $texto12 ?> </h4>
  </div>

 <div class="col-md-5 " id="columna5">
         <h1 ><?php echo $texto13 ?></h1>
         <p><?php echo $texto14 ?></p>
          <h1 class="titulocolumna5destacado"><?php echo $texto15 ?></h1>
         <p class="titulocolumna5destacadop" ><?php echo $texto16 ?></p>
         <h1  class="titulocolumna5destacado"><?php echo $texto17 ?></h1>
         <p class="titulocolumna5destacadop"><?php echo $texto18 ?> </p>



                
</div>  




<div id="tramapordebajo">

 <img src="images/trama2.jpg"  >

</div>


<section id="porqueamir" >
<h1 class="por1" ><?php echo $texto21 ?></h1>
  <p class="porp"><?php echo $texto22 ?></p>




<div class="col-md-12" id="tituloarriba" >
  <h1><?php echo $texto27 ?></h1>
   <p><?php echo $texto28 ?></p>
      <img src="images/pilares.png">
</div>



    <div class="col-md-4" id="titulocostadoizquierdo">
      <br>
      <h1><?php echo $texto25 ?></h1>
      <p><?php echo $texto26 ?></p>

    </div>


    <div class="col-md-4" id="titulocostadoderecho" >
    <br>
     <h1><?php echo $texto23 ?></h1>
     <p><?php echo $texto24 ?></p>

    </div>



<div class="col-md-12" id="tituloabajo" >
  <h1><?php echo $texto29 ?></h1>
   <p><?php echo $texto30 ?></p>

  <img src="images/pilares2.png">

</div>



    <div class="col-md-4" id="titulocostadoizquierdoabajo">
     <br>
      <p><?php echo $texto266 ?></p>

    </div>


    <div class="col-md-4" id="titulocostadoderechobajo">
    <br>
      <p><?php echo $texto244 ?></p>
    </div>

    <div class="col-md-12" id="tituloabajoabajo" >
                <p ><?php echo $texto300 ?></p>
    </div>





</section>




<section id="susten">
         <div id="sustenido" >
                    <div class="container">
                        <div class="row">
                           <img src="images/15.jpg" >
                      </div>
                    </div>
                     <div class="col-md-5" id="susten5" >
                             <h1 ><?php echo $texto33 ?></h1>
                             <p><?php echo $texto34 ?> </p>
                    </div>  
        </div>

</section>


<div id="prefooter" >

  <?php  require 'footer.php';?>
  
</div>



</body>
