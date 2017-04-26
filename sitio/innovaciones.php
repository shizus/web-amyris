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

insertar_portada('portada-innovaciones', $textoin1, $textoin2);
;?>



<div class="banner-bottom" id="banner-bottom"></div>

<div id="crumble_quienes">
  <h3><?php echo $textoin3 ?></h3>

</div>




<div  class="col-md-12 col-sm-6 col-xs-12"> 
    <div id="botonrojo_quienes">
        <img src="images/nube.png" >
    </div>
</div>





<div id="botonrojo_inno">
<img src="images/nube.png" >

</div>

<div class="col-md-12 col-sm-6 col-xs-12"> 
  <h3 class="textoinno1"><?php echo $textoin4 ?></h3>
</div>




    <div id="botonrojo2_inno" class="wow fadeInUpBig animated " >
        <h2><?php echo $textoin5 ?></h2>

    </div>




<div id="frasco" >
       <div class="container">
         <img src="images/60.jpg" >
       </div>
</div>       



<section id="cuadrado">

  <div class="primero_cuadrado_inno " >
          <h4 ><?php echo $textoin6 ?> </h4>
  </div>

</section>



<div  id="linearojainno"></div>
<div id="columna_inno" class="col-md-4">
  <h2><?php echo $textoin7 ?></h2>
  <p><?php echo $textoin8 ?></p>

</div>



<div id="telescopio" >
<img  src="images/61.jpg"  >
</div>
  


  
      <div class="col-md-12">

           <div class="cuadrado_inno">
              <p> <?php echo $textoin9 ?></p>
              <h4><?php echo $textoin10 ?></h4>
          </div>
      </div>


 <div class="col-md-12" id="cuain1">

    <div class="cuadrado_inno_id">
          <h4 >I+D+I</h4>
      </div>
</div>




 <div class="col-md-12" id="cuain2" >

  <div class="cuadrado_inno_id2">
          <h4><?php echo $textoin11 ?> </h4>
           <p> <?php echo $textoin12 ?></p>
      </div>
</div> 


 <div class="col-md-12" id="cuain3" >
  <div class="cuadrado_inno_id3">
         
          <h4 > <?php echo $textoin13 ?></h4>
           <p><?php echo $textoin14 ?> </p>
      </div>
</div>






<div id="contenedortrescolumnas" >
    <div class="container">

        <div class="col-md-12 columna12">
           <h3>¿CÓMO TRABAJA NUESTRO DEPARTAMENTO I+D+I?</h3>
        </div>

        <div class="col-md-12 columna12">
            <img src="images/inno.png">
        </div>


        <div class="col-md-4 columna1" >
        <h2> <?php echo $textoin15 ?></h2>
          <p ><?php echo $textoin16 ?> </p>
        </div>

        <div class="col-md-4 columna2" >
        <h2> <?php echo $textoin17 ?></h2>
          <p> <?php echo $textoin18 ?></p>
        </div>

        <div class="col-md-4 columna3" >
        <h2 > <?php echo $textoin19 ?></h2><br>
          <p > <?php echo $textoin20 ?></p>
        </div>

     </div>
</div>



<div id="portfolio_expertise">
  
  <div class="col-md-4" id="imagenportfolio1_inno" >
 <img src="images/inn-4.jpg" >
  </div>



  <div class="col-md-4" id="imagenportfolio2_inno" >
 <img src="images/inn-5.jpg" >
  </div>




  <div class="col-md-4" id="imagenportfolio3_inno" >
 <img src="images/inn-6.jpg">
  </div>






</div>





<div id="trama33" >
<img src="images/trama4.jpg" >
</div>



 
 <div class="contacinno">
   <div class="container" >
    <img src="images/inn-7.jpg"  >
   </div> 
</div>





 <div class="col-md-12" id="su2" >

         <h1><?php echo $contacto2 ?></h1>
            <p> <?php echo $textoin21 ?> </p>
           <img src="images/42.png" >  
                
</div>  


<div id="prefooter">

  <?php  require 'footer.php';?>
  
</div>
















</body>
</html>