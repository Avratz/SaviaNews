	<div class="container no-pad greyfo">
	<footer>
		<div class="container adfloat">
		<div class="row mt-2 mb-4">
			<div class="col-md-3">
				<div class="left">
					<div class="logowid">
						<p class="logo-small">SAVIA</p>
						<p class="text-right">Online AR</p>
					</div>
				</div>
			</div>
			<div class="col-md-5 padnew">
				<div class="row align-middle">
					<div class="col-md-12">
						<div class="social-bot">
							<a target="_blank" href="https://www.facebook.com/saviaonlinear/">
								Facebook
							</a>
							<a target="_blank" href="https://www.instagram.com/saviaonlinear/">
								Instagram
							</a>
						</div>
					</div>
					<div class="col-md-12 center pt-4 ">
						<i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="https://goo.gl/forms/ACrRKnRnrAUq9N4A3">Trabaja en Savia Online</a> |
						<a href="https://goo.gl/forms/ACrRKnRnrAUq9N4A3" target="_blank">Contacto</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 seccion-footer">
				<div class="edicion center bloqf1">
					<p>EDICIÓN: </p>
				<img src="<?php echo get_template_directory_uri(); ?>/img/af.png" alt="">  <a href="#"><b>ARGENTINA </b></a> |
						<img src="<?php echo get_template_directory_uri(); ?>/img/mf.png" alt=""> <a target="_blank" href="http://saviaonline.com.mx"> MÉXICO</a>
				</div>
			</div>
		</div>
		<div class="row lineamag">
			<div class="col-md-12">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-f')) ?>
			</div>
		</div>
	</div>
</footer>
</div>
</div>
	<!-- footer -->

		<?php wp_footer(); ?>

		<script type="text/javascript">
			$('.multiple-items').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 3,
				dots: true,
				arrows: false
			});
		</script>
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		</body>
	</html>
