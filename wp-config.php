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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_alen' );

/** Database username */
define( 'DB_USER', 'wp_alen' );

/** Database password */
define( 'DB_PASSWORD', '9cwD6RtK~C3jW~Au' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '25|Fjzq99q7@#BISL-@01i!)U0ot7RX!t%e7|42;ICrR&%U3Xb@wRQ4!Og(8_s54');
define('SECURE_AUTH_KEY', '|5R):;g]5&7~TjocZ]aQD2HuaCEM#p~O13]Bb6&25a~+#9cmL5v3w[73%R3skdt2');
define('LOGGED_IN_KEY', '/ZfK18gEK6/7bh]ji|0:t#K1Q8[#wQ(s~2/Lz9f8/e5I~F28SejLpP7(2-DV3Kc1');
define('NONCE_KEY', 'tO9O4]!Qj!~W8so&[v8bGZ22q2|y0_k7S91vL57)4hIYY@T84j4_1s1Wl+j]yaFq');
define('AUTH_SALT', 'tB+-8RF0[jwv9*7x+:P43tG692K7ajIKaaJ%FQ%w+5;;]&gq(&N@LC_%3k&at0p-');
define('SECURE_AUTH_SALT', 'uUz-v(4j+7Ql96sBe3W0lP6Ao2cr11EQ9/|aM4!*GoSWU9Tb7baF3aM%]6Jb[ez!');
define('LOGGED_IN_SALT', '-[0n[N%91#0Wc54+4ua]3MCMUIf%Gd~d781oj5@0VI*3[::C4HNA23j5%xo!0*A%');
define('NONCE_SALT', 'jr08n32)rxQ1n;lSFTT47a+i|3R3i9hRl:D)nOZX]F06~071+88gy@JV0Rr6+IGI');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
