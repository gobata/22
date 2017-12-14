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
        "Now, on to the world's stage"<br/>
        - いよいよ世界戦 -
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
        設立から約３年。当たり前の話ですが、当初はテレビ局からの番組発注など一つもなく、<br/>
        十年後はおろか一年後、この会社がどうなっているのか全くイメージが湧かぬまま<br/>
        闇雲にスタートを切ったことを思い出します。<br/><br/>
        しかし今、順調に取引実績は拡大し続け、昨年はゴールデンのレギュラー枠を任されるなど、<br/>
        テレビ業界で徐々に弊社の認知度も上がってまいりました。<br/>
        社員も一人、また一人と増え、信頼できるフリーランスの仲間たちの協力体制も整い、<br/>
        真っ暗だった視界の先にはっきりと輪郭を持った目標が見えて来ました。<br/><br/>
        “2018年”…この年を私たちは飛躍の一年とし新たなチャレンジに打って出ます。<br/>
        その手始めが「福岡オフィス開設」や「インバウンド事業」です。<br/>
        〈テレビの枠を広げ、さらにテレビの枠を飛び出し、活躍の場を積極的に創出していく〉<br/>
        スペースパンダ２２が次に目指すのは、あらゆる産業でエンターテインメントを生み出す<br/>
        総合的なソフトメーカーです。
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
