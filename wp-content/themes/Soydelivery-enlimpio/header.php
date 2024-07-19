<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>
    <header>
        <nav id="nav_id" class="navContainer">
            <div class="logoContainer">
                <img class="logoSoyDev"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/Global-Blanco.png"
                    alt="Logo de tu sitio">
            </div>
            <div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header', // Utiliza el nombre del menú que registraste
                        'container' => false,
                        'menu_class' => 'ulContainer', // Asegúrate de que esta clase coincide con tus estilos CSS
                        'items_wrap' => '<ul id="ul_id" class="%2$s">%3$s</ul>',
                    )
                );
                ?>
            </div>
        </nav><!-- #site-navigation -->
    </header>