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
define('DB_NAME', 'wtest');

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
define('AUTH_KEY',         '(W]s-R;|)RhBHYX+*Ez;;yc>|LpxTcpEWV(dd%.htIdo;:YJ3*dVcyB&acQ_=p<b');
define('SECURE_AUTH_KEY',  'diuRg+6dUaIr$(w8PGja[Nv_C;CV^oXG!*l`.hK~vnj3LWZ.tO{z?;[:z-!3/Wv$');
define('LOGGED_IN_KEY',    'az0BnSYK:M(N=#PWV/!rQ)XE=|b%h$*p|9Nu-=O.jQ?1&ez<Q*.(mhXWe(u[qiZX');
define('NONCE_KEY',        '.yM;s_g5cuLRs`QTzt@V$xf06zR5>=ZT#gHy?h0u944apWv/( n<!4}n&TOZ?TW#');
define('AUTH_SALT',        'wwB<aVBz({k_z=@:Rb/g`Sl=}^ /1}^BZXzZ/N@l7!?.RH|w~<Wb5xc>(zF^xb^D');
define('SECURE_AUTH_SALT', '8plBJEGQ^}}&Hnt|27Jaa5d*|~&dbf9|.I(vUK.0wn1U.-WKK%^)Lfg.3EDHInYG');
define('LOGGED_IN_SALT',   '+zF[2kJ5Ij4N5xl6jwFs]#vgBZSE3,z]b1])pqS*)ka[;Y>UwiQp:lm0N!B|im(T');
define('NONCE_SALT',       '?kz~}[)!uu>@D-4b?$kV`W5J)bDpXQvMd;o!@r`zE9=EfYYO@|* Bf7A7S~5LAd^');

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
