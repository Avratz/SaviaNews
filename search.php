<?php get_header(); ?>
<h2 class="pl-3 pb-5"><?php echo sprintf( __( '%s Resultados para ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>

<div class="row">
	<div class="col-md-8 no-pad">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
			<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>
