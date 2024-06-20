<?php
/* Template Name: Uruguay */
get_header('uruguay'); // Carga el header personalizado para Uruguay
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
                                src="<?php echo get_template_directory_uri(); ?>/images/lupa.svg" alt="">Buscar</a>
                    </div>
                </div>
            </div>
            <div class="hero-uruguay-image-container">
                <img class="hero-uruguay-image"
                    src="<?php echo get_template_directory_uri(); ?>/images/imagenPrincipalEntrega.svg" alt="">
            </div>
        </div>
    </section>
    <section class="hero2-uruguay">
        <h2 class="hero2-uruguay-h2">¿Qué esperás para despegar?</h2>
        <div class="hero2-uruguay-container">



            <div class="hero2-uruguay-clientes">
                <div class="hero2-uruguay-clientes-image-container">
                    <img class="hero2-uruguay-clientes-image"
                        src="<?php echo get_template_directory_uri(); ?>/images/Clientes.svg" alt="">
                </div>
                <div class="hero2-uruguay-clientes-text-container">
                    <h3 class="hero2-uruguay-clientes-h3">Enviar con Soydelivery</h3>
                    <p class="hero2-uruguay-clientes-p">Llegá a tus clientes en el día, y llevá tu negocio al siguiente
                        nivel</p>
                    <div class="hero2-uruguay-button-contactar-clientes-container">
                        <a class="hero2-uruguay-button-contactar-clientes" href="">Contactar</a>
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
                        <a class="hero2-uruguay-button-contactar-repartidores-particular" href="">Soy particular</a>
                        <a class="hero2-uruguay-button-contactar-repartidores-empresa" href="">Soy empresa</a>
                    </div>

                </div>
                <div class="hero2-uruguay-repartidores-image-container">
                    <img class="hero2-uruguay-repartidores-image"
                        src="<?php echo get_template_directory_uri(); ?>/images/repartidores.svg" alt="">
                </div>
            </div>

    </section>
    <section class="hero3-uruguay">
        <div class="hero3-uruguay-container">

            <div class="hero3-uruguay-soyemprendedor-image-container">
                <img class="hero3-uruguay-soyemprendedor-image"
                    src="<?php echo get_template_directory_uri(); ?>/images/soyemprendedor.svg" alt="">
            </div>

            <div class="hero3-uruguay-soyemprendedor-text-container">
                <h2 class="hero3-uruguay-soyemprendedor-h2">La forma más flexible de hacer tus envíos</h2>
                <div class="hero3-uruguay-soyemprendedor-cuponera-container">
                    <p class="hero3-uruguay-soyemprendedor-p">¡Emprende sin límites! Con nuestra cuponera para
                        emprendedores, accede a envíos para tu negocio,
                        con la comodidad de pagar con Mercado pago.¡Podrás usar los cupones sin fecha de vencimiento!
                    </p>
                    <div class="hero3-uruguay-soyemprendedor-cuponera-button">

                        <div class="hero3-uruguay-soyemprendedor-cuponera">

                            <div class="hero3-uruguay-soyemprendedor-cuponera-inputs-container">

                                <div class="hero3-uruguay-soyemprendedor-cuponera-input-container">
                                    <input class="hero3-uruguay-soyemprendedor-cuponera-input" type="checkbox">
                                    <label class="hero3-uruguay-soyemprendedor-cuponera-label" for="">15 Envios -
                                        $1.500</label>
                                </div>
                                <div class="hero3-uruguay-soyemprendedor-cuponera-input-container">
                                    <input class="hero3-uruguay-soyemprendedor-cuponera-input" type="checkbox">
                                    <label class="hero3-uruguay-soyemprendedor-cuponera-label" for="">50 Envios -
                                        $2.500</label>
                                </div>
                                <div class="hero3-uruguay-soyemprendedor-cuponera-input-container">
                                    <input class="hero3-uruguay-soyemprendedor-cuponera-input" type="checkbox">
                                    <label class="hero3-uruguay-soyemprendedor-cuponera-label" for="">120 Envios -
                                        $5.000</label>
                                </div>

                            </div>



                        </div>

                        <div class="hero3-uruguay-soyemprendedor-cuponera-button-container">
                            <a class="hero3-uruguay-soyemprendedor-cuponera-button" href="">Comprar cuponera</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>