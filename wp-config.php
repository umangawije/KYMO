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
define( 'DB_NAME', 'kymo' );

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
define( 'AUTH_KEY',         'VO }r()rLZ-8j6_oVRkPn??ba0}Ny}x87v,1?]BMs 8=my;A/~bne[CvY_Q+W2R5' );
define( 'SECURE_AUTH_KEY',  'UU}z<Nh4Gjp{gMOSLe>drhr~4X]z^ HSPq[~iN|@2$~hWs1NTf@Qdqw_eW:;WO-C' );
define( 'LOGGED_IN_KEY',    ')y_%G4aR,j!&nSgu+>To: PX q~_%E y?Ctt434!BCzvs35;OwqbxBev2*&-eP!O' );
define( 'NONCE_KEY',        'wB1ZDmWu[9hcCT!!{cklkjl|+la6t 8s(wJGb`{+)PJYm<MN&CuMfPmh1>M)/$/[' );
define( 'AUTH_SALT',        '%yInLGvCiAz>,dzdMi&5TSlO3pN.U&-+}ooqpfWsL3Dj+=$oRJvu2v;@kz5aVU:f' );
define( 'SECURE_AUTH_SALT', 'M%%kyYH[i-&3mD9)O=~/um>(c-;*r0nA>JnAr~NRhs:5wm.}>>}8gXBBt,vz)g=P' );
define( 'LOGGED_IN_SALT',   'Z,yBwS>d`xBq(DsZU%lW]-( Y--Yf/pAX|OP}p.(^yKr<{z9YM3J&eH`] ~}g=,v' );
define( 'NONCE_SALT',       '_ry 96,Dl9v|)Ejm-@SN;$z@d4R.wuaB:U|UOI2*,MAr@WKnNOYhhj l9{Ew#n6x' );

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

define('FS_METHOD','direct');
