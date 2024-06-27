<div class="second__carousel">
    <div class="second__carousel-inner">
        <?php
        $slider_query = new WP_Query(
            array(
                'post_type' => 'noticia',
                'posts_per_page' => 6, // Ajusta este número según la cantidad de noticias que quieras mostrar
            )
        );
        if ($slider_query->have_posts()):
            while ($slider_query->have_posts()):
                $slider_query->the_post();
                $imagen = get_field('imagen_de_la_noticia');
                $resumen = get_field('resumen_de_la_noticia');
                ?>
                <div class="second__carousel-item">
                    <?php
                    if ($imagen && !empty($imagen['url'])) {
                        echo '<a class="second__carousel-link" href="' . get_permalink() . '">';
                        echo '<img class="second__carousel-img" src="' . esc_url($imagen['url']) . '" alt="' . esc_attr($imagen['alt']) . '">';
                        echo '</a>';
                    }
                    ?>
                    <div class="second__carousel-caption">

                        <div class="second__carouselIcon-container">
                            <img id="logo" class="second__carousel-icon"
                                src="<?php echo esc_url(get_template_directory_uri() . '/images/noticias.svg'); ?>" alt="">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                        <hr class="second__carousel-hr">
                        <p><?php echo esc_html($resumen); ?></p>
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
        $('.second__carousel-inner').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 2,           // Mostrar dos noticias a la vez
            slidesToScroll: 1,         // Deslizar una noticia a la vez
            autoplay: true,
            autoplaySpeed: 5000,     // Velocidad de reproducción automática (5000 ms = 5 segundos)
            variableWidth: false,
            arrows: false
        });
    });
</script>