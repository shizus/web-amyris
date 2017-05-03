var timeOutId = null;

$(document).ready(function(){

    var entraMouse = function(event) {
        timeOutId = setTimeout(
            function (event) {
                var element = event.currentTarget;
                $(element).addClass('selected');
                $(element).siblings().removeClass('selected');
                $(element).siblings().addClass('not-selected');
                timeOutId = null;
            },
            300,
            event
        );


    };

    var saleMouse = function(event) {
        setTimeout(function(event) {
            if (timeOutId != null || !$(event.currentTarget).hasClass('selected')) {
                return;
            }
            var element = event.currentTarget;
            $(element).removeClass('selected');
            $(element).removeClass('not-selected');
            $(element).siblings().removeClass('not-selected');
        }, 300, event);

    };

   $(".isla-background").hover(entraMouse, saleMouse);
});