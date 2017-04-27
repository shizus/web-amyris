$(document).ready(function(){

    var entraMouse = function(event) {
        var element = event.currentTarget;
        $(element).addClass('selected');
        $(element).siblings().addClass('not-selected');

    };

    var saleMouse = function(event) {
        var element = event.currentTarget;
        $(element).removeClass('selected');
        $(element).siblings().removeClass('not-selected');
    };

   $(".isla-background").hover(entraMouse, saleMouse);
});