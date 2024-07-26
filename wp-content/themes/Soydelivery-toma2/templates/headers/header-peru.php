<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-peru">
        <nav class="nav-peru">
            <div class="logoSdUy_container">
                <a href="http://localhost/wordpress/"><img class="logoSdUy"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logos/peru-blanco.svg"
                        alt="Logo de tu sitio"></a>

            </div>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu_peru',
                    'menu_class' => 'ulContainer',
                    'container' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </nav>
    </header>
    <?php wp_body_open(); ?>

    <!-- Popup -->
    <div id="contact-popup" class="popup">
        <div class="popup-content">
            <!-- <span class="close-popup">&times;</span> -->
            <ul>
                <li><a href="http://localhost/wordpress/cotiza-tu-servicios-peru/">Cotiza tu servicio</a></li>
                <li><a href="http://localhost/wordpress/trabaja-con-nosotros-peru/">Trabaja con nosotros</a></li>
                <li><a href="http://localhost/wordpress/chofer-peru/">Quiero ser chofer</a></li>
                <li><a href="http://localhost/wordpress/chofer-empresa-peru/">Quiero ser chofer empresa</a></li>
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var contactMenuItem = document.querySelector('.menu-item a[href="#contact-popup"]');
            var popup = document.getElementById('contact-popup');
            var closePopup = document.querySelector('.close-popup');

            contactMenuItem.addEventListener('click', function (e) {
                e.preventDefault();
                popup.classList.add('show'); // Añadir la clase para mostrar el popup
            });

            closePopup.addEventListener('click', function () {
                popup.classList.remove('show'); // Quitar la clase para ocultar el popup
            });

            window.addEventListener('click', function (e) {
                if (e.target == popup) {
                    popup.classList.remove('show'); // Quitar la clase si se hace clic fuera del popup
                }
            });
        });

    </script>
</body>

</html>