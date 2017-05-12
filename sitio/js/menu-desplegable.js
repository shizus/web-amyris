$().ready(function(){

    function tocarNubeoCruz(event) {
        event.preventDefault();
        if (!$("#menu-desplegable").is(":visible")) {
            $(".nube").click();
        } else {
            $(".cruz").click();
        }
    }

    $(".fa.fa-bars").click(tocarNubeoCruz);
    $(".fa.fa-close").click(tocarNubeoCruz);

    $(".nube").click(function (event) {
        event.preventDefault();
		
		setTimeout(function() {
		    $('.navbar-default').addClass('navbar-normal').removeClass('floating');
        }, 50);
		
        $('#right').hide();
        $('#left').show();
        $('#menu-icon').hide();
        $('#close-icon').show();
        $("#menu-desplegable").show();
        setTimeout(function () {
            $(".amyris-nav-container").slideDown()
        }, 100);
        setTimeout(function () {
            $(".fragancias-nav-container").slideDown()
        }, 300);
        setTimeout(function () {
            $(".expertise-nav-container").slideDown()
        }, 500);
        setTimeout(function () {
            $(".sustentabilidad-nav-container").slideDown()
        }, 700);
        setTimeout(function () {
            $(".innovaciones-nav-container").slideDown()
        }, 900);
        disableScroll();
    });

    $(".cruz").click(function (event) {
		scrolleando();
        $('#right').show();
        $('#menu-icon').show();
        $('#close-icon').hide();
        $('#left').hide();
        setTimeout(function () {
            $(".amyris-nav-container").slideUp()
        }, 500);
        setTimeout(function () {
            $(".fragancias-nav-container").slideUp()
        }, 400);
        setTimeout(function () {
            $(".expertise-nav-container").slideUp()
        }, 300);
        setTimeout(function () {
            $(".sustentabilidad-nav-container").slideUp()
        }, 200);
        setTimeout(function () {
            $(".innovaciones-nav-container").slideUp()
        }, 100);
        setTimeout(function () {
            $("#menu-desplegable").hide();
        }, 800);
        enableScroll();
    });
});

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
    $("html").css("overflow", "hidden");
    if (window.addEventListener) // older FF
        window.addEventListener('DOMMouseScroll', preventDefault, false);
    window.onwheel = preventDefault; // modern standard
    window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
    window.ontouchmove  = preventDefault; // mobile
    document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    $("html").css("overflow", "auto");
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null;
    window.onwheel = null;
    window.ontouchmove = null;
    document.onkeydown = null;
}