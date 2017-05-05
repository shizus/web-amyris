<?php 
	session_start();
	require 'requirelanguage.php';
	require 'header.php';
	require 'menu.php';
?>

<body>

<?php require_once 'portada.php';

 	insertar_portada('portada-fragancias', $texto1f, $texto2f);
	require_once 'breadcrumbs.php';
	insertar_breadcrumbs($texto3f);
	require_once "servicio.php";
	insertar_servicio($texto35f, $texto4f);

?>

<div class="container">
	<div class="row fragan"> 
	<div class="col-md-6 col-md-offset-3">
      <img src="img/t-fragancias.png" width="100%">
      </div> 
	      
	</div>
</div>

<style>
.bajada {
	background-color: rgba(255, 255, 255, 0.83);
	margin-top: -9%;
	z-index: 3;
	animation-delay: 0.3s;
}
.bajada h2{
	font-size: 36px;
	color: #D1BE89;
	margin-left: auto;
	margin-right: auto;
	margin-top: 22px;
	font-family: 'Museo 500 Regular';
	font-weight: normal;
	text-align: center;
	padding: 17px;
}
.bajada p{
	font-family: 'Futura';
	font-size: 19px;
	font-weight: 500;
	line-height: 34px;
	text-align: center;
	line-height: 30px;
	margin-bottom: 20px;
}
.boton {
	font-family: 'Futura';
	text-align: center;
	padding-bottom: 15px;
	border-bottom: solid 1px grey;
	cursor: pointer;
}
.boton.active {
		border-bottom: solid 1px #D1BE89;
}
.boton.active:after {
	content: '';
	background: white;
	border-bottom: solid 1px #D1BE89;
	border-right: solid 1px #D1BE89;
	transform: rotate(45deg);
	width: 5px;
	height: 5px;
	display: block;
	position: absolute;
	bottom: -3px;
	left: 50%;
	
}
.desc {
	text-align: center;
	padding: 25px 15px;
	position: absolute;
	color: #D1BE89;
	font-family: 'Futura';
}
.descripciones {
	margin-bottom: 130px;
}
.descripciones .desc{
	opacity: 0;
}	
.descripciones .active{
	opacity: 1;
}	
</style>

<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1 bajada"> 
 	<h2>SISTEMA CONCEPTUAL AMYRIS</h2>
 	<p><?php echo $texto44f ?></p>
 	<div class="row">
 	<div class="col-md-8 col-md-offset-2">
		<div class="row">       
			<div class="col-md-3 col-xs-3 boton active" id="sentir">SENTIR</div>
			<div class="col-md-3 col-xs-3 boton" id="descubrir">DESCUBRIR</div>
			<div class="col-md-3 col-xs-3 boton" id="oler">OLER</div>
			<div class="col-md-3 col-xs-3 boton" id="disfrutar">DISFRUTAR</div>
		</div>
		<div class="row descripciones">
			<div class="col-md-12 desc active" id="sentir-desc">
				LOS AROMAS NOS RECUERDAN UN MOMENTO ESPECIAL DE NUESTRA VIDA Y AL SENTIRLOS PUEDE GENERARNOS RISA, REGOCIJO, ALEGRÍA, NOSTALGIA O TRISTEZA. NUESTRO PRINCIPAL OBJETIVO ES INTERPRETAR ESAS SENSACIONES EN UNA FRAGANCIA.
			</div>
			<div class="col-md-12 desc" id="descubrir-desc">
				SOMOS UN EQUIPO DE TRABAJO PREPARADO PARA INTERPRETAR LA IMAGINACIÓN OLFATIVA DEL CLIENTE, CONECTAR CON LA SENSIBILIDAD Y COMPRENDER LOS SENTIDOS Y EMOCIONES.
			</div>
			<div class="col-md-12 desc" id="oler-desc">
				NUESTRAS FRAGANCIAS SON A MEDIDA DEL CLIENTE, DISEÑADAS Y DESARROLLADAS EN FORMA EXCLUSIVA BRINDANDO EXCELENCIA Y CALIDAD. PERMITIMOS QUE NUESTROS CLIENTES PARTICIPEN EN EL PROCESO DE CREACIÓN DEL DISEÑO Y ASESORAMOS SOBRE LA MEJOR OPCIÓN.
			</div>
			<div class="col-md-12 desc" id="disfrutar-desc">
				LOS AROMAS NOS RECUERDAN UN MOMENTO ESPECIAL DE NUESTRA VIDA Y AL SENTIRLOS PUEDE GENERARNOS RISA, REGOCIJO, ALEGRÍA, NOSTALGIA O TRISTEZA. NUESTRO PRINCIPAL OBJETIVO ES INTERPRETAR ESAS SENSACIONES EN UNA FRAGANCIA.
			</div>
		</div>
		</div>
	</div>
	
<script>
	$('.boton').hover(entraMouse);
	
	function entraMouse(event){
		$(".boton").removeClass("active");
		$(".desc").removeClass("active");
		$("#" + event.currentTarget.id).addClass("active");
		$("#" + event.currentTarget.id + "-desc").addClass("active");
	}
	
