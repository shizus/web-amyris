
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
                interval: 4000,
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
        if (marginTop != 0) {
            $(event.currentTarget).children('div').setAttribute('margen', marginTop);
            $(event.currentTarget).children('div').css('margin-top',0);
        } else {
            marginTop = $(event.currentTarget).children('div').getAttribute('margen');
            $(event.currentTarget).children('div').css('margin-top',marginTop);
        }
    });

    $('.destacado-contenido').click(function (event) {
        // console.log($(event.target).children('div'));
        var marginLeft = $(event.currentTarget).children('.destacado-texto-container').css('margin-left');
        if (marginLeft != 0) {
            $(event.currentTarget).children('.destacado-texto-container').setAttribute('margen', marginLeft);
            $(event.currentTarget).children('.destacado-texto-container').css('margin-left',0);
        } else {
            marginLeft = $(event.currentTarget).children('.destacado-texto-container').getAttribute('margen');
            $(event.currentTarget).children('.destacado-texto-container').css('margin-left',marginLeft);
        }
    });

});


var wow = new WOW ({
	offset:       75,          // distance to the element when triggering the animation (default is 0)
	mobile:       false       // trigger animations on mobile devices (default is true)
});
wow.init();

function togglPanel(event, element) {
	var panel = $(element).parents('.panel');
	console.log(panel);
}