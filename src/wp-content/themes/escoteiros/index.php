<?php get_header(); ?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Navigation -->
    <aside id="accordion" class="social text-vertical-center">
      <div class="accordion-social">
        <ul class="panel-collapse" role="tabpanel" aria-labelledby="social-collapse" id="collapseOne">
          <li><a href="https://www.facebook.com/IFRNoficial" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/ifrnoficial/?hl=pt-br" target="_blank"><i class="fa fa-lg fa-instagram"></i></a></li></i></a></li>
          <li><a href="https://twitter.com/ifrn_" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com/110261631315671379715" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
        </ul>
      </div>
    </aside>


<!-- Carousel-->
<div class="container">
        <div class="row">
<div class="col-md-11 slider-noticia" style="margin: 0px 45px; margin-bottom: 20px;">
 
<!-- Carousel-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

  <?php 
  $posts_slides = new WP_Query(array(
        'posts_type' => 'post',
        'posts_per_page' => 8,
        ));
      $i - 1;
        while ($posts_slides->have_posts()) : $posts_slides->the_post();
  ?>
    <div class="item <?php if($i == 1) echo "active"; ?>">
    <a href="<?php the_permalink(); ?> "> <?php the_post_thumbnail( 'thumbnail-slide' ); ?></a>
      <div class="carousel-caption visible-lg">
        <h3><?php the_title(); ?></h3>
        <p><?php echo rwmb_meta( 'resumo' ); ?></p> 
        <a href="<?php the_permalink(); ?> "><button type="button" class="btn btn-success btn-sm">Veja mais</button></a>
      </div>
    </div>
   <?php $i++; endwhile; wp_reset_postdata(); ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
<!-- /Carousel-->
<!-- 
<div class="col-md-4 itens-destaques">4</div>  --> 
  
<!-- Noticias-->
<div class="width-full-box">
<div class="container">
<div class="row">
<div class="title-box"><h4>Notícias</h4></div></div>
          <div class="row">

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

          </div>    </div>    </div>
<!-- /Noticias-->  <!-- /Noticias-->  <!-- /Noticias-->

<!-- Eventos e Vídeo--> <!-- Eventos e Vídeo-->
<div class="width-full-box">
<div class="container">
<div class="row">
<div class="title-box"><h4>Eventos</h4></div></div>
          <div class="row">
              <div class="teste">
            <div class="col-md-4 iten-videos">
            <div class="hoverzoom">
<img src="<?php bloginfo('template_url'); ?>/images/ifb.jpg"
              class="img-responsive img-thumbnail" alt="" title="" />
<div class="retina">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, temporibus, repellat? Placeat nihil itaque culpa eu.</p>
<a href="/wordpress/noticias/?preview_id=54&preview_nonce=186cd0bdbc&preview=true">Saiba mais</a>
        </div>  </div>  <h3>MUTECO 2016</h3>  </div>

        <div class="col-md-4 iten-videos">
            <div class="hoverzoom">
<img src="<?php bloginfo('template_url'); ?>/images/if.jpg"
              class="img-responsive img-thumbnail" alt="" title="" />
<div class="retina">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, temporibus, repellat? Placeat nihil itaque culpa eu.</p>
<a href="#">Saiba mais</a>
        </div>  </div>  <h3>MUTECO 2017</h3>  </div>


        <div class="col-md-4 iten-videos">
            <div class="hoverzoom">
<img src="<?php bloginfo('template_url'); ?>/images/ifa.jpg"
              class="img-responsive img-thumbnail" alt="" title="" />
<div class="retina">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, temporibus, repellat? Placeat nihil itaque culpa eu.</p>
<a href="#">Saiba mais</a>
        </div> </div>  <h3>MUTECO 2018</h3> </div>



          </div>    </div>    </div>
<!-- Eventos e Vídeo--> <!-- Eventos e Vídeo-->

<?php get_footer(); ?>