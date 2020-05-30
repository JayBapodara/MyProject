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
define( 'DB_NAME', 'jay' );

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
define( 'AUTH_KEY',         'A3_y[r[J3yH7~cN%o#GAb{gd][M2Qpc({kd~ aE>C$)X9`/z0,tB-b^pW8lH+DGw' );
define( 'SECURE_AUTH_KEY',  'D.(nm $TZSnXfnfn (GiQ}BgjvD3c+@Oj E.,47(-hx9`PCI&*:EI10.c@K{JX,8' );
define( 'LOGGED_IN_KEY',    'yJ]p,&<*38d8P=8zuh#;L6YTgJLD (!S3<-P mSj*Q1|?NiGa]gkBW,$SQYw%U@K' );
define( 'NONCE_KEY',        'BtY#Z,A|hD7a$X!L(lcQM4p?+u[0cs]F+yw9y>VES)pb+Nwe 16O,&Y5m[E#9Q 3' );
define( 'AUTH_SALT',        'YsYWm0>t~uAa=eZEkJxhqGL<xk,w8l]Ehz!d*5Nr!,U5~k[W;MDH)3:Hrc(3hg_u' );
define( 'SECURE_AUTH_SALT', '95n@W22$zDdLw,r.]b*3LW^Ifk38#@ <NqhrEYj5*)9O*0~u4YQ~7xe8S%M^4Q2$' );
define( 'LOGGED_IN_SALT',   'VLz~WRiDX@o~oxxH,/(+Ym>Gu~g$4goYL)U!5OK!a`UITOT%=C97Kxy**y]!R9w%' );
define( 'NONCE_SALT',       '?GW#4VEeuZpcYx]~Z[&=a541j/|YNVO}OzsgI0JYn iIwR*;x|Mm:We5U.TK-R8}' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
