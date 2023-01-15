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
define( 'DB_NAME', 'shantanukhond.me' );

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
define( 'AUTH_KEY',         'TJ&^WmCF},;q%*+n9:,HK>],mM06`hZv$|*?.8;|!?82DBvW<; kI`MG2 $O2N_t' );
define( 'SECURE_AUTH_KEY',  '8-FF[`B)q5S]An~aNK?j[yryOnIP=NcAQ>]+eUwa$$9zcg7UMJ]pedGQupbN;OSB' );
define( 'LOGGED_IN_KEY',    '?0NqxSR^uw+|Sy` &SnFWSnu$gVF9{(Jo`1;.Y`Sp:{EECtZ2,=[5_5[=rArf{{}' );
define( 'NONCE_KEY',        '8k!x*%#JC`O3~^7S<cgKz~{nMA%.Rc3wy#sVxZ$XKiD}s:5t!WSKa.=zN=:6IP^z' );
define( 'AUTH_SALT',        'w%|aQqZ`:9W*.-.lo$y}S^8i0fUc_~uZ>fdp9[dPK% W.[U;H,Lj{%W5.S^-kt A' );
define( 'SECURE_AUTH_SALT', 'A&(CujcOZT~QGMVRJ%*;Fs5|w/OK|/0+7L)Gp ,APi_^+AqVAB-<k]3wvfp^JEOZ' );
define( 'LOGGED_IN_SALT',   'cu4i@s-rkK6DOuu)sDcE%emK=m?i3G=%HXL@Q;!ZPd!_YJg}#T jB#j:vt-1rbMH' );
define( 'NONCE_SALT',       'K?uNJt:os)& <&o>l9{1_.>`.2#=dwC_^6TL$})ix,dCLHFvkm5cZ:W00)J6[AwJ' );

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
