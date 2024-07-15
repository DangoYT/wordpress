<?php
/* Template Name: Servicios */
get_header(); ?>

<main id="site-content" role="main">
    <section class="servicios__sec">
        <div class="servicios__containerer">
            <div class="servicios__navegador">
                <div class="navegador">
                    <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
                    <p class="title__navegador">Servicios</p>
                </div>
            </div>
            <div class="servicios__content">
                <h2 class="servicios__title">Conoce más sobre nuestros servicios</h2>
                <div class="servicios__text">
                    <p>Brindamos una amplia variedad de soluciones
                        a nuestros clientes</p>
                </div>
                <div class="servicios__logos">
                    <div class="servicios__logo__item">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/sameday.png" alt="">
                        <h3>Same day</h3>
                        <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más.
                            Tenemos
                            soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                    </div>
                    <div class="servicios__logo__item">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/mlFlex.png" alt="">
                        <h3>MercadoLibre Flex</h3>
                        <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más.
                            Tenemos
                            soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                    </div>
                    <div class="servicios__logo__item">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/fullfilment.png" alt="">
                        <h3>Fullfilment</h3>
                        <p>¡Enfocate en las ventas que la logística está resuelta! Ofrecemos un servicio integral para
                            tu
                            empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
                    </div>
                    <div class="servicios__logo__item">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/supermercado.png" alt="">
                        <h3>Supermercados</h3>
                        <p>Ofrecemos servicios de flota de vehículos dedicados a operaciones exclusivas de entrega a
                            domicilio y
                            envíos express,
                            que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.
                        </p>
                    </div>
                    <div class="servicios__logo__item">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/flotaDedicada.png" alt="">
                        <h3>Flota dedicada</h3>
                        <p>Somos proveedores logísticos de Mercado Envíos Flex. Tus ventas migran automáticamente a
                            nuestro
                            sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
                    </div>
                    <div class="servicios__logo__item">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/software.png" alt="">
                        <h3>Software</h3>
                        <p>Nuestra app de conductores ofrece los recursos tecnológicos necesarios para entregas
                            exitosas:
                            geolocalización, fecha y hora de finalización de pedidos, la opción de subir una foto al
                            sistema en
                            cada una de las entregas y mucho más. Las garantías y efectividad que tus clientes
                            necesitan.</p>
                    </div>
                </div>
                <a href="contactar.php" class="btn-contactar">Contactar</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>