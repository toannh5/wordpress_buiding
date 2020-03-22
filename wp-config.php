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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_Q=O?7320U<yzv)x@G56,%.NlFnuQ9o(aDf1mNqONIPaMdXtdA}WCdBTR>Q#sz?n' );
define( 'SECURE_AUTH_KEY',  '_sm/P T,tUgK(QEMcj<zUIr07h8Y=0*PO=MY)p;U`c~dIn5+ s0k;`Q Mtwa;g*N' );
define( 'LOGGED_IN_KEY',    '}Q:~D/fOUa7Q<$(/CqmhD[J(=AH}]EKcGuHFhB_;C(~)Qb/nd5ponTcoU&FPvxWv' );
define( 'NONCE_KEY',        '/-;(Y|o9h&)1a4YrMO1@lECjUhieKapj8TR/ ^ADP5#1:}ZWKSA,:p V?]EZ|Ewu' );
define( 'AUTH_SALT',        'o^`uWAT<$h>>ukggl#~>AW6Zy,U4O-t4&8>q+[W5e{P8vQT!g/oNBGCepB06::Er' );
define( 'SECURE_AUTH_SALT', 'w+m+93@S$3{bFBye+oR8=T^Z/|<DwM[2D+Q@v`R94TVr}y%ZK^%j#G3Za]3}{.zS' );
define( 'LOGGED_IN_SALT',   '6xmQ2RoS,D&PoqEC_Ri %lYedz7`6-a|LK]rENd4I#7:ku2@D:W^a<-*738EmOiQ' );
define( 'NONCE_SALT',       'pJ/)Ti6Q:x:X:%A|-bmjqFIlG>E^.Af~t?$]Do@GL9=yoAy(Qa:[H0%v<4HX5rl6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
