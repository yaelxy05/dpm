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
define( 'DB_NAME', 'dpm' );

/** MySQL database username */
define( 'DB_USER', 'explorateur' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ereul9Aeng' );

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
define( 'AUTH_KEY',         '$2y$10$jBkZ6ND9Q0FUxa5rqnuKn.O7ZxEBa5AtKM4qsG1XaZmHrqh97gUva' );
define( 'SECURE_AUTH_KEY',  '$2y$10$zWe8D6bCikH4uPbnM19x2eWSyFaM8EEuO/ETIx3qKezUku3MmvJfS' );
define( 'LOGGED_IN_KEY',    '$2y$10$rMibqRihTWWO/e8r5LL.TOsIh/muVxbfiBGTtpEAPvmPfmL/2MdsW' );
define( 'NONCE_KEY',        '$2y$10$WitI7wF2Y1bkCruJsNuqiezxLokbNqUQeZnH1Y98NZfdIuYNVDOMq' );
define( 'AUTH_SALT',        '$2y$10$wDfYrPqJ.iYVoJn85Isxy.yVgWCmCHeEBDWM4.SWsmKb4zxIJYcRa' );
define( 'SECURE_AUTH_SALT', '$2y$10$3ByA3fmP0nuz.FXJdPwrNOXIyea9Cy.AleKmB5/dpZtUrDtQtYRi.' );
define( 'LOGGED_IN_SALT',   '$2y$10$ENy4XGrrl4FSR6dSW14YKOJXp1thzJnlK93XamMW4xxzGLH.7DiEO' );
define( 'NONCE_SALT',       '$2y$10$UoZZhdHpDKYIQ7cpgWIbnug4US4FjX5XSQbj2ty5a0jCJsshFRos6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsh_';

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



define('WP_HOME', rtrim ( 'http://localhost/apo/il-etait-plusieurs-doigts/public', '/' ));
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
