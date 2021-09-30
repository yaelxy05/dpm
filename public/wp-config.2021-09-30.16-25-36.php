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

// JWT AUTH CONFIGURATION
define("JWT_AUTH_SECRET_KEY", "896979ec66374610ae51cdc2a7dee092fea59ed7ddce183758e0885257fbffd5da99ee5d");
define("JWT_AUTH_CORS_ENABLE", true);

// =================================
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jdjh3261_dpm' );

/** MySQL database username */
define( 'DB_USER', 'jdjh3261_yaelxy05' );

/** MySQL database password */
define( 'DB_PASSWORD', '7E9XCX9SqfWN' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '$2y$10$zaS0/H4XQt6qeNgR4PUzAeCZ9RMJemFmHL5.DaG2VyAHoaQt39WES' );
define( 'SECURE_AUTH_KEY',  '$2y$10$yKCdaUUZ4ePckLSQ/U3XVumscFSLLQ89kTtuOM33DrIjLGrXJEAF.' );
define( 'LOGGED_IN_KEY',    '$2y$10$1hsvcgr7dEBqgzcWUGGllO1DviuCxsSWevRlxp6JfftPtd3sytJ0G' );
define( 'NONCE_KEY',        '$2y$10$iCjY.1.OMV2hmXeOVa5NA.sP6lgmZUBFsGI/9BfLnpx6Bb2/mB.ei' );
define( 'AUTH_SALT',        '$2y$10$sKBUt9Re3Oozc.aYljukVuQO.USYeEx9PCoh9CWu0VqBpNfidbami' );
define( 'SECURE_AUTH_SALT', '$2y$10$2EhHyHk6zazTst.vuB2JIuK44C6bEKehBqPJa9XmvhdKVtDW3nR22' );
define( 'LOGGED_IN_SALT',   '$2y$10$CEDW/M7e/v6D7fQ917sPjOy3GGdQ714B49Lg1Ruts9lziLYOpxPxy' );
define( 'NONCE_SALT',       '$2y$10$iruEeP1aaZCZtBzxSiD93O3dTkV9O6dHILpWMj6U5Pjot3pRE4i3O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */





define('WP_HOME', rtrim ( 'htpps//dressing-des-petites-mains.jdjh3261.odns.fr/public', '/' ));
define('WP_SITEURL', WP_HOME . '/wp');
define('WP_CONTENT_URL', WP_HOME . '/content');
define('WP_CONTENT_DIR', __DIR__ . '/content');
define('FS_METHOD','direct');
/* That\'s all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
