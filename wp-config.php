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
define('DB_NAME', 'casbah_dance');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_OtX<>T9;|U:4RZwb-[F+WfG+V?F6h1E/t)X_Hk=V=KIWQj?dXs5+*.P6JdXzRyf');
define('SECURE_AUTH_KEY',  '}5<ln-7e9-jb~*+;d)X&2Xi}X_AZ&v|.u-}4UHZXh8t5JEWB$*eDK~LjlC3!8O =');
define('LOGGED_IN_KEY',    'C1WKI_ZMzZM[U8a+yH4l~tksO-hzivXm*f*x=5q9N|1jbgLDP{x;B0TTne*hB=V<');
define('NONCE_KEY',        '~)+Y~#vZ,*IB&l.&r[]8UCe<3)&H-V}??gco`3BJ+_La7unU9!,Ut|ZO&U5-A#A=');
define('AUTH_SALT',        'l!~g)mE]6zHO_b-}aaW/l|0nnR#0lN-f#/7F]DzK<b#?O69!.IfxU|{R@rmJt+hb');
define('SECURE_AUTH_SALT', 'y%slbrqhJ5NT(=f(HdZ,Gn+SfNXJtme8M.>qe!*|&v |h/swhKZvhSaS+e.eBisz');
define('LOGGED_IN_SALT',   'j?)i9H-Y4J*v3mp]j?,l~((4deyu/kk-%M=?p<a-fyK@c,u@.^S6ra-HsW:k>?zP');
define('NONCE_SALT',       '%J8UY;UPii~w}xW)Owuvp`; Ov 3?/1vgd}wHEwS6+PNefyaM=T-IA09yI&:+)-^');

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
