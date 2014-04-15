<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db42830_x3dev');

/** MySQL database username */
define('DB_USER', '1clk_wp_YPdOXgN');

/** MySQL database password */
define('DB_PASSWORD', 'XN348kgD');

/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});

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
define('AUTH_KEY',         'Je3gaPbP xLaZvLDJ TVsBR7RJ 627TnrVQ CXtgxyfw');
define('SECURE_AUTH_KEY',  'YAnjzfrU 8yv6LE8n PHpMyizp GwEMCLgG SSkPjque');
define('LOGGED_IN_KEY',    'w4VzPMCj sDw5cDjx 8OyZMo1M I8Slfrdq hV53tR7Y');
define('NONCE_KEY',        'WdNdwC82 FAsYqLte gFoiBQtr FvUt5RJo baaKWey5');
define('AUTH_SALT',        'ATxZ2oor 1cBAoeji yhCuU7z5 1dxuYitl 15c2C6Pt');
define('SECURE_AUTH_SALT', 'QP26HLqJ tLX6NObI KjglionM c2H6gRZJ 5FEnLfXY');
define('LOGGED_IN_SALT',   'oMAS4WEm bQCxpzNk yoJqvo5A D1fH53HU gRffMZf2');
define('NONCE_SALT',       'XLn5rfDM mQgviLUJ nDxmrDTi nUykxA3S vjBOxaZM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'x3dev_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
