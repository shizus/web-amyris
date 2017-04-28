
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



  <?php require_once 'portada.php';

  insertar_portada('portada-fragancias', $texto1f, $texto2f);
  ;?>






<style>



.accordian {
  width: 720px;
  height: 425px;
  overflow: hidden;
  position: absolute;

 z-index: 2;
  /*Time for some styling*/
  margin: -25px;
   margin-left: 230px;
   /* box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
  -webkit-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
  -moz-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35); */
}

/*A small hack to prevent flickering on some browsers*/
.accordian ul {
  width: 2000px;
  /*This will give ample space to the last item to move
  instead of falling down/flickering during hovers.*/
}

.accordian li {
  position: relative;
  display: block;
  width: 250px;
  float: left;

  /*border-left: 1px solid #888;
  
  /*box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  */

  /*Transitions to give animation effect*/
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  /*If you hover on the images now you should be able to 
  see the basic accordian*/
}

/*Reduce with of un-hovered elements este reduce los de al lado */
.accordian ul:hover li {width: 40px;}

.accordian ul:hover li a{
  left: -80px;
}





/*Lets apply hover effects now*/
/*The LI hover style should override the UL hover style vuelve a al pasicon inicial*/ 
.accordian ul li:hover {width: 640px;}


.accordian li img {
  display: block;
}




/*Image title styles*/
.image_title {


  writing-mode: vertical-rl;

    word-wrap: break-word; 
  /*background: rgba(0, 0, 0, 0.5); */
  position: absolute;
  left: 0; bottom: 0; 
  width: 640px; 

}
.image_title .texto1_isla1 {


-webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  font-size: 50px;
  position: relative;
  left: -432px;
  padding-top: 20px;
  display: block;
  color: #fff;
  text-decoration: none;


}

.image_title .texto2_isla1 {


-webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  font-size: 22px;
  position: relative;
width: 380px;
  display: block;
  color: #fff;
  text-decoration: none;
  font-family:'Museo 500 Regular';
  font-weight:normal;
  writing-mode: horizontal-tb;
  margin-right: 650px;



}

.accordian ul:hover .image_title .texto2_isla1 {
margin-right: 100px;
top: -180px;
line-height: 27px;
  transition: all 0.5s;



}



/* -----------------------------------------------------------*/


.image_title .texto1_isla2 {


-webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  font-size: 50px;
  position: relative;
  left: -432px;
  padding-top: 20px;
  display: block;
  color: #fff;
  text-decoration: none;


}

.image_title .texto2_isla2 {


-webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  font-size: 22px;
  position: relative;
width: 380px;
  display: block;
  color: #fff;
  text-decoration: none;
  font-family:'Museo 500 Regular';
  font-weight:normal;
  writing-mode: horizontal-tb;
  margin-right: -200px;



}
.accordian ul:hover .image_title .texto2_isla2 {
margin-right: 100px;
top: -180px;
line-height: 27px;
  transition: all 0.5s;
}

/* ---------------------------------------------------------*/


.image_title .texto1_isla3 {


-webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  font-size: 50px;
  position: relative;
  left: -460px;
  padding-top: 20px;
  display: block;
  color: #fff;
  text-decoration: none;


}

.image_title .texto2_isla3 {


-webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  font-size: 22px;
  position: relative;
width: 380px;
  display: block;
  color: #fff;
  text-decoration: none;
  font-family:'Museo 500 Regular';
  font-weight:normal;
  writing-mode: horizontal-tb;
  margin-right: -200px;



}
.accordian ul:hover .image_title .texto2_isla3 {
margin-right: 100px;
top: -150px;
line-height: 27px;
  transition: all 0.5s;
}




/* acordeon de las islas de abajo */


.accordian2 {
  width: 720px;
  height: 425px;
  overflow: hidden;
  position: absolute;

 z-index: 2;
  /*Time for some styling*/
  margin: -25px;
   margin-left: 230px;
   /* box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
  -webkit-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
  -moz-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35); */
}

/*A small hack to prevent flickering on some browsers*/
.accordian2 ul {
  width: 2000px;
  /*This will give ample space to the last item to move
  instead of falling down/flickering during hovers.*/
}

