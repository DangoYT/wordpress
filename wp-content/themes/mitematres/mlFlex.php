<?php
/*
Template Name: Ml Flex
*/
get_header('uruguay');
?>

<style>
    .section__container {
        display: flex;
        flex-direction: column;
        align-items: center;

    }
.section__content {
    border: 1px solid black;
    background-color: #FF7500;
    display: flex;
    flex-direction: column;
    width: 530px;
    padding: 30px;
    
}

.intro {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    border: 1px solid red;
    width: 470px;
    /* height: 185px; */
}

.service {

}
.service__item {

}
.service__icon {

}
.service__description {

}
.service__title {

}
.service__text {

}
.section__heading {

}
.map {

}
.map__container {

}
.map__image {

}
.contact {

}
.contact__form {

}
.contact__form-group {

}
.contact__info {

}



.intro__title-container {
    
}

.intro__title {
    color: #FFF;

/* H1 */
font-family: "Museo Sans Rounded";
font-size: 44px;
font-style: normal;
font-weight: 700;
line-height: 131.523%; /* 57.87px */
}

.intro__subtitle-container {
   
}
.intro__subtitle {
    
    color: #FFF;
text-align: justify;

/* p */
font-family: Karla;
font-size: 14px;
font-style: normal;
font-weight: 500;
line-height: 125.523%; /* 17.573px */

}

</style>


