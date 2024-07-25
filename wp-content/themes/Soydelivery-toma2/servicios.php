<?php
/* Template Name: Servicios */
get_header(); ?>

<main id="site-content" role="main">
    <section class="global__servicios">
        <div class="global__servicios_all_container">
            <div class="navegador">
                <img class="arrow"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg" alt="">
                <p class="title__navegador">Servicios</p>
            </div>
            <div class="global__servicios_container">
                <h2 class="global__servicios_title">Conoce más sobre nuestros servicios</h2>
                <div class="global__servicios_description">
                    <p>Brindamos una amplia variedad de soluciones
                        a nuestros clientes</p>
                </div>
                <div class="global__servicios_items_container">
                    <div class="global__servicios_item">
                        <img class="global__servicios_imgs"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/same-day.svg"
                            alt="">
                        <div class="global__servicios_h3_container">
                            <h3>Same day</h3>
                        </div>

                        <p class="global__servicios_p">Retiramos y entregamos tus envíos en el día, para que tus
                            clientes no tengan que
                            esperar más.
                            Tenemos
                            soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                    </div>
                    <div class="global__servicios_item">
                        <img class="global__servicios_imgs"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/ml-flex.svg"
                            alt="">
                        <div class="global__servicios_h3_container">
                            <h3>MercadoLibre Flex</h3>
                        </div>

                        <p class="global__servicios_p">Retiramos y entregamos tus envíos en el día, para que tus
                            clientes no tengan que
                            esperar más.
                            Tenemos
                            soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                    </div>
                    <div class="global__servicios_item">
                        <img class="global__servicios_imgs"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/fulfillment.svg"
                            alt="">
                        <div class="global__servicios_h3_container">
                            <h3>Fullfilment</h3>
                        </div>

                        <p class="global__servicios_p">¡Enfocate en las ventas que la logística está resuelta! Ofrecemos
                            un servicio
                            integral para
                            tu
                            empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
                    </div>
                    <div class="global__servicios_item">
                        <img class="global__servicios_imgsDesfasadas"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/supermercados.svg"
                            alt="">
                        <div class="global__servicios_h3_container">
                            <h3>Supermercados</h3>
                        </div>

                        <p class="global__servicios_p">Ofrecemos servicios de flota de vehículos dedicados a operaciones
                            exclusivas de
                            entrega a
                            domicilio y
                            envíos express,
                            que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.
                        </p>
                    </div>
                    <div class="global__servicios_item">
                        <img class="global__servicios_imgs"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/flota-dedicada.svg"
                            alt="">
                        <div class="global__servicios_h3_container">
                            <h3>Flota dedicada</h3>
                        </div>

                        <p class="global__servicios_p">Somos proveedores logísticos de Mercado Envíos Flex. Tus ventas
                            migran
                            automáticamente a
                            nuestro
                            sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
                    </div>
                    <div class="global__servicios_item">
                        <img class="global__servicios_imgsDesfasadas"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/software.png"
                            alt="">
                        <div class="global__servicios_h3_container">
                            <h3>Software</h3>
                        </div>

                        <p class="global__servicios_item_p_software">Nuestra app de conductores ofrece los recursos
                            tecnológicos necesarios para entregas
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