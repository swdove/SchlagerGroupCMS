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
define('DB_NAME', 'schlagergroupcms');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tHS#:pMyIZHZzWyw[H5}K!yh~3j)Q%5~U;K)-#Q+CR7J@Dozk]SqECZo0T=qd o]');
define('SECURE_AUTH_KEY',  'REZ]qR1#[[(]jZdE,9qN-5D.-dJ7ejY.d_TOd(-s8IvRg{A9ZSGK]-<NbXE*q=jn');
define('LOGGED_IN_KEY',    ']Y%R<+T&CO3^*k?+kti[!M0e<?*XJiZ7ZAo5W#Inv ic;hz=kd-N6uM$J!e#Z8H8');
define('NONCE_KEY',        '_IQiNOMz.U46{ie@~-G}9z~UF!W!Qu}i6z]0pIr+puM|fOj(y3~S8h{WRZnqXoMJ');
define('AUTH_SALT',        '_-e}iiu$lO3ds@v@(U1v$mXq{Y%XJ.`7W7YSt<]/+j%<ar00V:E=8j`ksMsd}.x5');
define('SECURE_AUTH_SALT', '=,J6<y<S9!HE>Fq{X!{UNmG7r;9Kqjn5Ay2y+K8tom$d<(}+`=d?,=+7N9SOIU}M');
define('LOGGED_IN_SALT',   'cQ-mU/m@p{w+sD9?E,Sx@ICWaNCRB5*5eao-M?rcm|ad}g[=wDaSYlxVe<Pts5k(');
define('NONCE_SALT',       'J:,trVr?K^Ju5V0(B$4,A&[W@(,0^aF+Pe/J ZZe=QI@}sZj/xN?U4=aXW-41uXW');

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
