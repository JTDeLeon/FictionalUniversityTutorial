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
define('AUTH_KEY',         '48xgTa+ChE5QJiLwZCANmMusW9GxSo8ud7AFQtGffN7pnXdExNujLMWHwV/KxHuhRHm39opGbWHpoMttu5Cj5Q==');
define('SECURE_AUTH_KEY',  'Xm4szI7jMj7qsqS8wM1ICJKmn3X1zLti9gDImsb/QebzuREjlakDy8kGUpyjAsj+ZHrffp3S+l7KkMwMKa8+mw==');
define('LOGGED_IN_KEY',    'nxUTkxSwgFTvfKf8X6093KN/ogeu4edChr2s6xkly0vclRJ/zZpT441pMdPjtbwykeKn+sREmQZNl0g4D1CLkA==');
define('NONCE_KEY',        'mNbdVHPmslPtFRKMwQSC0PmcPfb7Cg4nHXEdHHNrg+jjsy+/UEmOmDnNhJEsnHVDa1S/ya4JLBEuAkCrkenc/A==');
define('AUTH_SALT',        'Wrc5ElKBh/CTAK6SsTMApUjCXqBgTwI2rtRRPQ+CP7g12YPE1w6FH1yXYJfCEOqbunnQZWVEGnTn+GDuU70Ouw==');
define('SECURE_AUTH_SALT', 'y5wEAKSgnznBx/gPdJgI6SLPPbuHUfZi4sVATqJKZYNnQQXkhvYoHSDRoE4XCfuxPRVD6o8Cq2hkVWpJe4hmuA==');
define('LOGGED_IN_SALT',   'u8xSAi6hqtCkGSiNUw9/iMtwQKjhflFn5+fV1tjm0PjtYZuXlscPNQ/k6ciVDNAXWffXsj6lxwah1su5sjjv4A==');
define('NONCE_SALT',       'f71EkPGsS4K6iExDyv6jujqxxezK/bSo0hq+CqmLi87gTQr1DnSzgB/wIhtQGmGH0ZoGXi+UHb0o7YhyQ2VZrw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
