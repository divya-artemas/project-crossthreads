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
define( 'DB_NAME', 'crossthreads2024art' );

/** Database username */
define( 'DB_USER', 'crossthreads2024artur' );

/** Database password */
define( 'DB_PASSWORD', '?~(=A+Se+YPX' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** SVG Support */
define('ALLOW_UNFILTERED_UPLOADS', true); 

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
define( 'AUTH_KEY',         'Sfs.beba#)S2&Cq,$e83aMgdd*^V$ASy:`d$]3WZMq Te)-?,fiih08QZv!7l=WM' );
define( 'SECURE_AUTH_KEY',  'nw/^aVg]syxZz3^/{- i@Uk_A&S_b2fOWL2=wFWTpH[%n!A6O*Or#.G]>V]68@v3' );
define( 'LOGGED_IN_KEY',    'Y0YWQMU;h[*I.]{,%57hf!/PC4`D Zc{NmVA)f}t)_23&$>.`bpc([4+jmE+Ghw@' );
define( 'NONCE_KEY',        ' ?@eV&J}E4cZn1(Fm+%8f!9mfU`NIEwki+DFDolCZ%KG?H4Isd,yZy57+RLbvf7e' );
define( 'AUTH_SALT',        'GD@@FYT%:+$050WCE~Xc(W~{*Ai5of8?sLigPOfJU]jx?5Af+W{4&>,`]EF%[l$I' );
define( 'SECURE_AUTH_SALT', '`kaT2QM;2Fq,I;T@;NQ`=8]nQsJKd{c/n-AR!,tZplTuJURO#/U[@P%BZOjLZ~I9' );
define( 'LOGGED_IN_SALT',   'P&d=_dfx0#BfK[o.[55=!7^,SpV?sSW+Ok`FtNj3337?E4Lt!r2e]foW2mJz:>=W' );
define( 'NONCE_SALT',       'JwV%><wD-oS!_OF9${)=mco&G:]|xp+L%@lE1qh6gFhxK{y5oDF>pa;S;C2I7C]4' );

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
