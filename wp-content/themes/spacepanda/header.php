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
<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sublimeSlideshow.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/drawer.js"></script>
<?php if(is_front_page()): ?>
<script>
 $(function(){
        $.sublime_slideshow({
            src:[
            {url:"<?php echo get_template_directory_uri(); ?>/images/1.jpg"},
            {url:"<?php echo get_template_directory_uri(); ?>/images/2.jpg"},
            {url:"<?php echo get_template_directory_uri(); ?>/images/3.jpg"}
            ],
            duration:   7,
            fade:       1,
            scaling:    1.2,
            rotating:   2,
            overlay:    "<?php echo get_template_directory_uri(); ?>/images/pattern.png"
        });
    });
    
</script>
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="clearfix">
<h1 class="header_logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/parts/header_logo.png" alt="spacepanda22"></a></h1>
<nav class="sp-none">
<?php wp_nav_menu(
    array(
        'container' => false ,
        'items_wrap' => '<ul class="gnav clearfix">%3$s</ul>'
    )
); ?>
</nav>

<div class="pure-container pc-none" data-effect="pure-effect-scaleRotate">
  <input type="checkbox" id="pure-toggle-left" class="pure-toggle" data-toggle="left"/>
  <label class="pure-toggle-label" for="pure-toggle-left" data-toggle-label="left"><span class="pure-toggle-icon"></span></label>
 
  <nav class="pure-drawer" data-position="left">

<!-- ここがドロワーメニュー -->

<?php wp_nav_menu(
    array(
        'container' => false ,
        'items_wrap' => '<ul>%3$s</ul>'
    )
); ?>

      </ul>
  </nav>
</div>


</header>
