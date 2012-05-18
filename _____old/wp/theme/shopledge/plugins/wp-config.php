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
define('DB_NAME', 'grosro_shopledge');

/** MySQL database username */
define('DB_USER', 'grosro_shopled');

/** MySQL database password */
define('DB_PASSWORD', 'ppSzzBZEg;*.');

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
define('AUTH_KEY',         'a[:uiDC`V2C&jB<:*}jQzV,xMCxH5Mh>~;`q(^]5`wkQBdBv,S|t +J5[(N}{!?~');
define('SECURE_AUTH_KEY',  'm&;jy$b*W^%@SxQw@[>Dk74O=!{#V?406iixwY-RO,Qr:mH+-=E!;)[NLPNM=X07');
define('LOGGED_IN_KEY',    'x{e^(0i~64la=*l!#Zq%By|e~6^a`n*6/%}!-5@+xy|Qe)Uf`0)5:<{e#7n_+GIf');
define('NONCE_KEY',        '8re*Un@BT|- 8{q`HB`Rm9]+%e>?F<lf}$8xM^Zh-~Be7N$Cbkg>-wyl^CJr3(1K');
define('AUTH_SALT',        'i4hsM-O+OPaZPz_lhr;[5eZ#i7? 1i,1+em5/K^I9Q2-Pn@Z@LxlIu4e*]$r^nsl');
define('SECURE_AUTH_SALT', 'k+(2_%XC$C#BA%0jsz.Az-%rYj&8/2;|`m9b?Ym6s_f6XT,+-gZh=C%G/S:}V[v7');
define('LOGGED_IN_SALT',   'Ob^t^HYdp@6O!m&{.8{0X&}H6xw($7nkF-<jg7Stj?R>Ea8AS:tT}E_]Stk&h|qy');
define('NONCE_SALT',       'rX 5Z+K*Pr&Oel.V)vg/+ZT>e: kg)2#=+U=a.xrCy><W]d=0P${8|xAcYVW|Us6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_shl';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');
define("WP_CACHE", true);

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
