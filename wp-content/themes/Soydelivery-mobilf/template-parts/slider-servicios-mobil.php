<!-- template-parts/slider-servicios-mobil.php -->



<div class="slider__servicios__mobil__container">
    <div class="slider__servicios__mobil">
        <div class="slider__servicios__mobil__frame-1__container">
            <div class="slider__servicios__mobil__item">
                <div class="slider__servicios__mobil__img__container">
                    <img class="slider__servicios__mobil__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/same-day.svg"
                        alt="">
                </div>
                <div class="slider__servicios__mobil__text">
                    <h3>Same day</h3>
                    <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más.
                        Tenemos
                        soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                </div>
            </div>

            <div class="slider__servicios__mobil__item">
                <div class="slider__servicios__mobil__img__container">
                    <img class="slider__servicios__mobil__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/ml-flex.svg"
                        alt="">
                </div>

                <div class="slider__servicios__mobil__text">
                    <h3>MercadoLibre Flex</h3>
                    <p>Retiramos y entregamos tus envíos en el día, para que tus clientes no tengan que esperar más.
                        Tenemos
                        soporte de 8:00 a 24:00, para que sepas en cada momento el estado de tus envíos.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slider__servicios__mobil">
        <div class="slider__servicios__mobil__frame-2__container">
            <div class="slider__servicios__mobil__item">
                <div class="slider__servicios__mobil__img__container">
                    <img class="slider__servicios__mobil__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/fulfillment.svg"
                        alt="">
                </div>

                <div class="slider__servicios__mobil__text">
                    <h3>Fullfilment</h3>
                    <p>¡Enfocate en las ventas que la logística está resuelta! Ofrecemos un servicio integral para
                        tu
                        empresa. Almacenamiento, picking, packing, etiquetado, despacho y entrega de productos.</p>
                </div>

            </div>

            <div class="slider__servicios__mobil__item">
                <div class="slider__servicios__mobil__img__container">
                    <img id="supermercado__img" class="slider__servicios__mobil__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/supermercados.svg"
                        alt="">
                </div>

                <div class="slider__servicios__mobil__text">
                    <h3>Supermercados</h3>
                    <p>Ofrecemos servicios de flota de vehículos dedicados a operaciones exclusivas de entrega a
                        domicilio y
                        envíos express,
                        que incluye nuestra tecnología asociada para el uso flota tercerizada o propia.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="slider__servicios__mobil">
        <div class="slider__servicios__mobil__frame-3__container">
            <div class="slider__servicios__mobil__item">
                <div class="slider__servicios__mobil__img__container">
                    <img class="slider__servicios__mobil__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/flota-dedicada.svg"
                        alt="">
                </div>

                <div class="slider__servicios__mobil__text">
                    <h3>Flota dedicada</h3>
                    <p>Somos proveedores logísticos de Mercado Envíos Flex. Tus ventas migran automáticamente a
                        nuestro
                        sistema de envíos y podes hacer un seguimiento de las diferentes etapas del pedido.</p>
                </div>

            </div>
            <div class="slider__servicios__mobil__item">
                <div class="slider__servicios__mobil__img__container">
                    <img class="slider__servicios__mobil__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/servicios/software.png"
                        alt="">
                </div>

                <div class="slider__servicios__mobil__text">
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

</div>




<script>
    jQuery(document).ready(function ($) {
        $('.slider__servicios__mobil__container').slick({
            autoplay: true,
            autoplaySpeed: 3000, // Cambia la imagen cada 3 segundos
            slidesToShow: 1,
            arrows: false, // Desactiva las flechas de navegación
            dots: true // Activa los puntos de navegación
        });
    });
</script>