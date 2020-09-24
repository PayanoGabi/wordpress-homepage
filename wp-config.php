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
define( 'DB_NAME', 'wordpress-homepage' );

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
define( 'AUTH_KEY',         '3!Qlnt<l$GxGM; +p)fqbD9U~n6-0f-u#7=mUS[UgB# Ul8)cF-@o_ezD~yk2no:' );
define( 'SECURE_AUTH_KEY',  '8h4D?J!3=~mur$eqoJb4:TtH/rm#7VP,&|)?p Cd[[6JCp@yN93VIq?<$l4.^hC[' );
define( 'LOGGED_IN_KEY',    'S.}q4:w6s~*+/ZN.=cPBelD}by>#>tcXq([&kVfTBd86d.NStqWb9;2XM0~:[&8)' );
define( 'NONCE_KEY',        ']:PU&R=!6``tMnM4-Oinlk7$y1GsEx$*khmJc->Rpz`Q?wH@Z-s5C7HS]_cFjS_p' );
define( 'AUTH_SALT',        ';YG89<GINDaO2:RrRf ntQ0RurU8?2@EwG~&?z7,l[WHDu(a_bzl^;kSUvt@&FxS' );
define( 'SECURE_AUTH_SALT', ') V8W%j(_i36I`_#`Mdn1<0+y9r^#QI#W=ggvI1YcQp}1%P%P@8`RCy8H-p^kZ<[' );
define( 'LOGGED_IN_SALT',   '<m(8&$VE{?!#-!_9i=eahxs#iiugq0<|{/6`uYr6 D?4|73bH4J]+OAx}jbk0n2#' );
define( 'NONCE_SALT',       'Fx>N>J1c]7V@ nJ*suT*S$6v0UnwQUeU&751GT0zxmC(r5@GKg!rJ%rDlT;)g/k8' );

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
