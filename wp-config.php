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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_apsta' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'vW=|Pa7QLV--a~FbIpu0e%=P4Mya->Id~s//i6Zvd x~7.v9+OuGSCXZ]su?17Pc');
define('SECURE_AUTH_KEY',  'E19D$~4:$g%++ R!S+ *L+p(J/!`[5GXkoFNt;XNI9}Z#iQ1_Iy}C?^-L,,!JmR;');
define('LOGGED_IN_KEY',    'e-s]kZ={?7)is@vu`m2W@ CUw]/Umi#S!]eM>+K|/0USl<R/FF(nZ?EC?W,)<N`r');
define('NONCE_KEY',        'qDzo8`V&h9y({NLK;Y,!={||[nQNz_OnCnjrDm[x#2z|V`K(m;-]<xi}>+Sna`c{');
define('AUTH_SALT',        'R-KLfZaJQ.v:[w_`yB!TMV7(%d&9[jfg&6 !4rO_.K$!.BUB74eSL|Bt`h@UA^4%');
define('SECURE_AUTH_SALT', 'q)T; @+kJL)-I.amEcLbI(&Cd3gxD,>5Lq8ga|~|]9d&FQ-%:e#9t@j6*Wz2&gt/');
define('LOGGED_IN_SALT',   '?=`hPMq?y :K:`VcKM /(|@ 6J++oG8+k#W!p}JZg5|MS<#R+=epTI-WyvxN}LJ(');
define('NONCE_SALT',       '(01g)lSTga({g*.5]H|5y=;f4RYT${ _C3{U8L#}{g=Q=075gf`$3F+qT|9##Ejm');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
