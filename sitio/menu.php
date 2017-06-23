
<?php require 'menu-desplegable.php';
require_once 'requirelanguage.php'; ?>


<span class="ir-arriba"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
<div id="botonesarriba">
    <img class="nube"  src="images/40.png" id="right">
    <img class="cruz" src="images/41.png" id="left">
</div>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-normal">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="images/logo.png"  ></a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                         <a href="select-lenguage.php?lang=en">EN</a>
                </li>
                <li class="left-division">
                    <a href="select-lenguage.php?lang=es">ES</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#telefono-modal">
                        <i class="fa fa-phone"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#ubicacion-modal" onclick="refreshMap()">
                        <i class="fa fa-map-marker"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#contacto-modal">
                        <i class="fa fa-envelope"> </i>
                    </a>
                </li>
                <li class="left-division">
                    <a>
                        <i id="menu-icon" class="fa fa-bars bold"></i>
                        <i id="close-icon" class="fa fa-close" style="display: none;"></i>
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Modal Contacto-->
<div class="modal right fade" id="contacto-modal" tabindex="-1" role="dialog" aria-labelledby="contacto-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class="modal-header">
                <h4 class="modal-title"><?php echo $formulario_conocernos ?></h4>
                <h4 class="modal-title"><?php echo $formulario_tusdatos ?></h4>
            </div>

            <div class="modal-body">
                <form id="modal-mail">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder=<?php echo $formulario_camponombre ?>>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder=<?php echo $formulario_campoemail ?>>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="telefono" placeholder=<?php echo $formulario_campotelefono ?>>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="empresa" placeholder=<?php echo $formulario_campoempresa ?>>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="mensaje" placeholder=<?php echo $formulario_campomensaje ?>></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo $formulario_datosobligatorios ?></label>
                        <button type="submit" class="btn btn-default float-right"><?php echo  $formulario_botonenviar ?></button>
                    </div>
                    <div class="form-group" id="mensaje-error" style="display: none">
                        <label class="alert alert-danger"></label>
                    </div>

                </form>
                <div class="mensaje-exito-mail" style="display: none;">
                    <h1><?php echo $formulario_mensajeenviado ?></h1>
                    <h1><?php echo $formulario_mensajegracias ?></h1>
                    <br>
                    <h1><?php echo $formulario_mensajecontacto ?></h1>
                </div>
            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
<!-- Modal Teléfono-->
<div class="modal right fade" id="telefono-modal" tabindex="-1" role="dialog" aria-labelledby="telefono-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class="modal-header">
                <h4 class="modal-title"><?php echo $formulario_telefonoescucharte ?></h4>
            </div>

            <div class="modal-body">
                <p><?php echo $formulario_telefonoconsulta ?></p>
                <p><?php echo $formulario_telefonosugerencia ?></p>
                <p><?php echo $formulario_telefonocontarnos ?></p>
                <br>
                <p><?php echo $formulario_telefononecesidades ?>
                    
                </p>
                <br>
                <p><?php echo $formulario_telefonollamanos ?>
                   
                </p>
                <br>
                <a href="tel:(5411)5197-1918">(54 11) 5197-1918</a><br>
                <a href="tel:(5411)5197-1920">(54 11) 5197-1920</a><br>
                <a href="tel:(5411)5197-1932">(54 11) 5197-1932</a><br>
            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- Modal Ubicación-->
<div class="modal right fade" id="ubicacion-modal" tabindex="-1" role="dialog" aria-labelledby="ubicacion-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class="modal-header">
                <h4 class="modal-title"><?php echo $formulariomapa_donde ?></h4>
            </div>

            <div class="modal-body">
                <p><?php echo $formulariomapa_ubicacion ?>
                </p>
                <br>
                <div class="map-container">
                    <div id="map"></div>
                </div>

            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
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
});

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

<script type="text/javascript" src="js/menu.js"></script>