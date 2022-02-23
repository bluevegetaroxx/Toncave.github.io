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
define( 'DB_NAME', 'toncavedb' );

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
define( 'AUTH_KEY',         '}wp,dD).j=^l&nn9/0<VD2Bn2_[]}*BscM-6l;%|A^ov.KxiY=Zu{exmABpj[~.J' );
define( 'SECURE_AUTH_KEY',  'T2*8T%X(UfEk%6MlFshG>wu/.4##uA,#6h?sTXQ/epI(9&v3!tSr=I/MMh`Hq{./' );
define( 'LOGGED_IN_KEY',    'j`;Y`i2st{WNom[U{R&7JCbJ>L*Ec ]tznHrsG|BTtaYSu;y{oH|VGBEH0Lzl6kg' );
define( 'NONCE_KEY',        'Cm.S`4Gvjg1&x^;!PPH.CIyh*|HxYS&vA0<bS.xf@h5NC0IQ~_JJAvIv5d5&yVtx' );
define( 'AUTH_SALT',        'IU%{V~^ya=`.?O94)Ihx$6pQ#m)dEH,;-(Lqj?/}M&)FrG^|?RzG,_9tue:I-$*3' );
define( 'SECURE_AUTH_SALT', ',EOxbZ}k>6y[%-9cO1rfGIvvi-2i-IZOW|CWR*C+t^T?:nj!mcNe[tT0CF|g?8U#' );
define( 'LOGGED_IN_SALT',   'Zrg|Aw0]%OICSy<31(0u?RC?CxkSiy<=&Qi+>$v+;D.1Wg7,i8g~.6Pt;gN2qbS^' );
define( 'NONCE_SALT',       '~rv|ZC-ZVr~_qO~]u}>Mut{8A*=z>=5<z>Jf,(qu72L:r% R/x8{{y*dmn):;crT' );

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
