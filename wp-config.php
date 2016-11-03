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
define('DB_NAME', 'meowth');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '2<v{Vr)h,&nS.wTB');
// J76!*y4^GdIj^h5Oqu

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<+hfk%DN?G/B[++T~OYjuM_~1}&;P5c<cWAcG/x=QR1/mPl;QYa%x%~:e],oq.?I');
define('SECURE_AUTH_KEY',  'ID-:x|8:&>dhp_j8~-r,|fn_^rH{&OSQ`=jL+NNOepp=[~2epGX1CEIEqARo::RT');
define('LOGGED_IN_KEY',    '.```[cTotp^P-TXFay#aP>VIs`neJ7!cU&w(5;Z#2b?+gTR#9$2 AUCPE b3Wsl!');
define('NONCE_KEY',        'ch,q+(B~K@AS-}-El%2th=!9@G;!LJb-9$3i1-W> %&cSuYU`V@RMyx|-#P;H52[');
define('AUTH_SALT',        ' eY^6|%-uP^&a)4dTq7XitAq-Sl;Vxf+cy,&h&(}/:3I214.__C-7AWG9%p7MY`s');
define('SECURE_AUTH_SALT', '|.J/2fcSfNwfFV-VL-j~1@~7H!xl#(6QK(L9$t]*^+-=uvsJ]1m.Mru5z{kz!oR!');
define('LOGGED_IN_SALT',   '&;fUb^ {Qo DIC%%H<Le[rdk-,oOH$-IzruesdLNd<L<Ci~G+T~5svz%eWS17!sy');
define('NONCE_SALT',       'J7NOs6-7|qzNjHI6QWZ.g0%]LvWU43WErq).jc-.Ft<RCiq&A#|,}Y+PMM%O&;SF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
