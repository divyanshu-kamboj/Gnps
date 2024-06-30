<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          't|wX.2B1q.|!h##An#3]]T1(}nAb]x=euarG6wN3tnr;o- z)_O=#P^{SZ&S*`!]' );
define( 'SECURE_AUTH_KEY',   '0zbineP2lMF;l>blU*zH!e[K^DC}M@RabV %)Zi_S`mRm{YX`8x#XySNi, %Y=zS' );
define( 'LOGGED_IN_KEY',     '{)yu u,E?QCBYNn_[iK~`)WKcV37N9dy`6K@]4Oy~=a1WU!20VeYVnP@g]w~5D_-' );
define( 'NONCE_KEY',         '&|T9?fYU-|oU2GyyCLY<{:<>!)Yk.oa$j~H/IY6dFdNFpe}kOYBMivH+dJ0]oe}p' );
define( 'AUTH_SALT',         ';j@<l<}Bm^::o 3dPV-i6^=S|;_y.J-,=6YkuWhKF@I{2<*@B/<L6fC#zz>EsZYN' );
define( 'SECURE_AUTH_SALT',  '^fNQ RxxdDlU;f@A;ryPDfQI:SWoGY;&|erhCK~$1RD*b(|Yu?[7>7zn.b-!rV5w' );
define( 'LOGGED_IN_SALT',    'c!D3pn7Z})*lzijsvD#kvAe%@7>l$H{ureO$ow+0%@7D8~P2>V}k_#Lrk&<`mFbf' );
define( 'NONCE_SALT',        '.QO%iz+|nVcjR| aeEtay:^q@L7yA7]w]zK0Y{TPt !1n@s$l9  D6/Zh@mKpN.h' );
define( 'WP_CACHE_KEY_SALT', '68[vQTCH@p.$TF7{(t,<EBPzWl0bP~`|%1[pFM+wv6A_LKup_06Ms^ss h,;7WGt' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
