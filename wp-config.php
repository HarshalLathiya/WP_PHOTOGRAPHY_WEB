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
define( 'DB_NAME', 'My_personal_web_db' );

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
define( 'AUTH_KEY',         'k,0@C1Zt_lG4i7}7<rU`/{T7c3Li_$u9{n8>l!exW%c0nsz8PC|Newmd@<XASA6m' );
define( 'SECURE_AUTH_KEY',  'S0ubXZE^7<2/r+Rjcb<m>bV644a% ,_5fRv;w^WC+9&Uzc=;<o}srMEd>i9=2(bV' );
define( 'LOGGED_IN_KEY',    'Q!G4ltHTJ5tHX<V)yyE2eW(v Lt8`j3FXE+eL;gF{8?< :]QnE*HMcPOA00mQhBJ' );
define( 'NONCE_KEY',        '2t}s3iy6U@Aq$fvi)3a;Kv7:1K6a&jP{CW5R7N*HHo[ ^A5 47.2T3kX]-yE<*p1' );
define( 'AUTH_SALT',        '7*ViRi*6:L!}W,5[%gDY&+B+L$;4L H1<7MsX)t|o0+~;-Sn@~*Q&xO2  l]grWf' );
define( 'SECURE_AUTH_SALT', '-eo&tRo;FZyZAvy(],$Y_HpsKPg+t:&)`KY>mqQ|?K59Gl`,VjyylRY6_XaNjj_l' );
define( 'LOGGED_IN_SALT',   'Ky%=Gghh4IRb,7Gh_xl$I|?l&,ua5RnXJRm{L5+OJ%Zt2xF)1tqW)4AaJ0.lRrqW' );
define( 'NONCE_SALT',       '<gu^@>:FGI1;pr/711$gBfn=M<Am[9`Z/]a-eMb1FXncL-R7{pS3<SFUTLQ6Kn<3' );

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
