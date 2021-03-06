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
		<div class="video-promo"><!--Video promocion-->
			<?php echo do_shortcode('[evp_embed_video url="http://172.28.0.120/wordpress/wp-content/uploads/2021/03/PromoWeb3-1-1.mp4" autoplay="true" loop="true" muted="true"]');?>
			<div class="logo-video"><img src="http://172.28.0.120/wordpress/wp-content/uploads/2021/03/logo-molina.jpg" alt=""></div>
		</div>
		<!--Enlaces Alcalde y otros-->
		<div class="row div-other-links">
			<!--Enlace Alcalde-->
			<div class="col-lg-4 col-md-6 col-sm-6 col-12 div-link-alcalde">
				<a href="##">
					<img src="http://172.28.0.120/wordpress/wp-content/uploads/2021/03/FotoAlcalde.jpg" alt="">
					<h3>ALCALDE A UN CLICK</h3>
				</a>
			</div>
			<!--Otros Enlaces-->
			<div class="col-lg-4 col-md-6 col-sm-6 col-12 links-1">
				<a href="##"><i class="bi-search"></i><h4>Gobierno abierto</h4></a>
				<a href="##"><i class="bi-at"></i><h4>Sede electrónica</h4></a>
				<a href="##"><i class="bi-display"></i><h4>Cita Online</h4></a>
				<a href="##"><i class="bi-building"></i><h4>Perfil del contratante</h4></a>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 col-12 links-2">
				<a href="##"><i class="bi-envelope-open"></i><h4>Buzón ético</h4></a>
				<a href="##"><i class="bi-calendar3"></i><h4>Calendario de festivos</h4></a>
				<a href="##"><i class="bi-file-earmark-text"></i><h4>Trámites Administrativos</h4></a>
				<a href="##"><i class="bi-clipboard-check"></i><h4>Transparencia</h4></a>
			</div>
		</div>
		<!--Calendario-->
		<div class="row">
			<h4 class="title-calendar"><i class="bi bi-calendar prox-eventos"></i> CALENDARIO DE EVENTOS</h4>
			<div class="div-calendar col-lg-3 col-md-4 col-sm-12 col-12">
				<?php echo do_shortcode('[MEC id="107"]')?>
			</div>
			<div class="div-prox-eventos col-lg-9 col-md-8 col-sm-12 col-12">
				<?php echo do_shortcode('[MEC id="111"]')?>
				<a class="btn btn-secundary" href="http://172.28.0.120/wordpress/blog/category/eventos/">Ver Más Eventos</a>
			</div>
		</div>
		<div class="row div-noticias">
			<!--Noticias de Ultima Hora-->
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 noticias-ultima-hora">
				<h4><i class="bi bi-alarm ultima-hora"></i> ÚLTIMA HORA</h4>
				<?php echo do_shortcode('[frontpage_news widget="100" name="Última Hora"]')?>
				<!--<div id="div-popular" class="popular-posts"><?php /*echo do_shortcode('[wpp header="LO MÁS BUSCADO" range="all" limit=5 stats_views=0 order_by="views"]')*/?></div>-->
				<div id="div-popular" class="popular-posts">
					<h2>LO MÁS BUSCADO</h2>
					<ul class="wpp-list">
						<li><a href="" class="wpp-post-title">Atención al Ciudadano</a></li>
						<li><a href="" class="wpp-post-title">El Alcalde a un click</a></li>
						<li><a href="" class="wpp-post-title">Funciones y ubicación</a></li>
						<li><a href="" class="wpp-post-title">Población</a></li>
						<li><a href="" class="wpp-post-title">Ayuntamiento</a></li>
					</ul>
				</div>
			</div>
			<!--Noticias Generales-->
			<div class="col-lg-8 col-md-8 col-sm-12 col-12">
				<h4><i class="bi bi-newspaper ultima-hora"></i> NOTICIAS</h4>
				<?php echo do_shortcode('[frontpage_news widget="122" name="Noticias"]')?>
				<div class="morenews-link">
					<a href="http://172.28.0.120/wordpress/noticias/" class="btn btn-primary btn-sm" role="button">MÁS NOTICIAS</a>
				</div>
			</div>
		</div>
		<!--Noticias Destacadas-->
		<div class="row div-destacados">
			<div class="col-lg-5 col-md-5 col-sm-5 col-5 div-destacados-title">
				<h4>DESTACADOS <i class="bi bi-star-fill"></i></h4>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 col-7 div-destacados-destacado">
				<?php echo do_shortcode('[frontpage_news widget="125" name="Destacados"]') ?>
			</div>
		</div>
		<div class="row div-galeria-videos">
			<!--Contenedor de Encuestas-->
			<div class="col-lg-3 col-md-12 col-sm-12 col-12 div-encuestas">
				<div class="col-lg-12 col-md-6 col-sm-6 col-12 div-encuestas-l">
					<?php echo do_shortcode('[yop_poll id="1"]') ?>
				</div>
				<div class="col-lg-12 col-md-6 col-sm-6 col-12">
					<?php/* echo do_shortcode('[noptin-form id=154]')*/?>
					<?php dynamic_sidebar('smartslider_area_1'); ?>
				</div>
			</div>
			<!--Galeria de Videos-->
			<div class="col-lg-9 col-md-12 col-sm-12 col-12">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 div-twitter">
					<?php echo do_shortcode('[TWTR]') ?>
				</div>
				<h4><i class="bi bi-play-btn ultima-hora"></i> VÍDEOS</h4>
				<?php echo do_shortcode('[Total_Soft_Gallery_Video id="1"]') ?>
			</div>
		</div>
		<!--Enlaces RRSS final de pagina-->
		<div class="row div-rrss">
			<?php echo do_shortcode('[cn-social-icon width="25" height="25" margin="15" selected_icons="1,2,4,3,5,6"]')?>
		</div>
		<!--Banners-->
		<div class="row">
			<div class="div-banners col-12">
				<div class="col-lg-2 col-md-2 col-sm-4 col-4">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="1"]')?>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-4">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="2"]')?>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-4">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="1"]')?>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-4">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="2"]')?>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-4">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="1"]')?>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-4">
					<?php echo do_shortcode('[cm_ad_changer campaign_id="2"]')?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
