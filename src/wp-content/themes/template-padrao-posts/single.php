<?php get_header();?>
<section class="row page bread">
	<div class="container">
		<div class="col-lg-12">
			<article>
				<div itemprop="breadcrumb">
					<?php wp_custom_breadcrumbs(); ?>
				</div>
			</article>	
		</div>
	</div>
</section>

<section class="row page">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<article>
				<?php 
					if(have_posts()):
					while ($wp_query -> have_posts()) : $wp_query -> the_post();
				?>
				<?php the_post_thumbnail( '1200x300', array('class' => 'imgcenter img-responsive') );?>
				<h2><?php the_title(); ?></h2><br>
				
				<?php the_content();?>
				<div class="redes pull-right">
					<ul>
						<li><p><strong>Compartilhe: </strong></p></li>
						<li class="facebook" ><a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><span class="fa fa-facebook fa-2x"></span></a></li>
						<li class="twitter"><a onClick="window.open('http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=twitter&related=<?php echo urlencode("coderplus:Wordpress Tips, jQuery and more"); ?>', 'share', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)" rel="nofollow"><span class="fa fa-twitter fa-2x"></span></a></li>
						<li class="google-plus" ><a onClick="window.open('https://plus.google.com/share?url=<?php echo urlencode(the_permalink()); ?>', 'shareplus', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)"><span class="fa fa-google-plus fa-2x"></span></a></li>
					</ul>
				</div> 
				<?php endwhile; else:?>
				<?php endif;?>
				<div class="clear"></div>
			</article>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<article>
				<h2>Últimas Notícias</h2>
				 <ul>
					<?php
						$wp_query = new WP_Query();
			            query_posts( array( 'post_type' => 'post', 'posts_per_page' => 10, 'category_name' => 'noticias'));
			            if(have_posts()):
			            while ($wp_query -> have_posts()) : $wp_query -> the_post();?>
					    	<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
	    			<?php endwhile?>
	    			<?php endif;?> 
	    			<?php wp_reset_query();?>
    			 </ul>
			</article>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<article>
				<h2>Últimos Eventos</h2>
				 <ul>
					<?php
						$wp_query = new WP_Query();
			            query_posts( array( 'post_type' => 'post', 'posts_per_page' => 10, 'category_name' => 'eventos'));
			            if(have_posts()):
			            while ($wp_query -> have_posts()) : $wp_query -> the_post();?>
					    	<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
	    			<?php endwhile?>
	    			<?php endif;?> 
	    			<?php wp_reset_query();?>
    			 </ul>
			</article>
		</div>
	</div>
</section>
<?php get_footer();?>