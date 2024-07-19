<?php
/* Template Name: Conocenos Uruguay */
// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>

<style>
    .conocenos-uru {
        margin: 30px 0px 30px 30px;

    }
</style>

<main id="site-content" role="main">
    <section class="conocenos-uruguay">
        <div class="navegador conocenos-uru">
            <img class="arrow"
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg"
                alt="Cajita">
            <p class="title__navegador">Conocenos</p>
        </div>
        <div class="conocenos-uruguay__content">
            <div>
                <section class="slider">
                    <?php get_template_part('template-parts/second-slidernoticias'); ?>
                </section>
            </div>

            <div class="apoyos__uruguay__contenedor">
                <h2 class="title__apoyos__uruguay">Alianzas comerciales</h2>
                <?php get_template_part('template-parts/apoyos_sliders'); ?>
            </div>

            <div class="clientes__uruguay__contenedor">
                <h2></h2>
                <div>
                    <?php get_template_part('template-parts/clientes_slider'); ?>
                </div>
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
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Grupo-Trabajo-1.png" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>