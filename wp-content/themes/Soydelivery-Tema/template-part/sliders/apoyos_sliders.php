<!-- template-parts/apoyos_slider.php -->
<div class="apoyos-slider__container">
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/ELtunel.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/Diginet.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/Districomp.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/Electroventas.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/FarmaGlobal.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/Forum.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/Global.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/Gold.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/TATA.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/TCC.png" alt="Imagen 1">
    </div>
    <div class="apoyos-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/apoyos/TiendaFarma.png" alt="Imagen 1">
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