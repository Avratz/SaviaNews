<?php get_header(); ?>

<h2 class="pl-3 pb-3"><?php _e( 'Archivo', 'html5blank' ); ?></h2>
<div class="row">
	<div class="col-md-8 no-pad">

		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>
	</div>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
