<?php get_header(); ?>

<main>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <div class="post-content">
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