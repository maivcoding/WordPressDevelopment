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
define( 'DB_NAME', 'maivcoding_wpdb' );

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
define( 'AUTH_KEY',         'YFT0fWpT_x]=ZdQEOs(Ev[{o`|<#|,cfZKC#se)6;VegWV[:iq`>BWdeGv hQv=V' );
define( 'SECURE_AUTH_KEY',  'a#?{:vn%?;)(v?i[x&}XHHY34wlrmx017z*|_0u!J*s@4e7Z@Vtd8]sVt|MyMx.i' );
define( 'LOGGED_IN_KEY',    '3],bD=c~iU9MQn#YlC}/#GG%? k*%f)Pk+pnZYo$Bb;`%||-pp;6cqSO:1HY.3~M' );
define( 'NONCE_KEY',        'Le[Q2LTB5I)_OrjiVD|GM7~4N8c|h%giAL&y `tWo{8v^/q=xH$$_/t KS4)T<9Q' );
define( 'AUTH_SALT',        'dVUo-2(}~qyu}D|_sU;XN,Fhf[C7ACZv.#`Jxy!efD 2)i`^tPy$`+OEj9>egYTE' );
define( 'SECURE_AUTH_SALT', 'opA[$)WebQ*cGzrpn3pac0T(K}iw7 jAK:zW()9.y#Vzck*#LQEt8d^]W!AWXU7_' );
define( 'LOGGED_IN_SALT',   '+r(l|WNHIg $$UT9$L{*y(Xz*Ah0MsF (9w3%Z2tVh/$/[>}O:[w9o:3mf>FR=Y@' );
define( 'NONCE_SALT',       '3R69o3s+(0:XJV#A1L/=&J,yAx]+#1O50Mf;JY(}sSr>sD/V^@rRFU2*EC>nT!AE' );

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
