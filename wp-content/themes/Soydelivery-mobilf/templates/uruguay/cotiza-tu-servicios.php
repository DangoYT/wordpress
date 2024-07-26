<?php
/*
Template Name: Cotiza tu servicio
*/
// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>

<section class="contacto-clientes">
    <div class="navegador">
        <img class="navegador__arrow"
            src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg" alt="Cajita">
        <p class="navegador__title">Contacto Clientes</p>
    </div>
    <div class="contacto-clientes__form-container">
        <div class="contacto-clientes__text">
            <div class="contacto-clientes__text-title">
                <h2 class="contacto-clientes__title">Te ayudamos a impulsar tu negocio!</h2>
            </div>
            <div class="contacto-clientes__text-paragraph">
                <p class="contacto-clientes__paragraph">Completa el siguiente formulario y nos pondremos en contacto
                    contigo</p>
            </div>
        </div>
        <form id="miFormulario" class="contacto-clientes__form">
            <div class="contacto-clientes__form-elements">
                <div class="contacto-clientes__form-inputs">
                    <input class="contacto-clientes__input" type="text" id="input1" name="input1" required
                        placeholder="Tu nombre y apellido">
                    <input class="contacto-clientes__input" type="text" id="input2" name="input2" required
                        placeholder="Nombre de tu negocio">
                    <input class="contacto-clientes__input" type="number" id="input3" name="input3" required
                        placeholder="Tu teléfono">
                    <input class="contacto-clientes__input" type="email" id="input4" name="input4" required
                        placeholder="Tu e-mail">
                    <div class="contacto-clientes__selectable-container">
                        <input class="contacto-clientes__input" type="text" id="selectableInput1"
                            name="selectableInput1" readonly placeholder="Pedidos semanales">
                        <div class="contacto-clientes__options" id="options1">
                            <div class="contacto-clientes__option" data-value="opcion1">Menos de 50</div>
                            <div class="contacto-clientes__option" data-value="opcion2">Entre 50 y 100</div>
                            <div class="contacto-clientes__option" data-value="opcion3">Más de 100</div>
                        </div>
                    </div>
                    <div class="contacto-clientes__selectable-container">
                        <input class="contacto-clientes__input" type="text" id="selectableInput2"
                            name="selectableInput2" readonly placeholder="Tamaño de paquetes">
                        <div class="contacto-clientes__options" id="options2">
                            <div class="contacto-clientes__option" data-value="opcion1">Pequeños</div>
                            <div class="contacto-clientes__option" data-value="opcion2">Medianos</div>
                            <div class="contacto-clientes__option" data-value="opcion3">Grandes</div>
                        </div>
                    </div>
                </div>
                <textarea class="contacto-clientes__textarea" id="textarea" name="textarea" rows="4" cols="50"
                    placeholder="Tu mensaje aquí"></textarea>
                <div class="contacto-clientes__form-button">
                    <button class="contacto-clientes__button" type="submit">Enviar</button>
                </div>
            </div>
        </form>
        <div class="contacto-clientes__form-direcciones">
            <div class="direcciones-container1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/direcciones.svg" alt="">
                <h4>DIRECCIÓN</h4>
                <p>República de Corea 2962 San Salvador 1480</p>
            </div>
            <div class="direcciones-container2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mailes.svg" alt="">
                <h4>MAIL</h4>
                <p>comercial@soydelivery.com.uy rrhh@soydelivery.com.uy</p>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectableInputs = document.querySelectorAll('.contacto-clientes__selectable-container input');
        var optionsContainers = document.querySelectorAll('.contacto-clientes__options');
        var options = document.querySelectorAll('.contacto-clientes__option');

        selectableInputs.forEach(function (input) {
            input.addEventListener('click', function () {
                var optionsContainer = this.nextElementSibling;
                if (optionsContainer) {
                    optionsContainer.style.display = optionsContainer.style.display === 'block' ? 'none' : 'block';
                }
            });
        });

        options.forEach(function (option) {
            option.addEventListener('click', function () {
                var input = this.closest('.contacto-clientes__selectable-container').querySelector('input');
                if (input) {
                    input.value = this.textContent;
                    this.parentElement.style.display = 'none';
                }
            });
        });

        document.addEventListener('click', function (e) {
            if (!e.target.closest('.contacto-clientes__selectable-container')) {
                optionsContainers.forEach(function (container) {
                    container.style.display = 'none';
                });
            }
        });
    });
</script>


<?php get_footer(); ?>