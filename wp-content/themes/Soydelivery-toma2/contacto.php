<?php
/* Template Name: Contacto */
get_header(); ?>

<section class="contacto-clientes">
    <div class="navegador">
        <img class="navegador__arrow"
            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg" alt="Cajita">
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
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/paper-plane-blanco.svg" alt="">
            <p>Gracias por ponerte en contacto con nosotros.

                Tu información fue enviada con éxito.

                ¡Pronto te contactaremos!</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>