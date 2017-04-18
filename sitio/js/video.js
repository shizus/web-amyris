//var domain = "http://localhost:8080";
var domain = window.location.href;
var origen = domain + '/media/iStock_48438620_HD_1080_webm_5mb.webm';
var settings = {autoplay: 'autoplay',
                muted: 'muted',
                loop: 'loop',
                fit: 'fill', //changes the object-fit property of the video
                src: origen
               };

$('#video-slide').videoBackground(origen, settings);