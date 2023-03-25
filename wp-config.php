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
define( 'DB_NAME', 'digital_db' );

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
define( 'AUTH_KEY',         '8vB01b:=Obuh#q=,~`6AWMHR4e)e0Vz 7^nvBM1FvNDjY{2>V|U{Q4$2,Vf4q}n/' );
define( 'SECURE_AUTH_KEY',  '^Yyrw//r6E`]= #->InV0AVuND/1Zd0x%(,al4B6@}M:}jSmusV(!f8TZ1?GRBVi' );
define( 'LOGGED_IN_KEY',    '+d9tJmC0YY1dcQGuVFu ^|c6G n@umeeHJ{g7hr|e8q?Ra[[)y0pIAt_WnIG66pD' );
define( 'NONCE_KEY',        'R2c=cwV!mLiH f>m@x*[6vAP4yo^4Jnv% B`|yd`5.f!M~L;R,]kz;1p&_YT6dsy' );
define( 'AUTH_SALT',        'uqx3fTmcWNkyY,2;hr=A[/+MUNh$a*/:xm_xT6XjOnJ0r~|@Yh/R.xN=7rn+PX;)' );
define( 'SECURE_AUTH_SALT', 'y+S|`cc^} +(EO-b-CQ~QE^;lK2#l0`9,0da8zt%R+onV:>}{f1nr?]a+}5iG(IL' );
define( 'LOGGED_IN_SALT',   '(|}Cg,!wEi]8I%;X1|>$+vrMyIZ_~#}]L/NAAMbf!. H1DFZ+*cmHU~+%z+FoIX1' );
define( 'NONCE_SALT',       'd/Ob?~N0_,?&Fms(`ykt14?l)n4hPxERax<M6VP:2k1KTYfxOlEM<&k;fxy`r{B.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_digital_';

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
