<?php get_header(); ?>

<div class="wrap">

  <div class='top_header'>
    <div class='top_image section' style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/2.jpg');">
      <div class='top_image_overlay'>
      </div>
    </div>

    <div class='top_image_overlay_small'>
      <div class='corporate_philosophy'>
        <span class='main_philosophy philosophy'>
          エンターテインメントに溢れる世の中で<br/>
          あらゆる星を輝かせる会社でありたい
        </span>
      </div>
    </div>
  </div>

  <div class='main'>
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
</div><!--wrap-->

<?php get_footer();?>
