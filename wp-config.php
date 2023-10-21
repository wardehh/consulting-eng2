<?php
define( 'WP_CACHE', true );

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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'consulting-eng2' );

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
define( 'AUTH_KEY',         'U|%3]imA1{&E^DPQvdCL_7XC*0<7h*yh>!<iETE[F^VnDu_([eN4i]f{`@Ets;$L' );
define( 'SECURE_AUTH_KEY',  '[;zf(g+1c%bOJ9MomxKif;#sw48s-2H;lJ2g2}2lq|:/Ez$-*PFT)|jRV#8O%43E' );
define( 'LOGGED_IN_KEY',    'gvsyEt?vF#|:|bVkBv|r@q7O8c?kS&HHFzdB+~pHOfT*)!:78X^B6#&h*b cCpX3' );
define( 'NONCE_KEY',        ';)lJB:L,q3A^|5h|6!;*WSTj#2*qB7M-Mj3g3$pa =^|Yq/p/}PGM?^o~i 2{&5L' );
define( 'AUTH_SALT',        '!iAq1R21rv{P0K{bF+zy:/Vt8plDmjL([`ru>sV=<4/Kirdck7+>[CF5#FQ}m<(n' );
define( 'SECURE_AUTH_SALT', 'U4CSA kC,&D~=o{]D#rs*s<~$Sl{6:E)7lrpSTPyn)?6 RV2hRjmxOh4DW(g-YSg' );
define( 'LOGGED_IN_SALT',   't$H%~I&2`8-DuZ8o{9u22@qWWZO#ltz;uSm|pdFXUzhF+o4RRcw}$OZB^X~u:6Jy' );
define( 'NONCE_SALT',       'Mf-eLmhDy9jy*QVaK@N[c=3~5pi!RNx{fWf:C4qSdwr/kbNI90P:F=-KiV(;~!^m' );

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
