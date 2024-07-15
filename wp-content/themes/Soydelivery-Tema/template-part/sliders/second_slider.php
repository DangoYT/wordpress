<!-- template-parts/second_slider.php -->
<div class="second-slider__container">
    <div class="second-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/7a104da6de6df235331c7299266fd1ec.jpeg"
            alt="Imagen 1">
    </div>
    <div class="second-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/9c12f3a210fc3bef4e920d93d81a0fd0.jpeg"
            alt="Imagen 2">
    </div>
    <div class="second-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/44bd36114f93e565065d781adad763d4.jpeg"
            alt="Imagen 3">
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('.second-slider__container').slick({
            autoplay: true,
            autoplaySpeed: 3000, // Cambia la imagen cada 3 segundos
            slidesToShow: 2,
            arrows: false, // Desactiva las flechas de navegación
            dots: true // Activa los puntos de navegación
        });
    });
</script>