.accordian2 li {
  position: relative;
  display: block;
  width: 350px;
  float: left;

  /*border-left: 1px solid #888;
  
  /*box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
  */

  /*Transitions to give animation effect*/
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  /*If you hover on the images now you should be able to 
  see the basic accordian*/
}

/*Reduce with of un-hovered elements este reduce los de al lado */
.accordian2 ul:hover li {width: 40px;}

.accordian2 ul:hover li a{
  left: -80px;


}


/*Lets apply hover effects now*/
/*The LI hover style should override the UL hover style vuelve a al pasicon inicial*/ 
.accordian2 ul li:hover {width: 640px;}


.accordian2 li img {
  display: block;
}




/*Image title styles*/
.image_title2 {


  writing-mode: vertical-rl;

    word-wrap: break-word; 
  /*background: rgba(0, 0, 0, 0.5);  */
  position: absolute;
  left: 0; bottom: 0; 
  width: 640px; 

}
.image_title2 a {


-webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  font-size: 50px;
  position: relative;
  left: -580px;
  padding-top: 20px;
  display: block;
  color: #fff;
  text-decoration: none;


}


.caja1{

 /* background: rgba(0, 0, 0, 0.5);   */
  background: rgba(255, 255, 255, 0.59);
  position: absolute;
  left: 14; 
  top:0px;
  bottom: 0; 
  width: 92px; 
}

.caja2{

 /* background: rgba(0, 0, 0, 0.5);   */
  background: rgba(255, 255, 255, 0.59);
  position: absolute;
  left: 14; 
  top:0px;
  bottom: 0; 
  width: 92px; 
}


.caja1:hover{
  background: rgba(255, 255, 255, 0.59);
  width: 640px;
}

.caja2:hover{
  background: rgba(255, 255, 255, 0.59);
  width: 640px;

}



.boton_isla_abajo1{
margin-left: -90px;
  z-index: 0;

}


.boton_isla_abajo2{
margin-left: 400px;
  z-index: 0;

}




.caja1:hover .boton_isla_abajo1{
  
    margin-top: 342px;
  position: absolute;
  margin-left: 11px;
  z-index: 0;
  width: 9%;
}


.caja2:hover .boton_isla_abajo2{
  
    margin-top: 342px;
  position: absolute;
  margin-left: 11px;
  z-index: 0;
  width: 9%;
}





</style>



  <?php require_once 'breadcrumbs.php';
  insertar_breadcrumbs($texto3f);

  ?>

  <?php
  require_once "servicio.php";
  insertar_servicio($texto35f, $texto4f);
  ?>



<style>
  #fragantit img {
    width: 100%;
    margin-top: 10%;
  }

  .primero_cuadrado_fragancias{
    text-align: center;
        width: 445px;
        margin-left: 30%;
    height: 80px;
    background-color: #fff;
    border: 1px solid #e1e6e9;
    z-index: 3;
  
    margin-top: -50%;
    animation-delay: 0.3s;

  }

  .primero_cuadrado_fragancias h4 {
    font-size: 55px;
    text-align: center;
    animation-delay: 0.3s;
    color: #fff;
  
  font-family: 'Museo 500 Regular';
    font-weight: normal;
    color: #000;
  }

</style>

<section id="fragan">
         <div id="fragantit" >
                    <div class="container">
                        <div class="row">
                          <img src="images/07.jpg"  >

                        </div>
                    </div>
         </div>
</section>                        


<section id="cuadrado">

  <div class="col-md-12 col-sm-6 col-xs-12 primero_cuadrado_fragancias">
    <h4>FRAGANCIAS </h4>
   </div>


</section>



<style>
  .segundo_cuadrado_fragancias {
    height: 160px;
    background-color: rgba(255, 255, 255, 0.83);
 
    margin-top: -9%;
    z-index: 3;
        margin-left: 12%;
    margin-right: 12%;
        animation-delay: 0.3s;
  }


  .segundo_cuadrado_fragancias h2{
    font-size: 36px;
    color: #D1BE89;
    width: 820px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 22px;
    font-family: 'Museo 500 Regular';
    font-weight: normal;
    text-align: center;
    padding: 17px;
  }

  .segundo_cuadrado_fragancias p{
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    line-height: 34px;

      padding: 5px 51px 5px 95px;
    text-align: center;
    line-height: 30px;
}

