<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cultura
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-12">
				<?php echo do_shortcode('[TWTR]') ?>
			</div>
			<!--Enlaces parte izquierda-->
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 site-footer">
				<div class="col-lg-8 col-md-8 col-sm-7 col-7 site-footer-left-links">
					<a href="http://172.28.0.120/wordpress/cultura">Inicio</a>
					<a href="">Ayuntamiento</a>
					<a href="">Servicios</a>
					<a href="">Turismo</a>
					<a href="">Participación</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-5 col-5 site-footer-right-links">
					<a href="">Contacto</a>
					<a href="">Sede Electrónica</a>
					<a href="">Política de Privacidad</a>
					<div class="social">
						<?php echo do_shortcode('[cn-social-icon alignment="left" selected_icons="1,2,3"]') ?>
					</div>
				</div>
			</div>
			<div class="footer-molina col-12">
				<p>Copyright © 2021 Alpha Syltec Ingeniera SLP. Todos los derechos reservados.</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
