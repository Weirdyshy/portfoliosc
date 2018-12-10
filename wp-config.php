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
define('DB_NAME', 'portfoliosc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'pvEmz<:-Bf[skJbR(*3c*jMe9:g5H2Zn.X.#%BL(>}a`OV0I7/a?Hg>ug[[E{9R2');
define('SECURE_AUTH_KEY',  '7>EUBY5PhYQ=aG~0~fn)0DI+X}`wQ%$XG<$1z874.Ofn}^?,;Q]PVcTu!3{x4bV`');
define('LOGGED_IN_KEY',    'H_wYa]+envBF,-M6{4/p[f`vj44rq.GT(wt^]dB*c18sb5D$cRSui@7uz=$B[G}{');
define('NONCE_KEY',        'Lq@)ahJ*|fuvdo)ZJDxL=3Lo-7a&JBsPq+PF_E9]]PF><PyVx9<.HjTE<X{vq&+T');
define('AUTH_SALT',        '1U}3>n5V@`unC8VIr-`ebJs{/~Xm 5=%?FHU,/oFR;MPC*@!((il.J$-9wD-2W8f');
define('SECURE_AUTH_SALT', '2G nC!R&ekX!y?|k^zvd9tQFEP8RDhhqpo>|/L;9-`vh<sI@:4AFD3F=E?&&lK&Y');
define('LOGGED_IN_SALT',   'qP)c>uX,N2;dQj+c. iFg:%$R@<ZQFBo xtMiH`0A}X!vY)qCo)fn?Fj)2~4(e&+');
define('NONCE_SALT',       'D g[@$pTH!Jxv*fPUakW6%Z@9<p?10CU, %xp*d/P(TmEkq& ~k$v&0=DsZKc]1]');

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
