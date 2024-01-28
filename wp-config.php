<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'n1601386_wp697' );

/** Database username */
define( 'DB_USER', 'n1601386_wp697' );

/** Database password */
define( 'DB_PASSWORD', '8u(2F9p[4S' );

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
define( 'AUTH_KEY',         '3ambrz3mxjqngfiqifthofqwr8abffv3yaeregoukasecrlnwr9amaoosijq7yl4' );
define( 'SECURE_AUTH_KEY',  'kayunz48sqcgevmhpygeagztubmchovfpwcbzz6nfoimt47seiztjo4wgdxd4v9a' );
define( 'LOGGED_IN_KEY',    'mxkf8pu1pignxnujmfqh1fairihpan5l5iqbjzalkfg91efhvtlg2pnbo3pjik77' );
define( 'NONCE_KEY',        'ucxpensfh1r6ucuynp7rvoxk6185b3qyfqjzg7ziohqbyef7edr4wc9ss1hzryk9' );
define( 'AUTH_SALT',        'noqihr4vsebylgeo3opxunxajmqo4d0zgzk0ro5teh0s5foyqgovjssjwuyboliw' );
define( 'SECURE_AUTH_SALT', 'xhpmpy9y4kofiqlq9hgpafo0ckpu18lzbrggsc0aimc4mqbmslxz17tihjiz35lz' );
define( 'LOGGED_IN_SALT',   'uagzvwx84ijcoy7ah75hucroeo59jaegvmnl8knoljgxh6dmgnykvch5w2spzmiw' );
define( 'NONCE_SALT',       'ucnxaib2ibxroxvyqivywfzpwzei8kikmdpjhz87gbavzkandy700vlchrlzaarb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwx_';

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
