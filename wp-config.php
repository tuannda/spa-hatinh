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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'j@|SZA},..Y{u_E,.dg~oXu9vedmCU~B_Qv!MR-0+rmu(bc=QH)f LNUeXu)]c{z' );
define( 'SECURE_AUTH_KEY',  '<IU89pCay6LS<nKJcvylS$BP#L$7*`pk~]l/,R[ip=GUaLp[O_#GEiX9c1d9d))C' );
define( 'LOGGED_IN_KEY',    '% E,9*>G)m@RN?`F.!Ho;y]qH8W_1orvZ;zz4[AT)]2>?{)&=<h|r^^WS=tBZMEA' );
define( 'NONCE_KEY',        'tW4L.|z^w)j`6dqpMG^fsRplvf:W~XDuqXUyJo$Lin| .w)>VRbyD/zs~OPeqKyl' );
define( 'AUTH_SALT',        '(Vr4UUmLOo~RD +SS|/HyW0rG i&Dg~W/?>Co8nl`i>_s=SNNEUX8R^BKr.z}!@H' );
define( 'SECURE_AUTH_SALT', 'LBs,lV6y)QVN72~+-2j4z@9{hoL>!5u%[_VCve#~H#Y#$K1*guaEbZP!kL^qFe^b' );
define( 'LOGGED_IN_SALT',   'eFS`b&H*cfYnb>^f74)FQ%>ssm~C8U]O!N/NwG`WKxs[/{GSj?@.hnF);Lz<AZ<>' );
define( 'NONCE_SALT',       'N1U)~jB|a>IOWSNPm0cj<lH#CspMjm~[J.*wr%!G$D4/WG4b6|t4bnAL 2Zs_/g:' );

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
