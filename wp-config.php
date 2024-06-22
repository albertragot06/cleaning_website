<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cleaning_website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '_M=])n{0>yBg !a?|kbP`0N^~glFs/o7rH1w+5wWqd@0)jHBB%}Y6m NU!~7Dv@#' );
define( 'SECURE_AUTH_KEY',  'Cse_F{CtHO}&rtAx7R7kP$0W+<u)-qUW13*B&s1O&WJWPo0H#z[b)esT`97*95A=' );
define( 'LOGGED_IN_KEY',    'zllF,0P3G*ZGV<2? =%VzO?F_ qjc^y(Xr-`TT16fe%Q=h-Ri*,jdX?7r3=iT:u~' );
define( 'NONCE_KEY',        'FY;zcLY`mKDX2xvJj,pdF@>Z?leJc]I?ehxg+W<HuMBfZ>:^kC0KgN0jTL)zHRj_' );
define( 'AUTH_SALT',        '%%N7T@~Y8Pp#,pSI~eEtFBb0}VQS@v2S,bkWd6Kr#>!ovZrf[kX):]JUs)N!ZV3+' );
define( 'SECURE_AUTH_SALT', 'zym%6Xs%=#]cc-2_e^,JSHdXYtTUBF]rSKx<f*]fE,R,y3C3!U+%LB]?aP|<bV0 ' );
define( 'LOGGED_IN_SALT',   'wd/|ZE;qceq&7HoKVc6Z7Xs74=Cn_nP{?c3q) %/~.|G7{R.hmuJzsX:Kvzeqc|J' );
define( 'NONCE_SALT',       'zGm7sO#u(`pL[`V~T<v;HBV<ngV*e&s@As7SM&>o$};,;=%Z/{SKLf<t!`qh558H' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
