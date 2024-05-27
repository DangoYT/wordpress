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
            $active_class = 'active';
            while ($slider_query->have_posts()):
                $slider_query->the_post();
                $imagen = get_field('imagen_de_la_noticia');
                ?>
                <div class="carousel-item <?php echo $active_class; ?>">
                    <?php
                    if ($imagen && !empty($imagen['url'])) {
                        echo '<img src="' . esc_url($imagen['url']) . '" alt="' . esc_attr($imagen['alt']) . '">';
                    } else {
                        echo '<p>Imagen no disponible</p>';
                    }
                    ?>
                    <div class="carousel-caption">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo esc_html(get_field('resumen_de_la_noticia')); ?></p>
                    </div>
                </div>
                <?php
                $active_class = ''; // Solo la primera iteración tendrá la clase 'active'
            endwhile;
            wp_reset_postdata();
        else:
            echo '<p>No hay noticias disponibles.</p>';
        endif;
        ?>
    </div>
    <div class="carousel-indicators">
        <?php for ($i = 0; $i < $slider_query->post_count; $i++): ?>
            <button class="<?php echo $i === 0 ? 'active' : ''; ?>"></button>
        <?php endfor; ?>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        var currentIndex = 0;
        var items = $('.carousel .carousel-item');
        var itemAmt = items.length;

        function cycleItems() {
            var item = $('.carousel .carousel-item').eq(currentIndex);
            items.hide();
            item.css('display', 'block');
        }

        $('.carousel-indicators button').click(function () {
            var index = $(this).index();
            currentIndex = index;
            cycleItems();
            $('.carousel-indicators button').removeClass('active');
            $(this).addClass('active');
        });

        cycleItems();
    });
</script>