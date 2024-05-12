<?php

add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');
add_theme_support('post-format', ['aside', 'gallary', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support('html5');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-footer');
add_theme_support('custom-logo');
add_theme_support('starter-content');
add_theme_support('automatic-feed-links');
add_theme_support('editor-style');
add_theme_support('responsive-design');
add_theme_support('html5');
add_theme_support('custom-selective-refresh-widgets');


/**
 * load our css
 */

function wphierarchy_enqueue_styles()
{
    wp_enqueue_style('main-css', get_stylesheet_uri() . '/style.css');
}


add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_styles');

/**
 * location => dashboard/appearance/customize/menus/
 */
register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'wp-hierarchy'),
    'bottom-menu' => esc_html__('Footer', 'wp-hierarchy'),
]);

register_sidebar('New sidebar');