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
define( 'DB_NAME', 'homecon' );

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
define( 'AUTH_KEY',         '3o5Z|qi=Dp_&~TWaJ3I6@R]^B@4q><mFYMBb5HE/cq1i(0*pr7R6|a&ctls6*4+a' );
define( 'SECURE_AUTH_KEY',  'k6!g$%5!g`5~O^nO~|F+EAC03ijOlj*cpjQ.|9}GZH|mQKA M#`Cg=yoZOU,uhh$' );
define( 'LOGGED_IN_KEY',    'TJf3h-7cnS0+nI 7us;9v(n_!FQm2H7{pqV88z*q<]~q8C)rc_a~EQD!repdq-*v' );
define( 'NONCE_KEY',        'U0d*[*Lw=Eg:v?9ckTuWNQ.Srl]m-ESQSwFt;}uoRGj3=#[wgHo1laOj,S>/R*I$' );
define( 'AUTH_SALT',        'k3~4%Xkvnl8U^%v[(iFcAylk,%%M%Q2>VXC#JEF1?*6- jjogp4EsIc/A0BT.8&J' );
define( 'SECURE_AUTH_SALT', 'KduWY!pm;hOfCkPo^JU0CC2cY2sB_9IJ&69@*G2qjq$o+xQsvXFY%44aG7lA:I}P' );
define( 'LOGGED_IN_SALT',   'tM*S8pr;h)cln%{og?c#U%Nt9&rF.um5O3]J5r;D42cv8qJV&Wds-myd-?h9[,CH' );
define( 'NONCE_SALT',       '&Ce4{|6J5vYRr}z++APIG(*9 kpud`GE&iYL@Fme`PRM#HKWL#yBC!wLp%x*xPeb' );

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
