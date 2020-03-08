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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'titan_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$`{eI3ZN8QA_V^^^Ys]JH6j7<v>dp@ae]gg6Lj7!*[*i>[9:]nI*eteD*lDQKDk%' );
define( 'SECURE_AUTH_KEY',  'OqdEse~=>I(Xh!+n[|SBsI9r_8dXQ#zVr`ram_5N~W<scbj7ynbu7)xAjv~T[xEY' );
define( 'LOGGED_IN_KEY',    '+1,@G}gV@WYS`YFuurDxd>5cOfiv^:vq?Emzw4(RcrfQ<B#Lx;p>3RuIIu@+sq?^' );
define( 'NONCE_KEY',        '<p~KTvRq,O7bqg1|&*?aA7@.~sH^*Kek=in4/kq+Y$ dbIzF w,ANVVubJR#Y-C)' );
define( 'AUTH_SALT',        'p%N2F7ZvUI7VtO)@9Pm%M|;g~u,sR0-I;S5<i^X*W7guY }d{>?yr=!ki>s7zjM}' );
define( 'SECURE_AUTH_SALT', 'In_Ap ts5oy*z$WVkLl&]|b>};E44Z|v$zcxN,QRd4.uO|E~s=9:<Ne{3Bl2sR6C' );
define( 'LOGGED_IN_SALT',   'HguC&+<&_2/_5(k5TlOOf{6X?(!<]F|E4WtA7o5jh/bD8G?`s[Oc2,Mc2K47OLyK' );
define( 'NONCE_SALT',       'q]33LW+qiAhb^&ko=oj?RQJN(tD4@&l,|Hgby.+HM58e|SXHQAXZVAGUSKBGCN.i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
