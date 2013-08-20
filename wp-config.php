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
define('DB_NAME', 'kwcm_org');

/** MySQL database username */
define('DB_USER', 'kwcm_org');

/** MySQL database password */
define('DB_PASSWORD', 'PEsHuNDi');

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
define('AUTH_KEY',         'HM-Kj+dBlNMOdw&*QDnJLj+7@Fuctd9b-{A=_GH++.`OR*pc20aH v#;R?X7U[y3');
define('SECURE_AUTH_KEY',  'Vi.Y|@A[_dE)|$W6Z%{A=<)+8[%}F3<6XOo~)D4P0LdrGI8UPd3rIo=e5~?/k@(P');
define('LOGGED_IN_KEY',    '^khgxIYZ;Z3XQn({cU%54S163D4(/C5JSvuIzt-La7*p.$>b-x}(ToaQ|+_ oUN}');
define('NONCE_KEY',        'Db*ygm>Eu1tL_,sFK&FYwy#444oAX{0H@ }.^o%|=I`YRfh.i$6kaz-uSjE4;gv+');
define('AUTH_SALT',        'tLDX|=J]M9Yq:TG5CFAt0^QxFSb/O@j@fsZ6-(,t90uNR?7CuM1PW=?3f/F^a#HQ');
define('SECURE_AUTH_SALT', 'P6IL(_E67?v<w[<b5P{nJ~nx~yS0N5C%y>IP@#[CfJjV;b!@CR~]lnLg,a-1_u{5');
define('LOGGED_IN_SALT',   'wo T7VR!{4?)j|kiZCZ%62IN)oc*j+KY^|4-rc0a/nbWU_!2q[G/6!P/::Kq0OHV');
define('NONCE_SALT',       'zCm| $~?zyD_RqjU]w+J#9j1X;u9;Kx*bD6YP<GIzGeWUbV#)`:-4|5*T?aMmK!/');

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
