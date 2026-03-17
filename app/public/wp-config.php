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
define( 'AUTH_KEY',          'x!<p~KQ#0|!_uw{,H;i8w:c<HP3KriHPRR$&0X!T7.SGMf+J_o_4C1aY2`~|r.6_' );
define( 'SECURE_AUTH_KEY',   'Gh/@W]nfd5N2i,-x>nHN3+c9,i}$R/?[(6U+eGz<US*]z-_H)K7<#D]!8_tb]1gW' );
define( 'LOGGED_IN_KEY',     'l W/m1IaZqqK1~{I~yWWV^:ss8$<~)LBevg*^U_@h98zc$#pt@tJA}aEO4*]^Qep' );
define( 'NONCE_KEY',         'D)a:U2h!eTy8%nIKh~$VRYw=uD^315_2v1ftZ_[(2x|Nv}rn,>lIWAG<^y(Es%f8' );
define( 'AUTH_SALT',         '{n*NsFl-!pN>ek-dm7(WP2VtWb}MI%k+=R1-iOJS):ge=c`XpW}NER&Sq [tvG}r' );
define( 'SECURE_AUTH_SALT',  '0fi@`d]iTy#lu7#OIWcA/i%<*F0waN<<Vf:EVXB_=a/HERKx0RrN*htTk8fVIQ0S' );
define( 'LOGGED_IN_SALT',    'HnB>&|Otok*AeEZ?ytY5Qw_}iCS30)XeN(3@|.BXRPM%EV|>|2kxaamZwN%uE{q3' );
define( 'NONCE_SALT',        'QWF7f+WC3zAx*},%M`fTj2<0Nklj9rj6;fBY1%/|mS5]PO9V.(uXxf!n>>&_qc2j' );
define( 'WP_CACHE_KEY_SALT', 'RP&~)($q%w+l}g?e%cvz`&/6@84:z.P,-hxcxs3i-hZtbp9Z-`KmRH{i/S3mXdb ' );


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
