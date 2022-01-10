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
define( 'DB_NAME', 'wordpress_tablas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '7/~Q]q>2XXn&vXJ~s8yFyWmHQ#F_Z{^2^c2GanN44L31#<OfgeRaEC^@h7fqsS>o' );
define( 'SECURE_AUTH_KEY',  'vd{,ci*SBF{e,M{1Erb&:LoOQmkp4V8j3UKZkfQlIWdlJ`RH>MaCj-5~Ry;rXTe&' );
define( 'LOGGED_IN_KEY',    '^Oe-NH-_yj_tVI>1f<Ppw4%fak#Al;AnZctVkRH}l|s]F}JR?058xzH5T:oPN17h' );
define( 'NONCE_KEY',        'IlN`Wirl3CvXzfSt&{kfqJCa*F2pxsJhrw s6GBgyA)2TyLT~w/>Xh9Y28M#sB[ ' );
define( 'AUTH_SALT',        '6P*5|zgv@9ng,zpV<|TBQ#Y^j|K:wmtkb>7$a/Wt*EaWL|R-Q`/hHd<k%qKM^S.)' );
define( 'SECURE_AUTH_SALT', 'ZB!k3/<i,cUF*^`hVrQEOO5&9qn0XlCp1svCc8uoo_}rDtc^{!!W5T8q?UUjjrbt' );
define( 'LOGGED_IN_SALT',   '+($Ya^e%>Xu`}s@*p2P;i`|Em/0*6n>QQrB^Rf*v>L<>o*;&DPkgD6+sa1e>t[B*' );
define( 'NONCE_SALT',       '{u_e[rg>KIaLvU.!`pJt{hZJQ 2?Jci)7<(G<8iXQxQYvy iWI;(`5OB Xw56:V{' );

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
