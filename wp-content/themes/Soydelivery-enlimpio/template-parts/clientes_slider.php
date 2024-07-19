<!-- template-parts/clientes_slider.php -->

<div class="clientes_slider_container">
    <div class="clientes_slider__item">
        <div class="elcontenedordelcontenedor">
            <div class="clientes_slider_itemContainer">
                <div class="clientes_slider_item_imgContainer">
                    <img class="clientes_slider_itemImg"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/universobinario.png" alt="">
                </div>
                <h3 class="clientes_slider_title">Universo Binario</h3>
                <p class="clientes_slider_autor">Gerente de Administración y Finanzas
                    Farmacia El Tunel</p>
                <p class="clientes_slider_parrafo">"Muy útil a la hora de buscar pedidos y poder hacer seguimientos del
                    mismo"
                </p>
            </div>
        </div>
    </div>
    <div class="clientes_slider__item">
        <div class="elcontenedordelcontenedor">
            <div class="clientes_slider_itemContainer">
                <div class="clientes_slider_item_imgContainer">
                    <img class="clientes_slider_itemImg"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/thechemistlook.png" alt="">
                </div>
                <h3 class="clientes_slider_title">The Chemist Look</h3>
                <p class="clientes_slider_autor">Responsable de ventas web en Joacamar</p>
                <p class="clientes_slider_parrafo">"Excelente servicio con 100% de cumplimiento en las entregas y plena
                    disponibilidad de atención. La
                    plataforma es también muy amigable y práctica, permite ver a los conductores en tiempo real y el
                    tiempo
                    estimado de entrega. Muy conformes"
                </p>
            </div>
        </div>
    </div>
    <div class="clientes_slider__item">
        <div class="elcontenedordelcontenedor">
            <div class="clientes_slider_itemContainer">
                <div class="clientes_slider_item_imgContainer">
                    <img class="clientes_slider_itemImg"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/clickshop.png" alt="">
                </div>
                <h3 class="clientes_slider_title">ClicShop</h3>
                <p class="clientes_slider_autor">Directora de Copacabana</p>
                <p class="clientes_slider_parrafo">"Conforme con la decisión de haber contratado a SoyDelivery Cumplen
                    con
                    las
                    entregas en el día, lo que nos
                    permite ofrecer a los clientes una buena experiencia de compra”</p>
            </div>
        </div>
    </div>
    <div class="clientes_slider__item">
        <div class="elcontenedordelcontenedor">
            <div class="clientes_slider_itemContainer">
                <div class="clientes_slider_item_imgContainer">
                    <img class="clientes_slider_itemImg"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/copacabana.png" alt="">
                </div>
                <h3 class="clientes_slider_title">Copacabana</h3>
                <p class="clientes_slider_autor">Directora de Copacabana</p>
                <p class="clientes_slider_parrafo">"Conforme con la decisión de haber contratado a SoyDelivery Cumplen
                    con
                    las
                    entregas en el día, lo que nos
                    permite ofrecer a los clientes una buena experiencia de compra”</p>
            </div>
        </div>
    </div>
    <div class="clientes_slider__item">
        <div class="elcontenedordelcontenedor">
            <div class="clientes_slider_itemContainer">
                <div class="clientes_slider_item_imgContainer">
                    <img class="clientes_slider_itemImg"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/thalesLab.png" alt="">
                </div>
                <h3 class="clientes_slider_title">Thales Lab</h3>
                <p class="clientes_slider_autor">Lorem, ipsum dolor</p>
                <p class="clientes_slider_parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, nobis
                    voluptate. Quasi asperiores, eos
                    repellendus voluptatem sint sed atque architecto accusamus</p>
            </div>
        </div>
    </div>
    <div class="clientes_slider__item">
        <div class="elcontenedordelcontenedor">
            <div class="clientes_slider_itemContainer">
                <div class="clientes_slider_item_imgContainer">
                    <img class="clientes_slider_itemImg"
                        src="<?php echo get_template_directory_uri(); ?>/assets/imgs/Marcas/zonatecno.png" alt="">
                </div>
                <h3 class="clientes_slider_title">Zonatecno</h3>
                <p class="clientes_slider_autor">Lorem, ipsum dolor</p>
                <p class="clientes_slider_parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, nobis
                    voluptate. Quasi asperiores, eos
                    repellendus voluptatem sint sed atque architecto accusamus</p>
            </div>
        </div>
    </div>

</div>

<script>
    jQuery(document).ready(function ($) {
        $('.clientes_slider_container').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: false,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            variableWidth: false,
            slidesToScroll: 1
        });
    });
</script>