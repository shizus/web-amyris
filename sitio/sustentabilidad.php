<?php 
session_start();
require 'requirelanguage.php';
require 'header.php';

?>
<?php  require 'menu.php';?>








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



<body>


<script>
  $(document).ready(function () {
    // READ recods on page load
   $("#contacto").css("display", "none");
});

</script>





  <script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script><!-- start-smoth-scrolling -->




<div id="portada" >
     <img src="img/slider/66.jpg" >
</div>   

<div class="col-md-12 col-sm-6 col-xs-12 text-center" id="titulosusten" >
            <h4 class="animation animated-item-1 titulo1_susten"><?php echo $textos1 ?></h4>

            <h1 class="animation animated-item-2 titulo2_susten" ><?php echo $textos2 ?></h1>
                 <div class="arrow text-center" style="    position: relative; margin-top: 10%;"><a class="scroll" href="#banner-bottom"><img alt="" src="images/scroll.png" /></a></div>
                               
 </div>


<div class="banner-bottom" id="banner-bottom"></div>


<div id="crumble_quienes">
  <h3><?php echo $textos3 ?>
  <?php echo $textos33 ?>
  <?php echo $textos333 ?></h3>

</div>




<div  class="col-md-12 col-sm-6 col-xs-12"> 
    <div id="botonrojo_quienes">
        <img src="images/nube.png" >
    </div>
</div>




<div id="botonrojo_fragancias" >
<img src="images/nube.png" id="imagenbotonrojo" >
  <h3 id="textosusten"><?php echo $textos4 ?></h3>
</div>


<div id="botonrojo2_susten" class="col-md-12 col-sm-6 col-xs-12 wow fadeInUpBig animated " >
        <h2><?php echo $textos5 ?></h2>

</div>



<div id="imagenrosa" >
       <div class="container">

          <img src="images/67b.jpg">

          </div>
</div>


<section id="cuadrado">

  <div class="primero_cuadrado_sus " >
       <h4 ><?php echo $textos6 ?></h4>
  </div>

</section>



<section id="columnas2">


<div class="col-md-4" id="esquinaizquierdas"  >
<h2 ><?php echo $textos7 ?></h2>
  <p class="ptexto1"><?php echo $textos8 ?></p><br>
  <p class="ptexto1"><?php echo $textos88 ?></p><br>
<h2 ><?php echo $textos9 ?></h2>
<p class="ptexto2"> <?php echo $textos10 ?></p><br>

</div>

<div  id="linearojasus"></div>
<div class="col-md-4" id="esquinaderechas">
  <p class="ezquinaderecha1" ><?php echo $textos11 ?></p><br>
  <p class="ezquinaderecha2" > <?php echo $textos12 ?></p><br>
  <p class="ezquinaderecha3" > <?php echo $textos13 ?></p><br>
  <p class="ezquinaderecha4" ><?php echo $textos14 ?> </p>
</div>
<div  id="linearojasusinferior"></div>
</section>




<section id="susten">
  
 <div class=" cuarto" >

    <img src="images/44b.jpg" style="width: 100%;margin-top: 5%;">


</div>

 <div class="segundo_cuadrado_sus col-md-12 " >
         <h4><?php echo $textos15 ?>  </h4>
</div>



 <div class="col-md-12 " id="columnadocesusten" >
         <h1 ><?php echo $textos16 ?> </h1>
		 <br><br>
         <img id="corchete" src="images/corchete.png" >
</div>  


<div class="container">

<div  class="col-md-12" id="porque" >



          <div class="col-md-4 porquecolumna4">
          <br>
		  <br>
                 <h1> <?php echo $textos17 ?></h1>
                  <p  id="textcols1"> <?php echo $textos18 ?> </p>
				  <br>


                     <h1> <?php echo $textos19 ?></h1>
                  <p id="textcols2" > <?php echo $textos20 ?> </p>

    


          </div>

        <div class="col-md-3"  id="sustencolumna3" style="">
          <img src="images/susten.png" >
        </div>


      <div class="col-md-4" id="sustencolumna4" >
      <br><br><br><br><br><br>
           <h1><?php echo $textos23 ?> </h1>
                  <p id="textcols3"> <?php echo $textos24 ?> </p>
      </div>

</div>


</div>


<div id="imagensfinalsusten">
<img src="images/69.jpg" >
</div>



<div id="sustenfinal" >
       <div class="divsusten" >
              <div class="container">
                  <img src="images/27.jpg" >


                     <div class="col-md-12 columnadoce"   >
                             <h1 ><?php echo $textos27 ?> </h1>
                                <p > <?php echo $textos28 ?> </p>
                                 
                                    
                    </div>  


              </div>


      </div>



</div>




<div id="prefooter" >

  <?php  require 'footer.php';?>
  
</div>




</body>
</html>