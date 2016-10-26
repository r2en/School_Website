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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 's12161te');

/** MySQL データベースのユーザー名 */
define('DB_USER', 's12161te');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '8ofZ42ep');

/** MySQL のホスト名 */
define('DB_HOST', 'webdb');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>~EISddThN6Av1/jr8W%T&K`~hRf)r?9>mo.hdX/4Y5X#?o+ZGfY)E$VTIhm}3SC');
define('SECURE_AUTH_KEY',  ')f&=<=_9y7jAe`KAZH*=Gdt_iGLf$&IfU*SYGh41{dZ@P^yzHRB 2k&J4$f.1_B`');
define('LOGGED_IN_KEY',    ':lN1S;27!ZHda(0DF7[0.)O{~r8+r w%|>>N@W+JGi#)pYX.g1{z?PZ#)a|P5)gL');
define('NONCE_KEY',        ')cJ4sMcei2a+PCqbZd7+2hUz):1KxD|QAIemhts-}:t[eB-LJW8#Qx,a@xPt{P[J');
define('AUTH_SALT',        'G8Jdz%7=@Z6C#A4m00!vv7.AG}``Oto%y~aaiJ|;#Z`jfmMNWT{(RaNmD#-g;Y4@');
define('SECURE_AUTH_SALT', '%denZ]3OBgD0T,3AnKi%ze}o2-6%p5s&dk<*;De<kcdV+2N/s9#wCR_c4qUPINnp');
define('LOGGED_IN_SALT',   'M-M`N8rD5hIf.3&n~1;G&`}uz5)cMng/iMV=#Le/sOSP30[WOSWNdU]D[m<{vG7=');
define('NONCE_SALT',       '/0~cC*{98x[1]:[t6$R `xo+N!b]3_2r!oIV[~+6@(hR0p2,`HleC;Z_>><sMfdo');

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

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
