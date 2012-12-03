<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_SERVER["DB_NAME"]);

/** MySQL database username */
define('DB_USER', $_SERVER["DB_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER["DB_PASS"]);

/** MySQL hostname */
define('DB_HOST', $_SERVER["DB_HOST"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(n_9,tOlBNIU9zm_+FcI$?~QrQ1k1nT44XZd0mXR_,jiC]p-Jnrp,w5vxyWF7S5D');
define('SECURE_AUTH_KEY',  'Do++`Z/Sk+i9BZ`!>3!-Gc{%VIB#TyI@N/A`+OkO*hz&ym?1OmY?^&$jDJQ0wBy ');
define('LOGGED_IN_KEY',    'uy]2ftHMJ9B<>*v^S[Xr)l*Qmu9#=IqDNdl_#yBdh.vi^f|KsyRmY+g_J-Xvq(uL');
define('NONCE_KEY',        'g(iFFwdlbSe=^BoIeDVWm$@-detX-0dXFkO!1.p^G`+#T`%.sIE,u>, Y`/Q8Z+l');
define('AUTH_SALT',        'pJ26TWj-6Lfw:5Uw|e*V-nJ+Q%+0tM+mP45;Xf@`#t]K&pz|nfkcH,n%Y~XnL93~');
define('SECURE_AUTH_SALT', 'N6^YMUo98ZQ9ju}:_!*V>NGpIdb26I0p%c(5k8M &zzcg-FXS!|O6URGAH+=5i1V');
define('LOGGED_IN_SALT',   '9Vc>(Q-AHFL?mV8*,X QcwX*2;:]u}!*pKvt~J6pdS%i%vz*d9BHU!BQZ3yiOTp6');
define('NONCE_SALT',       'y0n taKk<ZJM{S 0l7zm:EakiuzbYuDt YR8SCISY3`tQ}xOTjZ:3?qV@rnfg,A-');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
