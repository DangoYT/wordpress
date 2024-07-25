<?php
/*
Template Name: Uruguay
*/

// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>

<main id="site-content" role="main">
    <section class="encabezado__uruguay">
        <div class="encabezado__uruguay-container">

            <div class="encabezado__uruguay-title-container">
                <h2 class="">Tecnología e innovación aplicada a tus envíos</h2>
            </div>

            <div class="encabezado__uruguay-search-container">
                <p class="">Ingresa tu número de tracking para saber el estado de tu pedido</p>
                <div class="encabezado__uruguay-search-input-container">
                    <input class="" type="number">
                    <a class="" href=""><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/Lupa-blanco.svg"
                            alt="">Buscar</a>
                </div>
            </div>

            <div class="encabezado__uruguay-image-container">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-2.png" alt="">
            </div>
        </div>
    </section>
    <section class="que-esperas-para-despegar__uruguay">

        <h2 class="que-esperas-para-despegar__uruguay-title">¿Qué esperás para despegar?</h2>

        <div class="que-esperas-para-despegar__uruguay-container">

            <div class="enviar-con-soydelivery__uruguay-container">
                <div class="enviar-con-soydelivery__uruguay-imagen-container">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-4.svg" alt="">
                </div>
                <div class="enviar-con-soydelivery__uruguay-texto-container">
                    <h3 class="">Enviar con Soydelivery</h3>
                    <p class="">Llegá a tus clientes en el día, y llevá tu negocio al siguiente
                        nivel</p>
                    <div class="enviar-con-soydelivery__uruguay-btn-container">
                        <a class="" href="http://localhost/wordpress/contacto/">Contactar</a>
                    </div>

                </div>
            </div>

            <div class="te-estamos-buscando__uruguay-container">
                <div class="te-estamos-buscando__uruguay-texto-container">
                    <h2 class="">¡Te estamos buscando!</h2>
                    <p class="">¿Tenés un vehículo y querés trabajar con nosotros?</p>
                    <p class="">Completa el formulario y nos pondremos en contacto contigo.
                    </p>

                    <div class="te-estamos-buscando__uruguay-btn-container">
                        <a class="" href="http://localhost/wordpress/quiero-ser-chofer/">Soy particular</a>
                        <a class="" href="http://localhost/wordpress/chofer-empresa/">Soy empresa</a>
                    </div>

                </div>
                <div class="te-estamos-buscando__uruguay-imagen-container">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/camion.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="soy-emprendedor-uruguay">
        <div class="soy-emprendedor-uruguay__container">

            <div class="soy-emprendedor-uruguay__image-container">
                <img class="soy-emprendedor-uruguay__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-3.png" alt="">
            </div>
            <h2 class="soy-emprendedor-uruguay__title">La forma más flexible de hacer tus envíos</h2>
            <div class="soy-emprendedor-uruguay__description">
                <p class="soy-emprendedor-uruguay__text">¡Emprende sin límites! Con nuestra cuponera para
                    emprendedores, accede
                    a envíos para tu negocio, con la comodidad de pagar con Mercado pago.¡Podrás usar los cupones
                    sin fecha de vencimiento!</p>
                <div class="soy-emprendedor-uruguay__options">

                    <div class="soy-emprendedor-uruguay__option">

                        <div class="soy-emprendedor-uruguay__checkbox-container">

                            <div class="soy-emprendedor-uruguay__checkbox-item">
                                <input class="soy-emprendedor-uruguay__checkbox" type="checkbox">
                                <label class="soy-emprendedor-uruguay__label" for="">15 Envios - $1.500</label>
                            </div>
                            <div class="soy-emprendedor-uruguay__checkbox-item">
                                <input class="soy-emprendedor-uruguay__checkbox" type="checkbox">
                                <label class="soy-emprendedor-uruguay__label" for="">50 Envios - $2.500</label>
                            </div>
                            <div class="soy-emprendedor-uruguay__checkbox-item">
                                <input class="soy-emprendedor-uruguay__checkbox" type="checkbox">
                                <label class="soy-emprendedor-uruguay__label" for="">120 Envios - $5.000</label>
                            </div>

                        </div>

                        <div class="soy-emprendedor-uruguay__button-container">
                            <a class="soy-emprendedor-uruguay__button" href="">Agregar al carrito</a>
                        </div>

                    </div>



                </div>
            </div>


        </div>
    </section>
    <section class="slider-servicios__uruguay">
        <div class="slider__mobile__align-uruguay">
            <div class="slider__mobile__title-uruguay">
                <h2>Conoce más sobre nuestros servicios</h2>
            </div>
            <div class="slider__mobile__container-uruguay">
                <?php get_template_part('/template-parts/slider-servicios-mobile-paises'); ?>
            </div>
        </div>
    </section>
    <section class="servicios__uruguay">
        <div class="servicios__uruguay__header">
            <h2 class="servicios__uruguay__title">Conoce más sobre nuestros servicios</h2>
        </div>
        <div class="servicios__uruguay__content">
            <div class="servicios__uruguay__logo-item">
                <img class="servicios__uruguay__logo-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/same-day.svg" alt="">
                <h3 class="servicios__uruguay__logo-title">Same day</h3>
                <p class="servicios__uruguay__logo-description">Retiramos y entregamos tus envíos en el día, para que
                    tus clientes no tengan que esperar más. Tenemos
                    soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
            </div>
            <div class="servicios__uruguay__logo-item">
                <img class="servicios__uruguay__logo-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/ml-flex.svg" alt="">
                <h3 class="servicios__uruguay__logo-title">MercadoLibre Flex</h3>
                <p class="servicios__uruguay__logo-description">Retiramos y entregamos tus envíos en el día, para que
                    tus clientes no tengan que esperar más. Tenemos
                    soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                <div class="saberMas__btn__container">
                    <a class="saberMas__btn" href="http://localhost/wordpress/ml-flex/">Saber más</a>
                </div>
            </div>
            <div class="servicios__uruguay__logo-item">
                <img class="servicios__uruguay__logo-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/fulfillment.svg"
                    alt="">
                <h3 class="servicios__uruguay__logo-title">Fullfilment</h3>
                <p class="servicios__uruguay__logo-description">¡Enfocate en las ventas que la logística está resuelta!
                    Ofrecemos un servicio integral para tu
                    empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
            </div>
            <div class="servicios__uruguay__logo-item">
                <img class="servicios__uruguay__logo-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/supermercados.svg"
                    alt="">
                <h3 class="servicios__uruguay__logo-title">Supermercados</h3>
                <p class="servicios__uruguay__logo-description">Ofrecemos servicios de flota de vehículos dedicados a
                    operaciones exclusivas de entrega a domicilio y
                    envíos express, que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.</p>
            </div>
            <div class="servicios__uruguay__logo-item">
                <img class="servicios__uruguay__logo-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/flota-dedicada.svg"
                    alt="">
                <h3 class="servicios__uruguay__logo-title">Flota dedicada</h3>
                <p class="servicios__uruguay__logo-description">Somos proveedores logísticos de Mercado Envíos Flex. Tus
                    ventas migran automáticamente a nuestro
                    sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
            </div>
            <div class="servicios__uruguay__logo-item">
                <img class="servicios__uruguay__logo-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/software.png" alt="">
                <h3 class="servicios__uruguay__logo-title">Software</h3>
                <p class="servicios__uruguay__logo-description">Nuestra app de conductores ofrece los recursos
                    tecnológicos necesarios para entregas exitosas:
                    geolocalización, fecha y hora de finalización de pedidos, la opción de subir una foto al sistema en
                    cada una de las entregas y mucho más. Las garantías y efectividad que tus clientes necesitan.</p>
            </div>
        </div>
        <div class="servicios__uruguay__contact__container">
            <a class="servicios__uruguay__contact-link" href="http://localhost/wordpress/contacto/">Contactar</a>
        </div>

    </section>
    <section class="second_slider">
        <img class="mcaca" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-1.png" alt="">
        <?php get_template_part('template-parts/second_slider'); ?>
    </section>

    <section class="trabaja-con-nosotros-uruguay">
        <div class="trabaja-con-nosotros-uruguay__contenido">
            <h2 class="trabaja-con-nosotros-uruguay__titulo">En soydelivery estamos en constante crecimiento</h2>
            <div class="trabaja-con-nosotros-uruguay__seccion">
                <div class="trabaja-con-nosotros-uruguay__contenedor-imagen">
                    <img class="trabaja-con-nosotros-uruguay__imagen-confondo"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-5.svg" alt="">
                    <img class="trabaja-con-nosotros-uruguay__imagen-sinfondo"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-5-sinfondo.svg" alt="">
                </div>
                <div class="trabaja-con-nosotros-uruguay__contenido-texto">
                    <div class="contenido__delContenido-uruguay">
                        <h3 class="trabaja-con-nosotros-uruguay__subtitulo">Trabajá con nosotros</h3>
                        <div class="trabaja-con-nosotros-uruguay__descripcion__container">
                            <p class="trabaja-con-nosotros-uruguay__descripcion">Si estás buscando una oportunidad para
                                desarrollar tus habilidades en una empresa dinámica y en contínuo crecimiento, este es
                                tu lugar.
                                Dejanos tu CV que el departamento de Recursos Humanos se comunicará contigo.</p>
                        </div>

                        <div class="trabaja-con-nosotros-uruguay__contenedor-enlace">
                            <a class="trabaja-con-nosotros-uruguay__enlace"
                                href="http://localhost/wordpress/trabaja-con-nosotros/">Postularme</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



</main>

<?php get_footer(); ?>