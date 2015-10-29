<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cronica_ambiental');

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
define('AUTH_KEY',         'lirP3DL]o-0M#|w#_3Ygp)a5uHZP||{wNaa/zeM>Rb_M7#t,(oh$+*|$kiOuPm/z');
define('SECURE_AUTH_KEY',  '-G[j!8+BJ!}JrB)pBCPhQ efqBlT3Z8Sr:vnG&@A&&}mN<(PvYAf{Gz&N,cZm7L_');
define('LOGGED_IN_KEY',    'xsVoKO-xzz`G`AkQM6c5/}fLP2eR61d<0<C.90!x6IJQz+T,wJ1w8Me3} b+*[#o');
define('NONCE_KEY',        'z|>^--a@6?/N)Q[a[(mWzKXhk>rOt*m!qb#B,KHV&7+B` Q#Cj%A=N-Vh5JDGjd:');
define('AUTH_SALT',        'Atb7bd 2=:l$QkkkoPb>k//THGcBW7H$MY[,5i(7hD;@lG>#)/W~6lQg(cO6*zIR');
define('SECURE_AUTH_SALT', 'NYh}E0T:CN RuJ wA228cYmT5/S.Jtl2M|`lfTW%~XOJNqOM0GGjHN]3lwvS&2M|');
define('LOGGED_IN_SALT',   'Cmw;JL=7a+g@-Y*I2)RP[di{l7& s~-z:p;_!/6[bhp<E0 %|h$^$e*-xtF C+X~');
define('NONCE_SALT',       'D0}wjPDf~_c&Z:LtVSCHo%f:iC0:(E,vL[g.?fMP#IM;wR!qmP>#Oi_#EwKBaH9N');

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
