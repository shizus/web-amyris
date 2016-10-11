
setTimeout(function () {
    $('.primero').show()}, 3500
);


  
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


// boton flor 

$( "#right" ).click(function() {

$('#show-me').css('visibility', 'visible')
.animate({opacity: 1.0, right: '100px'}, 2000);



$('#show-me2').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);


$('#show-me3').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);

$('#show-me4').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);

$('#show-me5').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);


$("#contacto").show();
$( "#contacto" ).animate({ "margin-top": "-940px" } ,1000);
   
$( "#menu1" ).animate({ "margin-top": "-10px" } ,500);
$( "#menu2" ).animate({ "margin-top": "-10px" } ,700);
$( "#menu3" ).animate({ "margin-top": "-10px" } ,900);
$( "#menu4" ).animate({ "margin-top": "-10px" } ,1100);
$( "#menu5" ).animate({ "margin-top": "-10px" } ,1300);

  $('#right').hide();
  $('#left').show();

$("body").css("overflow", "hidden");
  
});


 

$( "#rayas" ).click(function() {

$('#show-me').css('visibility', 'visible')
.animate({opacity: 1.0, right: '100px'}, 2000);



$('#show-me2').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);


$('#show-me3').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);

$('#show-me4').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);

$('#show-me5').css('visibility', 'visible')
.animate({opacity: 1.0, right: '95px'}, 2000);


   
$( "#menu1" ).animate({ "margin-top": "-10px" } ,500);


$("#contacto").show();
$( "#contacto" ).animate({ "margin-top": "-940px" } ,1000);


$( "#menu2" ).animate({ "margin-top": "-10px" } ,700);
$( "#menu3" ).animate({ "margin-top": "-10px" } ,900);
$( "#menu4" ).animate({ "margin-top": "-10px" } ,1100);
$( "#menu5" ).animate({ "margin-top": "-10px" } ,1300);

  $('#right').hide();
  $('#rayas').hide();
  
  $('#left').show();
 $("body").css("overflow", "hidden");
  
});




/*      botn para cerrar el menu*/

$( "#left" ).click(function(){


$( "#menu1" ).animate({ "margin-top": "-770px" } ,1300);
$( "#menu2" ).animate({ "margin-top": "-770px" } ,1100);
$( "#menu3" ).animate({ "margin-top": "-770px" } ,900);
$( "#menu4" ).animate({ "margin-top": "-770px" } ,700);
$( "#menu5" ).animate({ "margin-top": "-770px" } ,500);


$( "#contacto" ).animate({ "margin-top": "2564px" } ,1000);
$("#contacto").hide();



$('#show-me').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");

$('#show-me2').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");

$('#show-me3').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");

$('#show-me4').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");

$('#show-me5').css('visibility', 'hidden')
.animate({opacity: 0.0, right: '-100px'}, "slow");



   $('#right').show();
   $('#myCarousel').show();
   $('#rayas').show();
   
   $('#left').hide();
$("body").css("overflow", "auto");

});
