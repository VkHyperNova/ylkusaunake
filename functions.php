<?php

// STYLESHEETS
function load_stylesheets()
{

    //Load BOOTSTRAP CSS
    wp_register_style('bootstrap-4', get_template_directory_uri() . '/bootstrap-4/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap-4');

    // Load Icons CSS
    wp_register_style('icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('icons');

    // Load My Style CSS
    wp_register_style('vk-style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('vk-style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// JQUERY
function load_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/jquery-3.6.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery');

// SCRIPTS
function load_scripts()
{
    wp_register_script('vk-script', get_template_directory_uri() . '/scripts.js', '', 1, true);
    wp_enqueue_script('vk-script');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// BOOTSTRAP JS
function load_bootstrap()
{
    wp_register_script('bootstrap-4', get_template_directory_uri() . '/bootstrap-4/js/bootstrap.min.js', array(), false, 'all');
    wp_enqueue_script('bootstrap-4');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

// NAVIGATION
add_theme_support('menus'); // Menus will show up in WP THEMES

register_nav_menus(
    array(
        'top-menu' => __('Top menu', 'theme'),
        /* 'footer-menu' => __('Footer Menu', 'theme'), */

    )
);

/**
 * Register Custom Navigation Walker with Bootstrap
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


/* Widgets */
function register_widget_areas()
{


    register_sidebar(array(
        'name'          => 'Aadress',
        'id'            => 'footer_information_aadress',
        'description'   => 'Aadress',
        'before_widget' => '<section class="footer-area footer_information_aadress">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));


    register_sidebar(array(
        'name'          => 'Kontakt',
        'id'            => 'footer_information_kontakt',
        'description'   => 'Kontaktid ja aadressid',
        'before_widget' => '<section class="footer-area footer_information_kontakt">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => 'Avatud',
        'id'            => 'footer_information_avatud',
        'description'   => 'Kontaktid ja aadressid',
        'before_widget' => '<section class="footer-area footer_information_avatud">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}

add_action('widgets_init', 'register_widget_areas');



/* Refresh a div */
function ajaxdivrefresh()
{

    wp_enqueue_script('ajaxdivrefresh', get_stylesheet_directory_uri() . "/js/ajaxrefresh.js", array('jquery'));
}

add_action('wp_enqueue_scripts', 'ajaxdivrefresh');
