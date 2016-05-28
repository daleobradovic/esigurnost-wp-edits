<!DOCTYPE html>

<html lang="sr">

<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">
    <link rel="stylesheet" href="http://daleobradovic.com/esigurnost/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="http://kadirrazu.info/woocommerce/wp-content/plugins/fancy-scrollbar-wp/js/jquery.nicescroll.min.js?ver=3.8.14"></script>
    <script>
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
            
            jQuery(document).ready(function($) {

                var nice = $("html").niceScroll({
                    cursorcolor:"#ff2929",

                    cursoropacitymin: 0.25,

                    cursoropacitymax: 0.8,

                    cursorwidth: 10,

                    cursorborder: "1px solid #FFFFFF",

                    cursorborderradius: 1,

                    scrollspeed: 100,

                    background: "#000720",

                    sensitiverail: true,

                    cursorfixedheight: 100,

                    hidecursordelay: 600,


                });

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


    </script>

</head>

<body <?php body_class( $class ); ?>>
<a name="top"></a>
<!--	Navigacija -->
<nav id="navigacija" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigacija-collapse">
                <span class="sr-only">Otvori navigaciju</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#top" class="navbar-brand">ESigurnost</a>
        </div>

        <div class="collapse navbar-collapse" id="navigacija-collapse">
            <?php /* Primary navigation */
            wp_nav_menu( array(
                    'menu' => 'top_menu',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav navbar-nav navbar-right',
                    //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker())
            );
            ?>
        </div>
    </div>
</nav>
<!--	Sekcija: Početna	-->
<div id="pocetna" class="text-center" style="background-image: url('<?php
echo get_theme_mod("bg-image");
?>')">
    <div class="overlay">
        <div class="sadrzaj">
            <h1><?php echo get_theme_mod("pocetna-naslov"); ?></h1>
            <p class="lead"><?php echo get_theme_mod("pocetna-podnaslov", "pocetna-podnaslov[default]"); ?></p>
            <a href="#onama" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>