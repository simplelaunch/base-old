<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define( 'WP_PLUGIN_URL', 'https://zombi.dev/base/plugins' );
define( 'WP_PLUGIN_DIR', '/app/public/base/plugins' );

//define( 'DBI_AWS_ACCESS_KEY_ID', 'XXXXXX' );
//define( 'DBI_AWS_SECRET_ACCESS_KEY', 'XXXXXX' );
//
define( 'WPCOM_API_KEY', 'd0dbdc8cbbf4' );

// GPL Kit
define( 'GPL_KIT_API_KEY', 'wc_order_58453ab30ea78_am_ZDDhnBCo6GHH' );
define( 'GPL_KIT_EMAIL', 'michaelmizner@gmail.com' );
//
//define('AMAZON_SES_USERNAME', 'XXXXXX');
//define('AMAZON_SES_PASSWORD', 'XXXXXX');
//define('AMAZON_SES_EMAIL', 'XXXXXX');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'ycL_wEwnrum-`qAIZ6nkSUfei1]*i|Y)f4&t>r?]:)y_2su{fOMjg(Cn$DS_Vr q' );
define( 'SECURE_AUTH_KEY', 'g%T/}Z4vA.$~+|%$a@bIfhC,s./b?6S,}9_(6s0Bl1hZLb2/]G[V+J8aJn@c;L|8' );
define( 'LOGGED_IN_KEY', ',W_gJ}oM3DyQAHZ<nkj({MQt3{m`yU$nl5gCTNDMDwojK^Kik~}uJcBVpQ-K|)&Q' );
define( 'NONCE_KEY', 'a6^7t3~:9Uh,YPz3lOi|R:_PR4:0ncB?)58$:UVDjbmlCG@,DEy(f7NuyN;O/mS8' );
define( 'AUTH_SALT', '{:rJDU114_,x*GJX1|C0Q4]/RfG,Z-.s,_y}G7tH]`840`G^f4`7j.%rr)EB3C=2' );
define( 'SECURE_AUTH_SALT', '~N&okv,!<&k{v~#5u8]zYH8<{1zl3^15F=C)pN_(1pm! a4LcFQ6kDA5N//as.>D' );
define( 'LOGGED_IN_SALT', 'IM@Vt/>+7])o}  SZ,=aNs5p}5zc-ZJ/Hq/4IeI-hs|&1v(qb)C#qax%!a#+ZcUT' );
define( 'NONCE_SALT', 'j28aGH9 B#PybZw!Y79lwKJ|g~>K)8^b15br6kny(j,+.Qi>9yG-G4O:MPy2keSr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
function _log( $message ) {
	if ( WP_DEBUG === true ) {
		error_log( "*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*" );
		foreach ( func_get_args() as $arg ) {
			if ( is_array( $arg ) || is_object( $arg ) ) {
				error_log( print_r( $arg, true ) );
			} else {
				error_log( $arg );
			}
		}
		error_log( "*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*" );
	}
}

define( 'JETPACK_DEV_DEBUG', true );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
