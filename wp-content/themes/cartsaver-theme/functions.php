<?php
if (! defined('ABSPATH')) {
    exit;
}

function cartsaver_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'cartsaver_theme_setup');

function cartsaver_theme_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'cartsaver-theme-style',
        get_stylesheet_uri(),
        [],
        $theme_version
    );
}
add_action('wp_enqueue_scripts', 'cartsaver_theme_enqueue_assets');

