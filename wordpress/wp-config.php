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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/wordpress/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*ij!O*^?wg/_7zn&k[+t!*|pNa<+;s Uz,f?Z;^y/h9)vi;WrtS4,L5*`l(TBgTA');
define('SECURE_AUTH_KEY',  'yW[b2++Z:>56myZ6Y/CB`6[l%w5iUgwE#Oo<~,Z-!*/pKlgZZYKbO$EcL2[i:6I3');
define('LOGGED_IN_KEY',    'TF*[znlp<G^FB]NG|{_C:68;0RIJNQ9!3<@wZoF6{h|aO4 kF4NBZD#Z*~Dci[6V');
define('NONCE_KEY',        '#;s*W*ka~gU?CAE2bk$(4Dsj~hc r=[4f$oS;+8@ -Bn`J9lE CRY~COFq!=Hq7~');
define('AUTH_SALT',        'Z`mwpN?IO)H|tzEND@4NJ4!.{_(Yw]2C%QM{~ `n$U/GD$sxuD`@__t7/?an<2=*');
define('SECURE_AUTH_SALT', '8>D!SqrsVtK1fj:eH#=V5v0HT<yx@!q]6_fR[<n0}6&Am5+.=Gwm|`S9]H}=[)1Y');
define('LOGGED_IN_SALT',   'zs<C!+YZbsi<D:J#vMn}a^|a(c?<$m^kj(y[{k!sC%>3+UIb<eM|=PlX`.;RL|o_');
define('NONCE_SALT',       '<~*[4!4tIzf0&x2p(e*p_a:fz#1zuYGhYxn0 -d2KMeKqu/hC<GBhar,B=8cN{Mz');

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
