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
define( 'DB_NAME', 'portofoliodb' );

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
define( 'AUTH_KEY',         '[5%u>l-ttYe:tJ=BQIJ6YBrJDLn4,r)+BuyLY=A$BK@lW$1EZ7iCEa=D@2<GNL0F' );
define( 'SECURE_AUTH_KEY',  'IDD|K^kernH6(8(bo)3#P22juW,Qy@s=i+#,U;LuyNEi oZtH}}BlnJKUKj_jl*&' );
define( 'LOGGED_IN_KEY',    'MfW5EpRSJchh[Tzbd.UIEh5^p$ST&?<q;2Ryo?Bt~`s6&eRQY<|T]n/.lDf*+^jx' );
define( 'NONCE_KEY',        'IxU?N-eJ=OENHz#:1GbMf26!mxGL&y_>Zynw}uZ,P?2Pya5*/j`u$> , ];[5 ~4' );
define( 'AUTH_SALT',        'OamLXHr]xs6c{[,:WIC&0EKq0.x&rI6JtMFvE*Ne]t3P2PItED)_m3Q~D?OGWjm7' );
define( 'SECURE_AUTH_SALT', 'MfMqK#uM4rjT,[8C<?QO!!^B[1`-kz`!RkduHft]2dS0<>s@JS=p55jnG2rDBhXe' );
define( 'LOGGED_IN_SALT',   'up`n*tiK/GRt`41)<OR8_@WuHTUVYmAW]SU+bKe#yAAv~UX0f(di5|34%YlKM8D)' );
define( 'NONCE_SALT',       'gmp!&)AsU>Yg4(.p$>`#`mrkac?KtkN[uTU:?sS4CC@G@D!<l4lrpb-{AK@CU, D' );

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
