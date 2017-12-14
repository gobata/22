<?php
/**
 * Template Name: page-fukuoka
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


<div class="wrap">

  <div id='office_contents'>
    <div class='sub_menu'>
      <?php get_sidebar('fukuoka'); ?>
    </div>

    <div class='top_office_header'>

      <div class='header_image'>
        <img src='<?php echo get_template_directory_uri(); ?>/images/tokyo_office03.jpg'/>
        <div class='office_name'>
          福岡オフィス
        </div>
      </div>

      <div class="office_main">
        <div class='office_news_list office_main_contents'>
          <div class='content_title'>
            <span class="glyphicon glyphicon-list"></span>
            ヘッドライン
          </div>
          <div class='content_box' style='max-width:initial;'>
            <?php echo get_post( 180 )->post_content; ?>
          </div>
        </div>

        <!-- <div class='office_link_list office_main_contents'>
          <a href='<?php echo home_url(); ?>/fukuoka/company'>
            <div class='office_link_contents'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/works/tokyo.jpg'/>
              <div class=''>会社概要</div>
            </div>
          </a>
          <a href='<?php echo home_url(); ?>/fukuoka/works'>
            <div class='office_link_contents'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/works.jpg'/>
              <div class=''>制作実績</div>
            </div>
          </a>
          <a href='<?php echo home_url(); ?>/fukuoka/message'>
            <div class='office_link_contents'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/message.jpg'/>
              <div class=''>社員からのメッセージ</div>
            </div>
          </a>
          <a href='<?php echo home_url(); ?>/fukuoka/recruit'>
            <div class='office_link_contents'>
              <img src='<?php echo get_template_directory_uri(); ?>/images/recruit.jpg'/>
              <div class=''>採用情報</div>
            </div>
          </a>
        </div> -->

        <div class='main'>
          <div class='content_title'>
            <span class="glyphicon glyphicon-star-empty"></span>
            SpacePandaの事業
          </div>
          <div class='line_content'></div>
          <div class='main_contents'>
            <a href='<?php echo home_url(); ?>/tokyo/'>
              <div class='inbound_department department'>
                <img src='<?php echo get_template_directory_uri(); ?>/images/works/tokyo.jpg'/>
                <div class='department_name'>東京オフィス</div>
              </div>
            </a>

            <a href='<?php echo home_url(); ?>/fukuoka/'>
              <div class='inbound_department department'>
                <img src='<?php echo get_template_directory_uri(); ?>/images/works/fukuoka.jpg'/>
                <div class='department_name'>福岡オフィス</div>
              </div>
            </a>

            <a href='<?php echo home_url(); ?>/inbound/'>
              <div class='inbound_department department'>
                <img src='<?php echo get_template_directory_uri(); ?>/images/works/inbound.jpg'/>
                <div class='department_name'>インバウンド事業</div>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>




</div><!--wrap-->


<?php get_footer(); ?>
