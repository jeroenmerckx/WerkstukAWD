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
define('DB_NAME', 'Wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', true);
define('SAVEQUERIES', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7,U#+OYiXn%De|<>`1I4N,nG.>]k4q^|71|F1B*+o5V1xWxW6Ul%w+e(S(m)F!yq');
define('SECURE_AUTH_KEY',  'ZX:5=w-fh:Xa1Q6I>3eBXg#K}|xG~Z?+/^:l)!B?ap3mF98wDMC#{2A.?7z?4S6b');
define('LOGGED_IN_KEY',    '> U@vEO,Ls2B7Gf4A!TZ!THx;6X-z>L|-)W*s&[NGP@SOYUP-{rji-`H*<j/><XL');
define('NONCE_KEY',        'bzpT0l}`^@d*oLCXJP2rPfUiE/B2;/w,W]}oa@PRAjA8&pw^-p^b_Hd,cowyy=`e');
define('AUTH_SALT',        '-b$QfcYHf0^-c010smK<y6cpQQH#};tu#-3*HT1Itn76P(y!c>5q:S+07M(Rh^Lr');
define('SECURE_AUTH_SALT', '#pqs1506E|/]f+!Bi`3kNny9r[g**~.]{b&(wO61coToW-q{R?]+;Tswfuuy|y-,');
define('LOGGED_IN_SALT',   'dA6|Bzv |XRedd}lWkU->#`hgdHT<,`vWJH{|%`kMa|~0AN|vPIG^N|itZyW+?c/');
define('NONCE_SALT',       'u~@<nC)~QV]Kp$jUDz#a-ai;:r^coR,}{y|k|&Wv&*j:/v+|-#2ck09S|.l?+ioK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_jm';

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
