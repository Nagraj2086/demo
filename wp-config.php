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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'D{.+E;{7sQ$q_Nwq>p#& j>d]?@h6ydY=n?nfM7zf{G|vj}OmR=Sw9S6&p^T|09A' );
define( 'SECURE_AUTH_KEY',  'P!=7]IxQ0yoRsX:^z`2E`(i]l(6zp}bKdU$kW d7i?9)7w}9qrE,+26j<BmN2?}t' );
define( 'LOGGED_IN_KEY',    '|5N{q<_de#yxnlYTT9/=5OVHRTP.J8xC@6sw&TK#7bW*{$(rg4Ls>Xri@2*L/FvX' );
define( 'NONCE_KEY',        'C  ^{~.|I?0PNSU%rLg>CSV,zMR~]dxfchh)4/|7^kqETWx/iG_Mu%`8cPBRz3?^' );
define( 'AUTH_SALT',        'j/X_$:B,~vXt5?~oEh@CUTP=xk0/D*Q?`~/O|ezwEiHnG@=;sL%HzbvA8w`.Z<n{' );
define( 'SECURE_AUTH_SALT', 'J o+q)g5W E{}i8gY-c>WNSJg6~Ex@ow%U9^aPk:o&<3t]:t`$a7-E{Rz6NK_}vB' );
define( 'LOGGED_IN_SALT',   '20b2C:*_5QAI6$N+zL<B-3l=-OjO!pa..y[:>dwTkCP_Q!<^oNHa3sN(pG991K<B' );
define( 'NONCE_SALT',       'l[:w)~5;`]i`t@#woxeO3s-UwOQ,$<;;kl27)euZ4pl<r]=B7;Ht`ZfuK#hPh;$}' );

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
