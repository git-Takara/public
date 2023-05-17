$('.slick_demo').slick({
    arrows: false,
    autoplay: true,
    pauseOnHover: false,
    autoplaySpeed: 3000, 
	speed: 1000,
});

$(function(){

    var duration = 300;

    var $images = $('#images p');

    $images
    .on('mouseover', function(){
        $(this).find('strong, span').stop(true).animate({
            opacity: 1
        }, duration);
    })
    .on('mouseout', function(){
        $(this).find('strong, span').stop(true).animate({
            opacity: 0
        }, duration);
    });
});

