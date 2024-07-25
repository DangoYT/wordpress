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
    <header class="header__global">
        <nav id="nav_id" class="nav__global__container">
            <div class="logo__global__container">
                <a href="http://localhost/wordpress/">
                    <img class="logo__global"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logos/Global-Blanco.png"
                        alt="Logo de tu sitio"></a>

            </div>
            <div class="menuHamburguesa__global__container">
                <div id="hamburger-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/menuHamburguesa-blanco.svg"
                        alt="">
                </div>
            </div>
            <div class="ul__global__container">
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

    <div id="hamburger-menu-popup" class="hamburger-menu-popup">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'header', // Utiliza el nombre del menú que registraste
                'container' => false,
                'menu_class' => 'hamburger-popup-menu', // Asegúrate de que esta clase coincide con tus estilos CSS
                'items_wrap' => '<ul>%3$s</ul>',
            )
        );
        ?>
    </div>

    <?php wp_footer(); ?>
</body>

</html>