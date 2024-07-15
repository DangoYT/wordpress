<?php
/* Template Name: Contacto */
get_header(); ?>

<style>
    .navegador {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .navegador__arrow {
        margin-right: 10px;
    }

    .navegador__title {
        font-size: 20px;
        font-weight: bold;
    }

    .contacto-clientes {
        padding: 30px 0;
    }

    .contacto-clientes__form-container {
        display: flex;
        justify-content: center;
    }

    .contacto-clientes__form {
        display: flex;
        height: 562px;
        padding: 30px;
        flex-direction: column;
        align-items: center;
        gap: 19px;
        justify-content: space-between;
        border-radius: 10px;
        background: var(--Surface-Surface-brand, #FF7500);
    }

    .contacto-clientes__container {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #FF7500;
        padding: 30px;
        border-radius: 10px;
    }

    .contacto-clientes__centered {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contacto-clientes__text {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: -4px;
        align-self: stretch;
    }

    .contacto-clientes__text-title {
        display: flex;
        align-items: center;
        gap: 10px;
        align-self: stretch;
    }

    .contacto-clientes__title {
        color: #FFF;

        /* H1 */
        font-family: "Museo Sans Rounded";
        font-size: 44px;
        font-style: normal;
        font-weight: 700;
        line-height: 131.523%;
        /* 57.87px */
        margin: 0;
    }

    .contacto-clientes__text-paragraph {
        display: flex;
        align-items: center;
        gap: 10px;
        align-self: stretch;
    }

    .contacto-clientes__paragraph {
        color: #414141;
        text-align: justify;

        /* p */
        font-family: Karla;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
        margin: 0;
    }

    .contacto-clientes__form-elements {
        display: flex;
        /*  width: 450px; */
        /* padding: 0px 3px; */
        flex-direction: column;
        align-items: center;
        gap: 50px;
    }

    .contacto-clientes__form-inputs {
        display: flex;
        width: 474px;
        /* padding: 11px 12px; */
        align-items: center;
        /* align-content: flex-start; */
        gap: 14px 17px;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .contacto-clientes__input {
        width: 216px;
        height: 48px;
        border-radius: 5px;
        border: var(--Cantidad, 1px) solid var(--Border-Border-brand-1, #FF7500);
        background: var(--Surface-Surface-default, #FFF);
    }

    .contacto-clientes__selectable-container {
        position: relative;
    }

    .contacto-clientes__options {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        border: 1px solid #ccc;
        background-color: #fff;
        z-index: 1;
    }

    .contacto-clientes__option {
        padding: 10px;
        cursor: pointer;
    }

    .contacto-clientes__option:hover {
        background-color: #f1f1f1;
    }

    .contacto-clientes__form-textarea {
        margin-bottom: 20px;
    }

    .contacto-clientes__textarea {
        width: 97.5%;
        height: 122px;
        border-radius: 4px;
        border: 1px solid var(--Nasanja-Soydelivery, #FF7500);
        background: var(--Shades-White, #FFF);
    }

    .contacto-clientes__form-button {
        text-align: center;
    }

    .contacto-clientes__button {
        padding: 10px 20px;
        background-color: #414141;
        color: #FFF;
        border: none;
        border-radius: 5px;
        font-family: "Karla";
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
    }

    .contacto-clientes__button:hover {
        background-color: #e66000;
    }

    .contacto-clientes__addresses {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 20px;
    }

    .contacto-clientes__address {
        text-align: center;
    }

    .contacto-clientes__address img {
        margin-bottom: 10px;
    }

    .contacto-clientes__address-title {
        font-size: 14px;
        font-weight: 600;
        margin: 0;
    }

    .contacto-clientes__address-text {
        font-size: 14px;
        font-weight: 400;
        margin: 0;
    }

    .popup__contacto {
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
        /* background-color: rgba(0, 0, 0, 0.4); */
        z-index: 1;
        /* top: 0;
        left: 0; */
    }

    .popup__contacto__content {
        display: inline-flex;
        padding: 68.079px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 22.693px;
        border-radius: 22.693px;
        border: 6.808px solid var(--Border-Border-brand-1, #FF7500);
        background: var(--Surface-Surface-default, #FFF);
        box-shadow: 0px 9.077px 9.077px 0px rgba(0, 0, 0, 0.25);
    }

    .popup__content img {
        width: 36.309px;
        height: 36.313px;
    }

    .popup__close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .popup__close:hover,
    .popup__close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
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

    .selectable-container {
        position: relative;
        display: inline-block;
        width: 222px;
        height: 48px;
    }
</style>


<section class="contacto-clientes">
    <div class="navegador">
        <img class="navegador__arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
        <p class="navegador__title">Contacto Clientes</p>
    </div>
    <div class="contacto-clientes__form-container">

        <form id="miFormulario" class="contacto-clientes__form"
            action="https://docs.google.com/forms/d/e/1FAIpQLScqlfnyCrzJp6R0umgXA0uUXXSXxMFs4UISADhw2Ixkb18MUQ/formResponse"
            method="post" target="hidden_iframe" onsubmit="submitted=true;">
            <div class="contacto-clientes__text">
                <div class="contacto-clientes__text-title">
                    <h2 class="contacto-clientes__title">¿Necesitas ayuda?</h2>
                </div>
                <div class="contacto-clientes__text-paragraph">
                    <p class="contacto-clientes__paragraph">Puedes contactar con nosotros a través del
                        siguiente formulario</p>
                </div>
            </div>

            <div class="contacto-clientes__form-elements">
                <div class="contacto-clientes__form-inputs">
                    <input class="contacto-clientes__input" type="text" id="input1" name="entry.2023029839" required
                        placeholder="Nombre">
                    <input class="contacto-clientes__input" type="text" id="input2" name="entry.1809567484" required
                        placeholder="Apellido">
                    <input class="contacto-clientes__input" type="text" id="input3" name="entry.294865018" required
                        placeholder="Tu telefono">
                    <input class="contacto-clientes__input" type="email" id="input4" name="entry.1481478913" required
                        placeholder="Tu e-mail">
                    <div class="contacto-clientes__selectable-container selectable-container">
                        <input class="contacto-clientes__input" type="text" id="selectableInput1"
                            name="entry.1166053912" readonly placeholder="País">
                        <div class="contacto-clientes__options" id="options1">
                            <div class="contacto-clientes__option option" data-value="opcion1">Argentina</div>
                            <div class="contacto-clientes__option option" data-value="opcion2">Brasil</div>
                            <div class="contacto-clientes__option option" data-value="opcion3">Colombia</div>
                            <div class="contacto-clientes__option option" data-value="opcion4">Paraguay</div>
                            <div class="contacto-clientes__option option" data-value="opcion5">Perú</div>
                            <div class="contacto-clientes__option option" data-value="opcion6">Uruguay</div>
                        </div>
                    </div>
                    <input class="contacto-clientes__input" type="text" id="input5" name="entry.1162891388" required
                        placeholder="Escribe tu país">
                </div>
                <textarea class="contacto-clientes__textarea" id="textarea" name="entry.1134051808" rows="4" cols="50"
                    placeholder="Tu mensaje aquí"></textarea>
            </div>

            <div>
                <div class="contacto-clientes__form-button">
                    <button type="submit" class="contacto-clientes__button">Enviar</button>
                    <img src="" alt="">
                </div>
            </div>
        </form>


        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"
            onload="if(submitted) { mostrarPopup(); }"></iframe>
    </div>
    <!-- Contenedor para el popup -->
    <div id="popup" class="popup__contacto" style="display: none;">
        <div class="popup__contacto__content">

            <img id="closePopup" class="popup__close"
                src="<?php echo get_template_directory_uri(); ?>/images/paper-plane.svg" alt="">
            <p>Gracias por ponerte en contacto con nosotros.

                Tu información fue enviado con éxito

                ¡Pronto te contactaremos!</p>
        </div>
    </div>
</section>






<script>

    document.addEventListener('DOMContentLoaded', function () {
        var miFormulario = document.getElementById('miFormulario');
        var submitted = false;

        if (miFormulario) {
            miFormulario.addEventListener('submit', function () {
                submitted = true;
            });
        }

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

        window.mostrarPopup = function () {
            if (!submitted) return;

            var popup = document.getElementById('popup');
            var closePopup = document.getElementById('closePopup');

            popup.style.display = 'flex';

            closePopup.onclick = function () {
                popup.style.display = 'none';
            }

            window.onclick = function (event) {
                if (event.target == popup) {
                    popup.style.display = 'none';
                }
            }

            submitted = false;
        }
    });


</script>

<?php get_footer(); ?>