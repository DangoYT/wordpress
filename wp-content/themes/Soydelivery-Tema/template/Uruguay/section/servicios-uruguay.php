<?php
/* Template Name: Servicios Uruguay */
get_header('uruguay'); // Carga el header personalizado para Uruguay
?>

<main id="site-content" role="main">
    <div class="navegador">
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
        <p class="title__navegador">Conocenos</p>
    </div>
    <section class="servicios__uruguay">
        <h2 class="servicios__uruguay__title">Conoce más sobre nuestros servicios</h2>
        <div class="servicios__uruguay__container">

            <div class="servicios__uruguay__list">
                <div class="servicios__uruguay__item">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/images/sameday.png" alt="">
                    <h3>Same day</h3>
                    <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más.
                        Tenemos
                        soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                </div>
                <div class="servicios__uruguay__item">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/images/mlFlex.png" alt="">
                    <h3>MercadoLibre Flex</h3>
                    <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más.
                        Tenemos
                        soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                </div>
                <div class="servicios__uruguay__item">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/images/fullfilment.png" alt="">
                    <h3>Fullfilment</h3>
                    <p>¡Enfocate en las ventas que la logística está resuelta! Ofrecemos un servicio integral para
                        tu
                        empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
                </div>
                <div class="servicios__uruguay__item">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/images/supermercado.png" alt="">
                    <h3>Supermercados</h3>
                    <p>Ofrecemos servicios de flota de vehículos dedicados a operaciones exclusivas de entrega a
                        domicilio y
                        envíos express,
                        que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.
                    </p>
                </div>
                <div class="servicios__uruguay__item">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/images/flotaDedicada.png" alt="">
                    <h3>Flota dedicada</h3>
                    <p>Somos proveedores logísticos de Mercado Envíos Flex. Tus ventas migran automáticamente a
                        nuestro
                        sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
                </div>
                <div class="servicios__uruguay__item">
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
    </section>
    <div class="services">
        <h2 class="services__title">Además ofrecemos servicios para pequeños emprendedores</h2>
        <div class="services__item">
            <img class="services__item-image" src="<?php echo get_template_directory_uri(); ?>/images/cuponera.png"
                alt="">
            <div class="services__item-content">
                <h3 class="services__item-title">Cuponera</h3>
                <p class="services__item-description">Si sos un emprendedor que maneja pequeños volúmenes de envíos,
                    esta modalidad te permite una flexibilidad única, acorde a tu crecimiento que te permite brindar un
                    servicio de excelencia a tus clientes, sin tener que enfrentar grandes desembolsos de dinero.</p>
                <div class="services__item-link-wrapper">
                    <a class="services__item-link" href="">Quiero saber más</a>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>