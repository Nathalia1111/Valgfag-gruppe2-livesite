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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '/I5(kcgJ+Ps~e|SRLre#e>Smkkr.?8g_G;)aw1!S+74:C?>$gLP8)eBy&U-Hy:kK' );
define( 'SECURE_AUTH_KEY',   'Q5yU#/2ha-/#V`TA O@VOsNqalB%@ur&hm)ABfJ#fPY-BSg;5Y{fJ=:GVsF4V^H+' );
define( 'LOGGED_IN_KEY',     'd1E3sgElj?>W|+s,/Zwlc8,y2adIXZLKM`+.33aB*61c*~sfHsr=mH=.{3z|za]e' );
define( 'NONCE_KEY',         '|/&yo!Q:+RGPJ]>(2wn-aN0b~qK4[I*(_#>hF5$F|k3{EM+%NH*0,c&sG+GB/rwO' );
define( 'AUTH_SALT',         '`<}tA$Z5Ns:15UYBryUZlO+Zik[b*Lq/7k-V:f[bwbU^xh9NO,NntYn}gMDq0]<W' );
define( 'SECURE_AUTH_SALT',  'PH4@R%Hw^yv/xAP0DUAnVcq#w%/+Y||D}VCK`VMOvX^$2uxSCn3dj:/vB?nx8>a9' );
define( 'LOGGED_IN_SALT',    '^R7jCgAMfT;HV2[JGnkO0`0[URC*9( gfku:U.>YBIot%Fl`V+o}zbk!%psd%YzI' );
define( 'NONCE_SALT',        ')Yf4,e!HvTZ3us/X/+V5(@ho fA0C$<Fdmyz: KTnTjFWej58;@FwB;<p1I~3?:]' );
define( 'WP_CACHE_KEY_SALT', '(|.ri}2u<)y:ak~KQ.A3=37O$1r8XQ+$h.@6R0*0$iLkXo1,harca5{N=!;}0dhp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
