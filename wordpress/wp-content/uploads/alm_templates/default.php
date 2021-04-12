<div class="pg-noticias-div-noticia col-12<?php if (!has_post_thumbnail()) { ?> no-img<?php } ?>">
<h3 class="col-12"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<span class="entry-meta col-12"><?php the_time("F d, Y"); ?></span>
<div class="img-excerpt col-lg-12 col-md-12 col-sm-12 col-12">
<div class="img-noticias col-lg-6 col-md-6 col-sm-12 col-12"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('alm-thumbnail'); }?> </a></div>
<div class="excerpt-button col-lg-6 col-md-6 col-sm-12 col-12"><?php echo excerpt('20'); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-primary btn-sm">Leer Más</a>
</div>
</div>
</div>