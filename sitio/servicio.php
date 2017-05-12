<?php

function insertar_servicio($titulo, $subtitulo, $interna=true) {
    $clase_interna = $interna ? "servicio-interno" : "servicio-home";
    $hide_until_dom_ready = !$interna ? "hide-until-dom-ready" : "hide-until-dom-ready";
    echo "
        <div id='service' class=''>
        <div class='container $clase_interna'>
            <div class='$hide_until_dom_ready wow animated fadeInDown'>
            <div class='row'>
                <div class='col-md-12 col-sm-6 col-xs-12 text-center'>
                    <div id='botonrojo' class='centered'>
                        <img src='images/nube.png'>
                    </div>
                    <h3>$titulo</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-10  col-md-offset-1 col-sm-12 col-sm-offset-0 text-center'
                     id='textorojo3'>
                    <h2 id='textorojo' class='$clase_interna'>$subtitulo</h2>
                </div>
            </div>
            </div>
        </div>
    </div>
    ";
}