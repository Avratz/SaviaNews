<?php get_header(); ?>
<div class="row">
	<div class="col-md-12">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="news-single-personajes">
					<div class="row">
						<div class="col-9 pl-0">
							<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
						</div>
						<div class="col-3">
							<div class="pic-personaje">
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
										<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="personaje-bio">
						<?php the_content(); // Dynamic Content ?>
					</div>
				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
				</div>
			</article>
			<?php endwhile; wp_reset_postdata(); endif; ?>

			<div class="row row-noticias">
					<?php
					$postsp = get_posts(array(
						'post_type' => 'post',
						'meta_query' => array(
							array(
								'key' => 'personajes', // name of custom field
								'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
								'compare' => 'LIKE'
							)
						)
					));

		?>
		<?php if( $postsp ): ?>
			<h3	class="single-h3-sp">Noticias de <?php echo get_the_title(); ?></h3>

			<div class="row mt-4">
			<?php foreach( $postsp as $postsps ): ?>
				<?php
					$featured_img_url = get_the_post_thumbnail_url($postsps->ID,'destacado');
				?>
				<div class="col-md-3 mb-4 <?php if ($linea < 3) echo "linea-vertical"; ?> ">
					<div class="news">
						<div class="cat <?php foreach((get_the_category($postsps->ID)) as $category){echo $category->slug.' ';}?>">
							<a href="<?php echo site_url(); ?>/secciones/<?php echo $category->slug ?> "><?php echo $category->name; ?></a>
						</div>
						<a href="<?php echo get_permalink( $postsps->ID ); ?>"><h2><?php echo get_the_title( $postsps->ID ); ?></h2></a>
						<img src="<?php echo $featured_img_url; ?>" alt="<?php echo get_the_title( $postsps->ID ); ?>" />
					</div>
				</div>

			<?php endforeach; ?>
			</div>
		<?php endif; ?>

				</div>
			</div>
		<?php // get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
