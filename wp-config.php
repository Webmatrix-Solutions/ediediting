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
define( 'DB_NAME', 'ediediting' );

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
define( 'AUTH_KEY',         'Pa7}mX:>{)*{$G ;l2QfICo:HSO4eD]K0zX:_t=m1H=]hnG.DPdd!|`H(%x<fE>i' );
define( 'SECURE_AUTH_KEY',  'l)x8+Z2]IQ*bk;91(}GK;6Hzzdt)*VURh]}OwJ_5t+o{P`XdhGRVhl^<oImaZHA2' );
define( 'LOGGED_IN_KEY',    'bifrImk2&3GM@tu9`dT``eA!Qm;:dU@$3w4(F]8j+2jn<s|H^%7>Ns:7@in/_f}N' );
define( 'NONCE_KEY',        ',Y)9B=fB lY6Ue(#CG=:z{_9_<9@;i4s1+/J;X:./g:j$z5_1>fN4KrQFz&k.Yp%' );
define( 'AUTH_SALT',        '#c2>a0bB5Usscl;eWL!zN+OZ{s`<?Q^VT*w?#xsViChRq+(py{I-*!lr~]Buw]Q6' );
define( 'SECURE_AUTH_SALT', '=Xz%QvxnWPW0wGv,-|%CI%?dxbHN,Qt;U$Y5S^0C`q`}5^u@rF+<$bF$JRIn6KKT' );
define( 'LOGGED_IN_SALT',   ',8y=)x_II<&0VF(l%#B`)fK#Q0l*lVuWB(U;*e)!a4{7:SbH5h8tMP|ZV=R]!b(J' );
define( 'NONCE_SALT',       'QFBa_pd_G;;)Zf0#|j_o4.8 *|i 92!|S$!S C~aO<Gl7dPzI$<YFR#yCH<d(W)@' );

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