</style>

 <div class="col-md-12 col-sm-6 col-xs-12"  >
 <div class="segundo_cuadrado_fragancias">
       
          <h2>SISTEMA CONCEPTUAL AMYRIS</h2>
         <p><?php echo $texto44f ?></p>

     </div>
 </div>


<style>
  .caja {
position: relative; /*Para poder ubicar la info dentro de la caja*/
margin: 10px auto;
}
.caja .imagen1 img {
border:2px solid black;
margin-left: 181px;
}
.caja .imagen2 img {
border:2px solid black;
margin-left: 181px;
}

.caja .imagen3 img {
border:2px solid black;
margin-left: 181px;
}

.info11 {
position: absolute; /*Info sobre la imagen*/
top: 70px;
left: 60%; /*Desplazamos a partir de la esquina superior izquierda*/
zoom: 1;
width: 640px;
text-align: center;
font-family:'Museo 500 Regular';font-weight:normal;
color:#A59965;
font-size: 16px;
filter: alpha(opacity=0); /*Opacidad Para IE */
opacity: 0; /*Inicialmente transparente */
padding: 5px;


-moz-transition:all ease .8s; /*Aplicamos una ligera transición*/
-webkit-transition:all ease .8s ;
transition:all ease .8s;
}

.info1 {
position: absolute; /*Info sobre la imagen*/
top: 70px;
left: -50%; /*Desplazamos a partir de la esquina superior izquierda*/
zoom: 1;
width: 640px;
text-align: center;
font-family:'Museo 500 Regular';font-weight:normal;
color:#A59965;
font-size: 16px;
filter: alpha(opacity=0); /*Opacidad Para IE */
opacity: 0; /*Inicialmente transparente */
padding: 5px;


-moz-transition:all ease .8s; /*Aplicamos una ligera transición*/
-webkit-transition:all ease .8s ;
transition:all ease .8s;
}



.caja:hover .info11 {
filter: alpha(opacity=80);
opacity: .8; /*Al hacer hover sobre la caja hacemos visible los datos*/
}


.caja:hover .info1 {
filter: alpha(opacity=80);
opacity: .8; /*Al hacer hover sobre la caja hacemos visible los datos*/
}


.info2 {
position: absolute; /*Info sobre la imagen*/
top: 70px;
left: -175%; /*Desplazamos a partir de la esquina superior izquierda*/
zoom: 1;
width: 640px;
text-align: center;
font-family:'Museo 500 Regular';font-weight:normal;
color:#A59965;
font-size: 16px;
filter: alpha(opacity=0); /*Opacidad Para IE */
opacity: 0; /*Inicialmente transparente */
padding: 5px;


-moz-transition:all ease .8s; /*Aplicamos una ligera transición*/
-webkit-transition:all ease .8s ;
transition:all ease .8s;
}
.caja:hover .info2 {
filter: alpha(opacity=80);
opacity: .8; /*Al hacer hover sobre la caja hacemos visible los datos*/
}



.info3 {
position: absolute; /*Info sobre la imagen*/
top: 70px;
left: -510px; /*Desplazamos a partir de la esquina superior izquierda*/
zoom: 1;
width: 640px;
text-align: center;
font-family:'Museo 500 Regular';font-weight:normal;
color:#A59965;
font-size: 16px;
filter: alpha(opacity=0); /*Opacidad Para IE */
opacity: 0; /*Inicialmente transparente */
padding: 5px;


-moz-transition:all ease .8s; /*Aplicamos una ligera transición*/
-webkit-transition:all ease .8s ;
transition:all ease .8s;
}
.caja:hover .info3 {
filter: alpha(opacity=80);
opacity: .8; /*Al hacer hover sobre la caja hacemos visible los datos*/
}

#contenedorcuatro{
      margin-left: 10%;
    margin-right: 10%;
}


</style>



<!--<div>
  <img src="images/flecha1.png" style="position: absolute;margin-top: 100px;
  margin-left: -580px;">
</div>
 -->


<div id="sleep">
    <div class="container">
        <div class="row" id="contenedorcuatro">




<div class="col-md-3">

