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

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sublimeSlideshow.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/drawer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stickystack.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script>
$(function(){
    $('.wrap').stickyStack({
        containerElement: '.wrap',
        stackingElement: 'section',
        boxShadow: '0 -3px 20px rgba(0, 0, 0, 0.25)'
    });
})
</script>
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
      <nav class="sp-none">
        <?php wp_nav_menu(
          array(
            'container' => false ,
            'items_wrap' => '<ul class="gnav clearfix">%3$s</ul>'
          )
        ); ?>
      </nav>
    </div>
    <!-- スマホ用 -->
    <div class="pure-container pc-none" data-effect="pure-effect-scaleRotate">
      <input type="checkbox" id="pure-toggle-left" class="pure-toggle" data-toggle="left"/>
      <label class="pure-toggle-label" for="pure-toggle-left" data-toggle-label="left">
        <span class="pure-toggle-icon"></span>
      </label>

      <nav class="pure-drawer" data-position="left">
        <?php wp_nav_menu(
          array(
            'container' => false ,
            'items_wrap' => '<ul>%3$s</ul>'
          )
        ); ?>
      </nav>
    </div>


</header>
