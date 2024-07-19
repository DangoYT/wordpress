<?php
/* Template Name: Conocenos */
get_header(); ?>

<main id="site-content" role="main">
    <section class="conocenos__section">
        <div class="navegador">
            <img class="arrow"
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg" alt="">
            <p class="title__navegador">Conocenos</p>
        </div>
        <div class="header__conocenos">
            <div class="header__conocenos__contenedor">
                <div class="conocenos__container">
                    <h2 class="title__conocenos">Somos innovación en logística</h2>
                    <p class="text__conocenos">SoyDelivery es una empresa de tecnología que brinda soluciones logísticas
                        innovadoras. Mediante un sistema de optimización de rutas, permite reducir costos de envío y
                        tiempos
                        de espera, impactando positivamente en la experiencia del consumidor.</p>
                </div>
                <div class="conocenos__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Persona-2.png" alt="Conocenos">
                </div>
            </div>
        </div>
        <div class="expertos_ultimaMilla">
            <div class="expertos_ultimaMilla__contenedor">
                <div>
                    <img class="img__ultimaMilla"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Exteriores/Camioneta-Exterior.jpeg"
                        alt="Conocenos">
                </div>
                <div class="expertos_ultimaMilla__Redes__contenedor">
                    <h2 class="title__ultimaMilla">Expertos en última milla</h2>
                    <div class="expertos_ultimaMilla__Redes">
                        <img class="img__ultimaMillaRedes"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/redes/Insta.svg"
                            alt="Conocenos">
                        <img class="img__ultimaMillaRedes"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/redes/twitter.svg"
                            alt="Conocenos">
                        <img class="img__ultimaMillaRedes"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/redes/facebook.svg"
                            alt="Conocenos">
                        <img class="img__ultimaMillaRedes"
                            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/redes/linkedin.svg"
                            alt="Conocenos">
                    </div>
                    <a href="contactar.php" class="btn-contactar">Contactar</a>
                </div>
            </div>
        </div>
        <div class="apoyos">
            <div class="apoyos__contenedor">
                <h2 class="title__apoyos">Apoyos</h2>
                <?php get_template_part('template-parts/apoyos_sliders'); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>