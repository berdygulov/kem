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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kem' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '?@g2y-A?R~W7[;&b}B =L59RO,+Ccpx[:g@_XB/OP$_jtNy`TH^Fg,{+Y?{[^ISd' );
define( 'SECURE_AUTH_KEY',  'AXVuy}5jIr-=h{)_JlKi!nV(?d)GJ!>}>3 O4m>PGS}TvD$iT$^W%9-=Xa202<{#' );
define( 'LOGGED_IN_KEY',    'zXZ7KHj$Pq&^J,Z#zGCDWO2F75z-$H?/*!i<-RX_>CCJ:@<,W J< b euZ%&P6S ' );
define( 'NONCE_KEY',        'SqtW9@+8k -7E&Wso@rp?+J,1Uhd@K@c4xu_5>X|p/[o$IA$_%-x*`S nHNz`h;J' );
define( 'AUTH_SALT',        'iqATl|nIa#Iq@3%otcG[~In*j6gV;Yqni!+5<mCbtOGsx36|mSz5Y6dAuLogP{+y' );
define( 'SECURE_AUTH_SALT', '+{Lb 8K9wQ;$GC+eHr>KYVlPU6`9 @-?#Ow_tLl)iA2lb!W/GH+qhdOZ@EfXGv(B' );
define( 'LOGGED_IN_SALT',   '0Z:{>8yNAoAV0m%DTMCjoa?Y31 R[`/mT_U*%$[q^pLX9;*y:d/d8B.Q9T+kKxJs' );
define( 'NONCE_SALT',       'X-2:*9z}b{]%vc`!GzJ8%Q,#%aYnw#k8lzzr+59O$i=[#k*~*ml1K!xVA1k<yF^(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
