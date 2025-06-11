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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saikumar' );

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
define( 'AUTH_KEY',         'Br))=#o8l|mfOgC<FJo!.=Zp?I1-^Zje_2oEP2rY!n2s<>8%,zW3iBiwej+s4Z,,' );
define( 'SECURE_AUTH_KEY',  'lgSQ?a:O:REl`oxM(OrrD&|zJvP?=Q(P0|5aSt(.mv?DA7,]OXqIY{^q6S};N$]e' );
define( 'LOGGED_IN_KEY',    'B_[F& d^DLKl}OS3]yL3?Y~=t-`N3tU_GX9,F[]Jv`l FJI3y/y,SpP&60;j*A:&' );
define( 'NONCE_KEY',        '`Wm/k$y(sMuyX&k;XD6-n=8Ly%o.h[1.w|?E]@c:q/!{MNTy~*<Ztq uDrgb@vr:' );
define( 'AUTH_SALT',        'Gyci~#3hg=khApC;,UWG)7s0D1BvR/us6dO~^=.i{*gw(o.0Ka1`+H;d1n6^!wNX' );
define( 'SECURE_AUTH_SALT', '#3l8}]x|yBWj_AG=I<Uxt}-{Slk1A$e(jbW`?c:9tI~aiNW$tB=;_}c/L{#N9E]`' );
define( 'LOGGED_IN_SALT',   '!]HgIh&U7`YTfziD*Rw%9Ju}R,c28D,AS6=cd)qWzL_SX@Oqj{[;tavfAb>EQ28P' );
define( 'NONCE_SALT',       '{&X@(r1/w=e~y^[mOa%@3TOeMQ&C*xR8ccu=82X:Ak7QMX7{vnHMVsMLzoJc7_Kd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
