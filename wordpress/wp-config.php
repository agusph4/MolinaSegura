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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'hf(GCuh$!y[u=r+D7gv<US]BS9ce >>b5P{?gBFd u;J_`p;]]sfg?@?Y OK61Q{' );
define( 'SECURE_AUTH_KEY',  'PQ;0-_CN%3mc Iyhy`ITrdqS(RLQ&nau(9cW&;oma3hj}d[km=t~}tR(67K3m(8t' );
define( 'LOGGED_IN_KEY',    '^K.k)X|~a7vkx*mnp6l:XesxGOAqL0%JFwh#:=nI5+H`N,s/q)L}6jc[;.#y_Yj,' );
define( 'NONCE_KEY',        '7gCWV6GOfFnAsQ=+foI_GOF,IxrdDeZ}LNr2a8J`dN:35[pa}Qs92DA9xYJ#rI<b' );
define( 'AUTH_SALT',        '^GUaf.lc^PH-Y0(Vf5@[SLyW!Q&G7<j#AjyCn2izg^sm=W@ZB+k?}/F3:[j+<6-:' );
define( 'SECURE_AUTH_SALT', 'T5g@GwESB6pk*cO@nP#DpA{kf^&z&y4<l/I1,+{?XhW5Kbi0Vx2VS9gOn{Y#UCNK' );
define( 'LOGGED_IN_SALT',   '-$W&c8Y9[vul1L%%kWELd-bYG?ocU~r~X[/[m;(^iQJ]FXk}g%efizM[m4`Uq{L*' );
define( 'NONCE_SALT',       '!s]ZD?k(<sWOY8n8s:6CTFD#/(qAcXweEz$;e4[SYr&bYg95wSR.`TY&{c0(WxA4' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '172.28.0.120');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
