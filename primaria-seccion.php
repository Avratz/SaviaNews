<section id="primaria">
  <div class="row">

    <?php
    $row = 0;
    $sticky = get_option( 'sticky_posts' );
      $Temas = array( 'post_type' => 'post',
                      'meta_query'	=> array(
                      		'relation'		=> 'AND',
                      		array(
                      			'key'	 	=> 'temasfield',
                      			'value'	  	=> ' ',
                      			'compare' 	=> '!=',
                      		)),
                      'posts_per_page' => 5,
                      'post__not_in' => $sticky,
                      'ignore_sticky_posts' => 1
                    );
      $QryTemas = new WP_Query($Temas);
        if ($QryTemas->have_posts()) : while ( $QryTemas->have_posts() ): $QryTemas->the_post();
      $field_name = "temasfield";
      $field = get_field_object($field_name);
    ?>

    <div class="col-md-4">
      <article class="square">
        <h3><a class="text-uppercase" href="<?php echo site_url()."/tag/".$field['value'] -> slug; ?>"><?php echo $field['value'] -> name; ?></a></h3>
        <a href="<?php the_permalink();?>">
          <div class="img-container">
            <div class="img-vignette"></div>
            	<?php the_post_thumbnail('790434'); ?>
          </div>
        </a>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
      </article>
    </div>
    <?php
      if ($row == 2) {
        echo "</div>";
        echo '<div class="row row-margin-top">';
      } else if ($row == 3) {
        echo '<div class="col-md-4">';
          echo '<div class="publicidad-square-2 text-center">';
          echo '<div class="d-none d-md-block">';
          echo "<br><br><br>";
          echo '</div>';
          echo '<a target="_blank" href="http://www.cualesturol.laplata.gob.ar">';
          echo '<img src="http://saviaonline.com.ar/wp-content/uploads/2018/05/300x250.gif" alt="Cual es Tu rol Municipalidad de La Plata">';
          echo '</a>';
        echo "</div>";
        echo "</div>";
      }
     ?>
  <?php $row++; endwhile; wp_reset_postdata(); endif; ?>
  </div>
</section>
