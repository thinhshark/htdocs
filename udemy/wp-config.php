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
define('DB_NAME', 'udemy');

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
define('AUTH_KEY',         'N}5nD`9]KA3B>t{y>!=c!M0=OLHXT[`:RKZ1w)nCWlolN@+ZQ4kb[z~cj#}[^^<f');
define('SECURE_AUTH_KEY',  '8)lHD>GL0{8N)(|;)obrQ*2fiSaF&/~L &/08g[~B|-b{J;SEn-uD0oM[[vaS1WE');
define('LOGGED_IN_KEY',    ' m|Y:w6c^bE~0tI:v@jH)4@Eq3[wp<wbB8(zKFpI#6d3iZ@Tr-&k^]k24[8)8#y/');
define('NONCE_KEY',        'nsU{P!6yoSmU%oVyhaq?9dP]<^<@1-+aHWA=[C&ZmnOdEQ;4-tGx^NK#6%2`K7W_');
define('AUTH_SALT',        '5iif|18|6eUD;[wWo+k>T,e1jjYDsOng{OTEi.jsCwC..E?]B~aX>hg6w^KKk|F$');
define('SECURE_AUTH_SALT', 'MG26;lp#SZ#L$t;UjR49yO]LSKFXX]ky;)bN_0Mq,,d<bVi]){bu:JQ:Rd!)?Q>+');
define('LOGGED_IN_SALT',   '(t9@7Ke`C$&^@5zQ}k(t%E+.AC5`W= C}snCMDWp_@v{XE-25>|14ptq#0=Hd&-$');
define('NONCE_SALT',       '^M4$tFR6b}zsH.YYs^!{!7U]BB5?b`_`/Nd@f: q8Op!V>!|>Z,%gud93BrMGROs');

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
