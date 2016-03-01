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
define('DB_NAME', 'exampleDBguoic');

/** MySQL database username */
define('DB_USER', 'exampleDBguoic');

/** MySQL database password */
define('DB_PASSWORD', 'kZTNKE960v');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'o!-1[G4RKhkd!z0|C4RVNkdwo|@!80VJgYvzr>!8}JCZRVskJ7UNQng@v>^70NRJg');
define('SECURE_AUTH_KEY',  'Oht]#D5SLph~w:#D1OGKhatl_~C1OGKhZsl_-~5:K9WOswo|@4:K8VORoh~s[!GJC');
define('LOGGED_IN_KEY',    'crj^y,IAXbUqj$u{,<E7QIfYb*y{.A36TMfXunq<^7<{IAXMjby$u{.AMQIme');
define('NONCE_KEY',        'RgYvo|>!F7QJgYczr>@4}JNFcRvn,>^7JBYcUrf$v},>MEbQnf$^y,B3QIMjb$u');
define('AUTH_SALT',        '}B37MEIfYvn^y3{IBYMqj^,$3{I7UMQnf$r<^EIAXPjby$u{.AMQIfXyq<*6A2');
define('SECURE_AUTH_SALT', '<EbTqi*$3{IAXQmf.+2{IAXPme+{.A22]HAEbTme+u{.<E6TLme+tx;#D6PHeiaxq');
define('LOGGED_IN_SALT',   'APqi+u{.H9DaTqe+t];<D6PHeX+*x;#92PHLiaxm.+2];SKhWtl_+~5;L9WOlpi#~');
define('NONCE_SALT',       '3IBXMjbyru{,B3MFIAEbTnf$uy<E3QIfjb*y{.A3QTMjbym.$37TLeXumq<*6I');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
