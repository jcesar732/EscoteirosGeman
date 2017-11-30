<?php get_header(); ?>

<div class="container conteudo-categoria">
<div class="row"><!--<div class="row"> <?php the_category("title") ?></div>> <-->
<div class="title-box"><h4>Notícias</h4></div></div>
          <div class="row">

<?php 
  $posts_slides = new WP_Query(array(
        'posts_type' => 'post',
        'posts_per_page' => 2,
        ));
     
        while ($posts_slides->have_posts()) : $posts_slides->the_post();
  ?>

            <div class="col-md-4 iten-noticias">
              <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail('thumbnail-noticias', array('class' , 'media-object img-responsive img-thumbnail')); ?></a><span>
              <?php echo rwmb_meta( 'data' ); ?></span>
              <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
            </div>

 <?php endwhile; wp_reset_postdata(); ?>

 <?php 
  $posts_slides = new WP_Query(array(
        'posts_type' => 'post',
        'posts_per_page' => 3,
        ));
     
        while ($posts_slides->have_posts()) : $posts_slides->the_post();
  ?>

            <div class="col-md-4 iten-noticias">
              <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail('thumbnail-noticias', array('class' , 'media-object img-responsive img-thumbnail')); ?></a><span>
              <?php echo rwmb_meta( 'data' ); ?></span>
              <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
            </div>

 <?php endwhile; wp_reset_postdata(); ?>


<?php 
  $posts_slides = new WP_Query(array(
        'posts_type' => 'post',
        'posts_per_page' => 2,
        ));
     
        while ($posts_slides->have_posts()) : $posts_slides->the_post();
  ?>

            <div class="col-md-4 iten-noticias">
              <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail('thumbnail-noticias', array('class' , 'media-object img-responsive img-thumbnail')); ?></a><span>
              <?php echo rwmb_meta( 'data' ); ?></span>
              <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
            </div>

 <?php endwhile; wp_reset_postdata(); ?>

 <?php 
  $posts_slides = new WP_Query(array(
        'posts_type' => 'post',
        'posts_per_page' => 3,
        ));
     
        while ($posts_slides->have_posts()) : $posts_slides->the_post();
  ?>

            <div class="col-md-4 iten-noticias">
              <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail('thumbnail-noticias', array('class' , 'media-object img-responsive img-thumbnail')); ?></a><span>
              <?php echo rwmb_meta( 'data' ); ?></span>
              <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
            </div>

 <?php endwhile; wp_reset_postdata(); ?>

 <?php 
  $posts_slides = new WP_Query(array(
        'posts_type' => 'post',
        'posts_per_page' => 2,
        ));
     
        while ($posts_slides->have_posts()) : $posts_slides->the_post();
  ?>

            <div class="col-md-4 iten-noticias">
              <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail('thumbnail-noticias', array('class' , 'media-object img-responsive img-thumbnail')); ?></a><span>
              <?php echo rwmb_meta( 'data' ); ?></span>
              <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
            </div>

 <?php endwhile; wp_reset_postdata(); ?>


          </div>    </div>
<!-- /Noticias-->  <!-- /Noticias-->  <!-- /Noticias-->

<?php get_footer(); ?>