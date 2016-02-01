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
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '2d27e0e587');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         '2ad48144027694d6756a5311f495ad8aba2c69dc6e10d5ecaf1c977db5595cd8');
define('SECURE_AUTH_KEY',  '5eea5b9784ad4567bb1b085654a89aad7e40d09b8480f15470a6cf872299df07');
define('LOGGED_IN_KEY',    'bb61c7e5359a5648a0cbfbe5e89273f9fb0616e745b0a7b1523fc2daea27780a');
define('NONCE_KEY',        '4ae8356dcaf63ccefb719ee0655a8998caa64565ce8bd7b16767e8e25db57acc');
define('AUTH_SALT',        'e098f8d941c56b8acd226967289b030ca2aafa71bd91c0abbb4750c27770a4d0');
define('SECURE_AUTH_SALT', '2bfadc68fb4518e8956df7869071fa9ec85f1c2ee27b87709cf1f199f6286a56');
define('LOGGED_IN_SALT',   '26097966a21cd28c99ada0d6037e290f342bd2cdb9253b595d3eb95515a492e6');
define('NONCE_SALT',       'f72e28b89b7aeabb27c5df0c179637718216954f4185086c2a18be9094b98582');

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

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', 'C:\Bitnami\wordpress-4.4.1-0/apps/wordpress/tmp');

