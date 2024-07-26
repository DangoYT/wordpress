<?php
/*
Template Name: Ml Flex
*/
// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>

<style>
    .section__container {
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .section__content {
        border: 1px solid black;

        display: flex;
        flex-direction: column;
        width: 530px;
        padding: 30px;
        border-radius: 10px;
        background: var(--Surface-Surface-brand, #FF7500);
        gap: 30px;
        align-items: center;
    }

    .intro {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* border: 1px solid red; */
        width: 470px;
        /* height: 185px; */
    }

    .service {
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        gap: 19px;
        width: 395px;
    }

    .service__item {
        display: flex;
        align-items: flex-start;
        gap: 19px;
    }

    .service__icon {
        width: 17px;
        height: 22px;
    }

    .service__icon img {
        width: 17px;
        height: 22px;
    }

    .service__description {
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        gap: 19px;
    }

    .service__title {
        margin: 0px;
        color: #FFF;

        /* p */
        font-family: "Karla";
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .service__text {
        margin: 0px;
        color: #FFF;

        /* p */
        font-family: "Karla";
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .section__heading {
        color: #FFF;
        text-align: center;
        font-family: "Karla";
        font-size: 23px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.523%;
        /* 28.87px */

        width: 471px;
    }

    .map {}

    .map__container {

        border-radius: 15px;
        position: relative;
        max-width: 471px;
        max-height: 190px;
        overflow: hidden;
    }

    .map__image {
        position: relative;
        top: -55px;
        left: -180px;
        width: 743px;
        height: 263px;
        flex-shrink: 0;
    }

    .contact {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contact__form {}

    .contact__form-group {
        display: flex;
        width: 474px;
        padding: 11px 12px;
        align-items: flex-start;
        justify-content: space-evenly;
        align-content: flex-start;
        gap: 14px 17px;
        flex-wrap: wrap;
    }

    .contact__info {}

    .cotiza-tu-servicio-form-container-textarea {}

    .cotiza-tu-servicio-form-textarea {
        width: 450px;
        height: 122px;
        border-radius: 4px;
    }

    .intro__title-container {}

    .intro__title {
        color: #FFF;

        /* H1 */
        font-family: "Museo Sans Rounded";
        font-size: 44px;
        font-style: normal;
        font-weight: 700;
        line-height: 131.523%;
        /* 57.87px */
    }

    .intro__subtitle-container {}

    .intro__subtitle {

        color: #FFF;
        text-align: justify;

        /* p */
        font-family: "Karla";
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */

    }

    .selectable-container {
        position: relative;
        width: 216px;
        height: 48px;
    }

    .cotiza-tu-servicio-form-input {
        width: 216px;
        height: 48px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        cursor: pointer;
    }

    .cotiza-tu-servicio-form-boton {
        display: flex;
        padding: 7px 10px;
        align-items: center;
        gap: 14px;
        border-radius: 5px;
        background: var(--Surface-Surface-gris, #414141);
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);
        color: var(--Text-Text-negative, #FFF);
        width: 95px;
        height: 38px;
        /* Body XS Bold */
        font-family: "Karla";
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 14px;
        /* 116.667% */
    }

    .options {
        display: none;
        /* Oculto por defecto */
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        z-index: 1000;
        max-height: 200px;
        /* Altura máxima con scroll */
        overflow-y: auto;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .option {
        padding: 10px;
        cursor: pointer;
        border-bottom: 1px solid #ddd;
    }

    .option:last-child {
        border-bottom: none;
    }

    .option:hover {
        background-color: #f0f0f0;
    }

    .contact__info {
        margin-top: 37px;
    }

    .contact__info-container {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .contact__info-item {
        display: flex;
        align-items: flex-start;
        gap: 18px;
    }

    .contact__info-icon {}

    .contact__info-text {}

    .contact__info-text h4 {
        margin: 0px;
    }

    .contact__info-text p {
        /* margin: 0px; */
        color: #FFF;
    }

    .cotiza-tu-servicio-form-container-boton {
        margin-top: 11px;
    }

    @media only screen and (max-width: 360px) {
        .section__content {
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            width: 330px;
            padding: 0px;
            border-radius: 10px;
            background: var(--Surface-Surface-brand, #FF7500);
            gap: 30px;
            align-items: center;
        }

        .contact__form-group {
            width: 360px;
        }

        .cotiza-tu-servicio-form-textarea {
            width: 280px;
            height: 122px;
            border-radius: 4px;
            margin-top: 20px;
        }

        .contact__form-group {
            display: flex;
            width: 360px;
            padding: 0;
            align-items: flex-start;
            justify-content: space-evenly;
            align-content: flex-start;
            gap: 14px 17px;
            flex-wrap: wrap;
        }

        .intro {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* border: 1px solid red; */
            width: 295px;
            /* height: 185px; */
        }

        .service {
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            gap: 19px;
            width: 300px;
        }

        .section__heading {
            color: #FFF;
            text-align: center;
            font-family: "Karla";
            font-size: 23px;
            font-style: normal;
            font-weight: 700;
            line-height: 125.523%;
            width: 300px;
        }

        .map__container {
            border-radius: 15px;
            position: relative;
            max-width: 310px;
            max-height: 190px;
            overflow: hidden;
        }

        .map__image {
            position: relative;
            top: -55px;
            left: -15px;
            width: 496px;
            height: 263px;
            flex-shrink: 0;
        }
    }
</style>


<section class="section">


    <div class="navegador">
        <img class="navegador__arrow"
            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg" alt="">
        <p class="navegador__title">Servicios</p>
        <img class="navegador__arrow"
            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg" alt="">
        <p class="navegador__title">ML Flex</p>
    </div>
    <div class="section__container">

        <div class="section__content">
            <div class="intro">
                <div class="intro__title-container">
                    <h2 class="intro__title">Te ayudamos a impulsar tu negocio!</h2>
                </div>
                <div class="intro__subtitle-container">
                    <p class="intro__subtitle">Sumamos más puntos Drop off para dejar tus productos y que nosotros los
                        entreguemos. Completa nuestro formulario y te habilitamos al instante para que puedas entregar
                        tus productos en el día!</p>
                </div>
            </div>

            <div class="service">
                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/Icono-Blanco.svg"
                            alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">10 puntos Drop off</p>
                        <p class="service__text">Soydelivery tiene 10 puntos Dropoff para que puedas dejar todos tus
                            productos vendidos por Mercadolibre flex</p>
                    </div>
                </div>

                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/Icono-Blanco.svg"
                            alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">Entregas en el día en 11 zonas</p>
                        <p class="service__text">Vos vendes y nosotros nos encargamos de entregar tus productos más
                            rápido</p>
                    </div>
                </div>

                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/Icono-Blanco.svg"
                            alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">Comprobante de entrega y seguimiento en tiempo real</p>
                        <p class="service__text">Tanto el cliente como tú podrán visualizar el envío en tiempo real</p>
                    </div>
                </div>

                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/Icono-Blanco.svg"
                            alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">Atención al cliente de Lunes a Domingo</p>
                        <p class="service__text">Comunicate en el horario de 8:30 a 21:30 hs</p>
                    </div>
                </div>

                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/Icono-Blanco.svg"
                            alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">Integración y automatización total</p>
                        <p class="service__text">Visualiza la guía de integración aquí</p>
                    </div>
                </div>
            </div>

            <h2 class="section__heading">Deja tus productos en el centro Dropoff que más te convenga</h2>

            <div class="map">
                <div class="map__container">
                    <img class="map__image" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/mapa 2.png"
                        alt="">
                </div>
            </div>

            <div class="contact">
                <form id="miFormulario" class="contact__form cotiza-tu-servicio-form-container">
                    <div class="contact__form-group cotiza-tu-servicio-form-container-inputs">
                        <input class="cotiza-tu-servicio-form-input" type="text" id="input1" name="input1" required
                            placeholder="Tu nombre">
                        <input class="cotiza-tu-servicio-form-input" type="text" id="input2" name="input2" required
                            placeholder="Tu nickname">
                        <input class="cotiza-tu-servicio-form-input" type="number" id="input3" name="input3" required
                            placeholder="Tu télefono">
                        <input class="cotiza-tu-servicio-form-input" type="email" id="input4" name="input4" required
                            placeholder="Tu e-mail">
                        <div class="selectable-container">
                            <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput1"
                                name="selectableInput1" readonly placeholder="Pedidos semanales">
                            <div class="options" id="options1">
                                <div class="option" data-value="opcion1">Menos de 50</div>
                                <div class="option" data-value="opcion2">Entre 50 y 100</div>
                                <div class="option" data-value="opcion3">Mas de 100</div>
                            </div>
                        </div>
                        <div class="selectable-container">
                            <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput2"
                                name="selectableInput2" readonly placeholder="Tamaño del paquete">
                            <div class="options" id="options2">
                                <div class="option" data-value="opcion1">Pequeño</div>
                                <div class="option" data-value="opcion2">Mediano</div>
                                <div class="option" data-value="opcion3">Grande</div>

                            </div>
                        </div>
                    </div>

                    <div class="contact__form-group cotiza-tu-servicio-form-container-textarea">
                        <textarea class="cotiza-tu-servicio-form-textarea" id="textarea" name="textarea" rows="4"
                            cols="50" placeholder="¿Te gustaría dejar un comentario?"></textarea>
                    </div>

                    <div class="contact__form-group cotiza-tu-servicio-form-container-boton">
                        <div class="elcontenedordelbotonquedespuescambio">
                            <button type="button" class="btn next cotiza-tu-servicio-form-boton">Enviar</button>
                        </div>
                    </div>
                </form>

                <div class="contact__info">
                    <div class="contact__info-container">
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/direcciones.svg" alt="">
                            </div>
                            <div class="contact__info-text">
                                <h4>DIRECCIÓN</h4>
                                <p>República de Corea 2962 San Salvador 1480</p>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/mailes.svg" alt="">
                            </div>
                            <div class="contact__info-text">
                                <h4>MAIL</h4>
                                <p>comercial@soydelivery.com.uy rrhh@soydelivery.com.uy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectableInputs = document.querySelectorAll('.selectable-container input');
        var optionsContainers = document.querySelectorAll('.options');
        var options = document.querySelectorAll('.option');

        selectableInputs.forEach(function (input) {
            input.addEventListener('click', function () {
                var optionsContainer = this.nextElementSibling;
                optionsContainer.style.display = optionsContainer.style.display === 'block' ? 'none' : 'block';
            });
        });

        options.forEach(function (option) {
            option.addEventListener('click', function () {
                var input = this.closest('.selectable-container').querySelector('input');
                input.value = this.textContent;
                this.parentElement.style.display = 'none';
            });
        });

        document.addEventListener('click', function (e) {
            if (!e.target.closest('.selectable-container')) {
                optionsContainers.forEach(function (container) {
                    container.style.display = 'none';
                });
            }
        });
    });

</script>


<?php get_footer(); ?>