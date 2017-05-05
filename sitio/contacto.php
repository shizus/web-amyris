<?php 
session_start();
require 'requirelanguage.php';
require 'header.php';

?>

<?php  require 'menu.php';?>
<body>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#mailEnviado").hide();
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
    $("#mail").submit(function( event ) {
        event.preventDefault();
        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields       
        $("#formulariocontacto input[required=true], #formulariocontacto textarea[required=true]").each(function(){
            $(this).css('border-color',''); 
            if(!$.trim($(this).val())){ //if this field is empty 
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag              
            }   
        });
       
        if(proceed) //everything looks good! proceed...
        {
            //get input field values data to be sent to server
            post_data = {
                'name'      : $('#campos #name').val(),
                'mail'      : $('#campos #mail').val(),
                'company'   : $('#campos #company').val(),
                'phone'     : $('#campos #phone').val(),
                'msg'       : $('#campos #msg').val()
            };
            
            //Ajax post data to server
            $.post('send-mail.php', post_data, function(response){
                if(response.type == 'error'){ //load json data from server and output message
                    output = '<div class="alert alert-danger" role="alert">'+response.text+'</div>';
                }else{
                    console.log("else");
                    output = '<div class="success">'+response.text+'</div>';
                    //reset values in all input fields
                    $("#formulariocontacto  input[required=true], #formulariocontacto textarea[required=true]").val('');
                    $("#formulariocontacto").slideUp(); //hide form after success
                    $("#mailEnviado").show();
                }
                $("#contactResult").hide().html(output).slideDown();
            }, 'json');
        }
        //$("#formulariocontacto").hide();
        //$("#mailEnviado").show();

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
<?php require_once 'breadcrumbs.php';
insertar_breadcrumbs($textoc3);

?>

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
<div class="col-md-12 col-sm-6 col-xs-12" id="fotocontacto" >
  <div class="container">
    <div class="col-md-6 col-sm-6 col-xs-6" id="columna6conta" >
        <img src="images/cont-4.jpg">
    </div>

    <div class="col-md-6 col-sm-6 col-xs-6" id="formulariocontacto" >
      <form id="mail" action="">
          <h1 ><?php echo $textoc7 ?>  </h1><br>
          <div id="campos" >
            <input type="text" id="name" required placeholder='<?php echo $textoc8 ?> '></input><br><br>
            <input type="text" id="mail" required placeholder='<?php echo $textoc9 ?> '></input><br><br>
            <input type="text" id="phone" required placeholder='<?php echo $textoc10 ?>'></input><br><br>
            <input type="text" id="company" required placeholder='<?php echo $textoc11 ?> '></input><br><br>
            <input type="text" id="msg" required placeholder='<?php echo $textoc12 ?> ' class="mensaje" ></input><br><br>
            <input type="submit" class="submit" value='<?php echo $textoc13 ?> '> </input>
          </div>
      </form>
        <br>
        <div id="contactResult"></div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6" id="mailEnviado">
      <br><br>
      <h1 ><?php echo $textoc16 ?></h1>
      <h3 ><?php echo $textoc17 ?></h3>
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