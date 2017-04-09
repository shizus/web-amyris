
<div id="contacto">
 <a href="contacto"> <span><?php echo $contacto ?></span></a>
</div>

<span class="ir-arriba"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
<div id="botonesarriba">
    <img class="nube"  src="images/40.png" id="right">
    <img class="cruz" src="images/41.png" id="left">
</div>


<div id="milogo"> 
    <a href="index">
    <img src="images/logo.png"  ></a>

</div>

<div class="overlay-navigation">
  <nav role="navigation">
    <ul>
      <li>

      <div id="menu1">
      		<a href="#"><?php echo $amyris ?></a>
      		<p id="rayita">_____</p>
		            <div id="sublista1">
		               <p><a   href="quienes-somos"><?php echo $quienes ?></a></p><br>
		                <p><a   href="quienes-somos"><?php echo $valores ?></a></p><br>
                        <p><a   href="quienes-somos"><?php echo $porque?></a></p>
		            </div>

		         
      </div>

      </li>
      <li>
      <div id="menu2">

           <a href="#" ><?php echo $fragancias ?></a>
           <p id="rayita">_____</p>
      			<div id="sublista1">
      			   <p><a   href="fragancias"><?php echo $fraganciasfinas ?></a></p><br>
		           <p><a  href="fragancias"><?php echo $cuidadopersonal ?></a></p><br>
               <p><a  href="fragancias"><?php echo $hogarylimpieza?></a></p>
      				
      			</div>

      </div>
      </li>

      <li>

      <div id="menu3">
      		<a href="#"><?php echo $expertise ?></a>
      			<p id="rayita">_____</p>
		            <div id="sublista1">
		                <p><a  href="expertise"><?php echo $desarrollo ?></a></p><br>
		                <p><a  href="expertise"><?php echo $infraestructura ?></a></p><br>
		                <p><a  href="expertise"><?php echo $control ?></a></p><br>
                    <p><a  href="expertise"><?php echo $comercio?></a></p>
		            </div>

		         
      </div>

      </li>
      <li>
      <div id="menu4">

      <a href="#" ><?php echo $sustentabilidad ?></a>
      <p id="rayita">_____</p>
      			<div id="sublista1">
      			        <p><a  href="sustentabilidad"><?php echo $proteccion ?></a></p><br>
		                <p><a  href="sustentabilidad"><?php echo $eficiencia ?></a></p><br>
                    <p><a  href="sustentabilidad"><?php echo $valoresm?></a></p>
      				
      			</div>

      </div>
      </li>

      <li>
      <div id="menu5" >

      <a href="#" ><?php echo $innovaciones ?></a>
      <p id="rayita">_____</p>
      			<div id="sublista1">
      			        <p><a href="innovaciones"><?php echo $departamento ?></a></p><br>
		                <p><a href="innovaciones"><?php echo $desarrollom ?></a></p><br>
                    <p><a  href="innovaciones"><?php echo $investigacion?></a></p>
      				
      			</div>

      </div>
      </li>






    </ul>
  </nav>
</div>


<section class="main">


       <div id="lista_arriba">
             <ul>
              <li><i class="fa fa-phone"></i></li>
              <li> <i class="fa fa-map-marker"></i></li>
              <li><i class="fa fa-envelope"> </i></li>
              
               <li>|</li>
               
      
            </ul> 
       </div>


<div class="open-overlay">
              
   <span class="bar-top"></span> 
   <span class="bar-middle"></span>
   <span class="bar-bottom"></span> </div>
</section>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script>


$(document).ready(function() {

  $('.ir-arriba').click(function(){
     $('body,html').animate({scrollTop : 0}, 500);
    return false;
  });

  $(window).scroll(function(){
    if ($(this).scrollTop() > 300) {
        $('.ir-arriba').fadeIn();
    } else {
        $('.ir-arriba').fadeOut();
    }
});
  
});



$('.open-overlay').click(function() {

  

  var overlay_navigation = $('.overlay-navigation'),
    nav_item_1 = $('nav li:nth-of-type(1)'),
    nav_item_2 = $('nav li:nth-of-type(2)'),
    nav_item_3 = $('nav li:nth-of-type(3)'),
    nav_item_4 = $('nav li:nth-of-type(4)'),
    nav_item_5 = $('nav li:nth-of-type(5)'),
    top_bar = $('.bar-top'),
    middle_bar = $('.bar-middle'),
    bottom_bar = $('.bar-bottom');

  overlay_navigation.toggleClass('overlay-active');
  if (overlay_navigation.hasClass('overlay-active')) {
        $('#right').hide();
   $('#left').show();

      $("#contacto").show();
       $("#contacto").css({ 'z-index': "103" }); 
      $( "#contacto" ).animate({ "margin-top": "45%" } ,1000);

    top_bar.removeClass('animate-out-top-bar').addClass('animate-top-bar');
    middle_bar.removeClass('animate-out-middle-bar').addClass('animate-middle-bar');
    bottom_bar.removeClass('animate-out-bottom-bar').addClass('animate-bottom-bar');
    overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
    nav_item_1.removeClass('slide-in-nav-item-reverse').addClass('slide-in-nav-item');
    nav_item_2.removeClass('slide-in-nav-item-delay-1-reverse').addClass('slide-in-nav-item-delay-1');
    nav_item_3.removeClass('slide-in-nav-item-delay-2-reverse').addClass('slide-in-nav-item-delay-2');
    nav_item_4.removeClass('slide-in-nav-item-delay-3-reverse').addClass('slide-in-nav-item-delay-3');
    nav_item_5.removeClass('slide-in-nav-item-delay-4-reverse').addClass('slide-in-nav-item-delay-4');
  } else {


    top_bar.removeClass('animate-top-bar').addClass('animate-out-top-bar');
    middle_bar.removeClass('animate-middle-bar').addClass('animate-out-middle-bar');
    bottom_bar.removeClass('animate-bottom-bar').addClass('animate-out-bottom-bar');
    overlay_navigation.removeClass('overlay-slide-down').addClass('overlay-slide-up')
    nav_item_1.removeClass('slide-in-nav-item').addClass('slide-in-nav-item-reverse');
    nav_item_2.removeClass('slide-in-nav-item-delay-1').addClass('slide-in-nav-item-delay-1-reverse');
    nav_item_3.removeClass('slide-in-nav-item-delay-2').addClass('slide-in-nav-item-delay-2-reverse');
    nav_item_4.removeClass('slide-in-nav-item-delay-3').addClass('slide-in-nav-item-delay-3-reverse');
    nav_item_5.removeClass('slide-in-nav-item-delay-4').addClass('slide-in-nav-item-delay-4-reverse');
  }
})

$( "#right" ).click(function() {

    $('.open-overlay').click();
$("#contacto").show();
$( "#contacto" ).animate({ "margin-top": "45%" } ,1000);
   
  $('#right').hide();

   $('#left').show();


  
});

/*      botn para cerrar el menu*/

$( "#left" ).click(function(){

$('#right').show();
$('#left').hide();
      $("#contacto").hide();
      $( "#contacto" ).animate({ "margin-top": "4270px" } ,1000);
$('.open-overlay').click();


});




</script>