<div class="caja"><p style="text-align: right;">SENTIR</p>

<span class="info11">
<img src="images/flechaprimera.png" style="position: absolute;margin-top: -50px;margin-left: -4%;">
LOS AROMAS NOS RECUERDAN UN MOMENTO ESPECIAL DE NUESTRA VIDA Y AL SENTIRLOS PUEDE GENERARNOS RISA, REGOCIJO, ALEGRÍA, NOSTALGIA O TRISTEZA. NUESTRO PRINCIPAL OBJETIVO ES INTERPRETAR ESAS SENSACIONES EN UNA FRAGANCIA.</span></a></div>
</div>


<div class="col-md-3">

<div class="caja"><p style="text-align: right;">DESCUBRIR</p>

<span class="info1"><img src="images/flechasegunda.png" style="position: absolute;margin-top: -50px;margin-left: -10%;">SOMOS UN EQUIPO DE TRABAJO PREPARADO PARA INTERPRETAR LA IMAGINACIÓN OLFATIVA DEL CLIENTE, CONECTAR CON LA SENSIBILIDAD Y
COMPRENDER LOS SENTIDOS Y EMOCIONES. </span></a></div>
</div>



<div class="col-md-3" >
<div class="caja"><p style="text-align: center;">OLER</p>
<span class="info2"><img src="images/flechatercera.png" style="position: absolute;margin-top: -50px;margin-left: -10%;">NUESTRAS FRAGANCIAS SON A MEDIDA DEL CLIENTE, DISEÑADAS Y DESARROLLADAS EN FORMA EXCLUSIVA BRINDANDO EXCELENCIA Y CALIDAD.
PERMITIMOS QUE NUESTROS CLIENTES PARTICIPEN EN EL PROCESO DE CREACIÓN DEL DISEÑO Y ASESORAMOS SOBRE LA MEJOR OPCIÓN.</span></a></div>
</div>


<div class="col-md-3" >
<div class="caja"><p style="text-align: left;">DISFRUTAR</p>
<span class="info3"><img src="images/flechacuartaaa.png" style="position: absolute;margin-top: -50px;margin-left: -8%;">ENCONTRAR LA FRAGANCIA ADECUADA GENERA ALEGRÍA Y EMOCIÓN. EN AMYRIS TE INVITAMOS A DISFRUTAR ESE MOMENTO CON PRODUCTOS
DE LA MÁS ALTA CALIDAD.</span></a></div>
</div>


        </div>
    </div>
</div>        




<div class="col-md-8" style="position: relative;margin-left: 198px;margin-top: 170px;z-index: 3;">
  <p style="text-align: center;line-height: 25px;font-family: 'Futura'; font-size: 19px; font-weight: 500;">Contamos con personal de desarrollo y marketing en constante capacitación e investigación para estar siempre estar a la vanguardia de las tendenciales mundiales del mercado de cosmética, fraganciasfinas, higiene personal, productos para el hogar y productos de limpieza</p>
</div>

<div class="col-md-8" style="position: relative;margin-left: 198px;margin-top: 40px;z-index: 3;">
  <p style="text-align: center;line-height: 25px;font-family: 'Futura'; font-size: 19px;font-weight: 500;">En Amyris consideramos a cada desarrollo, a cada fragancia especialmente creada como un desafío único. Realizamos controles de calidad, trazabilidad y estabilidad; Trabajamos con un preciso cronograma de tiempos. </p>
</div>




<style>
/*=================================================================
  Portfolio
==================================================================*/

.project-wrapper2 {

    text-align: center;
}

.project-wrapper2 li {
    display: inline-block;
}

.portfolio-item2 {
    cursor: pointer;
    margin: 0 -3px 1% 0;
    overflow: hidden;
    position: relative;
    width: 32%;
}

figcaption.mask {

    bottom: 175px;
    color: #fff;
    padding: 40px;
    position: absolute;
    width: 100%;
    text-align: left;
    
    -webkit-transition: all 0.4s ease 0s;
       -moz-transition: all 0.4s ease 0s;
        -ms-transition: all 0.4s ease 0s;
         -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
}

.portfolio-item:hover figcaption.mask {
    bottom: 0;
    top:1px;


}

