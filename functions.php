<?php

define('THEME_ROOT', get_template_directory_uri());
define('IMG_DIR', THEME_ROOT . '/assets/images');

add_action('wp_enqueue_scripts', 'mytheme_styles');
add_action('wp_enqueue_scripts', 'mytheme_scripts');

function mytheme_styles(){
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_style('flex-slider', get_template_directory_uri() . '/assets/css/flex-slider.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css');
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
}

function mytheme_scripts(){
    wp_enqueue_script(
        'mytheme-scripts',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
    'custom',
    get_template_directory_uri() . '/assets/js/custom.js',
    array('jquery', 'isotope', 'owl-carousel'),
    null,
    true
    );

    wp_enqueue_script(
    'isotope',
    get_template_directory_uri() . '/assets/js/isotope.min.js',
    array('jquery'),
    null,
    true
    );

    wp_enqueue_script(
    'lightbox',
    get_template_directory_uri() . '/assets/js/lightbox.js',
    array('jquery'),
    null,
    true
    );

    wp_enqueue_script(
    'owl-carousel',
    get_template_directory_uri() . '/assets/js/owl-carousel.js',
    array('jquery'),
    null,
    true
    );

    wp_enqueue_script(
    'bootstrap',
    get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js',
    array('jquery'),
    null,
    true
    );
}
?>
