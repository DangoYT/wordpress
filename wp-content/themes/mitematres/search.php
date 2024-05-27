<?php get_header(); ?>

<main>
    <header>
        <h1>Resultados de búsqueda para: <?php echo get_search_query(); ?></h1>
    </header>
    <?php if (have_posts()): ?>
        <?php
        while (have_posts()):
            the_post();
            get_template_part('template-parts/content', 'search');
        endwhile;
        the_posts_navigation();
    else:
        echo '<p>No hay resultados para mostrar.</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>