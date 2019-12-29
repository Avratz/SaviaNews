<?php get_header(); ?>
<div class="row">
	<div class="col-md-8 no-pad">
					<?php get_template_part('loop'); ?>
					<?php get_template_part('pagination'); ?>
	</div>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
