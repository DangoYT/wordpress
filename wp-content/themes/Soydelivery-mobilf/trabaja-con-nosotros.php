<?php
/*
Template Name: Trabaja con nosotros
*/
// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>
<style>
    @media only screen and (max-width: 360px) {
        .trabaja-con-nosotros_uru {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .arrow {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .title__navegador {
            color: var(--Text-Text-naranja, #FF7500);
            text-align: center;
            font-family: "Karla";
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 131.523%;
            /* 13.152px */
        }

        .trabaja-con-nosotrosContacto {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .trabaja-con-nosotros-container {
            background-color: #ff7500;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .trabaja-con-nosotros-container h1 {
            color: #FFF;
            font-family: "Museo Sans Rounded";
            font-size: 26px;
            font-style: normal;
            font-weight: 700;
            line-height: 131.523%;
            /* 28.935px */
            margin-bottom: 20px;
        }

        .trabaja-con-nosotros-container p {
            color: #414141;
            text-align: justify;
            font-family: "Karla";
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 125.523%;
            /* 12.552px */
            margin-bottom: 20px;
        }

        .trabaja-con-nosotros-formContainer {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .trabaja-con-nosotros-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .trabaja-con-nosotros-inputs {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .trabaja-con-nosotros-form input[type="text"],
        .trabaja-con-nosotros-form input[type="tel"],
        .trabaja-con-nosotros-form input[type="email"],
        .trabaja-con-nosotros-textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        .trabaja-con-nosotros-btns {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .file-upload-wrapper {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #414141;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .inputescondido {
            display: none;
        }

        .trabaja-con-nosotros-btn {
            padding: 10px 20px;
            background-color: #414141;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .trabaja-con-nosotros-btn:hover {
            background-color: #e06900;
        }

        .cotiza-tu-servicio-form-direcciones {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .direcciones-container1,
        .direcciones-container2 {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .direcciones-container1 img,
        .direcciones-container2 img {
            width: 24px;
            height: 24px;
            margin-bottom: 10px;
        }

        .direcciones-container1 h4,
        .direcciones-container2 h4 {
            color: #FFF;
            font-family: "Museo Sans Rounded";
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 131.523%;
            margin-bottom: 5px;
        }

        .direcciones-container1 p,
        .direcciones-container2 p {
            color: #FFF;
            text-align: center;
            font-family: "Karla";
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 125.523%;
        }
    }
</style>
<div class="navegador trabaja-con-nosotros_uru">
    <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg"
        alt="Cajita">
    <p class="title__navegador">Contacto</p>
    <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Iconos/arrow-right-naranja.svg"
        alt="Cajita">
    <p class="title__navegador">Trabaja con nosotros</p>
</div>

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
                <p>comercial@soydelivery.com.uy rrhh@soydelivery.com.uy</p>
            </div>
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