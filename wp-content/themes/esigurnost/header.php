<!DOCTYPE html>

<html lang="sr">

<head>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.1.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.2.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

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