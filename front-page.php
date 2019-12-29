<?php get_header(); ?>
	<?php include('navbar-float.php'); ?>

			<section id="destacadas" class="container">
					<div class="row px-0 mx-0">
						<?php
							$NoticiaDestacada = array(  'post_type' => 'post',
																					'posts_per_page' => 1,
																					'ignore_sticky_posts' => 0
																				);

							$QryDestacada = new WP_Query($NoticiaDestacada);
			        if ($QryDestacada->have_posts()) : $QryDestacada->the_post();
						 ?>
						<div class="col-md-4">
							<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
							<h4><?php html5wp_excerpt('html5wp_index', ''); ?></h4>
						</div>
						<div class="col-md-8">
							<a href="<?php the_permalink();?>">
								<div class="img-container">
									<div class="img-vignette"></div>
									<?php the_post_thumbnail('790434'); ?>
								</div>
							</a>
						</div>
						<?php wp_reset_postdata(); endif; ?>
					</div>
			</section>
			<br>
			<div class="row mx-1">
				<div class="col-md-12">
					<div class="publicidad-larga-superior">
						<a target="_blank" href="https://cumbrecp.com"><img src="http://saviaonline.com.ar/wp-content/uploads/2018/06/cumbre.gif" alt="Cumbre Mundial de Comunicación Política"></a>
					</div>
				</div>
			</div>
			<?php include('primaria-seccion.php'); ?>
			<?php include('secundaria-seccion.php'); ?>
			<?php include('secundariab-bis-seccion.php'); ?>
			<?php include('terciaria-seccion.php'); ?>
			<?php include('mas-visto.php'); ?>
			<?php include('31-seccion.php'); ?>
			<?php include('opinion-seccion.php'); ?>
			<?php include('genero-seccion.php'); ?>
			<?php include('violencia-video-seccion.php'); ?>
			<br>
			<?php include('emprendedores-seccion.php'); ?>
			<?php include('futbol-seccion.php'); ?>


<?php get_footer(); ?>
