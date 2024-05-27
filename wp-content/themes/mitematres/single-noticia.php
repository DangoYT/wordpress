<?php get_header(); ?>

<main>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="resumen-noticia">
                    <h2><?php echo esc_html(get_field('resumen_de_la_noticia')); ?></h2>
                </div>
                <div class="imagen-noticia">
                    <?php
                    $imagen = get_field('imagen_de_la_noticia');
                    if ($imagen) {
                        echo wp_get_attachment_image($imagen, 'full');
                    }
                    ?>
                </div>
                <div class="contenido-noticia">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else:
        echo '<p>No hay contenido disponible.</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>