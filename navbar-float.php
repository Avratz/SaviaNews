<nav class="navbar fixed-top navbar-light bg-light sticktop sticky-top-opacity navbar2 d-none d-sm-flex ">
	<div class="container-fluid px-0">
		<a class="navbar-brand d-none d-md-block pl-3" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/s.png" alt="Savia Online"></a>
		<a class="navbar-brand d-sm-block d-md-none ml-0 pl-3" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Savia Online"></a>
			<p class="temas-destacados2 d-none d-lg-block">TEMAS DESTACADOS</p>
			<p class="temas-destacados2 d-none d-sm-block d-lg-none">DESTACADOS</p>
			<div class="d-none d-sm-block mr-auto">
				<?php html5blank_nav(); ?>
			</div>
			<div class="d-none d-lg-block">
				<a target="_blank" href="https://bibadeco.mitiendanube.com"><img src="http://saviaonline.com.ar/wp-content/uploads/2018/06/deco2.gif" alt="Biba Deco"></a>
			</div>
			<ul class="navbar-nav ml-4 mt-0 border-color-beta flex-row pr-3">
				<li class="icon-facebook-bg"> <a target="_blank" href="https://www.facebook.com/saviaonlinear/"><i class="fab fa-facebook"></i></a></li>
				<li class="icon-instagram-bg"> <a target="_blank" href="https://www.instagram.com/saviaonlinear/"><i class="fab fa-instagram"></i></a></li>
				<li class="nav-item dropdown lupa-item icon-lupa-bg d-none d-lg-block">
					<button type="button" class="btn btn-l" id="navbarSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
				</li>
			</ul>
			<div class="drop-search-wide pt-2">
				<form class="form-inline form-busqueda" method="get" action="http://saviaonline.com.ar">
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
					<button class="btn btn-savia my-2 my-sm-0" type="button">Buscar</button>
				</form>
			</div>
			<div class="destacados-responsive mx-auto text-center d-block d-sm-none">
				<i class="fas fa-star"></i>
				<div class="d-inline-block d-sm-none ">
					<?php html5blank_nav(); ?>
				</div>
			</div>

	</div>
</nav>
