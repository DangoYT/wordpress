<div class="carousel">
    <div class="carousel-inner">
        <?php
        $slider_query = new WP_Query(
            array(
                'post_type' => 'noticia',
                'posts_per_page' => 3,
            )
        );
        if ($slider_query->have_posts()):
            while ($slider_query->have_posts()):
                $slider_query->the_post();
                $imagen = get_field('imagen_de_la_noticia');
                ?>
                <div class="carousel-item">
                    <?php
                    if ($imagen && !empty($imagen['url'])) {
                        echo '<a href="' . get_permalink() . '">';
                        echo '<img src="' . esc_url($imagen['url']) . '" alt="' . esc_attr($imagen['alt']) . '">';
                        echo '</a>';
                    }
                    ?>
                    <div class="carousel-caption">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No hay noticias disponibles.</p>';
        endif;
        ?>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('.carousel-inner').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    });
</script>