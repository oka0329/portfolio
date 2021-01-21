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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nrm-@z1S4/H=YWl=qoj@3[#(@TC%ec2jS-42C%!ktW0vS/3AD|#Bd1aMZzy|ijE-' );
define( 'SECURE_AUTH_KEY',  'V/Mf4](GjO%}N0#A=.CQbOTldf}!RFPW ?s4QDZ4C7 8.G5]a_76B+9)r3 OCNdC' );
define( 'LOGGED_IN_KEY',    'Z9>maFeebW7mfU<Ve2qZzrm(Lz5Er ChXzN-C9~4. -->.=Dd<QIDsKoF=G%.@Pm' );
define( 'NONCE_KEY',        'A}sQxAT W]gW{.%_l6-MCDPeE$R/s{?#Q0k4!,+:_i@9GT93coS?*z/{a(Z s;DS' );
define( 'AUTH_SALT',        'YiGDLG:rE;[&maJ>zNnFdc?/.OqR`O@flj@6%i3n8u7<e$1j]>/j%MTN;T`EE~n|' );
define( 'SECURE_AUTH_SALT', '.xOdXh{$,:h}tK}O0b`62H}.R.-@{xJz8;V=c4wk:Qr5# E<)9ZX+U.vh9ZGoVI,' );
define( 'LOGGED_IN_SALT',   'Ly;Sy[3A;{Bi-*C}J,X+xv!)9uwM&OcF ?DSBvj8Gf1]L;g1gvI{lXH$U{m3{A>I' );
define( 'NONCE_SALT',       '*=a_?Qd$*#u[UR<63[bhf0v5=iJPtw0Z86eZx B}b$tGcc$1#0 R;ff7HDa`|s]U' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
