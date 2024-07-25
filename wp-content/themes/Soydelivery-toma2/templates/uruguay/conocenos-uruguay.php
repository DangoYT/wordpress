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

    <section class="second_slider">
        <h2 class="slider__title">Noticias de <?php echo ucfirst($country); ?></h2>
        <?php get_template_part('template-parts/second_slider'); ?>
    </section>

</main>

<?php get_footer(); ?>