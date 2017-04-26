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

<script>
  $(document).ready(function () {
    // READ recods on page load
   $("#contacto").css("display", "none");
});

</script>

<?php require_once 'portada.php';

insertar_portada('portada-contacto', $textoc1, $textoc2);
;?>


<div id="crumble_contacto">
  <h3> <?php echo $textoc3 ?></h3>

</div>



<div class="banner-bottom" id="banner-bottom"></div>

<div  class="col-md-12 col-sm-6 col-xs-12"> 
    <div id="botonrojo_quienes">
        <img src="images/nube.png" >
    </div>
</div>



<div  class="col-md-12 col-sm-6 col-xs-12"> 

    <div id="botonrojo2_fragancias">
    <h4><?php echo $textoc4 ?> </h4>

    </div>
</div>



<div  class="col-md-12 col-sm-6 col-xs-12" id="columna12_conta" > 

<div id="info" >
<h1> <?php echo $textoc5 ?></h1><br><br>
</div>

</div>


<iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.7829180079!2d-58.54074308525398!3d-34.533727480477665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0b0c0e97daf%3A0xe8b41b2ee25398e2!2sCap.+Cajaraville+2902%2C+Carapachay%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1474596618448" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>






<div  class="col-md-12 col-sm-6 col-xs-12">
  <div class="primero_cuadrado_contacto " >
      <div class="segundo_cuadrado_contacto"  >
          <h2 ><?php echo $textoc6 ?> </h2>
          <p >Cajaraville 2902 y/o Curapaligue 6510,<br> Munro (1605) Pcia. de Bs. As<br> 54 11 5197-1918<br> ventas@amyris.com.ar</p>
      </div>
  </div>
</div>




<div id="fototachos" >
  <img class="tachos" src="images/cont-3.jpg" >
</div>


<div  class="col-md-12 col-sm-6 col-xs-12" id="fotocontacto" >
  <div class="container">
  <div  class="col-md-6 col-sm-6 col-xs-6" id="columna6conta" >
      <img src="images/cont-4.jpg">
  </div>

  <div  class="col-md-6 col-sm-6 col-xs-6" id="formulariocontacto" >

        <h1 ><?php echo $textoc7 ?>  </h1><br>
      <div id="campos" >
        <input type="text" id="texto0" placeholder='<?php echo $textoc8 ?> '></input><br><br>
        <input type="text" id="texto1" placeholder='<?php echo $textoc9 ?> '></input><br><br>
        <input type="text" id="texto2" placeholder='<?php echo $textoc10 ?>'></input><br><br>
        <input type="text" id="texto3" placeholder='<?php echo $textoc11 ?> '></input><br><br>
        <input type="text" id="texto4" placeholder='<?php echo $textoc12 ?> ' class="mensaje" ></input><br><br>
        <input type="submit" class ="submit" value='<?php echo $textoc13 ?> '  > </input>
      </div>
  </div>
  </div>
</div>





<section id="susten_conta" >
  <div id="su1" >
        <div class="container">
           <img src="images/78.jpg"  >
        </div>
  </div>

  <div  id="su2_cont" class="col-md-6" >
           <h1 > <?php echo $textoc14 ?> </h1>
           <p > <?php echo $textoc15 ?> </p>
       <img src="images/42.png" > 
  </div>  


  <div id="prefooter_cont" >
    <?php  require 'footer.php';?>    
  </div>
</section>




</body>
</html>