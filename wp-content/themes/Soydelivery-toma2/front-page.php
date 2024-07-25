<?php get_header(); ?>

<main>

    <section class="global__encabezado">
        <div class="global__encabezado__conteiner">
            <div class="global__encabezado__title">
                <h1>Tecnología e innovación aplicada a tus envíos</h1>
            </div>
            <div class="global__encabezado__banderas__container">
                <a class="global__encabezado__banderas__uruguay" href="<?php echo site_url('/uruguay'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/banderas/uruguay.svg" alt="">
                </a>

                <a class="global__encabezado__banderas__peru" href="<?php echo site_url('/peru'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/banderas/peru.svg" alt="">
                </a>

                <a class="global__encabezado__banderas__paraguay" href="<?php echo site_url('/paraguay'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/banderas/paraguay.svg" alt="">
                </a>

            </div>

            <div class="global__encabezado__imagen__container">
                <img src="wp-content/themes/mitematres/images/Imagen.jpg" alt="">
            </div>

        </div>
    </section>

    <section class="slider__mobile">
        <div class="slider__mobile__align">
            <div class="slider__mobile__title">
                <h2>Conoce más sobre nuestros servicios</h2>
            </div>
            <div class="slider__mobile__container">
                <?php get_template_part('/template-parts/slider-servicios-mobil'); ?>
            </div>
        </div>
    </section>

    <section class="global__btn__contactar">
        <a href="contacto" class="btn-contactar">Contactar</a>
    </section>

    <section class="slider">
        <h2 class="slider__title">Deslizá para ver más noticias</h2>
        <?php get_template_part('template-parts/slider'); ?>
    </section>

    <section class="global__apoyos">
        <div class="global__apoyos__title__container">
            <h2 class="global__apoyos__title">Apoyos</h2>
        </div>
        <div class="global__apoyos__imgs__container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/pro innovate.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/startuo.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/ANII.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/cubo.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/emprela.png" alt="">
        </div>
    </section>

    <section class="servicios">
        <div class="servicios__titulo">
            <h2>Conoce más sobre nuestros servicios</h2>
        </div>
        <div class="servicios__subtitulo">
            <h3>Brindamos una amplia variedad de soluciones
                a nuestros clientes</h3>
        </div>
        <div class="servicios__logos">
            <div class="servicios__logo__item">
                <img src="wp-content/themes/mitematres/images/sameday.png" alt="">
                <h3>Same day</h3>
                <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más. Tenemos
                    soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
            </div>
            <div class="servicios__logo__item">
                <img src="wp-content/themes/mitematres/images/mlFlex.png" alt="">
                <h3>MercadoLibre Flex</h3>
                <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más. Tenemos
                    soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
            </div>
            <div class="servicios__logo__item">
                <img src="wp-content/themes/mitematres/images/fullfilment.png" alt="">
                <h3>Fullfilment</h3>
                <p>¡Enfocate en las ventas que la logística está resuelta! Ofrecemos un servicio integral para tu
                    empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
            </div>
            <div class="servicios__logo__item">
                <img src="wp-content/themes/mitematres/images/supermercado.png" alt="">
                <h3>Supermercados</h3>
                <p>Ofrecemos servicios de flota de vehículos dedicados a operaciones exclusivas de entrega a domicilio y
                    envíos express,
                    que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.
                </p>
            </div>
            <div class="servicios__logo__item">
                <img src="wp-content/themes/mitematres/images/flotaDedicada.png" alt="">
                <h3>Flota dedicada</h3>
                <p>Somos proveedores logísticos de Mercado Envíos Flex. Tus ventas migran automáticamente a nuestro
                    sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
            </div>
            <div class="servicios__logo__item">
                <img src="wp-content/themes/mitematres/images/software.png" alt="">
                <h3>Software</h3>
                <p>Nuestra app de conductores ofrece los recursos tecnológicos necesarios para entregas exitosas:
                    geolocalización, fecha y hora de finalización de pedidos, la opción de subir una foto al sistema en
                    cada una de las entregas y mucho más. Las garantías y efectividad que tus clientes necesitan.</p>
            </div>
        </div>
        <a class="btn-contactar" href="contacto">Contactar</a>
    </section>

    <section class="second_slider">
        <img class="mcaca" src="wp-content/themes/mitematres/images/mcaca.png" alt="">
        <?php get_template_part('template-parts/second_slider'); ?>
    </section>
</main>

<?php get_footer(); ?>