figcaption.mask h3 {
    margin: 0;
       margin-top: -5px;
    color: #fff;
    font-size: 40px;
    width: 375px;
    margin-left: -36px;

}

ul.external {
    list-style: outside none none;
    margin: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: -47px;
    
    -webkit-transition: all 0.4s ease 0s;
       -moz-transition: all 0.4s ease 0s;
        -ms-transition: all 0.4s ease 0s;
         -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
}

ul.external li {
    display: inline-block;
}

ul.external li a {
    background-color: rgba(255, 255, 255, 0.9);
    color: #818181;
    display: block;
    padding: 10px 18px 13px;
    
    -webkit-transition: all 0.5s ease 0s;
       -moz-transition: all 0.5s ease 0s;
        -ms-transition: all 0.5s ease 0s;
         -o-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
}

ul.external li a:hover {
    background-color: #009EE3;
    color: #fff;
}

.portfolio-item:hover ul.external {
    top: 0;
}

.fancybox-skin {
    border-radius: 0;
}

.fancybox-title.fancybox-title-inside-wrap {
    padding: 15px;
}

.fancybox-title h3 {
    margin: 0 0 15px;
}

.fancybox-title p {
    color: #818181;
    font-size: 16px;
    line-height: 22px;
}

.fancybox-title-inside-wrap {
    padding-top: 0;
}




</style>






<style>
  #portfolio{
    margin-top: 40%;
  }

  /* 


   5 columns grid for 'md' and 'lg' screens

   @tatygrassini


*/

@media (min-width: 992px) {
  .col-md-1-5 { width: 20%; }
  .col-md-2-5 { width: 40%; }
  .col-md-3-5 { width: 60%; }
  .col-md-4-5 { width: 80%; }
  .col-md-5-5 { width: 100%; }
}

@media (min-width: 1200px) {
  .col-lg-1-5 { width: 20%; }
  .col-lg-2-5 { width: 40%; }
  .col-lg-3-5 { width: 60%; }
  .col-lg-4-5 { width: 80%; }
  .col-lg-5-5 { width: 100%; }
}

/* Demo only, no need for this */

.show-grid [class^=col-] span,
.container-fluid .show-grid [class^=col-] {
  display: block;

  padding-bottom: 10px;

}

[class^=col-] {
  margin-bottom: 30px;
}


.spancinco{
     color: #fff;
    font-family: 'Museo 500 Regular';
    font-weight: normal;
    font-size: 30px;
        top: -270px;
        position: relative;
    text-align: left;
    left: 11px ;
    line-height:30px;

}


.spancincop1 {
  text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    position: relative;
    top: -112px;
    color: #fff;
    left: 10px;
}



.spancincop2 {
  text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    position: relative;
      top: -169px;
    color: #fff;
    left: 15px;
}



.spancincop3 {
  text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    position: relative;
     top: -139px;
    color: #fff;
    left: 13px;
}



.spancincop4 {
  text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    position: relative;
 top: -79px;
    color: #fff;
    left: 13px;
}



.spancincop5 {
  text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    position: relative;
    top: -112px;
    color: #fff;
    left: 10px;
}




}
</style>

<!-- portfolio section -->


  <script type="text/javascript">


$(document).ready(function () {
    $(".spancincop1").hover(function () { // on hover
    $("#texto_spancinco_1").css("display", "block");

        $("#box1").css("margin-top", "-20%");
    },function() {//on mouseout
            $("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_1").css("display", "none");
            
  });
});



$(document).ready(function () {
    $(".spancincop2").hover(function () { // on hover
    $("#texto_spancinco_2").css("display", "block");

        $("#box1").css("margin-top", "-20%");
    },function() {//on mouseout
            $("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_2").css("display", "none");
            
  });
});



$(document).ready(function () {
    $(".spancincop3").hover(function () { // on hover
    $("#texto_spancinco_3").css("display", "block");

        $("#box1").css("margin-top", "-20%");
    },function() {//on mouseout
            $("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_3").css("display", "none");
            
  });
});



$(document).ready(function () {
    $(".spancincop4").hover(function () { // on hover
    $("#texto_spancinco_4").css("display", "block");

        $("#box1").css("margin-top", "-20%");
    },function() {//on mouseout
            $("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_4").css("display", "none");
            
  });
});



