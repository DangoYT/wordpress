<?php
/* Template Name: Conocenos Uruguay */
// Carga el header personalizado para Uruguay desde la carpeta correcta
require get_template_directory() . '/templates/headers/header-uruguay.php';
?>

<style>
    .conocenos-uru {
        margin: 30px 0px 30px 30px;

    }

    @media only screen and (max-width: 360px) {
        .clientes-slider-uruguay {}

        .clientes-slider-uruguay h2 {
            color: var(--Text-Text-naranja, #FF7500);
            text-align: center;
            font-family: "Simply Sans";
            font-size: 19px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;

            margin: 40px 0px 0px 0px;
        }

        .btn_contactar-uruguay-conocenos {
            display: flex;
            justify-content: center;
            margin: 40px 0px;
        }

        .btn_contactar-uruguay-container {
            border-radius: 5.578px;
            background: var(--Nasanja-Soydelivery, #FF7500);
            box-shadow: 0px 2.231px 4.462px 0px rgba(0, 0, 0, 0.25);

            display: flex;
            width: 240px;
            height: 30px;
            padding: 11px 30px;
            justify-content: center;
            align-items: flex-end;
            gap: 24.543px;
            align-items: center;
        }

        .btn_contactar-uruguay {
            color: var(--Text-Text-negative, #FFF);
            font-family: "Karla";
            font-size: 19.39px;
            font-style: normal;
            font-weight: 700;
            line-height: 15.618px;
            /* 80.549% */

            text-decoration: none;
        }

        .nuestroEquipo__uruguay-conocenos {}

        .nuestroEquipo__uruguay {}

        .title__nuestroEquipo__uruguay {}

        .nuestroEquipo__uruguay__contenedor {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas: "item1 item2";
        }

        .nuestroEquipo__uruguay__content {
            grid-area: item1;
        }

        .nuestroEquipo__uruguay__content p {
            color: var(--Text-Text-primario, #25221E);
            font-family: "Karla";
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 125.523%;
            /* 12.552px */
        }

        .nuestroEquipo__uruguay__img {
            width: 180px;
            height: 180px;
            flex-shrink: 0;
            grid-area: item2;
        }

        .nuestroEquipo__uruguay__img img {}

    }
</style>

<main id="site-content" role="main">

    <section class="slider-noticias-uruguay">
        <h2 class="slider-noticias-uruguay__title">Deslizá para ver más noticias</h2>
        <?php get_template_part('/template-parts/slider-noticia-uruguay'); ?>
    </section>
    <section class="global__apoyos">
        <div class="global__apoyos__title__container">
            <h2 class="global__apoyos__title">Apoyos</h2>
        </div>
        <div class="global__apoyos__imgs__container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/pro innovate.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/startuo.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/ANII.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/cubo.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/Apoyos/emprela.png" alt="">
        </div>
    </section>

    <section class="clientes-slider-uruguay">
        <h2>Clientes que trabajan con nosotros</h2>
        <?php get_template_part('/template-parts/clientes_slider'); ?>
    </section>

    <div class="btn_contactar-uruguay-conocenos">
        <div class="btn_contactar-uruguay-container">
            <a href="<?php echo site_url('/contactar'); ?>" class="btn_contactar-uruguay">Contactar</a>
        </div>
    </div>

    <section class="nuestroEquipo__uruguay-conocenos">
        <div class="nuestroEquipo__uruguay">
            <h2 class="title__nuestroEquipo__uruguay">Nuestro equipo</h2>
            <div class="nuestroEquipo__uruguay__contenedor">
                <div class="nuestroEquipo__uruguay__content">
                    <p class="opreaciones">Operaciones</p>
                    <p class="administracion">Administración y finanzas</p>
                    <p class="comercial">Comercial</p>
                    <p class="tecnologia">Tecnología</p>
                    <p class="experiencia">Experiencia de usuario</p>
                    <p class="innovacion">Innovación logística</p>
                    <p class="analisis">Análisis de datos</p>
                    <p class="recursos">Recursos humanos</p>
                    <p class="atencion">Atención al cliente</p>
                </div>
                <img class="nuestroEquipo__uruguay__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Grupo-Trabajo-1.png" alt="">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>