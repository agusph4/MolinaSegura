<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package molinadesegura
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-sitio2">
			<p>Copyright © 2021 Alpha Syltec Ingeniera SLP. Todos los derechos reservados.</p>
			<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