$(document).ready(function () {
    $(".spancincop5").hover(function () { // on hover
    $("#texto_spancinco_5").css("display", "block");


        $("#box1").css("margin-top", "-20%");
    //    $('#box1').animate({
      //                          'margin-top':'-20%'
       //              },1500);


    },function() {//on mouseout
            $("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_5").css("display", "none");
            
  });
});

</script>

<div id="cincocuadrados" style="top: 100px;position: relative;">
    <div class="row show-grid">
    
   
        <div class="col-sm-6 col-md-4-5 col-lg-1-5">
        <img src="images/fraga1.jpg" style="width: 120%; margin-left: -7%;    height: 300px;">
        <span class="spancinco">FRAGANCIAS FINAS</span>
        <p class="spancincop1">Ver mas</p>

        </div>
        <div class="col-sm-6 col-md-5-5 col-lg-1-5">
         <img src="images/fraga2.jpg"  style="width: 113%;    height: 300px;">
         <span class="spancinco">CUIDADO PERSONAL Y PRODUCTOS DE TOCADOR</span>
          <p  class="spancincop2">Ver mas</p>
        </div>
        <div class="col-sm-6 col-md-3-5 col-lg-1-5">
         <img src="images/fraga3.jpg" style="width: 113%;    height: 300px;">
         <span class="spancinco">CUIDADO DEL HOGAR Y AMBIENTALES</span>
          <p  class="spancincop3">Ver mas</p>
        </div>
        <div class="col-sm-6 col-md-2-5 col-lg-1-5">
         <img src="images/fraga4.jpg" style="width: 113%;    height: 300px;">
         <span class="spancinco">LIMPIEZA</span>
          <p  class="spancincop4">Ver mas</p>
        </div>
        <div class="col-sm-6 col-md-4-5 col-lg-1-5">
         <img src="images/fraga5.jpg" style="width: 113%;    height: 300px;">
         <span class="spancinco">COSMÉTICA AUTOMOTOR </span>
         <p  class="spancincop5">Ver mas</p>
        </div>

<img id="box1" src="images/trama6.jpg" style="    width: 100%;position: relative; margin-top: -37%; z-index: -1;">


<div class="container"  id="texto_spancinco_1" style="display: none;height: 100px;    position: relative; margin-top: -20%; z-index: -1;">
      <div class="row">
            <div  class="col-sm-12">
                      <h1 style="
    font-family: 'Museo 500 Regular';
    font-weight: normal;
    font-size: 30px;
    margin-top: -10%;
    margin-left: 16%;
    line-height: 35px;
    color: #DA504B;;
    ">FRAGANCIAS FINAS</h1>

                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">En AMYRIS buscamos ofrecerle al cliente la más alta calidad de la fragancia creada,
                      incentivándolo a innovar, brindándole actualización sobre las tendencias a nivel mundial.</p>
                      <br>
                      <p style=" text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">Podemos ofrecer Eau de Perfum, Eau de Toillete, Colonias, fragancias femeninas, masculinas,
                      para adolecentes, niños y bebes</p>

            </div> 
            <div  class="col-sm-12" style="text-align: center;">
                <img src="images/58b.jpg">
            </div>         
      </div>
</div>   


<div class="container"  id="texto_spancinco_2" style="display: none; height: 100px;    position: relative; margin-top: -20%; z-index: -1;">
      <div class="row">
            <div  class="col-sm-12">
                      <h1  style="
    font-family: 'Museo 500 Regular';
    font-weight: normal;
    font-size: 30px;
    margin-top: -10%;
    margin-left: 16%;
    line-height: 35px;
    color: #DA504B;;
    ">CUIDADO PERSONAL Y PRODUCTOS DE TOCADOR</h1>
                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">Asumimos el compromiso de ofrecerle al consumidor productos que al momento de percibir los
                      aromas pueda disfrutar</p><br>
                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">En esta categoría ofrecemos fragancias para jabones líquidos, productos de tocador,
                      exfoliantes, shampoo, faciales, espumas, sales de baño, cremas, talcos y tinturas.</p>
            </div>          

            <div  class="col-sm-12" style="text-align: center;">
                <img src="images/58b.jpg">
            </div>  


      </div>
