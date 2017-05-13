<?php
function insertar_portada($clase_portada, $titulo, $subtitulo) {
    echo
    "<div id='portada' class='row $clase_portada portada'>
        <div >
        <div class='col-md-12 col-sm-6 col-xs-12 text-center wow animated fadeInDown hide-until-dom-ready'>
                <h4 class='animation animated-item-1 titulo_portada'>$titulo</h4>
        
                <h1 class='animation animated-item-2 subtitulo_portada'>$subtitulo</h1>
        </div>
        <div class='arrow text-center nube-scroll hide-until-dom-ready' style='visibility: hidden'>
            <a class='scroll wow animated fadeInDown' href='#bredcrumbs-container'>
                <img alt='' src='img/icono-scroll.png'/></a>
        </div>
        </div>
    </div> ";
}

  