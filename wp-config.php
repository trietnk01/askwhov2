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
define( 'DB_NAME', 'askwhov2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '_gbbcG(69_aZ-UvE)_Y[>&I6}[`xqM683lvG6n@zWATU#r<k5O(9F}>E_pL]|&Da' );
define( 'SECURE_AUTH_KEY',  '$Sc eNP}l(g$Tqa>*<{BcXgQtI54jXJ!?#,A?YNiSGsK1|gd+Fx^S+hbn>%oICVr' );
define( 'LOGGED_IN_KEY',    'N.GnkP87V}xDhwcQS|+,B3`39uGxoQ}mKlX7nwOVaG/NL5Jkh;d{Ewl_jO0-PN{>' );
define( 'NONCE_KEY',        'xgcKLmHU.R_@zY.(d:mfff$<B!;6l38lB?aVA 3vd8;{~Ef/+4{q}{WST).->HW[' );
define( 'AUTH_SALT',        '[=+H<:XruVtKz#G^zU>;T@:6e5W.%;h=LD|p-$50>83j`FvN,k[=Jyi2+T:OtoWz' );
define( 'SECURE_AUTH_SALT', '&zxqn(Rg3(r(-:!BX=6j*~K,NyJnrYe%N&s@8WlruGlIi:RR|-A<3|-Ad[xuxAb~' );
define( 'LOGGED_IN_SALT',   'e|D}U jy2IrL;~[D`umb|Du9(-LFrkB_tkc<$0*`vc!+N&hx_+aul:nQ/,QQ0oLd' );
define( 'NONCE_SALT',       'w9/Sc?)f#_on<a:HjDzSAz*b}.jGVDbZHfbNWc3zQ2+iR?*0JgNN^H^TxhE;D6kH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zxv_';

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
