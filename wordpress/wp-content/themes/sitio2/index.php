<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package molinadesegura
 */

get_header();
?>

<main id="primary" class="site-main">


	<div class="contenedorPrincipal">
		<br />
		<div class="sliderTurismo">
			<?php
			echo do_shortcode('[smartslider3 slider="2"]');
			?>
		</div>
		<div class="descubre">
			<div class="descubreSecundario">
				<h3>Descubre Molina de Segura</h3>
				<div class="contenedorLugares">
					<div class="enlaceDescubre">Imprescindible</div>
					<div class="enlaceDescubre">Centro</div>
					<div class="enlaceDescubre">Pueblos</div>
					<div class="enlaceDescubre">Alrededores</div>
					<div class="enlaceDescubre">Restaurantes</div>
				</div>
			</div>

		</div>

		<div class="destacados">
			<?php	
				echo do_shortcode('[frontpage_news widget="7" name="Destacados"]');
			?>
		</div>

	</div>




	</div>



</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
