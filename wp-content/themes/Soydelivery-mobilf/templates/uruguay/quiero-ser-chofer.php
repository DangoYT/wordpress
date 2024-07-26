<?php
/*
Template Name: Quiero ser chofer
*/
// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>

<style>
    .form-section {
        display: none;
    }

    .form-section.active {
        display: block;
    }

    .contacto-clientes__form-inputs-checkbox-container {}

    .contacto-clientes__form-inputs-checkbox {}

    .cotiza-tu-servicio-form-container-boton {}

    .cotiza-tu-servicio-form-boton {}

    @media only screen and (max-width: 360px) {
        .quiero-ser-chofer__uruguay {
            margin: 30px 0;
        }

        .contacto-clientes__form-inputs-checkbox-container {
            border-radius: 5px;
            background: var(--Surface-Surface-default, #FFF);
        }

        .contacto-clientes__form-inputs-checkbox-container p {
            color: #000;
            font-family: "Karla";
            font-size: 17px;
            font-style: normal;
            font-weight: bold;
            line-height: 125.523%;
            margin-left: 20px;
        }

        .contacto-clientes__form-inputs-checkbox {
            display: flex;
            align-items: center;
        }

        .contacto-clientes__form-inputs-checkbox label {
            color: var(--Gray-3, #828282);
            font-family: "Karla";
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 125.523%;
        }

        .contacto-clientes__form-inputs-checkbox input {
            width: 24px;
            height: 24px;
        }

        .option-year {
            max-width: 150px;
        }

        .contacto-clientes__options {
            max-height: 150px;
            overflow-y: auto;
        }

        .cotiza-tu-servicio-form-boton {
            border-radius: 3.448px;
            background: var(--Surface-Surface-gris, #414141);
            box-shadow: 0px 1.379px 2.759px 0px rgba(0, 0, 0, 0.15);

            color: var(--Text-Text-negative, #FFF);
            font-family: "Karla";
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: 125.523%;
            text-align: center;

            width: 78px;
            height: 32px;

            margin-top: 20px;
        }

        .cotiza-tu-servicio-form-container-boton {
            display: flex;
            justify-content: space-evenly;

        }

        .cotiza-tu-servicio-form-container-boton2 {
            display: flex;
            justify-content: space-evenly;

        }
    }
</style>

<section class="quiero-ser-chofer__uruguay">

    <div id="form-container">
        <form id="multiStepForm"
            action="https://docs.google.com/forms/d/e/1FAIpQLSd_2fLadIJzN37u89r0_xpLRBfW5zrcVCyNuE9yb9uFPI8jiA/formResponse"
            method="post" target="hidden_iframe" onsubmit="submitted=true;">
            <div class="form-section active">
                <div class="contacto-clientes__form-container">
                    <div class="contacto-clientes__text">
                        <div class="contacto-clientes__text-title">
                            <h2 class="contacto-clientes__title">Te estamos buscando!</h2>
                        </div>
                        <div class="contacto-clientes__text-paragraph">
                            <p class="contacto-clientes__paragraph">¿Tenés un vehículo y querés trabajar con nosotros?
                            </p>
                            <p class="contacto-clientes__paragraph">Completa el siguiente formulario y nos pondremos en
                                contacto contigo</p>
                        </div>
                    </div>

                    <div class="contacto-clientes__form-elements">
                        <div class="contacto-clientes__form-inputs">
                            <input class="contacto-clientes__input" type="text" id="input1" name="entry.502026705"
                                required placeholder="Tu nombre">
                            <input class="contacto-clientes__input" type="text" id="input2" name="entry.1683159174"
                                required placeholder="Tu telefono">
                            <input class="contacto-clientes__input" type="email" id="input3" name="entry.1319295940"
                                required placeholder="Tu e-mail">
                            <input class="contacto-clientes__input" type="number" id="input4" name="entry.1004656100"
                                required placeholder="Tu edad">

                            <div class="contacto-clientes__selectable-container selectable-container">
                                <input class="contacto-clientes__input" type="text" id="selectableInput1"
                                    name="entry.748880235" readonly placeholder="Carnet de salud vigente">
                                <div class="contacto-clientes__options" id="options1">
                                    <div class="contacto-clientes__option option" data-value="Si">Si</div>
                                    <div class="contacto-clientes__option option" data-value="No">No</div>
                                </div>
                            </div>
                            <div class="contacto-clientes__selectable-container selectable-container">
                                <input class="contacto-clientes__input" type="text" id="selectableInput2"
                                    name="entry.1277911846" readonly placeholder="Lugar de residencia">
                                <div class="contacto-clientes__options" id="options2">
                                    <div class="contacto-clientes__option option" data-value="Montevideo">Montevideo
                                    </div>
                                    <div class="contacto-clientes__option option" data-value="Canelones">San José</div>
                                    <div class="contacto-clientes__option option" data-value="Canelones">Canelones</div>
                                    <div class="contacto-clientes__option option" data-value="Colonia">Colonia</div>
                                    <div class="contacto-clientes__option option" data-value="Maldonado">Maldonado</div>
                                    <div class="contacto-clientes__option option" data-value="Rocha">Rocha</div>
                                    <div class="contacto-clientes__option option" data-value="Artigas">Artigas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-circle active"></div>
                        <div class="circulo"></div>
                        <div class="circulo"></div>
                        <div class="circulo"></div>
                    </div>
                    <div class="cotiza-tu-servicio-form-container-boton">
                        <button type="button" class="btn next cotiza-tu-servicio-form-boton">Siguiente</button>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="contacto-clientes__form-container">
                    <div class="contacto-clientes__form-elements">
                        <div class="contacto-clientes__form-inputs">
                            <div class="contacto-clientes__form-inputs-checkbox-container">
                                <p>Qué tipo de vehículo tienes?</p>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox1" name="entry.1789997892"
                                        value="No tengo vehículo">
                                    <label for="checkbox1">No tengo vehículo</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox2" name="entry.1789997892" value="Moto">
                                    <label for="checkbox2">Moto</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox3" name="entry.1789997892" value="Bicicleta">
                                    <label for="checkbox3">Bicicleta</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox4" name="entry.1789997892"
                                        value="Camioneta pequeña">
                                    <label for="checkbox4">Camioneta pequeña (Fiorino, Berlingo, etc)</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox5" name="entry.1789997892"
                                        value="Camioneta mediana">
                                    <label for="checkbox5">Camioneta mediana (H1, Expert, etc)</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox6" name="entry.1789997892"
                                        value="Camioneta grande">
                                    <label for="checkbox6">Camioneta grande (Boxer, Master, etc)</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox7" name="entry.1789997892"
                                        value="Camión con furgon">
                                    <label for="checkbox7">Camión con furgon</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox8" name="entry.1789997892"
                                        value="Camión abierto">
                                    <label for="checkbox8">Camión abierto</label>
                                </div>
                            </div>
                            <div class="contacto-clientes__selectable-container selectable-container">
                                <input class="contacto-clientes__input" type="text" id="selectableInput3"
                                    name="entry.1414809977" readonly placeholder="Marca y modelo de tu vehiculo">
                                <div class="contacto-clientes__options" id="options3">
                                    <div class="contacto-clientes__option option" data-value="Chevrolet">Chevrolet</div>
                                    <div class="contacto-clientes__option option" data-value="Renault">Renault</div>
                                    <div class="contacto-clientes__option option" data-value="Volkswagen">Volkswagen
                                    </div>
                                    <div class="contacto-clientes__option option" data-value="Fiat">Fiat</div>
                                    <div class="contacto-clientes__option option" data-value="Citroen">Citroen</div>
                                    <div class="contacto-clientes__option option" data-value="Otro">Otro</div>
                                </div>
                            </div>
                            <div class="contacto-clientes__selectable-container selectable-container">
                                <input class="contacto-clientes__input" type="text" id="selectableInput4"
                                    name="entry.2017070637" readonly placeholder="Año">
                                <div class="contacto-clientes__options" id="options4">
                                    <?php for ($year = 2024; $year >= 1990; $year--): ?>
                                        <div class="option" data-value="<?php echo $year; ?>"><?php echo $year; ?></div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="circulo"></div>
                        <div class="progress-circle"></div>
                        <div class="circulo"></div>
                        <div class="circulo"></div>
                    </div>
                    <div class="cotiza-tu-servicio-form-container-boton2">
                        <button type="button" class="cotiza-tu-servicio-form-boton btn prev">Anterior</button>
                        <button type="button" class="cotiza-tu-servicio-form-boton btn next">Siguiente</button>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="contacto-clientes__form-container">
                    <div class="contacto-clientes__form-elements">
                        <div class="contacto-clientes__form-inputs">
                            <div class="contacto-clientes__form-inputs-checkbox-container">
                                <p>Que categoría de vehiculo tienes?</p>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox9" name="entry.50857945" value="Categoría A">
                                    <label for="checkbox9">Categoria A</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox10" name="entry.50857945" value="Categoría B">
                                    <label for="checkbox10">Categoria B</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox11" name="entry.50857945" value="Categoría C">
                                    <label for="checkbox11">Categoria C</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox12" name="entry.50857945" value="Categría D">
                                    <label for="checkbox12">Categoria D</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox13" name="entry.50857945" value="Categoría F">
                                    <label for="checkbox13">Categoria F</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox14" name="entry.50857945" value="Categoría G1">
                                    <label for="checkbox14">Categoria G1</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox15" name="entry.50857945" value="Categoría G2">
                                    <label for="checkbox15">Categoria G2</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox16" name="entry.50857945" value="Categoría G3">
                                    <label for="checkbox16">Categoria G3</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox17" name="entry.50857945" value="Categoría E">
                                    <label for="checkbox17">Categoria E</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox18" name="entry.50857945" value="Categoría H">
                                    <label for="checkbox18">Categoria H</label>
                                </div>
                            </div>
                            <div class="contacto-clientes__selectable-container selectable-container">
                                <input class="contacto-clientes__input" type="text" id="selectableInput5"
                                    name="entry.1082203868" readonly placeholder="¿Tenes empresa propia?">
                                <div class="contacto-clientes__options" id="options5">
                                    <div class="contacto-clientes__option option" data-value="Si">Si</div>
                                    <div class="contacto-clientes__option option" data-value="No">No</div>
                                </div>
                            </div>
                            <div class="contacto-clientes__selectable-container selectable-container">
                                <input class="contacto-clientes__input" type="text" id="selectableInput6"
                                    name="entry.1657987814" readonly placeholder="Tipo de empresa">
                                <div class="contacto-clientes__options" id="options6">
                                    <div class="contacto-clientes__option option"
                                        data-value="Empresa Unipersonal Literal E con facturación electrónica">Empresa
                                        Unipersonal Literal E con facturación electrónica</div>
                                    <div class="contacto-clientes__option option"
                                        data-value="Empresa Unipersonal con IVA">Empresa Unipersonal con IVA</div>
                                    <div class="contacto-clientes__option option"
                                        data-value="Sociedad de hecho (Entre 2 o más personas)">Sociedad de hecho (Entre
                                        2 o más personas)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="circulo"></div>
                        <div class="progress-circle"></div>
                        <div class="circulo"></div>
                        <div class="circulo"></div>
                    </div>
                    <div class="cotiza-tu-servicio-form-container-boton2">
                        <button type="button" class="cotiza-tu-servicio-form-boton btn prev">Anterior</button>
                        <button type="button" class="cotiza-tu-servicio-form-boton btn next">Siguiente</button>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="contacto-clientes__form-container">
                    <div class="contacto-clientes__form-elements">
                        <div class="contacto-clientes__form-inputs">
                            <div class="contacto-clientes__form-inputs-checkbox-container">
                                <p>¿Qué disponibilidad tenes para trabajar?</p>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox19" name="entry.718118736" value="Full time">
                                    <label for="checkbox19">Full time</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox20" name="entry.718118736"
                                        value="Solo en la mañana">
                                    <label for="checkbox20">Solo en la mañana</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox21" name="entry.718118736"
                                        value="Solo en la tarde">
                                    <label for="checkbox21">Solo en la tarde</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox22" name="entry.718118736" value="Entre semana">
                                    <label for="checkbox22">Entre semana</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox23" name="entry.718118736"
                                        value="Fines de semana">
                                    <label for="checkbox23">Fines de semana</label>
                                </div>
                                <div class="contacto-clientes__form-inputs-checkbox">
                                    <input type="checkbox" id="checkbox24" name="entry.718118736" value="Otro">
                                    <label for="checkbox24">Otro</label>
                                </div>
                            </div>
                            <textarea class="contacto-clientes__textarea" id="textarea1" name="entry.278675434" rows="4"
                                cols="50" placeholder="Como nos conociste?"></textarea>
                            <textarea class="contacto-clientes__textarea" id="textarea2" name="entry.1087530976"
                                rows="4" cols="50" placeholder="Te gustaria dejar un comentario?"></textarea>
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="circulo"></div>
                        <div class="circulo"></div>
                        <div class="progress-circle"></div>
                        <div class="circulo"></div>
                    </div>
                    <div class="cotiza-tu-servicio-form-container-boton">
                        <button type="button" class="cotiza-tu-servicio-form-boton btn prev">Anterior</button>
                        <button type="submit" class="cotiza-tu-servicio-form-boton btn">Enviar</button>
                    </div>
                </div>
            </div>
        </form>

        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"
            onload="if(submitted) { mostrarPopup(); }"></iframe>
    </div>
    <div id="popup" class="popup__contacto" style="display: none;">
        <div class="popup__contacto__content">
            <img id="closePopup" class="popup__close"
                src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/paper-plane-blanco.svg" alt="">
            <p>Gracias por ponerte en contacto con nosotros. Tu información fue enviada con éxito. ¡Pronto te
                contactaremos!</p>
        </div>
    </div>
</section>

<script>

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
                if (currentSection < formSections.length - 1) {
                    formSections[currentSection].classList.remove('active');
                    currentSection++;
                    formSections[currentSection].classList.add('active');
                    updateProgressCircles();
                }
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener('click', () => {
                if (currentSection > 0) {
                    formSections[currentSection].classList.remove('active');
                    currentSection--;
                    formSections[currentSection].classList.add('active');
                    updateProgressCircles();
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
                    if (currentSection < formSections.length - 1) {
                        formSections[currentSection].classList.remove('active');
                        currentSection++;
                        formSections[currentSection].classList.add('active');
                        updateProgressCircles();
                    }
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', () => {
                    if (currentSection > 0) {
                        formSections[currentSection].classList.remove('active');
                        currentSection--;
                        formSections[currentSection].classList.add('active');
                        updateProgressCircles();
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
                        if (currentSection < formSections.length - 1) {
                            formSections[currentSection].classList.remove('active');
                            currentSection++;
                            formSections[currentSection].classList.add('active');
                            updateProgressCircles();
                        }
                    });
                });

                prevButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        if (currentSection > 0) {
                            formSections[currentSection].classList.remove('active');
                            currentSection--;
                            formSections[currentSection].classList.add('active');
                            updateProgressCircles();
                        }
                    });
                });

                document.getElementById('multiStepForm').addEventListener('submit', function (event) {
                    event.preventDefault();
                    const form = this;
                    const data = new FormData(form);

                    fetch(form.action, {
                        method: 'POST',
                        body: data,
                        mode: 'no-cors'
                    }).then(() => {
                        mostrarPopup();
                    }).catch(error => {
                        console.error('Error:', error);
                    });
                });

                function mostrarPopup() {
                    document.getElementById('popup').style.display = 'block';
                }

                document.getElementById('closePopup').addEventListener('click', function () {
                    document.getElementById('popup').style.display = 'none';
                });
            });

        });

    });
</script>

<?php get_footer(); ?>