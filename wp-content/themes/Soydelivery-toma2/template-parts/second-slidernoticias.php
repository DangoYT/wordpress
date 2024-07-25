<?php
$country = get_country(); // Función personalizada que devuelve el país actual
$post_type = '';

switch ($country) {
    case 'uruguay':
        $post_type = 'noticia_uruguay';
        break;
    case 'peru':
        $post_type = 'noticia_peru';
        break;
    case 'paraguay':
        $post_type = 'noticia_paraguay';
        break;
    default:
        // Opcional: manejar el caso por defecto
        break;
}

$query = new WP_Query(
    array(
        'post_type' => $post_type,
        'posts_per_page' => 10, // Número de noticias a mostrar
    )
);

if ($query->have_posts()):
    ?>
    <div class="second-slider">
        <?php while ($query->have_posts()):
            $query->the_post(); ?>
            <div class="slider-item">
                <?php if (has_post_thumbnail()): ?>
                    <div class="slider-item-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <div class="slider-item-content">
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php
endif;
wp_reset_postdata();
?>

<script>
    $(document).ready(function () {
        $('.second-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000
        });
    });


</script>