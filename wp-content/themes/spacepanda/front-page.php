<?php get_header(); ?>

<div class="wrap">

  <div class='top_header'>
    <div class='top_image section' style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/4.jpg');">
      <div class='top_image_overlay'>
      </div>
    </div>
    <img class='spacepanda_logo2' src='<?php echo get_template_directory_uri(); ?>/images/space_panda02.png'/>

    <div class='company_name'>
      SPACEPANADA22
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