</div>  



<div class="container"  id="texto_spancinco_3" style="display: none; height: 100px;    position: relative; margin-top: -20%; z-index: -1;">
      <div class="row">
            <div  class="col-sm-12">
                      <h1  style="
    font-family: 'Museo 500 Regular';
    font-weight: normal;
    font-size: 30px;
    margin-top: -10%;
    margin-left: 16%;
    line-height: 35px;
    color: #DA504B;;
    ">CUIDADO DEL HOGAR Y AMBIENTALES</h1>
                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">El hogar está estrechamente relacionado con una sensación de seguridad, confort, pertenencia
                      y calma. </p><br>
                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">Ofrecemos productos para desodorantes ambientales, desodorantes textiles, velas aromáticas,
                        ambientadores y difusores.</p>
            </div> 
            <div  class="col-sm-12" style="text-align: center;">
                <img src="images/58b.jpg">
            </div>           
      </div>
</div>  



<div class="container"  id="texto_spancinco_4" style="display: none; height: 100px;    position: relative; margin-top: -20%; z-index: -1;">
      <div class="row">
            <div  class="col-sm-12">
                      <h1  style="
    font-family: 'Museo 500 Regular';
    font-weight: normal;
    font-size: 30px;
    margin-top: -10%;
    margin-left: 16%;
    line-height: 35px;
    color: #DA504B;;
    ">LIMPIEZA</h1>
                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">Buscamos que el bienestar generado por este tipo de fragancias remita a la pureza, a esa
                        tranquilidad que se genera al percibir estar en un hogar limpio.</p><br>
                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">Esta clase de fragancias aplican a productos tales como limpiadores para piso, limpiadores en
                      crema, lavandinas, detergentes, suavizantes, productos quita mancha y apresto.</p>
              </div>     
              <div  class="col-sm-12" style="text-align: center;">
                <img src="images/58b.jpg">
            </div>       
      </div>
</div>  

<div class="container"  id="texto_spancinco_5" style="display: none; height: 100px;    position: relative; margin-top: -20%; z-index: -1;">
      <div class="row">
            <div  class="col-sm-12">
                      <h1  style="
    font-family: 'Museo 500 Regular';
    font-weight: normal;
    font-size: 30px;
    margin-top: -10%;
    margin-left: 16%;
    line-height: 35px;
    color: #DA504B;;
    ">COSMÉTICA AUTOMOTOR</h1>
                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">Momentos como la compra de tu primer auto o cambiarlo por otro más grande generan alegría
y felicidad. Ofrecemos fragancias que le recuerden ese momento.</p><br>
                      <p style="
     text-align: left;
    line-height: 25px;
    font-family: 'Futura';
    font-size: 19px;
    font-weight: 500;
    color: #fff;
      margin-left: 16%;
    width: 720px;
    ">Lo asesoramos sobre la fragancia adecuada dejando un aroma de alta persistencia</p>
            </div> 

            <div  class="col-sm-12" style="text-align: center;">
                <img src="images/58b.jpg">
            </div>          
      </div>
</div>  



</div>

</div>



</div>

           


                 


<section id="hombregorra" style="position: relative; margin-top: 15%;"> 

  <div class="container" style="visibility: visible; animation-name: zoomIn;">
     <img src="images/05.jpg" style="width: 100%;">
 </div>



 <div class="col-md-5" style="margin-top: -765px;margin-left: 35px;">
         <h1 style="font-family:'Museo 500 Regular';font-weight:normal;font-size:60px;text-align: center;color: #fff;margin-left: 20%;margin-top: 50%;">EXPERTISE</h1>
            <p style="text-align: left;
    color: #fff;
    font-size: 21px;
    line-height: 28px;
    margin-left: 30%;
    width: 601px;">CONTAMOS CON TECNOLOGÍA DE ÚLTIMA GENERACIÓN Y TRABAJAMOS CON TÉCNICAS VERIFICADAS Y RIGUROSAS NORMAS INTERNAS QUE NOS PERMITEN GENERAR PROCEDIMIENTOS EFICACES.     </p>
             
                
</div>  

</section>


<div id="prefooter" >

  <?php  require 'footer.php';?>
  
</div>



</body>
</html>