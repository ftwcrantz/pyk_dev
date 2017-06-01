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
define('DB_NAME', 'pyk_dev');

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
define('AUTH_KEY',         'zQE|)r9?l<+arUxaFDep|A^~z`eBp S^$I]vPV,%MX-7-9]phICT$)m0XlvGmC7w');
define('SECURE_AUTH_KEY',  'AXw;y>`m/zP|K&J9U(|ddCNIZtb_}eOHpCP6&ymp%=FRQjcnOr#**6aSGN>c??K?');
define('LOGGED_IN_KEY',    'o6`q]Qyi|bq(lG`S!E%OiURZrBG -W8[_EBCudJjH[(tHo-<=aGVN{4++fN o> G');
define('NONCE_KEY',        'Q2*QN`Q7cR)2AO6t}/^>t|DH4]PsMHYm(C&jox+gWAOd{;zS8-!s &2d+)f0+sS-');
define('AUTH_SALT',        '[i6xD%-:8K-NO772?x0-63d:*|>*t{f|{M V5%G|h-d#3Cg<P)WH6}0po+&GH$n0');
define('SECURE_AUTH_SALT', 'nNz#-j;}u.B$NU3Yt-!yO!1FS87;?QYx4/jnus4o7t{c=cd1|E,--.-sio/cu66W');
define('LOGGED_IN_SALT',   'T.$,S%$.=.%I]8Nlp.M#G5#qEG@N<U_$}6VF@:iYp!uC!@p|$SBx0Z&*BRkm$zvD');
define('NONCE_SALT',       'c0y! .:$j#LyuuyKL.j-]g1s=1?#~ ibK@ G:UNgC)CB/d8<YdUnL6h.x@hG(T* ');

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

define('WP_ALLOW_REPAIR', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// define( 'WP_ALLOW_MULTISITE', true );

/** Defau
