<?php

function blogTheme_supports()
{
    add_theme_support('title-tag');
}
/* afficher la navigation wordpress */
add_action('after_setup-theme', 'blogtheme_supports');

/* Lien vers style et script */
function blogtheme_register_assets()
{
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', [], false, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('style');
}
/* Afficher style */
add_action('wp_enqueue_scripts', 'blogtheme_register_assets');


/**/

/* title avec separateur */
function blogtheme_title_separator () {
    return '|';
}
add_filter('document_title_separator', 'blogtheme_title_separator');
/**/

/* navbar */
add_action('init', 'zero_add_menu');
function zero_add_menu()
{
    register_nav_menu('main_menu', 'Menu principal');
}


/**/
/* Pour pouvoir ajouter image sur article dans wordpress */
add_theme_support('post-thumbnails');


