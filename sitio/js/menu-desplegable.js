$().ready(function(){

    $(".fa.fa-bars").click(function (event) {
        event.preventDefault();
        if (!$("#menu-desplegable").is(":visible")) {
            $(".nube").click();
        } else {
            $(".cruz").click();
        }
    });

    $(".nube").click(function (event) {
        event.preventDefault();
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
    });

    $(".cruz").click(function (event) {
        $("#menu-desplegable").hide();
        setTimeout(function () {
            $(".amyris-nav-container").hide()
        }, 100);
        setTimeout(function () {
            $(".fragancias-nav-container").hide()
        }, 200);
        setTimeout(function () {
            $(".expertise-nav-container").hide()
        }, 300);
        setTimeout(function () {
            $(".sustentabilidad-nav-container").hide()
        }, 400);
        setTimeout(function () {
            $(".innovaciones-nav-container").hide()
        }, 500);
    });


});
