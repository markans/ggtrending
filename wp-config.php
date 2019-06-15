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
 * @package WordPresss
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ggtrending_db' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Z7SvF171emgrXTdG' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'd[?=K203ak*D([i:|aI3XIx96-d5#c`kbd2)o:F7~8s*j-NzZ]x75yN9D1M{:6/r');
define('SECURE_AUTH_KEY',  'A?qeN>P1`;<wo4<M#-F|3O!}P4kT ,9UdFsL{~pyMkGAW{.#.;;|KJ!0ELkt2]Y!');
define('LOGGED_IN_KEY',    'y,qP#5u#KMa!vYG+*v6}K/B_o`B<N}p(I[B.PR/{M::;Hmoo.Jks7vTsrbfcaNIh');
define('NONCE_KEY',        'rb=av~Gpd.$S*$`cxaJd2|Rfo]ox|<n1e]lldO<PS3Jz&x}Q#|ZjM;@:-T&sR+Y=');
define('AUTH_SALT',        'aPt[<NFNJ8)t@$&dPt$Jt7kY:*T&[*<d=4KdM,8;a]y+.8oC({/f&:tv!h%r-[Y%');
define('SECURE_AUTH_SALT', 'YP<}PG0*-#`H!q.BC<bH]HT@g!H4  :VjX*/vz5):d^]cX.@LVM1_`_uxE3H#5Qk');
define('LOGGED_IN_SALT',   'Z--TI#-~Y`J+rl~,1<Mq+9/d*}{mBxnqI@tUZ~}2>;%kD5B3(-9;-?=2 9?Iw-`;');
define('NONCE_SALT',       '%;vzog~n1|TRB#]z}+G#isl=A_6+xLqC &Z+MBr].>}?H+W1w_FI58*)ee)@,Wc2');

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
