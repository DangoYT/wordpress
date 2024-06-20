<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-uruguay">
        <nav class="nav-uruguay">
            <div class="logoSdUy_container">
                <img class="logoSdUy" src="<?php echo get_template_directory_uri(); ?>/images/logoUyBlanco.svg"
                    alt="Logo de tu sitio">
            </div>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu_uruguay',
                    'menu_class' => 'ulContainer',
                    'container' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </nav>
    </header>
    <?php wp_body_open(); ?>