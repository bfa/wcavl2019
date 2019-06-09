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
define( 'DB_NAME', 'wp_wcavl2019' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{0;MSwEV9BC|K(L)Dv[K9YMNE~~YePM7dbA-G&f^d5o1/:>SN^AlH,{69DL:9,8/' );
define( 'SECURE_AUTH_KEY',  '(f--bb.a*C.i+wt[NSjlHL;ib+B DygPiDS:+{i63r[Cxx(rQkRL@G1QHNpu Bw]' );
define( 'LOGGED_IN_KEY',    '=/sc/U;,`6[HMO(q/&Tu.To%J#9Q(@6.uh{<cPs3?0KJ!*2=tM6u:fA%Mc`hIMbY' );
define( 'NONCE_KEY',        ' N4bD~Ej<^==UlYaj$,CD]vA3pJ1&g`79c^K8Q?-x0)hSOZ~C0EC` MJ>=3Bbynm' );
define( 'AUTH_SALT',        'AnBZ;6u|-OYz}{3k1X:NIOwgF5/K%de>1qkk+/|!.pt(oCxVB.4#:-rn(=<moo~R' );
define( 'SECURE_AUTH_SALT', 'Af8$pM&aq.cvYx/bb5L~,@9NTrRLf{~&%qKDSM*B !@(!S|JG[tCvif,vrghPuey' );
define( 'LOGGED_IN_SALT',   'r`x+]4R3PpK`7rALaKL/fo@-WytQ9)NNS&3UrcUmc[y(?n46k>v7$Kb-w5U9^~ji' );
define( 'NONCE_SALT',       'sn$ajm4n%#;]!]SA<|7#)j~ixgR/,/%<7o?4JJ94)x~~I.EciKl:8Ki6z&QZmo=p' );

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
