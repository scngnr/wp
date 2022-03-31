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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'scngnr' );

/** Database password */
define( 'DB_PASSWORD', 'Scngnr546.' );

/** Database hostname */
define( 'DB_HOST', 'aa12yeb1dm2adl.ccr044xvdlw6.eu-central-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '7l~{VQ}LleT9bB@xg3d0)C62H3lwpDNb*:Kfk?NOr`u~Pl`=ToybEW<d:{CM<-OK' );
define( 'SECURE_AUTH_KEY',  'W+hf^;G.CAXTgBzBynBm12p`-@Y} _ ;(V/VRT(mpX}f`B@~>09/ cjnv~g0OIvy' );
define( 'LOGGED_IN_KEY',    '}Tcs&XP[E_@H<T!4 2vL%.~pmw!Thc?(+-.Q&nbX15(302D;[|08cDcL{VMXMPMl' );
define( 'NONCE_KEY',        '`~Gtk`q>|(JJ^ *o[d=iE`!e5FJv}viwKD-{_$L+|^T&6b|Y a$?Yz9BXqXpZJw8' );
define( 'AUTH_SALT',        ';|FB.<f)`CJu#hM9dH)>iAB78=n/1[2#~;|}`^cHyeD=fjKZuiLAFp44L-wEW9a7' );
define( 'SECURE_AUTH_SALT', '+!wa>99RAT+ww5-~5u6@N0yh,7YSt7$@PB&C,jBfwTG}w,6ZY7,;VQ+f^r$w?}}a' );
define( 'LOGGED_IN_SALT',   'U F[i?/1+U+;Y[<~H^!8on$j~7p8^c.)Y&:)@Lq_ln9M`*Y>CKe,-l@o(L]`E[=A' );
define( 'NONCE_SALT',       'U}]Mrt&(H$AY(BghH1#[a7Fo(T]Bpg5,9@-nHN3>r`%9deJOr?:rE>[ww!CRlCd%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpc_';

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
