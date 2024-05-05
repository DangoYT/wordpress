<div class="all_content">
    <div id="post-<?php the_ID(); ?>" <?php post_class('page_post'); ?>>
        <?php
        if (has_post_thumbnail()) {
            ?>
            <div class="publicaciones">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
            <?php
        } else {
            echo '<h1>No hay imágenes</h1>';
        }
        ?>
    </div>
</div>