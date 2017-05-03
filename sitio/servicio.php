<?php

function insertar_servicio($titulo, $subtitulo, $interna=true) {
    $clase_interna = $interna ? "servicio-interno" : "";
    $hide_until_dom_ready = !$interna ? "hide-until-dom-ready" : "";
    echo "
        <div id='service'>
        <div class='container $clase_interna'>
            <div class='row'>
                <div class='col-md-12 col-sm-6 col-xs-12 text-center wow animated zoomIn'>
                    <div id='botonrojo' class='wow fadeInDownBig animated centered $hide_until_dom_ready'>
                        <img src='images/nube.png'>
                    </div>
                    <h3>$titulo</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12 text-center wow animated zoomIn'
                     id='textorojo3'>
                    <div id='botonrojo2' class='wow fadeInUpBig animated'>
                        <h2 id='textorojo' class='$clase_interna'>$subtitulo</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
}