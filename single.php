<?php get_header();
	if (have_posts()): the_post();
	$categoryPostActual = array();
	foreach((get_the_category()) as $category){
		array_push($categoryPostActual, $category->term_id );
			}
		$QueryInteresarte = new WP_Query( array('post_type' => 'post',
																	 					'posts_per_page' => 3,
																						'ignore_sticky_posts' => 1,
																						'category__in' => $categoryPostActual
																 				) );

		$QueryUltimas = new WP_Query( array('post_type' => 'post',
																				'posts_per_page' => 3,
																				'ignore_sticky_posts' => 1,
																				'category_name' => 'nacional'
																		) );

		$queryhot2 = new WP_Query( array('post_type' => 'post',
	                                  'meta_key'		=> 'hot',
	                                  'meta_value'	=> true,
	                                  'posts_per_page' => 3,
	                                  'ignore_sticky_posts' => 1
	                              ) );


?>
<nav class="navbar fixed-top navbar-light bg-light sticktop sticky-top-opacity navbar2 single-stickytop px-3">
	<a class="navbar-brand d-none d-md-block pl-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/s.png" alt="Savia Online"></a>
	<ul class="navbar-nav ml-0 mt-0 border-color-beta flex-row d-none d-lg-flex">
		<li class="cat-navbar"><p class="<?php foreach((get_the_category()) as $category){echo $category->slug.'-nv';}?>"><?php foreach((get_the_category()) as $category){echo $category->name.' ';}?></p></li>
		<li class="pr-2">»</li>
		<li><?php echo titulocorto(get_the_title(), 90); ?></li>
	</ul>
	<ul class="navbar-nav ml-auto mt-0 border-color-beta d-none d-md-flex flex-row">
		<li class="icon-facebook-bg"><i class="fab fa-facebook"></i></li>
		<li class="icon-instagram-bg"><i class="fab fa-instagram"></i></li>
		<li><button type="button" class="btn btn-l dropdown-toggle d-none d-md-block" id="navbarDropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
		</li>
	</ul>
</nav>
<div class="header">
	<div class="progress-container">
		<div class="progress-bar" id="myBar"></div>
	</div>
</div>
<div class="row share-mobile d-flex d-md-none mx-0">
	<div  class="fb-btn col-2" id="shareBtn2">
		<i class="fab fa-facebook"></i>
	</div>
	<div class="twitter-btn col-2">
		<a href="http://twitter.com/share">
			<i class="fab fa-twitter"></i>
		</a>
	</div>
	<div class="whatsapp-btn col-2">
		<a href="whatsapp://send?text=<?php the_title(); ?> - <?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share">
			<i class="fab fa-whatsapp"></i>
		</a>
	</div>
	<div class="go-up col-6">
		 <?php previous_post_link('%link', 'SIGUIENTE >', TRUE); ?>
	</div>
</div>
<div class="container main-container">
	<br><br>
<section id="post-single">
	<div class="row">
		<div class="col-12">

			<article class="post-single-article post">
				<div class="cat <?php foreach((get_the_category()) as $category){echo $category->slug.' ';}?>">
					<?php show_main_category_first(); ?></div>
						<div class="pub-categorias-single clearfix d-none d-lg-block">
								<a target="_blank" href="http://www.lxargentina.com.ar"><img src="http://saviaonline.com.ar/wp-content/uploads/2018/06/lxarg.gif" alt="LX Argentina"></a>
						</div>
				<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<div class="line-color"></div>
				<h4><?php html5wp_excerpt('html5wp_index', ''); ?></h4>

				<?php if(get_field('personajes') ): ?>
					<div class="personajes">
						<h5>EN ESTA NOTICIA </h5>
						<?php
							$posts = get_field('personajes');
							if( $posts ):
						?>
							<ul>
								<?php
									foreach( $posts as $post): // variable must be called $post (IMPORTANT)
									setup_postdata($post);
									$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'small');
								?>
									<li>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php the_title(); ?>"></a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php
							wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
							endif;
						?>
					</div>
				<?php endif; ?>
				<time class="clearfix"><?php the_time('F j, Y'); ?> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('g:i a'); ?></time>
				<br>
				<?php if (in_category( 'opinion' )):  ?>
				<div class="row opinion-single-in" id="opinion">
					<div class="col-md-2 no-pad">
						<?php
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'1200660');
						?>
						<img class="rounded-0" src="<?php the_field('imagen'); ?>" />
					</div>
					<div class="col-md-10">
						 <div class="author-op-single">
							Autor/a: <?php the_field('nombre'); ?>
						 </div>
						 <p><?php the_field('biografia_del_autor'); ?></p>
					</div>
				</div>
				<?php endif; ?>
				<div class="img-container">
					<?php the_post_thumbnail('1200660'); ?>
					<?php
					$featured_img_url2 = get_the_post_thumbnail_url(get_the_ID(),'1200660');
					?>
					<meta property="og:description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
					<meta property="og:image" content="<?php echo $featured_img_url2; ?>" />

				</div>
				<?php include('banner-top.php'); ?>
					<div class="content-single">
						<?php the_content(); // Dynamic Content ?>

						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
					</div>
			</article>
		</div>
	</div>
	<?php if(get_field('firmar') ): ?>
		<div class="row">
			<div class="col-12 tag">
				Escrito por: <?php the_author_posts_link(); ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-12 tag">
			<!-- <div class="tag">  </div> -->
			<h3>TAGS:</h3>
			<div class="tags text-uppercase">
				<?php the_tags( '', '  ', '' ); ?>
			</div>
		</div>
	</div>
	<div class="share d-none d-md-block">
		<div id="shareBtn" class="facebook">
			Compartir en Facebook
		</div>
		<script>
			document.getElementById('shareBtn').onclick = function() {
				FB.ui({
					method: 'share',
					display: 'popup',
					href: '<?php the_permalink();?>',
				}, function(response){});
			}
		document.getElementById('shareBtn2').onclick = function() {
				FB.ui({
					method: 'share',
					display: 'popup',
					href: '<?php the_permalink();?>',
				}, function(response){});
			}
		</script>
		<a target="popup" onClick="window.open(this.href, this.target, 'width=500,height=320')" href="http://twitter.com/share?text=<?php the_title(); ?>&via=Savia">
			<div class="twitter">
				Compartir en Twitter
			</div>
		</a>
	</div>
