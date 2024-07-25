<?php
/* Template Name: Servicios Peru */
// Carga el header personalizado para Perú desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-peru.php';
?>

<style>
    .peru {
        margin: 30px 0px 30px 30px;
    }

    .servicios__peru {
        display: flex;
        padding: 30px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 48px;
        align-self: stretch;

        background: var(--Surface-Surface-brand, #FF7500);
    }

    .servicios__peru__title {
        color: #FFF;

        /* H2 */
        font-family: "Simply Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .servicios__peru__container {}

    .servicios__peru__list {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .servicios__peru__item {
        display: flex;
        width: 308px;
        height: 364px;
        padding: 30px;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        gap: 55px;

        border-radius: 10px;
        background: var(--Surface-Surface-default, #FFF);
    }

    .servicios__peru__item h3 {
        margin: 0px;
        color: #FF7500;
        text-align: center;
        font-family: Mulish;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 108.523%;
        /* 21.705px */
    }

    .servicios__peru__item p {
        margin: 0px;
        color: #414141;
        text-align: center;

        /* p */
        font-family: Karla;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .servicios__peru__itemContainer1 {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 31px;
    }

    .servicios__peru__itemContainer2 {
        display: flex;
        align-items: center;
        gap: 31px;
        justify-content: center;
    }
</style>

<main id="site-content" role="main">
    <div class="navegador peru">
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg"
            alt="Cajita">
        <p class="title__navegador">Conocenos</p>
    </div>
    <section class="servicios__peru">
        <h2 class="servicios__peru__title">Conoce más sobre nuestros servicios</h2>
        <div class="servicios__peru__container">

            <div class="servicios__peru__list">
                <div class="servicios__peru__itemContainer1">
                    <div class="servicios__peru__item">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/same-day.svg"
                            alt="">
                        <h3>Same day</h3>
                        <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más.
                            Tenemos
                            soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                    </div>
                    <div class="servicios__peru__item">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/fulfillment.svg"
                            alt="">
                        <h3>Fullfilment</h3>
                        <p>¡Enfocate en las ventas que la logística está resuelta! Ofrecemos un servicio integral para
                            tu
                            empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
                    </div>
                </div>

                <div class="servicios__peru__itemContainer2">
                    <div class="servicios__peru__item">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/supermercados.svg"
                            alt="">
                        <h3>Supermercados</h3>
                        <p>Ofrecemos servicios de flota de vehículos dedicados a operaciones exclusivas de entrega a
                            domicilio y
                            envíos express,
                            que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.
                        </p>
                    </div>
                    <div class="servicios__peru__item">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/flota-dedicada.svg"
                            alt="">
                        <h3>Flota dedicada</h3>
                        <p>Somos proveedores logísticos de Mercado Envíos Flex. Tus ventas migran automáticamente a
                            nuestro
                            sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
                    </div>
                    <div class="servicios__peru__item">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/software.png"
                            alt="">
                        <h3>Software</h3>
                        <p>Nuestra app de conductores ofrece los recursos tecnológicos necesarios para entregas
                            exitosas:
                            geolocalización, fecha y hora de finalización de pedidos, la opción de subir una foto al
                            sistema en
                            cada una de las entregas y mucho más. Las garantías y efectividad que tus clientes
                            necesitan.</p>
                    </div>
                </div>


            </div>
        </div>
        <a href="" class="btn-contactar">Contactar</a>
    </section>
</main>

<?php get_footer(); ?>