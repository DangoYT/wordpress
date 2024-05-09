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
        <nav id="nav_id" class="nav_class">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_GlobalDev.png" alt="Logo de tu sitio">
            <ul id="ul_id" class="ul_class">
                <li id="li_id" class="li_class"><a href="">Inicio</a></li>
                <li id="li_id" class="li_class"><a href="">Servicios</a></li>
                <li id="li_id" class="li_class"><a href="">Conocenos</a></li>
                <li id="li_id" class="li_class"><a href="">Contacto</a></li>
            </ul>
        </nav><!-- #site-navigation -->

    </header>