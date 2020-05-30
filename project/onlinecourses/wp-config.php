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
define( 'DB_NAME', 'online courses' );

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
define( 'AUTH_KEY',         ';3dq 8Oyb)=-oy`Uu#yw9&MbfDQa`(d1*HPY?SM>)Ws$ZpuWyP|W5l]_|4Sh-#gn' );
define( 'SECURE_AUTH_KEY',  '#+Jl3FV:d)<4:hZgP1]jO([?AH|-xo.XR;63ytb?.k`X:ob?dI>QF[+*R1AW)2kB' );
define( 'LOGGED_IN_KEY',    'aqE<lH%zkBGU;@}:qH1v^4ATBAj`}afk]Q~9;]Cqu>#m4ta TxBvY]K__ $TrSIA' );
define( 'NONCE_KEY',        'GFR5;p(z(>)TS9$NJ3TD2T$.akVx(/5Mxc=ckMk#|a/MfkpvKMj9BZKq8.trI[G@' );
define( 'AUTH_SALT',        'aDpoqImnH@?Wyp1?u8CF456/c&cpZ}kK=3: t&m>324|KsB4&tpqH!.Y!OM~dZ S' );
define( 'SECURE_AUTH_SALT', 'lV?BP(m[8FA$ t_8DJqRogF6DZs0UG`Hsab+R-` 3w0odlJ1YN%nM]5]A*y$nkGS' );
define( 'LOGGED_IN_SALT',   '-^_1i2{&f7(~|PkeHc@v20V@vmY72qza(0A$!A;*?%I8l4GrO3-{wFJx<lP{bmRL' );
define( 'NONCE_SALT',       'l2sY|3hinl?G:V/=:Q}hGipc=nzyc>`)E<~5W:1/7g68t&bb*8e}D/4G1k$$dE}Y' );

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
