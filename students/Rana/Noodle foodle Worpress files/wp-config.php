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
define('DB_NAME', 'noodlefoodle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Uhz9)<oZW)Q*r{D3r#$)/Ia |{0f8xih6L.:RsTS|oO$|W{q }_:P)PBkL_z5)KB');
define('SECURE_AUTH_KEY',  'SObA5&o<*957K*~T+-6^ ,YZ--I]A!]5OF/jfFrXes8j1[O/AT%E*P) d4uxxrn1');
define('LOGGED_IN_KEY',    'A)AA_IAsc_ofKAS5R|Qz`R}@%Ni(Bt,%-anj|C+-<t;eEOa+3?)oeS-!|^}X]EX~');
define('NONCE_KEY',        'c%bpIG)ckR2iOYOx~(TMR4#Wq?m:bi53=_GF*P{{-AS(RJ@xkUH*S-xgqB:zEjc)');
define('AUTH_SALT',        '5[yC_DqE7-N?4^jW-Hz>k)g*7,XU:l|EvBoa|(*[(kfIA/Q{GhB26-0Tr/~lo{pO');
define('SECURE_AUTH_SALT', '^tBG:arUbv-G|_fMdoQj(xk|(pgma&#0fKy|V{.O_(iqYaMcp7R&4@sI,WO?3lct');
define('LOGGED_IN_SALT',   'z?K|?e]u|gLS!pxHM6Z7`4yien%$^,P_TIQ/-?qJ#S~zke3(Md+oGCvDndKNC_|5');
define('NONCE_SALT',       'vXD&bKd5U{!qpirH+Z,O%k5:Mb6>,h#KJ&OAJc_C+Ws%=K$PA5W-(GQ,#`50N-Kr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
