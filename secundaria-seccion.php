  <?php

  $catJudicialID = 24;
      $args = array(
        'posts_per_page'=> 1,
        'ignore_sticky_posts' => 1,
        'category_name' => 'nacional',
        'offset' => 6
      );
      $args1 = array(
        'posts_per_page'=> 1,
        'ignore_sticky_posts' => 1,
        'category_name' => 'nacional',
        'offset' => 7
      );
      $args2 = array(
        'posts_per_page'=> 1,
        'ignore_sticky_posts' => 1,
        'category_name' => 'nacional',
        'offset' => 8
      );
      $args3 = array(
        'posts_per_page'=> 1,
        'ignore_sticky_posts' => 1,
        'category_name' => 'nacional',
        'offset' => 9
      );
      $argsBA = array(
        'posts_per_page'=> 1,
        'ignore_sticky_posts' => 1,
        'category_name' => 'judiciales',
        'post__not_in' => get_option( 'sticky_posts' )
      );
      $argsBA1 = array(
        'posts_per_page'=> 1,
        'ignore_sticky_posts' => 1,
        'category_name' => 'judiciales',
        'post__not_in' => get_option( 'sticky_posts' ),
        'offset' => 1
      );
      $argsBA2 = array(
        'posts_per_page'=> 1,
        'ignore_sticky_posts' => 1,
        'category_name' => 'judiciales',
        'post__not_in' => get_option( 'sticky_posts' ),
        'offset' => 2
      );
      $argsBA3 = array(
        'posts_per_page'=> 1,
        'ignore_sticky_posts' => 1,
        'category_name' => 'judiciales',
        'post__not_in' => get_option( 'sticky_posts' ),
        'offset' => 3
      );
      $query1 = new WP_Query($args);
      $queryBA = new WP_Query($argsBA);
   ?>


<section id="secundaria" class="news-star">
  <div class="row">
    <?php if ( $query1->have_posts() ) : $query1->the_post(); ?>
    <div class="col-md-8">
      <article class="rectangle-main">
        <div class="cat nacional">
          <?php show_main_category_first(); ?>
        </div>
        <a href="<?php the_permalink();?>">
          <div class="box-img destacadabig">
            <?php the_post_thumbnail('790434'); ?>
            <div class="backgroundabs"></div>
              <div class="abs">
                <h2><?php the_title(); ?></h2>
              </div>
          </div>
        </a>
      </article>
    </div>
    <?php wp_reset_postdata(); endif; ?>
    <?php if ( $queryBA->have_posts() ) : $queryBA->the_post(); ?>
      <div class="col-md-4">
        <article class="square">
          <div class="cat nacional">
            <?php show_main_category_first(); ?>
          </div>
          <a href="<?php the_permalink();?>">
            <div class="img-container">
              <div class="img-vignette"></div>
              <?php the_post_thumbnail('790434'); ?>
            </div>
          </a>
          <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        </article>
      </div>
      <?php wp_reset_postdata(); endif; ?>
  </div>
  <div class="row">
    <?php
    $query2 = new WP_Query($args1);
    if ( $query2->have_posts() ) : $query2->the_post(); ?>
    <div class="col-md-8">
      <article class="rectangle-main">
        <div class="cat nacional">
          <?php show_main_category_first(); ?>
        </div>
        <a href="<?php the_permalink();?>">
          <div class="box-img destacadabig">
            <?php the_post_thumbnail('790434'); ?>
            <div class="backgroundabs"></div>
              <div class="abs">
                <h2><?php the_title(); ?></h2>
              </div>
          </div>
        </a>
      </article>
    </div>
    <?php wp_reset_postdata(); endif; ?>
    <?php $queryBA1 = new WP_Query($argsBA1); ?>
    <?php if ( $queryBA1->have_posts() ) : $queryBA1->the_post(); ?>
      <div class="col-md-4">
        <article class="square">
          <div class="cat nacional">
            <?php show_main_category_first(); ?>
          </div>
          <a href="<?php the_permalink();?>">
            <div class="img-container">
              <div class="img-vignette"></div>
              <?php the_post_thumbnail('790434'); ?>
            </div>
          </a>
          <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        </article>
      </div>
      <?php wp_reset_postdata(); endif; ?>
  </div>
  <div class="row">
    <?php
    $query3 = new WP_Query($args2);
    if ( $query3->have_posts() ) : $query3->the_post(); ?>
    <div class="col-md-8">
      <article class="rectangle-main">
        <div class="cat nacional">
          <?php show_main_category_first(); ?>
        </div>
        <a href="<?php the_permalink();?>">
          <div class="box-img destacadabig">
            <?php the_post_thumbnail('790434'); ?>
            <div class="backgroundabs"></div>
              <div class="abs">
                <h2><?php the_title(); ?></h2>
              </div>
          </div>
        </a>
      </article>
    </div>
    <?php wp_reset_postdata(); endif; ?>
    <?php
    $queryBA2 = new WP_Query($argsBA2);
    if ( $queryBA2->have_posts() ) : $queryBA2->the_post(); ?>
    <div class="col-md-4">
      <article class="square">
        <div class="cat nacional">
          <?php show_main_category_first(); ?>
        </div>
        <a href="<?php the_permalink();?>">
          <div class="img-container">
            <div class="img-vignette"></div>
            <?php the_post_thumbnail('790434'); ?>
          </div>
        </a>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
      </article>
    </div>
    <?php wp_reset_postdata(); endif; ?>
  </div>
  <div class="row">
    <?php
    $query4 = new WP_Query($args3);
    if ( $query4->have_posts() ) : $query4->the_post(); ?>
    <div class="col-md-8">
      <article class="rectangle-main">
        <div class="cat nacional">
          <?php show_main_category_first(); ?>
        </div>
        <a href="<?php the_permalink();?>">
          <div class="box-img destacadabig">
            <?php the_post_thumbnail('790434'); ?>
            <div class="backgroundabs"></div>
              <div class="abs">
                <h2><?php the_title(); ?></h2>
              </div>
          </div>
        </a>
      </article>
    </div>
    <?php wp_reset_postdata(); endif; ?>
    <?php
    $queryBA3 = new WP_Query($argsBA3);
    if ( $queryBA3->have_posts() ) : $queryBA3->the_post(); ?>
    <div class="col-md-4">
      <article class="square">
        <div class="cat nacional">
          <?php show_main_category_first(); ?>
        </div>
        <a href="<?php the_permalink();?>">
          <div class="img-container">
            <div class="img-vignette"></div>
            <?php the_post_thumbnail('790434'); ?>
          </div>
        </a>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
      </article>
    </div>
    <?php wp_reset_postdata(); endif; ?>
  </div>
</section>
