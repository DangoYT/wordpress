<?php
/* Template Name: Conocenos Paraguay */
// Carga el header personalizado para Paraguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-paraguay.php';
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


            <div class="nuestroEquipo__uruguay">
                <h2 class="title__nuestroEquipo__uruguay">Nuestro equipo</h2>
                <div class="nuestroEquipo__uruguay__contenedor">
                    <div class="nuestroEquipo__uruguay__content">
                        <p>Operaciones</p>
                        <p>Administración y finanzas</p>
                        <p>Comercial</p>
                        <p>Tecnología</p>
                        <p>Experiencia de usuario</p>
                        <p>Innovación logística</p>
                        <p>Análisis de datos</p>
                        <p>Recursos humanos</p>
                        <p>Atención al cliente</p>
                    </div>
                    <img class="nuestroEquipo__uruguay__img"
                        src="<?php echo get_template_directory_uri(); ?>/images/nuestroEquipo.png" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>