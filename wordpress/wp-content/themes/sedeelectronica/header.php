<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sedeElectronica
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sedeelectronica' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row site-date">
			<p class="col-6 fecha-acceso">Fecha y hora de acceso: <?php date_default_timezone_set("Europe/Madrid"); echo date("d/m/Y H:i:s"); ?></p>
			<form role='search' method='get' class='search-form col-6' action='http://172.28.0.120/wordpress/sedeelectronica'>
				<button type='submit' class='search-submit'><i class='bi-search'></i></button>
				<label><span class='screen-reader-text'>Buscar:</span><input type='search'name='s' class='search-field' id='buscador' placeholder='Buscador' value></label>
			</form>	
		</div>
		<div class="site-branding row">
			<div class="col-3 logo-div">
			<?php
			/*Logo Sede*/
			the_custom_logo();
			?>
			</div>
			<div class="col-5 titulo-sede">
				<h1><a href="">Sede Electr??nica</a></h1>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sedeelectronica' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
