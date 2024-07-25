<?php
/* Template Name: Conocenos */
get_header(); ?>

<main id="site-content" role="main">
    <section class="global__conocenos">
        <div class="navegador">
            <img class="arrow"
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg" alt="">
            <p class="title__navegador">Conocenos</p>
        </div>
        <div class="global__conocenos_header">
            <div class="global__conocenos_header__container">
                <div class="global__conocenos_header__text">
                    <h2 class="">Somos innovación en logística</h2>
                    <p class="">SoyDelivery es una empresa de tecnología que brinda soluciones logísticas
                        innovadoras. Mediante un sistema de optimización de rutas, permite reducir costos de envío y
                        tiempos
                        de espera, impactando positivamente en la experiencia del consumidor.</p>
                </div>
                <div class="global__conocenos_header__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-2.png" alt="Conocenos">
                </div>
            </div>
        </div>
        <section class="slider">
            <h2 class="slider__title">Deslizá para ver más noticias</h2>
            <?php get_template_part('template-parts/slider'); ?>
        </section>

        <section class="global__btn__contactar_conocenos ">
            <a href="contacto" class="btn-contactar_conocenos">Contactar</a>
        </section>

        <div class="global__conocenos_expertosEnUltimaMilla">
            <div class="global__conocenos_expertosEnUltimaMilla__container">
                <div class="global__conocenos_expertosEnUltimaMilla__img">
                    <img class=""
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Exteriores/Camioneta-Exterior.jpeg"
                        alt="Conocenos">
                </div>
                <div class="global__conocenos_expertosEnUltimaMilla__redes">
                    <h2 class="">Expertos en última milla</h2>
                    <div class="global__conocenos_expertosEnUltimaMilla__redes_container">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/redes/Insta.svg"
                            alt="Conocenos">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/redes/twitter.svg"
                            alt="Conocenos">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/redes/facebook.svg"
                            alt="Conocenos">
                        <img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/redes/linkedin.svg"
                            alt="Conocenos">
                    </div>
                    <a href="contactar.php" class="btn-contactar">Contactar</a>
                </div>
            </div>
        </div>

        <div class="global__conocenos__apoyos">
            <div class="apoyos__contenedor">
                <h2 class="title__apoyos">Apoyos</h2>
                <?php get_template_part('template-parts/apoyos_sliders'); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>