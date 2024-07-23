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
                <a href="http://localhost/wordpress/"><img class="logoSdUy"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logos/uruguay-blanco.svg"
                        alt="Logo de tu sitio"></a>

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

    <!-- Popup -->
    <div id="contact-popup" class="popup">
        <div class="popup-content">
            <!-- <span class="close-popup">&times;</span> -->
            <ul>
                <li><a href="http://localhost/wordpress/cotiza-tu-servicio/">Cotiza tu servicio</a></li>
                <li><a href="http://localhost/wordpress/trabaja-con-nosotros/">Trabaja con nosotros</a></li>
                <li><a href="http://localhost/wordpress/quiero-ser-chofer/">Quiero ser chofer</a></li>
                <li><a href="http://localhost/wordpress/chofer-empresa/">Quiero ser chofer empresa</a></li>
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var contactMenuItem = document.querySelector('.menu-item a[href="#contact-popup"]');
            var popup = document.getElementById('contact-popup');
            var closePopup = document.querySelector('.close-popup');

            if (contactMenuItem) {
                contactMenuItem.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (popup) {
                        popup.classList.add('show'); // Añadir la clase para mostrar el popup
                    }
                });
            }

            if (closePopup) {
                closePopup.addEventListener('click', function () {
                    if (popup) {
                        popup.classList.remove('show'); // Quitar la clase para ocultar el popup
                    }
                });
            }

            if (popup) {
                window.addEventListener('click', function (e) {
                    if (e.target == popup) {
                        popup.classList.remove('show'); // Quitar la clase si se hace clic fuera del popup
                    }
                });
            }
        });
    </script>

</body>

</html>