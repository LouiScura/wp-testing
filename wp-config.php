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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pura_vida' );

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
define( 'AUTH_KEY',         'qJ5+Cnp1c.wsW-Ghc,$4FvjX`7ye9tk+2CBl4sokt0fmL6a#@;]76>Kw4IPFcEqQ' );
define( 'SECURE_AUTH_KEY',  '*k2GPoj2,i69R!{%a/JI}chRfXHR3NdEzCo}9*+Y7Iv3j^UyY+gKfd]1 PP*h2k(' );
define( 'LOGGED_IN_KEY',    '=Hr|vNpkwfaWy*;0L#9YXsT%[$SwBA7S^:&+b*>2 >gx965ZmsVvHRgvq>mDLnq$' );
define( 'NONCE_KEY',        '_R1GYT=`L_@[v8GI@4G5Yu:N:$~]t5f,y4]decVS,+W~Zzv6cE7)B>&&:s?haL=4' );
define( 'AUTH_SALT',        '09vvX8hZKjM,I[K<ZH1#I9J~Mk|tXs~KV7S92)o{Bi]:/pq)r6{*!2mQLzUN(-au' );
define( 'SECURE_AUTH_SALT', 'sb2`:;L:wwV(i3(esz,r0=p|Sldqgc;AZ~?4r*?*+O1`K(M+X&nY8|DBtWF|sXmv' );
define( 'LOGGED_IN_SALT',   'i N3GhM4/X9CU4pcr*Z*bEE6w1+[R$?NU`X[?E=+&fa)t@pKQ8-lm`}0=0vZRAub' );
define( 'NONCE_SALT',       'b@g;&?5,B6NoHjejBO|stMoj?d](lw7AV!W1D9R,C>?*gGvRbjx6%8b*GhD}m6)C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('WP_SITEURL', 'localhost2/davis');
define('WP_HOME', 'localhost2/davis');