<section class="section">
    

        <div class="navegador">
            <img class="navegador__arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
            <p class="navegador__title">Servicios</p>
            <img class="navegador__arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
            <p class="navegador__title">ML Flex</p>
        </div>
        <div class="section__container">

            <div class="section__content">
            <div class="intro">
                <div class="intro__title-container">
                    <h2 class="intro__title">Te ayudamos a impulsar tu negocio!</h2>
                </div>
                <div class="intro__subtitle-container">
                     <p class="intro__subtitle">Sumamos más puntos Drop off para dejar tus productos y que nosotros los entreguemos. Completa nuestro formulario y te habilitamos al instante para que puedas entregar tus productos en el día!</p>
                </div>
            </div>

            <div class="service">
                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/VectorBlanco.svg" alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">10 puntos Drop off</p>
                        <p class="service__text">Soydelivery tiene 10 puntos Dropoff para que puedas dejar todos tus productos vendidos por Mercadolibre flex</p>
                    </div>
                </div>

                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/VectorBlanco.svg" alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">Entregas en el día en 11 zonas</p>
                        <p class="service__text">Vos vendes y nosotros nos encargamos de entregar tus productos más rápido</p>
                    </div>
                </div>

                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/VectorBlanco.svg" alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">Comprobante de entrega y seguimiento en tiempo real</p>
                        <p class="service__text">Tanto el cliente como tú podrán visualizar el envío en tiempo real</p>
                    </div>
                </div>

                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/VectorBlanco.svg" alt="">
                    </div>
                    <div class="service__description">
                        <p class="service__title">Atención al cliente de Lunes a Domingo</p>
                        <p class="service__text">Comunicate en el horario de 8:30 a 21:30 hs</p>
                    </div>
                </div>

                <div class="service__item">
                    <div class="service__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/VectorBlanco.svg" alt="">
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
                    <img class="map__image" src="<?php echo get_template_directory_uri(); ?>/images/mapasoyde.png" alt="">
                </div>
            </div>

            <div class="contact">
                <form id="miFormulario" class="contact__form cotiza-tu-servicio-form-container">
                    <div class="contact__form-group form1-empresa-tipoEmpresa">
                        <p class="contact__form-label">Empresa:</p>
                        <div class="selectable-container">
                            <input class="form1-empresa-tipoEmpresa-inputSelect" type="text" id="selectableInput1" name="selectableInput1" readonly placeholder="Selecciona tipo de empresa">
                            <div class="options" id="options1">
                                <div class="option" data-value="opcion1">Empresa Unipersonal Literal E con facturación electrónica</div>
                                <div class="option" data-value="opcion2">Empresa Unipersonal con IVA</div>
                                <div class="option" data-value="opcion3">Sociedad de hecho (Entre 2 o más personas)</div>
                            </div>
                        </div>
                    </div>

                    <div class="contact__form-group cotiza-tu-servicio-form-container-inputs">
                        <input class="cotiza-tu-servicio-form-input" type="text" id="input1" name="input1" required placeholder="Tu nombre">
                        <input class="cotiza-tu-servicio-form-input" type="text" id="input2" name="input2" required placeholder="Tu telefono">
                        <input class="cotiza-tu-servicio-form-input" type="email" id="input4" name="input4" required placeholder="Tu e-mail">
                        <input class="cotiza-tu-servicio-form-input" type="number" id="input3" name="input3" required placeholder="Edad">
                        <div class="selectable-container">
                            <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput1" name="selectableInput1" readonly placeholder="Carnet de salud vigente">
                            <div class="options" id="options1">
                                <div class="option" data-value="opcion1">Si</div>
                                <div class="option" data-value="opcion2">No</div>
                            </div>
                        </div>
                        <div class="selectable-container">
                            <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput2" name="selectableInput2" readonly placeholder="Lugar de residencia">
                            <div class="options" id="options2">
                                <div class="option" data-value="opcion1">Montevideo</div>
                                <div class="option" data-value="opcion2">Canelones</div>
                                <div class="option" data-value="opcion3">Colonia</div>
                                <div class="option" data-value="opcion4">Maldonado</div>
                                <div class="option" data-value="opcion5">Rocha</div>
                                <div class="option" data-value="opcion6">Artigas</div>
                            </div>
                        </div>
                    </div>

                    <div class="contact__form-group cotiza-tu-servicio-form-container-textarea">
                        <textarea class="cotiza-tu-servicio-form-textarea" id="textarea" name="textarea" rows="4" cols="50" placeholder="Tu mensaje aquí"></textarea>
                    </div>

                    <div class="contact__form-group progress-container">
                        <div class="progress-circle active"></div>
                        <div class="circulo"></div>
                        <div class="circulo"></div>
                        <div class="circulo"></div>
                    </div>

                    <div class="contact__form-group cotiza-tu-servicio-form-container-boton">
                        <div class="elcontenedordelbotonquedespuescambio">
                            <button type="button" class="btn next cotiza-tu-servicio-form-boton">Enviar</button>
                        </div>
                    </div>
                </form>

                <div class="contact__info">
                    <div class="form3-direcciones-container">
                        <div class="form3-direcciones1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/direcciones.svg" alt="">
                            <h4>DIRECCIÓN</h4>
                            <p>República de Corea 2962 San Salvador 1480</p>
                        </div>
                        <div class="form3-direcciones2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/mailes.svg" alt="">
                            <h4>MAIL</h4>
                            <p>comercial@soydelivery.com.uy rrhh@soydelivery.com.uy</p>
                        </div>
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
    document.addEventListener('DOMContentLoaded', function () {
        const formSections = document.querySelectorAll('.form-section');
        const nextButtons = document.querySelectorAll('.next');
        const prevButtons = document.querySelectorAll('.prev');
        const progressCircles = document.querySelectorAll('.progress-circle');
        let currentSection = 0;

        function updateProgressCircles() {
            progressCircles.forEach((circle, index) => {
                circle.classList.toggle('active', index <= currentSection);
            });
        }

        nextButtons.forEach(button => {
            button.addEventListener('click', () => {
                formSections[currentSection].classList.remove('active');
                currentSection++;
                formSections[currentSection].classList.add('active');
                updateProgressCircles();
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener('click', () => {
                formSections[currentSection].classList.remove('active');
                currentSection--;
                formSections[currentSection].classList.add('active');
                updateProgressCircles();
            });
        });

        document.getElementById('multiStepForm').addEventListener('submit', function (event) {
            event.preventDefault();
            alert('Formulario enviado!');
            // Aquí puedes agregar el código para enviar el formulario
        });
    });

</script>


<?php get_footer(); ?>