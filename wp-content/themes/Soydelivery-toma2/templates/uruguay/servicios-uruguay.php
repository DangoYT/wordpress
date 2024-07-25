<?php
/* Template Name: Servicios Uruguay */
// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>
<style>
    .servicios__uru {
        display: flex;
        padding: 30px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 48px;
        align-self: stretch;
        background: var(--Surface-Surface-brand, #FF7500);
    }

    .servicios__uru__title {
        color: #FFF;

        /* H2 */
        font-family: "Simply Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .servicios__uru__container {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: var(--Surface-Surface-brand, #FF7500);
        gap: 45px;
    }

    .servicios__uru__list {
        display: flex;
        flex-direction: column;
        gap: 31px;

    }

    .servicios__uru__list1 {
        display: flex;
        align-items: flex-start;
        gap: 31px;
    }

    .servicios__uru__list2 {
        display: flex;
        align-items: flex-start;
        gap: 31px;
    }

    .servicios__uru__item {
        display: flex;
        width: 308px;
        height: 364px;
        padding: 30px;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        /* gap: 45px; */
        border-radius: 10px;
        background: var(--Surface-Surface-default, #FFF);
    }

    .servicios__uru__item h3 {
        margin: 5px;
        color: #FF7500;
        text-align: center;
        font-family: "Mulish";
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 108.523%;
        /* 21.705px */
    }

    .servicios__uru__item p {
        margin: 0px;
        color: #414141;
        text-align: center;

        /* p */
        font-family: "Karla", sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .uru {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .services__item-link {
        text-decoration: none;
    }
</style>


<main id="site-content" role="main">
    <section class="servicios__uruguay">
        <div class="servicios__uruguay_all_container">
            <div class="navegador">
                <img class="arrow"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg" alt="">
                <p class="title__navegador">Servicios</p>
            </div>
            <div class="servicios__uruguay_container">
                <h2 class="servicios__uruguay_title">Conoce más sobre nuestros servicios</h2>
                <div class="servicios__uruguay_description">
                    <p>Brindamos una amplia variedad de soluciones
                        a nuestros clientes</p>
                </div>
                <div class="servicios__uruguay_items_container">
                    <div class="servicios__uruguay_item">
                        <img class="servicios__uruguay_imgs"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/same-day.svg"
                            alt="">
                        <div class="servicios__uruguay_h3_container">
                            <h3>Same day</h3>
                        </div>

                        <p class="servicios__uruguay_p">Retiramos y entregamos tus envíos en el día, para que tus
                            clientes no tengan que
                            esperar más.
                            Tenemos
                            soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                    </div>
                    <div class="servicios__uruguay_item">
                        <img class="servicios__uruguay_imgs"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/ml-flex.svg"
                            alt="">
                        <div class="servicios__uruguay_h3_container">
                            <h3>MercadoLibre Flex</h3>
                        </div>

                        <p class="servicios__uruguay_p">Retiramos y entregamos tus envíos en el día, para que tus
                            clientes no tengan que
                            esperar más.
                            Tenemos
                            soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                    </div>
                    <div class="servicios__uruguay_item">
                        <img class="servicios__uruguay_imgs"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/fulfillment.svg"
                            alt="">
                        <div class="servicios__uruguay_h3_container">
                            <h3>Fullfilment</h3>
                        </div>

                        <p class="servicios__uruguay_p">¡Enfocate en las ventas que la logística está resuelta!
                            Ofrecemos
                            un servicio
                            integral para
                            tu
                            empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
                    </div>
                    <div class="servicios__uruguay_item">
                        <img class="servicios__uruguay_imgsDesfasadas"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/supermercados.svg"
                            alt="">
                        <div class="servicios__uruguay_h3_container">
                            <h3>Supermercados</h3>
                        </div>

                        <p class="servicios__uruguay_p">Ofrecemos servicios de flota de vehículos dedicados a
                            operaciones
                            exclusivas de
                            entrega a
                            domicilio y
                            envíos express,
                            que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.
                        </p>
                    </div>
                    <div class="servicios__uruguay_item">
                        <img class="servicios__uruguay_imgs"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/flota-dedicada.svg"
                            alt="">
                        <div class="servicios__uruguay_h3_container">
                            <h3>Flota dedicada</h3>
                        </div>

                        <p class="servicios__uruguay_p">Somos proveedores logísticos de Mercado Envíos Flex. Tus ventas
                            migran
                            automáticamente a
                            nuestro
                            sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
                    </div>
                    <div class="servicios__uruguay_item">
                        <img class="servicios__uruguay_imgsDesfasadas"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/software.png"
                            alt="">
                        <div class="servicios__uruguay_h3_container">
                            <h3>Software</h3>
                        </div>

                        <p class="servicios__uruguay_item_p_software">Nuestra app de conductores ofrece los recursos
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
    <section class="cuponera-uruguay">
        <h2 class="cuponera-uruguay__title">Además ofrecemos servicios para pequeños emprendedores</h2>
        <div class="cuponera-uruguay__item">
            <img class="cuponera-uruguay__item-image"
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/cuponera.png" alt="">
            <h3 class="cuponera-uruguay__item-title">Cuponera</h3>
            <p class="cuponera-uruguay__item-description">Si sos un emprendedor que maneja pequeños volúmenes de
                envíos,
                esta modalidad te permite una flexibilidad única, acorde a tu crecimiento que te permite brindar un
                servicio de excelencia a tus clientes, sin tener que enfrentar grandes desembolsos de dinero.</p>
            <div class="cuponera-uruguay__item-link-wrapper">
                <a class="cuponera-uruguay__item-link" href="">Quiero saber más</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>