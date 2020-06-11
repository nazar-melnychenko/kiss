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
define( 'DB_NAME', 'kiss' );

/** MySQL database username */
define( 'DB_USER', 'kiss' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kiss' );

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
define( 'AUTH_KEY',         'c@_75||/.r&fUqBOQwTz~(#G.FYAo6_X8d[KPFvsh_=D57x)Ge]XS X>t%vIwsKp' );
define( 'SECURE_AUTH_KEY',  'UOS3*4;Pl@RF5~`!)z]tD9Hj%xMS1:eBq.ilWPxXcTZ^uJKt}kLT~btHSuB[j!W9' );
define( 'LOGGED_IN_KEY',    'O6;`vLD]w|(Bx2.r@UGB;V+Paa{To+[#zVRUG$5247A>UUwb&q,*J)nFn,Pv)ELF' );
define( 'NONCE_KEY',        'M+TCfZc4}Gn2GE GvJF#ab{UP+xXWq5LIkK[w`oe/~8MYo;Q2bE}2@}Xya_{t?]j' );
define( 'AUTH_SALT',        'd`2J`LKFkT8$XCa@8|%UlxFa=*wg4g;=RWJU!9GU^HQOVOjCDXC,P+=uv,MWmmDJ' );
define( 'SECURE_AUTH_SALT', '*80tAlbA%]CaB41s,!=S<=zimGA-$D-oPj|r/#}7{c14<+1yn{1a.%Dc4w2I_x1D' );
define( 'LOGGED_IN_SALT',   'H^btv,yN($OAN/@4<-RC$8SW>V4 e^#LF}Q`ssa<|-x0=<cK]C|CxS%R88Fd*S#G' );
define( 'NONCE_SALT',       '39Y^-+ |VLph.wznakkIQVbQbvX=Ugq40kQ08_(cw3@rl2[1})KzB|BTe @QhR{d' );

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
