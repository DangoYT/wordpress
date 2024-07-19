<?php get_header(); ?>

<main>
    <?php if (have_posts()): ?>
        <header>
            <h1><?php single_cat_title(); ?></h1>
            <?php if (category_description()): ?>
                <div class="category-description">
                    <?php echo category_description(); ?>
                </div>
            <?php endif; ?>
        </header>
        <?php
        while (have_posts()):
            the_post();
            get_template_part('template-parts/content', get_post_format());
        endwhile;
        the_posts_navigation();
    else:
        echo '<p>No hay contenido disponible.</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>