<?php

function mitema_registrer_sidebar()
{
    register_sidebar(
        array(
            'name' => 'Pepito Sidebar',
            'id' => 'sidebar',
            'description' => 'Mi tema sidebar',
            'class' => 'mitema_sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        )
    );
}

function mitema_support_theme()
{

    add_theme_support('widgets');
    add_theme_support('html5');
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mitema_support_theme');
add_action('widgets_init', 'mitema_registrer_sidebar');
function mitema_enqueue_styles()
{
    // Enqueue the main stylesheet
    wp_enqueue_style('mitema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mitema_enqueue_styles');

?>