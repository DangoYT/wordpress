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
            'footer' => __('Footer Menu'),
            'menu_uruguay' => __('Menú Uruguay'),
            'menu_paraguay' => __('Menú Paraguay'),
            'menu_peru' => __('Menú Perú')
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
}
add_action('init', 'soydelivery_custom_post_types');

// Agregar un menú personalizado en el administrador para crear noticias
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

// Encolar estilos y scripts necesarios
function soydelivery_enqueue_assets()
{
    // Encolar Slick Carousel
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);

    // Encolar Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', false);

    // Encolar el archivo CSS de fuentes locales
    wp_enqueue_style('font-styles', get_template_directory_uri() . '/assets/css/fonts.css');

    wp_enqueue_script('hamburger-menu-js', get_template_directory_uri() . '/assets/js/hamburger-menu.js', array('jquery'), null, true);

    // Encolar el archivo de JavaScript para el formulario
    wp_enqueue_script('form-handler-js', get_template_directory_uri() . '/assets/js/form-handler.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'soydelivery_enqueue_assets');

// Función para detectar si es un dispositivo móvil
function is_mobile()
{
    return wp_is_mobile();
}

// Función para obtener el país basado en la URL
function get_country()
{
    // Esto es un ejemplo, ajusta la lógica según tu implementación
    if (strpos(home_url(), 'paraguay') !== false) {
        return 'paraguay';
    } elseif (strpos(home_url(), 'peru') !== false) {
        return 'peru';
    } elseif (strpos(home_url(), 'uruguay') !== false) {
        return 'uruguay';
    } else {
        return 'global';
    }
}

// Funciones para agregar y cargar plantillas de página personalizadas
function add_custom_page_templates($templates)
{
    $subdirs = array('paraguay', 'peru', 'uruguay');
    foreach ($subdirs as $subdir) {
        $dir = get_template_directory() . '/templates/' . $subdir . '/';
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if (strpos($file, '.php') !== false) {
                    $template_name = str_replace('.php', '', $file);
                    $template_name = str_replace('-', ' ', $template_name);
                    $templates['templates/' . $subdir . '/' . $file] = ucfirst($subdir) . ' - ' . ucfirst($template_name);
                }
            }
        }
    }
    return $templates;
}
add_filter('theme_page_templates', 'add_custom_page_templates');

function load_custom_templates($template)
{
    global $post;
    if (!$post)
        return $template;

    $custom_templates = array();
    $subdirs = array('paraguay', 'peru', 'uruguay');
    foreach ($subdirs as $subdir) {
        $dir = get_template_directory() . '/templates/' . $subdir . '/';
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if (strpos($file, '.php') !== false) {
                    $template_name = str_replace('.php', '', $file);
                    $template_name = str_replace('-', ' ', $template_name);
                    $custom_templates['templates/' . $subdir . '/' . $file] = ucfirst($subdir) . ' - ' . ucfirst($template_name);
                }
            }
        }
    }

    $page_template = get_page_template_slug($post);
    if ($page_template && isset($custom_templates[$page_template])) {
        $template_path = get_template_directory() . '/' . $page_template;
        if (file_exists($template_path)) {
            $template = $template_path;
        }
    }
    return $template;
}
add_filter('template_include', 'load_custom_templates');
?>