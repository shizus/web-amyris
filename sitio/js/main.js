
/* ========================================================================= */
/*	Preloader
/* ========================================================================= */
/*
jQuery(window).load(function(){

	$("#preloader").fadeOut("slow");

});
*/
/* ========================================================================= */
/*  Welcome Section Slider
/* ========================================================================= */

$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
            $nav = $( '#nav-dots > span' ),
            slitslider = $( '#slider' ).slitslider( {
                // amount (%) to translate both slices - adjust as necessary
                translateFactor : 230,
                autoplay : true,
                interval: 9000,
                // maximum possible angle
                maxAngle : 0,
                // maximum possible scale
                maxScale : 1,
                onBeforeChange : function( slide, pos ) {

                    $nav.removeClass( 'nav-dot-current' );
                    $nav.eq( pos ).addClass( 'nav-dot-current' );

                }
            } ),

            init = function() {

                initEvents();
                
            },
            initEvents = function() {

                // add navigation events
                $navArrows.children( ':last' ).on( 'click', function() {

                    slitslider.next();
                    return false;

                } );

                $navArrows.children( ':first' ).on( 'click', function() {
                    
                    slitslider.previous();
                    return false;

                } );

                $nav.each( function( i ) {
                
                    $( this ).on( 'click', function( event ) {
                        
                        var $dot = $( this );
                        
                        if( !slitslider.isActive() ) {

                            $nav.removeClass( 'nav-dot-current' );
                            $dot.addClass( 'nav-dot-current' );
                        
                        }
                        
                        slitslider.jump( i + 1 );
                        return false;
                    
                    } );
                    
                } );

            };

            return { init : init };

    })();

    Page.init();

});

$(document).ready(function(){
	$('.hide-until-dom-ready').removeClass('hide-until-dom-ready');
	
	/* ========================================================================= */
	/*	Fix Slider Height
	/* ========================================================================= */	

    // Slider Height
    var slideHeight = $(window).height();

    $('#home-slider, #slider, .sl-slider, .sl-content-wrapper').css('height',slideHeight);

    $(window).resize(function(){'use strict',
        $('#home-slider, #slider, .sl-slider, .sl-content-wrapper').css('height',slideHeight);
    });
    var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
    if (isMobile) {
        $("#productos .row .quinto").click(function () {
            $('html,body').animate({
                scrollTop: $("#automotor-desc").offset().top
            });
        });
    }

    $('.isla-producto').click(function (event) {
        var marginTop = $(event.currentTarget).children('div').css('margin-top');
        if (marginTop != "0px") {
            $(event.currentTarget).children('div').attr('margen', marginTop);
            $(event.currentTarget).children('div').css('margin-top', 0);
        } else {
            marginTop = $(event.currentTarget).children('div').attr('margen');
            $(event.currentTarget).children('div').css('margin-top', marginTop);
        }
    });

    $('.isla-producto div').click(function (event) {
        $(event.currentTarget).parent().click();
    });

    $('.destacado-contenido').click(function (event) {
        // console.log($(event.target).children('div'));
        var marginLeft = $(event.currentTarget).children('.destacado-texto-container').css('margin-left');
        if (marginLeft != "0px") {
            $(event.currentTarget).children('.destacado-texto-container').attr('margen', marginLeft);
            $(event.currentTarget).children('.destacado-texto-container').css('margin-left',0);
        } else {
            marginLeft = $(event.currentTarget).children('.destacado-texto-container').attr('margen');
            $(event.currentTarget).children('.destacado-texto-container').css('margin-left',marginLeft);
        }
    });

    $('.destacado-item .destacado-texto-container').click(function (event) {
        $(event.currentTarget).parent().click();
    });

});


var wow = new WOW ({
	offset:       75,          // distance to the element when triggering the animation (default is 0)
	mobile:       false       // trigger animations on mobile devices (default is true)
});
wow.init();

function togglPanel(event, element) {
	var panel = $(element).parents('.panel');
}


$("#modal-mail").submit(function( event ) {
    event.preventDefault();
    var proceed = true;
    $('#mensaje-error').hide();
    //simple validation at client's end
    //loop through each field and we simply change border color to red for invalid fields
    $("#modal-mail input[required=true], #formulariocontacto textarea[required=true]").each(function(){
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
            'name'      : $('#modal-mail input[name=nombre]').val(),
            'mail'      : $('#modal-mail input[name=email]').val(),
            'company'   : $('#modal-mail input[name=empresa]').val(),
            'phone'     : $('#modal-mail input[name=telefono]').val(),
            'msg'       : $('#modal-mail textarea[name=mensaje]').val()
        };
        //Ajax post data to server
        $.post('send-mail.php', post_data, function(response){
            if(response.type == 'error'){ //load json data from server and output message
                $('#mensaje-error').show();
                $('#mensaje-error label').html(response.text);
            }else{
                $('#modal-mail').hide();
                $('.modal-header').hide();
                $('.mensaje-exito-mail').show();
            }
        }, 'json');
    }
});