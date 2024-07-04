<?php get_header(); ?>

<main>
    <?php if (have_posts()): ?>
        <header>
            <h1><?php single_tag_title(); ?></h1>
        </header>
        <?php
        while (have_posts()):
            the_post();
            get_template_part('template-parts/content', get_post_format());
        endwhile;
        the_posts_navigation();
    else:
        echo '<p>No hay contenido disponible.</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>









<section class="contacto-clientes__form-container">
    <form id="miFormulario" class="contacto-clientes__form"
        action="https://docs.google.com/forms/d/e/1FAIpQLScqlfnyCrzJp6R0umgXA0uUXXSXxMFs4UISADhw2Ixkb18MUQ/formResponse"
        method="post" target="hidden_iframe" onsubmit="submitted=true;">
        <div class="contacto-clientes__text">
            <div class=" contacto-clientes__text-title">
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
                <div class="contacto-clientes__selectable-container">
                    <input class="contacto-clientes__input" type="text" id="selectableInput1" name="entry.1166053912"
                        readonly placeholder="País">
                    <div class="contacto-clientes__options" id="options1">
                        <div class="contacto-clientes__option" data-value="opcion1">Argentina</div>
                        <div class="contacto-clientes__option" data-value="opcion2">Brasil</div>
                        <div class="contacto-clientes__option" data-value="opcion3">Colombia</div>
                        <div class="contacto-clientes__option" data-value="opcion4">Paraguay</div>
                        <div class="contacto-clientes__option" data-value="opcion5">Perú</div>
                        <div class="contacto-clientes__option" data-value="opcion6">Uruguay</div>
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
</section>







<!-- asdasdddddddddd -->


<form id="miFormulario" class="contacto-clientes__form"
    action="https://docs.google.com/forms/d/e/1FAIpQLScqlfnyCrzJp6R0umgXA0uUXXSXxMFs4UISADhw2Ixkb18MUQ/formResponse"
    method="post" target="hidden_iframe" onsubmit="submitted=true;">
    <div class="contacto-clientes__container">
        <div class="contacto-clientes__centered">
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
                    <div class="contacto-clientes__selectable-container">
                        <input class="contacto-clientes__input" type="text" id="selectableInput1"
                            name="entry.1166053912" readonly placeholder="País">
                        <div class="contacto-clientes__options" id="options1">
                            <div class="contacto-clientes__option" data-value="opcion1">Argentina</div>
                            <div class="contacto-clientes__option" data-value="opcion2">Brasil</div>
                            <div class="contacto-clientes__option" data-value="opcion3">Colombia</div>
                            <div class="contacto-clientes__option" data-value="opcion4">Paraguay</div>
                            <div class="contacto-clientes__option" data-value="opcion5">Perú</div>
                            <div class="contacto-clientes__option" data-value="opcion6">Uruguay</div>
                        </div>
                    </div>
                    <input class="contacto-clientes__input" type="text" id="input5" name="entry.1162891388" required
                        placeholder="Escribe tu país">
                </div>
                <div class="contacto-clientes__form-textarea">
                    <textarea class="contacto-clientes__textarea" id="textarea" name="entry.1134051808" rows="4"
                        cols="50" placeholder="Tu mensaje aquí"></textarea>
                </div>
                <div class="contacto-clientes__form-button">
                    <button type="submit" class="contacto-clientes__button">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>