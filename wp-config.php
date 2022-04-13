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
define('AUTH_KEY',         '2b3i7jlWB+Q0ZiRGcxiBe/3tE7+hdpgA17xH068Vwv0C+Xw02+RwjVxQQ77+mpR4kzaVzTC1WxCHb0DgUZeadw==');
define('SECURE_AUTH_KEY',  'F09Gr7RB2Kz5Zjpdk9Li8q1M9YilY3pwdgmLGFKnBIN+X3suINsmnagGI6VYyFmWz0HHTfPy3ovFaUJqMXo0Xg==');
define('LOGGED_IN_KEY',    'nqD9rGYAnMrMmxgXwPgml3adGKCmqKODQuNhJw33qvZz7fcthNnSMJZmu+ui97j6S97GQ3/tzl8DlU367cPlWg==');
define('NONCE_KEY',        'NghhbtNalebxH7hYN2CesylWiB313IZaHYn3yGlq2nVilIMAfTWWzfw+QKKFZ1wlqUCEFkDXDv1wRaI1tUsoNQ==');
define('AUTH_SALT',        'wlPo9GnczI06hQJFok0rn/4+fOc/74XcWZA/aVq8hTnVzTuTpkO0D74gq/P+HwbX+DLvAeSnWhlyIffNZoabxA==');
define('SECURE_AUTH_SALT', 'Oi6FHoGK8CIUVBeXwpPktI53llwjrdshbU7erHyhsJIJjUjnS195L2XQV2IzQorEk4Mbwsk5OsTfyY7IsJFtHA==');
define('LOGGED_IN_SALT',   '7J9Qt2tvmttOxmxATkshvH0zR1lw32EshC473sF1HhQKbRV3nSC4GKHaj3/lJ06chgciZ63bCrg8UuIlk5zhKA==');
define('NONCE_SALT',       '2d7k/k+As/Gb1d5vMdKnhbrQ8VJdMJtNQSpcKjX2BKiCHcXf88N987Vm+xufCznn8ExJcxnjSw81ZKyWDElAdg==');

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
