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
 * @package cultura
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
			<div class="col-lg-3 col-md-3 col-sm-4 col-12 links-aside">
				<div class="menu-aside">
					<a href="" class="cabecera">Historia</a>
					<div class="links-menu-aside" id="links-1">
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
					</div>
					<a href="" class="cabecera">Museos</a>
					<div class="links-menu-aside" id="links-2">
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
					</div>
					<a href="" class="cabecera">Festivales</a>
					<div class="links-menu-aside" id="links-3">
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
					</div>
					<a href="" class="cabecera">Fiestas</a>
					<div class="links-menu-aside" id="links-4">
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
						<a href="">- Enlace</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-12 contenido-index">
			
			</div>
	</main><!-- #main -->
<?php
get_footer();
