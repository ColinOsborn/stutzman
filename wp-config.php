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
define('DB_NAME', 'stutzman_dev');

/** MySQL database username */
define('DB_USER', 'stutz_admin');

/** MySQL database password */
define('DB_PASSWORD', '8QK1JWvvLnaRS4H3');

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
define('AUTH_KEY',         '?v&JB.Zv0@`U=JB:PT.QNi|7]z*C5l9SdE$NCsNb= . liq/kLaIMympqjv@|G+q');
define('SECURE_AUTH_KEY',  '6e,#`VSD}6GJl<T_;FN*;vpL~lT;%#^#Qc4xgXN9,=ZUS5Z08!vxtJ,DwhVBm@A?');
define('LOGGED_IN_KEY',    'J.Td?J769rus*4z[5{@oKdJA_>9B9T0cd<^PwY%&8@AA3~8L:$Em9q5yM&R@kFtk');
define('NONCE_KEY',        '2uk}>sfI)_N@W3MY$j*47~%05lFwMg8#voU`uCifpeGQE>$Ta8UWVI(`B7P|edyp');
define('AUTH_SALT',        '^i?1XLv:(.F5ldzF?=h!;f4`wJbWFdvr!#TqsINpirf>4gh^{yQ:^uD4zgoun(o(');
define('SECURE_AUTH_SALT', 'h(1*f(>{E {W*ya8;|6*f-JIsoOKb[{GCH+w,|<Mi{3;T2O3S?%f>;I6z0c1>]P1');
define('LOGGED_IN_SALT',   '+RRTdt</4mbQ_]WH6z95@Bij|<4~LogDT0) D+uDNahdz4=D0U!GyG>,(^MGqjb%');
define('NONCE_SALT',       'zmvx/_jKRW[F7Ee%r>Lbz/|W1,;qK~Ym,=:X)V@TyxwEqgLF,Hu^}m~)F|KfBmm6');

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
