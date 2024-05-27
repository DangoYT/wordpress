<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="post-meta">
        <span>Publicado por <?php the_author(); ?> el <?php the_date(); ?></span>
    </div>
    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>
</article>