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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cc97a9bfd63c5cc8faba8452f94ca15a4a38d2ee');
define('SECURE_AUTH_KEY',  '9bfd3ce1af44490708ed54a7b3772ce1c3cb6af5');
define('LOGGED_IN_KEY',    '2b16a4fd2bd59a526df3fccb4c48896a6dfd39ca');
define('NONCE_KEY',        '04061512083d30944fd9dc2b6e2f060cf0b7c006');
define('AUTH_SALT',        '972d7fab8fd41e3eb9ed35d51300ccd7782f3027');
define('SECURE_AUTH_SALT', '5a09a7972e66dd0d6c7665155f7050c02de80000');
define('LOGGED_IN_SALT',   '2b932a4c5c93eec97ddce8ca640eedeaed8ba416');
define('NONCE_SALT',       '771c72ffe1850890bc43022f580321d25e3351b6');

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

define('WP_HOME', "http://{$_SERVER[HTTP_HOST]}");
define('WP_SITEURL',"http://{$_SERVER[HTTP_HOST]}");

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
