<?php
get_header(); ?>



<script>
 $(function(){
        $.sublime_slideshow({
            src:[
            {url:"<?php echo get_template_directory_uri(); ?>/images/1.jpg"},
            {url:"<?php echo get_template_directory_uri(); ?>/images/2.jpg"},
            {url:"<?php echo get_template_directory_uri(); ?>/images/3.jpg"}
            ],
            duration:   7,
            fade:       1,
            scaling:    1.2,
            rotating:   2,
            overlay:    "<?php echo get_template_directory_uri(); ?>/images/pattern.png"
        });
    });
    
</script>

<div class="wrap">
<main class="contents_area clearfix index">
<img src="<?php echo get_template_directory_uri(); ?>/images/parts/top_logo.png" alt="spacepanda22" class="top_logo">
</main>
</div><!--wrap-->



<div class="wrap">
<?php query_posts('showposts=2');
if (have_posts()) : while (have_posts()) : the_post(); ?>
<ul class="top-info">
<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
</ul>
</div><!--wrap-->
</div>
<?php endwhile; endif; wp_reset_query(); ?>










<?php get_footer();?>