$().ready(function(){

    var shiftWindow = function() { setTimeout(function() {
        scrollBy(0, -60)
    },20)};
    if (location.hash) shiftWindow();
    window.addEventListener("hashchange", shiftWindow);

    $(".link-container a").click(function(){
        $(".cruz").click();
    });

    function tocarNubeoCruz(event) {
        event.preventDefault();
        if (!$("#menu-desplegable").is(":visible")) {
            $(".nube").click();
        } else {
            $(".cruz").click();
        }
    }

    $(".fa.fa-bars").click(tocarNubeoCruz);
    $(".navbar-toggle.collapsed").click(tocarNubeoCruz);
    $(".fa.fa-close").click(tocarNubeoCruz);
    $(".boton-cruz").click(function (event) {
        event.preventDefault();
        $(".cruz").click();
    });

    $(".nube").click(function (event) {
        event.preventDefault();
		
		setTimeout(function() {
		    $('.navbar-default').addClass('navbar-normal').removeClass('floating');
        }, 50);
        $('#right').hide();
        $('#left').show();
        $('.boton-cruz').show();
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

        var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
        if (isMobile) {
            $('main').hide();
            $('footer').prev().hide();
            $('footer').hide();
            $('#portada').hide();
            $('#portada').nextAll().hide();
        }

    });

    $(".cruz").click(function (event) {
		scrolleando();
        $('#right').show();
        $('#menu-icon').show();
        $('#close-icon').hide();
        $('#left').hide();
        $('.boton-cruz').hide();
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
        var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
        if (isMobile) {
            $('main').show();
            $('footer').prev().show();
            $('footer').show();
            $('#portada').show();
            $('#portada').nextAll().show();
        }
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

    var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
    if (isMobile) return;

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