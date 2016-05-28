'use strict';

/* Slider */
$(document).ready(function() {
    $('a[href^="#"').click(function () {
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
});

$(window).bind('scroll', function () {
    var navHeight = $(window).height();
    if ($(window).scrollTop() > (navHeight - navHeight + 200)) {
        $('.navbar-default').addClass('on');
    } else {
        $('.navbar-default').removeClass('on');
    }
});