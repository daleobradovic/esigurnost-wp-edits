<!DOCTYPE html>

<html lang="sr">

<head>

    <?php wp_head(); ?>

</head>

<body <?php body_class( $class ); ?> id="top">
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
            <a href="#top" class="navbar-brand page-scroll">ESigurnost</a>
        </div>

        <div class="collapse navbar-collapse" id="navigacija-collapse">
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li>-->
<!--                    <a href="#onama" class="page-scroll">O nama</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#tim" class="page-scroll">Tim</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#aktivnosti" class="page-scroll">Aktivnosti</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#bazaznanja" class="page-scroll">Baza znanja</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#kontakt" class="page-scroll">Kontakt</a>-->
<!--                </li>-->
<!--            </ul>-->
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


</body>

</html>
