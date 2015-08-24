<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_quanao');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qq123123');

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
define('AUTH_KEY',         'Xo+7/%8e*(Dx$&X+-t|3|uj*P!_&|:{te+]$4zHz|Dj5)lW92N`8!,)zY f/y+c5');
define('SECURE_AUTH_KEY',  '8c5!Wt0$AQC-?|#:FiY=%GQ(xB:478Y~?_[KcVJlz2gcp@6%l=-K[(XJQFi9j}fG');
define('LOGGED_IN_KEY',    'k+JL>;):Hgd1-oYAm{S8F[b&j*wz+2_lSm`j!XHgx6 y&r<S[.SK2 _3uOjI2q!z');
define('NONCE_KEY',        'z~V.&Id{|n(&/L-q.FQ;3{>y:_2xx*qAp)(iRh_gO5*=[>(n,Gxe5P3M8Q&}!w(Z');
define('AUTH_SALT',        'RtCrFR^o]qjx*-v?$gC{tR)&,+z]>ZfA :.H1we?kWpR6xFy~tbEI=+gVk;mmYda');
define('SECURE_AUTH_SALT', 'mQF+@s_D~!#29@A6Y*/4WGx-qYD/12P!|<9@s[ kn_xY=^q^f+r?kn]d__+{3i}c');
define('LOGGED_IN_SALT',   'VNL]Ba`M3wbke+uh_@i%13e;CHt`<i0{#$6V^@}S{jm+M9_W3cVh%z{&;4l)`sf]');
define('NONCE_SALT',       'G^FB.m_}!1$-2X0p0n8(B?#W4188zncpOTV.M@)gPhDA7LFzdenG]hgWK9mEc{}<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

