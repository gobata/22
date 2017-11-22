<?php
    global $home_url;
    global $tpl_dir;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content="">
<?php if(is_home()): ?>
<title></title>
<?php else: ?>
<title><?php wp_title(''); ?> | <?php bloginfo('name');?></title>
<?php endif; ?>
<?php if(is_home()): ?>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:url" content="<?php echo $home_url; ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:image" content="<?php echo $tpl_dir; ?>/images/logo.png">
<meta property="og:locale" content="ja_JP" />
<?php else: ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:locale" content="ja_JP" />
<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large'); ?>
<?php endif; ?>
<?php if(is_single() && has_post_thumbnail() ): ?>
<meta property="og:image" content="<?php echo $image_url[0] ?>">
<?php elseif(!is_home() && !is_page() ): ?>


<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pure-drawer.css">

<link href="favicon.ico" rel="shortcut icon" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css<?php echo '?date=' . time();  ?>">

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/drawer.css">
<link rel="stylesheet" type="text/css" href="css/sublimeSlideshow.css" media="all" />
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
<body <?php body_class('drawer drawer--right'); ?>>

<header class="clearfix">
<h1 class="header_logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/parts/header_logo.png" alt="spacepanda22"></a></h1>

<nav>

<?php wp_nav_menu(
    array(
        'container' => false ,
        'items_wrap' => '<ul class="gnav clearfix">%3$s</ul>'
    )
); ?>

</nav>
</header>