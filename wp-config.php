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
define( 'DB_NAME', 'testwp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'exHZOCeBFK(3}=X`/+wV-48 _d7+rpw4ot;T|cysPRB:}un>5Of;zB=F!`9`1Hh^' );
define( 'SECURE_AUTH_KEY',  ']Eco?kL/RAeQT./68mvx!`*T_~MR%76^oQ`W3q%5{%y(oYWMihrRl+<a;Z.`Uy e' );
define( 'LOGGED_IN_KEY',    '_x!CokfG  Q_/mKckqrJ!R-};2CD?%|Y7ix~ns(THu kNFiI#5(Xa@R%j|Q(S5&v' );
define( 'NONCE_KEY',        'jm.G;4U5aVPE0fibuOAMn3KR-kUkg[Vr!GSQ.&sb4[^i5,YeCUK,D[(PhGD64L.[' );
define( 'AUTH_SALT',        '+i]f, Be8&iFSrjC-S*s{,300UXfH@$z7SGlYStCD?nBzq$xV$ Z6tU@uSypzu>B' );
define( 'SECURE_AUTH_SALT', 'Ok qo76.=lV74k3oRjhX7Na{zO^WbXu{t5_{MpGusQ{Ot@s7p}hR&Yp8D`3#kB]k' );
define( 'LOGGED_IN_SALT',   'ib8<z%Wo))>OaWka,?4a(#XA<7H#S:+iPm+4_x?oo^YZZxNTx}+IF+]3<%;x>-f+' );
define( 'NONCE_SALT',       'hRYILauKh#BAC8oAC./+uy8}@>%kX;p`t0wso^$BV%`e~{sL?XTD0eJ}@!*)1ve>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
