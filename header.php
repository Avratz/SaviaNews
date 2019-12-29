<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php if (is_single()) { wp_title(''); } else { wp_title(''); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); } ?></title>


    <!-- Required meta tags -->
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>

        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1870573886569088',
              xfbml      : true,
              version    : 'v2.9'
            });
            FB.AppEvents.logPageView();
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/es_ES/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109131549-1"></script>
	<script>
 		window.dataLayer = window.dataLayer || [];
 		function gtag(){dataLayer.push(arguments);}
	 	gtag('js', new Date());
 		gtag('config', 'UA-109131549-1');
	</script>
	<!-- Adsense -->
  <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({
           google_ad_client: "ca-pub-7036058321324030",
           enable_page_level_ads: true
      });
  </script> -->

  </head>
  <body <?php body_class(); ?>>
    <div class="container-fluid bg-grey px-0">
      <div class="container-c-fluid d-none d-lg-flex">
        <div class="categorias-container d-none d-lg-block">
          <div class="row no-margin">
            <a href="<?php echo site_url(); ?>/secciones/nacional">
              <div class="col-12 icon-cat-menu icon-nacional-bg" data-toggle="tooltip" data-placement="left" title="Nacional">
                <img src="<?php echo get_template_directory_uri(); ?>/img/na.png" alt="Nacional" height="50px" width="50px">
              </div>
            </a>
            <a href="<?php echo site_url(); ?>/secciones/buenosaires">
              <div class="col-12 icon-cat-menu icon-buenosaires-bg" data-toggle="tooltip" data-placement="left" title="Buenos Aires">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ba.png" alt="Buenos Aires" height="50px" width="50px">
              </div>
            </a>
          </div>
          <div class="row no-margin">
            <a href="<?php echo site_url(); ?>/secciones/feminismo">
              <div class="col-12 icon-cat-menu icon-genero-bg" data-toggle="tooltip" data-placement="left" title="Feminismo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/vg.png" alt="Violencia de genero" height="50px" width="50px">
              </div>
            </a>
            <a href="<?php echo site_url(); ?>/secciones/negocios">
            <div class="col-12 icon-cat-menu icon-emprendedores-bg" data-toggle="tooltip" data-placement="left" title="Negocios">
              <img src="<?php echo get_template_directory_uri(); ?>/img/em.png" alt="Negocios" height="50px" width="50px">
            </div>
            </a>
          </div>
          <div class="row no-margin">
            <a href="<?php echo site_url(); ?>/secciones/futbol">
              <div class="col-12 icon-cat-menu icon-futbol-bg" data-toggle="tooltip" data-placement="left" title="Futbol">
                <img src="<?php echo get_template_directory_uri(); ?>/img/futb.png" alt="Futbol" height="50px" width="50px">
              </div>
            </a>
            <a href="<?php echo site_url(); ?>/secciones/internacional">
              <div class="col-12 icon-cat-menu icon-internacional-bg" data-toggle="tooltip" data-placement="left" title="Internacional">
                <img src="<?php echo get_template_directory_uri(); ?>/img/int.png" alt="Internacional" height="50px" width="50px">
              </div>
            </a>
          </div>
        </div>
      </div>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Savia Online"></a>

            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#SaviaBar" aria-controls="SaviaBar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="SaviaBar">
              <p class="temas-destacados">TEMAS DESTACADOS</p>
              <?php html5blank_nav(); ?>
              <div class="d-none d-lg-block">
                <a target="_blank" href="https://bibadeco.mitiendanube.com"><img src="http://saviaonline.com.ar/wp-content/uploads/2018/06/deco1.gif" alt="Biba Deco"></a>
              </div>
              <ul class="navbar-nav ml-4 mt-0 border-color-beta">
                <li class="icon-facebook-bg"> <a target="_blank" href="https://www.facebook.com/saviaonlinear/"><i class="fab fa-facebook"></i></a></li>
                <li class="icon-instagram-bg"> <a target="_blank" href="https://www.instagram.com/saviaonlinear/"><i class="fab fa-instagram"></i></a></li>
                <li class="nav-item dropdown lupa-item icon-lupa-bg d-none d-lg-block">
                  <button type="button" class="btn btn-l dropdown-toggle" id="navbarDropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownSearch">
                    <form class="form-inline form-busqueda" method="get" action="http://saviaonline.com.ar">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                      <button class="btn btn-savia my-2 my-sm-0" type="button">Buscar</button>
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <div class="container main-container">
