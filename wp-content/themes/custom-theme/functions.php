<?php 

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

function dmijic_enqueue_scripts() {

    wp_enqueue_script( 'breakpoints-js', get_template_directory_uri() . '/js/breakpoints.min.js','','1.1', true );
    wp_enqueue_script( 'browser-js', get_template_directory_uri() . '/js/browser.min.js','','1.1', true );
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.min.js','','1.1', true );
    wp_enqueue_script( 'jquery-scrollex-js', get_template_directory_uri() . '/js/jquery.scrollex.min.js','','1.1', true );
    wp_enqueue_script( 'jquery-scrolly-js', get_template_directory_uri() . '/js/jquery.scrolly.min.js','','1.1', true );
    wp_enqueue_script( 'util-js', get_template_directory_uri() . '/js/util.js','','1.1', true );

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js','','1.1', true );

}

add_action('wp_enqueue_scripts', 'dmijic_enqueue_scripts');

function dmijic_enqueue_styles() {

    wp_enqueue_style( 'base-css', get_stylesheet_directory_uri() . '/css/base.css' );
    wp_enqueue_style( 'normalize-css', get_stylesheet_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'fontawesome-all-css', get_stylesheet_directory_uri() . '/css/fontawesome-all.min.css' );
    wp_enqueue_style( 'style-css', get_stylesheet_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'dmijic_enqueue_styles' );

// Menus

register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu', 'dmijic'),
    'footer-menu' => esc_html__( 'Footer Menu', 'dmijic')
]);


// Widget areas

function dmijic_widgets_init() {
    register_sidebar([
        'name'      => esc_html__( 'Main Menu Search', 'dmijic'),
        'id'        => 'main-menu-search',
        'description'   => esc_html__( 'Main menu search widget', 'dmijic'),
    ]);

    register_sidebar([
        'name'      => esc_html__( 'Mobile Menu Links Widget', 'dmijic'),
        'id'        => 'mobile-menu-links-widget',
        'description'   => esc_html__( 'Mobile menu links widget', 'dmijic'),
    ]);

    register_sidebar([
        'name'      => esc_html__( 'Floating Social Icons', 'dmijic'),
        'id'        => 'floating-social-icons',
        'description'   => esc_html__( 'floating-social-icons', 'dmijic'),
    ]);

    register_sidebar([
        'name'      => esc_html__( 'Footer Social Icons', 'dmijic'),
        'id'        => 'footer-social-links-widget',
        'description'   => esc_html__( 'footer-social-links-widget', 'dmijic'),
    ]);

}

add_action( 'widgets_init', 'dmijic_widgets_init' );


// Custom functions



?>