(function($) {
    var element = $('nav'),
        originalY = element.offset().top;

    // Space between element and top of screen (when scrolling)
    var topMargin = 0;


    $(window).on('scroll', function(event) {
        var scrollTop = $(window).scrollTop();

        // element.stop(false, false).animate({
        //     top: scrollTop < originalY
        //         ? 0
        //         : scrollTop - originalY + topMargin
        // }, 300);

        if (scrollTop >= originalY) {
            element.addClass("floating");
            element.removeClass("navbar-normal");
        } else {
            element.addClass("navbar-normal");
            element.removeClass("floating");
        }
    });
})(jQuery);

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
