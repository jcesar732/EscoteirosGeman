<?php get_header();?>
<section class="row hidden-xs">
	<div class="container">
	<?php if( have_rows('banner_home' , 'option') ): ?>
		<div class="slide">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			 
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			 <?php 
				
				while ( have_rows('banner_home' , 'option') ) : the_row(); ?>
			    <div class="item" style="background:url(<?php the_sub_field('imagem_banner', 'option');?>); background-size:cover; height: 300px; ">
			      
			      <div class="carousel-caption">
			       <h3><a href="<?php the_sub_field('url_banner', 'option');?>" style="color:white;"><?php the_sub_field('titulo_banner', 'option');?></a></h3>
			      </div>
			    </div>
			    <?php endwhile;?>
				
			  </div>
			  <!-- Controls -->
			  
			</div>
		</div>
	<?php endif;?>
	</div>
</section>
<?php if(isset($_GET['s'])== ''){?>
<?php
	$wp_query = new WP_Query();
	query_posts( array( 'post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'noticias' ));
	if(have_posts()):?>
<section class="row noticias">
	<div class="container">
		<div class="col-lg-12">
			<h2>Notícias</h2>
			<?php 
	            while ($wp_query -> have_posts()) : $wp_query -> the_post();
           	?>
           	<?php
            	$title=urlencode($titulo);
                $url=urlencode($link);
               	$image=urlencode($thumb_url);
            ?>
			<div class="box-home col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<figure>
					<div class="data pull-left"><p><?php the_time('j') ?>/<?php the_time('m') ?></p></div>
				<div class="clear"></div>
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail( '340x190' );?></a>
					<a href="<?php the_permalink();?>">
						<figcaption>
							<p class="pull-left"><?php the_title();?></p>
						</figcaption>
					</a>
				</figure>
				<div class="redes pull-right">
					<ul>
						<li class="facebook" ><a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><span class="fa fa-facebook"></span></a></li>
						<li class="twitter"><a onClick="window.open('http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=twitter&related=<?php echo urlencode("coderplus:Wordpress Tips, jQuery and more"); ?>', 'share', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)" rel="nofollow"><span class="fa fa-twitter"></span></a></li>
						<li class="google-plus" ><a onClick="window.open('https://plus.google.com/share?url=<?php echo urlencode(the_permalink()); ?>', 'shareplus', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><span class="fa fa-google-plus"></span></a></li>
					</ul>
				</div> 
				<div class="clear"></div>
			</div>
			<?php
				$category = get_the_category();
			?>
			<?php endwhile;?>
			<div class="col-lg-12">
				<a href="<?php echo get_category_link($category[0]->term_id );?>" class="btn btn-primary btn-green pull-right">Veja Mais</a>
			</div>	
		</div>
	</div>
</section>
<?php else:?>
<?php endif;?>
<?php wp_reset_postdata();?>

<?php
	$wp_query = new WP_Query();
	query_posts( array( 'post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'eventos'  ));
    if(have_posts()):?>
<section class="row eventos">
	<div class="container">
		<div class="col-lg-12">
			<h2>Eventos</h2>
			<?php 
	            while ($wp_query -> have_posts()) : $wp_query -> the_post();
           	?>
           	<?php
            	$title=urlencode($titulo);
                $url=urlencode($link);
               	$image=urlencode($thumb_url);
               	$onde = get_post_meta($post->ID, 'onde', true);
               	$quando = get_post_meta($post->ID, 'quando', true);
               	$inscricoes = get_post_meta($post->ID, 'inscricoes', true);
            ?>
            <?php 
		        $thumb_id = get_post_thumbnail_id();
		        // A URL da imagem
				if ( $thumb_id )
		        $thumb_url = wp_get_attachment_url( $thumb_id );
            ?>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 box-evento">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 data">
					
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 meio" style="background:url(<?php echo $thumb_url;?>)no-repeat center;background-size:cover;">
					<div class="caption">
						<div class="blur"></div>
						<div class="caption-text">
							<h3><?php the_title();?></h3>
								<?php the_excerpt();?>
							<a class="btn btn-primary btn-green" href="<?php the_permalink();?>"><span class="fa fa-plus"></span> Leia</a>
						</div>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 compartilhe">
					<ul>
						<li class="facebook" ><a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><span class="fa fa-facebook"></span></a></li>
						<li class="twitter"><a onClick="window.open('http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=twitter&related=<?php echo urlencode("coderplus:Wordpress Tips, jQuery and more"); ?>', 'share', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)" rel="nofollow"><span class="fa fa-twitter"></span></a></li>
						<li class="google-plus" ><a onClick="window.open('https://plus.google.com/share?url=<?php echo urlencode(the_permalink()); ?>', 'shareplus', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><span class="fa fa-google-plus"></span></a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<?php
				$category = get_the_category();
			?>
			<?php endwhile; ?>
			
			<div class="col-lg-12">
				<a href="<?php echo get_category_link($category[0]->term_id );?>" class="btn btn-primary btn-green pull-right">Veja Mais</a>
			</div>	
		</div>
	</div>
</section>
<?php else:?>
<?php endif;?>
<?php wp_reset_postdata();?>
<?php }else{?>
<section class="row noticias">
	<div class="container">
		<div class="col-lg-12">
			<h2>RESULTADO DA BUSCA PARA: <?php echo $_GET['s'];?></h2>
			<?php
                if(have_posts()):
                while (have_posts()) : the_post();
             ?>
           	<?php
            	$title=urlencode($titulo);
                $url=urlencode($link);
               	$image=urlencode($thumb_url);
            ?>
			<div class="box-home col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<figure>
					<div class="data pull-left"><p><?php the_time('j') ?>/<?php the_time('m') ?></p></div>
				<div class="clear"></div>
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail( '340x190' );?></a>
					<a href="<?php the_permalink();?>">
						<figcaption>
							<p class="pull-left"><?php the_title();?></p>
						</figcaption>
					</a>
				</figure>
				<div class="redes pull-right">
					<ul>
						<li class="facebook" ><a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><span class="fa fa-facebook"></span></a></li>
						<li class="twitter"><a onClick="window.open('http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=twitter&related=<?php echo urlencode("coderplus:Wordpress Tips, jQuery and more"); ?>', 'share', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)" rel="nofollow"><span class="fa fa-twitter"></span></a></li>
						<li class="google-plus" ><a onClick="window.open('https://plus.google.com/share?url=<?php echo urlencode(the_permalink()); ?>', 'shareplus', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><span class="fa fa-google-plus"></span></a></li>
					</ul>
				</div> 
				<div class="clear"></div>
			</div>
			<?php endwhile; else:?>
			<?php endif;?>
			<?php wp_reset_postdata();?>
		</div>
	</div>
</section>
<?php }?>





<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Escoteiros IFRN</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Google Fontes: PT Sans -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">



 </head>
  <body>

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




<div class="container">
        <div class="row">
<div class="col-md-11 slider-noticia" style="margin: 10px 45px">
 
<!-- Carousel-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <img src="<?php bloginfo('template_url'); ?>/images/pt.png" class="img-responsive">
      <div class="carousel-caption">
        <h3>Inglaterra</h3>
        <p>England</p>
      </div>
    </div>
    <div class="item">
     <img src="<?php bloginfo('template_url'); ?>/images/es.png" class="img-responsive">
      <div class="carousel-caption">
        <h3>Espanha</h3>
        <p>España</p>
      </div>
    </div>
    <div class="item">
     <img src="<?php bloginfo('template_url'); ?>/images/en.png" class="img-responsive">
      <div class="carousel-caption">
        <h3>Portugal</h3>
        <p>Portuga</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <i class="fa fa-arrow-left" aria-hidden="false" style="top: 220px"></i>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <i class="fa fa-arrow-right" aria-hidden="false" style="top: 220px"></i>
			    <span class="sr-only">Next</span>
			  </a>
</div>
</div>
</div>
</div>



<div class="width-full-box">
<div class="container">
<div class="row">
<div class="title-box"><h4>Notícias</h4></div></div>
          <div class="row">

            <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifnc.png"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Lançamento da Insígnia Mares Limpos</a></h1>
            </div>

            <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifna.png"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Especialidade criada por Escoteira é aprovada pela Direção Nacional</a></h1>
            </div>

             <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifnb.jpg"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Escoteiros realizam curso no Museu Aeroespacial</a></h1>
            </div>


          </div>    </div>    </div>



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



    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  </body>
</html>




<?php get_footer();?>






