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





<?php
    require_once 'portada.php';
    insertar_portada('portada-quienes-somos', $texto1, $texto2);
;?>

<?php
    require_once 'breadcrumbs.php';
    insertar_breadcrumbs($texto3);
?>




  <?php
  require_once "servicio.php";
  insertar_servicio($texto35, $texto4);
  ?>


  
  <div class="row">
      <div class="col-md-8 col-md-offset-3 col-sm-12 col-sm-offset-0" id="imagensus">
              <div class="primero_cuadrado_quienes">
                  <h4><?php echo $texto5 ?></h4>
              </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-5 col-md-offset-1 col-sm-12 col-sm-offset-0 quienes-somos-izquierda">
          <p class="cuadrodestacado"><?php echo $texto9 ?></p><br>
          <p><?php echo $texto10 ?></p><br>
          <p><?php echo $texto11 ?></p>
      </div>
      <div class="col-md-5 col-sm-12 quienes-somos-derecha">
              <p><?php echo $texto6 ?> </p><br>
              <p ><?php echo $texto7 ?></p><br>
              <p class="destacado"><?php echo $texto8 ?></p>
      </div>
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
