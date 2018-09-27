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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xMjZ453FnWRRJU0zPUEP9Nem1KMBYPsoQcpd8iVh4IdjtxwjCZLkZ5oS6ZzHHCzypc6Lu3HhzWAgbKuAA807sw==');
define('SECURE_AUTH_KEY',  'GRZXi5xGjBmu9uyF2iul037hOnvluhanuMYilHtolQQMylSHoNnVNcTsSaiJQCU2Z375f219yDZoHtnrMsFYuQ==');
define('LOGGED_IN_KEY',    'iYNNpUK0I5W+l9I9/a9hrevNI/4WXi4TA9N0m4nHfbXmt9R5GIBlDxJd5I45fpqao65dkYhs6cfQQH+JZWhfhg==');
define('NONCE_KEY',        'xuPvpcOWRVhGkm+xByK0hUpw2KuyJOYAH60IfOm6zrkLIffrUZ0bLxIPMFI+e8uP2Ftyj72gORiepTgtPmXyeg==');
define('AUTH_SALT',        'MMuNKw2PNqNjJZBAGhPhjVbmGQJSSGSKtgHBhK6YHS4BLiHez9N/zehUmM0OCuxP9LP1o9bPCGSzBkerYhPEkg==');
define('SECURE_AUTH_SALT', 'gqxOWkq6ZCOrkZLCOWDYmdLO7lKDtbGH4SvBfvx6/NGWvX9Vcf3ORKo/4zq48xCGUnUnld6GgXuptbavgTimrw==');
define('LOGGED_IN_SALT',   'aTPi3jYvbPWbaVkkQr/W6hZI3jixsi6DUFf2ItLa+bFRsDJRED+0CDLsQjVqOwc7XPi8cX2oOahZZDo7/laWxA==');
define('NONCE_SALT',       'xzBVWiex1ZVDj0aRRM2yzmSv/ROPC+niK7K2Ag2X0yzMhyRkvHU7KrB/21QVees2wW5HQZrDjg3oL0EKpJCoJw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', true );