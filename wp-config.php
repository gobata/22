<?php
/**
 * WordPress 基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力しても構いません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のデータベース名 */
// define('DB_NAME', 'LAA0791881-zspq81');
//
// /** MySQL のユーザー名 */
// define('DB_USER', 'LAA0791881');
//
// /** MySQL のパスワード */
// define('DB_PASSWORD', 'dtlj3DWf');
//
// /** MySQL のホスト名 (ほとんどの場合変更する必要はありません。) */
// define('DB_HOST', 'mysql117.phy.lolipop.lan');
//
// /** データベーステーブルのキャラクターセット (ほとんどの場合変更する必要はありません。) */
// define('DB_CHARSET', 'utf8');
//
// /** データベースの照合順序 (ほとんどの場合変更する必要はありません。) */
// define('DB_COLLATE', '');



//ローカル用のDB接続先
define('DB_NAME', 'LAA0791881-zspq81');
/** MySQL のユーザー名 */
define('DB_USER', 'root');
/** MySQL のパスワード */
define('DB_PASSWORD', 'root');
/** MySQL のホスト名 (ほとんどの場合変更する必要はありません。) */
define('DB_HOST', 'localhost:8889');
/** データベーステーブルのキャラクターセット (ほとんどの場合変更する必要はありません。) */
define('DB_CHARSET', 'utf8');
/** データベースの照合順序 (ほとんどの場合変更する必要はありません。) */
define('DB_COLLATE', '');
define ('WP_SITEURL', 'http://localhost:8888/');
define ('WP_HOME', 'http://localhost:8888/');


// ** STG用設定 ** //
// define('DB_NAME', 'LAA0791881-stgsp22');//STG用データベース
// define('DB_USER', 'LAA0791881');
// define('DB_PASSWORD', 'dtlj3DWf');
// define('DB_HOST', 'mysql114.phy.lolipop.lan');
// define('DB_CHARSET', 'utf8');
// define('DB_COLLATE', '');
// define ('WP_SITEURL', 'http://staging.space-panda22.com/');
// define ('WP_HOME', 'http://staging.space-panda22.com/');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org の秘密鍵サービス}
 * で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、
 * すべてのユーザーを強制的に再ログインさせることができます。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'V/UC%38ER9>nB"=|HMp75I#wDEDQ0:ZqxHAPwt03,(VaFea9P0WcsJ`TDIHA*n0n');
define('SECURE_AUTH_KEY', '6e|]C+;9.REq,<rqP>as-Fti3+F2bI?jJ<lvaF_?Orn0YzxFk>S[1ABRFK4iK?|L');
define('LOGGED_IN_KEY', 'Uc9:sN<#~pzb>@-z<WCmZe;/Va>dJ67Zud9fCg~f2S2?x(20Mrpf?}x_F@_L/[LJ');
define('NONCE_KEY', '~<Q;"a!/#Qo7)Ce~XdAU|(u:,0U:rOrRvPb*!j6X.FqK>u3K_&l?Mjs,:("F/=1s');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp1_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de.mo を
 * wp-content/languages にインストールし WPLANG を 'de' に設定することでドイツ語がサポートされます。
 */
define ('WPLANG', 'ja');

// 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
