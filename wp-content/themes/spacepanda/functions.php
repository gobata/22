<?php

// パス定義
$home_url = esc_url( home_url('/') );
$tpl_dir = esc_url( get_template_directory_uri() );

//ウィジェット
register_sidebar();
register_sidebar(2);
register_sidebar(3);
register_sidebar(4);


function hideWidgetTitle($title) {
    $title = trim($title);
    if ($title === 'category') {
        return '';
    } 
}
add_filter( 'widget_title' , 'hideWidgetTitle' );


// カスタムメニュー
add_theme_support('menus');


//サムネイル
add_theme_support('post-thumbnails');

//アイキャッチ用画像サイズ指定
set_post_thumbnail_size( 90, 90, true );

//サイドバー用画像サイズ指定
add_image_size('thumb70',70,70,true);

//サイドバー用画像サイズ指定
add_image_size('thumb100',100,100,true);

//アーカイブ用画像サイズ指定
// add_image_size('thumb120', 120, 120, true );
add_image_size('thumb120', 193, 135, true );


//ページネーション
function responsive_pagination($pages = '', $range = 4){
  $showitems = ($range * 2)+1;

  global $paged;
  if(empty($paged)) $paged = 1;

  //ページ情報の取得
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i=1; $i <= $pages; $i++)     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
        echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
      }
    }
    //1つ進む
    echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
    //最後尾へ
    echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
    echo '</ul>';
  }
}

// テーマのタグクラウドのパラメータ変更
function my_tag_cloud_filter($args) {
    $myargs = array(
        'smallest' => 10, // 最小文字サイズは 10pt
        'largest' => 10, // 最大文字サイズは 10pt
        'number' => 30,  // 一度に表示するのは30タグまで（0で無限)
        'echo' => false,  // wordpress4.4以前の人はこの行は不要
    );
    return $myargs;
}
add_filter('widget_tag_cloud_args', 'my_tag_cloud_filter');

// プラグイン読み込みのバージョン情報を削除
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

//generator情報削除
remove_action('wp_head', 'wp_generator');

// メールアドレスでログイン
function login_with_email_address($username) {
  $user = get_user_by('email',$username);
  if(!empty($user->user_login))
  $username = $user->user_login;
  return $username;
}
add_action('wp_authenticate','login_with_email_address');

// ログインメッセージ変更
function change_username_text($text){
  if(in_array($GLOBALS['pagenow'], array('wp-login.php'))) {
    if ($text == 'ユーザー名') {
      $text = 'ユーザー名 又は メールアドレス';
    }
  }
  return $text;
}
add_filter( 'gettext', 'change_username_text' );


// フッターWordPressリンクを非表示に
function custom_admin_footer() {
 echo 'spzce-panda';
 }
add_filter('admin_footer_text', 'custom_admin_footer');

// Update非表示
function update_nag_hide() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action( 'admin_init', 'update_nag_hide' );


//概要（抜粋）の文字数調整
function custom_excerpt_length( $length ) {
     return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
  return '・・・';
  // return '';
}
add_filter('excerpt_more', 'my_excerpt_more');


//プラグイン更新通知を非表示
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

/**
 * 固定ページのみ自動整形機能を無効化します。
 */
function disable_page_wpautop() {
	if ( is_page() ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );


