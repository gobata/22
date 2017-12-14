<?php
/**
 * Template Name: page-inbound
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage SpacePanda22
 * @since SpacePanda22
 */

get_header(); ?>

<div class='wrap inbound'>
  <div class='top_header'>
    <div class='top_image section' style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/2.jpg');">
      <div class='top_image_overlay'>
      </div>
    </div>

    <div class='corporate_philosophy'>
      <span class='main_philosophy philosophy'>
        "Now, on to the world's stage いよいよ世界戦"
      </span>
      <br/>
      <span class='sub_philosophy philosophy'>
        日本企業 × 映像コンテンツで国際競争力を勝ち取る
      </span>
    </div>
  </div>

  <div class='about_inbound content_bgcolor'>
    <div class='top_contents'>
      <div class='content_title'>
        <span class="glyphicon glyphicon-globe"></span>
        インバウンド事業
      </div>
      <div class='line_content'></div>
      <div class='content_description'>
        弊社は平成27年よりテレビ番組の制作会社として設立致しました。<br/>
        テレビの他にもイベント事業、ネット動画事業など様々なエンターテインメントの創出に日々尽力しております。<br/>
        <br/>
        そんな私共が今年よりインバウンド事業部を新たに創設致しました。<br/>
        <br/>
        テレビ制作で培ってきたノウハウをフルに活用し、<br/>
        インバウンド向けの動画制作・イベント企画を中心に<br/>
        大手企業では実現しにくい100%地域特性に応じたコンサルティング、<br/>
        さらに独自の送客ルートを活用したMICEの誘致など<br/>
        地域と二人三脚でインバウンド活性化に務めるDMC的企業を目指します。
      </div>
    </div>
  </div>


  <div class='news_list'>
    <div class='top_contents'>
      <div class='content_title'>
        <span class="glyphicon glyphicon-inbox"></span>
        ご挨拶
      </div>
      <div class='line_content'></div>
      <div class='content_box'>
        こんにちは、代表取締役社長の大保です。<br/>
        ............
      </div>
    </div>
  </div>

  <!-- 問い合わせフォーム -->
  <div class='content_bgcolor'>
    <div class='content_title'>
      <span class="glyphicon glyphicon-inbox"></span>
      お問合せ
    </div>
    <div class='line_content'></div>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
  </div>


</div>

<?php get_footer(); ?>
