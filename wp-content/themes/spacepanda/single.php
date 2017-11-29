<?php get_header(); ?>

<div class="h1-outer">
<div class="wrap">
<h1 class="page-h1">
<?php $cat = get_the_category(); ?>
<?php $cat = $cat[0]; ?>
<?php echo get_cat_name($cat->term_id); ?></h1>
</div>
</div>




<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="archives">
<article class="single-art">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php endwhile; endif; ?>
</article>
</section>

<?php get_footer();?>


