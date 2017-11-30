<?php get_header(); ?>

<div class="container page">
<div class="row">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="col-md-11 conteudo-page" style=""> 
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</div>

<?php endwhile; else: ?>
<?php endif; ?>

</div>
</div>

<?php get_footer(); ?>