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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'team' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'CFG4YSBSMMFNvrrLrcca' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '/@a)N+p?e_,Z KHC5a`MBZ-edkLfW>=Y2?Q4,:ar1@`xAeSNO6<wN=(,4Dg%^^:y' );
define( 'SECURE_AUTH_KEY',   ';YPWeur^%%5W/K_l[IMsk%}gf}V|0F-F_H5(uTO_1G&$rl%))0BUCzK<NGGrKJZq' );
define( 'LOGGED_IN_KEY',     'n+Fi8RF}kf0jOG<N/rXK:MjvC@Lp)spu^w!gkYJ|k-.Z&|=x1=;vx;RVYNst-cuK' );
define( 'NONCE_KEY',         '?EkZQ[^n5Ws35~z7b?6=>NYP)xCpsg:Xn&GfJE{a~CY|jmz9;@iKV&i Nk@^1U:%' );
define( 'AUTH_SALT',         'FGOK(-!s=dd<60.M=QD_6-sCytM_21PD0RZGnZ )e;5@(Dw(k&13rrSN,ZK*RBh|' );
define( 'SECURE_AUTH_SALT',  's z+i%FS^Ub+Gs+CU=Q.4XC$U.znUBw;x]J^}$N2ZJWjo6;]-.W(Sy o2{eRqw=*' );
define( 'LOGGED_IN_SALT',    'O#0p UY!9eC(;g@=#N!M6SD*l*@QT[%h%Hoq~dpxhNr gqn@j@RmZ=g<>@Mj6+Ph' );
define( 'NONCE_SALT',        'vv)~|[cH[%l`0VuXKGLZDWNwVEWQCc,$BP<zcgrDgD>WVSQ<s,n]|oz$@A,7~m,%' );
define( 'WP_CACHE_KEY_SALT', 'ZQ<,`u8D;2GRV*.0^bM 4-,,pPUN<H#w::4u2FdCH#)[BGNr.-UTohR/O[?&M#,t' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
