<?php
/*
Template Name: Plantilla de Noticia
Template Post Type: post, page
*/
get_header();
?>

<div id="content">
    <h1><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()): ?>
        <div class="featured-image">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <div class="content">
        <?php the_content(); ?>
    </div>
</div>

<?php
get_footer();
?>