<div class="row row-noticias">
	<?php
	$row = 2;
	 if (have_posts()): while (have_posts()) : the_post();
	?>

	<div class="col-md-6 <?php  if (($row % 2) == 0) echo "linea-vertical"; ?>">
		<div class="news">
			<div class="cat <?php foreach((get_the_category()) as $category){echo $category->slug.' ';}?>"><?php the_category( ' ' ); ?></div>
			<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
			<?php the_post_thumbnail('destacado'); ?>
			<!-- <?php html5wp_excerpt('html5wp_index', ''); ?> -->
		</div>
	</div>
	<?php
	if (($row % 2) !== 0) {
		if ($row < 7){
			echo "</div>";
			echo '<div class="row row-noticias">';
		}
	}
		$row = $row + 1;
		endwhile;
		wp_reset_query();
		wp_reset_postdata();
		endif;
	?>
</div>
