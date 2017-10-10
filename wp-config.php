<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wordpress');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'wordpress&');

/** MySQL のホスト名 */
define('DB_HOST', 'ip-10-0-7-88.ap-northeast-1.compute.internal');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/** SITE URL */
define('WP_HOME', 'http://yanase-agetech-lb-1651235706.ap-northeast-1.elb.amazonaws.com');
define('WP_SITEURL', 'http://yanase-agetech-lb-1651235706.ap-northeast-1.elb.amazonaws.com');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ac&G7Je%%#g(Q6:3EY3W.~aL(T@/)N1(qA2XIZhZKb{v8MYep?Wt2UM=WlA(y`+B');
define('SECURE_AUTH_KEY',  'Z<EW#ijI(|I0!.2v]>@TG{u!%VB$,O1pcajzN@]u^*z,.:G?b7BIsu`N!,Yk tPa');
define('LOGGED_IN_KEY',    '=;lr>u f!NAO^le-4^jrK]%dQYc4+4:xbC1CP_U?[JorgOK%1@a$JjQj,)D)_D,J');
define('NONCE_KEY',        'mWW}t+>#mI5I>c,uvM|bTK`@Fe/qIy<!3twX94;,/CXX6iNTZd>1l>Ht[]3!<rjh');
define('AUTH_SALT',        'P_g{/qd@S`#7&FK8^%`MMxah3L^G]zM:0pY-w@{=knT6?EsN?JTJhy~/g3)e~*HH');
define('SECURE_AUTH_SALT', 'JCbkeSEx]6QA`C^qXMTU.s< Rzl`1aoM2NuAHxSNc>^ALGE1YM>Z!NKN=YEXmW}7');
define('LOGGED_IN_SALT',   'uq;tDNtbF$N.n^On>Wt<^RSn:b*hbuB0pAs,^2A=+tE/p)oTrX4kXao:EBX|;cP:');
define('NONCE_SALT',       'dg6S%({wLO:p|6z>I74Ev:*bphV5g(v.4n=S^6qUmxo^#/fmCK%^2ow4T:V4~5`r');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

// デバッグモードの場合ログファイルに保存
if ( WP_DEBUG ) {
    // debug.log ファイルに記録
    define( 'WP_DEBUG_LOG', true );
    // ブラウザ上に表示しない
    define( 'WP_DEBUG_DISPLAY', false );
    // ブラウザ上に表示しない
    @ini_set( 'display_errors',0 );
}

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
