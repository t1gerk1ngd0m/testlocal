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
define('AUTH_KEY',         'ZkQH1dyrzPvSxYAZgq/2RCKXs/K/e2fBD6v1K1LYjdVp8ggTHbw0C91S+frxcIp2uKeTT5Y2t608a0nSwWdCLA==');
define('SECURE_AUTH_KEY',  '24W49QFLRw/YEuR/rFfzpP5fQZeaa876bauPKmAG8b/cwFvbONGGxZlZRdGXgH9XVXWb7hG/rYC52j3dNZ5Anw==');
define('LOGGED_IN_KEY',    'XjaTsi6MWe20cBIZI8AzVA/9m0xLnMPBHVpK6OPdP3+FCt/0al5QDdDeSf7RNAbd3ujbeBeQld3AE/DgIVdTQQ==');
define('NONCE_KEY',        '5AdZ5nqTE21yg2muejXQbHdXsfCmjzYVCdKWl/PI5q03XQOPdsvvSX0+U/Lc4qyGdIJjIGawfSh5zEF23Tr6oA==');
define('AUTH_SALT',        'Pg/ug4pfFLWXpcAJ2sObLde9QuTR8h9d/cibsOVM0a96bUyTdb1zje+AZ8wDcUVxBBXWP2htE0ZKDSzji/vGrQ==');
define('SECURE_AUTH_SALT', 'psch2v3jf3sJWreT1uxQdCJJpVijVS/ziho62AnwYBlacArt4hHjdyLXz/53tQ24DVbMLQbrIaP5MXdy4C6NOg==');
define('LOGGED_IN_SALT',   '0oL53I6TYfyO+2X0CdVK1BNC9KeJwZaicnq3z2gVX4hrFFtzm7WQEWcyLsgTHG2Mb/TiD1gE6o38vhz/O6fcSA==');
define('NONCE_SALT',       'NXxPhpFzTMcfzMuR37O4srRaruIasM77m59/bDfIxi612CMuGo6XQLvla9BWcVHGzS71AvRTUbWkqY/42ZYjww==');

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
