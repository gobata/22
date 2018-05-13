<?php
/**
 * Template Name: page-panda-film
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage SpacePanda22
 * @since SpacePanda22
 */

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PANDA FILM</title>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<link href="http://stest-stest.sakura.ne.jp/panda/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php get_stylesheet_uri(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pure-drawer.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/pc_style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/panda_film.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/drawer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.imageScroll.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php wp_head(); ?>
</head>


<div class="wrap">
  <div class='panda-film-box'>
    <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf01_header.png'/>
    <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf02_movie_section.png'/>
    <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf03_movie_contents.png'/>
    <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf04_facebook.png'/>
    <!-- <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf05_app.png'/> -->
    <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf06_price.png'/>
    <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf07_flow.png'/>
    <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf08_inquiry_section.png'/>
    <img src='<?php echo get_template_directory_uri(); ?>/images/panda_film/pf09_contact.png'/>
  </div>
</div><!--wrap-->

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<div class="footer_wrap">
<footer>
  <div class='footer_site_links'>
    <ul>
      <li><a href='<?php echo home_url(); ?>/tokyo/company/'>(c) 株式会社スペースパンダ22</a></li>
    </ul>
  </div>
</footer>
</div><!--footer_wrap-->
<?php wp_footer(); ?>
</body>
</html>
