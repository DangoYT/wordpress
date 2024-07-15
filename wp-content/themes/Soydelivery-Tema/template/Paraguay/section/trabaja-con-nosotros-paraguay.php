<?php
/*
Template Name: Trabaja con nosotros Paraguay
*/
get_header('paraguay');
?>
<style>
    .trabaja-con-nosotrosContacto {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .trabaja-con-nosotros-container {
        display: flex;
        padding: 30px;
        flex-direction: column;
        align-items: center;
        gap: 33px;
        /* width: 522px; */
        /* width: 100%; */
        border-radius: 10px;
        background: var(--Surface-Surface-brand, #FF7500);
    }

    .trabaja-con-nosotros-container h1 {
        color: #FFF;
        margin: 0px;
        font-family: "Museo Sans Rounded";
        font-size: 44px;
        font-style: normal;
        font-weight: 700;
        line-height: 131.523%;
    }

    .trabaja-con-nosotros-container p {
        width: 462px;
        color: #414141;
        text-align: justify;
        margin: 0px;
        font-family: Karla;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 125.523%;
    }

    .trabaja-con-nosotros-formContainer {}

    .trabaja-con-nosotros-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .trabaja-con-nosotros-textarea {
        border-radius: 4px;
    }

    .trabaja-con-nosotros-form input {}

    .trabaja-con-nosotros-inputs {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px
    }

    .trabaja-con-nosotros-inputs input {
        width: 215px;
        height: 48px;
        border-radius: 5px;
        border: var(--Cantidad, 1px) solid var(--Border-Border-brand-1, #FF7500);
        background: var(--Surface-Surface-default, #FFF);
    }

    .trabaja-con-nosotros-btns {
        display: flex;
        width: 462px;
        justify-content: flex-end;
        align-items: center;
        gap: 20px;
    }

    .trabaja-con-nosotros-btn {
        display: flex;
        padding: 7px 10px;
        align-items: center;
        gap: 14px;
        width: 95px;
        height: 38px;
        border-radius: 5px;
        background: var(--Surface-Surface-gris, #414141);
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);
    }

    .trabaja-con-nosotros-InputCV {
        display: flex;
        padding: 7px 10px;
        align-items: center;
        gap: 14px;
        border-radius: 5px;
        border: 1.5px solid var(--Border-Border-negative, #FFF);
        background: var(--Surface-Surface-brand, #FF7500);
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);
    }

    .custom-file-upload {
        position: relative;
        display: flex;
        align-items: center;
    }

    .custom-file-upload input[type="file"] {
        display: none;
    }



    .custom-file-upload #file-name {
        font-size: 14px;
        color: #666;
    }

    .file-upload-wrapper {
        display: flex;
        align-items: center;
        padding: 0px 10px;
        background-color: #fff;
        cursor: pointer;
        border-radius: 5px;
        border: 1.5px solid var(--Border-Border-negative, #FFF);
        background: var(--Surface-Surface-brand, #FF7500);
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);
        width: 127px;
        height: 38px;
    }

    .file-upload-wrapper:hover {
        background-color: #f0f0f0;
    }

    .file-upload-wrapper span {
        font-size: 14px;
        color: #666;
    }

    .inputescondido {
        display: none;
    }

    .cotiza-tu-servicio-form-direcciones {
        display: flex;
        justify-content: flex-end;
        width: 462px;
        height: 80px;
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

    .direcciones-container1 p {
        color: #FFF;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        letter-spacing: 0.26px;
        width: 162px;
    }

    .direcciones-container2 p {
        color: #FFF;
        font-family: "Inter";
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        letter-spacing: 0.26px;
        width: 162px;
    }
</style>

<section class="trabaja-con-nosotrosContacto">
    <div class="trabaja-con-nosotros-container">
        <h1>Trabaja con nosotros</h1>
        <p>Si te interesa alguna de nuestras oportunidades laborales o simplemente quieren enviarnos tu curriculum vitae
            para que te tengamos en cuenta; completa los datos y adjunta la información que la recibiremos con gusto!
        </p>
        <div class="trabaja-con-nosotros-formContainer">
            <form class="trabaja-con-nosotros-form" action="" method="post">
                <div class="trabaja-con-nosotros-inputs">
                    <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre">
                    <input type="text" id="apellidos" name="apellidos" required placeholder="Tu apellido">
                    <input type="tel" id="telefono" name="telefono" required placeholder="Tu teléfono">
                    <input type="email" id="email" name="email" required placeholder="Tu email">
                </div>
                <textarea class="trabaja-con-nosotros-textarea" name="sobre" id="sobre" cols="30" rows="10"
                    placeholder="Tu mensaje aquí"></textarea>
                <div class="trabaja-con-nosotros-btns">
                    <div class="file-upload-wrapper" onclick="document.getElementById('cv').click()">
                        <span id="file-name">Adjuntar CV</span>
                        <input class="inputescondido" type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>

                    </div>

                    <button class="trabaja-con-nosotros-btn" type="submit">Enviar</button>
                </div>

            </form>
        </div>
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
</section>

<?php get_footer(); ?>

<script>
    document.getElementById('cv').addEventListener('change', function () {
        const fileName = this.files[0] ? this.files[0].name : 'Ningún archivo seleccionado';
        document.getElementById('file-name').textContent = fileName;
    });
</script>