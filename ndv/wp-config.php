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
define('DB_NAME', 'ndv');

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
define('AUTH_KEY',         '!w-)c-dNL4,p!aW}@]td!CP<v-u}BcyLNvePiXVqZ^r]K={Jn2TJZ!0#mrSni&&-');
define('SECURE_AUTH_KEY',  '/ebN<73nDJ)n]8-59|H?6|MT{1Rx+ul`#7SztD1dvk?FKq5[u3%qZ+b0DFw=y@hV');
define('LOGGED_IN_KEY',    '}oI2N]WdK#.:rWlKqYkF#dG(>y0p1l7X_4GE)${E#^sb.g|pzVIV#x6WPs2i/1`.');
define('NONCE_KEY',        '`V^+4F2>,3ZKH@ D6]u3ByI#lbT_?-0C@$M[z7@I<ZOs8_$$p@#h_;Vwy0MHj=,l');
define('AUTH_SALT',        'NwmC@82b}T?Qb:q[gT}C.^tGIR?RbW/JW.$CPMn^U1voB~Dl6LP`moBKc{qMHw]u');
define('SECURE_AUTH_SALT', 'TlDeEUM!csZH@n)}*If3Rj+y9L_1{4vT|/ADfwJ&M,/#v<mWo<#aY0wG+7B[/N+E');
define('LOGGED_IN_SALT',   'Qkms]2^S_fMlk%AwV2.6W%5[.1&!$KAHvYf%wf1=^^f09IfRN,k~P}3tt,qSD;Ys');
define('NONCE_SALT',       '>r}L%/Z^/=sd8Gx)9H-{xF^g1W0RUNv3 j[`!=UWmAK`ySQ;$+1O1iM,%knD$wsK');

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
