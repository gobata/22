<?php get_header(); ?>

<div class="sub-contents index">

  <!-- コンテンツ -->
  <div class="post-wrap">index
    <?php if(have_posts()): while(have_posts()):
      the_post(); ?>
      <div class="post">
        <div class="new-entry-thumb">
          <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
            <a href="<?php the_permalink(); ?>" class="new-entry-title"><?php the_post_thumbnail('thumb100'); ?></a>
          <?php else: // サムネイルを持っていないときの処理 ?>
            <a href="<?php the_permalink(); ?>" class="new-entry-title"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="NO IMAGE" title="NO IMAGE" width="100px" height="100" /></a>
          <?php endif; ?>
        </div><!-- /.new-entry-thumb -->
        <div class="title-wrap">
          <p class="postinfo">
            <?php echo get_the_date(); ?>
            |
            <?php the_category(', '); ?>
          </p>
          <h2><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?></a></h2>
          </div>

        </div><!--post-->

      <?php endwhile; endif; ?>


      <!-- ページネーション -->
      <?php if (function_exists('responsive_pagination')) {
        responsive_pagination($additional_loop->max_num_pages);
      } ?>
    </div><!--post-wrap-->
  </div><!--sub-contents-->
</div><!--subwrap-->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
