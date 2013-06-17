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
define('DB_NAME', 'davidlevin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'w3Y;L?p)^g9@1vyqD2tN*#Y59#io$Z(-`CWAC?}u`^tasA{kE<kU#aM.cf#80r|k');
define('SECURE_AUTH_KEY',  'r+`?6.=R@>O$H(amDnHKFmODVku31AO0aq4_Ft?Qr<2BG7,:k/&G6cn+$-G+_~/<');
define('LOGGED_IN_KEY',    ';;AglicM40;Wq4;m~!M}wv?X+eYYa@Ek0Z1yXfV.Xh|NNr]#m/fOBbMI0aug>C`U');
define('NONCE_KEY',        'Dr706%t;ZHEz cKEX/R{D(7}?b;Nfc]w9~G9H7W(nG34$O#YdY!NBV+jg e}!| A');
define('AUTH_SALT',        '[6:8flJK/GE)1(Ff5-d#{R;ORC%P,.yl`,%]]p|2b_),mBTw}F<Xti6x,>#P2%*W');
define('SECURE_AUTH_SALT', ' Q_b]l|~iAN{lisL%{q3G}WTR?4c}e4%oi8[|m<gf~y7<*XGxe5:b#Ucd)[8p|nZ');
define('LOGGED_IN_SALT',   '(9JKfYx;rM#[|!=Q2+e=o-Lwkz(QndE:B;0*vuEArT0RKv8fzVnr%H3*A=;!w&D5');
define('NONCE_SALT',       '^Tn++JDMo9LjOOf0k,{*~:ZC0b0>{*Z7W}^8qY27Sx&^hBv`u~|vW1)dZ^`,{JDC');

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
