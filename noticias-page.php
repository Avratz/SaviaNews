<?php /* Template Name: Page noticias */ get_header(); ?>

<div class="container singlepad">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-uppercase"><?php the_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>


		</div>
	</div>
</div>
<?php get_footer(); ?>
