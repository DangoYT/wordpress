<!-- template-parts/apoyos_slider.php -->
<div class="apoyos-slider__container">
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/thalesLab.png" alt="thales">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/mercadolibre.png" alt="mercadolibre">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/endeavor.png" alt="endeavor">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/fenicio.png" alt="fenicio">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Diginet.png" alt="diginet">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Global.png" alt="global">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/thalesLab.png" alt="thales">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/mercadolibre.png" alt="mercadolibre">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/endeavor.png" alt="endeavor">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/fenicio.png" alt="fenicio">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Diginet.png" alt="diginet">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Global.png" alt="global">
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('.apoyos-slider__container').slick({
            autoplay: true,
            autoplaySpeed: 3000, // Cambia la imagen cada 3 segundos
            slidesToShow: 6, // Muestra 6 imagenes
            arrows: false, // Desactiva las flechas de navegación
            dots: false // Activa los puntos de navegación
        });
    });
</script>