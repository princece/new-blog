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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'goyal' );

/** Database username */
define( 'DB_USER', 'rahim' );

/** Database password */
define( 'DB_PASSWORD', 'a(dV3lkDPWZ/vgpW' );

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
define( 'AUTH_KEY',         '{v`Pq>?/emR|Zh,-flTR u]K17vTj9+NlGk,i$T[N&Ol=u:E4^D0?Vq*4a#CmXeI' );
define( 'SECURE_AUTH_KEY',  '>B6@f^9]ewm,S^u(=:hA+Aq9,Xa6rp^j+EjYR2244P,}7EnDT;&`X[sl r;#Ry&o' );
define( 'LOGGED_IN_KEY',    'R|Gkv&~3F(als =6mMEV}Zom{Wpz{/N SR$9G4o(ucm~%WHHnq{,nS*!3=*]i^<h' );
define( 'NONCE_KEY',        'I$)o6}-}n/Sf1fmas@67oh5&LGx;l8r)3Ts?`qRD}>#{`]C0(KRtt)6~X6Y<~@(Y' );
define( 'AUTH_SALT',        'Hq%RRC3G*TgXuIX3 %$RTXA(rI<&0#vRB8a?vH};G3-/iE=.Z;8*.J`^lK,do7MA' );
define( 'SECURE_AUTH_SALT', 'LpK_S4_z?74r<kRWC}xox*3tV>>74^mf*|dp0Aub(FPu:|)5/|bYG83wrk)=z?xO' );
define( 'LOGGED_IN_SALT',   's=<hR_S?bQ{[!C0ngz_`?ywIud]*E-./,s^*} F,S(9.mgFvZf[d1/w5<K^P^aRA' );
define( 'NONCE_SALT',       'Q{[_/g KP^EDn~ZN/d$~WK5w#RBwQ#hwh=cn?6d|@*=.=+=zk5>-J]4d-MRl&qJc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ht_';

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
