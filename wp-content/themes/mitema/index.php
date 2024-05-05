<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); // Incluye el encabezado (header) de tu tema.
?>

<div class="all_content">

	<!-- Aquí se incluye el menú de navegación -->
	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'menu_id' => 'primary-menu',
				'container' => false,
				'menu_class' => 'nav-menu',
				'fallback_cb' => false
			)
		);
		?>
	</nav><!-- #site-navigation -->

	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			get_template_part("content");
			// Aquí puedes mostrar el contenido de cada entrada
		}
	} else {
		echo "No hay posts";
	}
	?>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); // Incluye el pie de página de tu tema. ?>