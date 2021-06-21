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
define('AUTH_KEY',         'xY1GHdOwmdH5ayJPK7lvK8KNnooitxozvTr9Dx5gUWYkRAhBUcKQvD9z2FigZxEObRuSQQrCkHw7IGUlZVDwBg==');
define('SECURE_AUTH_KEY',  'dTwi3mctBk9K/MJsfPhAXGik9EJ9Ju4829qEFHwvWvaFipQqdAdDRwaoQYQ7xKS7z81ElnZ2DIkY/PeA9tn9ag==');
define('LOGGED_IN_KEY',    'PR0zXX07U5aKa71aFgrBs/d+c2x26xK5Xh+PXlTP2+yIeVCXvZPiXZsiAosskvx0Z57sUk5QGyB6VL/AnJD/gw==');
define('NONCE_KEY',        'HND3wng0Qe0+/phxK3sFpbSr9htfF7o1pdImXfcwnQIfjORb6ovlrsy2E0CHrOMAV8JfvcLBNdAGPaeQwvizYg==');
define('AUTH_SALT',        'rpcjoDqe/Mizri6FRyyKN+PyFR8Iw1eLHLYVutJc8f0TDWatUtdeekNhVIUdR0xBUILmxs8pYf6LuL23/Sc7Tw==');
define('SECURE_AUTH_SALT', 'Kxp/j0h6rA8C7RHzUz37Poe7gjUuKWi285QkWL7SAK44nvpDb9fFLwFHCCadRKHMwoVCtbrYplm8W1Zmi3Du5Q==');
define('LOGGED_IN_SALT',   'EQ/rbCtDt+oWziAn4No7pi8BJjUGGX9wU802huMaV9G7RzqARnHd3oimb41jXoJmY5VtCxQHjNvbf93bVGbGOw==');
define('NONCE_SALT',       '3zmEACuYFbeSkQnkX0SY1Hcdu9NLbMxdvtJCarStC/2z40TrHNWCHQ1+bWXV8eZHofkl7zyyj/F3tqXwPvbwzQ==');

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
