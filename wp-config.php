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
define('DB_NAME', 'EPM_STAGE_DB_NAME');

/** MySQL database username */
define('DB_USER', 'EPM_STAGE_DB_USERNAME');

/** MySQL database password */
define('DB_PASSWORD', 'EPM_STAGE_DB_PASS');

/** MySQL hostname */
define('DB_HOST', 'EPM_STAGE_DB_HOST');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', 'http://jenkins-test.example.com/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e7fb5edeb0b96cbed2d29ffcf434703e4f693f8a');
define('SECURE_AUTH_KEY',  '751d618ad7c76b9f6a6326721e86aa2a777d598a');
define('LOGGED_IN_KEY',    '99cda950da225b6ff3a78edc8302828a199fbd5b');
define('NONCE_KEY',        '0fb1d314ebc54046c1b1d56dbff095994d458c36');
define('AUTH_SALT',        '17e381a8f0417c2a29c29fce42a706d28c174a56');
define('SECURE_AUTH_SALT', '1687679193732c6b84d3c0219b9bfaf0ddc3cf7a');
define('LOGGED_IN_SALT',   '83fa77ecfb869e923671cc29e02f3590dbb618e8');
define('NONCE_SALT',       '51b5f6cb43909ffd8e127e00bcc51b4d3da7fdd5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
