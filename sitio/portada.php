<?php
function insertar_portada($clase_portada, $titulo, $subtitulo) {
    echo
    "<div id='portada' class='row $clase_portada portada'>
        <div class='col-md-12 col-sm-6 col-xs-12 text-center '>
                <h4 class='animation animated-item-1 titulo_portada'>$titulo</h4>
        
                <h1 class='animation animated-item-2 subtitulo_portada'>$subtitulo</h1>
        </div>
        <div class='arrow text-center nube-scroll' >
            <a class='scroll' href='#banner-bottom'>
                <img alt='' src='img/icono-scroll.png'/></a>
        </div>
    </div> ";
}

  