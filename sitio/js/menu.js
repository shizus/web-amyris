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