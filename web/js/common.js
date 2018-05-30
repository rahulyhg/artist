$(function() {

	$('.gallery__carousel').owlCarousel({

        center: true,
        items: 3,
        loop: true,
        margin: 50,
        smartSpeed: 600,
        nav: true,
        navText: ['Назад', 'Вперед'],
        dots: true,
        responsive: {
            0: {
                margin: 10,
                items: 1,
                dots: false,
            },
            480: {
                margin: 10,
                items: 2
            },
            1200: {
                items: 3
            },
        }
	});

    $('.mass-media__news-text-wrap').equalHeights();

    $('.header__audio').audioPlayer();

    $('.musiclist__item').audioPlayer();

    $('.header__musiclist').click( function(event){
        event.preventDefault();
        $('.overlay').fadeIn(400,
            function(){
                $('.musiclist__popup')
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200);
            });
    });

    $('.header__video').click( function(event){
        event.preventDefault();
        $('.overlay').fadeIn(400,
            function(){
                $('.video__popup')
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200);
            });
    });

    $('.close, .overlay').click( function(){
        $('.musiclist__popup, .video__popup')
            .animate({opacity: 0, top: '45%'}, 200,
                function(){
                    $(this).css('display', 'none');
                    $('.overlay').fadeOut(400);
                }
            );
    });

    $('.loading').delay(1500).fadeOut( "slow", function() {
        $('.preloader').fadeOut("slow");
    });

});
