<?php
/*
Template Name: Uruguay
*/

// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>

<main id="site-content" role="main">
    <section class="hero-uruguay">
        <div class="hero-uruguay-container">
            <div class="hero-uruguay-input-container">
                <div class="hero-uruguay-title">
                    <h2 class="hero-uruguay-h2">Tecnología e innovación aplicada a tus envíos</h2>
                </div>
                <div class="hero-uruguay-search">
                    <p class="hero-uruguay-p">Ingresa tu número de tracking para saber el estado de tu pedido</p>
                    <div class="hero-uruguay-input-search">
                        <input class="hero-uruguay-input" type="number">
                        <a class="hero-uruguay-button" href=""><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/Lupa-blanco.svg"
                                alt="">Buscar</a>
                    </div>
                </div>
            </div>
            <div class="hero-uruguay-image-container">
                <img class="hero-uruguay-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-2.png" alt="">
            </div>
        </div>
    </section>
    <section class="hero2-uruguay">
        <h2 class="hero2-uruguay-h2">¿Qué esperás para despegar?</h2>
        <div class="hero2-uruguay-container">



            <div class="hero2-uruguay-clientes">
                <div class="hero2-uruguay-clientes-image-container">
                    <img class="hero2-uruguay-clientes-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-4.svg" alt="">
                </div>
                <div class="hero2-uruguay-clientes-text-container">
                    <h3 class="hero2-uruguay-clientes-h3">Enviar con Soydelivery</h3>
                    <p class="hero2-uruguay-clientes-p">Llegá a tus clientes en el día, y llevá tu negocio al siguiente
                        nivel</p>
                    <div class="hero2-uruguay-button-contactar-clientes-container">
                        <a class="hero2-uruguay-button-contactar-clientes"
                            href="http://localhost/wordpress/contacto/">Contactar</a>
                    </div>

                </div>
            </div>

            <div class="hero2-uruguay-repartidores">
                <div class="hero2-uruguay-repartidores-text-container">
                    <h2 class="hero2-uruguay-repartidores-h2">¡Te estamos buscando!</h2>
                    <p class="hero2-uruguay-repartidores-p">¿Tenés un vehículo y querés trabajar con nosotros?</p>
                    <p class="hero2-uruguay-repartidores-p">Completa el formulario y nos pondremos en contacto contigo.
                    </p>

                    <div class="hero2-uruguay-button-contactar-repartidores-container">
                        <a class="hero2-uruguay-button-contactar-repartidores-particular"
                            href="http://localhost/wordpress/quiero-ser-chofer/">Soy particular</a>
                        <a class="hero2-uruguay-button-contactar-repartidores-empresa"
                            href="http://localhost/wordpress/chofer-empresa/">Soy empresa</a>
                    </div>

                </div>
                <div class="hero2-uruguay-repartidores-image-container">
                    <img class="hero2-uruguay-repartidores-image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/camion.svg" alt="">
                </div>
            </div>

    </section>
    <section class="emprendedor">
        <div class="emprendedor__container">

            <div class="emprendedor__image-container">
                <img class="emprendedor__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-3.png" alt="">
            </div>

            <div class="emprendedor__content">
                <h2 class="emprendedor__title">La forma más flexible de hacer tus envíos</h2>
                <div class="emprendedor__description">
                    <p class="emprendedor__text">¡Emprende sin límites! Con nuestra cuponera para emprendedores, accede
                        a envíos para tu negocio, con la comodidad de pagar con Mercado pago.¡Podrás usar los cupones
                        sin fecha de vencimiento!</p>
                    <div class="emprendedor__options">

                        <div class="emprendedor__option">

                            <div class="emprendedor__checkbox-container">

                                <div class="emprendedor__checkbox-item">
                                    <input class="emprendedor__checkbox" type="checkbox">
                                    <label class="emprendedor__label" for="">15 Envios - $1.500</label>
                                </div>
                                <div class="emprendedor__checkbox-item">
                                    <input class="emprendedor__checkbox" type="checkbox">
                                    <label class="emprendedor__label" for="">50 Envios - $2.500</label>
                                </div>
                                <div class="emprendedor__checkbox-item">
                                    <input class="emprendedor__checkbox" type="checkbox">
                                    <label class="emprendedor__label" for="">120 Envios - $5.000</label>
                                </div>

                            </div>

                        </div>

                        <div class="emprendedor__button-container">
                            <a class="emprendedor__button" href="">Agregar al carrito</a>
                        </div>

                    </div>
                </div>
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

    <section class="trabaja-con-nosotros">
        <div class="trabaja-con-nosotros__contenido">
            <h2 class="trabaja-con-nosotros__titulo">En soydelivery estamos en constante crecimiento</h2>
            <div class="trabaja-con-nosotros__seccion">
                <div class="trabaja-con-nosotros__contenedor-imagen">
                    <img class="trabaja-con-nosotros__imagen"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-5.svg" alt="">
                </div>
                <div class="trabaja-con-nosotros__contenido-texto">
                    <div class="contenido__delContenido">
                        <h3 class="trabaja-con-nosotros__subtitulo">Trabajá con nosotros</h3>
                        <div class="trabaja-con-nosotros__descripcion__container">
                            <p class="trabaja-con-nosotros__descripcion">Si estás buscando una oportunidad para
                                desarrollar tus habilidades en una empresa dinámica y en contínuo crecimiento, este es
                                tu lugar.
                                Dejanos tu CV que el departamento de Recursos Humanos se comunicará contigo.</p>
                        </div>

                        <div class="trabaja-con-nosotros__contenedor-enlace">
                            <a class="trabaja-con-nosotros__enlace"
                                href="http://localhost/wordpress/trabaja-con-nosotros/">Postularme</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



</main>

<?php get_footer(); ?>