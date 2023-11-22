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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vibetest_db' );

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
define( 'AUTH_KEY',         'xhjEpK`j]+f.zqW#aFPo]7E^*@&]j,TS{+e1UaH;2@8X25I|jh)nQF&/3w;yb?8$' );
define( 'SECURE_AUTH_KEY',  ']rzea!J&)<29O_e[PlYIA0d8|1liZpf+n:l4P5&UAU#YG)yrS29B@[fDe]s^U8a=' );
define( 'LOGGED_IN_KEY',    'EkWR-&zv>8R>S}$c^3$ Uvto-c+[V@/kxDrXxZs{ln357sZBmT=1;_/2LCr;jGXf' );
define( 'NONCE_KEY',        '506@pN4a(Gy*nLFY^SvRT7S0M4WW#d:o<in{Oc{>}V&)`UX?9D_JG<f,nr>vo?IM' );
define( 'AUTH_SALT',        'HE+29_1/Vs33VK[UQ65-GR|kH^YBH1p&qhczD9r+/1>U<V<_1O_k~>`Nkx|P^hdf' );
define( 'SECURE_AUTH_SALT', 'O}On0?6c]Q:>`ru+ss)ze4D`uVii>|*d.I7#$s-z<VJ^NVrv/VwkC*7+pYw-19W1' );
define( 'LOGGED_IN_SALT',   ';QxgG!x>_Co^H}wi*S20g>Mffh-LvhnRBmFWY+6v8$g)EYaQO;[+;#TyD?z}~^;Y' );
define( 'NONCE_SALT',       '7S)Y`>,z[A5<nTk^9:-8%mjXa_4?}|2sSOMOYljJ,vo@K<0.pY%`}E7(KKa%AZsI' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

