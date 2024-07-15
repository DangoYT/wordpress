<?php
/*
Template Name: Cotiza tu servicio Peru
*/
get_header('peru');
?>

<style>
    /* styles.css */
    .cotiza-tu-servicio {
        display: flex;
        flex-direction: column;
        gap: 30px;
        padding: 30px 0px;
    }

    .cotiza-tu-servicio-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .cotiza-tu-servicio-centrado {
        border-radius: 10px;
        background: var(--Surface-Surface-brand, #FF7500);

        display: flex;
        padding: 30px;
        flex-direction: column;
        align-items: center;
        gap: 19px;
    }

    .cotiza-tu-servicio-texto {
        width: 462px;
    }

    .cotiza-tu-servicio-texto-titulo {
        display: flex;
        align-items: center;
        gap: 10px;
        align-self: stretch;
    }

    .cotiza-tu-servicio-texto-titulo h2 {
        color: #FFF;

        /* H1 */
        font-family: "Museo Sans Rounded";
        font-size: 44px;
        font-style: normal;
        font-weight: 700;
        line-height: 131.523%;
        /* 57.87px */

        margin: 0px;
    }

    .cotiza-tu-servicio-texto-parrafo {
        display: flex;
        align-items: center;
        gap: 10px;
        align-self: stretch;
    }

    .cotiza-tu-servicio-texto-parrafo p {
        color: #414141;
        text-align: justify;

        /* p */
        font-family: Karla;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .cotiza-tu-servicio-form-container {
        display: flex;
        flex-direction: wrap;
        align-content: space-around;
        justify-content: space-around;
        align-items: flex-start;
        width: 474px;
        gap: 14px 17px;
        flex-wrap: wrap;
    }

    .cotiza-tu-servicio-form-input {
        display: flex;
        width: 216px;
        height: 48px;
        flex-direction: column;
        align-items: flex-start;
        flex-shrink: 0;

        border-radius: 5px;
        border: var(--Cantidad, 1px) solid var(--Border-Border-brand-1, #FF7500);
        background: var(--Surface-Surface-default, #FFF);
    }

    .cotiza-tu-servicio-form-textarea {
        display: flex;
        width: 97.5%;
        height: 122px;
        flex-direction: column;
        justify-content: center;
        align-items: flex-end;
        gap: 4px;
        border-radius: 4px;
    }

    .cotiza-tu-servicio-form-container-boton {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 454px;
    }

    .cotiza-tu-servicio-form-boton {
        display: flex;
        padding: 7px 10px;
        align-items: center;
        gap: 14px;
        width: 95px;
        border-radius: 5px;
        background: var(--Surface-Surface-gris, #414141);
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);

        color: var(--Text-Text-negative, #FFF);

        /* Body XS Bold */
        font-family: " Karla";
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 14px;
        /* 116.667% */
    }

    .selectable-container {
        position: relative;
        display: inline-block;
        width: 222px;
        height: 48px;
        /* margin-left: 10px; */
    }

    .options {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        border: 1px solid #ccc;
        background-color: #fff;
        z-index: 1;
    }

    .option {
        padding: 10px;
        cursor: pointer;
    }

    .option:hover {
        background-color: #f1f1f1;
    }

    .cotiza-tu-servicio-form-direcciones {
        display: flex;
        justify-content: flex-end;
        width: 100%;
    }

    .direcciones-container1 {
        position: relative;
        width: 210px;
        margin-top: 19px;
        /* margin-left: 20px; */
        /* border: 1px solid black; */
    }

    .direcciones-container2 {
        position: relative;
        width: 220px;
        margin-top: 19px;
        /* margin-left: 10px; */
        /* border: 1px solid black; */
    }

    .direcciones-container1 img {
        position: absolute;
        left: -40px;
    }

    .direcciones-container2 img {
        position: absolute;
        left: -40px;
    }

    .direcciones-container1 h4 {
        color: #414141;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: 20px;
        /* 153.846% */
        letter-spacing: 0.26px;
        margin: 0px;
    }

    .direcciones-container2 h4 {
        color: #414141;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: 20px;
        /* 153.846% */
        letter-spacing: 0.26px;
        margin: 0px;
    }

    .direcciones-container1 {
        color: #FFF;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        letter-spacing: 0.26px;
    }

    .direcciones-container2 {
        color: #FFF;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        letter-spacing: 0.26px;
    }
</style>
<section class="cotiza-tu-servicio">
    <div class="navegador">
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
        <p class="title__navegador">Contacto Clientes</p>
    </div>
    <div class="cotiza-tu-servicio-container">
        <div class="cotiza-tu-servicio-centrado">
            <div class="cotiza-tu-servicio-texto">
                <div class="cotiza-tu-servicio-texto-titulo">
                    <h2>Te ayudamos a impulsar tu negocio!</h2>
                </div>
                <div class="cotiza-tu-servicio-texto-parrafo">
                    <p>Completa el siguiente formulario y nos pondremos en contacto contigo</p>
                </div>
            </div>
            <div class="cotiza-tu-servicio-form">
                <form id="miFormulario" class="cotiza-tu-servicio-form-container">

                    <input class="cotiza-tu-servicio-form-input" type="text" id="input1" name="input1" required
                        placeholder="Tu nombre y apellido">


                    <input class="cotiza-tu-servicio-form-input" type="text" id="input2" name="input2" required
                        placeholder="Nombre de tu negocio"><!-- <br><br> -->


                    <input class="cotiza-tu-servicio-form-input" type="number" id="input3" name="input3" required
                        placeholder="Tu teléfono">


                    <input class="cotiza-tu-servicio-form-input" type="email" id="input4" name="input4" required
                        placeholder="Tu e-mail"><!-- <br><br> -->


                    <div class="selectable-container">
                        <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput1"
                            name="selectableInput1" readonly placeholder="Pedidos semanales">
                        <div class="options" id="options1">
                            <div class="option" data-value="opcion1">Menos de 50</div>
                            <div class="option" data-value="opcion2">Entre 50 y 100</div>
                            <div class="option" data-value="opcion3">Más de 100</div>
                        </div>
                    </div>

                    <div class="selectable-container">
                        <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput2"
                            name="selectableInput2" readonly placeholder="Tamaño de paquetes">
                        <div class="options" id="options2">
                            <div class="option" data-value="opcion1">Pequeños</div>
                            <div class="option" data-value="opcion2">Medianos</div>
                            <div class="option" data-value="opcion3">Grandes</div>
                        </div>
                    </div>
                    <!-- <br><br> -->

                    <textarea class="cotiza-tu-servicio-form-textarea" id="textarea" name="textarea" rows="4" cols="50"
                        placeholder="Tu mensaje aquí"></textarea><!-- <br><br> -->
                    <div class="cotiza-tu-servicio-form-container-boton">
                        <button class="cotiza-tu-servicio-form-boton" type="submit">Enviar</button>
                    </div>

                </form>
                <div class="cotiza-tu-servicio-form-direcciones">
                    <div class="direcciones-container1">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/direcciones.svg" alt="">
                        <h4>DIRECCIÓN</h4>
                        <p>República de Corea 2962 San Salvador 1480</p>
                    </div>
                    <div class="direcciones-container2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/mailes.svg" alt="">
                        <h4>MAIL</h4>
                        <p>comercial@soydelivery.com.uy rrhh@soydelivery.com.uy
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    // scripts.js
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