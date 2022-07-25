<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'filidiaboli' );

/** Database username */
define( 'DB_USER', 'administrator' );

/** Database password */
define( 'DB_PASSWORD', 'filidiaboliistrue606' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UEU|Hp1su{sg<4Xy(6lD73QjSG2&}r0yAT1]{i7bEP# %[@?{QoS2ZMGfqm|cFtL' );
define( 'SECURE_AUTH_KEY',  '-d>g``Gq>eoU*Y5W6QQuKOehqYl]x{rruh>/!R0tdQ,P{@a$KV$%6<4I/ yna(BT' );
define( 'LOGGED_IN_KEY',    'v(1P.:e9hN=e~=f{-%H/If #EA8C!A$E;]kihYG./lpf10Kv!|1n~*0,$.qiLUW`' );
define( 'NONCE_KEY',        'U~xOTp_, 8!:2tV0@x$d~OhUKr;T_[YF-!SrCaZ+NE2q]PxTy_?:Q&QdJl41vHcf' );
define( 'AUTH_SALT',        'fo/i{bj9eS+FfbJ[{a_Hdsepd/p!ORo $q`,.W`<1=mH2LwT7W+!8WF{;s&6Zd>@' );
define( 'SECURE_AUTH_SALT', '!+~g@,{sjl(jM/hs+y:V?3d0H?x[rNKACRaTQd@8RZCsS5~g|3xI161p?^OJLXuR' );
define( 'LOGGED_IN_SALT',   'vyR^G#~v)[@hZ6:O|*~YEt60D$%FdXBb8>l;^t+@k.RgI PY*J! Ae?Hbxr|IFME' );
define( 'NONCE_SALT',       'i@d~O*7le Yb~?H*hoC#6^HOt}V&1;:0f/6ms+K^k#P|%a>Gm^V$Cm*6Ssr<H|Yy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fddb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
