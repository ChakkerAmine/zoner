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
define( 'DB_NAME', 'zoner' );

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
define( 'AUTH_KEY',         ';]0`h%Fo0o7DfCo%L:<,3J~L:Z:sx-7%MoJ0FV+d~[#b8pz2j0ITI3<<aOG*+5r=' );
define( 'SECURE_AUTH_KEY',  'ui :Y#,b3w8uu<WMxQ=I.tOr%LWz1UryB-ME*[1N-KyG(n~236oojyIO8<DN>!A?' );
define( 'LOGGED_IN_KEY',    '>;n*GNS^Jb?n7h!<.eS _rbgVe,hU]Ni#::B;R2WN-}rj[TS!72mimq|-AzWvfNj' );
define( 'NONCE_KEY',        't{11%6a#3mZo%cLM%Gx(T0McoL^WF&.9u)- r2QFE/TRC:/L%`o$CBI8&`H5Mkfa' );
define( 'AUTH_SALT',        'mM%3ym]dAegi2F{.DEio8Oi)(?`ZW?E/z>y9^uu4H8;^{,mX LY47T3[&ydeH,<7' );
define( 'SECURE_AUTH_SALT', '1[;~MFd]6%PQZQ3g^sNSm$ mH41>hxkp4W%Z[eJs+NWT(z9|e<U@4+N(afzUoJ0Y' );
define( 'LOGGED_IN_SALT',   '=J! ;_=V`b;[_*|&,$ZT9O~Lyc=;4j/g/[3s:;gvg=H!ox?Z:Bwo+-#z7yp~,[s4' );
define( 'NONCE_SALT',       'G(Pe&1d.cN6U7SH!I7kGE.SuP2m7oOU6 Ap)Z;VClpM<EH]$H#k;XV Y|R^pY#j0' );

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
