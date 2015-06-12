<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rkarimra_grkp');

/** MySQL database username */
define('DB_USER', 'rkarimra_grkp');

/** MySQL database password */
define('DB_PASSWORD', 'd59k9c8t6oor8zcf');

/** MySQL hostname */
define('DB_HOST', '10.169.0.16');

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
define('AUTH_KEY',         'fqrHjGcqxDj76KifFNUZHG0EXCPxvFHA9vIzYMm1y4bRcy6egLXu4q8FIWisvP4n');
define('SECURE_AUTH_KEY',  'Jm0StkICOvrCMnvPmAH5zD0mIczR2tvIpVNad3SIvwo9abwxXj7pBV5OrSio95RO');
define('LOGGED_IN_KEY',    'DhnxWO8xn9pP1XIDRRvd9XtvB7xue62ZvY0PmSpuyDl0onlHGz4fNZuBKimBj3He');
define('NONCE_KEY',        'rmsHXH3hFjyzNnC0SCLXm0hDnjN3GmUUuE9FG1ogOEkvyYceiztbRwt9imQUR4pK');
define('AUTH_SALT',        'Eq7XEOKKgK2MRuEI3gDYKwZusYczsN50hCqHRZycAFcRPydeznj10RERPsxNkZvq');
define('SECURE_AUTH_SALT', 'ruTIsZ2glGdIMxW4CAQExbdL4CTakry2ocVnf0hMsnemXh5lo8Z1kNhs4iodqaO0');
define('LOGGED_IN_SALT',   '2knl5f5cSpVGqxjQbiyXNH2BKLJUzCPEmsrcGIMJhmBloYXjPvO0ea5XNCoXSD6v');
define('NONCE_SALT',       'm3uhbHowaHteoHLmnHZiHST66PRtXTsBSAA9WPDwCxbpzv7Z7PWQQLPDtUjDagkH');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ftu8_';

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
