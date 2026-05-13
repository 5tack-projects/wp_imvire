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
define( 'DB_NAME', 'wp_imvire' );

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
define( 'AUTH_KEY',         't]yU!leQF!`<4/Gm.sHQ$1(nJ`C@$20gN{4!tG<.:U5rbxyku=83Z;M|@>Bf)@s.' );
define( 'SECURE_AUTH_KEY',  '98=gsQ(3~+Il.dBQndvgu]=R|E$y%,SrUH,Oa+c5xpro;BPO]qcwuV5_ML=aB.3h' );
define( 'LOGGED_IN_KEY',    'uUi2_z*w<i>9G/Q[sPqk;`su8VJt|AY6uErj/B@1YZ0|@u17+_!<vmZ:3^w.y-([' );
define( 'NONCE_KEY',        ';07Jo*!i>`es+eCKc#g@Na#TC9baFrDEXC3cZe&g]y]a21Um#]Zb*`,DhGGb8;W9' );
define( 'AUTH_SALT',        '@r469khpy1+_w>ju>/uhW]=?xv/:es%~b<]E>B][JQ?!5=_3QBTM^I! FB~J`^I8' );
define( 'SECURE_AUTH_SALT', '}GC`kskB)L3q`*5#?w?5T(Ph8?O*tQa6P@}HOGfCqWR=s! QQ-5Q]yKB.s`]$0P`' );
define( 'LOGGED_IN_SALT',   '%2T;n{DuL$X8!`N*=RN)TvB`{vNXiQ+Lfl`2kk*A7]Ip1}R;2jT-hjvYMvZEhAs[' );
define( 'NONCE_SALT',       'ufg#(#J-v5yADjetAU.5S|p O{WbyT^a/~:]CNNfo}qS/X;)]xrlg%-Cp$Wnnz=R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
