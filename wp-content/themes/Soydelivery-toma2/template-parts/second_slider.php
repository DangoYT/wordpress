<!-- template-parts/second_slider.php -->
<div class="second-slider__container">
    <div class="second-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Vehiculos/Camionetas-1.jpeg" alt="Imagen 1">
    </div>
    <div class="second-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Vehiculos/Camionetas-2.jpeg" alt="Imagen 2">
    </div>
    <div class="second-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Vehiculos/Camionetas-3.jpeg" alt="Imagen 3">
    </div>
    <div class="second-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Vehiculos/Camionetas-4.jpeg" alt="Imagen 4">
    </div>
    <div class="second-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Vehiculos/Camionetas-5.jpeg" alt="Imagen 5">
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