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
 * @package sedeElectronica
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="row">
		<div class="col-12">
			<h4 class="title-click">A un Click</h4>
		</div>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-text-fill btn-2"></i><span class="btn-1 from-right">Formularios e Impresos</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-text-fill btn-2"></i><span class="btn-1 from-right">Solicitudes y Trámites</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-text-fill btn-2"></i><span class="btn-1 from-right">Buzón de Sugerencias</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-text-fill btn-2"></i><span class="btn-1 from-right">Ordenanzas</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-text-fill btn-2"></i><span class="btn-1 from-right">Directorio Telefónico</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-text-fill btn-2"></i><span class="btn-1 from-right">Cita Previa</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-text-fill btn-2"></i><span class="btn-1 from-right">Subvenciones</span></a>
			<a href="" class="col-lg-3 col-md-4 col-sm-6 col-6 btn-a-un-click"><i class="bi bi-file-earmark-text-fill btn-2"></i><span class="btn-1 from-right">Sede Electrónica</span></a>
		</div>
		<div class="row">
			<div class=""></div>
			<div class=""></div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
