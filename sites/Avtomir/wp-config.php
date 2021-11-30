<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avtomir_dev' );

/** MySQL database username */
define( 'DB_USER', 'avtomir_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Andrey168' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '=~s[hx<[F_p| T2p2W;):Axm-_W8DVM&!/8mmoe7w^$xqlerP=2VVj#Q]lE8GBLr' );
define( 'SECURE_AUTH_KEY',  '~{*ns?JpO#B}4<~)9}yFNxsW(nsI#8X62Y_9.eT>nm0%~v/K|Gwxg1-9Y!BfBk#8' );
define( 'LOGGED_IN_KEY',    'u6}{JE([<7&};2lHY&93_OYxsHY?S3fk3[di[Fe?2S0r7L 908IXs|9C>i$;RLK8' );
define( 'NONCE_KEY',        '|KOD]~#2@4VR@@U -+09ID~H5f)B!)i:Q!6nraAle.-q(qzn4UZ|/u3j7N&SE#nO' );
define( 'AUTH_SALT',        'T}gk{a,~gq.PArndE!Q7:os4@u#ftj`pu.xD#DQ>I?rxu3FRy0Cj]bG&Im%9&Sc0' );
define( 'SECURE_AUTH_SALT', 'MZUp:i^?:5,nH&L>QHWE^n7* 1,q@s+.u=}p(.8C+:vgT,41%[+=1R[1 L=6BnjZ' );
define( 'LOGGED_IN_SALT',   '-%Zw8xqTZ4Liht Iu9YX=`VL18}*bD?Fb@ykh72jWX@m9#!KCytNmMv7j#^OX~Ya' );
define( 'NONCE_SALT',       'GN2G_~f%&I(nn2j=o^Ko~0&8oLD~)b.t,= L/0o:s_Dm8JK(p9N^?U)8q_3|XE:X' );

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
