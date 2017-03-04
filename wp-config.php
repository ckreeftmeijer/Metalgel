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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'r/9!M}wIQZqLyxDmo$0CyITZ:g-d(B; 3966NZd!BIKp+Wir`8o1$IcXv$#>2a(#');
define('SECURE_AUTH_KEY',  'EX c+3ERUQZ*3dTMu991Y@A3btEg|/* n~^L04b,dYbjvfl@g^/#iLpH|YU1eN(*');
define('LOGGED_IN_KEY',    '8r}+}&iL/& TSxB-i(;93+E+tR6E?O,=7+n:H#9X8Hx)k?nd$/tDKYA^ia>P42:q');
define('NONCE_KEY',        'R^Mo-~C,jD^.U5Z:~KV~f$3e[o772S(3-Big|I.?%1tH8*A(l,%:OF#Q5A}riCLt');
define('AUTH_SALT',        'XRwWS^<mc*4|u81]@wa^59r$r;eYqs7;v% Y)|&=K{0!0)C](,#GUfcSLKz^BcRh');
define('SECURE_AUTH_SALT', 'BRVdwRheT`^]cRO8Sq(51DuQ:qwulYk^YaRflSP]05KXXJtf#ROV+15i](5gzQbE');
define('LOGGED_IN_SALT',   't]Z@y@|52{)mkpO]aNZG#l,lq9RN?WO#r,<B:,NJ.8 n=SfO{;hH#!FuaAK+MBZF');
define('NONCE_SALT',       '0jwEE?EIuzPdxwGCfv}Cj*^]$SlY47J-]p#nW&Vus/X<R)qTM!XK>vm Mz5O0u,e');

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
