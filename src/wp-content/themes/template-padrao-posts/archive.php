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
<section class="row noticias">
	<div class="container">
		<div class="col-lg-12">
			<h2><?php wp_title(''); ?></h2>
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
			<?php wp_pagination();?>
			<?php wp_reset_postdata();?>
		</div>
	</div>
</section>
<?php get_footer();?>