<!--?php /* Template name: Downloads */ ?-->
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
<section class="downloads row">
	<div class="container">
		<div class="col-sm-3">
    		<a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>
	    	<ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well tabela">
	    		<?php
				     $args = array('taxonomy' => 'categorias');
				     $my_categories = get_categories($args);
		  			?>
				  <?php foreach( $my_categories as $category ):?>
	        	<li><a href="#<?php echo $category->slug;?>" data-toggle="tab"><?php echo $category->name;?></a></li><hr>
	        	<?php endforeach; ?>
	           
	        </ul>
    </div>
    
    <div class="col-sm-9">
    	<div class="tab-content">
    		<?php
		     $args = array('taxonomy' => 'categorias');
		     $my_categories = get_categories($args);
		  	?>
		  	<?php foreach( $my_categories as $category ):?>
        	<div role="tabpanel" class="tab-pane fade" id="<?php echo $category->slug;?>">
        		<?php
	 	 		$wp_query = new WP_Query();
                query_posts( array('post_type' => 'down', 'categorias' => $category->slug, 'order' => 'ASC'));
                if(have_posts()):
                while ($wp_query -> have_posts()) : $wp_query -> the_post();?>
                <?php 
	                $thumb_id = get_post_thumbnail_id();
	                	
	                // A URL da imagem
	                if ( $thumb_id )
	                	$thumb_url = wp_get_attachment_url( $thumb_id );
                ?>
            	<div class="thumbnail clearfix">
                	<img src="<?php echo $thumb_url;?>" alt="<?php the_title();?>" class="pull-left col-lg-2 clearfix" style='margin-right:10px'>
                    	<div class="caption" class="pull-left">
	                      	<a href="<?php echo get_post_meta( $post->ID, 'upload_file', true );?>" class="btn btn-primary icon btn-green pull-right" target="_blank"><i class="fa fa-download fa-lg"></i> Download</a>
	                      	<h4>      
	                      		<p><?php the_title();?></p>
	                      	</h4>
                 		</div>
                 </div>
                 <hr>
                 <?php endwhile?>
				<?php endif?>
				<?php wp_reset_query();?>
           	</div>
           	<?php endforeach; ?>
        </div>
    </div>
	</div>
</section>
<?php get_footer();?>