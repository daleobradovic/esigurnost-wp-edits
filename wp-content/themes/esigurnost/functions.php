<?php

require_once('wp_bootstrap_navwalker.php');

if ( ! isset( $content_width ) )
$content_width = 800;

if ( ! function_exists( 'esigurnost_setup' ) ) :
function esigurnost_setup() {

load_theme_textdomain( 'esigurnost', get_template_directory() . '/languages' );

    add_filter( 'show_admin_bar', '__return_false' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'esigurnost' )
    ) );

    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    endif;
    add_action( 'after_setup_theme', 'esigurnost_setup' );

function esigurnost_customize($wp_customize) {

    $wp_customize->add_section("pocetna", array(
        "title" => __("Sekcija: Pocetna", "esigurnost"),
        "priority" => 30,
    ));

    $wp_customize->add_setting("bg-image", array(
        "default" => get_stylesheet_directory_uri() . "/images/bg.jpg",
        "transport" => "refresh",
    ));

    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'bg-image',
            array(
                'label'      => __( 'Background Image', 'esigurnost' ),
                'section'    => 'pocetna',
                'settings'   => 'bg-image',
            ) )
    );

    $wp_customize->add_setting("pocetna-naslov", array(
        "default" => "Dobrodošli na ESigurnost!",
        "transport" => "refresh",
    ));

    $wp_customize->add_control('pocetna-naslov', array(
        'label'      => __('Naslov', 'esigurnost'),
        'section'    => 'pocetna',
        'settings'   => 'pocetna-naslov',
    ));

    $wp_customize->add_setting("pocetna-podnaslov", array(
        "default" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse commodi, laborum, vero nemo veniam, ipsa officia obcaecati assumenda quas eaque exercitationem modi similique. Sapiente reprehenderit quas quis illo, ex iusto.",
        "transport" => "refresh",
    ));

    $wp_customize->add_control('pocetna-podnaslov', array(
        'label'      => __('Podnaslov', 'esigurnost'),
        'section'    => 'pocetna',
        'settings'   => 'pocetna-podnaslov',
    ));
}
add_action( 'customize_register', 'esigurnost_customize' );

function esigurnost_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css" );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/fonts/font-awesome/css/font-awesome.min.css" );
    wp_enqueue_style( 'custom-styles', get_template_directory_uri() . "/css/styles.css" );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . "/css/responsive.css" );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'esigurnost_scripts' );

?>