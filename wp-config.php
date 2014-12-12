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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ']`u. z&_i F$V?,zr78yh]0Td0wRBq&oe_*|v-l<{-h15!:II^N~I*{?#~O?hAn.');
define('SECURE_AUTH_KEY',  '#Rf:hThW>O&DrsL*Cu}C54*zbM|B79<,BKVUxkdi8NMITsN&+-E)xm`yR2J/Jzx{');
define('LOGGED_IN_KEY',    'x_,V<#qpz(Q5Xa^PjHDC3=[kQ=f+CM&d]:{Of~Vq}9+=_bg6Pc9i@?.0K;~`|O@G');
define('NONCE_KEY',        'I1Wu,0Q$E>>.vh]0:HI-,^B.!qR{uC,WYRvU?4?~)6YGX|Tb 9VAFK=}AKq&aN?b');
define('AUTH_SALT',        'egbKcfMuARcE+SjR|->^7##;-|eY_lMrml^tNeXX~7Dy(/Lq0CPEr?3.Bs`LFY`?');
define('SECURE_AUTH_SALT', 'uCp|]2 zi^Uws@GC1aYs+2l.GDd,-U{K~g9GOY$u/RX=1mAnPrH6,{@d>*u:U89>');
define('LOGGED_IN_SALT',   '<?p/3{s.@AP}R+z$! O7GF2P~<7J(+pyUO1y#(4;J1sLTjFmJ|xB0:XSt,pN* 8t');
define('NONCE_SALT',       's*jrG-F&O3&$0}[&a GA+?>aZU0@/eSb/I!1Ai;6^R+I7bfHfPvQ:s|YoZf^hirN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
