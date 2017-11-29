<?php get_header(); ?>
  <div class="h1-outer">
    <div class="wrap">
      <h1 class="page-h1">
        <?php $cat = get_the_category(); ?>
        <?php $cat = $cat[0]; ?>
        <?php echo get_cat_name($cat->term_id); ?>
      </h1>
    </div>
  </div>
  <section class="archives">
    <main class="contents_area clearfix">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <article>
          <!-- ?php if(in_category('news')) : ?> -->
            <!-- <time>?php the_time('Y/m/d'); ?></time> -->
          <!-- ?php endif; ?> -->
          <h2>
            <?php the_title(); ?>
          </h2>
          <?php the_content(); ?>
        </article>
      <?php endwhile; endif; ?>
    </main>
  </section>
  <?php get_footer();?>
