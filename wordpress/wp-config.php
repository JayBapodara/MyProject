<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'pharmacy' );

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
define( 'AUTH_KEY',         'D|UQQH/Ay6s7+P%}_@.<|.7/.~l?a}P1i35-TbZP;Cu.[j>]_8%2Uj,2]A |l.iR' );
define( 'SECURE_AUTH_KEY',  'd&DjWRXvfyQf `N QtJgw$1k@RZ_lUyJ8`}fS*gm_.U%AygLm]q@jo,6yrHPQ<3p' );
define( 'LOGGED_IN_KEY',    'cm{plh@!h|*k9`CL!xLX.vk`7KA7j7%kzGg6P^R|`_*II.X^.FXO{.k]3|CN;W[N' );
define( 'NONCE_KEY',        '(*yG$0%ZL1$_F`_1Q0EzV1X6pqh?1A43G[Ifc`B9|x.0GPz? zWaLUbN5s5k5|mj' );
define( 'AUTH_SALT',        'J~SO*PL{b;c1iP((.M_DyWM?oa!3Q2W;Hp-$1.XE{e;&TCjfPs*aS@H30_/CPf?Z' );
define( 'SECURE_AUTH_SALT', 'Ba;1(dNFP/LZM4T1-&&gUG(He(k=r)t1urCe:1H1wj,(CYx3JLFFJ-OA%Pp[CJ<`' );
define( 'LOGGED_IN_SALT',   'Zcz)Fv!t!y?h<h[14rk!GRsbC`[TxDszX6Sz3Cyx@(U;Y#1[ob,bR1`K1HahtIKd' );
define( 'NONCE_SALT',       'k47~zMD:G^cFX!^Pb<)~j2{nfCMaA~43Ld9!$c`-f$^p>&p{P$,)4J=s>;Xj)/)G' );

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
