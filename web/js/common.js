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

    $('.event__slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 50,
        smartSpeed: 500,
        nav: true,
        dots: false,
        navText: ['Назад', 'Вперед'],
    });

    $('.mass-media__news-text-wrap').equalHeights();

    $('.header__audio').audioPlayer();

    $('.header__musiclist').click( function(event){
        event.preventDefault();
        $('.overlay').fadeIn(400,
            function(){
                $('.musiclist__popup')
                    .css('display', 'block')
                    .animate({opacity: 1, top: '100px'}, 200);
            });
    });

    // $('.header__video').click( function(event){
    //     event.preventDefault();
    //     $('.overlay').fadeIn(400,
    //         function(){
    //             $('.video__popup')
    //                 .css('display', 'block')
    //                 .animate({opacity: 1, top: '100px'}, 200);
    //         });
    // });

    $('.close, .overlay').click( function(){
        $('.musiclist__popup, .video__popup')
            .animate({opacity: 0, top: '50px'}, 200,
                function(){
                    $(this).css('display', 'none');
                    $('.overlay').fadeOut(400);
                }
            );
    });



    $('.loading').delay(0).fadeOut( "slow", function() {
        $('.preloader').fadeOut("slow");
    });


    $('.header__bottom-right-text').on('click', function(e){
      $('html,body').stop().animate({ scrollTop: $('#scrollto').offset().top }, 700);
      e.preventDefault();
    });

    $('.audioplayer-volume-button i').on('click', function(){
        if ($(this).hasClass('fa-volume-up')) {
            $(this).removeClass('fa-volume-up').addClass('fa-volume-off');
        }else {
            $(this).removeClass('fa-volume-off').addClass('fa-volume-up');
        }
    });

    $('.header__center-button-wrap a').on('click', function(e){
       e.preventDefault();
    });

    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });

});
