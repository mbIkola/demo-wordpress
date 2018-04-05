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





define('DB_NAME', getenv('DB_NAME') ? getenv('DB_NAME') : 'wordpress');

/** MySQL database username */
define('DB_USER', getenv('DB_USER') ? getenv('DB_USER') : 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : 'wordpress');

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : '127.0.0.1');

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
define('AUTH_KEY',         'Zo|.PyrT=Xt=&!8>pz.e4d`RVRr?gb.m_7rhbCvE@UiKJJ)[ld6_j,J4CNt*_eF?');
define('SECURE_AUTH_KEY',  'B6N?7]s<1`;MNb8]B&g(;~BV#y]A+t_su@X-AV}R{{hzT/hH5%NFLO`X7iM~g[~v');
define('LOGGED_IN_KEY',    'v*W+cEHoKn6^$4n=FmDz{9:jfsJ]tA*<<@~<+U?XQ12j]]-;a-?W3s@5,=boEVF;');
define('NONCE_KEY',        'Vcf8AU5]K@Iq?c<G^~IV _4Dx(/55mvBI.#e@sPEdg9cRm)s`eG10=&<NV]XXm,U');
define('AUTH_SALT',        'CQ2fE6ZeF3No$BrL8!4=XmzPuP0zykF^XAhJ`wW>Nz/ 5y/hK;B`5*X*%c9N`2w[');
define('SECURE_AUTH_SALT', 'L6sv%,xk0A4IuQ(6{fEXf`:F0^(3>-e^@sDI;>e;OFiO!6 (g{;g_A0Zqwfw-yz;');
define('LOGGED_IN_SALT',   '!.YN2gu&-([j(_uIwu^]B&(gTb)}{z3O8R0l+0mZYffkxnjaGi{$v@]x`h$wVb+Q');
define('NONCE_SALT',       '(k9MSpI#Ln)K<9v/vDx/B)UFs:vx@w-0r[EF3mtS~/j{RMVy9d+Fq/zJmNX[L0};');


if ( getenv('WP_HOME')) {
	define('WP_HOME', getenv('WP_HOME'));
}
if ( getenv('WP_SITE_URL')) {
	define('WP_SITE_URL', getenv('WP_SITE_URL'));
}


if ( getenv('WP_DEBUG') ) {
	define('WP_DEBUG', getenv('WP_DEBUG') === 'true' ?  true : false);
}
if ( getenv( 'WP_DEBUG_DISPLAY') ) {
	define('WP_DEBUG_DISPLAY', getenv('WP_DEBUG_DISPLAY') ==='true' ? true : false);
}

if ( getenv('WP_SCRIPT_DEBUG') ) {
	define('WP_SCRIPT_DEBUG', getenv("WP_SCRIPT_DEBUG") === 'true' ? true : false);
}



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
