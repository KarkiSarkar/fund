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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u999709570_migration77' );

/** Database username */
define( 'DB_USER', 'u999709570_migration77' );

/** Database password */
define( 'DB_PASSWORD', 'Zakaria46123!#' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'XU*PGSd!Q5ct(2o#c>>?P/;@J^7W@bU|TQVilN8Z};Ro8ng#``AbE`.]Md1/bkLv' );
define( 'SECURE_AUTH_KEY',   'R|9zJDWKv9W8#CNrLlfFv2ySF`qVm5iBPkkD }h#d?/znunsnRic&5r.{veD)]9L' );
define( 'LOGGED_IN_KEY',     '6/k7{@-#2UQ*-=X/BqWROX$7!y[JmWL= ^ke8ON<?$#Xyq9-TbB^Bsq#nFBVKe*H' );
define( 'NONCE_KEY',         ':Zs!|]^EkTly(TAt:g!k?KSO%p1|H@nvr)|Pb}[P<@$|r<DN{z.&E5Sr8fM6^:7y' );
define( 'AUTH_SALT',         ',}!p4%I(&:2-r_N`CA(8;IsMb6QJvGyvnq4dYi9`X0Jk54<NAK**,`sDu.8^Gmo2' );
define( 'SECURE_AUTH_SALT',  'w:V2}4q+)nWlhI0dUU[za|,6R71G#H0FS**.p}uJ?PBlZnZG$Zvo+b=siwT/Xn~:' );
define( 'LOGGED_IN_SALT',    'BSIKX]hJE-M[8p8@u@|)Gqum6!~Y02bCMU$-q|{GkDWVIr1w^>GJy=pR60uRqiXJ' );
define( 'NONCE_SALT',        '_HuE2<<1s+0dRWuzDm&401}ta`-zW!|@g9k-J{LIaSO6$,<fl}1eCScgTlspB_I%' );
define( 'WP_CACHE_KEY_SALT', 'D*QcmJ;1[#wz<;T;C Vt%>SwDHl^<ZU,3ctRaA^?Sh=Bh:u`+ i*z77+rhq>Wu!v' );


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
