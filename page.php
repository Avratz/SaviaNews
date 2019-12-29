<?php get_header(); ?>
<div class="share-mobile hidden-md-up">
	<a href="#">
		<i class="fa fa-facebook-square" aria-hidden="true"></i>
	</a>
	<a href="http://twitter.com/share">
		<i class="fa fa-twitter-square" aria-hidden="true"></i>
	</a>
	<a href="whatsapp://send">
		<i class="fa fa-whatsapp" aria-hidden="true"></i>
	</a>
	<a href="#">
		<i class="fa fa-arrow-circle-up pr-0" aria-hidden="true"></i>
	</a>
</div>

<div class="row">
	<div class="col-md-8">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="news-single">
						<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
						<h4><?php html5wp_excerpt('html5wp_index', ''); ?></h4>
						<time><?php the_time('F j, Y'); ?> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('g:i a'); ?></time>
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					<?php endif; ?>
					<div class="share hidden-sm-down">
						<div id="shareBtn" class="facebook">
							Compartir en Facebook
						</div>
						<script>
							document.getElementById('shareBtn').onclick = function() {
								FB.ui({
									method: 'share',
									display: 'popup',
									href: 'https://www.facebook.com/sharer/sharer.php?app_id=311611975970081&<?php the_permalink();?>',
								}, function(response){});
							}
						</script>
						<a target="popup" onClick="window.open(this.href, this.target, 'width=500,height=320')" href="http://twitter.com/share?text=<?php the_title(); ?>&via=Savia">
							<div class="twitter">
								Compartir en Twitter
							</div>
						</a>
					</div>
						<?php the_content(); // Dynamic Content ?>

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					</div>
				</article>
			<?php endwhile; ?>
			<?php else: ?>

				<article>
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				</article>

			<?php endif; ?>

		</div>


		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
