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

function esigurnost_pocetna($wp_customize) {

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
add_action( 'customize_register', 'esigurnost_pocetna' );

function esigurnost_onama($wp_customize) {

    $wp_customize->add_section("onama", array(
        "title" => __("Sekcija: O nama", "esigurnost"),
        "priority" => 40
    ));

    $wp_customize->add_section("prva-opcija", array(
        "title" => __("Sekcija: O nama", "esigurnost"),
        "priority" => 40
    ));

    $wp_customize->add_setting("onama-naslov", array(
        "default" => "O nama",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'onama-naslov',
        array(
            'label'     => __( 'Naslov sekcije', 'esigurnost' ),
            'section'  => 'onama',
            'settings' => 'onama-naslov',
            'type'     => 'text'
        )
    );

    $wp_customize->add_setting("onama-tekst", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'onama-tekst',
        array(
            'label'     => __( 'Tekst', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'onama-tekst',
            'type'      => 'textarea'
        )
    );

    $wp_customize->add_setting("onama-slika", array(
        "default" => get_stylesheet_directory_uri() . "/images/bg.jpg",
        "transport" => "refresh",
    ));

    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'onama-slika',
            array(
                'label'      => __( 'Slika', 'esigurnost' ),
                'section'    => 'onama',
                'settings'   => 'onama-slika',
            ) )
    );

    $wp_customize->add_setting("prva-opcija", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'prva-opcija',
        array(
            'label'     => __( 'Prva opcija', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'prva-opcija',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting("prva-opcija-opis", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'prva-opcija-opis',
        array(
            'label'     => __( 'Opis prve opcije', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'prva-opcija-opis',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting("prva-opcija-tekst", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'prva-opcija-tekst',
        array(
            'label'     => __( 'Tekst prve opcije', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'prva-opcija-tekst',
            'type'      => 'textarea'
        )
    );

    $wp_customize->add_setting("prva-opcija-slika", array(
        "default" => "",
        "transport" => "refresh",
    ));

    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'prva-opcija-slika',
            array(
                'label'      => __( 'Slika prve opcije', 'esigurnost' ),
                'section'    => 'onama',
                'settings'   => 'prva-opcija-slika',
            ) )
    );

    $wp_customize->add_setting("druga-opcija", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'druga-opcija',
        array(
            'label'     => __( 'Druga opcija', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'druga-opcija',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting("druga-opcija-opis", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'druga-opcija-opis',
        array(
            'label'     => __( 'Opis druge opcije', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'druga-opcija-opis',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting("druga-opcija-tekst", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'druga-opcija-tekst',
        array(
            'label'     => __( 'Tekst druge opcije', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'druga-opcija-tekst',
            'type'      => 'textarea'
        )
    );

    $wp_customize->add_setting("druga-opcija-slika", array(
        "default" => "",
        "transport" => "refresh",
    ));

    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'druga-opcija-slika',
            array(
                'label'      => __( 'Slika druge opcije', 'esigurnost' ),
                'section'    => 'onama',
                'settings'   => 'druga-opcija-slika',
            ) )
    );

    $wp_customize->add_setting("treca-opcija", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'treca-opcija',
        array(
            'label'     => __( 'Treca opcija', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'treca-opcija',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting("treca-opcija-opis", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'treca-opcija-opis',
        array(
            'label'     => __( 'Opis trece opcije', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'treca-opcija-opis',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting("treca-opcija-tekst", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'treca-opcija-tekst',
        array(
            'label'     => __( 'Tekst trece opcije', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'treca-opcija-tekst',
            'type'      => 'textarea'
        )
    );

    $wp_customize->add_setting("treca-opcija-slika", array(
        "default" => "",
        "transport" => "refresh",
    ));

    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'treca-opcija-slika',
            array(
                'label'      => __( 'Slika trece opcije', 'esigurnost' ),
                'section'    => 'onama',
                'settings'   => 'treca-opcija-slika',
            ) )
    );

    $wp_customize->add_setting("cetvrta-opcija", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'cetvrta-opcija',
        array(
            'label'     => __( 'Cetvrta opcija', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'cetvrta-opcija',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting("cetvrta-opcija-opis", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'cetvrta-opcija-opis',
        array(
            'label'     => __( 'Opis cetvrte opcije', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'cetvrta-opcija-opis',
            'type'      => 'text'
        )
    );

    $wp_customize->add_setting("cetvrta-opcija-tekst", array(
        "default" => "",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(
        'cetvrta-opcija-tekst',
        array(
            'label'     => __( 'Tekst cetvrte opcije', 'esigurnost' ),
            'section'   => 'onama',
            'settings'  => 'cetvrta-opcija-tekst',
            'type'      => 'textarea'
        )
    );

    $wp_customize->add_setting("cetvrta-opcija-slika", array(
        "default" => "",
        "transport" => "refresh",
    ));

    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'cetvrta-opcija-slika',
            array(
                'label'      => __( 'Slika cetvrte opcije', 'esigurnost' ),
                'section'    => 'onama',
                'settings'   => 'cetvrta-opcija-slika',
            ) )
    );
}
add_action( 'customize_register', 'esigurnost_onama' );

function esigurnost_scripts() {
    wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'esigurnost_scripts' );



?>