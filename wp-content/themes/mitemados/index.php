<?php
// Este es el archivo principal del tema
get_header();
?>
<div id="content">
    <!-- <h1>¡Hola, mundo!</h1> -->
    <?php
    // Inserta el shortcode aquí
    echo do_shortcode('[smartslider3 slider="1"]');
    ?>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit atque dolore, natus necessitatibus, libero
        doloribus obcaecati quas error quisquam id laudantium, odit autem iure incidunt nisi laboriosam officia
        accusamus ipsa?</p>


</div>
<?php
get_footer();
?>