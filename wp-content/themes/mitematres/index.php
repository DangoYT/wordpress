<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <main>
        <?php get_template_part('template-parts/slider'); ?>

        <section>
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    get_template_part('template-parts/content', get_post_format());
                endwhile;
            else:
                echo '<p>No hay contenido disponible.</p>';
            endif;
            ?>
        </section>
    </main>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
</body>

</html>