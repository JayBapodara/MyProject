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
define( 'AUTH_KEY',         '#cZeN<YZ}4be_4C {y>OnHRmhQV|vFUj.Rg.ujDZ?wV!4iy%I^)G/0v>R;t.DPsz' );
define( 'SECURE_AUTH_KEY',  '-2*;QsFau0)):w+Dyj!>xM?w1rn0Ys^cKZCuVzgr9<0bXv:W^[(e(c%v=bI($S8,' );
define( 'LOGGED_IN_KEY',    ';hNuZ+45=t)4JCf2,xZL*js1qy9gf|%y(dzHEcU_QJ}ZA7eM]J=+m=`Ci*_F!I#,' );
define( 'NONCE_KEY',        'Y%SbE4iU2$r}AV4P, 5N-G}dvhn(h3{}=(H}w$-c!$u#PyN*>JCOK){>Bk_O=f2n' );
define( 'AUTH_SALT',        '/1%X4.=QDF2IN%rLEg6-h6zDFU68wMaxH#-~z#=^kX+?bX:h]7?i!iH<o ,}u6)y' );
define( 'SECURE_AUTH_SALT', '<Hp3On%]q__v?wB7-8N56}PYnU8~.fM*970Q6p3o1LDJ)jj0hD>4{DbU%}BR>s&$' );
define( 'LOGGED_IN_SALT',   's2S9%-UL2myn1eybvco`Jl^Mz%?.) :~:,Uc}xVnmmKbGwT2xmH+EOM%nQXV_`X%' );
define( 'NONCE_SALT',       'L<Oz>BDs`5{](|-)|@eSKG4bmBl]V.q#g x;gH{0uY5`E)5}0a;:yHiu`p8>U^zf' );

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
