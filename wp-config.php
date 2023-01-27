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
define( 'DB_NAME', 'u123992336_atmoswebo' );

/** Database username */
define( 'DB_USER', 'u123992336_root' );

/** Database password */
define( 'DB_PASSWORD', 'sxqNK3!5g0UI%7N3x^' );

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
define( 'AUTH_KEY',         '#UrwFSE3Nh+ct_$P&j{T8s<`hI:>|k8?m.pcB0maWe50zX;DOK_kecMxZRS5E`=f' );
define( 'SECURE_AUTH_KEY',  '6L,ynoQncIlEd|@pY%$Osu{VP,PIcS^hufN/+tC0TTzZrr$r1Jg}*E^YO#gN|@Zf' );
define( 'LOGGED_IN_KEY',    '@9T@J+0R@:NG|41.3gU1sE(N.:X:*+Z1+UrH mSv^I)hK51o4:`RfV8D&M@&QfL?' );
define( 'NONCE_KEY',        'Be^9516a <_6d`fFKv9jv$PGLWS_W>zXYr^`ld+p_,GP.uokz(bgurmA5(74~^}O' );
define( 'AUTH_SALT',        'O*db:);f2<LPk Eg#:i9SY`*}euR]azJ}8FX1/%$gS&GP8md#::fb~P.zsnTE6>I' );
define( 'SECURE_AUTH_SALT', '~j*mT1tTH M5 VQ^>y:c~=jGU[*]Dbp]}+73`Vw:YBszy`<GN~~pA08)1*$0-e8E' );
define( 'LOGGED_IN_SALT',   '-#y S(@Xx.t xZ|2P(u}?W)<azU2%3v0;m$hOv|RHllfmE&SBEB3.3iY;hD8/(Xb' );
define( 'NONCE_SALT',       '[m IG~+Irk{K5H4]maha>0)DumSm?ThLt5f#V?,CP} @M^zx,?ddQgFFDp=Rhq*x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'atmos_';

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
