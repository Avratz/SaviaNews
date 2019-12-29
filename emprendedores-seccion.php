<?php
$query33 = new WP_Query( array( 'post_type' => 'post',
															 'posts_per_page' => 3,
															 'category_name' => 'emprendedores',
															 'offset' => 1
														 ) );
	if ($query33->have_posts()) :
 ?>
<div class="row emprendedores-theme seccion-horizontal">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2 no-pad h3-sh">
				<h3 class="savia-h3-alt">Emprendedores</h3>
				<img src="<?php echo get_template_directory_uri(); ?>/img/em.png" alt="Emprendedores">
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-9">
				<div class="row">
 					<?php while ( $query33->have_posts() ): $query33->the_post(); ?>
					<div class="col-md-4 px-1 m-100">
						<?php the_post_thumbnail('destacado'); ?>
						<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
	 		</div>
		</div>
		<div class="row">
			<div class="col-md-2 no-pad linea-top-w">
				<a href="<?php echo site_url(); ?>/secciones/emprendedores/">Ver Más ></a>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="row mt-4">
	<?php
	$linea = 0;
	$query333 = new WP_Query( array( 'post_type' => 'post',
																 'posts_per_page' => 4,
																 'category_name' => 'emprendedores',
																 'offset' => 4
															 ) );

	 if ($query333->have_posts()) : while ( $query333->have_posts() ): $query333->the_post();
	?>

	<div class="col-md-3 <?php if ($linea < 3) echo "linea-vertical"; ?> ">
		<div class="news">
			<div class="cat <?php foreach((get_the_category()) as $category){echo $category->slug.' ';}?>"><?php the_category( ' ' ); ?></div>

			<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
			<?php the_post_thumbnail('destacado'); ?>
			<!-- <?php html5wp_excerpt('html5wp_index', ''); ?> -->
		</div>
	</div>
	<?php
		$linea = $linea + 1;
		endwhile; wp_reset_postdata(); endif;
	?>
</div>
