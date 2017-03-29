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
define('DB_PASSWORD', 'ktwkmm9r');

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
define('AUTH_KEY',         'q^aL_d/{a) E!8~O(N^:+R2@!au%L5q}R; I !#q/&c3)8v%*?1t=mCw%^.&TOPO');
define('SECURE_AUTH_KEY',  '66YU^=thgYlBDhb#Z1@x2.s,W6`WT5GM?;EB.R6s.{f8v8TV>hP]I3)r}ugpI:&Z');
define('LOGGED_IN_KEY',    'W 2g9$D|7^=+Mq}tO,bs`~|t{!%rQu+E5DdoWWGLoX`EyS:OPf^+Laqhr8lv^FWh');
define('NONCE_KEY',        'R{CL|<`fNiBGdW@;CwCV/sJpx2z@?Fk>IACt b)]ctiv:dH*(4y5uhQp>SSz(-Jx');
define('AUTH_SALT',        'vfK6rXvg.>=xv5GO se,YgF$RK`:5&%%FwvW-JeQm@4.JxLnw`8SO8H{[qAC//Dx');
define('SECURE_AUTH_SALT', '4 G~lb446RQQoNP&]|Y.?h*{I*3u#1tv| ~DMVLW1%cwezXB&~Q[@}$NG9%=w/,]');
define('LOGGED_IN_SALT',   'GBf_j rYxclRWbQAHS[XVKzUEB|haP#o_F$WjE&B5:~Z9$`?N /.;j-2AvG+JwM`');
define('NONCE_SALT',       'K{]Yh^#1vfiRd7CpHKsGnq1wOif!YpD|-iL Jq E6I+$G8^0d=X`)Q?,9V7>@k6V');

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