</section>
<?php endif; ?>
<div class="h3box">
	<div class="h3-subr">
		<h3	class="h3-savia">comentarios</h3>
		<div class="h3-subtitle"></div>
	</div>
</div>
<section id="Comentarios">
		<?php echo do_shortcode('[fbcomments width="100%" locale=es_ES count="off" num="5" countmsg="Comentarios" scheme="light"]'); ?>
</section>
<div class="h3box">
	<div class="h3-subr">
		<h3	class="h3-savia small">PUEDE INTERESARTE</h3>
		<div class="h3-subtitle"></div>
	</div>
</div>
<section id="destacados">
	<div class="row foco">
		<?php if ( $QueryInteresarte->have_posts() ) : while ( $QueryInteresarte->have_posts() ) : $QueryInteresarte->the_post(); ?>
			<div class="col-md-4">
	      <article class="square-main">
	        <div class="cat <?php foreach((get_the_category()) as $category){echo $category->slug." ";}?>">
	          <?php show_main_category_first(); ?>
	        </div>
	        <a href="<?php the_permalink();?>">
	          <div class="box-img">
	            <div class="backgroundabs"></div>
	            <?php the_post_thumbnail('380412'); ?>
	            <div class="abs">
	              <h2><?php the_title(); ?></h2>
	            </div>
	          </div>
	        </a>
	      </article>
	    </div>
	    	<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>
</section>
<div class="h3box">
	<div class="h3-subr">
		<h3	class="h3-savia small">ÚLTIMAS NOTICIAS</h3>
		<div class="h3-subtitle"></div>
	</div>
</div>
<section id="destacados">
	<div class="row foco">
		<?php if ( $QueryUltimas->have_posts() ) : while ( $QueryUltimas->have_posts() ) : $QueryUltimas->the_post(); ?>
			<div class="col-md-4">
	      <article class="square-main">
	        <div class="cat <?php foreach((get_the_category()) as $category){echo $category->slug." ";}?>">
	          <?php show_main_category_first(); ?>
	        </div>
	        <a href="<?php the_permalink();?>">
	          <div class="box-img">
	            <div class="backgroundabs"></div>
	            <?php the_post_thumbnail('380412'); ?>
	            <div class="abs">
	              <h2><?php the_title(); ?></h2>
	            </div>
	          </div>
	        </a>
	      </article>
	    </div>
	    	<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>
</section>
<div class="h3box">
	<div class="h3-subr">
		<h3	class="h3-savia small">TE RECOMENDAMOS</h3>
		<div class="h3-subtitle"></div>
	</div>
</div>
<section id="destacados">
	<div class="row foco">
		<?php if ( $queryhot2->have_posts() ) : while ( $queryhot2->have_posts() ) : $queryhot2->the_post(); ?>
			<div class="col-md-4">
	      <article class="square-main">
	        <div class="cat <?php foreach((get_the_category()) as $category){echo $category->slug." ";}?>">
	          <?php show_main_category_first(); ?>
	        </div>
	        <a href="<?php the_permalink();?>">
	          <div class="box-img">
	            <div class="backgroundabs"></div>
	            <?php the_post_thumbnail('380412'); ?>
	            <div class="abs">
	              <h2><?php the_title(); ?></h2>
	            </div>
	          </div>
	        </a>
	      </article>
	    </div>
	    	<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>
</section>

<script type="text/javascript">
function barProgress() {
	var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	var scrolled = (winScroll / height) * 100;
	document.getElementById("myBar").style.width = scrolled + "%";
}

window.onscroll = function() {barProgress()};
</script>
<?php get_footer(); ?>
