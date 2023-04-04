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
define( 'DB_NAME', 'arabe_shop' );

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
define( 'AUTH_KEY',         ']k$_z>^RhnFcZ#Ph,iS8Wr]hS{]O^,j!BYkJLw5`yDIj[B 8Z7j?ylcqFaY}erDb' );
define( 'SECURE_AUTH_KEY',  ' HFSE5s^Zm1:eEDl~)r3Z<JF*+5C-?1#W*9t^@at909YDQ+ukX Q(ELY.D9h}tT{' );
define( 'LOGGED_IN_KEY',    '?W-~xMQ[XV%UFs-(Ri:JEHS:Nl>t9%553.I4nhl8yfTQ<SkCTWw3F]seZ;:cC/ }' );
define( 'NONCE_KEY',        '}D`;D1i`)dQ&`4@`$>6^nLO!,tZYj@kVRn)w/akU*)94LeL tZCFsj#A PR-N4Jy' );
define( 'AUTH_SALT',        'Iv0uoonoicq!y21`,^%rf[J[6Z,qAWH3^O.P@N v&z1o |LRjbus1wF2?&i+QiZG' );
define( 'SECURE_AUTH_SALT', 'oJ&9MJ:ai64Y*%:to33-j#Eod?dsRuFtJ(t}[=pq1g4od=~ICx.~p|1hm/ND9La-' );
define( 'LOGGED_IN_SALT',   '>AsbwI#mlli^x$.s=V%JKk%guBe8.KlR1Z5@R&VhjDl*gTnpO~gr)][;kKedXk.O' );
define( 'NONCE_SALT',       'R9>TCp?Qj4wnKyWw,RZYu.o!+~N#Rcs/UE?N@%p1h=Ko=4EPaz[R9K`=YF`iB4(o' );

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
