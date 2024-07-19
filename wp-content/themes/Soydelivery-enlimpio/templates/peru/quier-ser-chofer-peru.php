<?php
/*
Template Name: Quiero ser chofer peru
*/
// Carga el header personalizado para Perú desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-peru.php';
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
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        align-self: stretch;
    }

    .cotiza-tu-servicio-texto-parrafo p {
        color: #414141;
        text-align: justify;
        margin: 0px;
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
        gap: 25px;
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
        width: 100%;
        height: 122px;
        flex-direction: column;
        justify-content: center;
        align-items: flex-end;
        gap: 4px;
        border-radius: 4px;
    }

    .cotiza-tu-servicio-form-container-boton {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 454px;
        padding-top: 25px;
    }

    .cotiza-tu-servicio-form-container-boton2 {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        width: 454px;
        /* padding-top: 20px; */
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





    .form-section {
        display: none;
    }

    .form-section.active {
        /* display: block; */
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .btn {
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

    .btn:hover {
        background-color: #e66000;
    }

    .progress-container {
        display: flex;
        justify-content: center;
    }

    .circulo {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #e0e0e0;
        margin: 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    .progress-circle {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #e0e0e0;
        margin: 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    .progress-circle.active {
        background-color: #414141;

    }

    .cotiza-tu-servicio-form-container-inputs {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    .cotiza-tu-servicio-form-container-textarea {
        display: flex;
        padding: 25px 0px;
    }

    .seccion2-inputs-container {
        display: flex;
        width: 488px;
        padding: 30px;
        flex-direction: column;
        align-items: flex-start;
        gap: 6px;

        border-radius: 10px;
        background: var(--Surface-Surface-default, #FFF);
    }

    .seccion2-inputs-container p {
        color: #000;

        /* p */
        font-family: "Karla";
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */

        /* margin: 0px; */
    }

    .seccion2-inputs-container label {
        color: var(--Gray-3, #828282);

        /* p */
        font-family: "Karla";
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .seccion2-inputs-container input {
        width: 24px;
        height: 24px;

        border-radius: 4px;
        border: 1px solid var(--Border-Border-brand-4, #D9632B);
        background: var(--Surface-Surface-default, #FFF);
    }

    .form3-container {
        border: 1px solid black;
        display: flex;
        width: 470px;
        padding: 30px;
        flex-direction: column;
        align-items: center;
        gap: 19px;

        border-radius: 10px;
        background: var(--Surface-Surface-brand, #FF7500);
    }

    .form3-titulo {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        align-self: stretch;
    }

    .form3-titulo-container {
        display: flex;
        align-items: center;
        gap: 10px;
        align-self: stretch;
    }

    .form3-titulo-container h2 {
        color: #FFF;
        margin: 0px;
        /* H1 */
        font-family: "Museo Sans Rounded";
        font-size: 44px;
        font-style: normal;
        font-weight: 700;
        line-height: 131.523%;
        /* 57.87px */
    }

    .form3-inputs {
        display: flex;
        /* width: 488px; */
        padding: 30px;
        flex-direction: column;
        align-items: flex-start;
        gap: 24px;

        border-radius: 10px;
        background: var(--Surface-Surface-default, #FFF);
    }

    .form3-inputs-container-titulo {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .form3-inputs-container-titulo h3 {
        color: #000;
        margin: 0px;
        /* p */
        font-family: "Karla";
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .form3-inputs-container {
        display: flex;
        width: 430px;
        align-items: center;
        align-content: center;
        gap: 16px 100px;
        flex-wrap: wrap;
    }

    .form3-inputs-container-input {
        display: flex;
        align-items: center;
        gap: 9px;
    }

    .form3-inputs-container-input input {
        width: 24px;
        height: 24px;
        border-radius: 4px;
        border: 1px solid var(--Border-Border-brand-4, #D9632B);
        background: var(--Surface-Surface-default, #FFF);
    }

    .form3-inputs-container-input label {
        color: var(--Gray-3, #828282);

        /* p */
        font-family: " Karla";
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .form3-selectable-container {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 19px;
        padding: 25px 0px;
        width: 100%;
    }

    .form3-botons-container {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        padding: 25px 0px;
    }

    .form3-direcciones-container {
        display: flex;
        width: 550px;
        justify-content: space-around;

    }

    .form3-direcciones1 {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 160px;
        margin-left: 10px;
    }

    .form3-direcciones2 {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 240px;
        margin-left: 10px;
    }

    .form3-direcciones1 img {
        position: absolute;
        top: 0px;
        left: -30px;
    }

    .form3-direcciones1 h4 {
        margin: 0px;
        color: #414141;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: 20px;
        /* 153.846% */
        letter-spacing: 0.26px;
    }

    .form3-direcciones1 p {
        margin: 0px;
        color: #FFF;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        letter-spacing: 0.26px;
    }

    .form3-direcciones2 img {
        position: absolute;
        top: 0px;
        left: -30px;
    }

    .form3-direcciones2 h4 {
        margin: 0px;
        color: #414141;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
        line-height: 20px;
        /* 153.846% */
        letter-spacing: 0.26px;
    }

    .form3-direcciones2 p {
        margin: 0px;
        color: #FFF;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        letter-spacing: 0.26px;
    }

    .elcontenedordelbotonquedespuescambio {
        margin-left: 90px;
    }

    .form4-container {}

    .form4-allinputs-container {
        display: flex;
        width: 488px;
        /*  padding: 30px; */
        flex-direction: column;
        align-items: flex-start;
        gap: 29px;
        border-radius: 10px;
        background: var(--Surface-Surface-default, #FFF);
    }

    .form4-inputs-containeres {
        display: flex;
        /* width: 488px; */
        padding: 30px;
        flex-direction: column;
        align-items: flex-start;

    }

    .form4-inputs-container-titulo {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .form4-inputs-container-titulo p {
        color: var(--Gray-3, #828282);

        /* p */
        font-family: Karla;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */

        margin-bottom: 24px;
    }

    .form4-inputs-container {
        display: flex;
        width: 430px;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 16px;
    }

    .form4-inputs-item-container {
        display: flex;
        align-items: center;
        gap: 9px;
    }

    .form4-inputs-item-container input {
        width: 24px;
        height: 24px;
        border-radius: 4px;
        border: 1px solid var(--Border-Border-brand-4, #D9632B);
        background: var(--Surface-Surface-default, #FFF);
    }

    .form4-inputs-item-container label {
        color: var(--Gray-3, #828282);

        /* p */
        font-family: Karla;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
        /* 17.573px */
    }

    .form4-textarea-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        padding: 20px 0px;
    }

    .form4-textarea-item {
        display: flex;
        /* width: 490px; */
        /* flex-direction: column; */
        /* justify-content: center; */
        /* align-items: flex-end; */
        /* gap: 4px; */
        border-radius: 4px;
    }
</style>
<section class="cotiza-tu-servicio">
    <div class="navegador">
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
        <p class="title__navegador">Contacto</p>
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
        <p class="title__navegador">Quiero ser chofer</p>
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/cajita.svg" alt="Cajita">
        <p class="title__navegador">soy particular</p>
    </div>
    <div id="form-container">
        <form id="multiStepForm">
            <div class="form-section active">
                <div>
                    <div class="cotiza-tu-servicio-container">
                        <div class="cotiza-tu-servicio-centrado">
                            <div class="cotiza-tu-servicio-texto">
                                <div class="cotiza-tu-servicio-texto-titulo">
                                    <h2>Te estamos buscando!</h2>
                                </div>
                                <div class="cotiza-tu-servicio-texto-parrafo">
                                    <p>¿Tenés un vehículo y querés trabajar con nosotros?</p>

                                    <p>Completa el siguiente formulario y nos pondremos en contacto contigo</p>
                                </div>
                            </div>
                            <div class="cotiza-tu-servicio-form">

                                <form id="miFormulario" class="cotiza-tu-servicio-form-container">

                                    <div class="cotiza-tu-servicio-form-container-inputs">

                                        <input class="cotiza-tu-servicio-form-input" type="text" id="input1"
                                            name="input1" required placeholder="Tu nombre">


                                        <input class="cotiza-tu-servicio-form-input" type="text" id="input2"
                                            name="input2" required placeholder="Tu telefono"><!-- <br><br> -->


                                        <input class="cotiza-tu-servicio-form-input" type="email" id="input4"
                                            name="input4" required placeholder="Tu e-mail">



                                        <input class="cotiza-tu-servicio-form-input" type="number" id="input3"
                                            name="input3" required placeholder="Edad">


                                        <div class="selectable-container">
                                            <input class="cotiza-tu-servicio-form-input" type="text"
                                                id="selectableInput1" name="selectableInput1" readonly
                                                placeholder="Carnet de salud vigente">
                                            <div class="options" id="options1">
                                                <div class="option" data-value="opcion1">Si</div>
                                                <div class="option" data-value="opcion2">No</div>
                                            </div>
                                        </div>

                                        <div class="selectable-container">
                                            <input class="cotiza-tu-servicio-form-input" type="text"
                                                id="selectableInput2" name="selectableInput2" readonly
                                                placeholder="Lugar de residencia">
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

                                    <div class="cotiza-tu-servicio-form-container-textarea">
                                        <textarea class="cotiza-tu-servicio-form-textarea" id="textarea" name="textarea"
                                            rows="4" cols="50" placeholder="Tu mensaje aquí"></textarea>
                                    </div>

                                    <div class="progress-container">
                                        <div class="progress-circle active"></div>
                                        <div class="circulo"></div>
                                        <div class="circulo"></div>
                                        <div class="circulo"></div>
                                    </div>

                                    <div class="cotiza-tu-servicio-form-container-boton">
                                        <div class="elcontenedordelbotonquedespuescambio">
                                            <button type="button"
                                                class="btn next cotiza-tu-servicio-form-boton">Siguiente</button>
                                        </div>

                                    </div>

                                </form>
                                <div class="cotiza-tu-servicio-form-direcciones">
                                    <div class="direcciones-container1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/direcciones.svg"
                                            alt="">
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
                </div>

            </div>

            <div class="form-section">
                <div>
                    <div class="cotiza-tu-servicio-container">
                        <div class="cotiza-tu-servicio-centrado">
                            <div class="cotiza-tu-servicio-texto">
                                <div class="cotiza-tu-servicio-texto-titulo">
                                    <h2>Te estamos buscando!</h2>
                                </div>
                            </div>
                            <div class="cotiza-tu-servicio-form">
                                <form id="miFormulario" class="cotiza-tu-servicio-form-container">

                                    <div class="seccion2-inputs-container">

                                        <p>Qué tipo de vehículo tienes?</p>
                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox">
                                            <label for="">No tengo vehículo</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox">
                                            <label for="">Moto</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox">
                                            <label for="">Bicicleta</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox">
                                            <label for="">Camioneta pequeña (Fiorino, Berlingo, etc)</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox">
                                            <label for="">Camioneta mediana (H1, Expert, etc)</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox">
                                            <label for="">Camioneta grande (Boxer, Master, etc)</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox">
                                            <label for="">Camión con furgon</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="checkbox" name="checkbox">
                                            <label for="">Camión abierto</label>
                                        </div>

                                    </div>
                                    <div class="selectable-container">
                                        <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput1"
                                            name="selectableInput1" readonly placeholder="Marca y modelo del vehículo">
                                        <div class="options" id="options1">
                                            <div class="option" data-value="opcion1">Chevrolet</div>
                                            <div class="option" data-value="opcion2">Renault</div>
                                            <div class="option" data-value="opcion3">Volkswagen</div>
                                            <div class="option" data-value="opcion4">Fiat</div>
                                            <div class="option" data-value="opcion5">Citroen</div>
                                            <div class="option" data-value="opcion6">Otro</div>
                                        </div>
                                    </div>

                                    <div class="selectable-container">
                                        <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput2"
                                            name="selectableInput2" readonly placeholder="Año">
                                        <div class="options" id="options2">
                                            <div class="option" data-value="opcion1">2024</div>
                                            <div class="option" data-value="opcion2">2019</div>
                                            <div class="option" data-value="opcion3">2014</div>
                                            <div class="option" data-value="opcion4">2009</div>
                                            <div class="option" data-value="opcion5">2004</div>
                                            <div class="option" data-value="opcion6">1994</div>
                                        </div>
                                    </div>

                                    <div class="progress-container">
                                        <div class="circulo"></div>
                                        <div class="progress-circle"></div>
                                        <div class="circulo"></div>
                                        <div class="circulo"></div>
                                    </div>

                                    <div class="cotiza-tu-servicio-form-container-boton2">

                                        <button type="button"
                                            class="cotiza-tu-servicio-form-boton btn prev">Anterior</button>
                                        <button type="button"
                                            class="cotiza-tu-servicio-form-boton btn next">Siguiente</button>

                                    </div>

                                </form>
                                <div class="cotiza-tu-servicio-form-direcciones">
                                    <div class="direcciones-container1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/direcciones.svg"
                                            alt="">
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
                </div>

            </div>

            <div class="form-section">
                <div class="form3-container">
                    <div class="form3-titulo">
                        <div class="form3-titulo-container">
                            <h2>Te estamos buscando!</h2>
                        </div>
                    </div>

                    <form id="miFormulario" class="">

                        <div>
                            <div class="form3-inputs">

                                <div class="form3-inputs-container-titulo">
                                    <h3>Qué tipo de vehículo tienes?</h3>
                                </div>

                                <div class="form3-inputs-container">
                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría A</label>
                                    </div>

                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría F</label>
                                    </div>

                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría B</label>
                                    </div>
                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría G1</label>
                                    </div>

                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría C</label>
                                    </div>
                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría G2</label>
                                    </div>

                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría D</label>
                                    </div>
                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría G3</label>
                                    </div>

                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría E</label>
                                    </div>
                                    <div class="form3-inputs-container-input">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="">Categoría H</label>
                                    </div>
                                </div>

                            </div>
                            <div class="form3-selectable-container">
                                <div class="selectable-container">
                                    <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput1"
                                        name="selectableInput1" readonly placeholder="¿Tenes empresa propia?">
                                    <div class="options" id="options1">
                                        <div class="option" data-value="opcion1">Si</div>
                                        <div class="option" data-value="opcion2">No</div>
                                    </div>
                                </div>

                                <div class="selectable-container">
                                    <input class="cotiza-tu-servicio-form-input" type="text" id="selectableInput2"
                                        name="selectableInput2" readonly placeholder="Tipo de empresa">
                                    <div class="options" id="options2">
                                        <div class="option" data-value="opcion1">Empresa Unipersonal Literal E
                                            con
                                            facturación electrónica</div>
                                        <div class="option" data-value="opcion2">Empresa Unipersonal con IVA
                                        </div>
                                        <div class="option" data-value="opcion3">Sociedad de hecho (Entre 2 o
                                            más
                                            personas)</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-container">
                            <div class="circulo"></div>
                            <div class="circulo"></div>
                            <div class="progress-circle"></div>
                            <div class="circulo"></div>
                        </div>

                        <div class="form3-botons-container">
                            <button type="button" class=" btn prev">Anterior</button>
                            <button type="button" class=" btn next">Siguiente</button>
                        </div>

                    </form>
                    <div class="form3-direcciones-container">
                        <div class="form3-direcciones1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/direcciones.svg" alt="">
                            <h4>DIRECCIÓN</h4>
                            <p>República de Corea 2962 San Salvador 1480</p>
                        </div>
                        <div class="form3-direcciones2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/mailes.svg" alt="">
                            <h4>MAIL</h4>
                            <p>comercial@soydelivery.com.uy rrhh@soydelivery.com.uy
                            </p>
                        </div>
                    </div>


                </div>
            </div>

            <div class="form-section">
                <div>
                    <div class="cotiza-tu-servicio-container">
                        <div class="cotiza-tu-servicio-centrado">
                            <div class="cotiza-tu-servicio-texto">
                                <div class="cotiza-tu-servicio-texto-titulo">
                                    <h2>Te estamos buscando!</h2>
                                </div>

                            </div>
                            <div class="cotiza-tu-servicio-form">
                                <form id="miFormulario" class="form4-container">
                                    <div class="form4-allinputs-container">
                                        <div class="form4-inputs-containeres">
                                            <div class="form4-inputs-container-titulo">
                                                <p>¿Qué disponibilidad tenes para trabajar?</p>
                                            </div>
                                            <div class="form4-inputs-container">
                                                <div class="form4-inputs-item-container">
                                                    <input type="checkbox" id="checkbox" name="checkbox">
                                                    <label for="">Full time</label>
                                                </div>

                                                <div class="form4-inputs-item-container">
                                                    <input type="checkbox" id="checkbox" name="checkbox">
                                                    <label for="">Solo en la mañana</label><br>
                                                </div>

                                                <div class="form4-inputs-item-container">
                                                    <input type="checkbox" id="checkbox" name="checkbox">
                                                    <label for="">Solo en la tarde</label>
                                                </div>

                                                <div class="form4-inputs-item-container">
                                                    <input type="checkbox" id="checkbox" name="checkbox">
                                                    <label for="">Entre semana</label><br>
                                                </div>

                                                <div class="form4-inputs-item-container">
                                                    <input type="checkbox" id="checkbox" name="checkbox">
                                                    <label for="">Fines de semana</label>
                                                </div>

                                                <div class="form4-inputs-item-container">
                                                    <input type="checkbox" id="checkbox" name="checkbox">
                                                    <label for="">Otro</label><br>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form4-textarea-container">
                                        <div class="form4-textarea-item">
                                            <textarea class="cotiza-tu-servicio-form-textarea" id="textarea"
                                                name="textarea" rows="4" cols="50"
                                                placeholder="¿Cómo nos conociste?"></textarea>
                                        </div>

                                        <div class="form4-textarea-item">
                                            <textarea class="cotiza-tu-servicio-form-textarea" id="textarea"
                                                name="textarea" rows="4" cols="50"
                                                placeholder="¿Te gustaría agregar algún comentario?"></textarea>
                                        </div>
                                    </div>

                                    <div class="progress-container">
                                        <div class="circulo"></div>
                                        <div class="circulo"></div>
                                        <div class="circulo"></div>
                                        <div class="progress-circle"></div>
                                    </div>

                                    <div class="cotiza-tu-servicio-form-container-boton">
                                        <button type="button"
                                            class="cotiza-tu-servicio-form-boton btn prev">Anterior</button>
                                        <button type="submit" class="cotiza-tu-servicio-form-boton btn">Enviar</button>
                                    </div>

                                </form>
                                <div class="cotiza-tu-servicio-form-direcciones">
                                    <div class="direcciones-container1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/direcciones.svg"
                                            alt="">
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
                </div>

            </div>
        </form>
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