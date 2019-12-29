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
		<div class="personajes">
			<h3 class="savia-h3">Personajes</h3>
			<?php

			$posts = get_posts(array(
				'posts_per_page'	=> 8,
				'post_type'			=> 'personajes',
				'orderby' => 'rand'
			));
			if( $posts ): ?>
				<ul>
				<?php foreach( $posts as $post ):
					setup_postdata( $post );
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'small');
					?>
					<li>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php the_title(); ?>"></a>
					</li>
				<?php endforeach; ?>
				</ul>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
<div class="sidebar-widget">
	<br>
		<center>
			<img src="http://saviaonline.com.ar/wp-content/uploads/2017/11/300x250.gif" alt="pub1">
		</center>
</div>
</div>

<!-- /sidebar -->
