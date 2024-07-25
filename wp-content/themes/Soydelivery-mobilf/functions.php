<?php
// Encolar el estilo principal del tema
function mi_tema_personalizado_recursos()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_personalizado_recursos');

// Registrar menús personalizados
function registrar_mis_menus()
{
    register_nav_menus(
        array(
            'header' => __('Header Menu'),
            'footer' => __('Footer Menu')
        )
    );
}
add_action('init', 'registrar_mis_menus');

// Registrar Custom Post Type Noticias
function soydelivery_custom_post_types()
{
    register_post_type(
        'noticia',
        array(
            'labels' => array(
                'name' => __('Noticias'),
                'singular_name' => __('Noticia'),
                'add_new_item' => __('Agregar Nueva Noticia'),
                'edit_item' => __('Editar Noticia'),
                'new_item' => __('Nueva Noticia'),
                'view_item' => __('Ver Noticia'),
                'search_items' => __('Buscar Noticias'),
                'not_found' => __('No se encontraron noticias'),
                'not_found_in_trash' => __('No se encontraron noticias en la papelera'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'noticia'),
            'supports' => array('title', 'thumbnail'), // Eliminamos 'editor'
            'menu_icon' => 'dashicons-media-document',
        )
    );
    register_post_type(
        'noticia_uruguay',
        array(
            'labels' => array(
                'name' => __('Noticias Uruguay'),
                'singular_name' => __('Noticia Uruguay'),
                'add_new_item' => __('Agregar Nueva Noticia Uruguay'),
                'edit_item' => __('Editar Noticia Uruguay'),
                'new_item' => __('Nueva Noticia Uruguay'),
                'view_item' => __('Ver Noticia Uruguay'),
                'search_items' => __('Buscar Noticias Uruguay'),
                'not_found' => __('No se encontraron noticias Uruguay'),
                'not_found_in_trash' => __('No se encontraron noticias Uruguay en la papelera'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'noticia_uruguay'),
            'supports' => array('title', 'thumbnail'), // Eliminamos 'editor'
            'menu_icon' => 'dashicons-media-document',
        )
    );
    register_post_type(
        'noticia_paraguay',
        array(
            'labels' => array(
                'name' => __('Noticias Paraguay'),
                'singular_name' => __('Noticia Paraguay'),
                'add_new_item' => __('Agregar Nueva Noticia Paraguay'),
                'edit_item' => __('Editar Noticia Paraguay'),
                'new_item' => __('Nueva Noticia Paraguay'),
                'view_item' => __('Ver Noticia Paraguay'),
                'search_items' => __('Buscar Noticias Paraguay'),
                'not_found' => __('No se encontraron noticias Paraguay'),
                'not_found_in_trash' => __('No se encontraron noticias Paraguay en la papelera'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'noticia_paraguay'),
            'supports' => array('title', 'thumbnail'), // Eliminamos 'editor'
            'menu_icon' => 'dashicons-media-document',
        )
    );

    register_post_type(
        'noticia_peru',
        array(
            'labels' => array(
                'name' => __('Noticias Peru'),
                'singular_name' => __('Noticia Peru'),
                'add_new_item' => __('Agregar Nueva Noticia Peru'),
                'edit_item' => __('Editar Noticia Peru'),
                'new_item' => __('Nueva Noticia Peru'),
                'view_item' => __('Ver Noticia Peru'),
                'search_items' => __('Buscar Noticias Peru'),
                'not_found' => __('No se encontraron noticias Peru'),
                'not_found_in_trash' => __('No se encontraron noticias Peru en la papelera'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'noticia_peru'),
            'supports' => array('title', 'thumbnail'), // Eliminamos 'editor'
            'menu_icon' => 'dashicons-media-document',
        )
    );

}

add_action('init', 'soydelivery_custom_post_types');

// Encolar estilos y scripts necesarios
function soydelivery_enqueue_assets()
{
    // Encolar Slick Carousel
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);

    // Encolar Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800&family=Museo+Sans+Rounded:wght@100;300;400;500;700&display=swap', false);

    // Encolar el archivo CSS de fuentes locales
    wp_enqueue_style('font-styles', get_template_directory_uri() . '/assets/css/fonts.css');
}
add_action('wp_enqueue_scripts', 'soydelivery_enqueue_assets');

// Registrar menús personalizados para cada país
function registrar_mis_menus_personalizados()
{
    register_nav_menus(
        array(
            'menu_uruguay' => __('Menú Uruguay'),
            'menu_paraguay' => __('Menú Paraguay'),
            'menu_peru' => __('Menú Perú')
        )
    );
}
add_action('init', 'registrar_mis_menus_personalizados');

// Función para incluir el template part del slider
function include_slider()
{
    get_template_part('template-part/sliders/slider');
}

// Hook para añadir el template part en el footer
add_action('wp_footer', 'include_slider');
?>