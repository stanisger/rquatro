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
define('DB_NAME', 'rquatro');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ']v9)xAmX{ T7F1+RXTPe6h$WFb}U<}*{Bz3~vsu[;Qy~Xx{*@7o,Cis<2T0J[d26');
define('SECURE_AUTH_KEY',  '.zSRq-)}2ZL3=++KQI<l6hw]8Srrmrz:V<|TKh`,s7! 47#ix%M|B![Cwzk?UI;X');
define('LOGGED_IN_KEY',    '-ac.Q&^CS 1tq<[o][V|R`E[ SF=JMFuu6E$ p[p:K:ZxKX4z6c8.[ w.i;8gAZ4');
define('NONCE_KEY',        'E+web#Fo34URdU` 6~X^:%TQboI>Fg9&}?W,uQKIB^%BRzl ;J+*L_qT2{$G)HKW');
define('AUTH_SALT',        'K)IIT>Ey_/`N4(]TjA&o./6Xe1&CrB}?T4l32F/`^7E>Qrn_2C5  !D[<NpP`h4N');
define('SECURE_AUTH_SALT', 'C(t zK`sb],/,Gw[vL%9.B1x]#tHM8XhywMNM)zw6K4bT0-,e9f@%twJO<*dc.Iw');
define('LOGGED_IN_SALT',   'kM#.z#an%yK72)W(h :jryI 8>UgMG4*IJ4e*9G$eVF+{lL`3dQT:#Yb{TCJJgdQ');
define('NONCE_SALT',       'h]Qw%*hUY:?;`SZ$/a= Q&Kh#Oc@xKVD:u~O$)@kAHR.wU X;16ZL`9dkLFzY6DV');

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
