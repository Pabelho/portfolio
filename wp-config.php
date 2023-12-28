<?php
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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'K8EiZ&LX=*KX]+/oy76NV %jYb1f`AC&ibjvx%*h*-<$N}lW#2BH5i]WZCY.O{s|' );
define( 'SECURE_AUTH_KEY',  'BK/mPnW7w4I@eef:0YhZiBkZ|F~MLr|7tgC#,JeZHtY{N~!+%JuR@UQcMhUI:b3P' );
define( 'LOGGED_IN_KEY',    'G_*z4Af6>j8_%`F,TD$o]AcOf&A|ISiw@0pmeiz_e>]/$[dU6Uhn {XE>UyZ<95u' );
define( 'NONCE_KEY',        'ju=.])w3/:4#/;:lJ+KI*F`kYsRrJu17(ROOi5jF{/GrZ8FBzZjbzDrt%`hJB_jl' );
define( 'AUTH_SALT',        'kXw9u.$HhPg0(ZW+,GZw)<:>u[MO0R `J=tWB:P`s^wT3]k.LNpCp>jPENJ}k 2l' );
define( 'SECURE_AUTH_SALT', 'PhJi; u;@hQM?Qp_);OhOvPHXFE-1as#Je%tVsMlv2X4u|]xIRQRl>]k$XxqtfJF' );
define( 'LOGGED_IN_SALT',   '.MVau!s1S!|?.Y}hNtX$F0+YGCRAOTq+1#%sm7sXZbjIxnkxUK`1N_%M)mHH[!R@' );
define( 'NONCE_SALT',       '?=0{&6Lytr57a/<=%M~aCbLfv@|dX_a5`^l+{ZtrZ)FI>X36sQ<A?NB2t=Fn$bkz' );

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
