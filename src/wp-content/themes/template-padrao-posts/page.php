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
		<div class="col-lg-12">
			<article>
				<?php 
					if(have_posts()):
					while ($wp_query -> have_posts()) : $wp_query -> the_post();
				?>
				<?php the_content();?>
				<?php endwhile; else:?>
				<?php endif;?>
			</article>
		</div>
	</div>
</section>
<?php get_footer();?>