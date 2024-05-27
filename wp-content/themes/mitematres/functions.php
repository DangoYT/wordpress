<?php
function mi_tema_personalizado_recursos()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_personalizado_recursos');

function registrar_mis_menus()
{
    register_nav_menus(
        array(
            'header' => __('Header Menu'),
            'footer' => __('Footer Menu')
        )
    );
}
function soydelivery_custom_post_types()
{
    // Registrar Custom Post Type Noticias
    register_post_type(
        'noticia',
        array(
            'labels' => array(
                'name' => __('Noticias'),
                'singular_name' => __('Noticia'),
                'add_new_item' => __('Agregar Nueva Noticia'),
                'edit_item' => __('Editar Noticia'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-media-document',
        )
    );
}

function soydelivery_custom_admin_menu()
{
    add_menu_page(
        'Crear Noticia', // Título de la página
        'Crear Noticia', // Título del menú
        'edit_posts', // Capacidad
        'post-new.php?post_type=noticia', // URL
        '', // Función que muestra el contenido de la página
        'dashicons-plus-alt', // Icono del menú
        6 // Posición
    );
}
add_action('admin_menu', 'soydelivery_custom_admin_menu');

add_action('init', 'soydelivery_custom_post_types');

add_action('init', 'registrar_mis_menus');
?>