</script>

	<div class="row">
	<div class="col-md-12">
		<p>
		Contamos con personal de desarrollo y marketing en constante capacitación e investigación para estar siempre estar a la vanguardia de las tendenciales mundiales del mercado de cosmética, fragancias finas, higiene personal, productos para el hogar y productos de limpieza.</p>
		<p>
		En Amyris consideramos a cada desarrollo, a cada fragancia especialmente creada como un desafío único. Realizamos controles de calidad, trazabilidad y estabilidad; Trabajamos con un preciso cronograma de tiempos. 
		</p>
		</div>
	</div>
</div>
</div>
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
</style>

<!-- portfolio section -->


  <script type="text/javascript">


$(document).ready(function () {
    $("#spancincop1").hover(function () { // on hover
    $("#texto_spancinco_1").css("display", "block");

       // $("#box1").css("margin-top", "-20%");
    },function() {//on mouseout
            //$("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_1").css("display", "none");
            
  });

    $("#spancincop2").hover(function () { // on hover
    $("#texto_spancinco_2").css("display", "block");

        //$("#box1").css("margin-top", "-20%");
    },function() {//on mouseout
            //$("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_2").css("display", "none");
            
  });

    $("#spancincop3").hover(function () { // on hover
    $("#texto_spancinco_3").css("display", "block");

       // $("#box1").css("margin-top", "-20%");
    },function() {//on mouseout
            //$("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_3").css("display", "none");
            
  });

    $("#spancincop4").hover(function () { // on hover
    $("#texto_spancinco_4").css("display", "block");

       // $("#box1").css("margin-top", "-20%");
    },function() {//on mouseout
            //$("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_4").css("display", "none");
            
  });
});



$(document).ready(function () {
    $("#spancincop5").hover(function () { // on hover
    $("#texto_spancinco_5").css("display", "block");


        //$("#box1").css("margin-top", "-20%");
    //    $('#box1').animate({
      //                          'margin-top':'-20%'
       //              },1500);


    },function() {//on mouseout
           // $("#box1").css("margin-top", "-37%");
               $("#texto_spancinco_5").css("display", "none");
            
  });
});

</script>

<div id="cincocuadrados" style="top: 100px;position: relative;">
    <div class="row show-grid">
        <div id="spancincop1" class="col-sm-6 col-md-4-5 col-lg-1-5">
          <img src="images/fraga1.jpg" style="width: 120%; margin-left: -7%;    height: 300px;">
          <span class="spancinco">FRAGANCIAS FINAS</span>
          <p class="spancincop1">Ver mas</p>
        </div>
        <div id="spancincop2" class="col-sm-6 col-md-5-5 col-lg-1-5">
           <img src="images/fraga2.jpg"  style="width: 113%;    height: 300px;">
           <span class="spancinco">CUIDADO PERSONAL Y PRODUCTOS DE TOCADOR</span>
            <p  class="spancincop2">Ver mas</p>
        </div>
        <div id="spancincop3" class="col-sm-6 col-md-3-5 col-lg-1-5">
           <img src="images/fraga3.jpg" style="width: 113%;    height: 300px;">
           <span class="spancinco">CUIDADO DEL HOGAR Y AMBIENTALES</span>
            <p  class="spancincop3">Ver mas</p>
        </div>
        <div id="spancincop4" class="col-sm-6 col-md-2-5 col-lg-1-5">
           <img src="images/fraga4.jpg" style="width: 113%;    height: 300px;">
           <span class="spancinco">LIMPIEZA</span>
            <p  class="spancincop4">Ver mas</p>
        </div>
        <div id="spancincop5" class="col-sm-6 col-md-4-5 col-lg-1-5">
           <img src="images/fraga5.jpg" style="width: 113%;    height: 300px;">
           <span class="spancinco">COSMÉTICA AUTOMOTOR </span>
           <p  class="spancincop5">Ver mas</p>
        </div>
    </div>
    <img id="box1" src="images/trama6.jpg">
    <div class="row show-grid">
        <div class="container texto_spancinco"  id="texto_spancinco_1" >
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
                              <br>
                    </div>
                    <div  class="col-sm-12" style="text-align: center;">
                        <img src="images/58b.jpg">
                    </div>
              </div>
        </div>
        <div class="container texto_spancinco"  id="texto_spancinco_2" >
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
                      <br>
                    </div>

                    <div  class="col-sm-12" style="text-align: center;">
                        <img src="images/58b.jpg">
                    </div>
              </div>
        </div>
        <div class="container texto_spancinco"  id="texto_spancinco_3">
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
                      <br>
                    </div>
                    <div  class="col-sm-12" style="text-align: center;">
                        <img src="images/58b.jpg">
                    </div>
              </div>
        </div>
        <div class="container texto_spancinco"  id="texto_spancinco_4">
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
                      <br>
                      </div>
                      <div  class="col-sm-12" style="text-align: center;">
                        <img src="images/58b.jpg">
                    </div>
              </div>
        </div>
        <div class="container texto_spancinco"  id="texto_spancinco_5">
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
                      <br>
                    </div>

                    <div  class="col-sm-12" style="text-align: center;">
                        <img src="images/58b.jpg">
                    </div>
              </div>
        </div>
    </div>
</div>


  <?php  require 'footer.php';
  footer("hombregorra", "expertise", "EXPERTISE", "CONTAMOS CON TECNOLOGÍA DE ÚLTIMA GENERACIÓN Y TRABAJAMOS CON TÉCNICAS VERIFICADAS Y RIGUROSAS NORMAS INTERNAS QUE NOS PERMITEN GENERAR PROCEDIMIENTOS EFICACES. ");

  ?>

</body>
</html>