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
define( 'DB_NAME', 'coalitiontest' );

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
define( 'AUTH_KEY',         'QplMYm#t^cLm_T4k.:H5UmcWF!7Hb<raqtywI@lHm(>&]TY6b1.kN^Fn_tz`:~i?' );
define( 'SECURE_AUTH_KEY',  '|-+R#jAH4J#/&gy}zrq9ukpah9UbBz#MWW$^OXqM9$+TZIHz_iK!X(M(~E>Fk!kW' );
define( 'LOGGED_IN_KEY',    '?WH`2!Q4S[DElABD?fpe8z`IkAmB=p@A29TuoLcVPQ?$g!U%KY`!yhC<I%@NkI0C' );
define( 'NONCE_KEY',        'Efh^.m^>tllH:wi=X*{GTW4NIs83i7]_&+RCQ+]lw;He`>jj}zU}IRpVc]p!&|4b' );
define( 'AUTH_SALT',        'H?fvW]95H$-:SU%]S/-}k5Yg4z<}g?s|K^]MGw*U(w&XgV-O]f1d$5,sC&S&LG(7' );
define( 'SECURE_AUTH_SALT', 'kIV:/cF+k}%!^E)qt_q/F BH^r[j0!*CpN]b~bHO4v#+n..BDQbxD5_:0(*0j`j`' );
define( 'LOGGED_IN_SALT',   'Os+=;9q$YI0b0JX(tPy;W_<6dsn4:]E5PFV:o)&QQe#ZJ0bCU7-m)?3D./.WhkE]' );
define( 'NONCE_SALT',       'j Q7S 8z:.6[6<1S!>r6;cdnI9KtWtRAx^bPi:OJ?P<qrl@T<:(wK;D-4L+AJK`s' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
