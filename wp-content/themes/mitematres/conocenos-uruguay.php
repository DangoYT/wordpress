<?php
/* Template Name: Conocenos Uruguay */
get_header('uruguay'); // Carga el header personalizado para Uruguay
?>

<main id="site-content" role="main">
    <section class="conocenos-uruguay">
        <div class="navegador">
            <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
            <p class="title__navegador">Servicios</p>
        </div>
        <div class="conocenos-uruguay__content">
            <div>
                <section class="slider">
                    <?php get_template_part('template-parts/second-slidernoticias'); ?>
                </section>
            </div>

            <div class="apoyos__contenedor">
                <h2 class="title__apoyos">Alianzas comerciales</h2>
                <?php get_template_part('template-parts/apoyos_sliders'); ?>
            </div>

            <div></div>
            <div></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>