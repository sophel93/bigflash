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
define( 'DB_NAME', 'bigflashDBwhhmm');

/** MySQL database username */
define( 'DB_USER', 'bigflashDBwhhmm');

/** MySQL database password */
define( 'DB_PASSWORD', 'HhkTeq0v5G');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '3>gJNV4CG|}wz!gosVZCFJ}08!|osvYckJR4BF>0z$nTbI{3^mybjM3E<u$mTI{26');
define( 'SECURE_AUTH_KEY', '1![:w-OSa9HL]15~_lpxWehKOS59_#:t-~hlOSW9GK[1-_ltksVcFN08|}vzcoRYB');
define( 'LOGGED_IN_KEY', '>zjQ7F}y^nUBM3$>ubIQ7v@kRcF}7,nzc4F>v@jQYF}72*myIP6.;+eqXE]6.mxeL');
define( 'NONCE_KEY', '0SC:9|wdKVC:-lZK1~[>vcJ3F}zjQcM3^nyfQ7v!oVF}@>vgN4,0@kQcN07P6Iy.');
define( 'AUTH_SALT', '{$jqXAMDL;5~#pxaHO19#;x~hpW9H]1~#pwa2A.]t+eqTaD]2+.mxaiLT6_]x*ipW');
define( 'SECURE_AUTH_SALT', '{$QYF>0zrUcFM3B,}ybjQYBIy^ju#;+emPW9H]2+_mxaiL29_]x~ipW9H+<qybIP');
define( 'LOGGED_IN_SALT', 'C[w@kNZCJ}4!y^jvYfI7^>rybnQXBI{3$,nubEM7r@gnQ7}4@jrUcFM3B,}vcjM');
define( 'NONCE_SALT', 'pZhlOW5C1-_hpSVd26*#pt+eiLSW9H#;xipSaeHO;5~pxahlOWKS5CG[1w~hlsVZC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
