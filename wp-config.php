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
define('DB_NAME', 'baking-in-progress');

/** MySQL database username */
define('DB_USER', 'baking');

/** MySQL database password */
define('DB_PASSWORD', 'g7p4uyG8');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '+9n$ikYo+kG%iY&q^1!VC-.pKb`LLGTj&H8lxog5Vbip_&hO8:g&v[2OD[8A+Uhr');
define('SECURE_AUTH_KEY',  '+R558iYU^LlA-SGO3eJUs|Z(dch`Q)TD?KN*(6ePb:}@QB*7z$S,Vg. `LjiA+e:');
define('LOGGED_IN_KEY',    'O14?*f!x5aEiz=;+N:3|.jSOr4XU8Qk:)*U[*J2|ckx9PqF;I5iInDe$mbkj3*EL');
define('NONCE_KEY',        's>iIUMdAK:0L&|ds-@c#<!JR~sI2*difZ4AWBn?a8H*-/1B+g|d2jnM3V/Zb |2#');
define('AUTH_SALT',        '-]m<_ t$N&1zs}tm{IcLNcv~!s12%v}S,+>Ca6F-tNHt<ltJ1MZG=|6=dz <)c0:');
define('SECURE_AUTH_SALT', 'tHqh{,-/bOFu;.wpl7xtBQ3W>e@{IB~HYI|`@+0PcR)6S)6bgi>y;qW6$,?Y,,VK');
define('LOGGED_IN_SALT',   'A=cFDATc,.(F`6T8DGX)4aJ?Pbo&oH.9wx~hl>v>8-A)W;-H-psc9U(orH}XBGD(');
define('NONCE_SALT',       'OB@nb7PGH8$TO2QM&WyuR.a3W2gt7>4:ZG|bbcs]7?QP,4?08*)mh|ZEE_pLK)OG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
