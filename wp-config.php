<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_restaurant' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Vw5KvOQf>d2bXmeaI@W/dj udKkHk]6s;jU[H8.6tG:* zlcig:WXP:+&+I%n}(f' );
define( 'SECURE_AUTH_KEY',  'H#V48DJ7>9gKjz|ifhOK|v?k{=pY9rR&jMZZ<]z40FJ8UD?ZWP2P_G^7*I<;3>jD' );
define( 'LOGGED_IN_KEY',    '0?%5jN8h-fq- wfele(H)%D<e35@vE67FAT5373He%dJ4SFpG]QZgA{gn Qw:5~;' );
define( 'NONCE_KEY',        'E()O#02 Yd.JThY6i K_(%u@>6$c`o#lF|NqtYOeH{hhgM[Xszm*pk<-$[hTv5ot' );
define( 'AUTH_SALT',        ')&rl~70ib@(KPk7F;N,kiFL*o]KYI9IfjHyP/U@+<*i}**UD$kYIcelJO>n){?By' );
define( 'SECURE_AUTH_SALT', 'MVwMT2N]zvM!WO.FZF{aAp`m~S*Q(=Vbb}<dxX&p.ewIx{tmSpC,Oxh-t;>_VD1J' );
define( 'LOGGED_IN_SALT',   'Tx#Zo?-Woo}V*6+(TDbrzmLG]r)-NRTG`q?VKd2-MiKVw-!<E(WwH=iY$)`m[j%:' );
define( 'NONCE_SALT',       '+bdToBF8mY7 d=)HJ_pBTWZa:V@a^O]8 8_HV11.7)k6~J NlEg6Y-tyYf<e-lPh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
