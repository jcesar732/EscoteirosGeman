	<div class="simula hidden-xs">
		<div class="pull-left">
			<?php 
				$face = get_field('facebook_home', 'option');
				$youtube = get_field('youtube_home', 'option');
				$twitter = get_field('twitter_home', 'option');
				$insta = get_field('instagram_home', 'option');
			?>
			<ul>
				<?php 
					if ($face != ''){
						echo "<li class='face'><a href='{$face}' target='_blank'><i class='fa fa-facebook fa-lg'></i></a></li>";
					}if ($youtube !=''){
						echo "<li class='you'><a href='{$youtube}' target='_blank'><i class='fa fa-youtube fa-lg'></i></a></li>";
					}if ($twitter !=''){
						echo "<li class='tw'><a href='{$twitter}' target='_blank'><i class='fa fa-twitter fa-lg'></i></a></li>";
					}if ($insta !=''){
						echo "<li class='ins'><a href='{$insta}' target='_blank'><i class='fa fa-instagram fa-lg'></i></a></li>";
					}
				?>
			
				
			</ul>
		</div>	
	</div>	
	<div class="row">
		<section class=" prefooter">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo_footer.png" alt="Escoteiros do Brasil - Educa&ccedil;&atilde;o e lazer para crian&ccedil;as e jovens" title="Escoteiros do Brasil - Educa&ccedil;&atilde;o e lazer para crian&ccedil;as e jovens">
		</section>
	</div>
	<footer class="row">
		<div class="container">
			<div class="col-lg-12">
				<div class="col-lg-4">
					<?php 
						if ( is_active_sidebar('sidebar-1') ) {
							dynamic_sidebar('sidebar-1');
						}
					?>
				</div>
				<div class="col-lg-4">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-bureau.png" class="imgcenter">
				</div>
				<div class="col-lg-4">
					<?php 
						if ( is_active_sidebar('sidebar-2') ) {
							dynamic_sidebar('sidebar-2');
						}
					?>
				</div>
			</div>
		</div>	
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.hover.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/scrollReveal.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>

   	 	<div class="clear"></div>
    </footer>  
    <?php wp_footer(); ?>  
    </body>
</html>