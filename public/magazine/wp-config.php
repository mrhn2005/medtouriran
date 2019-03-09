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
define('DB_NAME', 'disto');

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
define('AUTH_KEY',         'L[bt-Pp5ciZR<X{7.Dd%76,AZfA*]{(qi,|_|25x@MbVQIJt6gDP^Ncm<3Di:6x!');
define('SECURE_AUTH_KEY',  '1Q+A{*diurrc)No`r/Dyryq;s{hqj=0t6?HFQw{@:VZT7d)1.hqZ.#MbmlF>_Moq');
define('LOGGED_IN_KEY',    'oJCFEe4|BYiej7_;)JNP?u9g*HD8I(,oeW)QN$v0ysZ.R_1M%LZn2v!u#,JIzd$c');
define('NONCE_KEY',        '%^#[UeBAq8(JSrRdU&Q9Or+.qCcTq@kVpH/0Jmz6 yT0;]w@n=E>p4zUD16Q*~x$');
define('AUTH_SALT',        'WYaQT8w`>8JFz~yC0kKtea4mSbHVB*n<p8(2JWXo&OJq-x.VfyxTlP*faz=t6O%Z');
define('SECURE_AUTH_SALT', 'wh!SHjd%0x(}*pR~]/PJ2QLuX:Vnr!QRHo<?^-v39)gbc,<#] Nbzf{=o=(2Zi7n');
define('LOGGED_IN_SALT',   'Mp<9679y]/<K9J[n`39hiVD-EGtl-A.-n-X(h!!,{7]M5A|u8&5iNB@r1DI:!( ;');
define('NONCE_SALT',       'zGhxY:$NurUw@0-.ON-^,FWlN|q0.FnE0+SkF9Os99b(Rht*D]/_[Z}9|/PuQkrR');

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
