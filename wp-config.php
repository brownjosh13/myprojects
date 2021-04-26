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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecomzxc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',!aeqS%i|[Os{4C4N7zj0K,_3QvZ*19Y 5/3J8B{}&Lyic$|du^4_&-eE@(-j0Rf' );
define( 'SECURE_AUTH_KEY',  '6sA}WVpf4k 0FheO]I0mOJD!:(b*vzW0;uT3f:1Ct+9:aGPDiuA ijxTM1 rid)l' );
define( 'LOGGED_IN_KEY',    'SXbc|{CpZ}VQIx|Io@+s3d6>@AOEvFAcmpwS{D<<Mu8{B3fAksWNmsA&doG/()XG' );
define( 'NONCE_KEY',        'R8OM`O51cW&1 l8R^i#z/zU+shdp~fO2*rR{P.#o<P@H;~vA <%nJ f.rL_vYc|2' );
define( 'AUTH_SALT',        'sHZZ:09>;y0?*5ZzS$?25QX>nhUT})7Xe5`lhO&1{b*L+l1p6;G6[kbHwhiVv?lj' );
define( 'SECURE_AUTH_SALT', '{$`IkO*JeO@k^1A=~gCSWdMQ1TWK,Hdt@#8Z.65Kicu.d4/Exo4&}UEc.S5]sj(f' );
define( 'LOGGED_IN_SALT',   'Y,{8V<LA_vSNuzZR(J:O&PW>As(c0%f_A~^0cgyNy1_EoVGNIURaKhMH)z,MFz)2' );
define( 'NONCE_SALT',       'l{9qMh2mi6PgKh-E_$y!4~^zE~V}P<i1 :-TnfA]jP_uWKjz>}gvKyRnBMgr|bjJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
