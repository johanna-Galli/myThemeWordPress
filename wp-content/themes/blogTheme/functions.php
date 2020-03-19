<?php

function blogTheme_supports()
{
    add_theme_support('title-tag');
}

function blogtheme_register_assets()
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', [], false, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function blogtheme_title_separator () {
    return '|';
}

add_action('after_setup-theme', 'blogtheme_supports');
add_action('wp_enqueue_scripts', 'blogtheme_register_assets');

add_filter('document_title_separator', 'blogtheme_title_separator');
