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
define('DB_NAME', 'base_perpignan');

/** MySQL database username */
define('DB_USER', 'user_perpignan');

/** MySQL database password */
define('DB_PASSWORD', '/P3r*P16N4n?');

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
define('AUTH_KEY',         'uI;-BprK(kdKM!=q{2o`FrZ6hD~QCKC$YqI!s_-Pq_+E8[WIw|o2KkqSNnXP&$2t');
define('SECURE_AUTH_KEY',  'E3LZ6CuufF:wmI9)xpQ-L,$G*#>;u?u%rA&>I%?MGNG!0IgiJ_DjPN9b`s%;E*MT');
define('LOGGED_IN_KEY',    ';fQ(u0i4 I^Fy=.?a1[4o~dY[i+C0p=(BXra0lzEIBd#)Jt~B/^4U7kw4aye3syZ');
define('NONCE_KEY',        ',~I%?n~wfNdiXr*)qe1nq<*</7DM:pO=k|)@z0}FiW$P#SyBlJMAo;Y^4/=vxvtE');
define('AUTH_SALT',        '0VZI0T@LA*>2znA2lvv4)W{KKU?(|$/Yzs=_]e{c.6|yfhUj0f5_Ic@ @fwzu`F:');
define('SECURE_AUTH_SALT', '+Z}?F`luNkKOe(gNT:iUsuO$5bBya6uITTEW4$iNb?H>o]<m)[dH#AaE9qbHMDlf');
define('LOGGED_IN_SALT',   'QPL6s%JIff~0|Uswn;{k$4U4x52j}}aTvV>L(7-zq]Cd#3e&M,fU+5WMTTem:QwD');
define('NONCE_SALT',       'p6EB6VaGgI2a8eo~uzevucd<6hF/J#a5xA^q6|FG`Ae0Y0g4)cPYJwWDN_6FuNu$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pp_';

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
