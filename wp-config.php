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
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '<sP;:/FY<H+`f@}s.?n{7_~w#Z;buzt|9eDm^N--<=dI][H}9n.#<>YWe(RGq{.$' );
define( 'SECURE_AUTH_KEY',  'LrGXjt{zDE#z=1>(Z+t7chgQ9Q@ft?&Qf/ai{vz9,*s [4^LE450v|S; !9$+g)o' );
define( 'LOGGED_IN_KEY',    'jKfUY?s*`~h}Q%QD/R3p3j.V99  BM?/Og&MVg3k(:c3swagN?CLY%4c<]cqf2Ak' );
define( 'NONCE_KEY',        '_oF63v(|RSWF:AgU2-S5eZ_zZ4?*D82AR3Y^J|Ix$6M/rV5;%gX=OYFLI2EiP%o7' );
define( 'AUTH_SALT',        'sSwvP;^D&&;*g-7+uz/BFm1uH_6g>vnT.[RRp^R{l4@:68-mS:t@,DNai0KGIVmB' );
define( 'SECURE_AUTH_SALT', 'g9&K`c0*Gt0|Xe8Opmb^u3($II>wUWal,<V_ulE<m~f+=//rAz49t(]WIZ{w1JLp' );
define( 'LOGGED_IN_SALT',   'mLo6,@|^2z<L42-NH1vTB,C1e9BXmp*d5%R!`n6y1/>/mL|(CGeoz)u-NN.hd36z' );
define( 'NONCE_SALT',       'vQ5AZzT%0FfsaVU4)z%mH`l5S$>d5WDnbd:J#7!Kl~2Tdkl%XA7GtnGf@=WTYkVr' );

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