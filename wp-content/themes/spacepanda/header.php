<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php wp_title(''); ?> | <?php bloginfo('name');?></title>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<link href="http://stest-stest.sakura.ne.jp/panda/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php get_stylesheet_uri(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pure-drawer.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sublimeSlideshow.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/pc_style.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sublimeSlideshow.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/drawer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stickystack.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="clearfix">
    <div class='header_contents'>
      <h1 class="header_logo">
        <a href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/images/parts/header_logo.png" alt="spacepanda22">
        </a>
      </h1>

      <?php if ( is_home() || is_front_page() ) : ?>
        <!-- <nav class="sp-none">
          <?php wp_nav_menu(
            array(
              'container' => false ,
              'items_wrap' => '<ul class="gnav clearfix">%3$s</ul>',
              'theme_location'=> 'header_menu'
            )
          ); ?>
        </nav> -->
      <?php endif; ?>



      <!-- <?php if (is_page('inbound') || is_parent_slug() === 'inbound') : ?>
        <nav id="inbound-gnav">
          <?php wp_nav_menu( array(
            'container' => false ,
            'items_wrap' => '<ul class="gnav clearfix">%3$s</ul>',
            'theme_location'=>'inbound_menu'
          ) ); ?>
        </nav>
      <?php endif; ?> -->
    </div>
    <!-- スマホ用メニュー -->

    <div class="pure-container pc-none" data-effect="pure-effect-scaleRotate">
      <input type="checkbox" id="pure-toggle-left" class="pure-toggle" data-toggle="left"/>
      <label class="pure-toggle-label" for="pure-toggle-left" data-toggle-label="left">
        <span class="pure-toggle-icon"></span>
      </label>

      <?php if ( is_home() || is_front_page() ) : ?>
        <nav class="pure-drawer" data-position="left">
          <?php wp_nav_menu(
            array(
              'container' => false ,
              'items_wrap' => '<ul>%3$s</ul>',
              'theme_location'=>'header_menu'
            )
          ); ?>
        </nav>
      <?php endif; ?>


      <?php if (is_page('tokyo') || is_parent_slug() === 'tokyo') : ?>
        <nav id="tokyo-gnav" class="pure-drawer" data-position="left">
          <?php wp_nav_menu( array(
            'container' => false ,
            'items_wrap' => '<ul class="gnav clearfix">%3$s</ul>',
            'theme_location'=>'tokyo_menu'
          ) ); ?>
        </nav>
      <?php endif; ?>

      <?php if (is_page('fukuoka') || is_parent_slug() === 'fukuoka') : ?>
        <nav id="fukuoka-gnav" class="pure-drawer" data-position="left">
          <?php wp_nav_menu( array(
            'container' => false ,
            'items_wrap' => '<ul class="gnav clearfix">%3$s</ul>',
            'theme_location'=>'fukuoka_menu'
          ) ); ?>
        </nav>
      <?php endif; ?>
    </div>


</header>
