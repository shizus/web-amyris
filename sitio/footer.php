<?php
require_once 'requirelanguage.php';

function footer($containerId, $fotoContainerId, $titulo, $texto, $link="#") {
    
    global $amyris, $fragancias, $expertise, $sustentabilidad, $innovaciones, $contacto2;
    
    echo "
    <div class='container' id='$containerId'>
    
        <div class='row'>
            <div class='col-md-12 col-sm-6 col-xs-12 text-center foto-footer-container' id='$fotoContainerId' data-wow-delay='0.2s'>
                    <a href='$link'>
                    <div class='row'>
                        <div id='footer-text-container' class='col-md-6 intro-pic wow animated fadeInDown'>
                            <h1 class='animation animated-item-1'>$titulo</h1>
                            <p>$texto</p>
                            <p>
                                <img alt='Imagen cargando' class='footer-nube' src='images/42.png'>
                            </p>
                        </div>
                    </div>
                    </a>
            </div>
        </div>
    </div>
    
    <footer id='footer'>
    <div class='container'>
    
          <div class='row'>
            <div class='col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0'>
                <div class='row fondo-blanco'>
                    <div class='col-md-5'>
                        <img alt='Imagen cargando' id='logo-footer' src='images/logofooter.png'>
                    </div>
                    <div class='col-md-7 letra-negra'>
                        <div class='row'>
                            <div class='col-md-12'>
                            <h2>AMYRIS S.A.</h2>
                            </div>
                        </div>
                        <div class='row dato-footer'>
                            <div class='col-md-1'>
                                <i class='fa fa-map-marker '></i>
                            </div>
                            <div class='col-md-11'>
                                Cajaraville 2902 y/o Curapaligue 6510, Munro (1605), Pcia de Bs. As.
                            </div>
                        </div>
                        <div class='row dato-footer'>
                            <div class='col-md-1'>
                                <i class='fa fa-envelope'></i>
                            </div>
                            <div class='col-md-11'>
                                <a href='mailto:ventas@amyris.com.ar' class='letra-negra'>ventas@amyris.com.ar</a>
                            </div>
                        </div>
                        <div class='row dato-footer'>
                            <div class='col-md-1'>
                                <i class='fa fa-phone'></i>
                            </div>
                            <div class='col-md-11'>
                                54 11 5197-1918
                            </div>
                        </div>

                    </div>
                    <div class='col-md-10 col-md-offset-1'>
                        <h6 >2017 - Todos los derechos reservados //
                            <a href='odmbranding.com' target='_blank' class='footer-link'>Web Design ODM Branding</a></h6>
                    </div>
                </div>
            </div>
            <div class='col-md-2' id='lista-afuera' >
              <ul>
                  <li><a href='quienes-somos'> $amyris </a></li>
                  <li><a href='fragancias'>$fragancias</a></li>
                  <li>  <a href='expertise'> $expertise </a></li>
                  <li><a href='sustentabilidad'> $sustentabilidad </a></li>
                  <li><a href='innovaciones'> $innovaciones </a></li>
                  <li><a href='contacto'> $contacto2 </a></li>
         
              </ul>
            </div>
        </div>
    </div>
</footer>
    ";
}
?>


<!-- Main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Twitter Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Google Map API -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyhHMjogLdqX4qOItPagUypToqDY_17pE&callback=initMap">
</script>