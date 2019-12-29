<!-- sidebar -->
<div class="col-md-4 sidebar-lines">
	<h3 class="savia-h3">Últimas noticias</h3>
		<ul class="row recentposts">
			<?php
				$queryhot = new WP_Query( array('post_type' => 'post',
																				'posts_per_page' => 5,
																				'ignore_sticky_posts' => 1,
																				'category__not_in' => array( 17 )
																		) );
			if ( $queryhot->have_posts() ) : while ( $queryhot->have_posts() ) : $queryhot->the_post();

			?>
			<li class="col-md-12">
					<time><?php the_time('d/m/Y'); ?></time>
					<a href="<?php the_permalink();?>"><h6><?php the_title(); ?></h6></a>
			</li>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</ul>
		
<div class="sidebar-widget">
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
</div>
</div>

<!-- /sidebar -->
