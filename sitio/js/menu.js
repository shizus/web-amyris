(function($) {
    // Space between element and top of screen (when scrolling)
    $(window).on('scroll', function(event) {

  	scrolleando();
		
    });
    scrolleando();
})(jQuery);

function scrolleando(){
	      if ($(window).scrollTop() >= 10) {
            $('nav').addClass("floating");
            $('body').css("margin-top", "65px");
            $('#video-slide video').css("top", "65px");
            $('nav').removeClass("navbar-normal");
          } else {
              $('nav').addClass("navbar-normal");
              $('body').css("margin-top", "0");
              $('#video-slide video').css("top", "0");
              $('nav').removeClass("floating");
        }
}

/* ==========  START GOOGLE MAP ========== */
// la misma api de google llama a este método, está especificado en la inclución en el header
var latitudLongitud = {lat: -34.534148, lng: -58.540412};
var map = null;
function initMap() {
    var mapCanvas = document.getElementById("map");

    var mapOptions = {
        center: new google.maps.LatLng(latitudLongitud.lat, latitudLongitud.lng),
        zoom: 15
    };
    map = new google.maps.Map(mapCanvas, mapOptions);

    var marker = new google.maps.Marker({
        position: latitudLongitud,
        map: map,
        title: 'Amyris'
    });
}

function refreshMap() {
    setTimeout(function() {
        google.maps.event.trigger(map, 'resize');
        map.setCenter(latitudLongitud)
    }, 300)
}

// ========== END GOOGLE MAP ========== //
