<?php
/* Template Name: Paraguay */
// Carga el header personalizado para Paraguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-paraguay.php';
?>

<style>
    .hero-paraguay {
        display: flex;
        /* width: 1280px; */
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }

    .hero-paraguay-container {
        display: flex;
        width: 1046px;
        height: 389px;
        padding: 30px 0px;
        justify-content: center;
        align-items: flex-start;
        gap: 85px;
    }

    .hero-paraguay-input-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }

    .hero-paraguay-title {}

    .hero-paraguay-h2 {
        color: #414141;
        margin: 0px;
        /* H1 */
        font-family: "Museo Sans Rounded";
        font-size: 44px;
        font-style: normal;
        font-weight: 700;
        line-height: 131.523%;
        /* 57.87px */
    }

    .hero-paraguay-search {
        display: flex;
        padding: 20px;
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;

        border-radius: 10px;
        background: var(--Surface-Surface-brand, #FF7500);
    }

    .hero-paraguay-p {
        color: #FFF;
        font-family: "Karla", sans-serif;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: 131.523%;
        /* 19.728px */

        width: 346px;
    }

    .hero-paraguay-input-search {
        display: flex;
        align-items: flex-start;
        gap: 19px;
    }

    .hero-paraguay-input {
        display: flex;
        width: 285px;
        padding: 12px 15px;
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;

        border-radius: 5px;
        border: var(--Cantidad, 1px) solid var(--Border-Border-brand-1, #FF7500);
        background: var(--Surface-Surface-default, #FFF);
    }

    .hero-paraguay-button {
        display: flex;
        padding: 10px 15px;
        align-items: center;
        gap: 20px;

        border-radius: 5.578px;
        background: var(--Surface-Surface-gris, #414141);
        box-shadow: 0px 2.231px 4.462px 0px rgba(0, 0, 0, 0.15);

        color: var(--Text-Text-negative, #FFF);
        font-family: "Karla", sans-serif;
        font-size: 13.387px;
        font-style: normal;
        font-weight: 700;
        line-height: 15.618px;
        /* 116.667% */
        text-decoration: none;
    }

    .hero-paraguay-image-container {}

    .hero-paraguay-image {}


    .hero2-paraguay {
        display: flex;
        padding: 30px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 40px;
        align-self: stretch;

        background: var(--Surface-Surface-brand, #FF7500);
    }

    .hero2-paraguay-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }

    .hero2-paraguay-h2 {
        color: var(--Text-Text-negative, #FFF);

        /* H2 */
        font-family: "Simply Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .hero2-paraguay-clientes {
        display: flex;
        height: 273px;
        padding: 30px;
        justify-content: center;
        align-items: flex-end;
        border-radius: 10px;
        background: var(--Surface-Surface-default, #FFF);
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .hero2-paraguay-clientes-image-container {}

    .hero2-paraguay-clientes-image {
        width: 243px;
        height: 160px;
    }

    .hero2-paraguay-clientes-text-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 23px;
        width: 271px;
    }

    .hero2-paraguay-clientes-h3 {
        color: var(--Text-Text-naranja, #FF7500);
        font-family: "Museo Sans Rounded";
        font-size: 23px;
        font-style: normal;
        font-weight: 700;
        line-height: 14px;
        /* 60.87% */
    }

    .hero2-paraguay-clientes-p {
        color: #414141;
        font-family: Karla;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 145%;
        /* 17.4px */
    }

    .hero2-paraguay-button-contactar-clientes-container {
        display: flex;
        height: 93px;
        justify-content: center;
        align-items: flex-end;
        gap: 22px;
        align-self: stretch;
    }

    .hero2-paraguay-button-contactar-clientes {
        display: flex;
        padding: 7px 25px;
        align-items: center;
        gap: 22px;

        border-radius: 5px;
        background: var(--Nasanja-Soydelivery, #FF7500);
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);

        color: var(--Text-Text-negative, #FFF);

        /* Body XS Bold */
        font-family: Karla;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 14px;
        /* 116.667% */
        text-decoration: none;
    }

    .hero2-paraguay-repartidores {
        display: flex;
        height: 273px;
        padding: 30px;
        justify-content: center;
        align-items: flex-end;

        border-radius: 10px;
        background: var(--Surface-Surface-default, #FFF);
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .hero2-paraguay-repartidores-text-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 23px;
        align-self: stretch;
    }

    .hero2-paraguay-repartidores-h2 {
        color: var(--Text-Text-naranja, #FF7500);
        font-family: "Museo Sans Rounded";
        font-size: 23px;
        font-style: normal;
        font-weight: 700;
        line-height: 14px;
        /* 60.87% */
    }

    .hero2-paraguay-repartidores-p {
        color: #414141;
        font-family: Karla;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 100%;
        /* 12px */
    }

    .hero2-paraguay-repartidores-p {
        color: #414141;
        font-family: Karla;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 100%;
    }

    .hero2-paraguay-button-contactar-repartidores-container {
        display: flex;
        justify-content: center;
        align-items: flex-end;
        gap: 22px;
        flex: 1 0 0;
    }

    .hero2-paraguay-button-contactar-repartidores-particular {
        display: flex;
        padding: 7px 25px;
        align-items: center;
        gap: 22px;

        border-radius: 5px;
        border: 1.5px solid var(--Border-Border-brand-1, #FF7500);
        background: var(--Surface-Surface-default, #FFF);
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);

        color: var(--Text-Text-primario, #25221E);

        /* Body XS Bold */
        font-family: Karla;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 14px;
        /* 116.667% */
        text-decoration: none;
    }

    .hero2-paraguay-button-contactar-repartidores-empresa {
        display: flex;
        padding: 7px 25px;
        align-items: center;
        gap: 22px;

        border-radius: 5px;
        background: var(--Nasanja-Soydelivery, #FF7500);
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);

        color: var(--Text-Text-negative, #FFF);

        /* Body XS Bold */
        font-family: Karla;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 14px;
        /* 116.667% */
        text-decoration: none;
    }

    .hero2-paraguay-repartidores-image-container {}

    .hero2-paraguay-repartidores-image {}


    .servicios__paraguay {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 48px;
        padding: 30px;
    }

    .servicios__paraguay__header {}

    .servicios__paraguay__title {
        color: var(--Text-Text-primario, #25221E);

        /* H2 */
        font-family: "Simply Sans";
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;

    }

    .servicios__paraguay__logo-item {
        display: flex;
        width: 308px;
        height: 364px;
        padding: 30px;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;

        border-radius: 10px;
        border: 7px solid var(--Border-Border-brand-1, #FF7500);
        background: var(--Surface-Surface-default, #FFF);
    }

    .servicios__paraguay__logo-image {}

    .servicios__paraguay__logo-title {

        color: #FF7500;
        text-align: center;
        font-family: "Mulish";
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 108.523%;
        /* 21.705px */
    }

    .servicios__paraguay__logo-description {
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

    .servicios__paraguay__content {}

    .servicios__paraguay__contact__container {
        border-radius: 5.578px;
        background: var(--Nasanja-Soydelivery, #FF7500);
        box-shadow: 0px 2.231px 4.462px 0px rgba(0, 0, 0, 0.25);
        color: #414141;
        text-align: center;

        display: flex;
        width: 310px;
        padding: 11px 30px;
        align-items: center;
        gap: 24.543px;
        text-decoration: none;
        justify-content: center;
    }

    .servicios__paraguay__contact-link {
        text-decoration: none;
        /* p */
        font-family: "Karla";
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
        text-align: center;
    }

    .servicios__paraguay__item__conteiner {
        display: flex;
        flex-direction: column;
        gap: 48px;
    }

    .servicios__paraguay__item1 {
        display: flex;
        justify-content: center;
        gap: 31px;
    }

    .servicios__paraguay__item2 {
        display: flex;
        justify-content: center;
        gap: 31px;
    }
</style>

<main id="site-content" role="main">
    <section class="hero-paraguay">
        <div class="hero-paraguay-container">
            <div class="hero-paraguay-input-container">
                <div class="hero-paraguay-title">
                    <h2 class="hero-paraguay-h2">Tecnología e innovación aplicada a tus envíos</h2>
                </div>
            </div>
            <div class="hero-paraguay-image-container">
                <img class="hero-paraguay-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-2.png" alt="">
            </div>
        </div>
    </section>
    <section class="hero2-paraguay">
        <h2 class="hero2-paraguay-h2">¿Qué esperás para despegar?</h2>
        <div class="hero2-paraguay-container">



            <div class="hero2-paraguay-clientes">
                <div class="hero2-paraguay-clientes-image-container">
                    <img class="hero2-paraguay-clientes-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-4.svg" alt="">
                </div>
                <div class="hero2-paraguay-clientes-text-container">
                    <h3 class="hero2-paraguay-clientes-h3">Enviar con Soydelivery</h3>
                    <p class="hero2-paraguay-clientes-p">Llegá a tus clientes en el día, y llevá tu negocio al siguiente
                        nivel</p>
                    <div class="hero2-paraguay-button-contactar-clientes-container">
                        <a class="hero2-paraguay-button-contactar-clientes"
                            href="http://localhost/wordpress/contacto/">Contactar</a>
                    </div>

                </div>
            </div>

            <div class="hero2-paraguay-repartidores">
                <div class="hero2-paraguay-repartidores-text-container">
                    <h2 class="hero2-paraguay-repartidores-h2">¡Te estamos buscando!</h2>
                    <p class="hero2-paraguay-repartidores-p">¿Tenés un vehículo y querés trabajar con nosotros?</p>
                    <p class="hero2-paraguay-repartidores-p">Completa el formulario y nos pondremos en contacto contigo.
                    </p>

                    <div class="hero2-paraguay-button-contactar-repartidores-container">
                        <a class="hero2-paraguay-button-contactar-repartidores-particular"
                            href="http://localhost/wordpress/quiero-ser-chofer/">Soy particular</a>
                        <a class="hero2-paraguay-button-contactar-repartidores-empresa"
                            href="http://localhost/wordpress/chofer-empresa/">Soy empresa</a>
                    </div>

                </div>
                <div class="hero2-paraguay-repartidores-image-container">
                    <img class="hero2-paraguay-repartidores-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/camion.svg" alt="">
                </div>
            </div>

    </section>

    <section class="servicios__paraguay">
        <div class="servicios__paraguay__header">
            <h2 class="servicios__paraguay__title">Conoce más sobre nuestros servicios</h2>
        </div>
        <div class="servicios__paraguay__item__conteiner">
            <div class="servicios__paraguay__item1">
                <div class="servicios__paraguay__logo-item">
                    <img class="servicios__paraguay__logo-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/same-day.svg"
                        alt="">
                    <h3 class="servicios__paraguay__logo-title">Same day</h3>
                    <p class="servicios__paraguay__logo-description">Retiramos y entregamos tus envíos en el día, para
                        que
                        tus clientes no tengan que esperar más. Tenemos
                        soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                </div>
                <div class="servicios__paraguay__logo-item">
                    <img class="servicios__paraguay__logo-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/fulfillment.svg"
                        alt="">
                    <h3 class="servicios__paraguay__logo-title">Fullfilment</h3>
                    <p class="servicios__paraguay__logo-description">¡Enfocate en las ventas que la logística está
                        resuelta!
                        Ofrecemos un servicio integral para tu
                        empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
                </div>
            </div>
            <div class="servicios__paraguay__item2">
                <div class="servicios__paraguay__logo-item">
                    <img class="servicios__paraguay__logo-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/supermercados.svg"
                        alt="">
                    <h3 class="servicios__paraguay__logo-title">Supermercados</h3>
                    <p class="servicios__paraguay__logo-description">Ofrecemos servicios de flota de vehículos dedicados
                        a
                        operaciones exclusivas de entrega a domicilio y
                        envíos express, que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.
                    </p>
                </div>
                <div class="servicios__paraguay__logo-item">
                    <img class="servicios__paraguay__logo-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/flota-dedicada.svg"
                        alt="">
                    <h3 class="servicios__paraguay__logo-title">Flota dedicada</h3>
                    <p class="servicios__paraguay__logo-description">Somos proveedores logísticos de Mercado Envíos
                        Flex.
                        Tus
                        ventas migran automáticamente a nuestro
                        sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
                </div>
                <div class="servicios__paraguay__logo-item">
                    <img class="servicios__paraguay__logo-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/software.png"
                        alt="">
                    <h3 class="servicios__paraguay__logo-title">Software</h3>
                    <p class="servicios__paraguay__logo-description">Nuestra app de conductores ofrece los recursos
                        tecnológicos necesarios para entregas exitosas:
                        geolocalización, fecha y hora de finalización de pedidos, la opción de subir una foto al sistema
                        en
                        cada una de las entregas y mucho más. Las garantías y efectividad que tus clientes necesitan.
                    </p>
                </div>
            </div>
        </div>

        <div class="servicios__paraguay__content">


            <div class="servicios__paraguay__contact__container">
                <a class="servicios__paraguay__contact-link"
                    href="http://localhost/wordpress/cotiza-tu-servicios-paraguay/">Contactar</a>
            </div>

    </section>
    <section class="second_slider">
        <img class="mcaca" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-1.png" alt="">
        <?php get_template_part('template-parts/second_slider'); ?>
    </section>

</main>

<?php get_footer(); ?>