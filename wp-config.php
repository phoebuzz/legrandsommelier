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
define('DB_NAME', 'legrandsommelier');

/** MySQL database username */
define('DB_USER', 'wordpress_test');

/** MySQL database password */
define('DB_PASSWORD', 'tennismen');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ' #Oi2R9i0{hq R.d`(5*S.qV|M(6M^7eWUu$|14[1`3|p|:9c4 u/N#f3C^kJ04m');
define('SECURE_AUTH_KEY',  '<uEu|%Wv6bON;>ttUq`>,]RzU~X8G##},SAdP 2B:-[mIz9vdve;Y+S9E2UM6eyZ');
define('LOGGED_IN_KEY',    '.[0*-F=ZO+G,(~O.nCVbG.]rTS?p?iKwOyExiJe#qFZ=}XRyX0+T.x+psI7>o-CJ');
define('NONCE_KEY',        '!YB@p-!O$}^FgSId+SXNJ]IeFp8I7c[?V7Ruq:a)9}2!N{-UzV5c/oN3{{wGpkNT');
define('AUTH_SALT',        'U=)e.*#(-yBY+Mc=|JYP2C#^?+BgG}hnjuF`m3%R5)Y0o8[)|KW++[UPWPWlcxPl');
define('SECURE_AUTH_SALT', '#VgYVy`bcC845S]]-?J72ve5L`mU>Z.~==E5-FA%?Tk56L/!BpauL<UIc@tFL&d)');
define('LOGGED_IN_SALT',   'Lhf SQh]t|U39lYA)UfKmlh!Y8)) #%0jzbfc>lQ@Aiy2|b3r+_,+U{/u|yL#Zbd');
define('NONCE_SALT',       'yN?;8mV+Q=K:+|mdwp~($ma<S{;LUAFz*81Yu^ywg9Nnnk|VPnw*;Tk$hz*BfqIn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to Canadian English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * en_CA.mo to wp-content/languages and set WPLANG to 'en_CA' to enable Canadian
 * English language support.
 */
define('WPLANG', 'en_CA');

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
