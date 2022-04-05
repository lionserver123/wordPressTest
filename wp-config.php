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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arrdb' );

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
define( 'AUTH_KEY',         '/Nl/6O/uENB;tB#}:jVadKo/#4![)|0.V%P!ntg<pm=oP?R$OT#vTrhs{gI>sA:h' );
define( 'SECURE_AUTH_KEY',  ']Tq87I>Y3&h<HJo~V(C$3oYP](Z0|?y1o98[N!@ifjFczm*rGhB1pFAO*%Pr4?,S' );
define( 'LOGGED_IN_KEY',    '~fX()&7l9Fyq<0DsQP9Jq7w;:W!ptUcEq|]^XNIE2Lmre/gZ XSRSKZA,:kA].js' );
define( 'NONCE_KEY',        '5{gss);J@7G]M<h%#yfrMK=` amCBq-dX)M&g%$6>NU7[*9]<#SWZ5,M)*qHJu<s' );
define( 'AUTH_SALT',        'AV%15a?keIQ 1qrW3C`[r?j_M%y?cRHvU3GR~hA,QUEORr539*;<7~j/z3}!v}}]' );
define( 'SECURE_AUTH_SALT', 'rBdqWz1C:`Q3(N[u;$0x,!7r^6tVeNn!B!bBY5z5bO=?ZV2y^N]/C&Pd`Ib$4bvn' );
define( 'LOGGED_IN_SALT',   'xpldfb5j0}1ple}59N6kJ|O+1c*0i$&(m2<HED:Jp,qp (`1F*OZVb$$#6C;{Lw`' );
define( 'NONCE_SALT',       'Cmk4Wm2Tq5xm<-K9kj4GT~(<o,;UUv]E}T~:0.xs%bt2<,ZV;i;umW/6!c<>l0o!' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
