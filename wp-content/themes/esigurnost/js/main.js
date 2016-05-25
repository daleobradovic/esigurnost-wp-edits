function main() {
    'use strict';

    /* Slider */
    $('a.page-scroll').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 40
                }, 1200);
                return false;
            }
        }
    });

    $(window).bind('scroll', function () {
        var navHeight = $(window).height();
        if ($(window).scrollTop() > (navHeight - navHeight + 200)) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({
        target: '.navbar-default'
        , offset: 80
    })

    
    $(document).ready(function($) {
        $('#clanovi').slick({
            accessibility: true,
            adaptiveHeight: true,
            autoplay: true,
            arrows: false,
            centerMode: true,
            dots: true,
            infinite: true,
            lazyLoad: true,
            mobileFirst: true,
            pauseOnHover: true,
            slidesToShow: 2,
            centerPadding: '30px',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 100,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: false,
                        mobileFirst: true,
                    }
                }
            ]
        });
    });
}
main();