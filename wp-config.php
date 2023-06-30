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
define( 'DB_NAME', 'wordpresstester' );

/** Database username */
define( 'DB_USER', 'Gray1' );

/** Database password */
define( 'DB_PASSWORD', 'pablo' );

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
define( 'AUTH_KEY',         'zb$cYPly2w;Ior<=tB^_7DmJQEe]Ih#5G4w2Gg_t|%)=l-C*mIus6?5;eF34Q]%0' );
define( 'SECURE_AUTH_KEY',  '-bA(+xkD:2f~ZN|a[RU$xYuW&vbH(3p- b$DB?*>e#0a42zvL)pOBmFGX~;%d3(v' );
define( 'LOGGED_IN_KEY',    '$n.,]m[uebk/bU_or7Bx8lof=!np3vvem<:.Y9>.E.etN!D{w/9D#YTL;CDY&JxW' );
define( 'NONCE_KEY',        '+^kaFK?RHgNi-Yfj0@8QU(-SejU[YU|0b J|xMhG!X[NF-501/|nf]j*68-,e9Yi' );
define( 'AUTH_SALT',        'M9 m4Mf+$)7Bm>4}5)2>.#,u*6JQ6kUt:b{>#4y=6t=7r,Q~>g>hV.A1_jf`7u#^' );
define( 'SECURE_AUTH_SALT', 'Noy9jc_X^l<`#a` nLd1o*oez;[Mo[^@xs:{^o,!tTKzIH;MCz E,R(AlP?@WgC1' );
define( 'LOGGED_IN_SALT',   '[.c#5|XaV.g/aqf]9r{RF28L=zx+mI]%PpCX=c|NJbzQc(B/]EYniH^!PHG0tU-~' );
define( 'NONCE_SALT',       'xfRlmoW3F,3=8rO<6ITFQo0$/+:&8X^`Po:a La~@)x!^qACkDG;9bcM!4<0Eh|h' );

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
