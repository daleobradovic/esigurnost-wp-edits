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
define('DB_NAME', 'ewp');

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
define('AUTH_KEY',         'S*yn>jE85-IbUh5DL$Wi<ToS{0a|To<Y>W~b5DUHer<Yg3W*vTvkhs@v}-<Yd!<}');
define('SECURE_AUTH_KEY',  '2=v)k^$-)!HyLn4LQkffQ;YDl{3.{*Zt|s}mM!Ew&}bK|p~uxN_Rc92=MIfZeXS6');
define('LOGGED_IN_KEY',    '4)fKl=/}xmWG~m>z^~>5@$v,wTO]Mn7 t^X;[njcTeZ8OluKNj4]h]ZT93N/r{:2');
define('NONCE_KEY',        '6^@?!j|[L_C;B$BTznXNp6^r|WP<i,Kiz]]w&cly}d9m5-+cZBDoV~Y+:)OqpSNd');
define('AUTH_SALT',        '6<.a1w~~nKrqgz!%Yo}hSG_~SsG<pCo<>+,_94zkyd-eB5{gxSVDBY_CjR$ OoCP');
define('SECURE_AUTH_SALT', 'l9xcg{)RPIw[ZXbt#|t5h[ !YL|,R(eo$DV]yn&={-dy{<Jx&&V7nFCx[Qd9qw}*');
define('LOGGED_IN_SALT',   'g kfNC1CmoH@LNg6H?aRo-_k6{h+FxPC({[dY.Zi+CPu#vsZ]pJHCdObcJ0d8tz_');
define('NONCE_SALT',       'eeN6PCxK|9K^)?a1o#_!@5Wac,,b-<0CO;l=.|ToLOe5*sSL *>e(ih@jP)r85:P');

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
