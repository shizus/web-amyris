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



<?php require_once 'portada.php';

insertar_portada('portada-expertise', $textoe1, $textoe2);
;?>





<div class="banner-bottom" id="banner-bottom"></div>
<div id="crumble_expertise">
  <h3><?php echo $textoe3 ?></h3>

</div>



<div  class="col-md-12 col-sm-6 col-xs-12"> 
    <div id="botonrojo_quienes">
        <img src="images/nube.png" >
    </div>
</div>



<div id="botonrojo_fragancias" >
<img src="images/nube.png" >
  <h3 id="textoexpertise"><?php echo $textoe4 ?></h3>
</div>


<div id="botonrojo2_expertise" class="col-md-12 col-sm-6 col-xs-12 wow fadeInUpBig animated " >
        <h2><?php echo $textoe5 ?></h2>

</div>




<section id="fragan">
         <div id="fragantit" >
                   
                      <img src="images/34.jpg" style="width: 100%;">

                    
         </div>
</section>  



  



<section id="cuadrado">

  <div class="primero_cuadrado_expertise">
    <h4 ><?php echo $expertise ?> </h4>
   </div>


</section>



<div id="columnas" >
    <div  id="linearojaexpertise"></div>

    <div class="col-md-6" id="columnaseis1" >
    <h1 ><?php echo $textoe6 ?></h1><br>
      <p id="textoe1"><?php echo $textoe7 ?></p><br>
    <p id="textoe11" ><?php echo $textoe8 ?></p><br>
    <p id="textoe2"><?php echo $textoe9 ?></p>
    </div>

    <div class="col-md-6" id="columnaseis2" >
      <p id="textoe3" ><?php echo $textoe10 ?></p><br><br><br>
    <p id="textoe4"><?php echo $textoe11 ?></p><br>
    <p id="textoe5" ><?php echo $textoe12 ?></p>

    </div>



</div>


<style>
  

</style>


<div class="segundo_cuadrado_expertise">
    <h4 > <?php echo $textoe13 ;?></h4>
   </div>





<div id="tramaexpertise">
 <img src="images/trama5.jpg"  >
<div class="col-md-12" id="textotrama1">
<p ><?php echo $textoe14?></p>
<p ><?php echo $textoe15?></p>
</div>


</div>


</div>





<div id="portfolio_expertise">
  
  <div class="col-md-4" id="imagenportfolio1" >
 <img src="images/c1.jpg" >
  </div>



  <div class="col-md-4" id="imagenportfolio2" >
 <img src="images/c2.jpg" >
  </div>




  <div class="col-md-4" id="imagenportfolio3" >
 <img src="images/c3.jpg">
  </div>




  <div class="col-md-4" id="imagenportfolio4" >
 <img src="images/c4.jpg" >
  </div>



  <div class="col-md-4" id="imagenportfolio5" >
<img src="images/c5.jpg" >
  </div>



  <div class="col-md-4" id="imagenportfolio6" >
 <img src="images/c6.jpg" >
  </div>



</div>






<div id="tramadebajoportfolio" > 
     <img src="images/trama3.jpg" >

</div>



   <h1  id="titulocontrol" ><?php echo $textoe19 ?></h1>

   <img src="images/47.jpg" style="width: 70%;margin-top: 60px;margin-left: 280px;">




<div  id="linearojaexpertiseinf"></div>
<div class="col-md-4" id="columnacontrol4" >
  <p><?php echo $textoe20 ?></p><br>

 <h1 ><?php echo $textoe21 ?></h1>

 <img src="images/lista.png" style="margin-left: -12%;">

</div>

<div class="col-md-5" id="columnacontrol5" >
<p  class="p0" ><?php echo $textoe255 ?></p><br>
<p  class="p1" ><?php echo $textoe22 ?></p><br>
<p   class="p2" ><?php echo $textoe23 ?></p><br>
<p   class="p2" ><?php echo $textoe25 ?></p>
</div>





<div id="mapa">
    <img class="imagen1" src="images/exp-10.jpg" >
    <img class="imagen2" src="images/mapa.png" >
</div>



<div class="col-md-12"  id="floresamarillas">
         <h1 ><?php echo $textoe26 ?></h1><br>
            <p class="textop1" ><?php echo $textoe27 ?></p><br>
              <p class="textop2"><?php echo $textoe28 ?></p>
                
</div> 



<div id="fotofinal" >
    <div class="container">
                        <div class="row" class="contenedorfloresamarillas"> 
<img src="images/48.jpg" >
                        </div>
    </div>                    

</div>


<section id="susten">


 <div class="col-md-6" id="susten6">
         <h1 ><?php echo $fragancias ?></h1>
            <p class="textopsusten1" ><?php echo $textoe29 ?>
            </p>

        <img src="images/42.png" >      
                
</div>  





</section>

<div id="prefooter" >

  <?php  require 'footer.php';?>
  
</div>




</body>
</html>