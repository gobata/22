<?php get_header(); ?>


<div class="h1-outer">
<div class="wrap">
<h1 class="page-h1"><?php the_title(); ?></h1>
</div>
</div>




<?php if(have_posts()): while(have_posts()): the_post(); ?>


<?php the_content(); ?>

<?php endwhile; endif; ?>



<?php get_footer();?>


