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
define('DB_NAME', 'grabjet');

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
define('AUTH_KEY',         '~h^;I9O*k^eHj}$H;@/Apa`_f]tNzh5Qlu;h:W.uElYJ.itW|ptlDFeWCvcgwpgg');
define('SECURE_AUTH_KEY',  'W}V@|a-J8YI,9if0{uoF!]zHisuydI^(N,!Pc:6vM$&|YO-m:&&S{tUB5Y<-LqRr');
define('LOGGED_IN_KEY',    'I9};z,d9-2fhG>eA:DPM.,16MW!9NFQo/!bn(xVo&}-s%ri7<D9e^6R%fGzla7o=');
define('NONCE_KEY',        ')`!~h83xG4thr0)_1@h0}q}mUCjO/ryF.r=l=_Jp132($DoFxQfhs|C`1VzDGxxD');
define('AUTH_SALT',        '?Yg/AOnz/8Mc;j`ECR8H8Le3kppCj8s.>tCv[6,VJjjkzTKOspFd!F<&2ZV5h5}p');
define('SECURE_AUTH_SALT', 'Y9,/O1aWMlV7ca4T}u=IH7KsCqDy+ef=Bm:f1[IO^z|n1;)qs{4#U}2v&4#NP3iA');
define('LOGGED_IN_SALT',   '?;]+o3%iEV-fD[BiePmu)>-tk SE*HiBF<D$0/2G1AH133<AC0PtkKaWey O<Q89');
define('NONCE_SALT',       'S3!2xa_%&T`X,LS4Yb7M1k`G5^iDhJTFoKzjZe?3[//Vfv8&K5<[gw0z:~]Xh j{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gj_';

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
